<?php
  /**
  * 
  */
  class UpdateController extends CI_Controller
  {
    
    public function registerUser()
    {
      if($this->input->post()){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $credentials = array(
            'name' =>$name,
            'email' =>$email
        );
         
        $this->load->model('UpdateModel');
            if($this->UpdateModel->updateUser($credentials)){
            $this->load->view('success');
        }
        else{
            $this->load->view('fail');
        }
      }
      else{
        $this->load->view('register');
      }

    }
  }