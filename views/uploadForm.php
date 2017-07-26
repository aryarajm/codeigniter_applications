<html>
  <head>
      <title>Upload Form</title>
  </head>
  <body>
      <form action="http://localhost/arya/index.php/Upload/do_upload" 
      enctype="multipart/form-data" method="post" accept-charset="utf-8">
         <input type="file" name="userfile" size="20" />
         <br /><br />
         <input type="submit" name="upload"  value="upload" />
      </form>
  </body>
</html>