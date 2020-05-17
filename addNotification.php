<?php
include("includes/header.php");




include("includes/db.php");

if(isset($_POST['submit'])){
    $user_id = $_POST['user_id'];
    $message = $_POST['message'];
    
    $data = [
        'uid' => $user_id,
        'msg' => $message
    ];
    $ref = "Notification/";
    $pushData = $database->getReference($ref)->push($data);
    echo '<script>window.location="addNotification.php"</script>';
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
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active">Form Elements</li>
                                            </ol>
                                        </div> -->
                                        <h4 class="page-title">Add Notofication</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Add Notofication</h4>
                                            <form method="post">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label class="col-form-label">Select User</label>
                                                        <select name="user_id" class="form-control">
                                                            <option value="">Select User</option>
                                                            <?php
                                                            $ref= "Users";
                                                            $data = $database->getReference($ref)->getValue();
                                                                $i = 0;
                                                                foreach($data as $key => $data1){
                                                                    $i++;
                                                                ?>
                                                            <option value="<?php echo $key; ?>"><?php echo $data1['Name']; ?></option>
                                                        <?php } ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Message</label>
                                                        <input name="message" class="form-control" type="text" placeholder="Enter Message" id="example-text-input">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-sm-12 text-center">
                                                        <input class="btn btn-primary" name="submit" value=
                                                        
                                                        'insert Data' type="submit"  id="example-text-input">
                                                    </div>
                                                </div>
                                            </form>
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

        <!-- App js -->
        <script src="assets/js/app.js"></script>

    </body>
</html>