<?php
class Publicacoes extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('publicacoes_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = site_url('publicacoes');
			$config['total_rows'] = $this->publicacoes_model->get_count();
			$config['per_page'] = 16;

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 1;
			$data['publicacoes'] = $this->publicacoes_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);

			$this->load->view('templates/header');
			$this->load->view('publicacoes/index', $data);
			$this->load->view('templates/footer');
		} else {
			$publicacao = $this->publicacoes_model->get_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('publicacoes/publicacao', array('publicacao' => $publicacao));
			$this->load->view('templates/foorer');
		}
	}

	public function adicionar() {
		if (!$this->is_logged_in()) {
			redirect('painel_controle');
		}
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/publicacoes/adicionar_alterar_publicacoes');
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_publicacao() {
		$data = $this->input->post();

		$config['upload_path'] = './uploads/arquivos/publicacoes/';
		$config['allowed_types'] = 'gif|jpg|png|jpeg';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($this->upload->do_upload('imagem'))
			$data['imagem'] = $this->upload->data('file_name');

		$this->publicacoes_model->set($data, array_key_exists('publicacao_id', $data) ? array('publicacao_id' => $data['publicacao_id']) : array());

		redirect('painel_controle/publicacoes');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = site_url('painel_controle/publicacoes');
		$config['total_rows'] = $this->publicacoes_model->get_count();
		$config['per_page'] = 16;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 1;
		$data['publicacoes'] = $this->publicacoes_model->get(array(), $config['per_page'], ($page - 1) * $config['per_page']);

		$this->load->view('painel_controle/templates/header', $data);
		$this->load->view('painel_controle/publicacoes/listar_publicacoes', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$publicacao = $this->publicacoes_model->get_by_id($id);
		if ($this->publicacoes_model->remove($publicacao) && $publicacao['imagem'])
			unlink('./uploads/arquivos/publicacoes/' . $publicacao['ano'] . '/' . $publicacao['imagem']);
		redirect('painel_controle/publicacoes');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$publicacao = $this->publicacoes_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/publicacoes/adicionar_alterar_publicacoes', array('publicacao' => $publicacao));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}