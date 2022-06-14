<?php include'header.html';?>
<script type="text/javascript">
function validateForm()
{

var x = document.forms["myForm"]["f_name"].value;
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
	         if ((x.length < 1) || (x.length > 30))
               {
                  alert("Your Character must be 5 to 15 Character");
                  return false;
               }
           }
	  }
	  
	  var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length)
     {
        alert("Please Enter valid e-mail address");
        return false;
    }
	
	  
	  
 var x = document.forms["myForm"]["mobile_no"].value;
       if (x == null || x == "")
      {
           alert("Please Enter Contact Number");
           return false;
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
          <h2>&nbsp;</h2>
          <p>&nbsp;</p>
          <p>
            <label></label>
          </p>
          <center>                             <h3>Registration Form </h3>
                  <form name="myForm" action="career1.php" onSubmit="return validateForm();" method="post" enctype="multipart/form-data">
                        <table cellpadding="10" cellspacing="10">
                            <tr style="width:auto;"><td style="width: auto; float:left;">First Name  <span style="color: red;font-size: 14px;">*</span></td><td style="width:5px;">:</td><td style="width: auto" colspan="2"><input style="float:left;" id="f_name" name="f_name" type="text"></td>
                                <td style="width: auto;">Last Name <span style="color: red;font-size: 14px;"></span></td><td>:</td><td colspan="2"><input id="l_name" name="l_name" type="text"></td></tr>
                            <tr><td>Gender <span style="color: red;font-size: 14px;"></span></td><td>:</td><input type="radio" name="gender"  value="" checked="checked" style="display:none" /><td style="width: 20px;"><input id="gender" name="gender" value="Male" type="radio">Male</td><td style="width: 20px;"><input id="gender" name="gender" value="Female" type="radio">Female</td>
                                <td>Date Of Birth<br>(yyyy/mm/dd format) <span style="color: red;font-size: 14px;"></span></td><td>:</td><td colspan="2"><input id="dob" name="dob"  type="text"></td></tr>
                            <tr><td>Qualification <span style="color: red;font-size: 14px;"></span></td><td>:</td><td colspan="2"><input id="qualification" name="qualification" type="text"></td>
                                <td style="width: auto;">Experience <span style="color: red;font-size: 14px;">*</span></td><td>:</td>
                                <td colspan="2">
                                    <select id="experience" name="experience">
                                        <option value="" selected="selected">- - Select - -</option>
                                        <option value="Fresher">Fresher</option>
                                        <option value="LessThanOneYear">LessThan OneYear</option>
                                        <option value="1 Year(s)">1 Year(s)</option>
                                        <option value="2 Year(s)">2 Year(s)</option>
                                        <option value="3 Year(s)">3 Year(s)</option>
                                        <option value="4 Year(s)">4 Year(s)</option>
                                        <option value="5 Year(s)">5 Year(s)</option>
                                        <option value="5+ Year(s)">5+ Year(s)</option>
                                    </select>
                                </td>
                            </tr>
                            <tr><td>Skills <span style="color: red;font-size: 14px;"></span></td><td>:</td><td colspan="2"><input id="skills" name="skills" type="text"></td> 
                                <td>Mobile No. <span style="color: red;font-size: 14px;">*</span></td><td>:</td><td colspan="2"><input id="mobile_no" name="mobile_no" type="text"></td></tr>
                            <tr><td>Email ID <span style="color: red;font-size: 14px;">*</span></td><td>:</td><td colspan="2"><input id="email" name="email" type="text"></td>
                                <td>Address <span style="color: red;font-size: 14px;"></span></td><td>:</td><td colspan="2"><textarea id="address" name="address"></textarea></td></tr>
                            <tr><td>Upload Resume <span style="color: red;font-size: 14px;">*</span></td><td>:</td><td colspan="2"><input id="file" name="file" type="file"></td></tr>
                                                 
                               
                            </table> 
                            <input value="Submit"  type="submit">
                        
                    </form>
		</center>
       
      </div>
    </div>
  </div>
   <div id="bottom">
      <div id="shortinfo">
        
          <h2>INTRODUCTION</h2>
          <p align="justify">The Promoter of the unit Shri. Maheboob Husensab Bisti is having deep 
knowledge about the spice and Masala items as it is his family business since from 
1940 they are in this business and from that to time till today they never looked 
back in there progress. Initially they started the business by selling masalas in
weekly market in different nearby places., then they opened one shop in market 
which is running succesfully. At persent in mudhol they are having two shops 
which are located in heart of Market place. Since they are running over business 
from last seven decades their reguler customer base is very strong and no other 
retailer is near compititor for them. All local stall chat vendors, hotels, restaurant,
bars are there strength as they are there big customers even local retailert also 
prefer there masalas . the promoter has decided to strat the venture at MUDHOL 
by using advanced machinery. Where he can give good product & service and he 
can make more business & profit.</p>
        
      </div>
      <div id="linkmenu">
        <h2>Contact us</h2>
        <ul class="footerlinks">
		Business Address:<br>
         <a href="#"> CTS No.229/IB Industrial Area, <br>
		  Jamakhandi Road,<br>
           Mudho-587313
          </a>
		Name of the Proposed Unit: <br>
         <a href="#"> M/s. FIVE STAR SPICE INDUSTRIES</a>
    Nature of Business Activity :<br>
	<a>Manufacturing Food Grinding <br> and Masala Powder etc </a>
	Name of the Promoter
Residential Address:<br>
<a>Shri. Maheboob H Bisti <br>
W.N.3,Saidapurgalli <br>
Mudhol
</a> 
Contact No of Party :<br>
          <a href="#">9448337204<br>9886163683</a>
        </ul>
      </div>
      <div class="clear"></div>
      <div id="footer">
        <div id="fl_left">&copy;5starspices | All Rights Reserved</div>
        <div id="fl_right">Desgine and maintained by Systechways </div>
        <div class="clear"></div>
      </div>
    </div>
    <div align="center">www.systechways.com<a href='http://all-free-download.com/free-website-templates/'></a></div>
  </div>
  </div>
</body>
</html>
