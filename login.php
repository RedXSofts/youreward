<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
        <title>You Reward</title>
        <meta content="Admin Dashboard" name="description" />
        <meta content="Mannatthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="shortcut icon" href="assets/images/favicon.ico">
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body class="fixed-left">
        <!-- Begin page -->
        <div class="accountbg"></div>
        <div class="wrapper-page">
            <div class="card">
                <div class="card-body">
                    <h3 class="text-center mt-0 m-b-15">
                        <a href="#" class="logo logo-admin">
                        <!-- <img src="assets/images/logo.png" height="24" alt="logo"> -->
                            <h2>You Reward</h2>
                        </a>
                    </h3>
                    <?php
                        include("includes/db.php");

                        if(isset($_POST['submit'])){
                            
                            $email = $_POST['email'];
                            $password = $_POST['password'];

                            $ref = "Admin";
                            $data = $database->getReference($ref)->getValue();
                            // foreach($data as $key => $data1){
                            //     $i++;
                                if($email == $data['email'] && $password == $data['password'])
                                {
                                    session_start();
                                    $_SESSION['login'] = true;
                                    echo '<script>window.location="index.php"</script>';
                                }
                                else{
                                    echo '<script>window.location="login.php"</script>';
                                }
                        }
                        ?>
                    <div class="p-3">
                        <form class="form-horizontal m-t-20" method="post">
                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="email" class="form-control" type="email" required="" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <input name="password" class="form-control" type="password" required="" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-12">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group text-center row m-t-20">
                                <div class="col-12">
                                    <input class="btn btn-danger w-100" name="submit" type="submit" value="Log In"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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