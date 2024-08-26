<?php
session_start();
include('../../view/layouts/connect.php');
    // var_dump($connection);
    // die();
    $user_id = isset($_POST['user_id'])?$_POST['user_id']: null;
    // var_dump($user_id);
    $username = isset($_POST['username'])?$_POST['username']: null;
    // var_dump($username);

    $phone = isset($_POST['phone'])?$_POST['phone']: null;
    // var_dump($phone);

    $email = isset($_POST['email'])?$_POST['email']: null;
    // var_dump($email);

    $password = isset($_POST['password'])?$_POST['password']: null;
//     var_dump($password);
// die();

    $update = "UPDATE user_registration SET username = '$username', phone= '$phone', email = '$email', password = '$password' WHERE user_id = '$user_id'";
    $update_query = mysqli_query($connection, $update);

    // var_dump($update_query);
    // die();
    if($update_query){
        $_SESSION['user_name'] = $username;
        header('location: ../../frontend/user-profile.php');
    }













// session_start();

// include('../../view/layouts/connect.php');

// // Retrieve user ID and form data (sanitize if necessary)
// $user_id = isset($_POST['user_id']) ? (int) $_POST['user_id'] : null;
// $username = isset($_POST['username']) ? mysqli_real_escape_string($connection, $_POST['username'])  : null;
// $phone = isset($_POST['phone']) ? mysqli_real_escape_string($connection, $_POST['phone']) : null;
// $email = isset($_POST['email']) ? mysqli_real_escape_string($connection, $_POST['email'])  : null;

// // Hash password if updating (consider using password_hash())
// if (isset($_POST['password'])) {
//   $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
// }

// // Prepare update query (prevents SQL injection)
// $sql = "UPDATE user_registration SET username = ?, phone = ?, email = ?, password = ? WHERE user_id = ?";
// $stmt = mysqli_prepare($connection, $sql);

// // Bind parameters (improves security)
// mysqli_stmt_bind_param($stmt, "sssss", $username, $phone, $email, $password, $user_id);

// // Execute prepared statement
// $update_query = mysqli_stmt_execute($stmt);

// // Check for errors
// $stmt_error = mysqli_stmt_error($stmt);
// if ($stmt_error) {
//     log_error("Prepared statement error: " . $stmt_error . ", User ID: " . $user_id . ");");
// } else if (!$update_query) {
//     $error_message = "Error updating profile: " . mysqli_error($connection);
//     log_error($error_message . ", User ID: " . $user_id . ");");
//     echo $error_message; // Or display a more user-friendly error message
// } else {
//     header('location: ../../frontend/user-profile.php');
// }

// // Close prepared statement and connection (optional, but good practice)
// mysqli_stmt_close($stmt);
// mysqli_close($connection);


?>