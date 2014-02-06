<?php

	function dbConnection()
	{
		$db_dataBaseName ="dbsocial";
		require_once "dataBase.php";

		$con=mysql_connect("$db_hostName","$db_userName","$db_password");

		if(!$con){
			die("Cannnot connect with server:".mysql_error());
		}
		else{
			echo "Conncet to server successfully";
		}
		mysql_select_db($db_dataBaseName);
		if(!$db_dataBaseName)
		{
			die("Could not connect with dataBase :".mysql_error());
		}
	}
	dbConnection();

	function Breakline()
	{
		echo "<br />";
	}
	Breakline();

	function searchQuery()
	{
		$userName = $_POST['userName'];
		/// here wrong  
		$sqlSearch="SELECT * From user WHERE user_name = '$userName'";
		$qr = mysql_query($sqlSearch);
		while ($row=mysql_fetch_array($qr)) 
		{
			echo $row['user_name'];
			echo "<br />";
		}

		/*
		$sqlSearch="SELECT * From user WHERE (`user_name`='".$userName."')";
		$resultSearch=mysql_query($sqlSearch);

		if(!$resultSearch)
	
		die("Database access failed :".mysql_error());
		$row=mysql_num_rows($resultSearch);
		*/

	}
	searchQuery();

	
	if(isset($_POST['submit']))
	{
		searchQuery();
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
    			alert("Please Enter The Name");
    			form.userName.focus();
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
				<form id="send" name="myfrom" action="search.php" method="POST" onsubmit="return validateForm(this);" >
					<p>

						<label for="name">User Name*</label>

						<input id="name" type="text" name="userName"  />
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