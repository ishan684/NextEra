<?php
session_start();
?>

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

</head>

<body class="d-flex align-items-center">

    <div class="col-md-4 mt-5 mb-4 p-2 border rounded bg-transparent mx-auto justify-content-center">
        <form action="userlogin.php" method="post">
            <!-- Form Group -->
            <div class="form-group">
                <label for="username"><i class="bi bi-person-circle"></i> Username:</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Username">
            </div>
            <!-- Form Group -->
            <!-- Form Group -->
            <div class="form-group">
                <label for="password"><i class="bi bi-lock"></i> Password:</label>
                <div class="input-group ">
                    <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    <div class="input-group-append">
                        <span class="input-group-text" id="showPasswordToggle">
                            <i class="bi bi-eye" aria-hidden="true"></i>
                        </span>
                    </div>
                </div>
            </div>

            <script>
                const passwordInput = document.getElementById('password');
                const showPasswordToggle = document.getElementById('showPasswordToggle');

                showPasswordToggle.addEventListener('click', () => {
                    if (passwordInput.type === 'password') {
                        passwordInput.type = 'text';
                        showPasswordToggle.innerHTML = '<i class="bi bi-eye-slash" aria-hidden="true"></i>';
                    } else {
                        passwordInput.type = 'password';
                        showPasswordToggle.innerHTML = '<i class="bi bi-eye" aria-hidden="true"></i>';
                    }
                });
            </script>

            <!-- Google reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Leei2AoAAAAAFcQOfwIcx4kCHg8FbHdMOKexmZB"></div>

            <!-- Form Buttons -->
            <button type="submit" class="btn btn-warning"><i class="bi bi-person"></i> Login</button>
            <button type="reset" class="btn btn-danger"><i class="bi bi-x-circle"></i> Cancel</button>
            <div class="form-group mt-3">
                <a href="forgot-password.php" class="btn btn-primary btn-block">Forgot Password?</a>
            </div>
            <div class="form-group mt-3">
                <a href="usersignup.php" class="btn btn-success btn-block"><i class="bi bi-person-plus"></i>Create New Account</a>
            </div>

        </form>
        <?php
        include "connection.php";

        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['g-recaptcha-response'])) {
            $secretkey = "6Leei2AoAAAAAIhxCM6r-o5TquBrZyHWQyLYAQtg";
            $ip = $_SERVER['REMOTE_ADDR'];
            $response = $_POST['g-recaptcha-response'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretkey&response=$response&remoteip=$ip";
            $request = file_get_contents($url);
            $data = json_decode($request);

            $a = $_POST['username'];
            $b = md5($_POST['password']);

            if (empty($a) || empty($b)) {
                echo "<div class='alert alert-warning mt-3'> Some fields are empty! </div>";
            } else {
                $query = "SELECT * FROM users WHERE username='$a' AND password='$b'";
                $run = mysqli_query($conn, $query);

                if (mysqli_num_rows($run) > 0) {
                    $_SESSION['username'] = $a;
                    echo "
        <script>window.open('userindex.php', '_self')</script>";
                } else {
                    echo "<div class='alert alert-danger mt-3'> Invalid User! </div>";
                }
            }
        }
        ?>
    </div>
</body>

</html>