<?php
class Eventos extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('eventos_model');
	}

	public function index() {
		$data['rows'] = $this->eventos_model->get_all();
		$data['title'] = 'Lista de eventos';
	}

	public function recebe_cadastra_evento() {
	}
}