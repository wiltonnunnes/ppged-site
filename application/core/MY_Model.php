<?php
class MY_Model extends CI_Model {
	
	public $table = NULL;
	public $primaryKey = NULL;

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get_all($limit = -1, $start = 0) {
		$limit = $limit < 0 ? $this->get_count() : $limit; 
		$this->db->limit($limit, $start);

		$query = $this->db->get($this->table);
		return $query->result_array();
	}

	public function get($id) {
		$query = $this->db->get_where($this->table, array($this->primaryKey => $id));
	}

	public function get_count() {
		return $this->db->count_all($this->table);
	}
}