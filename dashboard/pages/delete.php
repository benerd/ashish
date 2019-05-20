<?php
ob_start();
$id=$_GET["id"];

include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");
$qry=mysqli_query($con, "delete from blogs where id=$id");
if($qry){
	header("location: blogs.php?m=5");
}
else
{
	error_log("failed to delete blog");
	header("location: ../../something_went_wrong.php");
}

?>