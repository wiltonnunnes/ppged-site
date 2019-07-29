<?php
class Informativos_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'informativos';
		$this->primaryKey = 'informativo_id';
	}
}