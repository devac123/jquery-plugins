<?php
include "includes/header.php";
include "conn.php";
?>


<!-- ============= home Started ============== -->
<section class="home d-flex align-items-center" id="home">
    <div class="container hero-content" data-aos="zoom-out" data-aos-delay="100">
        <h1 class="home-h1">
            Modern Web <span class="temp-2021">Template - 2021</span>
        </h1>
        <h2 class="home-h2">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Perferendis, aut.
        </h2>
        <div class="d-flex text-none">
            <a href="#" class="btn btn-primary get-started">GET STARTED</a>
            <a href="#" class="text-none btn-watch-video d-flex align-items-center">
                <i class="bi bi-play-circle d-inline-block  btn-watch-video-i"></i>
                <span>Watch Video</span>
            </a>
        </div>
    </div>
</section>
<!-- ============= home ended ============== -->

<main>
    <!-- ====================featured service start====================== -->
    <section id="featured-service" class="featured-service">
        <div class="container" data-aos="fade-up">
            <div class="row justify-content-center ">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="content" >
                        <i class="fas fa-basketball-ball fa-4x d-block blue service-icon"></i>
                        <h4 class="title">Lorem Ipsum</h4>
                        <p>Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="content" >
                        <i class="far fa-file-alt fa-4x d-block blue service-icon"></i>
                        <h4 class="title">Sed ut perspiciatis</h4>
                        <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="content" >
                        <i class="fas fa-tachometer-alt fa-4x d-block blue service-icon"></i>
                        <h4 class="title">Magni Dolores</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 " data-aos="fade-up" data-aos-delay="400">
                    <div class="content" >
                        <i class="fas fa-globe-americas fa-4x d-block blue service-icon"></i>
                        <h4 class="title">Magni Dolores</h4>
                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ====================featured service end====================== -->

    <!-- ======================about-us start ============================= -->
    <section class="about-us" id="about-us">
        <div class="container">
            <div class="section-title">
                <div class="about-title d-flex justify-content-center"><h2 class="text-center d-inline-block">ABOUT</h2></div>
                <h3 class="text-center">Find More
                     <span id ="typed-strings">
                         <span>About US</span>
                        </span>
                        <span class="blue" id="typed"></span>
                </h3> 
                <p class="text-center">Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>
            </div>
        </div>
    </section>
    <!-- ======================about-us end ============================= -->
</main>


<?php
include "includes/footer.php";
?>