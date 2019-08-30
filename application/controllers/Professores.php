<?php
class Professores extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('professores_model');
	}

	public function index() {
		$config['base_url'] = base_url('professores');
		$config['total_rows'] = $this->professores_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['professores'] = $this->professores_model->get(array(), $config['per_page'], $page * $config['per_page']);

		$this->load->view('templates/header', $data);
		$this->load->view('professores/index', $data);
		$this->load->view('templates/footer');
	}

	public function recebe_cadastra_professor() {
		$data = $this->input->post();
		$this->professores_model->set($data);
		redirect('painel_controle/professores/adicionar');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/professores/adicionar_professores');
		$this->load->view('painel_controle/templates/footer');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = base_url('painel_controle/professores');
		$config['total_rows'] = $this->professores_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['professores'] = $this->professores_model->get(array(), $config['per_page'], $page * $config['per_page']);

		$this->load->view('painel_controle/templates/header', $data);
		$this->load->view('painel_controle/professores/listar_professores', $data);
		$this->load->view('painel_controle/templates/footer');
	}

}