<?php
class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('html');
		$this->lang->load('menu');
	}

	public function is_logged_in() {
		$login = $this->session->userdata('user_logged');
		return isset($login);
	}
}