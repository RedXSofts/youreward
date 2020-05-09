<?php
include("includes/header.php");
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
                                        <h4 class="page-title">Users</h4>
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
                                                <button class="btn btn-primary">
                                                    <a href="adduser.php" style="text-decoration:none; color:white">Add User</a>
                                                </button>
                                                <br />
                                                <br />
                                            
                                            <div class=" table-responsive">
                                            <table id="datatable" class="table table-bordered">
                                                <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Email</th>
                                                    <!-- <th>password</th> -->
                                                    <th>Gender</th>
                                                    <th>Country</th>
                                                    <!-- <th>Referral</th> -->
                                                    <th>Date</th>
                                                    <th>Operation</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    include("includes/db.php");

                                                    

                                                    $ref = "Users";
                                                    if(isset($_GET['del'])){
                                                        $database->getReference("Users/".$_GET['del'])->remove();
                                                        echo '<script>window.location="users.php"</script>';
                                                        
                                                    }

                                                    $data = $database->getReference($ref)->getValue();
                                                    foreach($data as $key => $data1){
                                                    ?>
                                                <tr>
                                                    <td><?php echo $data1['Name']; ?></td>
                                                    <td><?php echo $data1['Email']; ?></td>
                                                    <!-- <td><?php echo $data1['password']; ?></td> -->
                                                    <td><?php echo $data1['Gender']; ?></td>
                                                    <td><?php echo $data1['Country']; ?></td>
                                                    <!-- <td><?php echo $data1['Referral']; ?></td> -->
                                                    <td><?php echo $data1['date']; ?></td>
                                                    <td class="text-center">
                                                        <a href="updateuser.php?update=<?php echo $key; ?>"> 
                                                            <i style="font-size:25px;color:blue;margin-right:8px" class="ion-edit"></i>
                                                        </a> 
                                                        <a href="users.php?del=<?php echo $key; ?>"
                                                        onclick="return confirm('Are you sure to delete!')"> 
                                                            <i style="font-size:25px;color:#e30513;" class="ion-close-circled"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php 
                                                }
                                                ?>
                                                </tbody>
                                            </table>
                                            </div>
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