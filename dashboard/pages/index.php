<?php include("header.php"); ?>
<?php


$em=$_SESSION['email'];

include('../../connect.php');
ini_set("log_errors", 1);
ini_set("error_log", "../../logs/error.log");
$qry=mysqli_query($con, "select * from users where email='$em' ");

if($qry)
{
    $data=mysqli_fetch_array($qry);
}




?>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Dashboard</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
          
          <div>
              
              <?php echo "Hello ".$data['name']; ?> <br>
               <?php echo "Email ".$data['email']; ?>
          </div>

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="../vendor/raphael/raphael.min.js"></script>
    <script src="../vendor/morrisjs/morris.min.js"></script>
    <script src="../data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

</body>

</html>
