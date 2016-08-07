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

	public function get_news_headline(){
		$this->db->from('artikel');
		$this->db->where('kategori','NEWS');
		$this->db->where('headline', 1);
		$this->db->where('show', 1);
		$this->db->order_by('tanggal','desc');
		$result = $this->db->get();

		return $result->result(); 
	}

	public function get_news_detail($id){
		$this->db->from('artikel');
		$this->db->where('kategori','NEWS');
		$this->db->where('headline', 1);
		$this->db->where('show', 1);
		$this->db->order_by('tanggal','desc');
		$this->db->where('id', $id);
		$result = $this->db->get();

		return $result->result(); 
	}

	public function get_upcoming_news(){
		$this->db->from('artikel');
		$this->db->where('kategori','NEWS');
		$this->db->where('show', 1);
		$this->db->order_by('tanggal','desc');
		$this->db->limit(4);
		$result = $this->db->get();

		return $result->result(); 
	}

	public function get_next_news(){
		$this->db->from('artikel');
		$this->db->where('kategori','NEWS');
		$this->db->where('show', 1);
		$this->db->order_by('tanggal','desc');
		$this->db->limit(4);
		$result = $this->db->get();

		return $result->result(); 
	}

	public function get_all_news($num, $offset){
		$this->db->where('kategori','NEWS');
		$this->db->where('show', 1);
		$this->db->order_by('tanggal','desc');
		$this->db->limit($num, $offset);
		$result = $this->db->get('artikel');

		return $result->result(); 
	}

	public function count_all_news(){
		$this->db->where('kategori','NEWS');
		$this->db->where('show', 1);
		return $this->db->count_all('artikel');
	}
}