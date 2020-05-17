<?php
include("includes/header.php");


include("includes/db.php");

if(isset($_GET['update'])){
    
    $data = [
        'Status' => "Approved"
    ];
    
    $pushData = $database->getReference("Redeem/".$_GET['update'])->update($data);
    echo '<script>window.location="redeem.php"</script>';
}
?>
                    <div class="page-content-wrapper ">

                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="page-title-box">
                                        <!-- <div class="btn-group float-right">
                                            <ol class="breadcrumb hide-phone p-0 m-0">
                                                <li class="breadcrumb-item"><a href="#">Annex</a></li>
                                                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                                                <li class="breadcrumb-item active">Datatable</li>
                                            </ol>
                                        </div> -->
                                        <h4 class="page-title">Redeems</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <!-- <h4 class="mt-0 header-title">Users</h4> -->
                                            <!-- <p class="text-muted m-b-30 font-14">DataTables has most features enabled by
                                                default, so all you need to do to use it with your own tables is to call
                                                the construction function: <code>$().DataTable();</code>.
                                            </p> -->
                                                <!-- <button class="btn btn-primary">
                                                    <a href="adduser.php" style="text-decoration:none; color:white">Add User</a>
                                                </button> -->
                                                <br />
                                                <br />
            
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Dollar</th>
                                                    <th>Category</th>
                                                    <th>Coins</th>
                                                    <!-- <th>Operation</th> -->
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    include("includes/db.php");

                                                    

                                                    $ref = "Redeem";
                                                    if(isset($_GET['del'])){
                                                        $database->getReference("Redeem/".$_GET['del'])->remove();
                                                        echo '<script>window.location="users.php"</script>';
                                                        
                                                    }

                                                    $data = $database->getReference($ref)->getValue();
                                                    $i = 0;
                                                    foreach($data as $key => $data1){
                                                        $i++;
                                                    ?>
                                                <tr>
                                                    <td><?php echo $data1['name']; ?></td>
                                                    <td><?php echo $data1['dollar']; ?></td>
                                                    <td><?php echo $data1['category']; ?></td>
                                                    <td><?php echo $data1['coins']; ?></td>
                                                    <!-- <td class="text-center">
                                                        <a onclick="return confirm('Are you sure to Approve this Redeem!')" class="btn btn-primary" href="redeem.php?update=<?php echo $key; ?>"> 
                                                            Approve
                                                        </a> 
                                                    </td> -->
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                                </tbody>
                                            </table>
            
                                        </div>
                                    </div>
                                </div> <!-- end col -->
                            </div> <!-- end row -->

                        </div><!-- container -->

                    </div> <!-- Page content Wrapper -->

                </div> <!-- content -->

                <footer class="footer">
                    © 2020 All Rights Reserved By RedXSofts.
                </footer>

            </div>
            <!-- End Right content here -->

        </div>
        <!-- END wrapper -->


        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/modernizr.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.nicescroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>

         <!-- Required datatable js -->
         <script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
         <script src="assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
         <!-- Buttons examples -->
         <script src="assets/plugins/datatables/dataTables.buttons.min.js"></script>
         <script src="assets/plugins/datatables/buttons.bootstrap4.min.js"></script>
         <script src="assets/plugins/datatables/jszip.min.js"></script>
         <script src="assets/plugins/datatables/pdfmake.min.js"></script>
         <script src="assets/plugins/datatables/vfs_fonts.js"></script>
         <script src="assets/plugins/datatables/buttons.html5.min.js"></script>
         <script src="assets/plugins/datatables/buttons.print.min.js"></script>
         <script src="assets/plugins/datatables/buttons.colVis.min.js"></script>
         <!-- Responsive examples -->
         <script src="assets/plugins/datatables/dataTables.responsive.min.js"></script>
         <script src="assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
 
         <!-- Datatable init js -->
         <script src="assets/pages/datatables.init.js"></script>

        <!-- App js -->
        <script src="assets/js/app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#datatable2').DataTable();  
            } );
        </script>


    </body>
</html>