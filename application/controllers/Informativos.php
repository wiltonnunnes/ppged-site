<?php
class Informativos extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('informativos_model');
	}

	public function index() {
		$config['base_url'] = site_url('informativos');
		$config['total_rows'] = $this->informativos_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['informativos'] = $this->professores_model->get(array(), $config['per_page'], $page * $config['per_page']);

		$this->load->view('templates/header');
		$this->load->view('informativos/index', $data);
		$this->load->view('templates/footer');
	}

	public function adicionar() {
		if (!$this->is_logged_in()) {
			redirect('painel_controle');
		}
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/informativos/adicionar_alterar_informativos');
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_informativo() {
		$data = $this->input->post();

		$config['upload_path'] = './uploads/arquivos/informativos/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if ($this->upload->do_upload('imagem'))
			$data['imagem'] = $this->upload->data('file_name');

		$this->informativos_model->set($data, array_key_exists('informativo_id', $data) ? array('informativo_id' => $data['informativo_id']) : array());

		redirect('painel_controle/informativos');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = site_url('painel_controle/informativos');
		$config['total_rows'] = $this->informativos_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['informativos'] = $this->informativos_model->get(array(), $config['per_page'], $page * $config['per_page']);

		$this->load->view('painel_controle/templates/header', $data);
		$this->load->view('painel_controle/informativos/listar_informativos', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$informativo = $this->informativos_model->get_by_id($id);
		if ($this->informativos_model->remove($informativo))
			unlink(APPPATH . '/uploads/arquivos/informativos/' . $evento['imagem']);
		redirect('painel_controle/informativos');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$informativo = $this->informativos_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/informativos/adicionar_alterar_informativos', array('informativo' => $informativo));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}