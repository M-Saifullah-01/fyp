<?php
include ("../../view/layouts/connect.php");

$hall_id =  isset($_GET['hall_id'])?$_GET['hall_id']: null;



// Retrieve the image name before deleting the record
$query = "SELECT image FROM add_hall WHERE hall_id = '$hall_id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);
$image_name = $row['image'];

// Delete the image file from the server
$image_path = "assets/img/" . $image_name;
if (file_exists($image_path)) {
    unlink($image_path);
}



$delete = "DELETE FROM add_hall WHERE hall_id = '$hall_id'";
$delete_query = mysqli_query($connection, $delete);

if($delete_query){
    header("Location: manage-add-hall.php");
}

?>