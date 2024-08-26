<?php
session_start();
include ("../../view/layouts/connect.php");
$menu_id = isset($_GET['menu_id'])?$_GET['menu_id']: null;

$select = "SELECT * FROM add_menu WHERE menu_id='$menu_id'";
$select_query = mysqli_query($connection, $select);

$data = $select_query->fetch_assoc();
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
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h3>Edit Menu</h3>
                </div>
                <div class="card-body">
                    <form action="update-menu.php" method="post">
                        <div class="row">
                            <div class="col-md-12">
                            <input name="menu_id" value="<?php echo $data['menu_id'] ?>" type="number" class="form-control" hidden>
                                <label for="">Menu</label>
                                <input name="name" value="<?php echo $data['name'] ?>" type="text" 
                                    class="form-control" Required>
                            </div>
                            <div class="col-md-12 mt-2">
                                <label for="">Per Head Price</label>
                                <input name="headprice" value="<?php echo $data['headprice'] ?>" type="number" class="form-control" Required>
                            </div>
                            <button class="px-4 ml-3 mt-3 py-2 text-white rounded" id="submitButton" type="submit">Update</button>
                        </div>
                    </form>
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