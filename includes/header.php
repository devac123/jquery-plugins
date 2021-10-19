<?php
  include $_SERVER["DOCUMENT_ROOT"].'/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modern Web Template - 2021 </title>

    <!-- ---------- favicon img ---------- -->
    <link rel="shortcut icon" href="<?php echo $root; ?>/assets/img/favicon.png" type="image/x-icon">


    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
     
    <!-- ==========> plugins -->
    <link rel="stylesheet" href="<?php echo $root; ?>/assets/plugins/aos/aos.css">


    <!-- -------------------font-awsome---------------- -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.1/css/all.min.css"/>


    <!-- ---------- bootstrap css ---------- -->
    <link rel="stylesheet" href="<?php echo $root; ?>/assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $root; ?>/assets/fonts/bootstrap-icons/bootstrap-icons.css">



    <!-- ---------- custom css ---------- -->
    <link rel="stylesheet" href="<?php echo $root; ?>/assets/css/style.css">

</head>

<body>

    <!-- ========= Top bar ======== -->
    <section class="topbar">
        <div class="container d-flex justify-content-between">
            <div class="contact-info">
                <i class="bi bi-envelope"><a href="mailto:fightereturn@gmail.com"></i><span>contact@example.com
                </span></a>
                <i class="bi bi-phone social-links-a"></i><span>+1 5589 55488 55</span>
            </div>
            <div class="social-links">
                <a href="" class="social-links-a"><i class="bi bi-twitter"></i></a>
                <a href="" class="social-links-a"><i class="bi bi-facebook"></i></a>
                <a href="" class="social-links-a"><i class="bi bi-instagram"></i></a>
                <a href="" class="social-links-a"><i class="bi bi-linkedin"></i></a>
            </div>
        </div>
    </section>
<!-- ================head====== -->
    <header id="header" class="navigation">
         <div class="container">
             <nav  class="navbar">    
                   <div class="nav-logo">
                       <img src="<?php echo $root; ?>/assets/img/logo.png" alt="">
                   </div>
                   <div class="nav-menu">
                       <ul class=" mb-0 text-none d-flex justify-content-center align-items-center normal-font">
                           <li class="nav-list-item">Home</li>
                           <li class="nav-list-item">About</li>
                           <li class="nav-list-item">Services</li>
                           <li class="nav-list-item">Portfolio</li>
                           <li class="nav-list-item">Testimonial</li>
                       </ul>
                       <i class="bi bi-list mobile-nav-toggle"></i>
                   </div>
             </nav>
         </div>
    </header>