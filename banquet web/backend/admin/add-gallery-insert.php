<?php
include("../../view/layouts/connect.php");
// var_dump($connection);

$id = isset($_POST["id"])?$_POST["id"]:'';
$about = isset($_POST["about"])?$_POST["about"]:'';

$image = $_FILES["image"]["name"];
$imagetemp_name = $_FILES["image"]["tmp_name"];
$folder = "../../view/upload/" .$image;
move_uploaded_file($imagetemp_name, $folder);

$insert = "INSERT INTO gallery (image, about) VALUES ('$image', '$about')";
$insert_query = mysqli_query($connection, $insert);
 if($insert_query){
    header ("location: add-gallery.php");
 }

?>