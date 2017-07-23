<?php
  /**
  * 
  */
  class HomeController extends CI_Controller
  {
    
    public function registerUser()
    {
      if($this->input->post()){
        $name=$this->input->post('name');
        $email=$this->input->post('email');
        $phone=$this->input->post('phone');

        $credentials = array(
            'name' =>$name ,
            'email' =>$email ,
            'phone'=>$phone
        );

        $this->load->model('HomeModel');
    
        if($this->HomeModel->registerUser($credentials)){
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