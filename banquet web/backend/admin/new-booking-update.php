<?php
session_start();
include ("../../view/layouts/connect.php");

$Booking_No = isset($_POST['Booking_No']) ? $_POST['Booking_No'] : '';
$person_name = isset($_POST['person_name']) ? $_POST['person_name'] : '';
$phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : '';
$cnic = isset($_POST['cnic']) ? $_POST['cnic'] : '';
$booking_date = isset($_POST['booking_date']) ? $_POST['booking_date'] : '';
$Booking_time = isset($_POST['Booking_time']) ? $_POST['Booking_time'] : '';
$address = isset($_POST['address']) ? $_POST['address'] : '';
$custom_menu = isset($_POST['custom_menu']) ? $_POST['custom_menu'] : '';
$hall_id = isset($_POST['hall_id']) ? $_POST['hall_id'] : '';
$capacity = isset($_POST['capacity']) ? $_POST['capacity'] : '';
$headprice = isset($_POST['headprice']) ? $_POST['headprice'] : '';
$menu_id = isset($_POST['menu_id']) ? $_POST['menu_id'] : '';

// Fetch the hall name using the hall_id
$get = "SELECT name FROM add_hall WHERE hall_id='$hall_id'";
$get_query = mysqli_query($connection, $get);
$get_data = $get_query->fetch_assoc();
$hall_name = isset($get_data['name']) ? $get_data['name'] : null;

// Fetch the current booking date
$current_booking_query = "SELECT booking_date FROM new_booking WHERE Booking_No='$Booking_No'";
$current_booking_result = mysqli_query($connection, $current_booking_query);
$current_booking_data = $current_booking_result->fetch_assoc();
$current_booking_date = $current_booking_data['booking_date'];

if ($booking_date !== $current_booking_date) {
    $space_check = "SELECT * FROM new_booking WHERE booking_date='$booking_date' AND hall_id='$hall_id' AND Booking_time='$Booking_time'";
    $space_check_query = mysqli_query($connection, $space_check);
    $booking_compare = $space_check_query->fetch_assoc();

    if ($booking_compare) {
        $_SESSION['booking_error'] = true;
        $_SESSION['booking_date'] = $booking_date;
        header("location: new-booking-edit.php?Booking_No=$Booking_No");
        exit; 
    }
}

// Update the booking details
$update = "UPDATE new_booking SET person_name='$person_name', phone_number='$phone_number', cnic='$cnic', booking_date='$booking_date', Booking_time='$Booking_time', address='$address', custom_menu='$custom_menu', name='$hall_name', capacity='$capacity', headprice='$headprice', menu_id='$menu_id' WHERE Booking_No='$Booking_No'";
$update_query = mysqli_query($connection, $update);

if ($update_query) {
    $_SESSION['booking_success'] = true;
    header("location: new-booking-edit.php?Booking_No=$Booking_No");
    exit;
} else {
    $_SESSION['booking_success'] = false;
    header("location: new-booking-edit.php?Booking_No=$Booking_No");
    exit;
}
?>
