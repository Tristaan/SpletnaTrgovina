<?php
$db_user="tristans";
$db_pass="3cbXe4";
$db_db="tristans";
$db=mysqli_connect('localhost',$db_user,$db_pass,$db_db) or die("Couldn't connect to database [".mysqli_errno($db)."]");
mysqli_set_charset($db,"utf8");
$server_addr="http://".$_SERVER["SERVER_NAME"]."/SpletnaTrgovina/";
?>
