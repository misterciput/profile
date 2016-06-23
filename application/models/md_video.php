<?php
class Md_video extends CI_Model {

	public function get_all_video(){
		$this->db->from('video');
		$this->db->order_by('id', 'desc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_video($data){

		$this->db->insert('video', $data);
	}

	public function update_video($id, $data){
		$this->db->where('id', $id);
		$this->db->update('video', $data);
	}

	public function get_video_by_id($id){
		$this->db->from('video');
		$this->db->where('id', $id);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function delete_video($id){
		$this->db->delete('video', array('id' => $id));
	}

}