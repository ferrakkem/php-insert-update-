<center>
<?php
   //error_reporting(0);
	require_once "dataBase.php";

	$db_databaseName="dbsocial";
    $con=mysql_connect($db_hostName,$db_userName,$db_password);

    if(!$con)
    {
        die("Connection failed :" .mysql_error());
    }
    else
    {
       // echo "Connection establish"."<br />";
    }

    mysql_select_db($db_databaseName);

    if(!$db_databaseName)
    {
        echo "Database connection failed :".mysql_error();
    }
    else
    {
      //  echo "Database connection establish"."<br />";
    }

    $userName=isset($_POST["userName"]);
    $age=isset($_POST["age"]);
    $gender=isset($_POST["gender"]);

    //echo "<br />".'hello1'."<br />";

    $sqlpass ="select user_name,age,gender from `user` where (`user_name`= '".$userName."' and `age`='".$age."' and `gender`='".$gender."')";
    $resultPass=mysql_query($sqlpass);

    $rows=mysql_num_rows($resultPass);
    //echo "Test"."<br />";

    if(!$resultPass)
    {
        echo "Wrong info";
    }
    else
    {
        echo "success query";
       // header('location:Passwodset.php');
        for($i=0; $i<$rows; ++$i)
        {
            echo 'Name' .mysql_result($resultPass,$i,'user_name');
        }
        var_dump($resultPass);

    }



?>
</center>