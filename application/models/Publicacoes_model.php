<?php
class Publicacoes_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'publicacoes';
	}

	public function get_by_id($id) {
		$publicacoes = $this->get(array('publicacao_id' => $id));
		if (count($publicacoes) > 0) {
			return $publicacoes[0];
		}
		return NULL;
	}

	public function update($data, $id) {
		$this->db->set($data, array('publicacao_id' => $id));
	}
}