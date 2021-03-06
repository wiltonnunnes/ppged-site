<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model(array('noticias_anpae_model', 'informativos_model'));
	}

	public function index() {
		$data['noticias'] = $this->noticias_anpae_model->get(array(), 6);
		$data['informativos'] = $this->informativos_model->get(array(), 5);
		$this->load->view('templates/header');

		if ($this->is_logged_in())
			$this->load->view('templates/menuAdm');
		else
			$this->load->view('templates/menu');

		$this->load->view('templates/inicio');
		$this->load->view('index', $data);
		$this->load->view('templates/footer');
	}
}
