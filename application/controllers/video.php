<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Video extends CI_Controller {

	function __construct(){
		parent::__construct();
	    $this->load->model('md_video', 'video');	
	}

	public function index(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'Video';
			$data['view'] = 'view_video';
			$data['video'] = $this->video->get_all_video();
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function insert(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'Tambah video';
			$data['view'] = 'form_video';

			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function edit($id){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$result = $this->video->get_video_by_id($id);
			$data['id'] = $id;
			$data['judul'] = $result->judul;
			$data['deskripsi'] = $result->deskripsi;
			$data['link'] = $result->link;
			$data['publish'] = $result->publish;


			$data['title'] = 'Edit video';
			$data['view'] = 'edit_video';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function do_insert(){
			$data = array();
			$data['message'] = null;
			$data['url']=null;
			if($this->session->userdata('status')){
				$set = array(
                    'publish' => 0
                );
				$data = array(
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'link' => $this->input->post('link'),
					'publish' => $this->input->post('publish') ? 1 : 0,
					'timestamp' => date('Y-m-d h:i:s')
				);

				$publish = $data['publish'];
				if($publish = 1){
				    $this->db->update('video', $set, array('publish' => 1));
				    /*$this->db->update(TABLE, NEW_DATA, CRITERIA);*/  
				}

				$this->video->insert_video($data);
				$data['video'] = $this->video->get_all_video();
				$data['message'] = 'video baru telah ditambahkan';
				$data['title'] = 'video';
				$data['view'] = 'view_video';
				$this->load->view('template', $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

	public function do_edit($id){
			$data = array();
			$data['message'] = null;
			$data['url']=null;
			if($this->session->userdata('status')){

				/*$this->load->library('upload', $config);
				
				$upload = $this->upload->data();
				$current_video = $this->video->get_video_by_id($id);*/
				$set = array(
                    'publish' => 0
                );
				$data = array(
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'link' => $this->input->post('link'),
					'publish' => $this->input->post('publish') ? 1 : 0,
					'timestamp' => date('Y-m-d h:i:s')
				);

				$publish = $data['publish'];
				if($publish = 1){
					$this->db->where('id', $id);
				    $this->db->update('video', $set, array('publish' => 1));
				    /*$this->db->update(TABLE, NEW_DATA, CRITERIA);*/  
				}

				$this->video->update_video($id, $data);
				$data['message'] = 'video telah diubah';
				$data['video'] = $this->video->get_all_video();
				$data['title'] = 'video';
				/*$data['view'] = 'view_video';*/
				$this->load->view('template', $data);
			}else{
				$this->load->view('view_login', $data);
			}
	}

	public function delete($id){
		$this->video->delete_video($id);
		$data['message'] = 'video telah dihapus';
		$data['video'] = $this->video->get_all_video();
		$data['title'] = 'video';
		$data['view'] = 'view_video';
		$this->load->view('template', $data);
	}

}

?>