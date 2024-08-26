<?php
include("../../view/layouts/connect.php");

// var_dump($connection);
// die("");
$Booking_No = isset($_GET['Booking_No'])?$_GET['Booking_No']:'';
// var_dump($Booking_No);
// die("");
$delete = "DELETE FROM new_booking WHERE Booking_No='$Booking_No'";
$delete_query = mysqli_query($connection, $delete);

if($delete_query){
    header("location: new-booking.php");
}
?>