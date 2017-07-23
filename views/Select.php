<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
 <?php
   foreach($read as $values){ 

  ?> 
  <table>
   <tr>
        <td><?php echo "$value.->id"; ?></td>
        <td><?php echo "$value.->name";?></td>
        <td><?php echo "$value.->email";?></td>
        <td><?php echo "$value.->phone";?></td>
   </tr>
  </table>
    <?php
    }
     ?>
 </body>
</html>
