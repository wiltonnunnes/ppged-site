<?php
class Editais extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('editais_model');
	}

	public function index() {
		$data['editais'] = $this->editais_model->get_all();
		$data['title'] = 'editais';
		$this->load->view('templates/header', $data);
		$this->load->view('editais/index', $data);
		$this->load->view('templates/footer');
	}

	public function adicionar() {
		if (!$this->is_logged_in()) {
			redirect('painel_controle');
		}
		$this->load->helper('form');
		$data['title'] = '';
		$data['user_logged'] = $this->session->userdata('user_logged');
		$this->load->view('painel_controle/templates/header', $data);
		$this->load->view('painel_controle/editais/adicionar_editais', array('error' => ''));
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_cadastra_edital() {
		$config['upload_path'] = './uploads/arquivos/editais/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;

		$this->load->library('upload', $config);

		if (!$this->upload->do_upload('arquivo')) {
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('painel_controle/editais/adicionar_editais', $error);
		} else {
			$data['titulo'] = $this->input->post('titulo');
			$data['data'] =$this->input->post('data');
			$data['arquivo'] = $this->upload->data('file_name');
			$this->editais_model->set($data);

			redirect('editais/listar');
		}
	}

	public function listar() {
		$this->load->view('painel_controle/editais/listar_editais');
	}
}