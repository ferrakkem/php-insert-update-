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
            alert("Please Enter your User Name Or e-mail..");
            form.userName.focus();                              //01790663382
            return false;
        }
        //password empty or not
        if(form.password.value=="")
        {
            alert("Password field cannot be empty");
            form.password.focus();
            return false;
        }
        if(form.password.value!=form.rePassword.value)
                {
                    alert("Your password not matched");
                    form.rePassword.focus();
                    return false;
                }

    }
      </script>

</head>

<body>

    <!--BEGIN #signup-form -->
    <div id="signup-form">
        
			<!--BEGIN #subscribe-inner -->
			<div id="signup-inner">
			
				<div class="clearfix" id="header">
					<img id="signup-icon" src="./images/signup.png" alt="" />
					<h1>Sign Bd Social</h1>
				</div>
				
				<p></p>

				
				<form id="send" name="myfrom" action="loginConfirmation.php" method="POST" onsubmit="return validateForm(this);" >
					<p>

						<label for="name">User Name *</label>
						<input id="name" type="text" name="userName"  />
					</p>
					
					<p>
						<label for="company">Password</label>
						<input id="company" type="password" name="password" />
					</p>
					<p>
						<input type="submit" value="login">
					</p>
				</form>
            </div>
                   <p>
                       <a href="forgetPassword.php"> <input type="submit" value="Forget Password"></a>

                    </p>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>

