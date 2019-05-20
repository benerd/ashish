<?php

session_start();

include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");
$thumb=$_FILES["thumb"]["name"];
$tmp2=$_FILES["thumb"]["tmp_name"];

$title=mysqli_real_escape_string($con, $_POST["title"]);
$image_desc=$_POST["image_desc"];
$posted_by=$_SESSION["email"];
$posted_on=date("y-m-d h:i:s");

$rand=md5(rand());
$url2="dashboard/thumbs/".$rand.$thumb;
// $x=move_uploaded_file($tmp, "../videos/".$vid);
$y=move_uploaded_file($tmp2, "../thumbs/".$rand.$thumb);
if($y)
{
	$qry=mysqli_query($con, "insert into photogal set url='$url2',  photo_title='$title', posted_on='$posted_on', posted_by='$posted_by', photo_desc='$image_desc' ");

	if($qry)
	{
		header("location: upload_photo.php?m=1");
	}
	else
	{
		header("location: upload_photo.php?m=2");
		header("location: ../../something_went_wrong.php");
	}
}


?>