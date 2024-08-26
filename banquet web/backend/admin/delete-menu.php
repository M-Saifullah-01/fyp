<?php
include ("../../view/layouts/connect.php");

$menu_id = isset($_GET['menu_id'])?$_GET['menu_id']: null;

$delete = "DELETE FROM add_menu WHERE menu_id = '$menu_id'";
$delete_query = mysqli_query($connection, $delete);


if($delete_query){
    header("Location: manage-menu.php");
}

?>