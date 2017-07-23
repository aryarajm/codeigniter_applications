<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class DbController extends CI_Controller
  {
     public function insert()
     {
       if($_POST()){
         $name=$this->input->post('name');
         $email=$this->input->post('email');
         $credentials = array(
            'name' =>$name,
            'email'=>$email
            );
         $this->load->model('InsertModel');
            if($this->InsertModel->UserInsert){
            	$this->load->view('success');
            }
            else{
            	$this->load->view('fail');
            }
       }
       else{
       	$this->load->
       }



     }

  }