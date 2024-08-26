<?php
include ("../view/layouts/connect.php");

$forgot = isset($_POST['forgot']) ? $_POST['forgot'] : null;
// $phone = isset($_POST['phone'])? $_POST['phone']: null;

if ($forgot) {
    $select = "SELECT user_id  FROM user_registration WHERE email = '$forgot' OR  phone = '$forgot'";
    $select_query = mysqli_query($connection, $select);
}


if ($select_query->num_rows > 0) {
    $data = mysqli_fetch_assoc($select_query);
    $user_id = $data['user_id'];
    // header('location: password-update.php');
} else {
    $_SESSION['forgot_select'] = false;
    header('location: forgot.php');
}
?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/forgot.css"> <!--Link for favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
    <title>Marry Banquet Booking</title>
</head>
<style>
       
        .forgot{
        height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 48px;
        margin-right: 48px;
    }
    
    @media(max-width: 480px){
        .forgot .forgot-sec h3{
            font-size: 20px;
        }
        .forgot .forgot-sec form label,
        .forgot .forgot-sec form input,
        .forgot .forgot-sec form button{
            font-size: 10px;
        }

    }
</style>
<body>


<?php
    include ("../view/layouts/user-header.php");
    ?>

        <section class="forgot">
            <div class="forgot-sec container pt-3">
                <h3 class="text-center pb-3">Update Password</h3>
                <form method="post" action="password-update.php">
                    <div class="form-group">
                        <input type="text" name="user_id" value="<?php echo $user_id; ?>" class="form-control" hidden>
                        <label for="email">Enter Password</label>
                        <input type="text" class="form-control" name="password" id="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary btn-block ">Update</button>
                </form>

            </div>
        </section>


        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
            crossorigin="anonymous"></script>

    </body>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>