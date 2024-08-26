<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FAQs - Banquet Booking System</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/faqs.css"> -->



    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="assets/css/faqs.css">
    <!-- <link rel="stylesheet" href="assets/css/admin-profile.css"> -->
    <!--Link for aos animation-->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!--Link for favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">
    <!--font awesome link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <!--Link for favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/fav-icon.png">

    <title>Marry Banquet Booking</title>


</head>

<body>

    <?php
    include ("../../view/layouts/adminsidebar.php");
    ?>

    <?php include ("../../view/layouts/admin-navbar.php") ?>



    <section class="faqs ">
        <div class="container mt-3">
            <div class="card">
                <div class="card-header d-flex align-items-center">
                    <h3 class="ml-4">FAQs</h3>
                </div>
                <div class="card-body">


                    <div class="card subcard1">
                        <div class="card-header subcardheader">
                            <a class="text-white" data-toggle="collapse" href="#collapseone" role="button"
                                aria-expanded="false" aria-controls="collapseExample">
                                What happens if any user book a service?
                            </a>
                        </div>
                        <div class="collapse" id="collapseone">
                            <div class="card-body subcardbody1">
                                If a user books a service, the request will come into 'New Bookings' on the Dashboard.
                                From the Dashboard, you can accept or cancel the booking request. You can also edit user
                                information in case the customer enters incorrect information.
                            </div>
                        </div>
                    </div>


                    <div class="card subcard2 mt-3">
                        <div class="card-header subcardheader">
                            <a class="text-white" data-toggle="collapse" href="#collapsetwo" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                How do I confirm a booking?
                            </a>
                        </div>
                        <div class="collapse" id="collapsetwo">
                            <div class="card-body subcardbody2">
                                On Dashboard, open 'New Bookings' In the 'Action' Column click on this <span class="btn btn-primary confirm-button"><i class="fa-solid fa-check"></i></span> icon to confirm booking.
                            </div>
                        </div>
                    </div>


                    <div class="card subcard3 mt-3">
                        <div class="card-header subcardheader">
                            <a class="text-white" data-toggle="collapse" href="#collapsethree" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                How do I cancel a booking?
                            </a>
                        </div>
                        <div class="collapse" id="collapsethree">
                            <div class=" card-body subcardbody3">
                            On Dashboard, open 'New Bookings' In the 'Action' Column click on this <span class="btn btn-danger confirm-button"><i class="fa-solid fa-xmark"></i></span> icon to cancel booking.
                            </div>
                        </div>
                    </div>


                    <div class="card subcard4 mt-3">
                        <div class="card-header subcardheader">
                            <a class="text-white" data-toggle="collapse" href="#collapsefour" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                How do I manage services?
                        </div>
                        <div class="collapse" id="collapsefour">
                            <div class=" card-body subcardbody4 " style="color: black">
                                     In the sidebar, under Dashboard, there is a button named 'Services'. From there, you can add a new service and also manage current services, such as editing or deleting a service.
                            </div>
                        </div>
                    </div>


                    <div class="card subcard5 mt-3">
                        <div class="card-header subcardheader">
                            <a class="text-white" data-toggle="collapse" href="#collapsefive" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                How do I manage Gallery?
                            </a>
                        </div>
                        <div class="collapse" id="collapsefive">
                            <div class=" card-body subcardbody5">
                            In the sidebar, under Services, there is a button named 'Gallery'. From there, you can add a new Image and also manage current Images, such as deleting a image. It is displayed on the user side in the gallery page.
                            </div>
                        </div>
                    </div>


                    <div class="card subcard6 mt-3">
                        <div class="card-header subcardheader">
                            <a class="text-white" data-toggle="collapse" href="#collapsesix" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                How can I view all bookings?
                            </a>
                        </div>
                        <div class="collapse" id="collapsesix">
                            <div class=" card-body subcardbody6">
                            On the Dashboard, click on the 'Total Bookings Request' section. From there, you can see all the booking requests, whether they are accepted or cancelled.                            </div>
                        </div>
                    </div>


                    <div class="card subcard5 mt-3">
                        <div class="card-header subcardheader">
                            <a class="text-white" data-toggle="collapse" href="#collapseseven" role="button"
                                aria-expanded="false" aria-controls="collapseExample2">
                                How do I contact support?
                            </a>
                        </div>
                        <div class="collapse" id="collapseseven">
                            <div class=" card-body subcardbody5">
                                You can contact to support via the provided mails by the Team or you can contact on <a href="mailto:saifrana1177@gmail.com">saifrana1177@gmail.com</a>
                            </div>
                        </div>
                    </div>


                </div>


                <!-- <div id="accordion">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne"
                                aria-expanded="true" aria-controls="collapseOne">
                                How do I book a banquet?
                            </button>
                        </h5>
                    </div>

                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
                        <div class="card-body">
                            To book a banquet, simply navigate to the booking page, select your desired date and
                            service,
                            and fill out the booking form. Our team will confirm your booking within 24 hours.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingTwo">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white collapsed" data-toggle="collapse"
                                data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What happens after I make a booking?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                        <div class="card-body">
                            After you make a booking, it will appear in the 'New Bookings' section for our admin team to
                            review. You will receive a confirmation or cancellation notification based on availability.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white collapsed" data-toggle="collapse"
                                data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                How do I cancel a booking?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                        <div class="card-body">
                            To cancel a booking, please contact our support team via the contact page. Provide your
                            booking
                            details, and our team will assist you with the cancellation process.
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingFour">
                        <h5 class="mb-0">
                            <button class="btn btn-link text-white collapsed" data-toggle="collapse"
                                data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How can I contact support?
                            </button>
                        </h5>
                    </div>
                    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                        <div class="card-body">
                            You can contact our support team through the contact page on our website. We are available
                            via
                            email, phone, and live chat to assist you with any inquiries or issues.
                        </div>
                    </div>
                </div>
            </div> -->

            </div>
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