<?php

// This connects the scripts to the database. Import the sql file to PHPMyAdmin for easy config

$mysql_hostname = "YOUR HOST";

$mysql_user = "YOUR USERNAME";

$mysql_password = "YOUR PASSWORD";

$mysql_database = "YOUR DATABASE";

$prefix = "";

$bd = mysqli_connect($mysql_hostname, $mysql_user, $mysql_password) or die("An error has occurred. Couldn't connect to database.");

mysqli_select_db($bd, $mysql_database) or die("An error has occurred. Couldn't select database.");

?>
