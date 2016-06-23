<?php
class Md_artikel extends CI_Model {

	public function get_all_artikel(){
		$this->db->from('artikel');
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_artikel($data){

		$this->db->insert('artikel', $data);
	}

	public function update_artikel($id, $data){
		$this->db->where('id', $id);
		$this->db->update('artikel', $data);
	}

	public function get_artikel_by_id($id){
		$this->db->from('artikel');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function delete_artikel($id){
		$this->db->delete('artikel', array('id' => $id));
	}
}