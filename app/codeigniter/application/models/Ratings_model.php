<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ratings_model extends CI_Model {
    public function __construct() {
        $this->load->database();
       
    }
    public function get_ratings($ID) {
        $this->db->select('count(*) as video_likes');
        $this->db->from('likes');
        $this->db->where('VID =', $ID);

        $query = $this->db->get();
        return $query->row_array();
    }
    public function rate(){
        $this->load->helper('url');
        
        $data = array(
            'UID' =>$this->session->userdata('ID'),
            'VID' => $this->session->userdata('VID'),
        );
        return $this->db->insert('likes', $data);
    }
    
}
