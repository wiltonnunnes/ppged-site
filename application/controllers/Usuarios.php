<?php
class Usuarios extends MY_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('usuarios_model');
	}

	public function index() {
		$this->load->view('painel_controle/index');
	}

	public function login() {
		$login = $this->input->post('login');
		$senha = sha1($this->input->post('senha'));
		$usuarios = $this->usuarios_model->get(array('login' => $login, 'senha' => $senha));
		print_r($usuarios);

		if (!empty($usuarios)) {
			$usuario = $usuarios[0];
			$this->session->set_userdata(array('user' => $usuario['login'], 'logged_in' => TRUE));
			redirect("usuarios/" . $usuario['usuario_id']);
		} else {
			redirect('painel_controle');
		}
	}

	public function view($id) {
		$usuarios = $this->usuarios_model->get(array('usuario_id' => $id));
		$data['usuario'] = $usuarios[0];
		$this->load->view('painel_controle/usuarios/view_usuario', $data);
	}
}