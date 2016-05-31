<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gallery extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_gallery', 'gallery');
   }

	public function index(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'Gallery';
			$data['view'] = 'view_gallery';
			$data['gallery'] = $this->gallery->get_all_gallery();
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
			$data['title'] = 'Tambah Gallery';
			$data['view'] = 'form_gallery';

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
			$result = $this->gallery->get_gallery_by_id($id);
			$data['id'] = $id;
			$data['judul'] = $result->judul;
			$data['kategori'] = $result->kategori;
			$data['deskripsi'] = $result->deskripsi;
			$data['headline'] = $result->headline;
			$data['publish'] = $result->publish;
			$data['tanggal'] = $result->tanggal;
			$data['img'] = $result->img;

			$data['title'] = 'Edit gallery';
			$data['view'] = 'edit_gallery';
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
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				$this->upload->do_upload('img');
				$upload = $this->upload->data();
				$data = array(
					'judul' => $this->input->post('judul'),
					'kategori' => $this->input->post('kategori'),
					'deskripsi' => $this->input->post('deskripsi'),
					'headline' => $this->input->post('headline') ? 1 : 0,
					'publish' => $this->input->post('publish') ? 1 : 0,
					'img' => $upload['file_name'],
					'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
					'recdate' => date('Y-m-d h:i:s')
				);

				$this->gallery->insert_gallery($data);
				$data['gallery'] = $this->gallery->get_all_gallery();
				$data['message'] = 'gallery baru telah ditambahkan';
				$data['title'] = 'gallery';
				$data['view'] = 'view_gallery';
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
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				$this->upload->do_upload('img');
				$upload = $this->upload->data();
				$current_gallery = $this->gallery->get_gallery_by_id($id);
				$data = array(
					'judul' => $this->input->post('judul'),
					'kategori' => $this->input->post('kategori'),
					'deskripsi' => $this->input->post('deskripsi'),
					'headline' => $this->input->post('headline') ? 1 : 0,
					'publish' => $this->input->post('publish') ? 1 : 0,
					'img' => $upload['file_name'],
					'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
					'recdate' => date('Y-m-d h:i:s')
				);
				$this->gallery->update_gallery($id, $data);
				$data['message'] = 'gallery telah diubah';
				$data['gallery'] = $this->gallery->get_all_gallery();
				$data['title'] = 'gallery';
				$data['view'] = 'view_gallery';
				$this->load->view('template', $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}
	public function delete($id){
		$this->gallery->delete_gallery($id);
		$data['message'] = 'gallery telah dihapus';
		$data['gallery'] = $this->gallery->get_all_gallery();
		$data['title'] = 'gallery';
		$data['view'] = 'view_gallery';
		$this->load->view('template', $data);
	}
}