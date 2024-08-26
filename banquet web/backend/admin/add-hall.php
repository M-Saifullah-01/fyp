<?php
session_start();
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
    <link rel="stylesheet" href="assets/css/add-menu.css">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!--Link for favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
    <title>Marry Banquet</title>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

</head>

<body>

    <?php
    include("../../view/layouts/adminsidebar.php");
    ?>

    <?php include("../../view/layouts/admin-navbar.php") ?>

    <section class="menu mt-3" id="#content-page">
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h3>Add a New Hall</h3>
                </div>
                <div class="card-body">
                    <form action="add-hall-insert-query.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Hall Image</label>
                                <input name="image" type="file" class="form-control " Required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Hall Image 2</label>
                                <input name="imagetwo" type="file" class="form-control " >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="">Hall Image 3</label>
                                <input name="imagethree" type="file" class="form-control " >
                            </div>
                            <div class="col-md-6">
                                <label for="">Hall Image 4</label>
                                <input name="imagefour" type="file" class="form-control " >
                            </div>
                        </div>




                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="">Hall Name</label>
                                <input name="name" type="text" class="form-control " id="pkg_input" Required>
                            </div>

                            <div class="col-md-6">
                                <label for="">Capacity</label>
                                <input type="number" name="capacity" class="form-control" max="1500" id="numberOfPeople"
                                    title="Our Capacity is Maximum 1000 People" required>
                            </div>



                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="">Hall Floor</label>
                                <input name="floor" type="text" placeholder="ground floor or any where"
                                    class="form-control " id="pkg_input" Required>
                            </div>

                            <div class="col-md-6">
                                <label for="">Hall No</label>
                                <input name="hall_no" type="text" class="form-control " Required>
                            </div>
                        </div>
                        <div class="row mt-3">
                        <div class="col-md">
                                <label for="">Detail</label>
                                <input name="hall_detail" type="text" placeholder="Enter all the detals of hall"
                                    class="form-control " id="" Required>
                            </div>
                        </div>
                        <button class="px-4 ml-3 mt-3 py-2 text-white rounded" id="submitButton" type="submit">Add
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <!-- <script>


        $('#pkg_input').focus(function(){
          alert('You focused on the input field!');
        });
    </script> -->

    <!--Submit Button Sweet alert JS-->
    <script>
        // we give id to form and apply js on Form
        document.getElementById('addServiceForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission
            Swal.fire({
                icon: "success",
                title: "New Service is Successfully Added",
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                this.submit(); // Submit the form after the SweetAlert
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