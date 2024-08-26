<?php
session_start();
include ("../../view/layouts/connect.php");



// $Booking_No = isset($_GET['Booking_No']) ? $_GET['Booking_No'] : '';
$Booking_No = isset($_GET["Booking_No"]) ? $_GET['Booking_No'] : '';
$menu_name = isset($_GET["menu_name"]) ? $_GET['menu_name'] : '';
// var_dump($menu_name);
// die("");
$get_pakage = "SELECT * FROM add_hall";
$get_pakage_query = mysqli_query($connection, $get_pakage);


$get_menu = "SELECT * FROM add_menu";
$get_menu_query = mysqli_query($connection, $get_menu);

$select = "SELECT * FROM new_booking WHERE Booking_No='$Booking_No'";
$select_query = mysqli_query($connection, $select);

$data = $select_query->fetch_assoc();
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
    <link rel="stylesheet" href="assets/css/new-booking-edit.css">
        <!--Link for favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
    <title>Marry Banquet Booking</title>
</head>

<body>
    <?php
    include ("../../view/layouts/adminsidebar.php");
    ?>

    <?php include ("../../view/layouts/admin-navbar.php") ?>

    <section class="edit-services">
        <div class="container py-3">
            <div class="card">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h2 class="text-center ml-1">Edit a Booking</h2>
                    <a href="new-booking.php" class="back-btn btn text-white border-rounded mr-5 "
                        style="background-color: #676b70;">New Bookings</a>
                </div>

                <div class="card-body">
                    <form action="new-booking-update.php" method="POST" id="updateServiceForm">
                        <div class="row">
                            <input type="text" class="form-control" name="Booking_No" id="nameInput"
                                value="<?php echo $data['Booking_No'] ?>" hidden>
                          
                            <div class="col-md-4">
                                <label for="">Person Name</label>
                                <input type="text" class="form-control" name="person_name" id="nameInput" value="<?php echo $data['person_name'] ?>" required>
                                <p id="name-error-message" style="color: red; display: none;">Name should only contain letters.</p>
                            </div>

                            <div class="col-md-4">
                                <label for="">Phone number</label>
                                <!-- <input type="number" class="form-control" name="phone_number" id="phoneInput" maxlength="11" pattern="\d{1,11}" value="<?php echo $data['phone_number'] ?>" required> -->
                                <input type="text" class="form-control" placeholder="03111111111" name="phone_number"  value="<?php echo $data['phone_number'] ?>"  id="phoneInput" maxlength="11" pattern="\d{11}" title="Only numbers are allowed and it must be 11 digits long" required>
                            </div>

                            <div class="col-md-4">
                                <label for="cnicInput">Cnic</label>
                                <input type="text" class="form-control" name="cnic" placeholder="Only 13 digits are allowed"  value="<?php echo $data['cnic'] ?>"  id="cnicInput" maxlength="13" pattern="\d{13}" title="Only numbers are allowed and it must be 13 digits long" required>

                                <p id="cnic-error-message" style="color: red; display: none;">Cnic only cotains 13
                                    number</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="">Booking Date</label>
                                <?php
                                // Calculate the date two days from today
                                $minDate = date('Y-m-d');
                                ?>
                                <input type="date" name="booking_date" class="form-control" name="booking_date" min="<?php echo $minDate; ?>"
                                    value="<?php echo $data['booking_date'] ?>" required>
                            </div>
                            <div class="col-md-4">
                                <label for="exampleFormControlSelect1">Booking Time</label>
                                <select class="form-control" id="exampleFormControlSelect1" name="Booking_time">
                                    <option value="Afternoon(Till 5:00pm)">Afternoon(12Pm to 5:00Pm)</option>
                                    <option value="Night (Till 11:30pm)">Evening (6:30Pm to 11:30pm)</option>
                                </select>

                            </div>
                            <div class="col-md-4">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address" class="address"
                                    value="<?php echo $data['address'] ?>" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <!-- <label for="">Pakage Name</label>
                                <input type="text" class="form-control" name="pakage_name"
                                    value="<?php echo $data['pakage_name'] ?>"> -->
                                <label for="">Hall Name</label>
                                <select name="hall_id" id="" class="form-control">
                                    <?php while ($res = $get_pakage_query->fetch_assoc()) { ?>
                                        <option value="<?php echo $res['hall_id'] ?>"><?php echo $res['name'] ?></option>
                                    <?php } ?>
                                </select>
                            </div>

                            <div class="col-md-4">
                                <label for="">People</label>
                                <input type="number" class="form-control" placeholder="Max. 1000 people Capacity" name="capacity"
                                    value="<?php echo $data['capacity'] ?>">
                            </div>

                            <div class="col-md-4">
                                <label for="">Per Head Price</label>
                                <input type="number" class="form-control" id="headPriceInput" name="headprice"
                                    value="<?php echo $data['headprice'] ?>">
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label for="">Menu Name</label>
                                <select name="menu_id" id="menuSelect" class="form-control" onchange="updatePrice()" title="Please Again select menu" required>
                                    <option value=""><?php echo $menu_name ?></option>
                                    <?php
                                    $select = "SELECT * FROM add_menu";
                                    $select_query = mysqli_query($connection, $select);
                                    while ($result = mysqli_fetch_assoc($select_query)) {
                                        echo '<option value="' . $result['menu_id'] . '" data-price="' . $result['headprice'] . '">' . $result['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="">Custome Menu</label>
                                <input type="text" name="custom_menu" id="" value="<?php echo $data['custom_menu'] ?>" class="form-control">
                            </div>
                        </div>
                        <button class="px-4 py-2 mt-3 text-white rounded" type="submit"
                            style="background-color: #676b70; border: none; :hover: #34495e;">Update </button>
                    </form>
                </div>
            </div>
        </div>
    </section>



    <script>
        function updatePrice() {
            var select = document.getElementById("menuSelect");
            var selectedOption = select.options[select.selectedIndex];
            var price = selectedOption.getAttribute('data-price');

            document.getElementById("headPriceInput").value = price;
        }
    </script>




    <!-- sweet alert link -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- Show SweetAlert based on session variables -->
    <?php if (isset($_SESSION['booking_error']) && $_SESSION['booking_error'] === true): ?>
        <script>
            Swal.fire({
                title: 'Booking Failed',
                icon: 'error',
                text: "No booking space is available for this <?php echo $_SESSION['booking_date']; ?>",
                showConfirmButton: true,
            });
        </script>
        <?php unset($_SESSION['booking_error']); ?>
    <?php endif; ?>

    <?php if (isset($_SESSION['booking_success']) && $_SESSION['booking_success'] === true): ?>
        <script>
            Swal.fire({
                title: 'Booking Successful',
                icon: 'success',
                text: 'Your request was submitted successfully.',
                showConfirmButton: true,
            }).then(() => {
                window.location.href = 'new-booking.php';
            });
        </script>
        <?php unset($_SESSION['booking_success']); ?>
    <?php endif; ?>

    <!--update Button Sweet alert JS-->
    <!-- <script>
        // we give id to form and apply js on Form
        document.getElementById('updateServiceForm').addEventListener('submit', function (event) {
            event.preventDefault(); // Prevent the default form submission
            Swal.fire({
                icon: "success",
                title: "Your Service is Successfully Updated",
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                this.submit(); // Submit the form after the SweetAlert
            });
        });
    </script> -->
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

<script src="assets/js/new-booking-edit-js.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>
</body>

</html>