<?php
session_start();
include('../../view/layouts/connect.php');
// var_dump($connection);
// die();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
    // var_dump($user_id);
    // die();
    $username = isset($_POST['username'])?$_POST['username']: null;
    // var_dump($username);

    $phone = isset($_POST['phone'])?$_POST['phone']: null;
    // var_dump($phone);

    $email = isset($_POST['email'])?$_POST['email']: null;
    // var_dump($email);

    $password = isset($_POST['password'])?$_POST['password']: null;
    // var_dump($password);
// die();

    $update = "UPDATE admin_registration SET username = '$username', phone= '$phone', email = '$email', password = '$password' WHERE user_id = '$user_id'";
    $update_query = mysqli_query($connection, $update);

    // var_dump($update_query);
    // die();
    if($update_query){
        $_SESSION['admin_username'] = $username;
        $_SESSION['update_success'] = true;
        header('location: admin-profile.php');
    }
?>