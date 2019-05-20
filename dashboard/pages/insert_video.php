<?php

session_start();
include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");


$url=mysqli_real_escape_string($con, $_POST["vidn"]);
$thumb=$_FILES["thumb"]["name"];
$tmp2=$_FILES["thumb"]["tmp_name"];

$title=mysqli_real_escape_string($con, $_POST["title"]);

$posted_by=$_SESSION["email"];
$posted_on=date("y-m-d h:i:s");

$url2="dashboard/thumbs/".$thumb;
// $x=move_uploaded_file($tmp, "../videos/".$vid);
$y=move_uploaded_file($tmp2, "../thumbs/".$thumb);
if($y)
{
	$qry=mysqli_query($con, "insert into videos set url='$url', thumbnail='$url2', video_title='$title', posted_on='$posted_on', posted_by='$posted_by' ");

	if($qry)
	{
		header("location: upload_video.php?m=1");
	}
	else
	{
		error_log("error while posting video");
		header("location: upload_video.php?m=2");
	}
}


?>