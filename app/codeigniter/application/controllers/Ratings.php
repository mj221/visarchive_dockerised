<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Ratings extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('ratings_model');
        $this->load->helper('url_helper');
		
	} 
	
    public function do_rate(){
        $this->ratings_model->rate();
        redirect('/'.$this->session->userdata('VID'));
    }
}
