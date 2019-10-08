<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('noticias_anpae_model');
	}

	public function index() {
		$data['noticias'] = $this->noticias_anpae_model->get_noticias(5);
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}
}
