function login_valid(){
	  //  var name = document.forms["myForm"]["fname"].value;
	
	
	var e=document.myForm.email.value;
	if(e == '')
	{
		document.getElementById("em_err").innerHTML="* required";
		return false;
		}
		
	
		
/*var pa=document.myForm.password.value;
if(pa =='')
{
	document.getElementById("pass_error").innerHTML="* Required";
	return false;
}*/
		
	}



		function email_valid()
{
	var email=document.myForm.email.value.length;	
	var reg = /^([a-z0-9])+\@([a-z])+\.([a-z])+$/;
   	if(email=="")
	{
		document.getElementById("em_err").innerHTML="* Required";
		document.myForm.email.focus();
		return false;
	}
	if(document.myForm.email.value.match(reg))
			{
				document.getElementById("em_err").innerHTML="";
				return true;
				
			}
			else
			{
				document.getElementById("em_err").innerHTML="* Enter Valid Email format";
				document.myForm.email.focus();
				document.myForm.email.value="";
				return false;
			}
			return true;
}
