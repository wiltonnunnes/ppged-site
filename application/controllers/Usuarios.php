<?php
class Usuarios extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('usuarios_model');
	}

	public function index() {
		$this->load->view('templates/header');
		$this->load->view('templates/menu');
		$this->load->view('usuarios/login');
		$this->load->view('templates/footer');
	}

	public function login() {
		$login = $this->input->post('login');
		$senha = sha1($this->input->post('senha'));
		$usuarios = $this->usuarios_model->get(array('login' => $login, 'senha' => $senha));

		if (!empty($usuarios)) {
			$usuario = $usuarios[0];
			$this->session->set_userdata(array('user_logged' => $usuario));
			redirect();
		} else {
			redirect('painel_controle');
		}
	}

	public function view($id) {
		$usuarios = $this->usuarios_model->get(array('usuario_id' => $id));
		$data['usuario'] = $usuarios[0];
		$this->load->view('painel_controle/templates/header');
		$this->load->view('painel_controle/templates/sidebar');
		$this->load->view('painel_controle/usuarios/view_usuario', $data);
		$this->load->view('painel_controle/templates/footer');
	}

	public function logout() {
		$this->session->unset_userdata('user_logged');
		redirect();
	}
}