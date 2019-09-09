<?php
class Pesquisas extends MY_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->model('pesquisas_model');
	}

	public function index($id = NULL) {
		if (is_null($id)) {
			$config['base_url'] = base_url('index.php/pesquisas');
			$config['total_rows'] = $this->pesquisas_model->get_count();
			$config['per_page'] = 16;
			$config['use_page_numbers'] = TRUE;
			$config['page_query_string'] = TRUE;
			$config['query_string_segment'] = 'page';

			$this->pagination->initialize($config);

			$data['links'] = $this->pagination->create_links();

			$page = ($this->input->get('page')) ?: 0;
			$data['pesquisas'] = $this->pesquisas_model->get(array(), $config['per_page'], $page * $config['per_page']);

			$this->load->view('pesquisas/index', $data);
		} else {
			$data['pesquisa'] = $this->pesquisas_model->get_by_id($id);
			$this->load->view('templates/header');
			$this->load->view('pesquisas/pesquisa', $data);
			$this->load->view('templates/footer');
		}
	}

	public function view($id) {
		$data['pesquisa'] = $this->pesquisas_model->get_by_id($id);
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/pesquisas/view_pesquisa', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function recebe_processa_pesquisa() {
		$config['upload_path'] = './uploads/arquivos/pesquisas/pdf/';
		$config['allowed_types'] = 'pdf';
		$config['max_size'] = 0;
		$this->upload->initialize($config);

		if (count($_FILES) == 2) {
			$this->upload->do_upload('arquivo_pdf');
			$data['arquivo_pdf'] = $this->upload->data('file_name');

			$config['upload_path'] = './uploads/arquivos/pesquisas/docx/';
			$config['allowed_types'] = 'docx|doc|odt';
			$config['max_size'] = 0;

			$this->upload->initialize($config);
			$this->upload->do_upload('arquivo_docx');
			$data['arquivo_docx'] = $this->upload->data('file_name');

			$data = array_merge($data, $this->input->post());
			$this->pesquisas_model->set($data, isset($data['pesquisas_id']) ? array('pesquisas_id' => $data['pesquisas_id']) : array());
		}
		redirect('painel_controle/pesquisas');
	}

	public function adicionar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/pesquisas/adicionar_alterar_pesquisas');
		$this->load->view('painel_controle/templates/footer');
	}

	public function listar() {
		if (!$this->is_logged_in())
			redirect('painel_controle');
		$config['base_url'] = base_url('index.php/painel_controle/pesquisas');
		$config['total_rows'] = $this->pesquisas_model->get_count();
		$config['per_page'] = 16;
		$config['use_page_numbers'] = TRUE;
		$config['page_query_string'] = TRUE;
		$config['query_string_segment'] = 'page';

		$this->pagination->initialize($config);

		$data['links'] = $this->pagination->create_links();

		$page = ($this->input->get('page')) ?: 0;
		$data['pesquisas'] = $this->pesquisas_model->get(array(), $config['per_page'], $page * $config['per_page']);

		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/pesquisas/listar_pesquisas', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function deletar($id) {
		$pesquisa = $this->pesquisas_model->get_by_id($id);
		if ($this->pesquisas_model->remove($pesquisa)) {
			unlink('./uploads/arquivos/pesquisas/pdf/' . $pesquisa['arquivo_pdf']);
			unlink('./uploads/arquivos/pesquisas/docx/' . $pesquisa['arquivo_docx']);
		}
		redirect('painel_controle/pesquisas');
	}

	public function alterar($id) {
		if ($this->is_logged_in()) {
			$pesquisa = $this->pesquisas_model->get_by_id($id);
			$this->load->view('painel_controle/templates/header');
			$this->load->view('painel_controle/pesquisas/adicionar_alterar_pesquisas', array('pesquisa' => $pesquisa));
			$this->load->view('painel_controle/templates/footer');
		} else
			redirect('painel_controle');
	}
}