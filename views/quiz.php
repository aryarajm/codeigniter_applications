<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <?php 
      if (isset($_GET['question_id'])) {
        $questionId = $_GET['question_id'];
      }
      else {
        $questionId = 1;
      }
     ?>
    <input type="hidden" name="question-number" id="question-number" value="<?php  echo $questionId; ?>">
   <div class="question">
      <?php  echo $message; ?>
      <?php
      foreach ($result as  $value) {
      ?>
       <table> 
          <tr>
            <td><?php echo "$value->qid"; ?><?php echo "." ?></td>
            <td><?php echo "$value->question";?></td>
         </tr><br>
         <?php 
         }
         ?>
       </table>
   </div>
   <br>
   <div class="options">
   	 <?php
     foreach ($result as  $value) {
     	  $answer=$value->correct_answer;
      ?>
   <form action="http://localhost/arya/index.php/quiz1?question_id=<?php echo $questionId?>" method="post">
      <table>
        <tr>
          <td> <input type="radio" name="option" value="<?php echo "$value->option1"; ?>">
            <?php echo "$value->option1"; ?></td>
          <td><input type="radio" name="option" value="<?php echo "$value->option2";?>"> 
             <?php echo "$value->option2";?></td>
             <?php $this->input->post('option');?>
             <input type="hidden" name="correct_answer" value="<?php echo "$value->correct_answer"?>">
        </tr>
       <?php 
      }
       ?>
      </table>
   </div>
   <br>
   <div>
   	<input type="submit" name="submit" value="submit">
    <a href="http://localhost/arya/index.php/quiz1?question_id=<?php echo $questionId + 1 ?>">Next</a>
    <button name="summary" > summary </button>
   </div>
  </form>
</body>
</html>