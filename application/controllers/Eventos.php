<?php
class Eventos extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('eventos_model');
	}

	public function index() {
		$this->load->library('pagination');

		$config['base_url'] = base_url('index.php/eventos');
		$config['total_rows'] = $this->eventos_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['eventos'] = $this->eventos_model->get(array(), $config['per_page'], $page * $config['per_page']);

		$this->load->view('eventos/index', $data);
	}

	public function view($id) {
		$data['evento'] = $this->eventos_model->get_by_id($id);
		$this->load->view('eventos/view_evento', $data);
	}

}