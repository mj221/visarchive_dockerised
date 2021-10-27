<?php
// Show login page
class Authen extends CI_Controller{
	public function __construct(){
		parent::__construct();
		$this->load->helper('cookie');
	}
	public function login(){
		$this->load->view('templates/header');
        $this->load->model('user_model');
        $data['msg'] = '';
		if(!$this->session->userdata('logged_in')){
            $username = $this->input->post('username');
            if ($username == '' & isset($username)){
                $data['msg'] = 'Wrong username or password!';
            }
			$password = $this->input->post('password');
			if ($user_id = $this->user_model->login($username, $password)){
				// Create session
				$data['user'] = $this->user_model->get_user($username);
				$UID = $data['user']['ID'];

				$user_data = array(
					'username' => $username,
					'ID' => $UID,
					'logged_in' => true
				);
				$this->session->set_userdata($user_data);

				// Set message
				$this->session->set_flashdata('user_loggedin', 'You are now logged in. Welcome '.$this->session->userdata('username'));
				$data['title'] = 'Home';
				$this->load->view('home',$data);

				if ($this->input->post("chkremember")){
					$this->input->set_cookie('user', $username, 86500);
					$this->input->set_cookie('pass', $password, 86500);
				}else{
					delete_cookie('user');
					delete_cookie('pass');
				}
				header("Refresh:0");
				
			}else{
				$data['title'] = 'Log In';
				if(isset($username)){
					$data['msg'] = 'Invalid username or password!';
				}
				$this->load->view('logindb', $data);
				
			}
		}else{
			
			$this->session->set_flashdata('user_loggedin', 'You are now logged in. Welcome '.$this->session->userdata('username').'.');
			$data['title'] = 'Home';
			$this->load->view('home',$data);
		
		}
		
		$this->load->view('templates/footer');
	}
	public function logout(){
		// Unset user data
		$this->session->unset_userdata('logged_in');
		$this->session->unset_userdata('ID');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('VID');

		// Set message
		$this->session->set_flashdata('user_loggedout', 'You are now logged out');

		redirect('/Authen/login');
	}

	public function create(){
		//create account
		$this->load->view('templates/header');
        $this->load->model('user_model');
        $data['msg'] = '';
		if(!$this->session->userdata('logged_in')){
			$username = $this->input->post('username');
			$email = $this->input->post('email');
            if ($username == '' & isset($username)){
                $data['msg'] = 'Wrong username or password!';
            }
			$password = $this->input->post('password');
							
			if (isset($username) & isset($email)){

				if ($user_id = $this->user_model->check_username_exists($username)
					& $this->user_model->check_email_exists($email)){
						// Username and email unique, now check email format
						if(!(filter_var($email, FILTER_VALIDATE_EMAIL))){
							$data['msg'] = 'Invalid Email Format';
							$data['title'] = 'Create Account';	
							$this->load->view('createdb', $data);
							
						}else{
							if (strlen($password) < 6){
								$data['msg'] = 'Password is too weak (Requirement: > 6 words)';
								$data['title'] = 'Create Account';	
								$this->load->view('createdb', $data);
							}else{
								$user_id = $this->user_model->set_user();
								$this->load->view('createSuccess');
							}
							
						}
				}else{
					$data['msg'] = 'Username already taken!';
					
					if(!($this->user_model->check_email_exists($email))){
						$data['msg'] = 'An account associated with this Email address already exist';
					}
					$data['title'] = 'Create Account';	
					$this->load->view('createdb', $data);
				}
			}else{
				$data['title'] = 'Create Account';	
				$this->load->view('createdb', $data);
			}
			
		}
		$this->load->view('templates/footer');
	}

	public function update_pwd(){
		$this->load->helper('url');
		$this->load->view('templates/header');
		$data['msg'] = '';

		$UID = $this->session->userdata('ID');
		$password = $this->input->post('password');
		if (isset($password)){
			
			if (strlen($password) < 6){
				$data['msg'] = 'Password is too week (Requirement: > 6 words)';
				$data['title'] = 'Change Password';	
				$this->load->view('changePwd', $data);
			}else{
				$this->load->view('pwdSuccess');

				$data = array('password' => $password);

				$where = "ID = ".$UID;
				return $this->db->update('accounts', $data, $where);
			}

			
		}else{
			$data['title'] = "Change Password";
			$this->load->view('changePwd', $data);
		}
        
		$this->load->view('templates/footer');
    }
}