<?php


if(isset($_GET["cat"]))
	$id=$_GET["cat"];
else
	header("index.php");


include 'connect.php';
$sql="select * from blogs where id=$id";
$qry=mysqli_query($con, $sql);
if($qry){
	$data=mysqli_fetch_array($qry);
	$date=new DateTime($data["posted_on"]);
					$day=$date->format("d");
					$month=$date->format("F");
					$month=substr($month, 0,3);
					$year=$date->format("y");
}

$url="http://shivalisisodiya.com/landing.php?cat=$id";
?>


<!DOCTYPE html>
<html lang="en">
<head> 
<link href="https://fonts.googleapis.com/css?family=Bilbo+Swash+Caps" rel="stylesheet"> 
<script type="text/javascript" src="js/instafeed.min.js"></script>
<style type="text/css">

.shivali{
	font-size: 60px;
}

.borbot{
	border-bottom: 2px solid #ccc;
}

.banner_image{
	height: 600px;
}

.row{
	margin: 0px;
	padding: 0px;
}
	.jkl{
		background-color: #E8E6E7;
		margin: 0px;
		
		min-height: 500px;	}
		.bor{
			
			min-height: 400px;
			margin: 50px 0px;
		}
		.small{
		
			min-height: 200px;
			margin-top: 100px;
			background-color: white;
			


		}
		.mar{
			margin:50px 0px;
		}
		.small1{
			min-height: 500px;
			/*margin-top: 20px;*/
		}
		.mar3{
			/*margin-left:50px;*/
			
		}
		.mar4{
			margin-top: 50px;
		}
		.back{
			background-color: black;
			margin-left: 0px;
			min-height: 200px;

		}

		.shape{
	    position: absolute;
    top: 19%;
    text-align: center;
    left: -3.9%;
    width: 77px;
    height: 95px;
    background-color: #fcd5d5;
    font-family: 'Great Vibes', cursive;
    font-size: 23px;
		}

.shape1{
position: absolute;
    left: -22px;
    top: 161px;
    height: 0;
    border-left: 39px solid transparent;
    border-right: 39px solid transparent;
    border-top: 52px solid #fcd5d5;
 

		}

	.shape9{
	    position: absolute;
    top: 19%;
    text-align: center;
    right: -4%;
    width: 76px;
    height: 95px;
    background-color: #fcd5d5;
    font-family: 'Great Vibes', cursive;
    font-size: 23px;
		}

.shape10{
    position: absolute;
    right: -24px;
    top: 160px;
    height: 0;
    border-left: 39px solid transparent;
    border-right: 39px solid transparent;
    border-top: 52px solid #fcd5d5;


		}

		.anchor1:hover{

    background: #f1e4e4;
    color:black;
    cursor:default;
 
		}


.text1{
	    text-align: center;
    font-size: 35px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.style3{
	display:none;
	
    position: absolute;
    width: 70%;
    color: #fdfdfd;
    height: 340px;
    color: #000;
    top: 50px;
    margin-left: 42px;
    background-color: white;

}
.style3 p{
	
		text-align:center;
		margin-bottom:10px;

}
.style3 h2{

	text-align: center;
    margin-top: 49px;
    font-size: 28px;
}

.style1:hover .style3{

	display:block;
}

.mob1{
	width: 50%;
}

.mm{
	width: 40%
	margin-left: 30%;
	clear: both;
}

.hold{
	width:40%;position: absolute; top: 100%; left: 27%; background: #fff; box-shadow: 1px 1px 1px 1px #ccc; padding: 30px; margin: auto;
}

.margtop{
		height: 60px;
}

@media screen and (max-width:480px){

.hold{
	width:95%;position: absolute; top: 40%; left: 2.5%; background: #fff; box-shadow: 1px 1px 1px 1px #ccc; padding: 5px; ;
}

.margtop{
		height: 160px;
}
	.shivali{

	 font-size: 24px;
}

.banner_image{
	height: 130px;
}

.style3{
	width: 80%;
	margin-left: 5%;
	top: 5px;
}

.borbot{
	display: none;
}

.margbot{
	margin-bottom: 15px;
}


   
    
     .shape1{
       left: -11px;
    }
    
     
    
     .shape10{
       right: -11px;
    }

    .mob1{
    	width: 100%;
    }

    .mob2{
    	width: 70%;
    }
}

</style>



<title>Shivali Sisodiya | Fashion Blogger</title>  




<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" /><!-- fontawesome -->     
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" /><!-- Bootstrap stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- stylesheet -->
<!-- meta tags -->

<meta property="og:url"                content="<?php echo $url; ?>" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="<?php echo $data['heading'];  ?>" />
<meta property="og:description"        content="<?php echo $data['short_des']; ?>" />
<meta property="og:image"              content="<?php echo $data['image']; ?>" >


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta tags -->
<!--fonts-->
<link href="https://fonts.googleapis.com/css?family=Sacramento" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lovers+Quarrel" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
<!--//fonts-->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/main.js"></script>
<!-- Required-js -->
<!-- main slider-banner -->
<script src="js/skdslider.min.js"></script>
<link href="css/skdslider.css" rel="stylesheet">
<script type="text/javascript">
		jQuery(document).ready(function(){
			jQuery('#demo1').skdslider({'delay':5000, 'animationSpeed': 2000,'showNextPrev':true,'showPlayButton':true,'autoSlide':true,'animationType':'fading'});
						
			jQuery('#responsive').change(function(){
			  $('#responsive_wrapper').width(jQuery(this).val());
			});
			
		});
</script>	
<!-- //main slider-banner --> 
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->

<!-- scriptfor smooth drop down-nav -->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});




</script>
<!-- //script for smooth drop down-nav -->

<!-- <script type="text/javascript">
	var feed=new Instafeed({
		get: "userId",
		userId: "shiv__ali__",
		clientId: "e98809bc1c5442fbb49a1b30eb2ca82e" 

	});
		feed.run();
</script> -->


</head>
<body>
<!-- header -->
	<header>
		<div class="w3layouts-top-strip">
			<div class="container">
				<div class="logo">
					<h1 style="font-family: 'Bilbo Swash Caps', cursive; "><a class="shivali" href="index.php" >Shivali Sisodiya </a></h1>
				
				</div>
				
				
			</div>
		</div>
		<!-- navigation -->
			<nav class="navbar navbar-default">
			  <div class="container">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
					<li><a class="active" href="index.php">Home</a></li>
					<li><a href="about.php">About </a></li>
					<li><a href="category.php?category=Fashion&id=1">Fashion</a></li>					
					<li><a href="category.php?category=Travel&id=1">travel</a></li>
					<li>
					  <a href="category.php?category=Life Style&id=1" > life style </a>
					  
					 
					</li>
					<li>
					<a href="lookbook.php" > Lookbook </a></li>
					
					
					<li><a href="contact.php">Contact</a></li>

					<li style="float: right;"> <div class="w3ls-social-icons">
					<a class="facebook" href="https://www.facebook.com/shivali.sisodiya/"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="https://www.instagram.com/shiv__ali__/"><i class="fa fa-instagram"></i></a>
					
					<a class="twitter" href="https://in.pinterest.com/shivalisisodiya0242/"><i class="fa fa-pinterest"></i></a>
					
					<a class="twitter" href="https://twitter.com/shiv__ali__"><i class="fa fa-twitter"></i></a>
					
				
					
				</div></li>
				  </ul>
				</div>
						<div class="clearfix"> </div>

			  </div><!-- /.container-fluid -->
			</nav>
			
		<!-- //navigation -->
	</header>
	<!-- //header -->
	<!-- top-header and slider -->


	<div>
	<img src="<?php echo $data['banner_image']; ?>" style="width: 100%;"  class="banner_image">
	</div>

	<div class="hold">

	  <h2 style="font-family: 'Great Vibes', cursive; color: black; text-align: center;"> <?php echo $data["category"]; ?>  </h2> <br>

	   <h2 style="color: black; text-align: center;"> <?php echo $data["heading"]; ?> </h2>

	   <p style="margin-top: 10px;color: gray; text-align: center; font-size: 24px;"> <?php echo $day; ?>
									<?php echo $month; ?>
									<?php echo $year; ?>  </p>

	</div>
	<!-- //banner -->
	<!-- breadcrumbs -->
	<div class="margtop"> </div>
<!-- //breadcrumbs -->
	<div class="container">
		<div class="banner-btm-agile">
		<!-- //btm-wthree-left -->
			<div class="col-md-12">
				<div class="single-left">
				<div class="single-left1">
				<div class="row">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['image']; ?>" alt=" " style="width: 100%;" /> </div>

					
					</div>
			<?php if($data["image_2"]!=NULL) {?>
			<div class="row" style="margin-top: 20px;">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['image_2']; ?>" alt=" " style="width: 100%;" /> </div>

					
					</div>
			<?php } ?>

			<?php if($data["image_3"]!=NULL) {?>
			<div class="row" style="margin-top: 20px;">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['image_3']; ?>" alt=" " style="width: 100%;" /> </div>

				
					</div>
			<?php } ?>

			<?php if($data["img4"]!=NULL) {?>
			<div class="row" style="margin-top: 20px;">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['img4']; ?>" alt=" " style="width: 100%;" /> </div>

				
					</div>
			<?php } ?>

			<?php if($data["img5"]!=NULL) {?>
			<div class="row" style="margin-top: 20px;">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['img5']; ?>" alt=" " style="width: 100%;" /> </div>

				
					</div>
			<?php } ?>

			<?php if($data["img6"]!=NULL) {?>
			<div class="row" style="margin-top: 20px;">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['img6']; ?>" alt=" " style="width: 100%;" /> </div>

				
					</div>
			<?php } ?>

			<?php if($data["img7"]!=NULL) {?>
			<div class="row" style="margin-top: 20px;">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['img7']; ?>" alt=" " style="width: 100%;" /> </div>

				
					</div>
			<?php } ?>

			<?php if($data["img8"]!=NULL) {?>
			<div class="row" style="margin-top: 20px;">
				
				<div class="col-md-12"> 	<img src="<?php echo $data['img8']; ?>" alt=" " style="width: 100%;" /> </div>

				
					</div>
			<?php } ?>

					<hr>
					<h3 align="center" style="text-align: center;"> <?php echo $data['heading']; ?> </h3>
					<hr>
					<p style="text-align: justify;">
						
						<?php echo $data['content']; ?>
					</p>
					
					<h4 style="text-align: center;"> Share The Love   </h4>
						<div class="w3ls-social-icons">
					<a class="facebook" href="https://www.facebook.com/dialog/share?app_id=2001066396845271&display=popup&href=<?php echo $url; ?>&redirect_uri=<?php echo $url; ?>"><i class="fa fa-facebook"></i></a>



					<a class="twitter" href="https://www.instagram.com/shiv__ali__/"><i class="fa fa-instagram"></i></a>
					
				</div>
				</div>
				

				</div>
				</div>
				</div>
				</div>

<br> <br><br>

<div class="container" id="frm">
	<div class="banner-bottom">
			<div class="agileits_heading_section">
				
				<p class="agileinfo_para" style="font-size: 24px;"> <i> Leave a comment! </i></p>
			</div>
			
			<div class="w3ls_portfolio_grids w3_agile_mail_grids">	
				<form action="" method="post">
					<div class="col-md-6 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" name="name" id="input-25" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						
						
					</div>
					<div class="col-md-6 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="email" name="email" id="input-26" placeholder=" " required="" />
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						
						
						
					</div>
					<div class="col-md-12 w3_agile_mail_grid">
						<textarea name="Message" placeholder="Your message here..." required="" ></textarea>
					</div>

					<div class="col-md-12 w3_agile_mail_grid">
						<input type="submit" name="subs" value="POST YOUR COMMENT">
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
		
	</div>
</div>

<div class="container">

<?php

	$sq="select * from comments where post_id=$id";
	$q=mysqli_query($con,$sq);
	if($q){ 
		$row=mysqli_num_rows($q);
		if($row>0)
		{
			?> <h3>Comments: </h3> <?php 
		}
	 
		while($data=mysqli_fetch_array($q)){

		?>
	
<div style="width: 100%; border: 1px solid #ccc; margin: 10px 0px;">

<div style="width: 5%; float: left;">
<img src="images/th.jpg" width="100%;">  
</div>
<div style="width: 95%; float: left;">
<div style="width: 100%; background: #fcd5d5; padding: 3px; padding-left: 10px;">

<h3 style="color: #fff"> <?php echo $data['name']; ?> </h3>

</div>

<p style="padding: 10px;  text-align: left;">
<?php echo $data["comment"]; ?>	

</p>
</div>

<div style="clear: both;"> </div>
</div>

<?php  } } ?>

</div>

<?php
include("come.php"); 
include 'footer.php';

if (isset($_POST["subs"])) {
	$name=$_POST["name"];
	$email=$_POST["email"];
	$comment=$_POST["Message"];
	$post_id=$id;

	$sql="insert into comments set name='$name', email='$email', comment='$comment', post_id=$post_id ";

	$q=mysqli_query($con,$sql);
	if($q){
		// echo  "<script> alert(1) </script>";
		$url=$_SERVER["self"]."#frm";
		header("location: $url");
	}

	}




?>

11,111