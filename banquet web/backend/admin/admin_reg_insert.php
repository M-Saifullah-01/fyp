<?php
include('../../view/layouts/connect.php');

$username = isset($_POST['username'])?$_POST['username']: null;
$phone = isset($_POST['phone'])?$_POST['phone']: null;
$email = isset($_POST['email'])?$_POST['email']: null;
// var_dump($email);
// die();
$password = isset($_POST['password'])?$_POST['password']: null;

$insert = "INSERT INTO admin_registration (username, phone, email, password) VALUES('$username', '$phone', '$email', '$password')";
$insert_query = mysqli_query($connection, $insert);

if($insert_query){
    header('location: ../../frontend/admin-login.php');
}
?>