<?php
include("includes/header.php");




include("includes/db.php");

if(isset($_POST['submit'])){
    $key = $_POST['key'];
    $dollar = $_POST['dollar'];
    $coins = $_POST['coins'];
    
    $data = [
        'dollar' => $dollar,
        'coins' => $coins
    ];
    $ref = "Redeem/";
    $pushData = $database->getReference("Redeem/".$key)->child('list')->push($data);
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
                                                <li class="breadcrumb-item"><a href="#">Forms</a></li>
                                                <li class="breadcrumb-item active">Form Elements</li>
                                            </ol>
                                        </div> -->
                                        <h4 class="page-title">Add List</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Add List</h4>
                                            <!-- <p class="text-muted m-b-30 font-14">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.</p> -->
                                            <form method="post">
                                                <div class="row">
                                                    <div class="form-group col-sm-4">
                                                        <label for="example-text-input" class=" col-form-label">User Name</label>
                                                        <select name="key" class="form-control">
                                                        <option value="">Choose User</option>
                                                        <?php
                                                        $ref = "Redeem";
                                                    $data = $database->getReference($ref)->getValue();
                                                    foreach($data as $key => $data1){
                                                        ?>
                                                        <option value='<?php echo $key; ?>'><?php echo $data1['name'];?></option>;
                                                   
                                                   <?php
                                                    }

                                                    ?>
                                                        </select>
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="example-text-input" class=" col-form-label">Coins</label>
                                                        <input name="coins" placeholder="Enter Coins" class="form-control" type="number"  id="example-text-input">
                                                    </div>
                                                    <div class="form-group col-sm-4">
                                                        <label for="example-text-input" class=" col-form-label">Dollars</label>
                                                        <input name="dollar" class="form-control" type="number" placeholder="Enter dollar" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    
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
<!-- The core Firebase JS SDK is always required and must be listed first -->

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