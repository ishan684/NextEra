<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>TreeLand &mdash; Lodge and Hotel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Meta Tags for SEO -->
    <meta name="description"
        content="Experience comfort and luxury at TreeLand Lodge and Hotel, located in the heart of Sauraha, Chitwan. Explore Chitwan National Park and enjoy your stay in our hotel and lodge.">
    <meta name="keywords"
        content="TreeLand Lodge, Sauraha Chitwan, Chitwan National Park, hotel, lodge, luxury accommodation, wildlife, nature, Chitwan, Nepal">

    <link rel="stylesheet" type="text/css"
        href="//fonts.googleapis.com/css?family=|Roboto+Sans:400,700|Playfair+Display:400,700">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/fancybox.min.css">
    <link href="../images/favicon.png" rel="icon">
    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="path/to/whatsapp-chat-bubble.css">
    <link rel="stylesheet" href="css/adminformstyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="style.css"> <!-- New custom stylesheet for additional styling -->

    <!-- jQuery, Popper.js, Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <!-- Theme Style -->

    <script>
        // Password strength checking function
        function checkPasswordStrength(password) {
            const passwordStrengthDiv = document.getElementById('passwordStrength');
            
            // Define regex patterns for different strength levels
            const weakRegex = /^(?=.*[a-zA-Z]).{4,}$/; // At least one letter, 4 characters or more
            const moderateRegex = /^(?=.*[a-zA-Z])(?=.*\d).{6,}$/; // At least one letter and one digit, 6 characters or more
            const strongRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&]).{8,}$/; // At least one letter, one digit, and one special character, 8 characters or more

            if (strongRegex.test(password)) {
                passwordStrengthDiv.textContent = 'Strong';
                passwordStrengthDiv.style.color = 'green';
            } else if (moderateRegex.test(password)) {
                passwordStrengthDiv.textContent = 'Moderate';
                passwordStrengthDiv.style.color = 'orange';
            } else if (weakRegex.test(password)) {
                passwordStrengthDiv.textContent = 'Weak';
                passwordStrengthDiv.style.color = 'red';
            } else {
                passwordStrengthDiv.textContent = '';
            }
        }
    </script>

</head>

<body class="d-flex align-items-center">

    <div class=" col-md-4 mt-5 mb-4 p-2 border rounded bg-transparent mx-auto justify-content-center">
        <form action="" method="post">
            <!-- Form Group -->
            <div class="form-group">
                <label for="fname"><i class="bi bi-person"></i> First Name:</label>
                <input type="text" class="form-control" name="fname" id="fname" placeholder="First Name">
            </div>
            <!-- Form Group -->
            <div class="form-group">
                <label for="lname"><i class="bi bi-person"></i> Last Name:</label>
                <input type="text" class="form-control" name="lname" id="lname" placeholder="Last Name">
            </div>
            <!-- Form Group -->
            <div class="form-group">
                <label for="username"><i class="bi bi-person-circle"></i> Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <!-- Form Group -->
            <div class="form-group">
                <label for="password"><i class="bi bi-lock"></i> Password: <span id="passwordStrength" class="mt-2"></span></label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Password"
                    oninput="checkPasswordStrength(this.value)">
                
            </div>  
            <!-- Form Group -->
            <div class="form-group">
                <label for="cpassword"><i class="bi bi-lock"></i> Confirm Password:</label>
                <input type="password" class="form-control" name="cpassword" id="cpassword"
                    placeholder="Confirm Password">
            </div>
            <!-- Google reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>

            <!-- Form Buttons -->
            <button type="submit" class="btn btn-warning"><i class="bi bi-person-plus"></i> Sign Up</button>
            <button type="reset" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancel</button>
            <a href="userlogin.php" class="btn btn-success"><i class="bi bi-box-arrow-in-right"></i> Log in</a>
            <?php
                include "connection.php";
                if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
                    $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
                    $ip = $_SERVER['REMOTE_ADDR'];
                    $response = $_POST['g-recaptcha-response'];
                    $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
                    $request = file_get_contents($url);
                    $data = json_decode($request);
                    $a = $_POST['fname'];
                    $b = $_POST["lname"];
                    $c = $_POST["username"];
                    $d = md5($_POST["password"]); //md5 is used to make the text cipher 
                    $e = md5($_POST["cpassword"]);
    
                    if ($data->success == false) {
                        echo "<div class='alert alert-danger mt-3'>Fill Recaptcha</div>";
                    }
                    if ($a == "" || $b == "" || $c == "" || $d == "" || $e == "") {
                        //echo "Please fill all fields.";
                        echo "<div class='alert alert-danger mt-3'>Some fields are empty</div>";
                        //echo "<script>window.alert('Some fields are empty!')</script>";
                
                    } else if ($d != $e) {
                        echo "<div class='alert alert-danger mt-3'>Password do not match</div>";
                    } else {
    
                        $query = "insert into users(first_name, last_name, username, password)
                                     values('$a','$b','$c','$d')";
                        $run = mysqli_query($conn, $query);
                        if ($run) {
                            echo "<div class='alert alert-success mt-3'>Sign up successfull</div>";
                        } else {
                            echo "<div class='alert alert-success mt-3'>Error found! </div>";
                        }
                    }
    
                }
                ?>
        </form>

    </div>
   


</body>

</html>