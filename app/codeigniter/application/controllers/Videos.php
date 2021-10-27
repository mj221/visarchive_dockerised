<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Videos extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('videos_model');
        $this->load->model('comments_model');
        $this->load->model('user_model');
        $this->load->model('ratings_model');
        $this->load->helper('url_helper');
        $this->load->helper('form');
		
	} 
	public function index() {
        $data['videos'] = $this->videos_model->get_video();
        $data['title'] = 'Videos Archive';

        $this->load->view('templates/header', $data);
        
        $data = array("keyword"=>null, "sort_by"=>null, "search_video"=>null);
        $keyword = $this->input->get('keyword');
        $sort_by = $this->input->get('sort_by');

        if((isset($keyword) && isset($sort_by))){
		    $data['keyword'] = $keyword;
            $data['sort_by'] = $sort_by;
			// $data['search_video'] = $this->videos_model->search_video($sort_by, $keyword);
            $data['videos'] = $this->videos_model->search_video($sort_by, $keyword);
		}
        
        $this->load->view('videos/index', $data);
        
	    $this->load->view('templates/footer');
    }

    public function watch($VID = NULL) {
        $data['video_item'] = $this->videos_model->get_video($VID);
	    if (empty($data['video_item'])) {
            show_404();
        }
        $this->videos_model->update_likes();
        
	    //$data['title'] = 'Videos in '.$VID;
	    $this->load->view('templates/header', $data);
        $this->load->view('videos/watch', $data);
        
        if (isset($VID)){
            $user_data = array(
                'VID' => $VID
            );
            $this->session->set_userdata($user_data);
            $data['comments'] = $this->comments_model->get_comments($VID);
            $data['title'] = 'Comments';

            $data['count'] = $this->ratings_model->get_ratings($VID);

            $this->load->view('rating', $data);
            
            $this->load->view('comment_form', $data);
            $this->load->view('comments', $data);

            
        }
        
        $this->load->view('templates/footer');
        
    }
}
