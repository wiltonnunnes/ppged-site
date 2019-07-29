<?php
class Professores_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'professores';
	}

	public function search($searchString) {
		$this->db->like('nome', $searchString, 'after');
		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get_professores($limit, $start) {
		$query = $this->db->get($this->table, $limit, $start);
		return $query->result_array();
	}
}