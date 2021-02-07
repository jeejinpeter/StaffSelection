<?php 
defined('BASEPATH') or exit('No direct script access allowed');
class Staff_model extends CI_Model {
	function __construct()
	{
		// Call the Model constructor
		parent::__construct();
	}

	public function getApplicationByEnquiryID($enquiry_id){
		$this->db->where("enquiry_no", $enquiry_id);
		return $this->db->get("application_basic_info")->result_array();
	}

	public function getApplicationEducationDetails($enquiry_id){
		$this->db->where("enquiry_no", $enquiry_id);
		return $this->db->get("application_education_details")->result_array();
	}

	public function getApplicationUGDetails($enquiry_id){
		$this->db->where("enquiry_no", $enquiry_id);
		$this->db->where("group_type", "UG");
		return $this->db->get("application_education_details")->result_array();
	}

	public function getApplicationExperienceDetails($enquiry_id){
		$this->db->where("enquiry_no", $enquiry_id);
		return $this->db->get("application_experience_details")->result_array();
	}

	public function getApplcationStatus($enquiry_id){
		$this->db->where("enquiry_id", $enquiry_id);
		return $this->db->get("application_form_status")->result_array();
	}

	public function updateStaffDetails($data, $enquiry_id){
		$this->db->where("enquiry_no", $enquiry_id);
		return $this->db->update("application_basic_info", $data);
	}

	public function deleteEducationDetails($enquiry_id){
		$this->db->where("enquiry_no", $enquiry_id);
		return $this->db->delete("application_education_details");
	}

	public function insertEducation($data){
		return $this->db->insert("application_education_details", $data);
	}



}