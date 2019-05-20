<?php

include("header.php");

?>


  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Change Password  </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <div class="row">

<h3 style="color: green;">
<?php

     if(isset($_GET["m"]))
                         {
                          if($_GET["m"]==1)
                            {
                              echo "Password updated ";
                            }

                           
                         }


?> </h3>
            <br>

   <div class="col-sm-6">    
<form action="change_my_password.php" class="form-horizontal" method="post" onsubmit="return check();">


<div class="form-group">
<div class="col-md-3">
New Password: </div>
<div class="col-md-9">
<input type="Password" name="pass" id="pass" class="form-control">
</div>
</div>

<div class="form-group">
<div class="col-md-3">
Confirm Password: </div>
<div class="col-md-9">
<input type="Password" name="cpass" id="cpass" class="form-control">
</div>
</div>

<div class="form-group">
<div class="col-md-3">
 </div>
<div class="col-md-9">
<input type="submit" name="submit"  value="submit" class="btn btn-success">
</div>
</div>

<div class="">

<label class="label label-danger" id="msg"></label>
</div>
	




</form>

</div></div>     


<script type="text/javascript">
	
	function check(){

		var pas=document.getElementById("pass").value;
		var cpass=document.getElementById("cpass").value;
		if(pas!=cpass){
			document.getElementById("msg").innerHTML="Password mismatch";
			return false;
		}
			else{
				return true;
		}
	
	}
</script>

<script src="../vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>  