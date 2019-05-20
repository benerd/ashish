<?php

include("header.php");

?>


  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Videos </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">

            <br>

             <?php
                         if(isset($_GET["m"]))
                         {
                          if($_GET["m"]==1)
                            {
                              echo "<span style='color: green; font-size: 24px;'>Video Succesfully Added </span>";
                            }
                            if($_GET["m"]==2)
                            {
                              echo "<span style='color: red;font-size: 24px;'>Error </span> ";
                            }
	                     }


                         ?>
<form action="insert_video.php" method="post" enctype="multipart/form-data">
	

Video Link: <textarea name="vidn" rows="5" class="form-control"> </textarea><br>
Video Thumbnail: <input type="file" name="thumb" class="form-control">  <br>
Video Title: <input type="text" name="title" class="form-control" maxlength="180"> <br>
<input type="submit" name="sub"> <br>

</form>

</div> 

<script src="../vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>  