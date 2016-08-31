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

	public function get_upcoming_event_now(){
		$month = date('m');
		$now = date('Y-m-d');
		$this->db->from('event');
		$this->db->where('active', 1);
		$this->db->where('MONTH(date)', $month);
		$this->db->where('date >= ', $now);
		$this->db->order_by('id','desc');
		$result = $this->db->get();

		return $result->result(); 	
	}

	public function get_all_active_event(){
		$this->db->from('event');
		$this->db->where('active', 1);
		$this->db->limit(1);
		$result = $this->db->get();

		return $result->result();	
	}

	public function get_video_active(){
		$this->db->from('video');
		$this->db->where('publish', 1);
		$this->db->order_by('id','asc');
		$result = $this->db->get();

		return $result->result();	
	}

	public function get_event_detail($id){
 		$this->db->from('event');
 		$this->db->where('active', 1);
 		$this->db->order_by('id','desc');
 		$this->db->where('id', $id);
 		$result = $this->db->get();
 
 		return $result->result(); 
 	}

 	public function get_upcoming_event(){
		$this->db->from('event');
		$this->db->where('active', 1);
		$this->db->order_by('date','desc');
		$this->db->limit(4);
		$result = $this->db->get();

		return $result->result(); 
	}

	public function get_next_event(){
		$this->db->from('event');
		$this->db->where('active', 1);
		$this->db->order_by('date','desc');
		$this->db->limit(3);
		$result = $this->db->get();

		return $result->result(); 
	}

	public function get_next_event_all(){
		$this->db->from('event');
		$this->db->where('active', 1);
		$this->db->order_by('date','desc');
		$this->db->limit(3);
		$result = $this->db->get();

		return $result->result(); 
	}

	public function get_all_events($num, $offset){
		$this->db->where('active', 1);
		$this->db->order_by('date','desc');
		$this->db->limit($num, $offset);
		$result = $this->db->get('event');

		return $result->result(); 
	}

	public function count_all_events(){
		$this->db->where('active', 1);
		return $this->db->count_all('event');
	}

	public function search_event($keyword){
		$this->db->select('id');
		$this->db->select('title judul');
		$this->db->select('description isi');
		$this->db->select('pict img');
		$this->db->select('date tanggal');
		$this->db->from('event');
		$this->db->like('title', $keyword);
		$this->db->or_like('description', $keyword);
		$this->db->where('active', 1);
		$result = $this->db->get()->result();
		foreach($result as $row){
			$row->kategori = 'EVENT';
		}

		return $result;
	}
}