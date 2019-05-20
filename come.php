				<div class="row jkl">
						
							<div class="mm bor">
							
								<div align="center" class="col-md-12 small1" >
    <div class="mob1" style="background: white;
    padding: 0px 0px;">

								<div style="    text-align: center;
    border: 1px solid black;
    /*padding: 10px;*/
    background-color: white;
    height: 356px;">
    <form action="" method="post">
									<h1 class="come" style="font-family: 'Great Vibes', cursive;    margin-top: 15px;">Come Away with Me</h1>
									<p style="font-weight:300;    margin-top: 7px;">to a World of Style Musings, Wanderlust and Lifestyle<br> Inspirations.</p>
									<br>
									<input class="mob2" style="
    height: 40px;
    text-align: center;
    font-size: 24px;
    margin-bottom: 15px;    display: block;
    margin: auto;" type="text" name="firstname" placeholder="First Name"><br>
									<input class="mob2" style="
    height: 40px;
    text-align: center;
    font-size: 24px;
    margin-bottom: 15px;    display: block;
    margin: auto;" type="text" name="email" placeholder="Email Address">

<br>
<input  class="mob2" style="    width: 50%;
    height: 40px;
    display: block;
    margin: auto;
    background: #fcd5d5;
    border: none;
    border-radius: 7px;" type="submit" name="sub" value="Subscribe Now"> 

</form>
</div>
</div>

									
								
								
								</div>
							</div>
						</div>


<?php

if(isset($_POST['sub'])){
$nm=$_POST["firstname"];
$email=$_POST["email"];

$sub="Subscription Request From ".$nm;

$msg="Name: ".$nm."
Email: ".$email;

$x=mail("contact@shivalisisodiya.com", $sub, $msg);

if($x){
    echo "<script> alert('Subscribed'); </script>";
    
}
}
?>