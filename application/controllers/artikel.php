<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Artikel extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_artikel', 'artikel');
       $this->load->model('md_event', 'event');
   }

	public function index(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'Artikel';
			$data['view'] = 'view_artikel';
			$data['artikel'] = $this->artikel->get_all_artikel();
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
			$data['title'] = 'Tambah Artikel';
			$data['view'] = 'form_artikel';

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
			$result = $this->artikel->get_artikel_by_id($id);
			$data['id'] = $id;
			$data['judul'] = $result->judul;
			$data['kategori'] = $result->kategori;
			$data['isi'] = $result->isi;
			$data['headline'] = $result->headline;
			$data['show'] = $result->show;
			$data['tanggal'] = $result->tanggal;
			$data['img'] = $result->img;

			$data['title'] = 'Edit Artikel';
			$data['view'] = 'edit_artikel';
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
					'isi' => $this->input->post('isi'),
					'headline' => $this->input->post('headline') ? 1 : 0,
					'show' => $this->input->post('show') ? 1 : 0,
					'img' => $upload['file_name'],
					'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
					'recdate' => date('Y-m-d h:i:s')
				);

				$this->artikel->insert_artikel($data);
				$data['artikel'] = $this->artikel->get_all_artikel();
				$data['message'] = 'Artikel baru telah ditambahkan';
				$data['title'] = 'Artikel';
				$data['view'] = 'view_artikel';
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
				$current_artikel = $this->artikel->get_artikel_by_id($id);

				$data = array(
					'judul' => $this->input->post('judul'),
					'kategori' => $this->input->post('kategori'),
					'isi' => $this->input->post('isi'),
					'headline' => $this->input->post('headline') ? 1 : 0,
					'show' => $this->input->post('show') ? 1 : 0,
					'tanggal' => date('Y-m-d', strtotime($this->input->post('tanggal'))),
					'recdate' => date('Y-m-d h:i:s')
				);
				
				if($upload['file_name']){
					$data['img'] = $upload['file_name'];
				}
				$this->artikel->update_artikel($id, $data);
				$data['message'] = 'Artikel telah diubah';
				$data['artikel'] = $this->artikel->get_all_artikel();
				$data['title'] = 'Artikel';
				$data['view'] = 'view_artikel';
				$this->load->view('template', $data);
			}else{
				$this->load->view('view_login', $data);
			}
		}
	public function delete($id){
		$this->artikel->delete_artikel($id);
		$data['message'] = 'Artikel telah dihapus';
		$data['artikel'] = $this->artikel->get_all_artikel();
		$data['title'] = 'Artikel';
		$data['view'] = 'view_artikel';
		$this->load->view('template', $data);
	}
}