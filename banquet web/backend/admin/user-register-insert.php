<?php
    include("../../view/layouts/connect.php");

    $username = isset($_POST['username'])?$_POST['username']: null;
    // var_dump($username);
    // die();
    $phone = isset($_POST['phone'])?$_POST['phone']: null;
    $email = isset($_POST['email'])?$_POST['email']: null;
    $password = isset($_POST['password'])?$_POST['password']: null;

    $insert = "INSERT INTO user_registration (username, phone, email, password) VALUES ('$username', '$phone', '$email', '$password')";
    $insert_query = mysqli_query($connection, $insert);


    if($insert_query){
        header ("location: ../../frontend/user-login.php");
    }
?>