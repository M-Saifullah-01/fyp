<?php
session_start();
include ("../view/layouts/connect.php");

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;
// $select = "SELECT custom_menu FROM confirm_booking WHERE user_id = '$user_id'";
$select = "
    SELECT 
        Booking_No, 
        person_name, 
        phone_number, 
        cnic, 
        booking_date, 
        Booking_time, 
        address, 
        new_booking.name as hall_name, 
        hall_no, 
        capacity, 
        new_booking.headprice as headprice, 
        status, 
        add_menu.name as menu_name, 
        add_menu.menu_id as menu_id,
        custom_menu 
    FROM 
        new_booking 
    INNER JOIN  
        add_menu ON new_booking.menu_id = add_menu.menu_id 
    WHERE 
        user_id = '$user_id'

    UNION ALL

    SELECT 
        Booking_No, 
        person_name, 
        phone_number, 
        cnic, 
        booking_date, 
        Booking_time, 
        address, 
        hall_name, 
        hall_no, 
        capacity, 
        headprice, 
        status, 
        menu_name, 
        NULL as menu_id,
        custom_menu 
    FROM 
        confirm_booking 
    WHERE 
        user_id = '$user_id'

    UNION ALL
    SELECT 
        Booking_No, 
        person_name, 
        phone_number, 
        cnic, 
        booking_date, 
        Booking_time, 
        address, 
        hall_name, 
        hall_no, 
        capacity, 
        headprice, 
        status, 
        menu_name, 
        NULL as menu_id,
        custom_menu 
    FROM 
        cancel_booking 
    WHERE 
        user_id = '$user_id'
";


// $select = "
//     SELECT 
//         Booking_No, 
//         person_name, 
//         phone_number, 
//         cnic, 
//         booking_date, 
//         Booking_time, 
//         address, 
//         new_booking.name as hall_name, 
//         hall_no, 
//         capacity, 
//         new_booking.headprice as headprice, 
//         status, 
//         add_menu.name as menu_name, 
//         add_menu.menu_id as menu_id,
//         custom_menu 
//     FROM 
//         new_booking 
//     INNER JOIN  
//         add_menu ON new_booking.menu_id = add_menu.menu_id 
//     WHERE 
//         user_id = '$user_id'

//     UNION ALL

//     SELECT 
//         Booking_No, 
//         person_name, 
//         phone_number, 
//         cnic, 
//         booking_date, 
//         Booking_time, 
//         address, 
//         hall_name, 
//         hall_no, 
//         capacity, 
//         headprice, 
//         status, 
//         menu_name, 
//         custom_menu, 
//         NULL as menu_id
//     FROM 
//         confirm_booking 
//     WHERE 
//         user_id = '$user_id'

//     UNION ALL

//     SELECT 
//         Booking_No, 
//         person_name, 
//         phone_number, 
//         cnic, 
//         booking_date, 
//         Booking_time, 
//         address, 
//         hall_name, 
//         hall_no, 
//         capacity, 
//         headprice, 
//         status, 
//         menu_name, 
//         custom_menu,
//         NULL as menu_id 
//     FROM 
//         cancel_booking 
//     WHERE 
//         user_id = '$user_id'
// ";



$select_query = mysqli_query($connection, $select);

// var_dump($select_query);
// die();
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
  <link rel="stylesheet" href="assets/css/booking-history.css">
  <!--font awesome link-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <title>Marry Banquet</title>
</head>

<body>
  <?php include ("../view/layouts/user-header.php"); ?>

  <section class="booking-history " style="margin-left: 0px; ">
    <div class="">
      <div class="card ">
        <div class="card-header d-flex align-items-center justify-content-between">
          <span class="d-flex align-items-center ml-3">
            <a href="index.php"><i class="fa-solid fa-arrow-left"></i></a>
            <h3>Booking History</h3>
          </span>
          <form action="" class="d-flex align-items-center">
            <!-- <input type="text" name="filter" class="form-control"> -->
            <!-- <button class="btn btn-primary ml-1" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button> -->
            <!-- <a href="booking-history.php" class="btn btn-success ml-1"><i class="fa-solid fa-house"></i></a> -->
          </form>
        </div>

        <div class="card-body  ">
          <div class="table-responsive" style="overflow-x: auto !important;">
            <table class="table table-bordered ">
              <tr>
              <th width="5%">Booking No</th>
                  <th>person name</th>
                  <th>phone number</th>
                  <th>cnic</th>
                  <th>booking date</th>
                  <th>Booking time</th>
                  <th>address</th>
                  <th>Hall Name</th>
                  <th>Hall No</th>
                  <th>Chairs</th>
                  <th>Per Head Price</th>
                  <th>Bill</th>
                  <th>Menu</th>
                  <th>Custom Menu</th>
                  <th>status</th>
                  <th>Action</th>
                </tr>
                <?php while ($data = $select_query->fetch_assoc()) { ?>
                  <tr>
                    <td> <?php echo $data['Booking_No'] ?></td>
                    <td> <?php echo $data['person_name'] ?></td>
                    <td> <?php echo $data['phone_number'] ?></td>
                    <td> <?php echo $data['cnic'] ?></td>
                    <td> <?php echo $data['booking_date'] ?></td>
                    <td> <?php echo $data['Booking_time'] ?></td>
                    <td> <?php echo $data['address'] ?></td>
                    <td> <?php echo $data['hall_name'] ?></td>
                    <td> <?php echo $data['hall_no'] ?></td>
                    <td> <?php echo $data['capacity'] ?></td>
                    <td> <?php echo $data['headprice'] ?></td>
                    <td><?php echo $data['capacity'] * $data['headprice']; ?></td>
                    <td> <?php echo $data['menu_name'] ?></td>
                    <td> <?php echo $data['custom_menu'] ?></td>
                  <td class="text-primary"> <?php echo $data['status'] ?></td>

                  <td>
                    <?php if ($data['status'] == 'Pending') { ?>
                       <a href="../backend/admin/user-cancelled-booking.php?Booking_No=<?php echo $data['Booking_No'] ?>" class="btn btn-danger confirm-button">Cancel</a>

                    <?php } ?>
                  </td>
                </tr>
              <?php } ?>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>



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