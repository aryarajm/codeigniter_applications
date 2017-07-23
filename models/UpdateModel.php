<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
 class UpdateModel extends CI_Model
 {
 	public function updateUser($credentials)
 	{
 		$this->db->set('email',$credentials['email']);
 		$this->db->where('name',$credentials['name']);
	 	if($this->db->update('tbl_register')){
	 		return true;
	 	} else{
	 		return false;
	 	}
 	}	
 }
