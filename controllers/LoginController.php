<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class LoginController extends CI_Controller
  {
    
    public function loginUser()
    {
      $this->load->library('session');
         
      $set_data=$this->session->all_userdata();
       if(isset($set_data['session_data'])){
         $this->load->view('Home.php');
       }
       else{
      if($this->input->post()){
         $username=$this->input->post('username');
         $password=$this->input->post('password');    
         if ($username == 'user') {
          $credentials = array(
            "username" =>$username ,
            "password" =>$password );
          $this->session->set_userdata('session_data',$credentials);
            $this->load->view('Home.php');
        } else {
            echo"invalid login";
        }
        } 
      else{
        $this->load->view('Login.php');
      }

    }}
    public function logoutUser()
    {
      if (isset($_POST['logout'])){
      unset($_SESSION['session_data']);
         /*$this->load->view('Login.php');*/
      }
    }

  }
  