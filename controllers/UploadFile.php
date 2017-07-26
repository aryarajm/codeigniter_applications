<?php
  
   class UploadFile extends CI_Controller {
	
      /*public function __construct() { 
         parent::__construct(); 
         $this->load->helper(array('form', 'url')); 
      }
		
      public function index() { 
         $this->load->view('Upload', array('error' => ' ' )); 
      } 
		*/
       /*public function index()
        {
                
        }*/
      /*public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }
*/
      
      public function do_upload() {
        //$this->load->view('uploadForm');
          parent::__construct();
         $this->load->helper(array('form', 'url'));
        
         $config['upload_path']   = './uploads/'; 
         $config['allowed_types'] = 'gif|jpg|png'; 
         $config['max_size']      = 100; 
         $config['max_width']     = 1024; 
         $config['max_height']    = 768;  
         $this->load->library('upload', $config);

         /*if ( ! $this->upload->do_upload('userfile')) {
            $error = array('error' => $this->Upload->display_errors()); 
            $this->load->view('Upload', $error); 
         }
			
         else { 
            $data = array('upload_data' => $this->Upload->data()); 
            $this->load->view('upload_success', $data); 
         } */
         if($this->upload->do_upload())
           {
               echo "file upload success";
           }
        else
          {
               //echo "file upload failed";
         }

      }
/*            else{
            echo "file upload failed";
      } 
*/
      }
   ?>