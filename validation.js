var dtCh= "-";
var minYear=1900;
var maxYear=2100;

function isInteger(s){
	var i;
    for (i = 0; i < s.length; i++){   
        // Check that current character is number.
        var c = s.charAt(i);
        if (((c < "0") || (c > "9"))) return false;
    }
    // All characters are numbers.
    return true;
}

function stripCharsInBag(s, bag){
	var i;
    var returnString = "";
    // Search through string's characters one by one.
    // If character is not in bag, append to returnString.
    for (i = 0; i < s.length; i++){   
        var c = s.charAt(i);
        if (bag.indexOf(c) == -1) returnString += c;
    }
    return returnString;
}

function daysInFebruary (year){
	// February has 29 days in any year evenly divisible by four,
    // EXCEPT for centurial years which are not also divisible by 400.
    return (((year % 4 == 0) && ( (!(year % 100 == 0)) || (year % 400 == 0))) ? 29 : 28 );
}
function DaysArray(n) {
	for (var i = 1; i <= n; i++) {
		this[i] = 31
		if (i==4 || i==6 || i==9 || i==11) {this[i] = 30}
		if (i==2) {this[i] = 29}
   } 
   return this
}

function isDate(dtStr){
	var daysInMonth = DaysArray(12)
	var pos1=dtStr.indexOf(dtCh)
	var pos2=dtStr.indexOf(dtCh,pos1+1)
	var strYear=dtStr.substring(0,pos1)
	var strMonth=dtStr.substring(pos1+1,pos2)
	var strDay=dtStr.substring(pos2+1)
	strYr=strYear
	if (strDay.charAt(0)=="0" && strDay.length>1) strDay=strDay.substring(1)
	if (strMonth.charAt(0)=="0" && strMonth.length>1) strMonth=strMonth.substring(1)
	for (var i = 1; i <= 3; i++) {
		if (strYr.charAt(0)=="0" && strYr.length>1) strYr=strYr.substring(1)
	}
	month=parseInt(strMonth)
	day=parseInt(strDay)
	year=parseInt(strYr)
	if (pos1==-1 || pos2==-1){
		alert("The date format should be : yyyy-mm-dd")
		return false
	}
	if (strMonth.length<1 || month<1 || month>12){
		alert("Please enter a valid month")
		return false
	}
	if (strDay.length<1 || day<1 || day>31 || (month==2 && day>daysInFebruary(year)) || day > daysInMonth[month]){
		alert("Please enter a valid day")
		return false
	}
	if (strYear.length != 4 || year==0 || year<minYear || year>maxYear){
		alert("Please enter a valid 4 digit year between "+minYear+" and "+maxYear)
		return false
	}
	if (dtStr.indexOf(dtCh,pos2+1)!=-1 || isInteger(stripCharsInBag(dtStr, dtCh))==false){
		alert("Please enter a valid date")
		return false
	}
return true
}











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
	         if ((x.length < 1) || (x.length > 15))
               {
                  alert("Your Character must be 5 to 15 Character");
                  return false;
               }
           }
	  }
	  

	  
     var x = document.forms["myForm"]["l_name"].value;
      if (x == null || x == "")
      {
           alert("Please Enter Your Last Name");
           return false;
      }
	  else
	  {
	   
          if(!isNaN(x))
           {
             alert("Please Enter Only Character For Last Name");
             return false;
           }
	      else
	       {
	         if ((x.length < 1) || (x.length > 15))
               {
                  alert("Your Character must be 5 to 15 Character");
                  return false;
               }
           }
	   }
	
	var dt=document.myForm.dob
	if (isDate(dt.value)==false)
	{
		dt.focus()
		return false
	}
   
   
	   
	    
	  var x = document.forms["myForm"].gender;
      for(i=0;i<x.length;i++)
      {
		  if(x[i].checked)
		  break;
	  }
	     if(i==x.length)
		 {
           alert("Please Enter Gender");
           return false;
		 }
		 
	 var x = document.forms["myForm"]["address"].value;
      if (x == null || x == "")
      {
           alert("Please Enter Your Permanent Address");
           return false;
      }
	  else
	  {	   
            if ((x.length < 1) || (x.length > 160))
               {
                  alert("Your Character must be 5 to 160 Character");
                  return false;
               }
          
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


   var x = document.forms["myForm"]["email"].value;
    var atpos = x.indexOf("@");
    var dotpos = x.lastIndexOf(".");
    if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length)
     {
        alert("Please Enter valid e-mail address");
        return false;
    }
	
	
	
	
}