<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front_home extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_user', 'user');
       $this->load->model('md_artikel', 'artikel');
       $this->load->model('md_event', 'event');
   }

	public function index()
	{
		$data = array();
		$data['headline_news'] = $this->artikel->get_news_headline();
		$data['upcoming_event'] = $this->event->get_upcoming_event();
		$data['all_event'] = $this->event->get_all_active_event();
		$this->load->view('view_front_home', $data);
	}

	public function get_news_detail($id){
		$result = $this->artikel->get_news_detail($id)[0];
		$data = array();
		$data['judul'] = $result->judul;
		$data['isi'] = $result->isi;
		$data['tanggal'] = $result->tanggal;
		$this->load->view('view_news', $data);
	}
}
