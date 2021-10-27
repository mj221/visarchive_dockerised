<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile_model extends CI_Model {
    public function __construct() {
        $this->load->database();
        
    }
    
    public function get_my_video($ID) {

        $query = $this->db->get_where('videos',array('UID' => $ID));

        return $query->result_array();
    }

    public function delete($ID){
        $this->load->helper('url');
        return $this->db->delete('videos', array('VID' => $ID)); 
    }
}
