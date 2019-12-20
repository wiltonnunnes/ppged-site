<?php
class Pesquisas extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('pesquisas_model');
		$this->load->model('professores_pesquisas_model');
		$this->load->model('professores_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = site_url('pesquisas');
			$config['total_rows'] = $this->pesquisas_model->get_count();
			$config['per_page'] = 16;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 1;

			$pesquisas = $this->pesquisas_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
			foreach ($pesquisas as &$pesquisas_item)
				$pesquisas_item['professores'] = $this->pesquisas_model->get_professores($pesquisas_item['pesquisa_id']);
			unset($pesquisas_item);

			$data['pesquisas'] = $pesquisas;

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('pesquisas/index', $data);
			$this->load->view('templates/footer');
		} else {
			$pesquisa = $this->pesquisas_model->get_by_id($id);
			$pesquisa['professores'] = $this->pesquisas_model->get_professores($id);
			$data['pesquisa'] = $pesquisa;
			$this->load->view('templates/header');
			$this->load->view('pesquisas/pesquisa', $data);
			$this->load->view('templates/footer');
		}
	}

	public function view($id) {
		$data['pesquisa'] = $this->pesquisas_model->get_by_id($id);
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/pesquisas/view_pesquisa', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_pesquisa() {
		if ($id = $this->input->post('pesquisa_id'))
			$this->pesquisas_model->update($this->input->post(array('titulo', 'texto')), $id);
		else
			$id = $this->pesquisas_model->insert($this->input->post(array('titulo', 'texto')));

		$professor_ids = $this->input->post('professor_id');
		foreach ($professor_ids as $professor_id) {
			if (!$this->professores_pesquisas_model->data_exists(array('pesquisa_id' => $id, 'professor_id' => $professor_id)))
				$this->professores_pesquisas_model->set(array('pesquisa_id' => $id, 'professor_id' => $professor_id));
		}
		foreach ($this->professores_pesquisas_model->get_professores($id) as $professor) {
			if (!in_array($professor['professor_id'], $professor_ids))
				$this->professores_pesquisas_model->remove(array('pesquisa_id' => $id, 'professor_id' => $professor['professor_id']));
		}
		redirect('painel_controle/pesquisas');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		if ($professor_id = $this->input->get('professor_id')) {
			$pesquisa['titulo'] = $this->input->post('titulo');
			$pesquisa['texto'] = $this->input->post('texto');
			$pesquisa['pesquisa_id'] = $this->input->post('pesquisa_id');

			$professor_ids = $this->input->post('professor_id');
			if (is_null($professor_ids)) $professor_ids = array();

			$professores = array();
			foreach ($professor_ids as $id) {
				if ($professor_id != $id)
					array_push($professores, $this->professores_model->get_by_id($professor_id));
			}

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('pesquisas/adicionar_alterar_pesquisas', array('pesquisa' => $pesquisa, 'professores' => $professores));
			$this->load->view('templates/footer');
		} elseif ($nome = $this->input->post('nome')) {
			$pesquisa['titulo'] = $this->input->post('titulo');
			$pesquisa['texto'] = $this->input->post('texto');
			$pesquisa['pesquisa_id'] = $this->input->post('pesquisa_id');

			$professor_ids = $this->input->post('professor_id');
			if (is_null($professor_ids)) $professor_ids = array();

			$professores = array();
			foreach ($professor_ids as $professor_id)
				array_push($professores, $this->professores_model->get_by_id($professor_id));
			array_push($professores, $this->professores_model->get_by_name($nome));

			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('pesquisas/adicionar_alterar_pesquisas', array('pesquisa' => $pesquisa, 'professores' => $professores));
			$this->load->view('templates/footer');
		} else {
			$this->load->view('templates/header');
			$this->load->view('templates/menu');
			$this->load->view('templates/inicio');
			$this->load->view('pesquisas/adicionar_alterar_pesquisas');
			$this->load->view('templates/footer');
		}
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		/*
		$config['base_url'] = site_url('painel_controle/pesquisas');
		$config['total_rows'] = $this->pesquisas_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		$data['pesquisas'] = $this->pesquisas_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);
		*/
		$data['pesquisas'] = $this->pesquisas_model->get();

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('painel_controle/pesquisas/listar_pesquisas', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		if ($this->pesquisas_model->remove($id)) {
			$this->professores_pesquisas_model->remove(array('pesquisa_id' => $id));
		}
		redirect('painel_controle/pesquisas');
	}

	public function remover_professor($professor_id) {
		$pesquisa['pesquisa_id'] = $this->input->post('pesquisa_id'); 
		$pesquisa['titulo'] = $this->input->post('titulo');
		$pesquisa['texto'] = $this->input->post('texto');

		$professores = array();
		foreach ($this->input->post('professor_id') as $id) {
			if ($professor_id != $id)
				array_push($professores, $this->professores_model->get_by_id($id));
		}

		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('pesquisas/adicionar_alterar_pesquisas', array('pesquisa' => $pesquisa, 'professores' => $professores));
		$this->load->view('templates/footer');
	}

	public function adicionar_professor() {
		$professor = $this->professores_model->get(array('nome' => $this->input->post('nome')))[0];
		$professor_ids = $this->input->post('professor_id') ?: array();
		
		$professores = array($professor);
		foreach ($professor_ids as $professor_id) {
			array_push($professores, $this->professores_model->get_by_id($professor_id));
		}

		$pesquisa['pesquisa_id'] = $this->input->post('pesquisa_id');
		$pesquisa['titulo'] = $this->input->post('titulo');
		$pesquisa['texto'] = $this->input->post('texto');
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('pesquisas/adicionar_alterar_pesquisas', array('pesquisa' => $pesquisa, 'professores' => $professores));
		$this->load->view('templates/footer');
	}

	public function get_pesquisas() {
		$titulo_pesquisa = $this->input->get('titulo_pesquisa');
		$pesquisas = $this->pesquisas_model->search($titulo_pesquisa);
		echo json_encode($pesquisas);
	}
}