<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

 /**
 * 
 */
 class SelectModel extends CI_Model
 {
 	public function selectUser($credentials)
 	{
 		
 		$query = $this->db->get('tbl_register');
        return ($query->result());

 	}	
 }
