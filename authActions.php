<?php
include("includes/db.php");

    
// if(isset($_POST['signup'])){
    
//     $email = $_POST['emailSignup'];
//     $pass = $_POST['passSignup'];

//     $auth = $firebase->getAuth();
//     $user = $auth->createUserWithEmailAndPassword($email,$pass);
//     header("Location:index.php");
// }
if(isset($_POST['submit'])){
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    // $auth = $firebase->getAuth();
    // $auth = $factory->createAuth();

    // $user = $auth->signInWithEmailAndPassword($email, $password);


    $ref = "Admin";
    $data = $database->getReference($ref)->getValue();
    // foreach($data as $key => $data1){
    //     $i++;
        if($email == $data['email'] && $password == $data['password'])
        {
            session_start();
            $_SESSION['login'] = true;
            header("Location:index.php");
        }
        else{
            header("Location:login.php");
        }


    // $user = $auth->getUserWithEmailAndPassword($email,$password);
    // if($user){
    //     session_start();
    //     $_SESSION['login'] = true;
    //     header("Location:index.php");
    // }
}
?>