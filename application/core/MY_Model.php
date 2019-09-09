<?php
class MY_Model extends CI_Model {
	
	public $table = NULL;

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

	public function set($data, $where = array()) {
		if ($where) {
			$this->db->where($where);
			$this->db->set($data);
			$this->db->update($this->table);
		} else
			$this->db->insert($this->table, $data);
	}

	public function remove($data) {
		if ($this->db->delete($this->table, $data))
			return true;
		else
			return true;
	}

	public function search($keyword, $limit = -1, $start = 0) {
		$fields = $this->db->list_fields($this->table);
		$limit = $limit < 0 ? $this->get_count() : $limit;
		foreach ($fields as $field) {
			$this->db->like($field, $keyword);
			$query = $this->db->get($this->table, $limit, $start);
			if ($query->num_rows() > 0)
				return $query->result_array();
		}
		return NULL;
	}
}