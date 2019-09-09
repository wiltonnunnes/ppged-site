<?php
class Informativos_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'informativos';
	}

	public function get_by_id($id) {
		$informativos = $this->get(array('informativo_id' => $id));
		if (count($informativos) > 0) {
			return $informativos[0];
		}
		return NULL;
	}

	public function remove($id) {
		return parent::remove(array('informativo_id' => $id));
	}

	public function update($data, $id) {
		$this->db->set($data, array('informativo_id' => $id));
	}
}