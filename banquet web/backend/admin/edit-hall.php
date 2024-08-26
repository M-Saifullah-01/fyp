<?php
session_start();
include ("../../view/layouts/connect.php");

$hall_id = isset($_GET['hall_id'])?$_GET['hall_id']: null;

$select = "SELECT * FROM add_hall WHERE hall_id= '$hall_id'";
$select_query = mysqli_query($connection, $select);

$data = $select_query->fetch_assoc();


$image = "assets/img/" . $data['image'];


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
    include ("../../view/layouts/adminsidebar.php");
    ?>

    <?php include ("../../view/layouts/admin-navbar.php") ?>

    <section class="menu mt-3" id="#content-page">
        <div class="container">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3>Edit Hall</h3>
                    <a href="manage-add-hall.php" class="btn btn-primary">Manage</a>
                </div>
                <div class="card-body">
                    <form action="update-hall.php" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <input name="hall_id"  type="text" value="<?php echo $data['hall_id'] ?>"  class="form-control" hidden>
                                <label for="">Hall Name</label>
                                <input name="name"  type="text" value="<?php echo $data['name'] ?>"  class="form-control" Required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Hall No.</label>
                                <input name="hall_no"  type="text" value="<?php echo $data['hall_no'] ?>"  class="form-control" Required>
                            </div>
        
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="">Hall Capacity</label>
                                <input name="capacity"  type="text" value="<?php echo $data['capacity'] ?>"  class="form-control" Required>
                            </div>
                            <div class="col-md-6">
                                <label for="">Hall Floor</label>
                                <input name="floor"  type="text" value="<?php echo $data['floor'] ?>"  class="form-control" Required>
                            </div>
        
                        </div>
                        <div class="row mt-3">
                            <label for="">Image</label>
                            <input type="file" name="image" class="form-control mb-2" value="<?php echo $data['image'] ?>">
                            <img height="200px" src="<?php echo $image ?>" alt="">

                        </div>
                        <button class="px-4 ml-3 mt-4 py-2 text-white rounded" id="submitButton" type="submit">Update</button>

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