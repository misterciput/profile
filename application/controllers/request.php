<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Request extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_request', 'request');
   }

   public function index($data = FALSE){
		if($this->session->userdata('status')){
			$data['title'] = 'Request';
			$data['view'] = 'view_request';
			$data['request'] = $this->request->get_all_request();
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

			$this->load->view('view_front_home', $data);
			redirect(base_url());
		
	}


}
