<?php

class Form extends CI_Controller {

        public function index()
        {
             
                 $this->load->helper(array('form', 'url'));
                 $this->load->library('form_validation');
                 $this->form_validation->set_rules('name','Name','required|callback_name_check');
                 $this->form_validation->set_rules('email','Email','required|max_length[5]');    
                     if ($this->form_validation->run() == FALSE){
                          $this->load->view('Myform');
                      }
                     else{
                  $this->load->view('Success');
                   }
                
        }
 public function name_check($name)
        {
                  if($name == 'arya'){
                
                        $this->form_validation->set_message('name_check', 'The {field} field cannot be the word "arya"');
                        return false;
               }  
               else {
                             return true;
                     }      
        }
}

        


