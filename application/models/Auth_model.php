<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Community Auth - Auth_model Model
 *
 * Community Auth is an open source authentication application for CodeIgniter 3
 *
 * @package     Community Auth
 * @author      Robert B Gottier
 * @copyright   Copyright (c) 2011 - 2018, Robert B Gottier. (http://brianswebdesign.com/)
 * @license     BSD - http://www.opensource.org/licenses/BSD-3-Clause
 * @link        http://community-auth.com
 */

class Auth_model extends CI_Model {

	public function insertLogin($data)
    {
        return $this->db->insert("staff_login",$data);       
    }

    public function getUserByUsername($username){
		$this->db->where("username", $username);
		return $this->db->get("staff_login")->result_array();

	}

}