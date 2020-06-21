<?php
include("includes/header.php");




include("includes/db.php");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $category = $_POST['category'];
    $dollar = $_POST['dollar'];
    $image = $_POST['image'];
    $coins = $_POST['coins'];
    $disclaimer = $_POST['disclaimer'];
    $country = $_POST['country'];
    $image = strval($image);
    $data = [
        'name' => $name,
        'category' => $category,
        'dollar' => $dollar,
        'image' => $image,
        'coins' => $coins,
        'disclaimer' => $disclaimer,
        'country' => $country,
        'id'=>"",
    ];
    
    $ref = "Redeem/";
    $pushKey = $database->getReference($ref)->push($data)->getKey();

    $data = [
        'name' => $name,
        'category' => $category,
        'dollar' => $dollar,
        'image' => $image,
        'coins' => $coins,
        'disclaimer' => $disclaimer,
        'country' => $country,
        'id'=>$pushKey,
    ];
    $pushData = $database->getReference("Redeem/".$pushKey)->update($data);
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
                                        <h4 class="page-title">Add Redeem</h4>
                                    </div>
                                </div>
                            </div>
                            <!-- end page title end breadcrumb -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="card m-b-30">
                                        <div class="card-body">
            
                                            <h4 class="mt-0 header-title">Add Redeem</h4>
                                            <!-- <p class="text-muted m-b-30 font-14">Here are examples of <code
                                                    class="highlighter-rouge">.form-control</code> applied to each
                                                textual HTML5 <code class="highlighter-rouge">&lt;input&gt;</code> <code
                                                        class="highlighter-rouge">type</code>.</p> -->
                                            <form method="post">
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Name</label>
                                                        <input name="name" class="form-control" type="text" placeholder="Enter Name" id="example-text-input">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Category</label>
                                                        <input name="category" class="form-control" type="text" placeholder="Enter category" id="example-text-input">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Dollars</label>
                                                        <input name="dollar" class="form-control" type="number" placeholder="Enter dollar" id="example-text-input">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Coins</label>
                                                        <input name="coins" class="form-control" type="number"  id="example-text-input">
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Disclaimer</label>
                                                        <input name="disclaimer" class="form-control" type="text" placeholder="Enter Disclaimer" id="example-text-input">
                                                    </div>
                                                    <div class="form-group col-sm-6">
                                                        <label for="example-text-input" class=" col-form-label">Country</label>
                                                        <select name="country" class="form-control" >
                                                        <option value="">Select Country</option>
                                                            <option value="Malaysia">Malaysia</option>
                                                            <option value="Singapore">Singapore</option>
                                                            <option value="Others country">Others country</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="form-group col-sm-12">
                                                        <label for="example-text-input" class=" col-form-label">Image</label>
                                                        <progress value="0" max="100" id="uploader">0%</progress>
                                                        <input class="form-control" type="file"  id="fileButton">
                                                        <input type="hidden" name="image" id="image" value="">
                                                    </div>
                                                    <!-- <button type="button" onclick="upload()">Upload</button> -->
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


<!-- The core Firebase JS SDK is always required and must be listed first -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.15.3/firebase-app.js"></script> -->

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.15.3/firebase-analytics.js"></script> -->




<!-- <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-app.js"></script> -->
<script src="https://www.gstatic.com/firebasejs/live/3.0/firebase.js"></script>

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->
<!-- <script src="https://www.gstatic.com/firebasejs/7.15.0/firebase-analytics.js"></script> -->

<script>
  // Your web app's Firebase configuration
  var firebaseConfig = {

    apiKey: "AIzaSyDrcRBVX7yoS6ZWzYwxXiA_DzwvlrXfbKs",
    authDomain: "youreward-53471.firebaseapp.com",
    databaseURL: "https://youreward-53471.firebaseio.com",
    projectId: "youreward-53471",
    storageBucket: "youreward-53471.appspot.com",
    messagingSenderId: "858201925211",
    appId: "1:858201925211:web:14d9b5c40c7b4f6e06c17e",
    measurementId: "G-QC9SP0BLFR"
  };
  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);
//   firebase.analytics();

var fileButton = document.getElementById('fileButton');
var image = document.getElementById('image');
var uploader = document.getElementById('uploader');

fileButton.addEventListener('change', function(e) {
    var file = e.target.files[0];

    var storageRef = firebase.storage().ref('Redeem Pic/'+file.name);

    // storageRef.put(file);



    var uploadTask = storageRef.put(file);

    uploadTask.on('state_changed', function (snapshot) {
        var progress = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;

        uploader.value = progress;
        // console.log("upload is " + progress + "done");
    }, function (error) {

        // console.log(error.message);
    }, function () {
        uploadTask.snapshot.ref.getDownloadURL().then(function (DownloadURL) {
            console.log(DownloadURL);
            image.value = DownloadURL;
        })
    })
});
</script>

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