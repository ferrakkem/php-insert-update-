<center>
	<?php
	echo "Hello"."<br />";
		
		$db_databaseName="dbsocial";

		function selectdb()
		{
			require_once "dataBase.php";
			global $db_databaseName;

			$db_server=mysql_connect($db_hostName,$db_userName,$db_password);

			if(!$db_server)
			{
				die("could not with server ".mysql_error());
				echo "connect to Server"."<br />";
			}

			mysql_select_db($db_databaseName);
			if(!$db_databaseName)
			{
				die("Could not connect with Data Base .".mysql_error());
				echo "Connect to Database"."<br />";
			}
		}
		selectdb();
		
		function insertValue()
		{
			
			$userName = $_POST['userName'];
			$sqlloginExist="select * from  `user` where (`user_name`='".$userName."') ";
			$queryLogin=mysql_query($sqlloginExist);
			$resultExistUserName=mysql_fetch_array($queryLogin); 
			

			
			if($resultExistUserName>1)
			{
				echo "User Name or Email Exist"."<br />";
			}
			else
			{
				$sql="INSERT into user (user_name,password,age,gender) VALUES ('".$_POST['userName']."','".$_POST['password']."','".$_POST['age']."','".$_POST['gender']."')";
				$result=mysql_query($sql);
				
				$sqlDivision="insert into division (division_name) VALUES ('".$_POST['division']."')";
				$resultDivision=mysql_query($sqlDivision);
				echo "ok1" ."<br />";
				
				$sqlDistric="insert into district(district_name) VALUES('".$_POST['district']."')";
				echo "ok2"."<br />";
				$resultDistric=mysql_query($sqlDistric);
				
				$adress = htmlentities($_POST['address']);	
				echo $adress;
				//echo $_POST['address'];
				$sqlAddress="insert into `address`(postal_code,address_detail) values ('".$_POST['postalCode']."','".$adress."')";
				$resultAddress=mysql_query($sqlAddress);
				echo "ok3"."<br />";
				//echo "Address insert";

				if(!$result && !$resultDivision && !$resultDistric && !$resultAddress)
				{
					die("Insertion falied" .mysql_error());
				}
				else
				{
					echo "successfull inserttion";
				}
			}
		}
		insertValue();
	?>	
</center>
