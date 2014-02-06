<center>
<?php

    error_reporting(0);
    $con=mysql_connect("localhost","root","");
    $db_database = "dataBase.php";
    if(!$con) or die("Unable to connect :".mysql_error());

    mysql_select_db($db_database) die("Unable to connect with db :".mysql_error());
    
    else
    {
        echo "A";
    }

?>
</center>