<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

  class QuizModel extends CI_Model
 {
 	public function quiz(){
 		$this->db->where("qid",$this->questionId);
	    $query = $this->db->get('quiz');
	    return ($query->result());
         
 	}
 	public function insertAnswer(){
 		$this->db->insert('selected_answer', $this->dataInsert);
 	}
 	public function selectAnswer(){	
		$query= $this->db->get('selected_answer');
	    return $query->result();
	}
	public function deleteAnswer(){
		$this->db->empty_table('selected_answer');
	}

 }
