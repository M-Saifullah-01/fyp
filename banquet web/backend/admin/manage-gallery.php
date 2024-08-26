<?php
session_start();
include ("../../view/layouts/connect.php");

$select = "SELECT * FROM gallery";
$select_query = mysqli_query($connection, $select);
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!--Link with css-->
    <link rel="stylesheet" href="assets/css/manage-gallery.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <!--Link for favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
    <title>Marry Banquet</title>
</head>

<body>
    <?php
    include ("../../view/layouts/adminsidebar.php");
    ?>
    <?php include ("../../view/layouts/admin-navbar.php") ?>


    <section class="booking mt-3" style="margin-left: 250px;">
        <div class="container">
            <div class="card mb-5 border-0">
                <div class="card-header border-0 d-flex align-items-center justify-content-between ">
                    <h3>Manage Gallery</h3>
                    <a class="btn text-white  px-3" href="add-gallery.php" style="background-color: #343a40bf;">Add
                        Gallery</a>
                </div>
                <div class="card-body">

                    <div class="row">
                        <?php while ($data = $select_query->fetch_assoc()) { ?>
                            <div class="col-md-3 mb-3">
                                <div class="card">
                                    <img height="300px" src="<?php echo "../../view/upload/" . $data['image'] ?>"
                                        class="card-img-top" alt="">
                                    <div class="card-body ">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <p><?php echo $data['about'] ?></p>

                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <a href="delete-gallery.php?id=<?php echo $data['id'] ?>"
                                                    class="btn btn-danger">DELETE</a>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- confirm and cancel button js -->
    <script>
        // confirm Button sweet alert js
        document.querySelectorAll('.confirm-button').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default action
                const href = this.getAttribute('href');
                Swal.fire({
                    title: "Are You Sure?",
                    text: "Do you really want to Confirm the New Booking?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Confirm it!",
                    cancelButtonText: "No"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = href; // Proceed with deletion
                    }
                });
            });
        });

        // Cancel Button sweet alert js
        document.querySelectorAll('.cancel-button').forEach(button => {
            button.addEventListener('click', function (event) {
                event.preventDefault(); // Prevent the default action
                const href = this.getAttribute('href');
                Swal.fire({
                    title: "Are You Sure?",
                    text: "Do you really want to Cancel the New Booking?",
                    icon: "question",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, Cancel it!",
                    cancelButtonText: "No"
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = href; // Proceed with deletion
                    }
                });
            });
        });
    </script>

    <!--Logout Button Sweet alert JS-->
    <script>
        document.getElementById('logoutBtn').addEventListener('click', function () {
            Swal.fire({
                title: "Are you want to logout?",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, logout!",
                cancelButtonText: "No"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Logged out!",
                        text: "You have been Successfully logged out.",
                        icon: "success"
                    }).then(() => {
                        window.location.href = "../../frontend/index.php";
                    });
                }
            });
        });
    </script>

    <!-- sweet alert link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>