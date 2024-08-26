<?php
session_start();
include ("../view/layouts/connect.php");
//  var_dump($connection);
//  die();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if (!$user_id) {
    header('location: user-login.php');
}
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- font awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <!-- link CSS -->
    <link rel="stylesheet" href="assets/css/payment.css">

    <!--Link for favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">

    <title>Payment</title>
</head>

<body>
    <?php
    include("../view/layouts/user-header.php");
    ?>

     <section class="payment d-flex align-items-center justify-content-center">
        <div class="payment-card">
            <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
            <h3 class="text-center mb-4">Payment Methods</h3>

            <div class="row">

                <div class="col-6 col-md-6">
                    <div class="logo text-center">
                        <img src="assets/img/bank-logo.png" class="w-75" alt="">
                        <p>0235-0102422019</p>
                           <strong> <p>Mezzan Bank</p></strong>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="logo text-center">
                        <img src="assets/img/jazz-logo.png" class="w-75" alt="">
                        <p>03072137674</p>
                        <strong><p>Muhammaad Saifullah</p></strong>
                    </div>
                </div>

            </div>
            <ul>
                <li><strong>Note:</strong> If you do not pay, your booking will be cancelled after 24 hours</li>
                <li><strong>Note:</strong> Your booking will be confirmed after payment</li>
            </ul>
        </div>
    </section> 




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

</body>

</html>