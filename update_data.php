<?php
include("includes/db.php");

if(isset($_POST['update'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $date = $_POST['date'];
    $country = $_POST['country'];
    
    $data = [
        'Name' => $name,
        'Email' => $email,
        'Gender' => $gender,
        'password' => $password,
        'date' => $date,
        'Country' => $country
    ];
    
    $pushData = $database->getReference("users/".$_GET['key'])->update($data);
    header("Location:users.php");
}
// else if(isset($_GET['key'])){
//     $database->getReference("users/".$_GET['key'])->remove();
//     header("Location:retrieve_data.php");
// }

?>