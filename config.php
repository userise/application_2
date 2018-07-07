<?php
session_start();
$ser="localhost";
$user="root";
$pass="";

$db="app_php";

$conn=new mysqli($ser,$user,$pass,$db);

/*
if($conn)
{
	
    echo "connection succes";	
}

else
{
	
die(mysqli_error($conn));	
}


*/

?>