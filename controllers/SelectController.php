<?php
  /**
  * 
  */
  class SelectController extends CI_Controller
  {
    
    public function selectUser()
    {
     if($this->input->post()){
        $name=$this->input->post('name');
        $credentials = array(
            'name' =>$name
        );
         
        $this->load->model('SelectModel');
            if($this->SelectModel->selectUser($credentials)){
            $var['read']= $this->SelectModel->selectUser($credentials);
            $this->load->view('Select',$var);
        }
        else{
            $this->load->view('fail');
        }
      }
      else{
        $this->load->view('select');
      }

    }
  }