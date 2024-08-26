<?php
include ("../../view/layouts/connect.php");

$id = isset($_GET['id'])?$_GET['id']:'';
// var_dump($id);

$delete = "DELETE FROM gallery WHERE id='$id'";
$delete_query = mysqli_query($connection, $delete);

if($delete_query){
    header("location: manage-gallery.php");
}



?>