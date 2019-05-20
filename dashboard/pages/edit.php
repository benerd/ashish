<?php include("header.php"); ?>


<script src="../tinymce/tinymce.min.js"></script>		
		<script>
		 tinymce.init({
		    selector: "#blog_des",
		    theme: "modern",
		     fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
		    plugins: [
		        "advlist autolink lists link  charmap print preview hr anchor pagebreak",
		        "searchreplace wordcount visualblocks visualchars code fullscreen",
		        "insertdatetime media nonbreaking save table contextmenu directionality",
		        "emoticons template paste textcolor colorpicker textpattern imagetools"
		    ],
		    toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link  |  fontsizeselect",
		    toolbar2: "",
		    image_advtab: true,
		    templates: [
		        {title: 'Test template 1', content: 'Test 1'},
		        {title: 'Test template 2', content: 'Test 2'}
		    ]
		});
		</script>
	

		
		</script>


<?php

$id=$_GET["id"];
$sql="select * from blogs where id=$id";
$qry=mysqli_query($con,$sql);
if($qry){
	$data=mysqli_fetch_array($qry);
}

?>


		<section style="width:80%;  margin-left: 20%;">
	
						<div class="container-fluid container-fullw bg-white">
							<div class="row">

                             <div class="panel-body">
                             <div class="col-lg-12 col-md-12">

								<div class="panel panel-white">
									<div class="panel-heading">
										<h5 class="panel-title">Edit News </h5>
									</div>
									
									<div class="panel-body">
													
										<form action="edit_new_blog.php" class="form-horizontal" method="post" enctype="multipart/form-data">
				
										<input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
											<div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Category
												</label>
													<div class="col-sm-10">
														<select name="category" id="category" class='form-control' required>
														  <option value="<?php echo $data['category']; ?>" >
														  <?php echo $data['category']; ?></option>	
													 

 
<option value="Fashion"> Fashion </option>	
		<option value="Travel"> Travel </option>										<option value="Life Style"> Life Style </option>									<option value="Sports"> Sports </option>	
		<option value="Media"> Media </option>  
															  			                            					  
														</select>	
													</div>
											</div>



											<div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Heading
												</label>
													<div class="col-sm-10">
													<input type='text' name='blog_name'  id='blog_name' class='form-control' value='<?php echo $data["heading"]; ?>' maxlength="250" required>
													</div>
											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Top Post?
												</label>
													<div class="col-sm-10">
													<select name="top_ps" class="form-control">
													<option value="<?php echo $data['is_toppost']; ?>"><?php echo $data['is_toppost']; ?></option>
														<option value="1">Yes</option>
														<option value="0">No</option>
													</select>
											</div>

											</div>


											<div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image (Display Image)
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div>

                                            <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image2 (Display Image)
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='filesd'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div>       

                                                   <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image2 
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files1'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div>  

                                                   <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image3 
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files2'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div> 

                                          <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image4
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files4'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div> 

                                                    <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image5 
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files5'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div> 

                                                    <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image6 
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files6'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div> 

                                                 <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image7 
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files7'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div>
                                             <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Image8
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files8'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div> 


                                                   <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Banner Image
												</label>
													<div class="col-sm-10">
                                                   <input type='file' name='files3'  id='blog_image' class='form-control'>
                                                   </div>
                                                   </div>
 
                                                   <input type="hidden" name="hid" value="<?php echo $data['image']; ?>">

                                                    <input type="hidden" name="hid2" value="<?php echo $data['image_2']; ?>">

                                                      <input type="hidden" name="hid3" value="<?php echo $data['image_3']; ?>">


                                                       <input type="hidden" name="hid6" value="<?php echo $data['img4']; ?>">

                                                       <input type="hidden" name="hid7" value="<?php echo $data['img5']; ?>">

                                                       <input type="hidden" name="hid8" value="<?php echo $data['img6']; ?>">

                                                       <input type="hidden" name="hid9" value="<?php echo $data['img7']; ?>">

                                                      <input type="hidden" name="hid10" value="<?php echo $data['img8']; ?>">

                                                   

                                                      <input type="hidden" name="hid4" value="<?php echo $data['banner_image']; ?>">

                                                       <input type="hidden" name="hid5" value="<?php echo $data['d_image']; ?>">

                                                  <div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3">
																Short Description
												</label>
													<div class="col-sm-10">
                                                <textarea class="form-control" name="short_des" rows="5" style="resize: none;" maxlength="500"  required> <?php echo $data['short_des']; ?> </textarea>
                                                   </div>
                                                   </div>


											<div class="form-group">
												<label class="col-sm-2 control-label" for="inputEmail3" required>
																Content
												</label>
													<div class="col-sm-10">

														<textarea rows='5' cols='43' name='blog_des' id='blog_des'>
															<?php echo $data['content']; ?>
														</textarea>

														
													</div>
											</div>

											</div>

											
											<div class="form-group margin-bottom-0">
												<div class="col-sm-offset-2 col-sm-10">

													
														<input type='submit' name='add_sub_cate' class='btn btn-o btn-primary'  value='Save' >
														<input type='reset'  class='btn btn-o btn-primary'  value='Reset'>
														
														


													


															    
												</div>				
											</div>

											


										</form>
												
									</div></div></div></div></div></div></section>
								
								<script src="../vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>  