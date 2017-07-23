<?php   
 class QuizController extends CI_Controller {  
    var $questionId;
    var $dataInsert = array();
     public function selectQuestions(){ 
        if (isset($_GET['question_id'])) {
              $this->questionId = $_GET['question_id'];
            }
            else {
             $this->clearHistory();
              $this->questionId = 1;
            }       
        if($this->input->post()){
          
          $correct_answer = $this->input->post('correct_answer');
             if(isset($_POST['option'])){
              $this->insert();
                if($correct_answer==($this->input->post('option'))) {
                   $this->load->model('QuizModel');
                      if($this->QuizModel->quiz()){
                        $data['result']=$this->QuizModel->quiz();       
                        $data['message'] = "correct";
                        $this->load->view('quiz',$data);
                      }
                }
                else {
                    $this->load->model('QuizModel');
                      if($this->QuizModel->quiz()){
                        $data['result']=$this->QuizModel->quiz();       
                        $data['message'] = "wrong";
                        $this->load->view('quiz',$data);
                      }
                }  
                               
             }
             $this->summary();
             
           }
          else{            
               $this->load->model('QuizModel');
               if($this->QuizModel->quiz()){
                 $data['result']=$this->QuizModel->quiz();       
                 $data['message'] = "";
                 $this->load->view('quiz',$data);
               }               
          }
      }
      public function insert(){       
        $this->dataInsert['qid'] = $this->questionId;
        $this->dataInsert['answer'] = $this->input->post('option');
        $this->load->model('QuizModel');
        $this->QuizModel->insertAnswer();
        return true;
      }
      public function summary(){
        if(isset($_POST['summary'])){
           $this->load->model('QuizModel');
           if($this->QuizModel->selectAnswer()){
              $data['result']=$this->QuizModel->selectAnswer();
              $this->load->view('viewAnswer',$data);
           }
        }
      }
      public function clearHistory(){
         $this->load->model('QuizModel');
         $this->QuizModel->deleteAnswer();
      }
  }
