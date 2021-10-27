<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Profiles extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('videos_model');
        $this->load->model('comments_model');
        $this->load->model('user_model');
        $this->load->model('ratings_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
        $this->load->model('profile_model');
		
	} 
	public function index() {
        $ID = $this->session->userdata('ID');
        $data['videos'] = $this->profile_model->get_my_video($ID);
        $data['title'] = 'Your Uploads';

        $this->load->view('templates/header', $data);
        
        
        $this->load->view('profile', $data);
        
	    $this->load->view('templates/footer');
    }
    public function delete_video($VID){
        $this->profile_model->delete($VID);
        $this->index();
    }

    public function setting(){
        $ID = $this->session->userdata('ID');
        $data['title'] = 'Your Account';
        $data['video_item'] = $this->profile_model->get_my_video($ID);
        $this->load->view('templates/header', $data);
        
        
        $this->load->view('setting', $data);
        
	    $this->load->view('templates/footer');
    }

}
