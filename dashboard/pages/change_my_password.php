<?php

session_start();


$pass=$_POST["pass"];
$email=$_SESSION["email"];
include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");
$q=mysqli_query($con, "update users set password='$pass' where email='$email' ");
if($q){
	header("location: change_password.php?m=1");
}
else{
	error_log("failed to change_password");
	header("location: ../../something_went_wrong.php");
}
?>