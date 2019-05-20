<?php 
ob_start();
session_start();

if(!isset($_SESSION['email']))
{
header('location: login.php?m=2');
}

$user=$_SESSION['email'];
include("../../connect.php");
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");
$query=mysqli_query($con, "select type from users where email='$user' ");
if($query)
{
    $data=mysqli_fetch_array($query);
    $type=$data["type"];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>
   
    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
     <!-- <script type="text/javascript" src="../dist/js/jquery.js"></script>  -->
    <!-- <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>  -->


    <!-- Morris Charts CSS -->
  

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">  Shivali </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
              
                       
               
              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                       <!--  <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li> -->
                       <!--  <li class="divider"></li> -->
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="Search...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="index.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                          <li>
                            <a href="blogs.php"><i class="fa fa-bold fa-fw"></i> Blogs</a>
                        </li>

                       

                          
                        <li>
                            <a href="upload_video.php"><i class="fa fa-table fa-fw"></i> Upload video</a>
                        </li> 

                         <li>
                            <a href="upload_photo.php"><i class="fa fa-table fa-fw"></i> Upload Photos</a>
                        </li> 

                           <li>
                            <a href="change_contact.php"><i class="fa fa-table fa-fw"></i> Update Contact Us Image </a>
                        </li>

                         <li>
                            <a href="change_about.php"><i class="fa fa-table fa-fw"></i> Update About us Image </a>
                        </li>                   
                    
                        
                         <li>
                            <a href="lookbook.php"><i class="fa fa-table fa-fw"></i> Lookbook </a>
                        </li>  
                    

                        <li>
                            <a href="change_password.php"><i class="fa fa-table fa-fw"></i> Change Password </a>
                        </li> 
                       
                           
                           
                       
                       
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
