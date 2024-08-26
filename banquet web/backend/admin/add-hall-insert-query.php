<?php
include('../../view/layouts/connect.php');

$hallname = isset($_POST['name'])?$_POST['name']: null;
$hallcapacity = isset($_POST['capacity'])?$_POST['capacity']: null;
$hallfloor = isset($_POST['floor'])?$_POST['floor']: null;
$hallnumber = isset($_POST['hall_no'])?$_POST['hall_no']: null;
$hall_detail = isset($_POST['hall_detail'])?$_POST['hall_detail']: null;

// $image = $_FILES["image"]["name"];
// $imagetemp_name = $_FILES["image"]["tmp_name"];
// $folder = "assets/img/" .$image;
// move_uploaded_file($imagetemp_name, $folder);




$target_dir = "assets/img/";

// Retrieve and save each image
$image = $_FILES['image']['name'];
$target_file1 = $target_dir . basename($image);
move_uploaded_file($_FILES['image']['tmp_name'], $target_file1);

$imagetwo = $_FILES['imagetwo']['name'];
$target_file2 = $target_dir . basename($imagetwo);
if (!empty($imagetwo)) {
    move_uploaded_file($_FILES['imagetwo']['tmp_name'], $target_file2);
}

$imagethree = $_FILES['imagethree']['name'];
$target_file3 = $target_dir . basename($imagethree);
if (!empty($imagethree)) {
    move_uploaded_file($_FILES['imagethree']['tmp_name'], $target_file3);
}

$imagefour = $_FILES['imagefour']['name'];
$target_file4 = $target_dir . basename($imagefour);
if (!empty($imagefour)) {
    move_uploaded_file($_FILES['imagefour']['tmp_name'], $target_file4);
}

// var_dump($image);
// var_dump($imagetwo);
// var_dump($imagethree);
// var_dump($imagefour);
// die();
$insert = "INSERT INTO add_hall (hall_no, image, imagetwo, imagethree, imagefour, name, capacity, floor, hall_detail) VALUES( '$hall_no', '$image','$imagetwo', '$imagethree', '$imagefour', '$hallname', '$hallcapacity', '$hallname', '$hall_detail')";
$insert_query = mysqli_query($connection, $insert);

if($insert_query){
    header('location: ../../backend/admin/add-hall.php');
}
?>