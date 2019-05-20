<?php include("header.php"); ?>

	
	<!-- //banner -->
	<!-- breadcrumbs -->
		
		
<br>

<br> 
  <div>
  	

<?php
include 'connect.php';
$qry=mysqli_query($con, "select * from img_db where type=1 order by date desc");
if($qry){
  $data=mysqli_fetch_array($qry);
 
}

?>


<div class="pc">
  	<img src="<?php echo $data['img']; ?>" style="width: 100%;">

  		<div style="position: absolute; width: 530px;height: 800px; top: 35%; right: 2%;background: white; padding: 10px; padding-left: 25px;"> 
  			<div style="position: absolute;left: -4%;top: 4%;"> <span  style="font-family: 'Great Vibes', cursive;color: white; width: 130px;text-align: right; font-size: 24px;display: block;padding: 6px; border-radius: 3px; height: 40px; background: #f5A1A1; text-transform: capitalize; padding-right: 9px;" > About </span> </div>


  			<p style="margin-top: 120px;">
  				I am Shivali Sisodiya, I was raised in Rajasthan, relocated to Gurgaon in order to work and follow my dreams. By profession I work with Hitachi, I had always been passionate about fashion, and over time I developed a style of my own, a sort of blend of pieces from chic, modern, and sophisticated lines. it is the huge thing but back then, every single person had a blog where they wrote about their lifestyle, what they ate, how stressed they were by workplace, I will write about a number of topics but specializes in beauty, fashion & lifestyle and travel. </p> <br> <br>
  				<p>

The more I want to write blog, the more I want to reach into my own life for material, telling stories of my travels, describing my daily experiences, style and providing some beauty tips with my daily audience,
</p> <br> <br>
<p>
it was never my intention to do this as a career. BUT I am starting writing my blog as a platform to document my life and adventures. I KNOW It is a very hectic period to manage both. <br> <br>

  			</p>
  		</div>


  </div>


<div class="mb">
    <img src="<?php echo $data['img']; ?>" style="width: 100%;">

      <div style=""> 
        <div style=""> <span  style="font-family: 'Great Vibes', cursive;color: white; width: 130px;text-align: center; font-size: 24px;display: block;padding: 6px; border-radius: 3px; height: 40px; background: #f5A1A1; text-transform: capitalize; padding-right: 9px;margin-left: 30%; margin-top: 20px;" > About </span> </div>

        <div style="padding: 0px 10px 0px 8px;">
        <p style="margin-top: 10px;">
          I am Shivali Sisodiya, I was raised in Rajasthan, relocated to Gurgaon in order to work and follow my dreams. By profession I work with Hitachi, I had always been passionate about fashion, and over time I developed a style of my own, a sort of blend of pieces from chic, modern, and sophisticated lines. it is the huge thing but back then, every single person had a blog where they wrote about their lifestyle, what they ate, how stressed they were by workplace, I will write about a number of topics but specializes in beauty, fashion & lifestyle and travel. </p> <br> <br>
          <p>

The more I want to write blog, the more I want to reach into my own life for material, telling stories of my travels, describing my daily experiences, style and providing some beauty tips with my daily audience,
</p> <br> <br>
<p>
it was never my intention to do this as a career. BUT I am starting writing my blog as a platform to document my life and adventures. I KNOW It is a very hectic period to manage both. <br> <br>

        </p>
      </div>
</div>

  </div>


 		
   
  <?php include("come.php"); ?>

<?php include("footer.php"); ?>
