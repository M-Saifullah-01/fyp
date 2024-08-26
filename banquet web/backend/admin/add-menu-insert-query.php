<?php
include('../../view/layouts/connect.php');

$menuname = isset($_POST['name'])?$_POST['name']: null;
$headprice = isset($_POST['headprice'])?$_POST['headprice']: null;

// var_dump($pkgname);
// die();

$insert = "INSERT INTO add_menu (name, headprice) VALUES('$menuname', '$headprice')";
$insert_query = mysqli_query($connection, $insert);

if($insert_query){
    header('location: ../../backend/admin/add-menu.php');
}
?>