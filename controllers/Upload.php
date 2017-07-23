<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Upload extends CI_Controller {
 public function do_upload(){
	 if($this->input->post()){
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->view('upload_success', array('error' => ' ' ));
     }
     else
     {
		
		$this->load->library('upload');

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());

			$this->load->view('uploadForm', $error);
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());

			$this->load->view('upload_success',$data);
		}
	}
}}
?>