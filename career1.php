<?php

$temp = explode(".", $_FILES["file"]["name"]);


  if ($_FILES["file"]["error"] > 0)
 {
     echo "<script type=\"text/javascript\">window.alert('Please Attach Resume');window.location.href = 'carrer.php';</script>"; 
 } 
else {
  
    if (file_exists("resume/" . $_FILES["file"]["name"]))
    {
      echo "<script type=\"text/javascript\">window.alert('File Already Exits Please Change File Name');window.location.href = 'carrer.php';</script>";
    } 
else {
      
	   $filename=$_FILES["file"]["name"];
	   include "dbconnect.php";
	  $result=mysql_query("insert into carrer(f_name,l_name,gender,dob,qualification,skills,address,email,mobile_no,experience,file) value('$_POST[f_name]','$_POST[l_name]','$_POST[gender]','$_POST[dob]','$_POST[qualification]','$_POST[skills]','$_POST[address]','$_POST[email]','$_POST[mobile_no]','$_POST[experience]','$filename')");
	  if($result)
	  {
         move_uploaded_file($_FILES["file"]["tmp_name"],
      "resume/" . $_FILES["file"]["name"]);
		 echo "<script type=\"text/javascript\">window.alert('Thank You');window.location.href = 'carrer.php';</script>";
	  }
	  else
	  {
	     echo "<script type=\"text/javascript\">window.alert('Please Try Once Again');window.location.href = 'carrer.php';</script>";
	  }
    }
  }

?> 

<!--



<html>
<body>

<form action="" method="post" enctype="multipart/form-data">
<label for="file">Filename:</label>
<input type="file" name="file" id="file"><br>
<input type="submit" name="submit" value="Submit">
</form>

</body>
</html> -->