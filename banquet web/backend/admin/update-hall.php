<?php
include ("../../view/layouts/connect.php");

$hall_id = isset($_POST['hall_id']) ? $_POST['hall_id'] : null;
$hall_name = isset($_POST['name']) ? $_POST['name'] : null;
$hall_no = isset($_POST['hall_no']) ? $_POST['hall_no'] : null;
$capacity = isset($_POST['capacity']) ? $_POST['capacity'] : null;
$floor = isset($_POST['floor']) ? $_POST['floor'] : null;

// Handle the image upload
$image_get = isset($_FILES['image']) ? $_FILES['image'] : null;

if ($image_get && $image_get['error'] === UPLOAD_ERR_OK) {
    $image = $image_get["name"];
    $imagetemp_name = $image_get["tmp_name"];
    $folder = "assets/img/" . $image;

    // Retrieve the old image name
    $query = "SELECT image FROM add_hall WHERE hall_id = '$hall_id'";
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_assoc($result);
    $old_image = $row['image'];

    if (move_uploaded_file($imagetemp_name, $folder)) {
        // Delete the old image file from the server
        $old_image_path = "assets/img/" . $old_image;
        if (file_exists($old_image_path)) {
            unlink($old_image_path);
        }

        // Update the database with the new image name
        $update = "UPDATE add_hall SET name = '$hall_name', hall_no = '$hall_no', capacity = '$capacity', floor = '$floor', image = '$image' WHERE hall_id = '$hall_id'";
    } else {
        echo "Error uploading new image.";
        exit();
    }
} else {
    // Update the database without changing the image
    $update = "UPDATE add_hall SET name = '$hall_name', hall_no = '$hall_no', capacity = '$capacity', floor = '$floor' WHERE hall_id = '$hall_id'";
}

$update_query = mysqli_query($connection, $update);

if ($update_query) {
    header("Location: manage-add-hall.php");
    exit();
} else {
    echo "Error updating record: " . mysqli_error($connection);
}
?>
