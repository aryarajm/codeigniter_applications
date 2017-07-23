<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
  <?php
     foreach ($result as  $value) {
     
     ?>
      <table>
   <tr>
        <td><?php echo "$value->qid"; ?></td>
        <td><?php echo "$value->answer";?></td>
   </tr>
   <?php
   }
     ?>
  </table>
</body>
</html>