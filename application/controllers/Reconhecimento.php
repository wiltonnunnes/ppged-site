<?php
class Reconhecimento extends MY_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('Documentos/menu');
		$this->load->view('templates/inicio');
		$this->load->view('Documentos/reconhecimento/index');
		$this->load->view('Documentos/footer');
	}

}