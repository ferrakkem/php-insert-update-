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
    	if(form.userName.value=="")
    	{
    		alert("Please Enter your User Name..");
    		form.userName.focus();
    		return false;
    	}
    	if(form.age.value=="")
    	{
    		alert("Please Enter your Age..");
    		form.age.focus();
    		return false();
    	}
    	if(form.gender.value=="")
    	{
    		alert("Please Enter your Gender");
    		form.gender.focus();
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
					<h1>Sign Bd Social</h1>
				</div>
					<form id="send" name="myfrom" action="passwordValidation.php" method="POST" onsubmit="return validateForm(this);" >
					<p>
						<label for="name">User Name *</label>
						<input id="name" type="text" name="userName"  />
					</p>
					<p>
						<label for="name">Age</label>
						<input id="name" type="text" name="age"  />
					</p>
					<p>
						<label for="name">Gender *</label>
						<input id="name" type="text" name="gender"  />
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