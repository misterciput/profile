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
		$data['get_video'] = $this->event->get_video_active();
		$this->load->view('view_front_home', $data);
	}

	public function get_news_detail($id){
		/*$result = $this->artikel->get_news_detail($id)[0];*/
		$result = $this->artikel->get_news_detail($id);
		foreach($result as $result) break;
		$upcoming = $this->artikel->get_upcoming_news();
		$nextevent = $this->event->get_next_event();
		$data = array();
		$data['id'] = $id;
		$data['judul'] = $result->judul;
		$data['isi'] = $result->isi;
		$data['tanggal'] = $result->tanggal;
		$data['img'] = $result->img;
		$data['upcoming'] = $upcoming;
		$data['nextevent'] = $nextevent;
		$this->load->view('view_news', $data);
	}

	public function get_event_detail($id){
 		/*$result = $this->event->get_event_detail($id)[0];*/
 		$result = $this->event->get_event_detail($id);
		foreach($result as $result) break;
 		$upcoming = $this->event->get_upcoming_event();
 		$nextnews = $this->artikel->get_next_news();
 		$data = array();
 		$data['id'] = $id;
 		$data['title'] = $result->title;
 		$data['description'] = $result->description;
 		$data['date'] = $result->date;
 		$data['pict'] = $result->pict;
 		$data['upcoming'] = $upcoming;
 		$data['nextnews'] = $nextnews;
 		$this->load->view('view_events', $data);
 	}

 	public function view_all_news(){

 		$this->load->library('pagination');

 		$config['base_url'] = base_url().'front_home/view_all_news';
 		$config["total_rows"] = $this->artikel->count_all_news();
 		$config['per_page'] = $per_page = 3;
 		$config['uri_segment'] = 3;
 		$config['full_tag_open'] = '<nav ><ul class="pagination blog-pagination">';
		$config['full_tag_close'] = '</ul><nav>';
 		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'PREVIOUS';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'NEXT';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] =  '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

 		$this->pagination->initialize($config);
 		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 		$data['data'] = $this->artikel->get_all_news($per_page, $page);
 		$data['paging'] = $this->pagination->create_links();


 		$this->load->view('view_news_all', $data);
 	}

 	public function view_all_events(){
 		
 		$this->load->library('pagination');

 		$config['base_url'] = base_url().'front_home/view_all_events';
 		$config["total_rows"] = $this->event->count_all_events();
 		$config['per_page'] = $per_page = 3;
 		$config['uri_segment'] = 3;
 		$config['full_tag_open'] = '<nav ><ul class="pagination blog-pagination">';
		$config['full_tag_close'] = '</ul><nav>';
 		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['prev_link'] = 'PREVIOUS';
		$config['prev_tag_open'] = '<li class="prev">';
		$config['prev_tag_close'] = '</li>';
		$config['next_link'] = 'NEXT';
		$config['next_tag_open'] = '<li>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['cur_tag_open'] =  '<li class="active"><a href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';

 		$this->pagination->initialize($config);
 		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
 		$data['data'] = $this->event->get_all_events($per_page, $page);
 		$data['paging'] = $this->pagination->create_links();

 		$this->load->view('view_events_all', $data);
 	}
}
