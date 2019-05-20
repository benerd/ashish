<?php
ob_start();
session_start();

include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");

$title=mysqli_real_escape_string($con,$_POST["post_title"]);
$short=mysqli_real_escape_string($con,$_POST["short_des"]);

$img1=$_FILES["img1"]["name"];
$tmp1=$_FILES["img1"]["tmp_name"];

$img2=$_FILES["img2"]["name"];
$tmp2=$_FILES["img2"]["tmp_name"];

$img3=$_FILES["img3"]["name"];
$tmp3=$_FILES["img3"]["tmp_name"];


$img4=$_FILES["img4"]["name"];
$tmp4=$_FILES["img4"]["tmp_name"];

$img5=$_FILES["img5"]["name"];
$tmp5=$_FILES["img5"]["tmp_name"];

$img6=$_FILES["img6"]["name"];
$tmp6=$_FILES["img6"]["tmp_name"];

$img7=$_FILES["img7"]["name"];
$tmp7=$_FILES["img7"]["tmp_name"];

$img8=$_FILES["img8"]["name"];
$tmp8=$_FILES["img8"]["tmp_name"];

$url2="dashboard/thumbs/".$img2;
$url3="dashboard/thumbs/".$img3;


$x1=move_uploaded_file($tmp1, "../thumbs/".$img1);
$x2=move_uploaded_file($tmp2, "../thumbs/".$img2);
$x3=move_uploaded_file($tmp3, "../thumbs/".$img3);
$x4=move_uploaded_file($tmp4, "../thumbs/".$img4);
$x5=move_uploaded_file($tmp5, "../thumbs/".$img5);
$x6=move_uploaded_file($tmp6, "../thumbs/".$img6);
$x7=move_uploaded_file($tmp7, "../thumbs/".$img7);
$x8=move_uploaded_file($tmp8, "../thumbs/".$img8);


if($x1){
	$url1="dashboard/thumbs/".$img1;
}
else{
    $url1="NULL";
}

if($x2){
	$url2="dashboard/thumbs/".$img2;
}
else{
	 $url2="NULL";
}

if($x3){
	$url3="dashboard/thumbs/".$img3;
}
else{
     $url3="NULL";
}


if($x4){
	$url4="dashboard/thumbs/".$img4;
}
else{
     $url4="NULL";
}


if($x5){
	$url5="dashboard/thumbs/".$img5;
}
else{
     $url5="NULL";
}


if($x6){
	$url6="dashboard/thumbs/".$img6;
}
else{
     $url6="NULL";
}

if($x7){
	$url7="dashboard/thumbs/".$img7;
}
else{
     $url7="NULL";
}


if($x8){
	$url8="dashboard/thumbs/".$img8;
}
else{
     $url8="NULL";
}


$sql="insert into lookbook set img1='$url1', img2='$url2', img3='$url3', img4='$url4', img5='$url5', img6='$url6', img7='$url7', img8='$url8', Title='$title', short_desc='$short'";

//echo $sql;

$qry=mysqli_query($con, $sql);


if($qry){
	header("location: lookbook.php?m=4");
}

else{
	echo 1;
	 header("location: lookbook.php?m=1");
}



?>