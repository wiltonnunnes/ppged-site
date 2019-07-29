<?php
class Noticias extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('noticias_model');
	}

	public function index() {
		$data['links'] = $this->create_pagination($this->noticias_model->get_count());

		$data['title'] = 'Noticias';
		$this->load->view('templates/header', $data);
		$this->load->view('noticias/index', $data);
		$this->load->view('templates/footer');
	}
}