<?php
//lägg till den här filen i .git ignore så att den inte checkas in.
//$dbhost = "texter-219308.mysql.binero.se";
//$dbusername = "219308_uf83539";
//$dbpassword = "Augusti144";
//$dbdatabas = "219308-texter";

$dbhost = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbdatabas = "texter";

$connection = mysqli_connect($dbhost, $dbusername, $dbpassword, $dbdatabas);

?>


