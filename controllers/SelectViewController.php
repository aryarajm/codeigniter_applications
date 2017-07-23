<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  class SelectviewController extends CI_Controller
  {
    
    public function selectUser()
    {
        if($this->input->post()){
          $this->load->model('Selectviewmodel');
            if($this->Selectviewmodel->selectUser()){
            $data['result']=$this->Selectviewmodel->selectUser();
            $this->load->view('selectResult',$data);
        }
        else{
            $this->load->view('fail');
        }
      }
      else{
        $this->load->view('selectView');
      }
    }
  }