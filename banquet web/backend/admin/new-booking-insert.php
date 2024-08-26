<?php
session_start();
include ("../../view/layouts/connect.php");

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

$person_name = isset($_POST['person_name']) ? $_POST['person_name'] : '';
$phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$cnic = isset($_POST['cnic']) ? $_POST['cnic'] : '';
$booking_date = isset($_POST['booking_date']) ? $_POST['booking_date'] : '';
$Booking_time = isset($_POST['Booking_time']) ? $_POST['Booking_time'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';

// $pkg_id = isset($_POST['pkg_id']) ? $_POST['pkg_id'] : '';
$name = isset($_POST['name']) ? $_POST['name'] : '';
$hall_no = isset($_POST['hall_no']) ? $_POST['hall_no'] : '';
$capacity = isset($_POST['capacity']) ? $_POST['capacity'] : '';
// $people = isset($_POST['people']) ? $_POST['people'] : '';
$headprice = isset($_POST['headprice']) ? $_POST['headprice'] : '';
$menu_id = isset($_POST['menu_id']) ? $_POST['menu_id'] : ''; // Ensure this line correctly retrieves the menu_id
$custom_menu = isset($_POST['custom_menu']) ? $_POST['custom_menu'] : '';


// We make check if the space available than booking successfull otherwise not

$space_check = "Select * From new_booking Where booking_date ='$booking_date'  AND Booking_time = '$Booking_time'";
$space_check_query = mysqli_query($connection, $space_check);

$booking_compare = $space_check_query->fetch_assoc();

if ($booking_compare) {
    $_SESSION['booking_error'] = true;
    $_SESSION['booking_date'] = $booking_date;
    header("location: ../../frontend/booking-form.php");
} else {
    // Insert data into new_booking table

    $insert = "INSERT INTO new_booking (person_name, phone_number, cnic, booking_date, Booking_time, address, name, hall_no , capacity, custom_menu,  headprice, menu_id, user_id) 
    VALUES('$person_name', '$phone_number', '$cnic', '$booking_date', '$Booking_time', '$address', '$name', '$hall_no', '$capacity', '$custom_menu', '$headprice', '$menu_id', '$user_id')";
    $insert_query = mysqli_query($connection, $insert);

    if ($insert_query) {
        $last_id = mysqli_insert_id($connection);
        $inserting_total = "INSERT INTO total_booking (Booking_No,person_name, phone_number, cnic, booking_date, Booking_time, address, name, hall_no , capacity, custom_menu,  headprice, menu_id, user_id) 
    VALUES('$last_id','$person_name', '$phone_number', '$cnic', '$booking_date', '$Booking_time', '$address', '$name', '$hall_no', '$capacity', '$custom_menu', '$headprice', '$menu_id', '$user_id')";
        $inserting_total_query = mysqli_query($connection, $inserting_total);
        if ($inserting_total_query) {
            $_SESSION['booking_success'] = true;
            header("location: ../../frontend/booking-form.php");
        } else {
            $_SESSION['booking_success'] = false;
        }

    }
}







?>