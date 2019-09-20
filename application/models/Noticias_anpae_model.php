<?php
class Noticias_anpae_model extends MY_Model {

	public function __construct() {
		parent::__construct();
		$this->table = 'noticias_anpae';
	}

	public function get_by_id($id) {
		$noticias_anpae = $this->get(array('noticia_id' => $id));
		if (count($noticias_anpae) > 0) {
			return $noticias_anpae[0];
		}
		return NULL;
	}
}