<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Comments extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('comments_model');
        $this->load->helper('url_helper');
		
	} 
	
    public function do_comment(){
        
        $this->comments_model->post_comment();
        redirect('/'.$this->session->userdata('VID'));
    }

    public function viewajax(){
        $data=$this->comments_model->get_comments();
        $i = 1;
        foreach($data as $comment_item){
            $username = $comment_item['username'];
            $dateTime = $comment_item['posted_dateTime'];
            $content = $comment_item['content'];
            echo "$username";
            echo "$dateTime";
            echo "$content";

        }
            
    
    }
}
