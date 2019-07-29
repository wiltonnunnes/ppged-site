<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('noticias_model');
		$this->load->model('informativos_model');
	}

	public function index() {
		$data['noticias'] = $this->noticias_model->get_all(10);
		$data['informativos'] = $this->informativos_model->get_all(5);

		$data['title'] = '';
		$this->load->view('templates/header', $data);
		$this->load->view('pagina_inicial');
		$this->load->view('templates/footer');
	}
}
