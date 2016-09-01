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
			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'name' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'type' => $this->input->post('superadmin') ? 0 : 1
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

	public function edit($id){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$result = $this->user->get_user_by_id($id);
			$data['id'] = $id;
			$data['username'] = $result->username;
			$data['password'] = $result->password;
			$data['nama'] = $result->name;
			$data['email'] = $result->email;
			$data['type'] = $result->type;

			$data['title'] = 'Edit User';
			$data['view'] = 'edit_user';
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
			$current_user = $this->user->get_user_by_id($id);

			$data = array(
				'username' => $this->input->post('username'),
				'password' => md5($this->input->post('password')),
				'name' => $this->input->post('nama'),
				'email' => $this->input->post('email'),
				'type' => $this->input->post('superadmin') ? 0 : 1
			);
			
			$this->user->update_user($id, $data);
			$data['message'] = 'User telah diubah';
			$data['user'] = $this->user->get_all_user();
			$data['title'] = 'User';
			$data['view'] = 'view_user';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}

	public function delete($id){
		$this->user->delete_user($id);
		$data['message'] = 'User telah dihapus';
		$data['user'] = $this->user->get_all_user();
		$data['title'] = 'User';
		$data['view'] = 'view_user';
		$this->load->view('template', $data);
	}

	

}

?>