<?php
class Professores_pesquisas_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'professores_pesquisas';
	}

	public function remove($id) {
		return parent::remove(array('pesquisa_id' => $id));
	}

	public function insert($data) {
		if (!$this->data_exists($data))
			$this->set($data);
	}
}