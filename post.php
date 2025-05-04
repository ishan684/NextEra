<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TreeLand &mdash;Lodge and Hotel </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Tags for SEO -->
    <meta name="description"
        content="Experience comfort and luxury at TreeLand Lodge and Hotel, located in the heart of Sauraha, Chitwan. Explore Chitwan National Park and enjoy your stay in our hotel and lodge.">
    <meta name="keywords"
        content="TreeLand Lodge, Sauraha Chitwan, Chitwan National Park, hotel, lodge, luxury accommodation, wildlife, nature, Chitwan, Nepal">

    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link href="images/favicon.png" rel="icon">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Add this script in the <head> section of your HTML document -->


</head>

<body data-spy="scroll" data-target="#templateux-navbar" data-offset="200">
    <nav class="navbar navbar-expand-lg navbar-dark pb_navbar pb_scrolled-light" id="templateux-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php"><span class="text-danger">Tree</span>Land</a>
            <div class="site-menu-toggle js-site-menu-toggle  ml-auto" data-aos="fade" data-toggle="collapse"
                data-target="#templateux-navbar-nav" aria-controls="templateux-navbar-nav" aria-expanded="false"
                aria-label="Toggle navigation">
                <span></span>
                <span></span>
                <span></span>
            </div>


            <div class="collapse navbar-collapse text-dark" id="templateux-navbar-nav">
                <ul class="navbar-nav ml-auto ">
                    <li class="nav-item"><a class="nav-link" href="index.php#section-home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#section-about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#section-rooms">Rooms</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#section-gallery">Gallery</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#section-menus">Menus</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#section-events">Events</a></li>
                    <li class="nav-item"><a class="nav-link" href="index.php#section-contact">Contact</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="py-5 bg-light ">
        <div class="container mt-5">
            <div class="row align-items-center" data-aos="fade-up">

                <div class="text-center" data-aos="fade-up">
                    <h2 class="heading" data-aos="fade-up">Events</h2>
                    <p data-aos="fade-up">Explore our diverse events, from cultural programs to wildlife safaris. Each
                        event is
                        designed to provide unique experiences, making your stay at our hotel truly unforgettable.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5 bg-light event-section" ">
        <div class="container mt-5">
            <?php
            include 'connection.php';
            if(isset($_GET['id'])) {
                $postid = $_GET['id'];
                $query = "select * from posts where id='$postid'";
                $run = mysqli_query($conn, $query);
                while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['date'];
                $c = $row['title'];
                $d = $row['content'];
                $e = $row['image'];

                ?>
                <div class="row align-items-center" data-aos="fade-up" id="event1">

                    <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
                        <img src="images/<?php echo $e ?>" alt="Event 1 Image" class="img-fluid rounded">
                    </div>
                    <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
                        <span class="meta-post">
                            <?php echo $b ?>
                        </span>
                        <h2 class="mt-0 mb-3"><a href="#">
                                <?php echo $c ?>
                            </a></h2>
                        <p>
                            <?php echo $d ?>
                        </p>
                        
                    </div>
                </div>
            <?php }} ?>

        </div>
    </section>





    <!-- END .block-2 -->





    <!-- END section -->


    <!-- footer started  -->
    <footer class="section footer-section">
        <div class="container">
            <div class="row mb-4">
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="index.html#section-about">About Us</a></li>
                        <li><a href="#" id="termsLink" data-toggle="modal" data-target="#termsModal">Terms &amp;
                                Conditions</a></li>
                        <li><a href="#" id="privacyLink" data-toggle="modal" data-target="#privacyModal">Privacy
                                Policy</a></li>

                    </ul>
                </div>
                <div class="col-md-3 mb-5">
                    <ul class="list-unstyled link">
                        <li><a href="index.html#section-rooms">The Rooms &amp; Suites</a></li>
                        <li><a href="index.html#section-contact">Contact Us</a></li>
                        <li><a href="index.html#section-menus">Restaurant</a></li>
                    </ul>
                </div>
                <div class="col-md-3 mb-5 pr-md-5 contact-info">
                    <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
                    <p><span class="d-block"><span
                                class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span>Chitwan
                        National Park <span>Sauraha Nepal </span></p>
                    <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
                        <span>(+977) 984 552 3406</span>
                    </p>
                    <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span>
                        <span>
                            landhoteltree@gmail.com</span>
                    </p>
                </div>
                <div class="col-md-3 mb-5">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3536.4533060809836!2d84.48936731112654!3d27.579472431020633!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3994eee2c244dcdf%3A0xc7a8ad146d2e754!2sTree%20Land%20Lodge!5e0!3m2!1sen!2snp!4v1702895393273!5m2!1sen!2snp"
                        width="250" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="row pt-5">
                <p class="col-md-8 text-left">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;
                    <script>document.write(new Date().getFullYear());</script> All rights reserved Tree Land
                    Lodge |
                    Made with <i class="fa fa-heart text-primary" aria-hidden="true"></i> by <a
                        href="https://tivrasoft.com/" target="_blank" class="font-weight-bold">Tivra Soft</a>

                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </p>

                <p class="col-md-4 text-right social">
                    <a href="#"><span class="fa fa-tripadvisor"></span></a>
                    <a href="https://www.facebook.com/profile.php?id=61554850798927"><span
                            class="fa fa-facebook"></span></a>
                    <a href="#"><span class="fa fa-twitter"></span></a>
                    <a href="#"><span class="fa fa-linkedin"></span></a>
                    <a href="#"><span class="fa fa-instagram"></span></a>
                </p>
            </div>
        </div>
    </footer>
    <!-- footer end  -->

    <!-- Modal -->
    !-- Modal -->
    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="termsModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="termsModalLabel">Terms & Conditions</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <strong>Reservation Policy:</strong> All reservations are subject to availability and
                        confirmation. A valid
                        credit card is required to secure your booking.
                    </p>
                    <p>
                        <strong>Cancellation Policy:</strong> Cancellations must be made at least 48 hours prior
                        to the
                        check-in
                        date to avoid charges. Late cancellations and no-shows will be charged for the first
                        night.
                    </p>
                    <p>
                        <strong>Check-in/Check-out:</strong> Check-in time is 2:00 PM, and check-out time is
                        11:00 AM.
                        Early
                        check-in and late check-out are subject to availability and may incur additional
                        charges.
                    </p>
                    <!-- Add more terms as needed -->
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="privacyModal" tabindex="-1" role="dialog" aria-labelledby="privacyModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="privacyModalLabel">Privacy Policy</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>
                        <strong>Information Collection:</strong> We collect personal information, including your
                        name,
                        contact
                        details, and payment information, to process reservations and provide services.
                    </p>
                    <p>
                        <strong>Use of Information:</strong> Your information is used to process reservations,
                        personalize your
                        experience, and communicate important updates about your stay.
                    </p>
                    <p>
                        <strong>Security:</strong> We prioritize the security of your data and have implemented
                        measures
                        to
                        safeguard against unauthorized access.
                    </p>
                    <!-- Add more privacy policy details as needed -->
                </div>
            </div>
        </div>
    </div>

    </div>


    </div>



    </div>

    <script src="js/jquery-3.3.1.min.js"></script>

    <script src="js/jquery-migrate-3.0.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.stellar.min.js"></script>
    <script src="js/jquery.fancybox.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>



    <script src="js/aos.js"></script>

    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/jquery.timepicker.min.js"></script>
    <script src="js/main.js"></script>
</body>

</html>