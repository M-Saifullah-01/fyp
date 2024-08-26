<?php
session_start();
include("../view/layouts/connect.php");
//  var_dump($connection);
//  die();
$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

if (!$user_id) {
    header('location: user-login.php');
}

$hall_id = isset($_POST['hall_id']) ? $_POST['hall_id'] : null;
$select = "SELECT * FROM add_hall   WHERE hall_id = '$hall_id'";
$select_query = mysqli_query($connection, $select);
//  var_dump($select_query);
//  die();

// $menu_select = "SELECT * FROM add_menu";
// $menu_select_query = mysqli_query($connection, $menu_select);
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
    <link rel="stylesheet" href="assets/css/booking-form.css">
    <!-- jquery errors -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!--Link for favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
    <title>Marry Banquet Booking</title>
</head>

<body>
    <?php
    include("../view/layouts/user-header.php");
    ?>

    <section class="booking">
        <div class="container">
            <div class="card mb-5">
                <div class="card-header d-flex align-items-center justify-content-between ">
                    <h3>Enter your Information Carefully</h3>
                    <button class="btn text-white  px-3" onclick="goBack()"
                        style="background-color: #343a40bf;">Back</button>
                </div>
                <div class="card-body">
                    <form action="../backend/admin/new-booking-insert.php" method="post" id="addServiceForm">
                        <div class="row">
                            <div class="col-md-4">
                                <label for="">Person Name</label>
                                <input type="text" class="form-control" name="person_name" id="nameInput" required>
                                <p id="name-error-message" style="color: red; display: none;">Name should only contain
                                    letters.</p>

                            </div>
                            <div class="col-md-4">
                                <label for="">Phone number</label>
                                <input type="text" class="form-control" name="phone_number" id="phoneInput"
                                    maxlength="11" pattern="\d{1,11}" required>
                                <p id="phone-error-message" style="color: red; display: none;">Phone only 11 cotains
                                    number and start with 03</p>
                                </p>

                            </div>
                            <div class="col-md-4">
                                <label for="cnicInput">Cnic</label>
                                <input type="text" class="form-control" name="cnic" id="cnicInput" maxlength="13"
                                    required>
                                <p id="cnic-error-message" style="color: red; display: none;">Cnic only cotains 13
                                    number</p>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-4">
                                <?php
                                // Calculate the date two days from today
                                $minDate = date('Y-m-d', strtotime('+2 days'));
                                ?>
                                <label for="">Booking Date</label>
                                <input type="date" name="booking_date" class="form-control" name="booking_date"
                                    min="<?php echo $minDate; ?>" required>
                            </div>
                            <div class="col-md-4">

                                <label for="exampleFormControlSelect1">Booking Time</label>
                                <select class="form-control" id="exampleFormControlSelect1" name=" Booking_time">
                                    <option value="Afternoon(Till 5:00pm)">Afternoon(12Pm to 5:00Pm)</option>
                                    <option value="Night (Till 11:30pm)">Evening (6:30Pm to 11:30pm)</option>
                                </select>
                            </div>
                            <div class="col-md-4">
                                <label for="">Address</label>
                                <input type="text" class="form-control" name="address" class="address" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <?php while ($res = $select_query->fetch_assoc()) { ?>
                                <div class="col-md-4">
                                    <label for="">Hall Name</label>
                                    <input type="text" name="name" value="<?php echo $res['name'] ?>" class="form-control"
                                        id="" readonly>

                                </div>
                                <div class="col-md-4">
                                    <label for="">Hall No.</label>
                                    <input type="text" name="hall_no" value="<?php echo $res['hall_no'] ?>"
                                        class="form-control" id="" readonly>

                                </div>




                                <div class="col-md-4">
                                    <label for="">Number of People</label>
                                    <input type="number" name="capacity" value="<?php echo $res['capacity']; ?>"
                                        class="form-control" max="<?php echo $res['capacity']; ?>"
                                        placeholder="Max. Capacity is <?php echo $res['capacity']; ?> People"
                                        id="error-message"
                                        title="Our Capacity is Maximum <?php echo $res['capacity']; ?> People">

                                </div>
                            <?php } ?>



                        </div>


                        <div class="row mt-3">
                            <div class="col-md-4">
                                <label for="">Per Head Price</label>
                                <input type="number" name="headprice" id="headPriceInput"
                                    placeholder="Price will be automatically selected" type="number"
                                    class="form-control" readonly>
                            </div>
                            <div class="col-md-8">
                                <label for="">Menu</label>
                                <select name="menu_id" id="menuSelect" class="form-control" onchange="updatePrice()">
                                    <option value="">Select Menu</option>
                                    <?php
                                    $select = "SELECT * FROM add_menu";
                                    $select_query = mysqli_query($connection, $select);
                                    while ($data = mysqli_fetch_assoc($select_query)) {
                                        echo '<option value="' . $data['menu_id'] . '" data-price="' . $data['headprice'] . '">' . $data['name'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label for="">Enter your custom menu</label>
                                <input type="text" name="custom_menu" class="custom_menu form-control"
                                    placeholder="Enter your custom Menu. The Price will be updated within 12 hours.">
                            </div>
                        </div>
                        <button type="submit" class="btn text-white px-3 mt-3"
                            style="background-color: #343a40bf;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php
    include("../view/layouts/footer.php");
    ?>

    <!-- back button script -->
   
    <script>
        function goBack() {
            window.history.back();
        }
    </script>




    <!--ye script ha pakag name sy per head price selet krny ki-->
    <script>
        function updatePrice() {
            var select = document.getElementById("menuSelect");
            var selectedOption = select.options[select.selectedIndex];
            var price = selectedOption.getAttribute('data-price');

            document.getElementById("headPriceInput").value = price;
        }
    </script>





    <!-- form sweet alert -->

    <!-- sweetalert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <?php if (isset($_SESSION['booking_error']) && $_SESSION['booking_error'] === true): ?>
        <script>
            Swal.fire({
                title: 'Booking Failed',
                icon: "error",
                text: "No booking Space is Available for this <?php echo $_SESSION['booking_date']; ?>",
                showConfirmButton: true,
            });
        </script>
        <?php unset($_SESSION['booking_error']); ?>
    <?php endif; ?>


    <?php if (isset($_SESSION['booking_success']) && $_SESSION['booking_success'] === true): ?>
        <script>
            Swal.fire({
                title: 'Booking Successfully',
                icon: "success",
                text: "Your Request  Submitted  Successfully",
                showConfirmButton: true,
            }).then(() => {
                window.location.href = "payment.php";

            });;
        </script>
        <?php unset($_SESSION['booking_success']); ?>
    <?php endif; ?>






    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
        crossorigin="anonymous"></script>

    <script src="assets/js/booking-form.js"></script>
</body>

</html>