<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
 class Selectviewmodel extends CI_Model
 {
 	public function selectUser()
 	{
	 	 $query= $this->db->get('tbl_register');
	 	 return $query->result();


 	}	
 }
