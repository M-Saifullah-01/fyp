<?php
include ("../../view/layouts/connect.php");

$Booking_No = isset($_GET['Booking_No'])?$_GET['Booking_No']:'';
$person_name = isset($_GET['person_name'])?$_GET['person_name']:'';
$phone_number = isset($_GET['phone_number'])?$_GET['phone_number']:'';
$cnic = isset($_GET['cnic'])?$_GET['cnic']:'';
$booking_date = isset($_GET['booking_date'])?$_GET['booking_date']:'';
$Booking_time = isset($_GET['Booking_time'])?$_GET['Booking_time']:'';
$Booking_time = isset($_GET['Booking_time'])?$_GET['Booking_time']:'';
$address = isset($_GET['address'])?$_GET['address']:'';
$custom_menu = isset($_GET['custom_menu'])?$_GET['custom_menu']:'';

$hall_name = isset($_GET['hall_name'])?$_GET['hall_name']:'';
$hall_no = isset($_GET['hall_no'])?$_GET['hall_no']:'';
$capacity = isset($_GET['capacity'])?$_GET['capacity']:'';
$headprice = isset($_GET['headprice'])?$_GET['headprice']:'';
$bill = isset($_GET['bill'])?$_GET['bill']:'';
$menu_name = isset($_GET['menu_name'])?$_GET['menu_name']:'';
$user_id = isset($_GET['user_id'])?$_GET['user_id']:'';


$user_id = isset($_GET['user_id'])?$_GET['user_id']:'';

$insert = "INSERT INTO cancel_booking (Booking_No, person_name, phone_number, cnic, booking_date,  Booking_time, address, custom_menu,  hall_name, hall_no, capacity, headprice, bill, menu_name ,user_id) 
VALUES('$Booking_No', '$person_name', '$phone_number', '$cnic', '$booking_date',  '$Booking_time', '$address', '$custom_menu',   '$hall_name', '$hall_no', '$capacity', '$headprice', '$bill', '$menu_name', '$user_id')";

$insert_query = mysqli_query($connection, $insert);
// var_dump($insert_query);
if($insert_query){
    $delete = "DELETE FROM new_booking WHERE Booking_No = '$Booking_No'";
    
    $delete_query = mysqli_query($connection, $delete);


        // Redirect to the New Booking page
        header("Location: new-booking.php");
    }

?>