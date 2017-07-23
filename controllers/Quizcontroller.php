<?php  
class Quizcontroller extends CI_Controller { 
    public function verifyAnswer(){
    	if($this->input->post()){
    		$correct_answer = $this->input->post('correct_answer');
             if($this->input->post('option')){
             	 if($correct_answer==($this->input->post('option'))){
             	 	echo "correct";
             	 }
             	 else{
             	 	echo "wrong";
             	 } 
              }
        else{
        	$this->load->model('QuizModel');
              if($this->QuizModel->quiz()){
                  $data['result']=$this->QuizModel->quiz();       
                  $this->load->view('quiz',$data);
        }
    	}
        }

}}