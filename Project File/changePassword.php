<?php
	
	//echo "1";
	function passwordUpdate()
	{
		$db_databaseName="dbsocial";
		require_once "dataBase.php";
		
		$con=mysql_connect($db_hostName,$db_userName,$db_password);
		
		if(!$con)
		{
			die("Could not conncet with Server".mysql_error());
		}
		//echo "2";
		$db=mysql_select_db($db_databaseName);
		if(!$db)
		{
			echo "Cannot Connect With DataBase ".mysql_error();
		}
		//echo "3";
		//$var=10 ; $userName = $_POST['userName'];
 		
		$userName = $_POST['userName'];
		$oldPassword = $_POST['oldPassword'];
		$password = $_POST['password'];
		$rePassword = $_POST['rePassword'];
		
		//$query = mysql_query("UPDATE nbk6_user SET password='$pw1', WHERE name='$name'");
		
	
			$updatePassword="UPDATE user set password='$password' where user_name='$userName' and password='$oldPassword'";
			$result=mysql_query($updatePassword);
			
			if($result){
				echo "Success";
			}else{
				echo "Failed";
			}
		
	}


	if(isset($_POST['submit']))
	{
		passwordUpdate();
	}

	//mysql_close($con);
?>
<html>
<head>
<title>Bd Social</title>
	<link rel="stylesheet" type="text/css" href="./css/style.css">


    <script type="text/javascript">


    function validateForm(form)
    {
		if(form.userName.value=="")
		{
			alert("Please Enter your User Name ...");
			form.userName.focus();
			return false;
		}
		if(form.oldPassword.value=='')
		{
			alert("Please Enter your Old Password");
			form.oldPassword.focus();
			return false;
		}
		
        if(form.password.value=="")
        {  
            alert("Please Give New Password...");
            form.password.focus();
            return false;
        }
        //password empty or not
        if(form.rePassword.value=="")
        {
            alert("Please Set Your Confirm-Password...");
            form.rePassword.focus();
            return false;
        }
        if(form.password.value !=form.rePassword.value)
        {
            alert("Your password not matched");
            form.rePassword.focus();
            return false;
        }
		if(form.password.value.length <5)
		{
			alert("Please Enter at list 5 Character Password..");
			form.password.focus();
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
				<form id="send" name="myfrom" action="changePassword.php" method="POST" onsubmit="return validateForm(this);" >
					<p>

						<label for="name">User Name*</label>
						<input id="name" type="text" name="userName"  />
					</p>
					<p>

						<label for="name">Old Password</label>
						<input id="name" type="password" name="oldPassword"  />
					</p>
					<p>

						<label for="name">New Password *</label>
						<input id="name" type="password" name="password"  />
					</p>
					
					<p>
						<label for="company">Confirm Password</label>
						<input id="company" type="password" name="rePassword" />
					</p>
					<p>
						<input type="submit" value="Submit" name="submit">
					</p>
					
				</form>
            </div>
        
        <!--END #signup-inner -->
        </div>
        
    <!--END #signup-form -->   
    </div>

</body>
</html>

