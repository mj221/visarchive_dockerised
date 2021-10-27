<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comments_model extends CI_Model {
    public function __construct() {
        $this->load->database();
       
    }
    public function get_comments($ID) {
        $query = $this->db->get_where('comments',array('VID' => $ID));
        return $query->result_array();
    }
    public function post_comment(){
        $this->load->helper('url');
        
        $data = array(
            'username' =>$this->session->userdata('username'),
            'content' => $this->input->post('commenttext'),
            'VID' => $this->session->userdata('VID'),
            'posted_dateTime' => date('Y-m-d H-i-s')
        );
        return $this->db->insert('comments', $data);
    }

    
}
