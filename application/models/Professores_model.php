<?php
class Professores_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'professores';
	}

	public function get_by_id($id) {
		$professores = $this->get(array('professor_id' => $id));
		if (count($professores) > 0) {
			return $professores[0];
		}
		return NULL;
	}

	public function remove($id) {
		return parent::remove(array('professor_id' => $id));
	}
}