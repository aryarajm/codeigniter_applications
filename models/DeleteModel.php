<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
 class DeleteModel extends CI_Model
 {
 	public function deleteUser($credentials)
 	{
  		$this->db->where('name',$credentials['name']);
	 	if($this->db->delete('tbl_register')){
	 		return true;
	 	} else{
	 		return false;
	 	}
 	}	
 }
