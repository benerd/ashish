<?php
include("header.php");


$id=$_GET["id"];
$sql="select * from lookbook where id=$id";
$q=mysqli_query($con, $sql);

if($q){
  $data=mysqli_fetch_assoc($q);
}

?>


  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Edit Lookbook post </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">

       <form action="edit_lb_post.php" method="post" class="form-horizontal" enctype="multipart/form-data">
       <label>	Post title:  </label> <input type="text" class="form-control" name="post_title" value="<?php echo $data['Title']; ?>"> <br>
       <label> Short Desc:  </label>
       <textarea rows="3" name="short_des" class="form-control"><?php echo $data['short_desc']; ?></textarea>
      	<label> Img1 </label> <input type="file" name="img1"> <br>	
      	<label> Img2 </label> <input type="file" name="img2"> <br>
      	<label> Img3 </label>  <input type="file" name="img3"> <br>
      		<label> Img4 </label>  <input type="file" name="img4"> <br>
      			<label> Img5 </label>  <input type="file" name="img5"> <br>
      				<label> Img6 </label>  <input type="file" name="img6"> <br>
      					<label> Img7 </label>  <input type="file" name="img7"> <br>
      						<label> Img8 </label>  <input type="file" name="img8"> <br>

   <input type="hidden" name="hid1" value="<?php echo $data['img1']; ?>">
   <input type="hidden" name="hid2" value="<?php echo $data['img2']; ?>">
   <input type="hidden" name="hid3" value="<?php echo $data['img3']; ?>">
   <input type="hidden" name="hid4" value="<?php echo $data['img4']; ?>">
  <input type="hidden" name="hid5" value="<?php echo $data['img5']; ?>">
  <input type="hidden" name="hid6" value="<?php echo $data['img6']; ?>">
  <input type="hidden" name="hid7" value="<?php echo $data['img7']; ?>">
  <input type="hidden" name="hid8" value="<?php echo $data['img8']; ?>">

 <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">

      	<input type="submit" value="submit" class="btn btn-success" name="">
       </form>
