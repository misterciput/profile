<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();
	    $this->load->model('md_user', 'user');	
	}

	public function index(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'User';
			$data['view'] = 'view_user';
			$data['user'] = $this->user->get_all_user();
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
			$data['title'] = 'Tambah User';
			$data['view'] = 'form_user';

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

			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'name' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'type' => $this->input->post('superadmin') ? 0 : 1,
			);

			$this->user->insert_user($data);
			$data['user'] = $this->user->get_all_user();
			$data['message'] = 'User baru telah ditambahkan';
			$data['title'] = 'User';
			$data['view'] = 'view_user';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	

}

?>