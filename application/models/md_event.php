<?php
class Md_event extends CI_Model {

	public function get_all_event(){
		$this->db->from('event');
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_event($data){

		$this->db->insert('event', $data);
	}

	public function update_event($id, $data){
		$this->db->where('id', $id);
		$this->db->update('event', $data);
	}

	public function get_event_by_id($id){
		$this->db->from('event');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function delete_event($id){
		$this->db->delete('event', array('id' => $id));
	}
}