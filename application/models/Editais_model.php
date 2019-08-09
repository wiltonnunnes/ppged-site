<?php
class Editais_model extends MY_Model {
	
	public function __construct() {
		parent::__construct();
		$this->table = 'editais';
		$this->primaryKey = 'edital_id';
	}
}