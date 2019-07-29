<?php
class MY_Controller extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function create_pagination($tot_rows) {
		$this->load->library('pagination');

		$config['base_url'] = base_url($this->router->fetch_class() . '/' . $this->router->fetch_method());
		$config['total_rows'] = $tot_rows;
		$config['per_page'] = 16;

		$this->pagination->initialize($config);
		return $this->pagination->create_links();
	}
}