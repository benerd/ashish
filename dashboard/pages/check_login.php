<?php
ob_start();
session_start();
include '../../connect.php';




$nm=mysqli_real_escape_string($con, $_POST["email"]);
$pass=mysqli_real_escape_string($con,$_POST["password"]);

$q=mysqli_query($con, "select * from users where email='$nm' and password='$pass' ");

if($q)
{
	$row=mysqli_num_rows($q);

	if($row==1)
	{


		$_SESSION["email"]=$nm;
		header("location: index.php");
	}
	else
	{
        header("location: login.php?m=1");
	}
}



?>