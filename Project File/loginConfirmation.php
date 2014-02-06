<?php require_once "menu.php";?>
<center>
	<?php
		require_once "dataBase.php";
		$db_databaseName="dbsocial";
		
		$con=mysql_connect($db_hostName,$db_userName,$db_password);
		
		if(!$con)
		{
			die ("Could Not successfully with DataBase".mysql_error());
		}
		
		lineBreak();
		
		$db=mysql_select_db($db_databaseName,$con);
		if(!$db)
		{
			echo "Can notConnect with Bd Social";
		}
		else
		{
			echo "Conncet With Bd Social";
		}
		lineBreak();
		//echo "Ferrakkem";
		
		$userName = $_POST['userName'];
		$password = $_POST['password'];
		
		$sqlLogin="select * from  `user` where (`user_name`='".$userName."' and `password`='".$password."') ";
		//echo "Ferrakkem 2";
		$queryLogin=mysql_query($sqlLogin);
		$result=mysql_fetch_array($queryLogin); 
		
		if(!$result>0)
		{
			/*
			echo "Login Successfull"."<br />";
			echo $userName."<br />";
			*/
			//echo "Login failed";
			echo "<a href='login.php'>Login</a>";
		}
		else
		{
			//echo "Login failed";
			//echo "<a href="login.php"></a>";
			echo "Login Successfull"."<br />";
			echo $userName."<br />";
		}
		lineBreak();
	
		function lineBreak()
		{
			echo "<br />";
		}
		lineBreak();

		//mysql_close($con);
		
	?>
</center>
<head>
	<title>
		Bd Social
	</title>
</head>