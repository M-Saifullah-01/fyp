<?php
include ("../../view/layouts/connect.php");

$menu_id = isset($_POST['menu_id'])?$_POST['menu_id']: null;
$name = isset($_POST['name'])?$_POST['name']: null;
$headprice = isset($_POST['headprice'])?$_POST['headprice']: null;

$update = "UPDATE add_menu SET name = '$name' , headprice = '$headprice' WHERE menu_id= '$menu_id'";
$update_query = mysqli_query($connection, $update);

if($update_query){
    header("Location: manage-menu.php");
}

?>