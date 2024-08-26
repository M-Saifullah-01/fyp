<?php
session_start();
include('../view/layouts/connect.php');
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if (!$user_id) {
    header('location: user-login.php');
}

$hall_id = isset($_GET['hall_id']) ? $_GET['hall_id'] : null;
$select = "SELECT * FROM add_hall   WHERE hall_id = '$hall_id'";
$select_query = mysqli_query($connection, $select);
$res = $select_query->fetch_assoc();
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--Link for Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--Link for aos animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Link for css-->
    <link rel="stylesheet" href="assets/css/style.css">
    <!--Link for favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
    <title>Marry Banquet Booking</title>
</head>
<style>
    .product-details .card .card-header a{
        font-size: 30px;
        margin-right: 20px;
    }
    .product-details .card .card-body .row .carousel-item a {
        width: 400px !important;
        height: 400px;
    }

    .product-details .card .card-body .row .carousel-item a img {
        /* width: 400px !important; */
        height: 400px;
        object-fit: cover;
    }
    .product-details .card .card-body form button {
    background-color: #292d30;
    font-size: 18px;
}
.product-details .card .card-body form button:hover{
    background-color: #343a40fd;
}
    @media (max-width: 480px){
    .product-details .card .card-header a,
    .product-details .card .card-header h2{
        font-size: 22px;
        margin: 0px;
    }
    .product-details .card .card-body form p,
    .product-details .card .card-body form h4{
        font-size: 14px;
    }
}
</style>

<body>

    <?php
    include("../view/layouts/user-header.php");
    ?>



    <section class="product-details ">
        <div class="container pt-5">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <a href="index.php">
                        <i class="fa-solid fa-arrow-left mr-3 "></i>

                    </a>
                    <h2><?php echo $res['name']; ?></h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Display product images -->
                            <div id="productCarousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <a target="_blank"
                                            href="../backend/admin/assets/img/<?php echo $res['image']; ?>">
                                            <img target="_blank"
                                                src="../backend/admin/assets/img/<?php echo $res['image']; ?>"
                                                class="d-block w-100" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a target="_blank"
                                            href="../backend/admin/assets/img/<?php echo $res['imagetwo']; ?>">
                                            <img src="../backend/admin/assets/img/<?php echo $res['imagetwo']; ?>"
                                                class="d-block w-100" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a target="_blank"
                                            href="../backend/admin/assets/img/<?php echo $res['imagethree']; ?>">
                                            <img src="../backend/admin/assets/img/<?php echo $res['imagethree']; ?>"
                                                class="d-block w-100" alt="Product Image">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a target="_blank"
                                            href="../backend/admin/assets/img/<?php echo $res['imagefour']; ?>">
                                            <img src="../backend/admin/assets/img/<?php echo $res['imagefour']; ?>"
                                                class="d-block w-100" alt="Product Image">
                                        </a>
                                    </div>
                                </div>
                                <a class="carousel-control-prev" href="#productCarousel" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#productCarousel" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-4">
                            <form action="booking-form.php" method="post">
                                <input type="hidden" name="hall_id" value="<?php echo $res['hall_id']; ?>">

                                <!-- Display product details -->
                                <h4>Hall No: <?php echo $res['hall_no']; ?></h4>
                                <p><strong class="head">Capacity: </strong><?php echo $res['capacity']; ?></p>
                                <p><strong class="head">Complete Detail: </strong> <?php echo $res['hall_detail']; ?></p>
                                <!-- Order button -->
                                <button class="btn text-white" type="submit">Book Now</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!--Link for aos animation JS-->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!--Link for bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>