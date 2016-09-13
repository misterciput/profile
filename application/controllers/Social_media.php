<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Social_media extends CI_Controller {

	function __construct() {
       parent::__construct();
       $this->load->model('md_social_media', 'social_media');
   }

   public function index($code = FALSE){
    $data = array();
    $data['message'] = null;
		if($this->session->userdata('status')){
			$data['title'] = 'Social Media';
			$data['view'] = 'view_social_media';
			$data['social_media'] = $this->social_media->get_all_social_media();
			$this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
   }

   public function get_social_media_by_id($code){
   		$result = $this->social_media->get_social_media_by_id($code);
   		$result->link = rawurldecode($result->link);
   		echo json_encode($result);
   }

   public function do_edit(){
      $data = array();
      $data['message'] = null;
   		if($this->session->userdata('status')){

   			$social_media = array(
   				'link' => rawurlencode($this->input->post('link'))
   			);
   			$this->social_media->update_social_media($this->input->post('code'), $social_media);

			$data['title'] = 'Social Media';
			$data['view'] = 'view_social_media';
      $data['message'] = 'Link Sosmed telah diubah';
      $data['social_media'] = $this->social_media->get_all_social_media();  
			//$this->index();
      $this->load->view('template', $data);
		}else{
			$this->load->view('view_login', $data);
		}
   }
}