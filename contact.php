<?php include'header.html'; ?>
<script type="text/javascript">

function validateForm()
 {
   var x = document.forms["myForm"]["name"].value;
      if (x == null || x == "")
      {
           alert("Please Enter Your First Name");
           return false;
      }
	  else
	  {
	   
          if(!isNaN(x))
           {
             alert("Please Enter Only Characters For First Name");
             return false;
           }
	      else
	       {
	         if ((x.length < 1) || (x.length > 40))
               {
                  alert("Your Character must be up to 40 Character");
                  return false;
               }
           }
	  }
	  
	  var x = document.forms["myForm"]["q_comments"].value;
      if (x == null || x == "")
      {
           alert("Please Enter Comments/Questions");
           return false;
      }
	  
	var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
	if (x == null || x == "")
	{
	   return true;
	}
	else
	{
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length)
     {
        alert("Please Enter valid e-mail address");
        return false;
     }
	}
	
	
	var x = document.forms["myForm"]["contact"].value;
       if (x == null || x == "")
      {
           alert("Please Enter Contact Number");
           return true;
     }
	 else
	 {
	   
        if(isNaN(x))
       {
          alert("Please Enter Only Number For Contact Number");
          return false;
       }
	   if (!(x.length == 10))
               {
                  alert("Please Enter 10 digit Mobile Number");
                  return false;
               }
	 }
	 
	 
	 
}
</script>
  <div id="contentwrap">
    <div id="header"> </div>
    <div id="mainpage" class="normalpage">
      <div id="left" class="widepage">
        <div class="post">
          <h2><a href="#">M/S. FIVE STAR SPICE INDUSTRIES</a></h2>
         
          <p><img class="alignleft" src="images/image4.jpg" alt="" width="270" height="140" />
		  Business Address:<blockquote>CTS No.229/IB Industrial Area, <br>Jamakhandi Road,
Mudho-587313</blockquote>

Contact No of Party :<br /><blockquote>9448337204<br />9886163683
</br></blockquote>
          </div>
		  </div>
		  <div class="postbottom"></div>
       <h2>FEEDBACK</h2>
        <div class="post">
          
          <form name="myForm" action="feedback.php" onSubmit="return validateForm();" method="post">
            <div class="formstyle">
              <label for="name">Name:</label>
              <input class="text_field" name="name" id="name" type="text" />
              <label for="email">email:</label>
              <input class="text_field" id="email" name="email" type="text" />
              <label for="Age">Contact number:</label>
              <input class="text_field" name="phno" id="phno" type="text" />
              <label for="Comments">Comments/Questions:</label>
              <textarea class="text_field" id="q_comments" name="q_comments" cols="30" rows="8"></textarea>
              
              <input name="Submit" type="submit" id="Submit" class="submitbutton" value="Submit" />
            </div>
          </form>
             <div id="footer">
        <div id="fl_left" style="color:#000000; ">&copy; 5starspices.com | All Rights Reserved</div>
        <div id="fl_right" style="color:#000000; ">Desgine and maintained by Systechways</div>
        <div class="clear"></div>
      </div>
    </div>
  </div>
  <div id="contentbtm"></div>
</div>
<!-- END PAGE SOURCE -->
<div align=center>www.systechways.com<a href='http://all-free-download.com/free-website-templates/'></a></div></body>
</html>
