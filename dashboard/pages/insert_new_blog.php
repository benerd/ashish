<?php

session_start();
include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");
header( 'Content-Type: text/html; charset=utf-8' ); 
$cat=$_POST["category"];
$top=$_POST["top_ps"];
$head=mysqli_real_escape_string($con,$_POST["blog_name"]);
$short=mysqli_real_escape_string($con,$_POST["short_des"]);
$tmp=$_FILES["files"]["tmp_name"];
$img=$_FILES["files"]["name"];
print_r($_POST);
print_r($_FILES);


$tmp1=$_FILES["files1"]["tmp_name"];
$img1=$_FILES["files1"]["name"];

$tmp2=$_FILES["files2"]["tmp_name"];
$img2=$_FILES["files2"]["name"];

$tmp3=$_FILES["files3"]["tmp_name"];
$img3=$_FILES["files3"]["name"];

$tmp4=$_FILES["filesd"]["tmp_name"];
$img4=$_FILES["filesd"]["name"];

$tmp5=$_FILES["files4"]["tmp_name"];
$img5=$_FILES["files4"]["name"];

$tmp6=$_FILES["files5"]["tmp_name"];
$img6=$_FILES["files5"]["name"];

$tmp7=$_FILES["files6"]["tmp_name"];
$img7=$_FILES["files6"]["name"];

$tmp8=$_FILES["files7"]["tmp_name"];
$img8=$_FILES["files7"]["name"];

$tmp9=$_FILES["files8"]["tmp_name"];
$img9=$_FILES["files8"]["name"];

$cont=mysqli_real_escape_string($con,$_POST["blog_des"]);

$posted_by=$_SESSION["email"];

$posted_on=date("y-m-d h:i:s");


$rand=md5(rand());


$x=move_uploaded_file($tmp, "../uploads/".$rand.$img);
$x1=move_uploaded_file($tmp1, "../uploads/".$rand.$img1);
$x2=move_uploaded_file($tmp2, "../uploads/".$rand.$img2);
$x3=move_uploaded_file($tmp3, "../uploads/".$rand.$img3);
$x4=move_uploaded_file($tmp4, "../uploads/".$rand.$img4);
$x5=move_uploaded_file($tmp5, "../uploads/".$rand.$img5);
$x6=move_uploaded_file($tmp6, "../uploads/".$rand.$img6);
$x7=move_uploaded_file($tmp7, "../uploads/".$rand.$img7);
$x8=move_uploaded_file($tmp8, "../uploads/".$rand.$img8);
$x9=move_uploaded_file($tmp9, "../uploads/".$rand.$img9);
if($x)
{
	$url="dashboard/uploads/".$rand.$img; 
}

else{
	$url="dashboard/uploads/default.png";
}

if($x1)
{
  $url1="dashboard/uploads/".$rand.$img1; 
}

else{
  $url1=NULL;
}

if($x2)
{
  $url2="dashboard/uploads/".$rand.$img2; 
}

else{
  $url2=NULL;
}

if($x3)
{
  $url3="dashboard/uploads/".$rand.$img3; 
}

else{
  $url3=NULL;
}

if($x4)
{
  $url4="dashboard/uploads/".$rand.$img4; 
}

else{
  $url4=NULL;
}

if($x5)
{
  $url5="dashboard/uploads/".$rand.$img5; 
}

else{
  $url5=NULL;
}

if($x6)
{
  $url6="dashboard/uploads/".$rand.$img6; 
}

else{
  $url6=NULL;
}


if($x7)
{
  $url7="dashboard/uploads/".$rand.$img7; 
}

else{
  $url7=NULL;
}

if($x8)
{
  $url8="dashboard/uploads/".$rand.$img8; 
}

else{
  $url8=NULL;
}

if($x9)
{
  $url9="dashboard/uploads/".$rand.$img9; 
}

else{
  $url9=NULL;
}


$sql="insert into blogs set category='$cat', heading='$head', short_des='$short', content='$cont', image='$url', posted_on='$posted_on', posted_by='$posted_by', is_toppost=$top, banner_image='$url3', image_2='$url1', image_3='$url2', d_image='$url4', img4='$url5', img5='$url6',  img6='$url7', img7='$url8',  img8='$url9' ";
  $qry=mysqli_query($con,$sql );
  echo $sql;
  if($qry)
  {
  	header("location: blogs.php?m=4");
  }
  else
  {
  	  echo "error";
  }

// print_r($_POST);
// print_r($_FILES);




?>