<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
<div class='container'>
<?php include 'header.php'; 

include 'connect.php';
$sql="select * from lookbook";

$qry=mysqli_query($con,$sql);
$i=1;
if($qry){
  while($data=mysqli_fetch_array($qry)){



?>

<div class="col-md-3" style="margin-bottom: 15px">
 <div id="myCarousel<?php echo $i; ?>" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

       <?php if($data['img1']!="NULL"){?>
    <div class="item active">
      <div class="slide-content">
        <img src="<?php echo $data['img1']; ?>" width="100%" height="382px">
        <div class="carousel-caption">
          <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>




    
      <?php if($data['img2']!="NULL"){?>
    <div class="item">
      <div class="slide-content">
        <img src="<?php echo $data['img2']; ?>" width="100%"  height="382px">
        <div class="carousel-caption">
          <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>

    <?php if($data['img3']!="NULL"){?>
    <div class="item">
      <div class="slide-content">
        <img src="<?php echo $data['img3']; ?>" width="100%"  height="382px">
        <div class="carousel-caption">
         <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>
    
      <?php if($data['img4']!="NULL"){?>
    <div class="item">
      <div class="slide-content">
        <img src="<?php echo $data['img4']; ?>" width="100%"  height="382px">
        <div class="carousel-caption">
         <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>
    
    
     <?php if($data['img5']!="NULL"){?>
    <div class="item">
      <div class="slide-content">
        <img src="<?php echo $data['img5']; ?>" width="100%"  height="382px">
        <div class="carousel-caption">
         <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>
    
     <?php if($data['img6']!="NULL"){?>
    <div class="item">
      <div class="slide-content">
        <img src="<?php echo $data['img6']; ?>" width="100%"  height="382px">
        <div class="carousel-caption">
         <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>
    
     <?php if($data['img7']!="NULL"){?>
    <div class="item">
      <div class="slide-content">
        <img src="<?php echo $data['img7']; ?>" width="100%"  height="382px">
        <div class="carousel-caption">
         <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>
    
     <?php if($data['img8']!="NULL"){?>
    <div class="item">
      <div class="slide-content">
        <img src="<?php echo $data['img8']; ?>" width="100%"  height="382px">
        <div class="carousel-caption">
         <h3><?php echo $data["Title"]; ?></h3>
          <p> <?php echo $data["short_desc"]; ?> </p>
        </div>
      </div>
    </div>

    <?php } ?>
  
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel<?php echo $i; ?>" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel<?php echo $i; ?>" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>


<?php $i++; } } ?>



