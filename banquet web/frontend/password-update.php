<?php
session_start();
include ("../view/layouts/connect.php");

$password = isset($_POST['password']) ? $_POST['password'] : null;

$user_id = isset($_POST['user_id']) ? $_POST['user_id'] : null;


// var_dump($user_id);
// die();
$update = "UPDATE user_registration SET password = '$password' WHERE user_id = $user_id";

$update_query = mysqli_query($connection, $update);

if ($update_query) {
    header('location: user-login.php');
} else {
    header('location: password-select.php');

}
?>