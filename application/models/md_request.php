<?php
class Md_request extends CI_Model {

	public function insert_request($data){

		$this->db->insert('request', $data);
	}
}
?>