<?php
ob_start();
$id=$_GET["id"];

include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");
$qry=mysqli_query($con, "delete from lookbook where id=$id");
if($qry){
	header("location: lookbook.php?m=5");
}
else
{
	error_log("failed to delete blog");
	header("location: ../../something_went_wrong.php");
}

?>