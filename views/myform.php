<html>
<head>
<style type="text/css">
.error {
    color: red;
}
</style>
<title>My Form</title>
</head>
<body>
<form action="http://localhost/arya/index.php/validate" method="post" >
  <?php $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
   echo  validation_errors(); ?>
  <div class="container" align="center">
          <input type="text" name='number' value="" size="20" /><br><br>
          <input type="submit" value="Submit" />
     </div>
     </form>
</body>
</html>

