<?php
class Md_request extends CI_Model {

	public function get_all_request(){
		$this->db->from('request');
		$this->db->order_by('recdate', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_request($data){

		$this->db->insert('request', $data);
	}
}
?>