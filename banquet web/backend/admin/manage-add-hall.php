<?php
session_start();
include('../../view/layouts/connect.php');

$select = "SELECT * FROM add_hall";
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
    <link rel="stylesheet" href="assets/css/add-pakage.css">
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

    <section class="pakage mt-3" id="#content-page">
        <div class="container">
            <div class="card">
                <div class="card-header ">
                    <h3>Hall Pakage</h3>
                </div>
                <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Hall Name</th>
                                <th>Hall No.</th>
                                <th>Hall Capacity</th>
                                <th>Hall Floor</th>
                                <th>Hall Image</th>
                                <th>Action</th>
                            </tr>
                            <?php WHILE($data = $select_query->fetch_assoc()) {  ?>
                            <tr>
                                <td><?php echo $data['name'] ?></td>
                                <td><?php echo $data['hall_no'] ?></td>
                                <td><?php echo $data['capacity'] ?></td>
                                <td><?php echo $data['floor'] ?></td>
                            <td><img height="100px" src="<?php echo "assets/img/" .$data['image'] ?>" alt=""></td>
                                <td>
                                    <a href="edit-hall.php?hall_id=<?php echo $data['hall_id'] ?>" class="btn btn-success">EDIT</a>
                                    <a href="delete-hall.php?hall_id=<?php echo $data['hall_id'] ?>" class="btn btn-danger">DELETE</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </table>
                </div>
            </div>
        </div>
    </section>


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