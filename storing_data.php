<?php
include("includes/db.php");

if(isset($_POST['submit'])){
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
    $ref = "Users/";
    $pushData = $database->getReference($ref)->push($data);
    header("Location:users.php");
}

?>