<?php 

  $cat=$_GET["category"];
if(!isset($cat)){
  header("location: index.php");
 }
                   include("header.php");
                    include("connect.php");
                  

?>

<br><br>
<div class="container">
      <div class="row" >
      <div class="col-md-12" style="">
        <div class="container">
            <div class="col-md-5 borbot" > </div>
            <div style="height:60px;" class=" col-md-2 text-center ">
            <h3 style="font-size: 34px;line-height: 10px;  "><?php echo $cat; ?> </h3>
            </div>
            <div class="col-md-5 borbot" > </div>
            </div>
     <?php 
  

  $sql="select * from blogs where category='$cat'";
  $q=mysqli_query($con, $sql);
  if($q){
    while ($data=mysqli_fetch_array($q)) {
     $id=$data["id"];
                $url="landing.php?cat=$id";
                	$date=new DateTime($data["posted_on"]);
					$dat=$date->format("d-m-y");
     ?>

     <div class="col-md-4">

    <a href="<?php echo $url; ?>">  <img src="<?php echo $data['d_image']; ?>" width="100%"> </a>
     <div style="width: 80%; margin: auto; margin-top: 5px;"> <a style="color: black;" href="<?php echo $url; ?>" ><p style="background:;text-align: center; font-size: 18px; padding: 1px; "> <?php echo $data['heading']; ?> </a></p> </div>
    <p style="text-align: center;"> <i> <?php echo $dat; ?> </i> <br> </p>
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
      
<?php } } ?>

      </div>
      </div>
      </div>





       <br><br> 
<?php include("come.php"); ?>

         <!-- Footer -->
    <?php include("footer.php"); ?>
