<?php include("header.php"); ?>

<style type="text/css">
   
 .right{
    float: right;
 }   

</style>
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> blogs </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                         Shivali Shisodia
                           <span class="right"> <a href="new_blog.php"> Add New Blog </a> </span>
                        </div>


                        <!-- /.panel-heading -->
                        <div class="panel-body">
                         <h3 style="color: green">

                         <?php
                         if(isset($_GET["m"]))
                         {
                          if($_GET["m"]==4)
                            {
                              echo "News Succesfully Added";
                            }

                            if($_GET["m"]==5)
                            {
                              echo "News Succesfully Deleted";
                            }
                         }


                         ?>

                           </h3> 
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th> News Id  </th>
                                        <th> News Heading </th>
                                        <th> Category</th>
                                      
                                        <th> Action </th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php 


                                 include("../../connect.php");

                                 $qry=mysqli_query($con,"Select * from blogs order by id desc");

                                 while($value=mysqli_fetch_array($qry)) 
                                   {
                                  if($value['id']%2==0){ ?>
                                     <tr class="even gradeC">
                                 <?php }
                                   else { ?>
                                     <tr class="even gradex">
                                   
                                 <?php } ?>
                                    
                                        <td> <?php echo $value['id']; ?> </td>
                                        <td> <?php echo $value['heading']; ?> </td>
                                        <td> <?php echo $value['category']; ?> </td>
                                        
                                        <td>
                                         <a href="edit.php?id=<?php  echo $value['id'];  ?> "> <i class="fa fa-edit fa-fw"></i> </a>
                                         <a href="#" onclick="ask(<?php echo $value['id']; ?>)"> <i class="fa fa-remove fa-fw"></i> </a> </td>
                                        
                                    </tr>
                                    <?php  }?>
                                   
                                </tbody>
                            </table>
                            <!-- /.table-responsive -->
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
           
       
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

  

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
  <!--   <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script> -->

</body>

</html>

<script type="text/javascript">
    
    function ask(id){


    var r = confirm("Are You sure you want to delete!");
    if (r == true) {
       window.location="delete.php?id="+id;
    } else {
        window.location="";
    }
    

    }
</script>
<script src="../vendor/jquery/jquery.min.js"></script>

    <script type="text/javascript" src="../dist/js/bootstrap.min.js"></script>  