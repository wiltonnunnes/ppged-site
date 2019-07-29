<?php
class Professores extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('professores_model');
	}

	public function index() {
		$data['title'] = 'Lista de professores';

		$config['base_url'] = base_url('professores');
		$config['total_rows'] = $this->professores_model->get_count();
		$config['per_page'] = 5;
		$config['first_link'] = 'Primeira';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';
		$config['last_link'] = '&Uacute;ltima';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';
		$config['next_link'] = 'Pr&oacute;xima';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';
		$config['prev_link'] = 'Anterior';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active">';
		$config['cur_tag_close'] = '</li>';
		$config['attributes'] = array('class' => 'page-link');
		$config['attributes']['rel'] = FALSE;

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = $this->uri->segment("3") ? $this->uri->segment("3") : 0;
		$data['rows'] = $this->professores_model->get_professores($config['per_page'], $page);

		$this->load->view('templates/header', $data);
		$this->load->view('professores/index', $data);
		$this->load->view('templates/footer');
	}

	public function search() {
		$searchString = $this->input->post('professor');		
		$data = $this->professores_model->search($searchString);
		return json_encode($data);
	}
}