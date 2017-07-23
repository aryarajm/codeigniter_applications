<?php

class Form extends CI_Controller {

        public function index()
        {
             
              $this->load->helper(array('form', 'url'));
              $this->load->library('form_validation');
              $this->form_validation->set_rules('number','Number','callback_number_check');
                            
        }
 public function name_check($name)
        {
              if($number =='1-5'){
                
                $this->form_validation->set_message('number_check', 'The {field} is cannot be the word ');
                        return false;
               }  
               else {
                             return true;
                     }      
        }
}

        


