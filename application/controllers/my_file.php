<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class My_file extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_artikel', 'artikel');
   }

	public function index(){
		$data = array();
		$data['message'] = null;
		$data['url']=null;
		if($this->session->userdata('status')){
			$data['title'] = 'Artikel';
			$data['view'] = 'view_file';
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
	}
}