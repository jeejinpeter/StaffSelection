<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enquiry_model extends CI_Model {

	public function insertEnquiry($data)
	{
	 $this->db->insert("staff_enquiry",$data);
	 $id =  $this->db->insert_id();
	 $var['enquiry_no'] = $id;
	 $this->db->insert("application_basic_info",$var);
	 return $id;
	}

	public function insertApplicationStatus($data)
	{
		return $this->db->insert("application_form_status",$data);
	}

	public function getEnquiryData($id){
		$this->db->where("id", $id);
		return $this->db->get("staff_enquiry")->result_array();

	}

	public function updateStatus($data, $application_id){
		$this->db->where("application_id", $application_id);
		return $this->db->update("application_form_status", $data);

	}






}