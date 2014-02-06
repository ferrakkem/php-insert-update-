<?php
?>
<html>
<head>
<title>Bd Social</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">


    <script type="text/javascript">

    function validateForm()
    {
        var x=document.forms["myfrom"]["userName"].value;
        var atpos=x.indexOf("@");
        var dotpos=x.lastIndexOf(".");
        if(atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
        {
            alert("Not a valid e-mail address");
            return false;
        }
    }
    function validateForm(form)
    {
    	if(form.password.value=="")
    	{
    		alert("Please Enter your Password..");
    		form.password.focus();
    		return false;
    	}
    	if(form.password.value.length <4)
    	{
    		alert("Password minimun 4 character ");
    		form.password.focus();
    		return false;
    	}
    	if(form.confirmPassword.value=="") 
    	{
    		alert("Please Confirm your Password..");
    		form.confirmPassword.focus();
    		return false;
    	}
    	if(form.password.value != form.confirmPassword.value)
    	{
    		alert("Password is not match");
    		form.confirmPassword.focus();
    		return false;
    	}
    }

      </script>

</head>
<body>
    <div id="signup-form">
        
			<div id="signup-inner">
				<div class="clearfix" id="header">
					<img id="signup-icon" src="./images/signup.png" alt="" />
					<h1>New Password</h1>
				</div>
					<form id="send" name="myfrom" action="#" method="POST" onsubmit="return validateForm(this);" >
					<p>
						<label for="name">Password *</label>
						<input id="name" type="password" name="password"  />
					</p>
					<p>
						<label for="name">Confirm Password *</label>
						<input id="name" type="password" name="confirmPassword"  />
					</p>
					<p>
						<input type="submit" value="Submit">
					</p>
				</form>
           </div>
        </div>
    </div>

</body>
</html>