<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_request', 'request');
   }

   public function index($data = FALSE){
		if($this->session->userdata('status')){
			//$data['title'] = 'Event';
			//$data['view'] = 'view_event';
			//$data['event'] = $this->event->get_all_event();
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
			$data['title'] = 'Tambah Event';
			$data['view'] = 'form_event';

			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function edit($id, $data = FALSE){
		if($this->session->userdata('status')){
			$result = $this->event->get_event_by_id($id);
			$data['id'] = $id;
			$data['event_title'] = $result->title;
			$data['description'] = $result->description;
			$data['active'] = $result->active;
			$data['date'] = date('d F, Y',strtotime($result->date));
			$data['pict'] = $result->pict;

			$data['title'] = 'Edit Event';
			$data['view'] = 'edit_event';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function do_insert(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
			
			$data = array(
				'nama' => $this->input->post('nama'),
				'nik' => $this->input->post('nik'),
				'phone' => $this->input->post('phone'),
				'email' => $this->input->post('email'),
				'alamat' => $this->input->post('alamat'),
				'recdate' => date('Y-m-d h:i:s')
			);

			$this->request->insert_request($data);

			//$data['request'] = $this->request->get_all_event();
			//$data['message'] = 'Event baru telah ditambahkan';
			$this->load->view('view_front_home', $data);
		
	}

	public function do_edit($id){
		if($this->session->userdata('status')){
			$config['upload_path'] = './assets/img/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_width']  = '0';
			$config['max_height']  = '0';
			$config['encrypt_name'] = TRUE;

			$this->load->library('upload', $config);
			$this->upload->do_upload('pict');
			$upload = $this->upload->data();
			$current_event = $this->event->get_event_by_id($id);
			$data = array(
				'title' => $this->input->post('title'),
				'date' => date('Y-m-d', strtotime($this->input->post('date'))),
				'description' => $this->input->post('description'),
				'active' => $this->input->post('active') ? 1 : 0,
				'pict' => $upload['file_name']
			);
			$this->event->update_event($id, $data);
			//$data['message'] = 'Event telah diubah';
			$this->index($data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	

}
