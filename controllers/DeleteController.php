<?php
  /**
  * 
  */
  class DeleteController extends CI_Controller
  {
    
    public function deleteUser()
    {
      if($this->input->post()){
        $name=$this->input->post('name');
        $credentials = array(
            'name' =>$name
        );
         
        $this->load->model('DeleteModel');
            if($this->DeleteModel->deleteUser($credentials)){
            $this->load->view('success');
        }
        else{
            $this->load->view('fail');
        }
      }
      else{
        $this->load->view('delete');
      }

    }
  }