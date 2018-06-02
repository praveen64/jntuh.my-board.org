
  //DISABLE RIGHT CLICK
  document.onmousedown=disableclick;
  status="Right Click Disabled";
  function disableclick(event)
  {
    if(event.button==2)
     {
       alert(status);
       return false;    
     }
  };
  
  
  document.onkeypress = function (event) {
	  event = (event || window.event); if (event.keyCode == 123) {
		  alert('No F-12'); 
		  return false; 
		  } };
  document.onmousedown = function (event) {
	  event = (event || window.event); if (event.keyCode == 123) {
		  alert('No F-keys'); 
		  return false;
		  } };
  document.onkeydown = function (event) { 
	  event = (event || window.event); if (event.keyCode == 123) { 
		  alert('No F-keys');
		  return false; 
		  } };
  
  
  //captcha refresh
  
  window.onload=window.onpageshow= function() {
	  return DrawCaptcha();
	  
	};
  //date picker
	 $(function ()  {
		  $( "#datepicker" ).datepicker({
		    changeMonth: true,
		    changeYear: true,
		    dateFormat: 'yy-mm-dd',
		    yearRange: '1970:2001',
		    onSelect: function (date) {
		         var dob = new Date(date);
		         var today = new Date();

		        if (dob.getFullYear() + 18 < today.getFullYear() && dob.getFullYear()+45 >today.getFullYear())
		        {
		            return true;
		        }
		        else
		        {
		            alert("please enter correct date of birth... age must be above 18 years");
		           /* document.getElementById('une').innerHTML = "Please enter valid date of birth";
		              searchResult.datepicker.focus();
		            */
		            var errName = document.getElementByID("datepicker");
		            errName.innerHTML += "Please enter valid DOB";
		            errName.innerHTML += ".red {color:red;}";
		            document.getElementByID("datepicker").val = "";
		            return false; 
		        }
		    }
		  
		  });
		});
	  
  
 
   //Created / Generates the captcha function
   
    function DrawCaptcha()
    {
    	var chars = "123456789ABCDEFGHIJKLMNPQRSTUVWXTZ";
    	var string_length = 8;
    	var randomstring = '';
    	for (var i=0; i<string_length; i++) {
    		var rnum = Math.floor(Math.random() * chars.length);
    		randomstring += chars.substring(rnum,rnum+1);
    	}
    	document.getElementById("txtCaptcha").value = randomstring;
    }

    // Validate the Entered input aganist the generated security code function  
    
    
    function ValidCaptcha(){
    	var str = document.getElementById('txtCaptcha').required;
        var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('txtInput').value);
        if (str1 == str2) {
        	
        	return true;
    		         	}
        else{
        	alert("enter correct captcha");
        	return false;
        	
    }
        }

    // Remove the spaces from the entered and generated code
    
    
    function removeSpaces(string)
    {
        return string.split('').join('');
    }
    
    //validate form
    function formvalidation(){
    	
    	var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
        var str2 = removeSpaces(document.getElementById('txtInput').value);
    	var x=document.getElementById("htno").value;
    	
    	if(x==null ||  x==" ")
    		{
    		alert("please enter correct htno");
    		return false;
    		} 
         if(str1 == str2) {
        	
        	return true;
    		         	}
        else{
        	alert("enter correct captcha");
        	return false;
        	
    }
var x=document.getElementById("txtInput").required;
var x=document.getElementById("htno").required;
	DrawCaptcha();
    }
     
   function getExamsList(degree){
	  var examRowIFrame = document.getElementById("examRow");
	  examRowIFrame.src="Exams.jsp?degree="+degree;
	  
   } 