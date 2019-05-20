<?php

include("header.php");
?>
	
	<!-- //banner -->
	<!-- breadcrumbs -->
	<!-- <div class="breadcrumbs">
		<div class="container">
			<ol class="breadcrumb breadcrumb1 animated wow slideInLeft" data-wow-delay=".5s">
				<li><a href="index.html">Home</a></li>
				<li class="active">Contact</li>
			</ol>
		</div>
	</div> -->
<!-- //breadcrumbs -->

	<!-- contact -->


 <div>
<?php
include 'connect.php';
$qry=mysqli_query($con, "select * from img_db where type=2 order by date desc");
if($qry){
  $data=mysqli_fetch_array($qry);
 
}

?>

<div class="pc1">
  	<img src="<?php echo $data['img']; ?>" style="width: 100%;">

  		<div style="position: absolute; width: 530px;height: 550px; top: 28%; right: 2%;background: white; padding: 10px; padding-left: 25px;"> 
  			<div style="position: absolute;left: -4%;top: 4%;"> <span  style="font-family: 'Great Vibes', cursive;color: white; width: 260px;text-align: right; font-size: 24px;display: block;padding: 6px; border-radius: 3px; height: 40px; background: #f5A1A1; text-transform: capitalize; padding-right: 9px;" > Write me a message </span> </div>

  			<br><br>
  			<div class="w3ls_portfolio_grids w3_agile_mail_grids">	
				<form action="#" method="post">
					<div class="col-md-12 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " name="firstname" required="" />
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="" name="email" />
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="" name="mobile" />
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
							</label>
						</span>
						
					</div>
					<div class="col-md-12 w3_agile_mail_grid">
						<textarea name="Message" placeholder="Your message here..." rows="4" style="height: 40px;" required></textarea >
						<input type="submit" value="Submit" name="sub">
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
  			

  		</div>


  </div>
 		
  </div>



  <div class="mb1">

  <img src="<?php echo $data['img']; ?>" style="width: 100%;">

  		<div style=""> 
  			<div style=""> <span  style="font-family: 'Great Vibes', cursive;color: white; width: 260px;text-align: center; font-size: 24px;display: block; border-radius: 3px; height: 40px; background: #f5A1A1; text-transform: capitalize; padding-right: 9px; margin-left: 10%; margin-top: 20px;" > Write me a message </span> </div>

  			<br><br>
  			<div class="w3ls_portfolio_grids w3_agile_mail_grids" style="width: 90%;margin-left: 5%;">	
				<form action="#" method="post">
					<div class="col-md-12 w3_agile_mail_grid">
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-25" placeholder=" " name="firstname" required="" />
							<label class="input__label input__label--ichiro" for="input-25">
								<span class="input__label-content input__label-content--ichiro">Your Name</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="email" id="input-26" placeholder=" " required="" name="email" />
							<label class="input__label input__label--ichiro" for="input-26">
								<span class="input__label-content input__label-content--ichiro">Your Email</span>
							</label>
						</span>
						<span class="input input--ichiro">
							<input class="input__field input__field--ichiro" type="text" id="input-27" placeholder=" " required="" name="mobile" />
							<label class="input__label input__label--ichiro" for="input-27">
								<span class="input__label-content input__label-content--ichiro">Your Phone Number</span>
							</label>
						</span>
						
					</div>
					<div class="col-md-12 w3_agile_mail_grid">
						<textarea name="Message" placeholder="Your message here..." rows="4" style="height: 40px;" required></textarea >
						<input type="submit" value="Submit" name="sub">
					</div>
					<div class="clearfix"> </div>
				</form>
			</div>
  			

  		</div>


  </div>


	
	<!-- //contact -->
	<!-- footer -->
	 <?php include("footer.php"); ?>

	 <?php

if(isset($_POST['sub'])){
$nm=$_POST["firstname"];
$email=$_POST["email"];
$mob=$_POST["mobile"];
$message=$_POST["Message"];
$sub="Query From ".$nm;

$msg="Name: ".$nm."
Email: ".$email."
Mobile: ".$mob."
Query: ".$message;

$x=mail("contact@shivalisisodiya.com", $sub, $msg);

if($x){
    echo "<script> alert('Your query has been sent succesfully'); </script>";
    
}
}
?>