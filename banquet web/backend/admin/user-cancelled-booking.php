<?php
session_start();
include ('../../view/layouts/connect.php');
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
// var_dump($user_id);
// die();
$Booking_No = isset($_GET['Booking_No']) ? $_GET['Booking_No'] : null;




  $delete = "DELETE FROM new_booking WHERE Booking_No = '$Booking_No'";
  $delete_query = mysqli_query($connection, $delete);


  header("Location: ../../frontend/booking-history.php?message=Booking iscancelled");


?>