<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User_model extends CI_Model{
		// Log in
		public function login($username, $password){
			// Validate
			$this->db->where('username', $username);
            $this->db->where('password', $password);
            
			$result = $this->db->get('accounts');
			if($result->num_rows() == 1){
				return true;
			} else {
				return false;
			}
		}

		// Check username exists
		public function check_username_exists($username){
			$query = $this->db->get_where('accounts', array('username' => $username));
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		public function check_email_exists($email){
			$query = $this->db->get_where('accounts', array('email' => $email));
			// return true if no email exist
			if(empty($query->row_array())){
				return true;
			} else {
				return false;
			}
		}
		public function set_user() {
			$this->load->helper('url');
			$slug = url_title($this->input->post('username'), 'dash', TRUE);
			$data = array(
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password'),
			);
			return $this->db->insert('accounts', $data);
		}
		public function get_user($username){
			$query = $this->db->get_where('accounts', array('username' => $username));

			return $query->row_array();
		}
		public function get_userByID($ID){
			$query = $this->db->get_where('accounts', array('ID' => $ID));

			return $query->row_array();
		}
		public function check_userLiked($UID, $VID){
			$this->db->where('UID', $UID);
			$this->db->where('VID', $VID);

			//return true if user is yet to like the video
			$result = $this->db->get('likes');
			if($result->num_rows() == 0){
				return true;
			} else {
				return false;
			}
		}
	}