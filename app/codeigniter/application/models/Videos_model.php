<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Videos_model extends CI_Model {
    public function __construct() {
        $this->load->database();
        $this->load->model('ratings_model');
    }
    public function get_video($ID = FALSE) {

        if ($ID === FALSE) {
            $query = $this->db->get('videos');
            return $query->result_array();
        }

        $query = $this->db->get_where('videos',array('VID' => $ID));

        return $query->row_array();
    }
    public function upload_video(){
        $this->load->helper('url');
        $slug = url_title($this->input->post('videotitle'), 'dash', TRUE);
        $target_dir = "uploads/";
        
        $UID = $this->session->userdata('ID');
        /* $VID = $this->session->userdata('VID');
        $data['count'] = $this->ratings_model->get_ratings($VID);
        $Likes = $data['count']['video_likes']; */
        
        $data = array(
            'title' => $this->input->post('videotitle'),
            'description' =>$this->input->post('videodescription'),
            'filename' => $target_dir.$_FILES["userfile"]["name"],
            'UID' => $UID,
            'uploaded_dateTime'=> date('Y-m-d H-i-s')
        );
        return $this->db->insert('videos', $data);
    }
    public function update_likes(){
        $this->load->helper('url');

        $VID = $VID = $this->session->userdata('VID');
        $data['count'] = $this->ratings_model->get_ratings($VID);
        $Likes = $data['count']['video_likes'];

        $data = array('likes' => $Likes);

        $where = "VID = ".$VID;
        return $this->db->update('videos', $data, $where);

    }
    public function search_video($order, $keyword){
        // $this->db->select('title', 'description', 'username', 'uploaded_dateTime', 'likes');
        $this->db->select('*');
        $this->db->from('videos');
        
        // $this->db->join('accounts', 'accounts.ID = videos.UID');
        $this->db->like('title', $keyword);
        $this->db->order_by('likes', $order);

        $query = $this->db->get();

        // return $query->result();
        return $query->result_array();

    }
    
}
