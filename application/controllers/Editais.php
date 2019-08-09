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

	public function recebe_cadastra_edital() {
		$config['upload_path'] = './uploads/arquivos/editais/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('edital')) {

		} else {
			
		}
	}
}