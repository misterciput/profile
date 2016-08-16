<?php
class Md_social_media extends CI_Model {

	public function get_all_social_media(){
		$this->db->from('social_media');
		$this->db->order_by('id', 'asc');
		$result = $this->db->get();

		return $result->result();
	}

	public function insert_social_media($data){

		$this->db->insert('social_media', $data);
	}

	public function update_social_media($code, $data){
		$this->db->where('code', $code);
		$this->db->update('social_media', $data);
	}

	public function get_social_media_by_id($code){
		$this->db->from('social_media');
		$this->db->where('code', $code);
		$result = $this->db->get();
		$result = $result->result();

		return $result[0];
	}

	public function delete_social_media($id){
		$this->db->delete('social_media', array('id' => $id));
	}
}