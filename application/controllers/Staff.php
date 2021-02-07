<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Staff extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if(!isset($this->session->userdata['logged_in'])){
			redirect('auth/login');
		}
		$this->load->model('Auth_model');
		$this->load->model('Staff_model');
		$this->load->model('Enquiry_model');
		//$this->load->library("Pdf");
	}

	public function apply()
	{
		$data = "";
		$data['application_basic_info'] = $this->Staff_model->getApplicationByEnquiryID($this->session->userdata('enquiry_id'));
		$data['application_edn_info'] = $this->Staff_model->getApplicationEducationDetails($this->session->userdata('enquiry_id'));
		if($data['application_edn_info'][0]['group_type']=="SSLC"){
			$data['sslc_details'] = $data['application_edn_info'][0];
		}
		if($data['application_edn_info'][1]['group_type']=="Plus Two"){
			$data['plustwo_details'] = $data['application_edn_info'][1];
		}
		$data['application_ug_info'] = $this->Staff_model->getApplicationUGDetails($this->session->userdata('enquiry_id'));
		$data['application_experience_info'] = $this->Staff_model->getApplicationExperienceDetails($this->session->userdata('enquiry_id'));
		$data['application_status'] = $this->Staff_model->getApplcationStatus($this->session->userdata('enquiry_id'));
		//var_dump($data['application_ug_info']); die();
		if($data['application_status'] != NULL){
			if(count($data['application_status']) == 1){
				if($data['application_status'][0]['step_seven'] == "1"){
					$step = "finish";
				}elseif($data['application_status'][0]['step_six'] == "1"){
					$step = "step_seven";	
				}elseif($data['application_status'][0]['step_five'] == "1"){
					$step = "step_six";	
				}elseif($data['application_status'][0]['step_four'] == "1"){
					$step = "step_five";	
				}elseif($data['application_status'][0]['step_three'] == "1"){
					$step = "step_four";	
				}elseif($data['application_status'][0]['step_two'] == "1"){
					$step = "step_three";	
				}elseif($data['application_status'][0]['step_one'] == "1"){
					$step = "step_two";	
					$data['enquiry_data'] = $this->Enquiry_model->getEnquiryData($this->session->userdata('enquiry_id')); 
				}else{
					$step = "step_one";
				}
				$data['step'] = $step;
				$newdata = array(
			        'application_id'  => $data['application_status'][0]['application_id'] 
				);
				$this->session->set_userdata($newdata);
				$this->load->view('staff/application_form', $data);
			}else{
				redirect("auth/");
			}
		}else{
			redirect("auth/");
		}
		
	}

	public function insert_application_form()
	{
		$form_data = $_POST;
		$data['application_id'] = $_SESSION['application_id'];
		$data['post'] = $form_data['applied_for'];
		$data['department'] = $form_data['department'];
		$data['name'] = $form_data['name'];
		$data['gender'] = $form_data['sex'];
		$data['age'] = $form_data['age'];
		$data['dob'] = $form_data['dob'];
		$data['place_of_birth_district'] = $form_data['place_of_birth_district'];
		$data['place_of_birth_state'] = $form_data['place_of_birth_state'];
		$data['religion'] = $form_data['religion'];
		$data['caste'] = $form_data['community'];
		$data['physical_disability'] = $form_data['disability'];
		$data['disability_percentage'] = $form_data['disablity_percentage'];
		$data['present_address'] = $form_data['permanent_address'];
		$data['present_city'] = $form_data['permanent_city'];
		$data['present_district'] = $form_data['permanent_district'];
		$data['present_state'] = $form_data['permanent_state'];
		$data['present_pincode'] = $form_data['permanent_zipcode'];
		$data['contact_address'] = $form_data['contact_address'];
		$data['contact_city'] = $form_data['contact_city'];
		$data['contact_district'] = $form_data['contact_district'];
		$data['contact_state'] = $form_data['contact_state'];
		$data['contact_pincode'] = $form_data['contact_zipcode'];
		$data['phone'] = $form_data['phone'];
		$data['mobile'] = $form_data['mobile'];
		$data['email'] = $form_data['email'];
		$data['father_name'] = $form_data['father_name'];
		$data['father_education'] = $form_data['father_education'];
		$data['father_occupation'] = $form_data['father_occupation'];
		$data['father_remarks'] = $form_data['father_remarks'];
		$data['mother_name'] = $form_data['mother_name'];
		$data['mother_education'] = $form_data['mother_education'];
		$data['mother_occupation'] = $form_data['mother_occupation'];
		$data['mother_remarks'] = $form_data['mother_remarks'];
		$data['marital_status'] = $form_data['marital'];
		$data['spouse_education'] = $form_data['spouse_qualification'];
		$data['spouse_occupation'] = $form_data['spouse_occupation'];
		$data['applied_other_job'] = $form_data['applied_other_job'];
		$data['other_job_detail'] = $form_data['other_job_detail'];
		$data['minimum_period'] = $form_data['min_assured_service'];

		if($form_data['language'] != NULL){
			$language = $form_data['language'];
			if($form_data['language_read']== ""){ $a = "off";}else{$a = $form_data['language_read']; }
			if($form_data['language_write']== ""){ $b = "off";}else{$b = $form_data['language_write']; }
			if($form_data['language_speak']== ""){ $c = "off";}else{$c = $form_data['language_speak']; }
			$detail = $a.','.$b.','.$c;
		}else{
			$language = "";
			$detail = "";
		}
		if($form_data['language2']!= NULL){
			$language2 = $form_data['language2'];
			if($form_data['language_read2']== ""){ $p = "off";}else{$p = $form_data['language_read2']; }
			if($form_data['language_write2']== ""){ $q = "off";}else{$q = $form_data['language_write2']; }
			if($form_data['language_speak2']== ""){ $r = "off";}else{$r = $form_data['language_speak2']; }
			$detail2 = $p.','.$q.','.$r;
		}else{
			$language2 = "";
			$detail2 = "";
		}

		if($form_data['language3']!= NULL){
			$language3 = $form_data['language3'];
			if($form_data['language_read3']== ""){ $l = "off";}else{$l = $form_data['language_read3']; }
			if($form_data['language_write3']== ""){ $m = "off";}else{$m = $form_data['language_write3']; }
			if($form_data['language_speak3']== ""){ $n = "off";}else{$n = $form_data['language_speak3']; }
			$detail3 = $l.','.$m.','.$n;
		}else{
			$language3 = "";
			$detail3 = "";
		}

		if($form_data['language4']!= NULL){
			$language4 = $form_data['language4'];
			if($form_data['language_read4']== ""){ $x = "off";}else{$x = $form_data['language_read4']; }
			if($form_data['language_write4']== ""){ $y = "off";}else{$y = $form_data['language_write4']; }
			if($form_data['language_speak4']== ""){ $z = "off";}else{$z = $form_data['language_speak4']; }
			$detail4 = $x.','.$y.','.$z;
		}else{
			$language4 = "";
			$detail4 = "";
		}

		$data['language_one'] = $language .'-'. $detail;
		$data['language_two'] = $language2 .'-'. $detail2;
		$data['language_three'] = $language3 .'-'. $detail3;
		$data['language_four'] = $language4 .'-'. $detail4;
 
		$var['step_one'] = 1;

		$this->Enquiry_model->updateStatus($var, $_SESSION['application_id']);
		$this->Staff_model->updateStaffDetails($data, $_SESSION['enquiry_id']);
		echo "TRUE";
	}

	public function insert_education_details()
	{
		$form_data = $_POST;
		$data['application_edn_info'] = $this->Staff_model->getApplicationEducationDetails($this->session->userdata('enquiry_id'));
		if($data['application_edn_info'] != NULL)
		{
			$this->Staff_model->deleteEducationDetails($_SESSION['enquiry_id']);
		}
		$sslc = array(
			'enquiry_no'	   => $_SESSION['enquiry_id'],
			'examination'      => "SSLC",
			'institution'      => $form_data['sslc_institution'],
			'board'		       => $form_data['sslc_board'],	
			'subjects'	       => $form_data['sslc_subject'],
			'year_of_passing'  => $form_data['sslc_yr_passed'],
			'no_of_attempts'   => $form_data['sslc_attempts'],
			'class_grade'      => $form_data['sslc_grade'],
			'percentage_marks' => $form_data['sslc_pom'],
			'group_type' 	   => $form_data['sslc_type']
		);
		$this->Staff_model->insertEducation($sslc);

		$plustwo = array(
			'enquiry_no'	   => $_SESSION['enquiry_id'],
			'examination'      => "Plus Two",
			'institution'      => $form_data['plustwo_institution'],
			'board'		       => $form_data['plustwo_board'],	
			'subjects'	       => $form_data['plustwo_subject'],
			'year_of_passing'  => $form_data['plustwo_yr_passed'],
			'no_of_attempts'   => $form_data['plustwo_attempts'],
			'class_grade'      => $form_data['plustwo_grade'],
			'percentage_marks' => $form_data['plustwo_pom'],
			'group_type' 	   => $form_data['plustwo_type']
		);
		$this->Staff_model->insertEducation($plustwo);

		$ug_examination = $form_data['ug_exam_name'];
		$ug_institution = $form_data['ug_institution_name'];
		$ug_board = $form_data['ug_board_name'];
		$ug_subjects = $form_data['ug_subject_name'];
		$ug_passing_year = $form_data['ug_passed_yr'];
		$ug_attempts = $form_data['ug_no_attempts'];
		$ug_grade = $form_data['ug_grade_got'];
		$ug_percentage = $form_data['ug_percentage_marks'];
		$ug_array = [];
		$result = array_filter($ug_examination); 
		foreach($result as $key => $value)
		{
			$ug_array[$key] = array(
				'enquiry_no'	   => $_SESSION['enquiry_id'],
				'examination'      => $ug_examination[$key],
				'institution'      => $ug_institution[$key],
				'board'		       => $ug_board[$key],	
				'subjects'	       => $ug_subjects[$key],
				'year_of_passing'  => $ug_passing_year[$key],
				'no_of_attempts'   => $ug_attempts[$key],
				'class_grade'      => $ug_grade[$key],
				'percentage_marks' => $ug_percentage[$key],
				'group_type' 	   => $form_data['ug_type']
			);
		}
		$this->db->insert_batch('application_education_details', $ug_array);

		$pg_examination = $form_data['pg_exam_name'];
		$pg_institution = $form_data['pg_institution_name'];
		$pg_board = $form_data['pg_board_name'];
		$pg_subjects = $form_data['pg_subject_name'];
		$pg_passing_year = $form_data['pg_passed_yr'];
		$pg_attempts = $form_data['pg_no_attempts'];
		$pg_grade = $form_data['pg_grade_got'];
		$pg_percentage = $form_data['pg_percentage_marks'];
		$pg_array = [];
		$pg_result = array_filter($pg_examination); 
		foreach($pg_result as $key => $value)
		{
			$pg_array[$key] = array(
				'enquiry_no'	   => $_SESSION['enquiry_id'],
				'examination'      => $pg_examination[$key],
				'institution'      => $pg_institution[$key],
				'board'		       => $pg_board[$key],	
				'subjects'	       => $pg_subjects[$key],
				'year_of_passing'  => $pg_passing_year[$key],
				'no_of_attempts'   => $pg_attempts[$key],
				'class_grade'      => $pg_grade[$key],
				'percentage_marks' => $pg_percentage[$key],
				'group_type' 	   => $form_data['pg_type']
			);
		}
		$this->db->insert_batch('application_education_details', $pg_array);

		$mphil_examination = $form_data['mphil_exam_name'];
		$mphil_institution = $form_data['mphil_institution_name'];
		$mphil_board = $form_data['mphil_board_name'];
		$mphil_subjects = $form_data['mphil_subject_name'];
		$mphil_passing_year = $form_data['mphil_passed_yr'];
		$mphil_attempts = $form_data['mphil_no_attempts'];
		$mphil_grade = $form_data['mphil_grade_got'];
		$mphil_percentage = $form_data['mphil_percentage_marks'];
		$mphil_array = [];
		$mphil_result = array_filter($mphil_examination); 
		foreach($mphil_result as $key => $value)
		{
			$mphil_array[$key] = array(
				'enquiry_no'	   => $_SESSION['enquiry_id'],
				'examination'      => $mphil_examination[$key],
				'institution'      => $mphil_institution[$key],
				'board'		       => $mphil_board[$key],	
				'subjects'	       => $mphil_subjects[$key],
				'year_of_passing'  => $mphil_passing_year[$key],
				'no_of_attempts'   => $mphil_attempts[$key],
				'class_grade'      => $mphil_grade[$key],
				'percentage_marks' => $mphil_percentage[$key],
				'group_type' 	   => $form_data['mphil_type']
			);
		}
		$this->db->insert_batch('application_education_details', $mphil_array);

		$phd_examination = $form_data['phd_exam_name'];
		$phd_institution = $form_data['phd_institution_name'];
		$phd_board = $form_data['phd_board_name'];
		$phd_subjects = $form_data['phd_subject_name'];
		$phd_passing_year = $form_data['phd_passed_yr'];
		$phd_attempts = $form_data['phd_no_attempts'];
		$phd_grade = $form_data['phd_grade_got'];
		$phd_percentage = $form_data['phd_percentage_marks'];
		$phd_array = [];
		$phd_result = array_filter($phd_examination); 
		foreach($phd_result as $key => $value)
		{
			$phd_array[$key] = array(
				'enquiry_no'	   => $_SESSION['enquiry_id'],
				'examination'      => $phd_examination[$key],
				'institution'      => $phd_institution[$key],
				'board'		       => $phd_board[$key],	
				'subjects'	       => $phd_subjects[$key],
				'year_of_passing'  => $phd_passing_year[$key],
				'no_of_attempts'   => $phd_attempts[$key],
				'class_grade'      => $phd_grade[$key],
				'percentage_marks' => $phd_percentage[$key],
				'group_type' 	   => $form_data['phd_type']
			);
		}
		$this->db->insert_batch('application_education_details', $phd_array);

		$other_examination = $form_data['o_exam_name'];
		$other_institution = $form_data['o_institution_name'];
		$other_board = $form_data['o_board_name'];
		$other_subjects = $form_data['o_subject_name'];
		$other_passing_year = $form_data['o_passed_yr'];
		$other_attempts = $form_data['o_no_attempts'];
		$other_grade = $form_data['o_grade_got'];
		$other_percentage = $form_data['o_percentage_marks'];
		$other_array = [];
		$result = array_filter($other_examination); 
		foreach($result as $key => $value)
		{
			$other_array[$key] = array(
				'enquiry_no'	   => $_SESSION['enquiry_id'],
				'examination'      => $other_examination[$key],
				'institution'      => $other_institution[$key],
				'board'		       => $other_board[$key],	
				'subjects'	       => $other_subjects[$key],
				'year_of_passing'  => $other_passing_year[$key],
				'no_of_attempts'   => $other_attempts[$key],
				'class_grade'      => $other_grade[$key],
				'percentage_marks' => $other_percentage[$key],
				'group_type' 	   => $form_data['other_type']
			);
		}
		$this->db->insert_batch('application_education_details', $other_array);
		$var['step_two'] = 1;
		$this->Enquiry_model->updateStatus($var, $_SESSION['application_id']);
		echo "TRUE";

	}

}