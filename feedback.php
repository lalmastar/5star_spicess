<?php
session_start();
 include "dbconnect.php";
  $result=mysql_query("insert into feedback(name,email,phno,q_comments) value('$_POST[name]','$_POST[email]','$_POST[phno]','$_POST[q_comments]')");
     
	  if(!$result)
	  {
          					   
		     echo "<script type=\"text/javascript\"> window.alert('Plz insert once again');window.location.href = 'contact.php';</script>"; 
	 
      }
	  else
	  {
	       
			  echo "<script type=\"text/javascript\">window.alert('Feedback is stored');window.location.href = 'contact.php';</script>"; 
			
	  }
			
?>			  
  