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