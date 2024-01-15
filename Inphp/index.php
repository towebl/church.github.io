<?php 

    include_once 'mail.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="church.css">
    <link href="https://my.spline.design/untitled-ad71fcfdc1491dcd046f5616aa0d147c/">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <title>Tast good</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylsheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer"
    />

    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!-- Font Link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Roboto:ital@1&display=swap" rel="stylesheet">

    <!-- Swiper link -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!-- Google fonts cdn link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link href="https://prod.spline.design/QHqyOPL7rJ3AC9wa/scene.splinecode">
    <script src="https://code.iconify.design/iconify-icon/1.0.0-beta.3/iconify-icon.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">


</head>
<body>

    <!-- Header section -->
    <header class="header">
        <a href="#" class="logo">Portfolio..</a>

        <nav class="navbar">
            <a href="./index.html">Home</a>
            <a href="./about.html">About</a>
            <a href="./contact.html" class="active">Contact</a>
        </nav>

        <div class="bx bx-moon" id="darkMode-icon"></div>

        <div class="bx bx-menu" id="menu-icon"></div>
    </header>

    <div class="top-home">
        <div class="titles">
            <h1>Contact Page</h1>
        </div>
    </div>





    <!-- contact start -->
    <section class="contact" id="contact">
        <h2 class="section_header">Contact <span>Me!</span></h2>

        <form action="#" onsubmit="sendEmail(); reset(); return false;">
            <div class="input-box">
                <input type="text" id="fullName" placeholder="Full Name">
                <input type="email" id="email" placeholder="Email Address">
            </div>
            <div class="input-box">
                <input type="number" id="number" placeholder="Mobile Number">
                <input type="text" id="subject" placeholder="Email Subject">
            </div>
            <textarea name="" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
            <input type="submit" id="submit" value="Send Message" class="btn">
        </form>
    </section>
    <!-- contact end -->





    <!-- Footer start -->
    <section class="footer">

        <div class="box-container">

            <div class="box">
                <h3>Address</h3>
                <p>The best place to be treated in a good way is here!!</p>
                <div class="share">
                    <a href="#" class="bx bxl-facebook"></a>
                    <a href="#" class="bx bxl-twitter"></a>
                    <a href="#" class="bx bxl-instagram"></a>
                    <a href="#" class="bx bxl-whatsapp"></a>
                </div>
            </div>

            <div class="box">
                <h3>e-mail</h3>
                <a href="#" class="link">felixosis@gmail.com</a>
                <a href="#" class="link">felixosis@gmail.com</a>
            </div>

            <div class="box">
                <h3>Call us</h3>
                <p>011 234 5647</p>
                <p>011 234 5647</p>
            </div>

            <div class="box">
                <h3>Opening hours</h3>
                <p>Monday - Friday : 8:00 - 17:00 <br> Saturday - 9:00 - 15:00
                </p>
            </div>
        </div>

        <div class="credit">Created by <span>deripper</span> | all rights reserved </div>
    </section>





    <!-- footer design -->
    <footer class="foot">
        <div class="foot-text">
            <p>Copyright &copy; 2023 by WEBL | All Right Reserved.</p>
        </div>

        <div class="foot-iconTop">
            <a href="#home">
                <i class="bx bx-up-arrow-alt"></i>
            </a>
        </div>
    </footer>


</body>
</html>