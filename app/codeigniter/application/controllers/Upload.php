<?php
// Show login page
class Upload extends CI_Controller{
	public function __construct(){
        parent::__construct();
        $this->load->helper(array('form','url'));
        global $UID;
    }

    public function index(){
        $this->load->view("templates/header");
        if($this->session->userdata('logged_in')){
            $this->load->view("upload_form", array('error'=> ' '));
        }else{
            $data['title'] = 'Log In';
			$data['msg'] = 'Must login to upload!';
			$this->load->view('logindb', $data);
        }
        
        $this->load->view("templates/footer");
    }

    public function do_upload(){
        $this->load->model('videos_model');

        $config['upload_path'] = './uploads/';
        $config['allowed_types'] = 'mp4|mov';
        
        $this->load->library('upload', $config);
        $this->load->view("templates/header");
        
        if (!$this->upload->do_upload('userfile')){
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('upload_form', $error);
        }else{
            
            $data = array('upload_data'=>$this->upload->data());
            $this->videos_model->upload_video();
            $this->load->view('upload_success', $data);
            
        }
    }
}