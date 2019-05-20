<?php include("header.php"); 
?>

    <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>

                    <h3>  
                    <?php
                    	if(isset($_GET["m"]))
                    	{
                    		if($_GET["m"]==2){
                    			echo "Updated";
                    		}
                    		if($_GET["m"]==1){
                    			echo "error while uploading image. Please try again";
                    		}

                    		if($_GET["m"]==3){
                    			echo "error in query";
                    		}
                    	}


                    ?>
                    </h3>
                    <fieldset>
             		
             		<legend> Contact Image:</legend>

             		<form action="" method="post" enctype="multipart/form-data">
             			
             			<input type="file" name="img">
             			<br>
             			<input type="hidden" name="ab">
             			<input type="submit" value="Update" class="btn btn-success" name="subt">

             		</form>
             	</fieldset>
                </div>
             	

<?php


if(isset($_POST['subt']))
{
$name=$_FILES["img"]["name"];
$tmp=$_FILES["img"]["tmp_name"];
$url="dashboard/thumbs/".$name;
$x=move_uploaded_file($tmp, "../thumbs/".$name);

if($x){
	$qry=mysqli_query($con, "insert into img_db set img='$url', type=2 ");

	if($qry){
		header("location:change_contact.php?m=2");
	}
	else
	{
		header("location:change_contact.php?m=3");
	}
}

else{
	header("location:change_contact.php?m=1");
}
}

?>