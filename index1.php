<?php include("header.php");
include("connect.php");
 ?>
	<div class="w3-slider">	
	<!-- main-slider -->
		<ul id="demo1">

		<?php
			$sql="select * from photogal order by posted_on desc limit 3";
			$qry=mysqli_query($con, $sql);

			if($qry){
				while($data=mysqli_fetch_array($qry)){
			
		?>

			<li>
				<img src="<?php echo $data['url']; ?>" alt="" />
				
				<!-- <div class="slide-desc">
					<h3><?php //echo $data['photo_title']; ?></h3>
					<p><?php //echo $data['photo_desc']; ?> </p>
				</div> -->
			</li>

			<?php }} ?>
			
			
		</ul>
	</div>
	
 
						<div class="container-fluid jkl" style="padding: 50px 0px;">
						<div class="container">
						<div class="row" >
						<div class="container">
						<div class="col-md-5 borbot" > </div>
						<div style="height:60px;" class=" col-md-2 text-center ">
						<h3 style="font-size: 34px;line-height: 10px;  ">Top Posts </h3>
						</div>
						<div class="col-md-5  borbot" > </div>
						</div>
						<?php
			$sql="select * from blogs  order by posted_on desc limit 0,3";
			$qry=mysqli_query($con, $sql);

			if($qry){
				while($data=mysqli_fetch_array($qry)){
					$cat=$data["id"];
					$url="landing.php?cat=$cat";

			
		?>			
                           <div class="col-md-4 style1 margbot">
                           <div class="style3">
                           <div style="margin: 10px;padding: 10px;margin-top: 20px; border: 1px solid #ccc;">
                           <h2 style="font-family: 'Great Vibes', cursive;color: black;text-transform: capitalize;"><?php echo $data['category']; ?></h2>
                           
                            <h3 style="color: black;text-align: center;margin-bottom: 10px;"><?php echo $data['heading']; ?></h3>
                           <p>
<?php echo $data["short_des"]; ?></p>

<a href="<?php echo $url; ?>" class="anchor1" style="    width: 197px;
    height: 40px;
    display: block;
    cursor:pointer;
    background: #fcd5d5;
    border: none;
    border-radius: 7px;
    text-align: center;
    line-height: 40px;
    font-size: 24px;
    font-family: 'Great Vibes', cursive;
    margin: auto;
    color: white;
    text-decoration: none;"> Read More...</a>
    </div>
                           </div>
								<div class="img-hov"> <img src="<?php echo $data['image']; ?>" width="100%" > </div>
							</div>
                             
							<?php }} ?>

							</div>
							</div>
							</div>

		
						
		
		<?php
			$sql="select * from blogs order by posted_on desc limit 3";
			$qry=mysqli_query($con, $sql);

			if($qry){
				$i=1;
				$x=1;
				while($data=mysqli_fetch_array($qry)){
					$cat=$data["id"];
					$url="landing.php?cat=$cat";
					$date=new DateTime($data["posted_on"]);
					$day=$date->format("d");
					$month=$date->format("F");
					$month=substr($month, 0,3);
					$year=$date->format("y");
					if($x%2!=0){
						$x++;
		?>				

					
						<div class="container">
									<div class="col-md-6 mar">
										<div class="shape">
									<?php echo $day; ?><br>
									<?php echo $month; ?><br>
									<?php echo $year; ?>
									 
									</div>
								<?php 	if($i==1){  ?><div class="shape1">
										</div> <?php }  ?>
										<?php 	if($i==3){ ?><div class="shape1" style="top: 161px;">
										</div> <?php } $i=3;?>
										<img src="<?php echo $data["image"]; ?>" width="100%" style="height: 350px;" height="350px" class="img-responsive">
									</div>
									<div class="col-md-6 mar">
									<h2 style="font-family: 'Great Vibes', cursive;color: black;text-transform: capitalize; font-size: 36px;"><?php echo $data['category']; ?></h2>
									<h1> <a  style="color: black;" href="<?php echo $url; ?>">	<?php echo $data["heading"]; ?> </a>
									</h1><br>
<p> <?php echo $data["short_des"]; ?> </p>
<br><div class="w3ls-social-icons">
					<a class="facebook" href="https://www.facebook.com/shivalisisodiya11/"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="https://www.instagram.com/shiv__ali__/"><i class="fa fa-instagram"></i></a>
						<a class="twitter" href="https://in.pinterest.com/shivalisisodiya0242/"><i class="fa fa-pinterest"></i></a>
					
					<a class="twitter" href="https://twitter.com/shiv__ali__"><i class="fa fa-twitter"></i></a>
					
				</div>
<a class="anchor1" href="<?php echo $url; ?>" style="    width: 167px;
    height: 30px;
    display: block;
    cursor:cursor;
    background: #fcd5d5;
    border: none;
    border-radius: 7px;
    text-align: center;
    line-height: 30px;
    font-size: 24px;
    font-family: 'Great Vibes', cursive;
    margin: auto;
    margin-top: 30px;
    color: black;
    text-decoration: none;"> Read More...</a>

									</div>
								</div>
				<?php  } 
				else { ?>

		<div class="container-fluid jkl" >
			<div class="col-md-12 njk"></div>
				<div class="container bor">
					<div class="col-md-6 small1">
					<h2 style="font-family: 'Great Vibes', cursive;color: black;text-transform: capitalize; font-size: 36px;"><?php echo $data['category']; ?></h2>
					<h1><a  style="color: black;" href="<?php echo $url; ?>"><?php echo $data["heading"]; ?> </a> </h1>
					<br>
					<p>	<?php echo $data["short_des"]; ?> </p>
					<br>
					<div class="w3ls-social-icons">
					<a class="facebook" href="https://www.facebook.com/shivalisisodiya11/"><i class="fa fa-facebook"></i></a>
					<a class="twitter" href="https://www.instagram.com/shiv__ali__/"><i class="fa fa-instagram"></i></a>
					
						<a class="twitter" href="https://in.pinterest.com/shivalisisodiya0242/"><i class="fa fa-pinterest"></i></a>
					
					<a class="twitter" href="https://twitter.com/shiv__ali__"><i class="fa fa-twitter"></i></a>
					
				</div>
					<a class="anchor1" href="<?php echo $url; ?>" style="    width: 167px;
    height: 30px;
    display: block;
    cursor:pointer;
    background: #fcd5d5;
    border: none;
    border-radius: 7px;
    text-align: center;
    line-height: 30px;
    font-size: 24px;
    font-family: 'Great Vibes', cursive;
    margin: auto;
    margin-top: 30px;
    color: black;
    text-decoration: none;"> Read More...</a>

					</div>
					<div class="col-md-6 small1">
						<img src="<?php echo $data["image"]; ?>" style="height: 350px;" height="350px;" width="100%">	
							<div class="shape9">
									<?php echo $day; ?><br>
									<?php echo $month; ?><br>
									<?php echo $year; ?>
									 
									</div>
									<div class="shape10">
										</div>
					</div>
				</div>
		</div>
<?php $x++;} } } ?>




		<?php include("come.php"); ?>


						
						
								
<?php

include("footer.php"); 

?>

