<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_event', 'event');
   }

   public function index($data = FALSE){
		if($this->session->userdata('status')){
			$data['title'] = 'Event';
			$data['view'] = 'view_event';
			$data['event'] = $this->event->get_all_event();
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
			if($this->session->userdata('status')){
				$config['upload_path'] = './assets/img/';
				$config['allowed_types'] = 'gif|jpg|png|jpeg';
				$config['max_width']  = '0';
				$config['max_height']  = '0';
				$config['encrypt_name'] = TRUE;

				$this->load->library('upload', $config);
				$this->upload->do_upload('pict');
				$upload = $this->upload->data();
				$event = array(
					'title' => $this->input->post('title'),
					'date' => date('Y-m-d', strtotime($this->input->post('date'))),
					'description' => $this->input->post('description'),
					'active' => $this->input->post('active') ? 1 : 0,
					'pict' => $upload['file_name']
				);

				$this->event->insert_event($event);
				$data['event'] = $this->event->get_all_event();
				$data['message'] = 'Event baru telah ditambahkan';
				$this->index($data);
			}else{
				$this->load->view('view_login', $data);
			}
		}

}
