<?php
class Md_gallery extends CI_Model {

	public function get_all_gallery(){
		$this->db->from('gallery');
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_gallery($data){

		$this->db->insert('gallery', $data);
	}

	public function update_gallery($id, $data){
		$this->db->where('id', $id);
		$this->db->update('gallery', $data);
	}

	public function get_gallery_by_id($id){
		$this->db->from('gallery');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function delete_gallery($id){
		$this->db->delete('gallery', array('id' => $id));
	}
}