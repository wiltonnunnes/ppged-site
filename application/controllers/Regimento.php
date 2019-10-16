<?php
class Regimento extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('templates/inicio');
		$this->load->view('Documentos/regimento/index');
		$this->load->view('templates/footer');
	}

}