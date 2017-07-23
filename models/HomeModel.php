<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
 class HomeModel extends CI_Model
 {
 	public function registerUser($credentials)
 	{
	 	if($this->db->insert('tbl_register',$credentials)){
	 		return true;
	 	} else{
	 		return false;
	 	}
 	}	
 }
