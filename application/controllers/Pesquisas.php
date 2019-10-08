<?php
class Pesquisas extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('pesquisas_model');
		$this->load->model('professores_pesquisas_model');
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

		if($professor_id = $this->input->post('professor_id'))
			foreach ($professor_id as $professor_id_item)
				$this->professores_pesquisas_model->insert(array('pesquisa_id' => $id, 'professor_id' => $professor_id_item));
		redirect('painel_controle/pesquisas');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');

		$data = $this->input->post();
		if (isset($data['nome'])) $data['professores'][] = $this->professores_model->get(array('nome' => $data['nome']));

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/pesquisas/adicionar_alterar_pesquisas', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = site_url('painel_controle/pesquisas');
		$config['total_rows'] = $this->pesquisas_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		$data['pesquisas'] = $this->pesquisas_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/pesquisas/listar_pesquisas', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		if ($this->pesquisas_model->remove($id)) {
			$this->professores_pesquisas_model->remove($id);
		}
		redirect('painel_controle/pesquisas');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$pesquisa = $this->pesquisas_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/pesquisas/adicionar_alterar_pesquisas', array('pesquisa' => $pesquisa));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}