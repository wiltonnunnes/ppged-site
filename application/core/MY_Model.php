<?php
class MY_Model extends CI_Model {
	
	public $table = NULL;
	public $primaryKey = NULL;

	public function __construct() {
		parent::__construct();
		$this->load->database();
	}

	public function get($where = array(), $limit = -1, $start = 0) {
		$limit = $limit < 0 ? $this->get_count() : $limit; 
		$query = $this->db->get_where($this->table, $where, $limit, $start);
		return $query->result_array();
	}

	public function get_count() {
		return $this->db->count_all($this->table);
	}

	public function set($data = NULL) {
		if ($data <> NULL) {
			$this->db->insert($this->table, $data);
		}
	}
}