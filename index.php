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
  <link rel="stylesheet" href="path/to/whatsapp-chat-bubble.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <!-- Theme Style -->

  <!-- Add this script in the <head> section of your HTML document -->
  <style>
    body {
      overflow: hidden;
      /* Hide scroll bars until the timeout expires */
    }

    #spinner-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgb(253, 252, 252);
      /* Set the background color to match your site's background */
      display: flex;
      justify-content: center;
      align-items: center;
      z-index: 9999;
    }

    #spinner {
      font-size: 5rem;

    }

    .whatsapp-chat-bubble {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 999;
    }

    .whatsapp-chat-button {
      background-color: #25D366;
      /* WhatsApp green color */
      color: #FFFFFF;
      padding: 10px 20px;
      border-radius: 50%;
      cursor: pointer;
    }

    .whatsapp-chat-window {
      display: none;
      /* Add styles for the chat window if needed */
    }
  </style>





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
      <!-- END menu-toggle -->


      <div class="collapse navbar-collapse" id="templateux-navbar-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item"><a class="nav-link" href="#section-home">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-about">About</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-rooms">Rooms</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-gallery">Gallery</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-menus">Menus</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-events">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>
          <li class="nav-item"><a class="nav-link" href="#"><span class="btn btn-primary text-white font-weight-bold"
                data-toggle="modal" data-target="#reservation-form">Reserve Now</span></a></li>
           
        </ul>
        <a class=" btn btn-success text-white font-weight-bold" href="userlogin.php" >Sign in</a>
      </div>
    </div>
  </nav>
  <!-- END nav -->
  
  <div id="spinner-container">
    <div id="spinner" class="spinner-grow text-danger"></div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
        // Hide the spinner and show the content after a timeout
        setTimeout(function () {
          hideSpinnerAndLoadContent();
        }, 2000); // Adjust the delay as needed (e.g., 3000 milliseconds or 3 seconds)
      });

      // Function to hide the spinner and show the content
      function hideSpinnerAndLoadContent() {
        document.getElementById("spinner-container").style.display = "none";
        document.body.style.overflow = "auto"; // Show scroll bars
      }
    </script>

  </div>
  <section class="site-hero overlay" style="background-image: url(images/hero_5.jpeg)"
    data-stellar-background-ratio="0.5" id="section-home">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade-up">
          <h1 class="heading">Stay With Us &amp; Relax</h1>
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>
  <!-- END section -->



  <section class="py-5 bg-light" id="section-about">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
          <img src="images/hero_4.jfif" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
          <h2 class="heading mb-4">Hey there!</h2>
          <p class="mb-5"> Far removed from the hustle and bustle of everyday life, Treeland beckons you to a serene
            escape. Here, amidst the lush landscapes and verdant surroundings, our haven is a harmonious blend of
            nature's beauty and comfort.</p>
          <p><a href="https://www.youtube.com/watch?v=ZbDW3IG9Knc" target="_blank"
              class="btn btn-primary text-white py-2 mr-3 text-uppercase letter-spacing-1">Watch the video</a></p>
        </div>

      </div>
    </div>
  </section>




  </div>
  <!-- END .block-2 -->

  <section class="section" id="section-rooms">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Rooms &amp; Suites</h2>
          <p data-aos="fade-up" data-aos-delay="100">Far, far away from the ordinary, beyond the concrete jungles,
            Treeland stands as an oasis near the majestic Chitwan National Park. It's a retreat where the rhythmic flow
            of the nearby river harmonizes with the melodies of the jungle, creating a symphony of serenity. </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="images/img_1.jpg" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Standard Suite</h2>
              <span class="text-uppercase letter-spacing-1">8$ / per night</span>
              <span>
                <a class="nav-link" href="#section-rooms"><span class="btn btn-primary text-white font-weight-bold"
                    data-toggle="modal" data-target="#reservation-form">Reserve Now</span></a></li>
              </span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="images/img_2.jfif" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Double Suite</h2>
              <span class="text-uppercase letter-spacing-1">8$ / per night</span>
              <span>
                <a class="nav-link" href="#section-rooms"><span class="btn btn-primary text-white font-weight-bold"
                    data-toggle="modal" data-target="#reservation-form">Reserve Now</span></a></li>
              </span>
            </div>
          </a>
        </div>

        <div class="col-md-6 col-lg-4" data-aos="fade-up">
          <a href="#" class="room">
            <figure class="img-wrap">
              <img src="images/img_3.jfif" alt="Free website template" class="img-fluid mb-3">
            </figure>
            <div class="p-3 text-center room-info">
              <h2>Deluxe Suite</h2>
              <span class="text-uppercase letter-spacing-1">12$ / per night</span>
              <span>
                <a class="nav-link" href="#section-rooms"><span class="btn btn-primary text-white font-weight-bold"
                    data-toggle="modal" data-target="#reservation-form">Reserve Now</span></a></li>
              </span>
            </div>
          </a>
        </div>


      </div>
    </div>
  </section>


  <section class="section slider-section bg-light" id="section-gallery">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Photos</h2>
          <p data-aos="fade-up" data-aos-delay="100">Separated from the chaos, our haven resides in the heart of
            tranquility, akin to Bookmarksgrove, where the air is filled with the essence of adventure and exploration.
            At Treeland, you're invited to embark on a journey into the heart of nature, where every corner is a
            bookmark in your unforgettable story.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="home-slider major-caousel owl-carousel mb-3 pb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="slider-item">
              <?php
              include 'connection.php';
              $query = "select * from slider_one";
              $run = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['slider1'];
                ?>
                <a href="images/<?php echo $b; ?>" data-fancybox="images" data-caption="">
                  <img src="images/<?php echo $b; ?>" alt="Image placeholder" class="img-fluid">
                </a>
                <?php
              }
              ?>
            </div>



            <div class="slider-item">
            <?php
              include 'connection.php';
              $query = "select * from slider_two";
              $run = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['slider2'];
                ?>
               <a href="images/<?php echo $b ?>" data-fancybox="images" data-caption=""><img src="images/<?php echo $b ?>"
                  alt="Image placeholder" class="img-fluid"></a>
                <?php
              }
              ?>
            </div>

            <div class="slider-item">
            <?php
              include 'connection.php';
              $query = "select * from slider_three";
              $run = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['slider_three'];
                ?>
               <a href="images/<?php echo $b ?>" data-fancybox="images" data-caption=""><img src="images/<?php echo $b ?>"
                  alt="Image placeholder" class="img-fluid"></a>
                <?php
              }
              ?>
            </div>


            <div class="slider-item">
            <?php
              include 'connection.php';
              $query = "select * from slider_four";
              $run = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['slider4'];
                ?>
               <a href="images/<?php echo $b ?>" data-fancybox="images" data-caption=""><img src="images/<?php echo $b ?>"
                  alt="Image placeholder" class="img-fluid"></a>
                <?php
              }
              ?>
            </div>

            <div class="slider-item">
            <?php
              include 'connection.php';
              $query = "select * from slider_five";
              $run = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['slider5'];
                ?>
               <a href="images/<?php echo $b ?>" data-fancybox="images" data-caption=""><img src="images/<?php echo $b ?>"
                  alt="Image placeholder" class="img-fluid"></a>
                <?php
              }
              ?>
              
            </div>


            <div class="slider-item">
            <?php
              include 'connection.php';
              $query = "select * from slider_six";
              $run = mysqli_query($conn, $query);

              while ($row = mysqli_fetch_array($run)) {
                $a = $row['id'];
                $b = $row['slider6'];
                ?>
               <a href="images/<?php echo $b ?>" data-fancybox="images" data-caption=""><img src="images/<?php echo $b ?>"
                  alt="Image placeholder" class="img-fluid"></a>
                <?php
              }
              ?>
            </div>
            
          </div>
          <!-- END slider -->
        </div>

      </div>
    </div>
  </section>
  <!-- END section -->

  <section class="section bg-image overlay" style="background-image: url('images/hero_3.jpg');" id="section-menus">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading text-white" data-aos="fade">Our Restaurant Menu</h2>
          <p class="text-white" data-aos="fade" data-aos-delay="100">Savor the flavors of our diverse restaurant menu,
            featuring a blend of local and international cuisines. Each dish is crafted with care, promising a
            delightful culinary journey for our guests.</p>
        </div>
      </div>
      <div class="food-menu-tabs" data-aos="fade">
        <ul class="nav nav-tabs mb-5" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active letter-spacing-2" id="mains-tab" data-toggle="tab" href="#mains" role="tab"
              aria-controls="mains" aria-selected="true">Food</a>
          </li>
          <li class="nav-item">
            <a class="nav-link letter-spacing-2" id="desserts-tab" data-toggle="tab" href="#desserts" role="tab"
              aria-controls="desserts" aria-selected="false">Desserts</a>
          </li>
          <li class="nav-item">
            <a class="nav-link letter-spacing-2" id="drinks-tab" data-toggle="tab" href="#drinks" role="tab"
              aria-controls="drinks" aria-selected="false">Drinks</a>
          </li>
        </ul>
        <div class="tab-content py-5" id="myTabContent">


          <div class="tab-pane fade show active text-left" id="mains" role="tabpanel" aria-labelledby="mains-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Gravy Chicken</a></h3>
                  <p class="text-white text-opacity-7">Enjoy our tender chicken, simmered in a rich, aromatic gravy. A
                    delight for all poultry aficionados!</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Dal Bhat</a></h3>
                  <p class="text-white text-opacity-7">A traditional Nepalese dish, featuring hearty lentil soup (Dal)
                    served with fluffy rice (Bhat). A comforting, nutritious staple that embodies the essence of
                    Nepalese cuisine.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Gonghi</a></h3>
                  <p class="text-white text-opacity-7">Savor the unique flavors of Gonghi, a local delicacy that offers
                    a true taste of Nepalese cuisine. A must-try for food enthusiasts seeking an authentic culinary
                    experience.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Chinese Cuisine</a></h3>
                  <p class="text-white text-opacity-7">Savor the bold flavors of our Chinese classics, like the fiery
                    Kung Pao Chicken, crispy Vegetable Spring Rolls, and aromatic Fried Rice — a symphony of sweet,
                    savory, and spicy delights.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Continental Cuisine</a></h3>
                  <p class="text-white text-opacity-7">Indulge in sophistication with our Grilled Salmon, Spaghetti
                    Bolognese, and Chicken Piccata — a fusion of textures and tastes crafted with European charm.
                  </p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Dal Bhat with Mutton</a></h3>
                  <p class="text-white text-opacity-7">Our traditional Dal Bhat served with succulent mutton. A perfect
                    blend of hearty lentils, fluffy rice, and tender meat for a fulfilling meal.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Gundruk</a></h3>
                  <p class="text-white text-opacity-7"> Delight in the unique taste of Gundruk, a traditional Nepalese
                    dish made from fermented and dried leafy vegetables. Its distinctive sour flavor offers a true
                    culinary adventure.</p>
                </div>
                <div class="food-menu mb-5">
                  <span class="d-block text-primary h4 mb-3"></span>
                  <h3 class="text-white"><a href="#" class="text-white">Bhatmas Sadeko</a></h3>
                  <p class="text-white text-opacity-7">"Bhatmas Sadeko: A traditional Nepali appetizer, this dish
                    features roasted soybeans tossed with a medley of spices. High in protein and packed with flavor,
                    it’s a healthy and delicious choice.</p>
                </div>
              </div>
            </div>


          </div> <!-- .tab-pane -->

          <div class="tab-pane fade text-left" id="desserts" role="tabpanel" aria-labelledby="desserts-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Banana Split</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Sticky Toffee Pudding</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Pecan</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Apple Strudel</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Pancakes</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Ice Cream Sundae</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
          </div> <!-- .tab-pane -->
          <div class="tab-pane fade text-left" id="drinks" role="tabpanel" aria-labelledby="drinks-tab">
            <div class="row">
              <div class="col-md-6">
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Spring Water</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Coke, Diet Coke, Coke Zero</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Orange Fanta</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Lemonade, Lemon Squash</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Sparkling Mineral Water</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
                <div class="food-menu mb-5">

                  <h3 class="text-white"><a href="#" class="text-white">Lemon, Lime &amp; Bitters</a></h3>
                  <p class="text-white text-opacity-7">Far far away, behind the word mountains, far from the countries
                    Vokalia and Consonantia, there live the blind texts.</p>
                </div>
              </div>
            </div>
          </div> <!-- .tab-pane -->
        </div>
      </div>
    </div>
  </section>

  <!-- END section -->

  <!-- END slider -->


  <section class="section blog-post-entry bg-light" id="section-events">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Events</h2>
          <p data-aos="fade-up">Explore our diverse events, from cultural programs to wildlife safaris. Each event is
            designed to provide unique experiences, making your stay at our hotel truly unforgettable.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="100">

          <div class="media media-custom d-block mb-4 h-100">
            <img src="images/event1.jfif" alt="Image placeholder"
                class="img-fluid">
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3">Tharu Cultural Program</h2>
              <p>Dive into our Tharu Cultural Program! Experience rich traditions, vibrant dances, and captivating
                music. A mesmerizing journey into Nepal’s heritage awaits you!</p><a href="events.php#event1">
                <div class="btn btn-dark">See More</div>
              </a>
            </div>

          </div>

        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="200">
          <div class="media media-custom d-block mb-4 h-100">
            <img src="images/event5.jpg " alt="Image placeholder"
                class="img-fluid"></a>    
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3">Elephant Ride</h2>
              <p>Experience the thrill of our Elephant Ride event! Journey through scenic landscapes atop these gentle
                giants. A unique, unforgettable adventure in nature awaits you!</p>
              <a href="events.php#event5">
                <div class="btn btn-dark">See More</div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 col-sm-6 col-12 post" data-aos="fade-up" data-aos-delay="300">
          <div class="media media-custom d-block mb-4 h-100">
            <img src="images/event4.jfif" alt="Image placeholder"
                class="img-fluid">
            <div class="media-body">
              <span class="meta-post">February 26, 2018</span>
              <h2 class="mt-0 mb-3">Jeep Safari</h2>
              <p>Join our thrilling Jeep Safari event! Traverse rugged terrains, encounter diverse wildlife, and soak in
                breathtaking views. An unforgettable journey of discovery awaits you!</p>
              <a href="events.php#event4">
                <div class="btn btn-dark">See More</div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact section start  -->
  <section class="section contact-section" id="section-contact">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up">Contact Us</h2>

        </div>
      </div>
      <div class="row">
        <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">

          <form method="post" id="contactForm" action="contact.php" class="bg-white p-md-5 p-4 mb-5 border">
            <div class="row">
              <div class="col-md-6 form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control ">
              </div>
              <div class="col-md-6 form-group">
                <label for="phone">Phone</label>
                <input type="text" name="phone" id="phone" class="form-control ">
              </div>
            </div>

            <div class="row">
              <div class="col-md-12 form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control ">
              </div>
            </div>
            <div class="row mb-4">
              <div class="col-md-12 form-group">
                <label for="message">Write Message</label>
                <textarea name="message" name="message" id="message" class="form-control " cols="30"
                  rows="8"></textarea>
              </div>
            </div>

            <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>
            <br>
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="submit" value="Send Message" class="btn btn-primary text-white font-weight-bold">
                <div class="submitting"></div>
              </div>
            </div>
          </form>

          <script>
            document.addEventListener("DOMContentLoaded", function () {
              var form = document.getElementById("contactForm");

              form.addEventListener("submit", function (event) {
                var name = document.getElementById("name").value.trim();
                var phone = document.getElementById("phone").value.trim();
                var email = document.getElementById("email").value.trim();
                var message = document.getElementById("message").value.trim();

                // Basic validation
                if (name === "" || phone === "" || email === "" || message === "") {
                  alert("Please fill in all the fields");
                  event.preventDefault(); // Prevent form submission
                }
              });
            });
          </script>



        </div>
        <div class="col-md-5" data-aos="fade-up" data-aos-delay="200">
          <div class="row">
            <div class="col-md-10 ml-auto contact-info">
              <p><span class="d-block">Address:</span> <span class="text-black">Chitwan National Park, Sauraha
                  NepaL</span></p>
              <p><span class="d-block">Phone:</span> <span class="text-black"> (+977) 984 552 3406</span></p>
              <p><span class="d-block">Email:</span> <span class="text-black"> landhoteltree@gmail.com</span></p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- contact section end  -->
  <section class="section bg-image overlay" style="background-image: url('images/bannner.jfif');">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
          <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
        </div>
        <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
          <!-- Extra large modal -->
          <a href="#" class="btn btn-outline-white-primary py-3 text-white px-5" data-toggle="modal"
            data-target="#reservation-form">Reserve Now</a>
        </div>
      </div>
    </div>
  </section>
  <!-- footer started  -->
  <footer class="section footer-section">
    <div class="container">
      <div class="row mb-4">
        <div class="col-md-3 mb-5">
          <ul class="list-unstyled link">
            <li><a href="#section-about">About Us</a></li>
            <li><a href="#" id="termsLink" data-toggle="modal" data-target="#termsModal">Terms &amp; Conditions</a></li>
            <li><a href="#" id="privacyLink" data-toggle="modal" data-target="#privacyModal">Privacy Policy</a></li>

          </ul>
        </div>
        <div class="col-md-3 mb-5">
          <ul class="list-unstyled link">
            <li><a href="#section-rooms">The Rooms &amp; Suites</a></li>
            <li><a href="#section-contact">Contact Us</a></li>
            <li><a href="#section-menus">Restaurant</a></li>
          </ul>
        </div>
        <div class="col-md-3 mb-5 pr-md-5 contact-info">
          <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
          <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span>Chitwan
            National Park <span>Sauraha Nepal </span></p>
          <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span>
            <span>(+977) 984 552 3406</span>
          </p>
          <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span>
              landhoteltree@gmail.com</span></p>
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
          <script>document.write(new Date().getFullYear());</script> All rights reserved Tree Land Lodge | Made with <i
            class="fa fa-heart text-primary" aria-hidden="true"></i> by <a href="https://tivrasoft.com/" target="_blank"
            class="font-weight-bold">Tivra Soft</a>

          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>

        <p class="col-md-4 text-right social">
          <a href="#"><span class="fa fa-tripadvisor"></span></a>
          <a href="https://www.facebook.com/profile.php?id=61554850798927" target="_blank"><span
              class="fa fa-facebook"></span></a>
          <a href="#"><span class="fa fa-twitter"></span></a>
          <a href="#"><span class="fa fa-linkedin"></span></a>
          <a href="#"><span class="fa fa-instagram"></span></a>

        </p>
        <div class="whatsapp-chat-bubble">
          <div class="whatsapp-chat-button">
            <a href="https://wa.me/9779845523406" target="_blank"><span><i class="bi bi-whatsapp"></i> Chat
                Now</span></a>

          </div>

        </div>

      </div>
    </div>
  </footer>
  <!-- footer end  -->

  <!-- Modal -->
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
            <strong>Reservation Policy:</strong> All reservations are subject to availability and confirmation. A valid
            credit card is required to secure your booking.
          </p>
          <p>
            <strong>Cancellation Policy:</strong> Cancellations must be made at least 48 hours prior to the check-in
            date to avoid charges. Late cancellations and no-shows will be charged for the first night.
          </p>
          <p>
            <strong>Check-in/Check-out:</strong> Check-in time is 2:00 PM, and check-out time is 11:00 AM. Early
            check-in and late check-out are subject to availability and may incur additional charges.
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
            <strong>Information Collection:</strong> We collect personal information, including your name, contact
            details, and payment information, to process reservations and provide services.
          </p>
          <p>
            <strong>Use of Information:</strong> Your information is used to process reservations, personalize your
            experience, and communicate important updates about your stay.
          </p>
          <p>
            <strong>Security:</strong> We prioritize the security of your data and have implemented measures to
            safeguard against unauthorized access.
          </p>
          <!-- Add more privacy policy details as needed -->
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade " id="reservation-form" tabindex="-1" role="dialog" aria-labelledby="reservationFormTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">

        <div class="modal-body">
          <div class="row">
            <div class="col-md-12" data-aos="fade-up" data-aos-delay="100">

              <form action="reservation.php" method="post" class="bg-white p-4">
                <div class="row mb-4">
                  <div class="col-12">
                    <h2>Reservation</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label class="text-black font-weight-bold" for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control " required>
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="text-black font-weight-bold" for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-control " required
                      placeholder="+977 XXXXXXXXXX">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12 form-group">
                    <label class="text-black font-weight-bold" for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control " required
                      placeholder="abc@example.com">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-6 form-group">
                    <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
                    <input type="text" name="checkin_date" id="checkin_date" class="form-control">
                  </div>
                  <div class="col-md-6 form-group">
                    <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
                    <input type="text" name="checkout_date" id="checkout_date" class="form-control">
                  </div>
                </div>

                <!-- Adults -->
                <div class="row">
                  <div class="col-md-6 form-group">
                    <label for="adults" class="font-weight-bold text-black">Adults</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select id="adults" name="adults" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4+</option>
                      </select>
                    </div>
                  </div>

                  <!-- Children -->
                  <div class="col-md-6 form-group">
                    <label for="children" class="font-weight-bold text-black">Children</label>
                    <div class="field-icon-wrap">
                      <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                      <select id="children" name="children" class="form-control">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4+">4+</option>
                      </select>
                    </div>
                  </div>

                </div>

                <div class="row mb-4">
                  <div class="col-md-12 form-group">
                    <label for="message">Write Message</label>
                    <textarea name="message" name="message" id="message" class="form-control " cols="30"
                      rows="8"></textarea>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Reserve Now"
                        class="btn btn-primary text-white py-3 px-5 font-weight-bold">
                    </div>

                  </div>

                </div>
              </form>
              

            </div>

          </div>
        </div>

      </div>
    </div>
  </div>

  <?php 
  if(isset($_GET['update']) && $_GET['update']==true){
    echo "<script>window.alert('Password Updated Successfully!')</script>";
  }
  ?>
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