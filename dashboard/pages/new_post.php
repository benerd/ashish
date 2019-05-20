<?php

include("header.php");

?>


  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> New Lookbook post </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">

       <form action="submit_post.php" method="post" class="form-horizontal" enctype="multipart/form-data">
       <label>	Post title:  </label> <input type="text" class="form-control" name="post_title"> <br>
       <label> Short Desc:  </label>
       <textarea rows="3" name="short_des" class="form-control"></textarea>
      	<label> Img1 </label> <input type="file" name="img1"> <br>	
      	<label> Img2 </label> <input type="file" name="img2"> <br>
      	<label> Img3 </label>  <input type="file" name="img3"> <br>
      		<label> Img4 </label>  <input type="file" name="img4"> <br>
      			<label> Img5 </label>  <input type="file" name="img5"> <br>
      				<label> Img6 </label>  <input type="file" name="img6"> <br>
      					<label> Img7 </label>  <input type="file" name="img7"> <br>
      						<label> Img8 </label>  <input type="file" name="img8"> <br>

      	<input type="submit" value="submit" class="btn btn-success" name="">
       </form>
