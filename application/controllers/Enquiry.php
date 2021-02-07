<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry extends CI_Controller {
	
public function __construct()
	{
		parent::__construct();
		$this->load->model('Enquiry_model');
		$this->load->model('Auth_model');
	}

	public function submit_enquiry()
		{
			$data['s_name'] = $this->input->post('name');
			$data['s_email'] = $this->input->post('email');
			$data['s_mobile'] = $this->input->post('mobile');
			$dob = explode("/", $_POST['dob']);
			$data['s_dob'] = $dob['0'].'-'.$dob['1'].'-'.$dob['2'];
			$insert_id = $this->Enquiry_model->insertEnquiry($data);

			if($insert_id){
				$mobile=substr($data['s_mobile'],-2);
			 	$format=sprintf("%04d",$insert_id);
			 	$alpha="S";
			 	$num = date('y');
			 	$var['username']=$alpha.$num.$format.$mobile;
			 	$var['password']=$data['s_dob'];
			 	$var['enquiry_id']=$insert_id;
			 	$array = array(
			 		'enquiry_id' => $insert_id,
			 		'application_id' => $var['username']
			 	);
			 	$this->Enquiry_model->insertApplicationStatus($array);
			 	$res = $this->Auth_model->insertLogin($var);
			 	if($res){
			 		redirect('Enquiry/enquiry_success/'.$var['username'].'/'.$var['password']);
			 	}
			}

		}

	public function enquiry_success($u, $p)
		{
			if($u && $p){
				$data['username'] = $u;
				$data['password'] = $p;
				$this->load->view('layout/header');	
				$this->load->view('enquiry/enquiry_success', $data);
				$this->load->view('layout/footer');
			}else{
				redirect('/');
			}
		}
}