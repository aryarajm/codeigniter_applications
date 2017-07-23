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
        <td><?php echo "$value->id"; ?></td>
        <td><?php echo "$value->name";?></td>
        <td><?php echo "$value->email";?></td>
        <td><?php echo "$value->phone";?></td>
   </tr>
   <?php
   }
     ?>
  </table>
</body>
</html>