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
			$data['publish'] = $result->publish;
			$data['videos'] = $result->videos;

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
				$config['upload_path'] = './assets/videos/';
				$config['allowed_types'] = 'mp4|mpeg|avi|flv|mkv|mov';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				$this->upload->do_upload('videos');
				$upload = $this->upload->data();
				$data = array(
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'publish' => $this->input->post('publish') ? 1 : 0,
					'videos' => $upload['file_name'],
					'timestamp' => date('Y-m-d h:i:s')
				);

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
				$config['upload_path'] = './assets/videos/';
				$config['allowed_types'] = 'mp4|mpeg|avi|flv|mkv|mov';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				$this->upload->do_upload('videos');
				$upload = $this->upload->data();
				$current_video = $this->video->get_video_by_id($id);
				$data = array(
					'judul' => $this->input->post('judul'),
					'deskripsi' => $this->input->post('deskripsi'),
					'publish' => $this->input->post('publish') ? 1 : 0,
					'videos' => $upload['file_name'],
					'timestamp' => date('Y-m-d h:i:s')
				);
				$this->video->update_video($id, $data);
				$data['message'] = 'video telah diubah';
				$data['video'] = $this->video->get_all_video();
				$data['title'] = 'video';
				$data['view'] = 'view_video';
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