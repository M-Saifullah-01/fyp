<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "banquet";
$connection = mysqli_connect($hostname, $username, $password, $database);
// var_dump($connection);
// session_start();
#Database creation
// $db = "CREATE DATABASE banquet";
// $result = mysqli_query($connection, $db);
// var_dump($result);

#create Table service add 
//   $tabel = "CREATE TABLE add_service(
//                                    serial_no int(11) UNSIGNED UNIQUE NOT NULL , 
//                                    pakage_name VARCHAR(255) NOT NULL  , 
//                                    description VARCHAR(1000) NOT NULL, 
//                                    price int(11) NOT NULL
//                                    )";
// $table_query = mysqli_query($connection, $tabel);
// var_dump($table_query);

#create Table for new booking 
//   $tabel = "CREATE TABLE new_booking(
//                                    Booking_No int(191) UNSIGNED  PRIMARY KEY AUTO_INCREMENT NOT NULL , 
//                                    person_name VARCHAR(255) NOT NULL  , 
//                                    phone_number VARCHAR(11) NOT NULL,
//                                    cnic int(191) NOT NULL,
//                                    booking_date DATETIME NOT NULL,
//                                    Booking_time VARCHAR(255) NOT NULL,
//                                    address VARCHAR(255) NOT NULL,
//                                    pkg_id INT (191) NOT NULL,
//                                    people INT(191) NOT NULL,
//                                    headprice INT(191) NOT NULL,
//                                    menu_id INT(191) NOT NULL,
//                                    user_id INT(191) NOT NULL
//                                    )";
// $table_query = mysqli_query($connection, $tabel);
// var_dump($table_query);


#To start Booking_no value from 1000
// $table = "ALTER TABLE new_booking AUTO_INCREMENT = 1000";
//  $table_query = mysqli_query($connection, $table);
//  var_dump($table_query);


#create Table for confirm booking 
// $tabel = "CREATE TABLE confirm_booking (
//           Booking_No INT NOT NULL ,
//           person_name VARCHAR(255) NOT NULL,
//           phone_number VARCHAR(11) NOT NULL,
//           cnic VARCHAR(13) NOT NULL,
//           booking_date DATETIME NOT NULL,
//           Booking_time VARCHAR(255) NOT NULL,
//           address VARCHAR(255) NOT NULL,
//          pkg_id INT (191) NOT NULL,
//                                    people INT(191) NOT NULL,
//                                    headprice INT(191) NOT NULL,
//                                    menu_id INT(191) NOT NULL,
// )";

// $table_query = mysqli_query($connection, $tabel);
// var_dump($table_query);


#create cancel bookings table
// $tabel = "CREATE TABLE cancel_booking (
//           Booking_No INT NOT NULL ,
//           person_name VARCHAR(255) NOT NULL,
//           phone_number VARCHAR(11) NOT NULL,
//           cnic VARCHAR(13) NOT NULL,
//           booking_date DATETIME NOT NULL,
//           Booking_time VARCHAR(255) NOT NULL,
//           address VARCHAR(255) NOT NULL,
//           pkg_id INT (191) NOT NULL,
//                                    people INT(191) NOT NULL,
//                                    headprice INT(191) NOT NULL,
//                                    menu_id INT(191) NOT NULL,
// )";

// $table_query = mysqli_query($connection, $tabel);
// var_dump($table_query);


#create Total bookings table
// $tabel = "CREATE TABLE total_booking (
//           Booking_No INT NOT NULL ,
//           person_name VARCHAR(255) NOT NULL,
//           phone_number VARCHAR(11) NOT NULL,
//           cnic VARCHAR(13) NOT NULL,
//           booking_date DATETIME NOT NULL,
//           Booking_time VARCHAR(255) NOT NULL,
//           address VARCHAR(255) NOT NULL,
//           pkg_id INT (191) NOT NULL,
//                                    people INT(191) NOT NULL,
//                                    headprice INT(191) NOT NULL,
//                                    menu_id INT(191) NOT NULL,
//                                    user_id INT(191) NOT NULL
// )";

// $table_query = mysqli_query($connection, $tabel);
// var_dump($table_query);


#create user booking reciept table
// $tabel = "CREATE TABLE booking_reciept (
//           Booking_No INT NOT NULL ,
//           person_name VARCHAR(255) NOT NULL,
//           booking_date DATETIME NOT NULL,
//           Booking_time VARCHAR(255) NOT NULL,
//           pakage_name VARCHAR(255) NOT NULL,
//           description VARCHAR(255) NOT NULL,
//           price VARCHAR(255) NOT NULL
// )";

// $table_query = mysqli_query($connection, $tabel);
// var_dump($table_query);


#create user gallery table
// $tabel = "CREATE TABLE gallery (
//           id int(191) AUTO_INCREMENT PRIMARY KEY,
//           image VARCHAR(255) NOT NULL
// )";
// $table_query = mysqli_query($connection, $tabel);
// var_dump($table_query);


#create user user Registration table
// $table = "CREATE TABLE user_registration (
//           user_id INT(191) AUTO_INCREMENT PRIMARY KEY,
//           username VARCHAR(255) NOT NULL,
//           phone INT(191) NOT NULL,
//           email VARCHAR(255) NOT NULL,
//           password VARCHAR(255) NOT NULL
// )";

// $table_query = mysqli_query($connection, $table);
// var_dump($table_query);

#create user Admin Registration table
// $table = "CREATE TABLE admin_registration (
//           user_id INT(191) AUTO_INCREMENT PRIMARY KEY,
//           username VARCHAR(255) NOT NULL,
//           phone INT(191) NOT NULL,
//           email VARCHAR(255) NOT NULL,
//           password VARCHAR(255) NOT NULL
// )";

// $table_query = mysqli_query($connection, $table);
// var_dump($table_query);


#create table for new pakage add
// $table = "CREATE TABLE add_hall (
//           pkg_id INT(191) AUTO_INCREMENT PRIMARY KEY,
//           name VARCHAR(255) NOT NULL,
//           headprice INT(191) NOT NULL
          
// )";

// $table_query = mysqli_query($connection, $table);
// var_dump($table_query);

#create table for new pakage add
// $table = "CREATE TABLE add_menu (
//           menu_id INT(191) AUTO_INCREMENT PRIMARY KEY,
//           name VARCHAR(255) NOT NULL         
// )";

// $table_query = mysqli_query($connection, $table);
// var_dump($table_query);
?>