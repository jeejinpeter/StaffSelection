<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {
	
public function __construct()
	{
		parent::__construct();
		$this->load->model('Auth_model');
	}

	public function index()
	{
		$this->load->view('enquiry/enquiry');
	}

	public function login()
	{
		if(isset($_GET['error'])){
			if($_GET['error'] == "login"){
				$data['error_message'] = "Please use the correct login credentials!!!";
			}else{
				$data ="";
			}			
		}else{
			$data = "";
		}
		$this->load->view('auth/login', $data);
	}

	public function login_process(){
		$username = $_POST['username'];
		$password = $_POST['password'];
		$user = $this->Auth_model->getUserByUsername($username);
		if($user != null){			
			if($password === $user[0]['password']){
				$newdata = array(
			        'username'  => $user[0]['username'],
			        'enquiry_id' => $user[0]['enquiry_id'],
			        'logged_in' => TRUE,
			        'dob' => $user[0]['password']
	        );
				$this->session->set_userdata($newdata);
				redirect("staff/apply");
			}else{
				redirect("auth/login/?error=login");
			}
		}else{
			redirect("auth/login/?error=login");
		}
	}

	public function logout(){
		session_destroy();
		redirect("/");
	}
}
