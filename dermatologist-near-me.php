<?php $Page = "about"; ?>
<?php include("inc/head.php"); ?>
<?php include("inc/meta.php"); ?>
<?php include("inc/css.php"); ?>
<?php include("inc/slick-carousel.php"); ?>

<!-- Include jQuery (ensure it's loaded before Slick) -->
<!-- Swiper CSS -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://www.google.com/recaptcha/api.js?render=6Lflm-8qAAAAANZo3C-6NVWquw-zaZ88g244O6T5"></script>
<script src="./assets/form_captcha/captcha.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<header class="">
    <div class="Lp_header container logo d-flex justify-content-between align-items-center py-4">

        <a class="navbar-brand pageLink m-0 flex-row align-items-center" href="/">
            <img src="assets/templates/img/logo-angel-health-centre.png" class="img-fluid" alt="">
            <div class="logo-txt border-left px-3">Health & Aesthetics Clinic</div>
        </a>
        <div class="d-flex align-items-center flex-wrap " style="gap: 20px;">

            <div class="number d-flex justify-content-center align-items-center">
                <div>
                    <i class="fa fa-mobile mobile " aria-hidden="true"></i>
                </div>
                <div style="line-height: 1;">
                    <a class="num headerFont" href="tel:+91 90042 64646">+91 90042 64646</a>
                    <a class="Cicon px-3 py-1" href="tel:+91 90042 64646"><i class="fa fa-phone shake-icon" aria-hidden="true"></i> </a>
                    <a onclick="openModal()" class="" href="javascript:void(0);" id="getStartedBtn">
                        <span class="menu-text cnsltNow text-center headerFont">Book Appointment</span>
                    </a>

                </div>

            </div>
            <div class="d-flex align-items-center gap10 locat">
                <i class="fa fa-map-marker location" aria-hidden="true"></i>

                <a class="headerFont" href="" style="line-height: 1;">
                    912, Maker Chambers 5, <br>
                    Nariman Point, Mumbai, <br>

                </a>
            </div>
            <!-- <a onclick="openModal()" class="ctabtn py-1" href="javascript:void(0);" id="getStartedBtn">
                <span class="menu-text">CONSULTANT NOW</span>
            </a> -->
        </div>
    </div>

</header>
<?php include("inc/header.php"); ?>
<link rel="stylesheet" href="assets/about/about.css">
<link rel="stylesheet" href="assets/contact/contact.css">
<link rel="stylesheet" href="assets/services/services.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"> -->
<!-- include("inc/header.php");  -->

<style>
    @keyframes shake {
        10% {
            transform: translateX(3px) rotate(2deg);
        }

        20% {
            transform: translateX(-3px) rotate(-2deg);
        }

        30% {
            transform: translateX(3px) rotate(2deg);
        }

        40% {
            transform: translateX(-3px) rotate(-2deg);
        }

        50% {
            transform: translateX(2px) rotate(1deg);
        }

        60% {
            transform: translateX(-2px) rotate(-1deg);
        }

        70% {
            transform: translateX(2px) rotate(1deg);
        }

        80% {
            transform: translateX(-2px) rotate(-1deg);
        }

        90% {
            transform: translateX(1px) rotate(0);
        }

        100% {
            transform: translateX(-1px) rotate(0);
        }
    }

    .shake-icon {
        animation: shake 1s ease-in-out infinite;
        animation-delay: 1s;
    }

    .allHeader {
        display: none;
    }

    .Lp_header {
        position: sticky;
        top: 0;
    }

    .fw-bold {
        font-weight: 800;
    }

    .content {
        position: absolute;
        top: 30%;
        left: 3%;
        /* color: goldenrod; */
    }

    .cta-content {
        position: absolute;
        top: 30%;
        right: 0%;
        /* color: goldenrod; */
    }

    .content p,
    .cta-content p {
        font-size: 30px;
    }


    .ctabtn {
        color: var(--color-04);
        ;
        /* margin-left: 10px; */
        background: #EFC377;
        border-radius: 100px;
        padding: 15px 15px;
    }

    .ctabtn:hover {
        background-color: var(--color-04);
        color: white !important;


    }

    .ctabtn:hover {}

    .logo-txt {
        border-top: none !important;
    }

    .justify-content-evenly {
        justify-content: space-evenly;
    }

    .card {
        padding: 0 !important;
        margin: 10px;
        overflow: hidden;
        position: relative;
    }

    .card img {
        width: 100%;
        height: auto;
        transition: transform 0.3s ease;
    }

    .op {
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 100%;
        /* background: linear-gradient(to top, rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0)); */
        /* Darker at the bottom, lighter at the top */
        opacity: 0.7;
    }

    .card-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
        color: white;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
        text-align: center;
    }

    .card:hover img {
        transform: scale(1.1);
    }

    .card:hover .card-title {
        opacity: 0;
    }

    .card:hover .card-overlay {
        opacity: 1;
    }

    .card-title {
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        font-size: 1.5rem;
        margin-bottom: 20px;
        font-weight: bold;
        text-align: center;
        color: white;
        font-size: 40px;
    }

    .card-details {
        font-size: 2rem;
        margin-bottom: 20px;
        text-align: start;
        opacity: 0;
        /* Keep hidden initially */
        transform: translateY(20px);
        /* Make it slide up a bit */
        transition: opacity 0.3s ease, transform 0.3s ease;
    }

    .card-details ul {
        list-style-type: none;
        padding: 0;
        margin: 0;
    }

    .card-details li {
        opacity: 0;
        /* Initially hidden */
        transform: translateY(20px);
        /* Start from below */
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .card:hover .card-details {
        opacity: 1;
        transform: translateY(0);
        /* Slide up into position */
    }

    .card:hover .card-details li {
        opacity: 1;
        transform: translateY(0);
        /* Slide up into position */
    }

    /* Add delays to each li */
    .card:hover .card-details li:nth-child(1) {
        transition-delay: 0.1s;
    }

    .card:hover .card-details li:nth-child(2) {
        transition-delay: 0.2s;
    }

    .card:hover .card-details li:nth-child(3) {
        transition-delay: 0.3s;
    }

    .card:hover .card-details li:nth-child(4) {
        transition-delay: 0.4s;
    }

    ul li:after {
        content: "";
        position: absolute;
        top: 0px;
        left: -30px;
        width: 22px;
        height: 22px;
        background: url(assets/templates/img/star-list.png) no-repeat center center;
        background-size: cover;
    }

    .view-details {
        background-color: var(--color-04);
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.5s ease;
    }

    .view-details:hover {
        background-color: #EFC377;
    }

    .view-details:hover a {
        color: var(--color-04) !important;
    }

    .view-details a {
        color: white !important;
    }

    .btn-knowmore-05 {
        display: none !important;
    }

    /* Slider Container */
    .swiper-container {
        width: 100%;
        margin: 50px auto;
    }

    .swiper-slide {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 10px;
        box-sizing: border-box;
    }

    .swiper-slide iframe {
        width: 100%;
        /*height: 200px;*/
        border-radius: 10px;
        cursor: pointer;
    }

    /* Popup Video Style */
    .popup-video {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: rgba(0, 0, 0, 0.8);
        padding: 20px;
        border-radius: 10px;
        z-index: 100;
    }

    .popup-video iframe {
        width: 800px;
        height: 450px;
    }

    .popup-video .close-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        font-size: 20px;
        color: white;
        background: rgba(0, 0, 0, 0.7);
        border: none;
        cursor: pointer;
    }

    /* Make sure swiper-container has a width */
    .swiper-container {
        width: 100%;
        margin: 20px auto;
    }

    /* Ensure the swiper slides are displayed in the same row */
    .swiper-wrapper {
        display: flex;
        flex-wrap: nowrap;
    }

    .swiper-slide {
        width: auto;
        flex-shrink: 0;
        box-sizing: border-box;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .swiper-slide iframe {
        width: 100%;
        /*height: 200px;*/
        border-radius: 10px;
    }

    .swiper-button-next i,
    .swiper-button-prev i {
        font-size: 40px;
        cursor: pointer;
    }

    .tl_box {
        justify-content: flex-start !important;
        /* min-height: auto !important; */
    }

    section.services-sec-04 .np-content .treatment-list .tl_box .t_heading {
        min-height: auto !important;
        padding-bottom: 10px;
    }

    /* Style for the disabled button */
    .form-components-style_form-button-submit__ZzOBZ {
        background-color: #ccc;
        cursor: not-allowed;
    }

    /* Style for the enabled button */
    .form-components-style_form-button-submit__ZzOBZ.enabled {
        background-color: #007bff;
        /* Change background color to active state */
        cursor: pointer;
    }

    /* Modal (background) */
    .modal {
        display: none;
        /* Hidden by default */
        position: fixed;
        z-index: 1;
        /* Sit on top */
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgb(0, 0, 0);
        /* Fallback color */
        background-color: rgba(0, 0, 0, 0.4);
        /* Black with opacity */
        /* padding-top: 60px; */
    }

    /* Modal Content */
    .modal-content {
        background-color: #fff;
        margin: 5% auto;
        padding: 20px;
        border: 1px solid #888;
        width: 90%;
        max-width: 600px;
    }

    /* The Close Button */
    .close {
        color: #aaa;
        float: right;
        font-size: 28px;
        font-weight: bold;
    }

    .close:hover,
    .close:focus {
        color: black;
        text-decoration: none;
        cursor: pointer;
    }

    #formz-wrapper {
        max-width: 100%;
    }

    .number,
    .gap10 {
        /* border: 2px solid #622863; */
        /* border-radius: 100px;     */
        gap: 10px;
    }

    .number a,
    a {
        color: #622863;
    }

    .Cicon {
        display: none;
    }

    .num {
        display: block;
    }

    A:hover {
        text-decoration: none !important;
    }

    .cnsltNow {
        font-size: 10px;
    }

    .location,
    .mobile {
        font-size: 30px;
    }

    .headerFont {
        font-size: 14px;
    }

    .press img {
        filter: grayscale(100%);
        transition: filter 0.3s ease;
        /* Smooth transition for the color change */
    }

    .press img:hover {
        filter: grayscale(0%);
        /* Remove the grayscale on hover */
    }

    .viewPlan {
        padding: 0;
    }

    .desktopHero {
        display: block;
    }

    .mobileHero {
        display: none;
    }

    .swiper-pagination-bullet-active {
        background-color: var(--color-04);
        font-size: 15px;
    }

    .swiper-wrapper {
        -webkit-transition-timing-function: linear !important;
        transition-timing-function: linear !important;
    }


    .swiper-slide {
        width: 200px;
        /*height: 200px;*/
        text-align: center;
        font-size: 33px;
        display: flex;
        justify-content: center;
        align-items: center;
        position: relative;
        overflow: hidden;
        padding: 0 50px;
    }


    @media (max-width:1120px) {
        .content {
            top: 15%;
        }
    }

    @media (max-width:941px) {
        .content p {
            font-size: 25px;
        }
    }

    @media (max-width:991px) {
        header {
            position: fixed !important;
        }

        .banerCont {
            padding: 0;
            margin: 0;
        }

        .cta-content {
            top: 20%;
        }

        .cta-content p {
            font-size: 16px;
        }
    }

    @media (max-width: 768px) {
        .press img {
            filter: none !important;
        }

        .number {
            gap: 0 !important;
        }

        .content {
            top: 17%;
        }

        .cta-content {
            top: 17%;
        }

        .num {
            display: none;
        }

        .Cicon {
            display: block;
        }

        .menu-text {
            font-size: 16px;
        }

        .locat {
            display: none !important;
        }

        .cnsltNow {
            display: none !important;
        }

        .number {
            border: 2px solid #622863;
            border-radius: 100px;
        }

        .number .mobile {
            display: none;
        }
    }

    @media (max-width: 867px) {
        .content {
            top: 17%;
        }

        .content p {
            font-size: 16px;
        }
    }

    @media (max-width: 600px) {
        .desktopHero {
            display: none;
        }

        .mobileHero {
            display: block;
        }

        .menu-text {
            font-size: 20px;
        }


        .content p {
            font-size: 27px;
            margin-bottom: 15px;
        }

        .cta-content {
            width: 100% !important;
        }

        .cta-content p {
            font-size: 24px !important;
            /* margin-bottom: 0; */

        }

        .ctabtn {
            padding: 13px 20px;
            /* font-size: 10px; */
        }

        .content {
            top: 20%;
        }

        .cta-content {
            top: 20%;
        }

        .cta-book {
            font-size: 15px !important;
        }

        /* .logo {
            justify-content: start !important;
            } */

        .navbar-brand .logo-txt {
            font-size: 10px;
        }

        .mapCont {
            width: 100% !important;
            margin: 0 !important;
            padding: 0 !important;
        }

        section.contact-sec-03 ul.c_list li {
            padding: 7px 0px 7px 22px;
            position: relative;
        }

        .navbar-brand {
            flex-wrap: wrap;
        }

        .number {
            width: 50px;
            height: 50px;
            border-radius: 100px;
        }



        .logo {
            padding: 10px 0 !important;
        }

        .navbar-brand img {
            max-width: 100px !important;
        }

        .navbar-brand .logo-txt {
            padding: 0 !important;
            border-top: 1px solid #ccc !important;
            border-left: none !important;
        }
    }

    @media (max-width:558px) {
        .content {
            top: 10%;
        }

        .content p {
            font-size: 20px;
        }
    }

    @media (max-width:485px) {
        .cta-content {
            top: 15%;
        }

        /*
        .cta-content p {
        font-size: 15px;
        } */
    }

    @media (max-width:435px) {
        .menu-text {
            font-size: 15px;
        }

        /* .cta-book {
        font-size: 12px !important;
        } */

        .content {
            top: 10%;
        }

        .content p {
            font-size: 17px;
        }

        .cta-content {
            top: 10%;
        }

        .number {
            height: 35px;
            width: 35px;

        }

        .number a {
            padding: 0 !important;
            margin: 0 auto !important;

        }
    }

    @media (max-width:333px) {
        .content {
            top: 5%;
        }

        .cta-book {
            font-size: 15px !important;
        }

        .content p {
            font-size: 16px;
        }
    }

    #myModal {
        /* overflow: hidden; */
        position: fixed;
        padding-top: 100px;
    }
</style>

<!-- <div id="scrollsmoother-container" data-scroll-container> -->

<div class="page-wrp overflow-visible  position-static">
    <section class="banerCont pt-5 mt-5 about-sec-hero ">
        <div class="position-relative ">
            <img class="w-100 hBanner desktopHero" src="assets/landing/4320x1500.jpg" alt="banner">
            <img class="w-100 hBanner mobileHero" src="assets/landing/Mobile-size-Banner-750x850.jpg" alt="banner">
            <div class="content w-50 ">
                <p class="fw-bold m-0 p-0 text-left">Transforming Beauty & Wellness with over 30+ Years of Expertise</p>
                <p class="text-left pb-3">India’s Leading Aesthetic Dermatologist | Trusted by Celebrities & Professionals</p>
                <a onclick="openModal()" class="ctabtn" href="javascript:void(0);" id="getStartedBtn">
                    <span class="menu-text">Get Started</span>
                </a>
            </div>
        </div>
    </section>



    <section class="aboutDR container py-5 services-sec-04">
        <h2 class="pt-4 text-center">About Dr Pornima Mhatray</h2>

        <div class="np-content grid portfolioContainer justify-content-center">

            <div class="color-shape treatment-list col-md-6 skin-health">
                <div class="overlay_01"></div>
                <div class="tl_box">
                    <div class="t_heading">
                        <h4 class="fw-bold">The Expert Behind the Name </h4>
                    </div>
                    <!-- <div class="t_para">
                        <p>Our comprehensive acne treatment targets breakouts at the root, addressing inflammation and preventing future eruptions. Through a combination of advanced skincare techniques and personalized treatment plans, we restore clarity and confidence to your complexion.</p>
                    </div> -->
                    <ul class="t_list">
                        <!-- <li>Director & Chairperson, Gorgeous Skin Pvt. Ltd.</li> -->
                        <li>One of India’s Leading Cosmetic Dermatologists</li>
                        <li>Pioneer of Autologous Fat Transplantation for Wrinkle Treatment</li>
                        <li>Internationally Trained at Fairview Cosmetic Surgery Centre, Toronto</li>
                        <li>Over 30 years of experience in Dermatology & Aesthetic Medicine</li>
                        <li>Founder of Gorgeous Skin & Nutrition Training Academy</li>

                    </ul>

                </div>
            </div>

            <div class="color-shape treatment-list col-md-6 cosmetic-corrections ">
                <div class="overlay_01"></div>
                <div class="tl_box">
                    <div class="t_heading">
                        <h4 class="fw-bold">Achievements & Accolades</h4>
                    </div>
                    <ul class="t_list">
                        <li>Official Beauty & Wellness Expert for:</li>
                        <li>Femina Miss India 2009, 2010</li>
                        <li>Grazia Ford Supermodel of the World India 2008</li>
                        <li>Internationally Trained at Fairview Cosmetic Surgery Centre, Toronto</li>
                        <li>Scooty Teen Diva India International 2008</li>
                        <li>Trained Thousands of Doctors & Aesthetic Professionals</li>

                    </ul>
                </div>
            </div>

            <div class="color-shape treatment-list col-md-6 hormonal-issues">
                <div class="overlay_01"></div>
                <div class="tl_box " style="min-height: auto;">
                    <div class="t_heading">
                        <h4 class="fw-bold">Guest Speaker at Prestigious Events</h4>
                    </div>
                    <ul class="t_list">
                        <li>FICCI Incredible India Wellness 2011</li>
                        <li>International Cosmoderm Congress</li>
                        <li>Speaker & Workshop Mentor at Global Conferences</li>

                    </ul>
                </div>
            </div>

            <div class="color-shape treatment-list col-md-6 for-men">
                <div class="overlay_01"></div>
                <div class="tl_box " style="min-height: auto;">
                    <div class="t_heading">
                        <h4 class="fw-bold">Active Member & Leadership Roles</h4>
                    </div>
                    <ul class="t_list">
                        <li>Cosmetology Society of India (Certified Life Member)</li>
                        <li>Medical Wing President, Giants International, Mumbai</li>
                    </ul>
                </div>
            </div>
        </div>

    </section>

    <div class="concern ">
        <h1 class="pb-4 text-center">Concerns</h1>
        <div class="row justify-content-center">

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/Skin-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Skin</div>
                <div class="card-overlay">
                    <div class="card-details">
                        <ul class="position-relative">
                            <li class="position-relative">Acne</li>
                            <li class="position-relative">Pigmentation</li>
                            <li class="position-relative">Lightening</li>
                            <li class="position-relative">Wrinkle Erase</li>
                        </ul>
                    </div>
                    <button class="view-details"><a href="skin.php">Explore</a></button>
                </div>
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/933x750-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Hair</div>
                <div class="card-overlay">
                    <div class="card-details">
                        <ul>
                            <li>Hair Transplant</li>
                            <li>Mane Revival</li>
                            <li>Bald Patches</li>
                            <li>Hairline Correction</li>
                        </ul>
                    </div>
                    <button class="view-details"><a href="hair.php">Explore</a></button>
                </div>
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/Weight-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Weight</div>
                <div class="card-overlay">
                    <div class="card-details">
                        <ul>
                            <li>Tummy Tuck</li>
                            <li>Thighs Tuck</li>
                            <li>Arms Tuck</li>
                            <li>Gynecomastia</li>
                        </ul>

                    </div>
                    <button class="view-details"><a href="weight.php">Explore</a></button>
                </div>
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/Health-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Health</div>
                <div class="card-overlay">
                    <div class="card-details">
                        <ul>
                            <li>Reverse Diabetes</li>
                            <li>Thyroid Hormones</li>
                            <li>PCOD</li>
                            <li>Obesity</li>
                        </ul>
                    </div>
                    <button class="view-details"><a href="health.php">Explore</a></button>
                </div>
            </div>
        </div>
    </div>




    <section class="clients container ">
        <div class="press pt-3">
            <h4 class="text-center">As seen in</h4>

            <?php
            $press = [
                ['img' => '1972.png', 'alt' => 'Image 1 Description'],
                ['img' => 'Mid-day.jpg', 'alt' => 'Image 2 Description'],
                ['img' => 'Bhunjadh-sabhayar.png', 'alt' => 'Image 3 Description'],
                ['img' => 'BombayTimes.jpg', 'alt' => 'Image 3 Description'],
                ['img' => 'CDSI.png', 'alt' => 'Image 3 Description'],
                ['img' => 'Cosmoderm.png', 'alt' => 'Image 3 Description'],
                ['img' => 'CPRA.png', 'alt' => 'Image 3 Description'],
                ['img' => 'Femina.png', 'alt' => 'Image 3 Description'],
                ['img' => 'Ford-models.png', 'alt' => 'Image 3 Description'],
                ['img' => 'ICCE.png', 'alt' => 'Image 3 Description'],
                ['img' => 'Miss-Teen-Diva.png', 'alt' => 'Image 3 Description'],
                ['img' => 'Pantaloons.png', 'alt' => 'Image 3 Description'],
                ['img' => 'Saffrons.png', 'alt' => 'Image 3 Description'],
                ['img' => 'The-Times-of-india.png', 'alt' => 'Image 3 Description']
            ];
            ?>

            <!-- Swiper for Mobile (Only visible on mobile, d-md-none) -->
            <div class="swiper-container d-md-none">
                <div class="swiper-wrapper">
                    <?php foreach ($press as $press_item): ?>
                        <div class="swiper-slide">
                            <img src="assets/landing/logo/<?= $press_item['img'] ?>" class="img-fluid" alt="<?= $press_item['alt'] ?>">
                        </div>
                    <?php endforeach; ?>
                </div>
                <!-- Swiper Pagination (dots) -->
                <div class="swiper-pagination"></div>
            </div>

            <!-- Desktop Grid (Visible only on larger screens) -->
            <div class="row justify-content-center align-items-center py-3 d-none d-md-flex">
                <?php foreach ($press as $press_item): ?>
                    <div class="d-flex justify-content-center col-4 col-sm-3 col-md-2 col-lg-2 px-0 py-4">
                        <img src="assets/landing/logo/<?= $press_item['img'] ?>" class="img-fluid w-75" alt="<?= $press_item['alt'] ?>">
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>



    <script>
        // Initialize Swiper for mobile
        var swiper = new Swiper('.swiper-container', {
            // Optional parameters
            // slidesPerView: 5,
            spaceBetween: 0,
            centeredSlides: true,
            speed: 2000,
            autoplay: {
                delay: 0,
            },
            loop: true,
            slidesPerView: 'auto',
            allowTouchMove: false,
            disableOnInteraction: true,
        });
    </script>


    <!-- <section class="videos">
        <h2 class="text-center">Videos</h2>
        <?php
        $videoUrls = [
            "Are You Wedding-Ready Don’t Let Last-Minute Skin & Face Issues Steal the Spotlight H (20-02-2025).mp4",
            "videoplayback.mp4",
            "How to Restore Your Original Skin Tone H (20-02-2025).mp4",
            "videoplayback (1).mp4",
            "Why Is Your Hair Thinning Here’s What You Can Do to Regain H (20-02-2025).mp4",
            "How do these weight management treatments work to help individuals achieve their goals.mp4",
            "Is Baldness Threatening Your Wedding Day Confidence YT 09-12-2024.mp4",
            "Let’s Uncover the Truth Behind Hair Loss and What You Can Do About It (2).mp4",
            "Must-Have Treatments for Brides and Grooms Before the Big Day H (17-12-2024).mp4",
            "Wedding-Ready Contouring (H) 20-02-2025.mp4",
            "What strategies can be implemented to reverse diabetes H (20-02-2025).mp4",
            "Why Is Your Hair Thinning Here’s What You Can Do to Regain H (20-02-2025).mp4"
        ];
        ?>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <?php foreach ($videoUrls as $videoFile): ?>
                    <div class="swiper-slide" onclick="openPopup('<?php echo $videoFile; ?>')">
                        <video width="300" height="180" controls class="swiper-lazy">
                            <source src="assets/landing/video/<?php echo $videoFile; ?>" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex justify-content-center">
                <div class="swiper-button-next mx-2"><i class="fas fa-arrow-circle-left"></i></div>
                <div class="swiper-button-prev mx-2"><i class="fas fa-arrow-circle-right"></i></div>
            </div>
        </div>

        <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                // Initialize Swiper
                const swiper = new Swiper('.swiper-container', {
                    slidesPerView: 4, // Show 4 slides at a time
                    spaceBetween: 20,
                    loop: true,
                    navigation: {
                        nextEl: '.swiper-button-next',
                        prevEl: '.swiper-button-prev',
                    },
                    lazy: {
                        loadPrevNext: true, 
                        loadOnTransitionStart: true, 
                    },
                    ,
                    breakpoints: {
                        1200: {
                            slidesPerView: 4,
                            spaceBetween: 20,
                        },
                        768: {
                            slidesPerView: 3,
                            spaceBetween: 20,
                        },
                        480: {
                            slidesPerView: 2,
                            spaceBetween: 20,
                        },
                        300: {
                            slidesPerView: 1,
                            spaceBetween: 20,
                        },
                    },
                });
            });

           
            function openPopup(videoId) {
                const videoUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
                document.getElementById('popup-iframe').src = videoUrl;
                document.getElementById('popup-video').style.display = 'block';
            }

            // Close Popup
            function closePopup() {
                document.getElementById('popup-iframe').src = '';
                document.getElementById('popup-video').style.display = 'none';
            }
        </script>


    </section> -->

    <section class="cta position-relative py-4">
        <div class="position-relative ">
            <img class="w-100 desktopHero " src="assets/landing/cta.jpg" alt="">
            <img class="w-100 mobileHero" src="assets/landing/Mobile-size-Banner-2-750x850.jpg" alt="">
            <div class="cta-content text-center w-50">
                <p class=" fw-bold m-0 p-0">Mastering beauty is an art</p>
                <p class=""> preserving it is our expertise</p>
                <a onclick="openModal()" class="ctabtn" href="javascript:void(0);">
                    <span class="menu-text cta-book">Book Your Consultation Today</span>
                </a>
                <!-- <a class="ctabtn" href="book-a-consultation.php">
                    <span class="menu-text">Book Your Consultation Today</span>
                </a> -->
            </div>
        </div>

    </section>

    <section class="about-sec-03 " id="dr-pornima-mhatray">
        <div class="container">
            <div class="col-md-12">
                <div class="col-xl-6 p-0">
                    <h4 class="sc_h2">Every step you take towards self-betterment compounds over time, enriching your life in ways that money cannot measure.</h4>
                </div>
                <div class="row drpm-wrp">
                    <div class="col-md-4 order-1 order-md-0">
                        <img src="assets/about/pournima-mhatray-sign.png" class="img-fluid drpm-sign" alt="Dr. Pornima sitting on the stool who is an aesthetic medicine practitioner.">
                        <h5 class="">Dr. Pornima Mhatray, <br> <span>Aesthetician</span></h5>
                    </div>
                    <div class="col-md-4 text-center">
                        <img src="assets/about/pournima-mhatray.jpg" class="img-fluid drpm-photo" alt="">
                    </div>
                    <div class="col-md-4">
                        <p class="sc_h1">Dr. Pornima Mhatray is a seasoned expert in cosmetology. With her wealth of experience, every treatment is meticulously crafted to merge medical precision with aesthetic enhancement. She believes investing in self gives the highest returns.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="about-sec-video" id="corporate-video">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-video-wrp">
                        <video id="myVideo" loop controls autoplay playsinline title="A group of people happy in the video with Angel Health Care Services.">
                            <source src="video/Angel-Health-Centre-Be-The-Star.mp4" type="video/mp4">
                        </video>

                        <!-- <a href="video/Angel-Health-Centre-Be-The-Star.mp4" class="w-play-video html5lightbox"><span class="sv-playvideo"> <img src="assets/templates/img/play-video.svg" class="img-fluid gm-observing gm-observing-cb" alt="" loading="lazy"></span><video id="myVideo" loop muted autoplay playsinline title="A group of people happy in the video with Angel Health Care Services."><source src="video/Angel-Health-Centre-Be-The-Star.mp4" type="video/mp4"></video></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="faqs-services">
        <div class="container">
            <div class="row">
                <div class="col-md-10 mx-auto text-center">
                    <h3 class="sc_h2">Got questions? <br> Find answers here.</h3>
                </div>
                <div class="col-md-4 mx-auto text-center">
                    <div class="seprator-color">
                        <div class="s-star"></div>
                        <div class="s-line"></div>
                    </div>
                </div>
                <div class="col-md-9 mx-auto">
                    <div class="accordion" id="accordionExample-02">


                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-11">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-11" aria-expanded="false" aria-controls="collapse_0-11"><span class="acc_txt">What is acne and how can it be treated?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-11" class="collapse" aria-labelledby="heading_0-11" data-parent="#accordionExample-02" style="">
                                <div class="card-body">
                                    <p>Acne is a common skin condition characterized by pimples, blackheads, and whiteheads. Treatment options include topical creams, oral medications, laser therapy, chemical peels, and skincare routines tailored to your skin type and needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-12">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-12" aria-expanded="false" aria-controls="collapse_0-12"><span class="acc_txt">What causes pigmentation issues and how can they be addressed?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-12" class="collapse" aria-labelledby="heading_0-12" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Pigmentation issues, such as dark spots, melasma, and uneven skin tone, can result from sun exposure, hormonal changes, and skin conditions. Treatment may include topical lightening agents, chemical peels, laser treatments, and sun protection measures.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-13">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-13" aria-expanded="false" aria-controls="collapse_0-13"><span class="acc_txt">How does skin lightening work, and is it safe?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-13" class="collapse" aria-labelledby="heading_0-13" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Skin lightening treatments target hyperpigmentation and dark spots to achieve a more even skin tone. Safe options include topical creams, laser therapy, and chemical peels, guided by a skincare professional to ensure efficacy and safety.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-14">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-14" aria-expanded="false" aria-controls="collapse_0-14"><span class="acc_txt">What is laser hair removal, and how effective is it?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-14" class="collapse" aria-labelledby="heading_0-14" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Laser hair removal is a non-invasive procedure that uses laser energy to target hair follicles, reducing hair growth over time. It's effective for most skin types and offers long-lasting results with multiple sessions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-15">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-15" aria-expanded="false" aria-controls="collapse_0-15"><span class="acc_txt">What anti-aging treatments are available to combat wrinkles and fine lines?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-15" class="collapse" aria-labelledby="heading_0-14" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <!--<p>Anti-aging treatments include topical retinoids, Botox injections, dermal fillers, microdermabrasion, and laser resurfacing to improve skin texture, firmness, and reduce the appearance of wrinkles and fine lines.</p>-->
                                    <p>Anti-aging treatments include topical retinoids, dermal fillers, microdermabrasion, and laser resurfacing to improve skin texture, firmness, and reduce the appearance of wrinkles and fine lines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-16">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-16" aria-expanded="false" aria-controls="collapse_0-16"><span class="acc_txt">How can laugh lines and facial sagging be addressed?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-16" class="collapse" aria-labelledby="heading_0-16" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Laugh lines and facial sagging can be treated with procedures like facelifts, dermal fillers, PDO thread lifts, and radiofrequency skin tightening to restore volume, contour, and youthful appearance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-17">

                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-17" aria-expanded="false" aria-controls="collapse_0-17"><span class="acc_txt">What is an AHA facial, and what are its benefits for the skin?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-17" class="collapse" aria-labelledby="heading_0-17" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>An AHA (Alpha Hydroxy Acid) facial uses exfoliating acids like glycolic acid to remove dead skin cells, improve skin texture, and stimulate collagen production for a brighter, smoother complexion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-18">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-18" aria-expanded="false" aria-controls="collapse_0-18"><span class="acc_txt">What is rhinoplasty and how does it improve facial appearance?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-18" class="collapse" aria-labelledby="heading_0-18" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Rhinoplasty, also known as a nose job, reshapes the nose to enhance facial harmony, correct breathing issues, and improve self-confidence. It's a surgical procedure performed by qualified plastic surgeons.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-19">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-19" aria-expanded="false" aria-controls="collapse_0-19"><span class="acc_txt">How does a facelift address aging signs and facial contours?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-19" class="collapse" aria-labelledby="heading_0-19" data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>A facelift, or rhytidectomy, tightens sagging facial skin, smooths wrinkles, and lifts facial tissues to restore a more youthful and refreshed appearance, typically performed by board-certified plastic surgeons.</p>
                                </div>
                            </div>
                        </div>
                        <!--<div class="card color-shape Skin">
                    <div class="card-header" id="heading_0-20">
                      <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse_0-20" aria-expanded="false" aria-controls="collapse_0-20"><span class="acc_txt">Can non-surgical treatments like Botox and fillers effectively reduce facial wrinkles?</span> <span class="acc_arrow"></span></button>
                    </div>
                    <div id="collapse_0-20" class="collapse" aria-labelledby="heading_0-20" data-parent="#accordionExample-02">
                      <div class="card-body">
                        <p>Yes, Botox injections relax muscles to reduce wrinkles and fine lines, while dermal fillers restore lost volume and improve facial contours, offering natural-looking results without surgery.</p>
                      </div>
                    </div>
                  </div>	-->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-sec-03 py-4">
        <div id="mapCont" class="container mapCont">
            <div class="col-md-12  mx-auto">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-4 m-0">
                        <div class="google-maps">
                            <img src="assets/contact/maps.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-8 text-center">
                        <div class="d-inline-block text-left">
                            <h2 class="">
                                <span class="spo"><span class="spib"><span class="d-inline-block">Reach us at</span></span></span>
                            </h2>
                            <ul class="c_list row">
                                <li class=" col-md-12 col-lg-6 col-12 para-21 para-slide">912, Maker Chambers 5, <br> Nariman Point, Mumbai, <br> Maharashtra - 400021.</li>
                                <li class=" col-md-12 col-lg-6 col-12 para-21 para-slide">Call us at: <a href="tel:+91 90042 64646">+91 90042 64646</a><br>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="tel:+91 9819422422">+91 9819422422<br></a>
                                    <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="tel:+91 9819422422">+91 9819422422</a> -->
                                </li>

                                <li class="para-21 col-md-12 col-lg-6 col-12 para-slide">Email us at: <a href="mailto:info@angelhealthcentre.com">info@angelhealthcentre.com</a></li>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="para-slide mt-4">
                                        <p>Your feedback is valuable to us, write to us at: <br> <a href="mailto:feedback@angelhealthcentre.com">feedback@angelhealthcentre.com</a></p>
                                    </div>
                                    <div class="para-slide mt-4">
                                        <p>For any grievances: <br> <a href="mailto:grievance@angelhealthcentre.com">grievance@angelhealthcentre.com</a></p>
                                    </div>
                                </div>
                            </ul>
                            <div class="para-slide mt-0">
                                <a href="https://maps.app.goo.gl/veQ1ifxHq2aT5yC98" class="btn btn-knowmore" target="_blank"><span class="txt">Find us on google maps</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class=" position-relative" id="">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!--<h5>How would you like to take it ahead from here?</h5>-->

                        <div id="myModal" class="modal">
                            <div class="modal-content">
                                <span class="close" onclick="closeModal()">&times;</span>
                                <div class="m-0" id="formz-wrapper" data-formz-slug="3amhPxH3" data-formz-type="simple">
                                    <div id="formz-layout-wrapper" class="normal-height">
                                        <!-- <form id="main-form" class="main-form-embedded formaloo__form-container" action="contact-e.php" method="POST"> -->
                                        <form id="main-form" class="main-form-embedded formaloo__form-container" onsubmit="return validateForm()" action="contact-e.php" method="POST">
                                            <div class="form-components-style_form-m-info__lj0Ty">
                                                <div class="form-components-style_form-m-desc__MT7eX form-theme-text--lighten formaloo__form-description">

                                                </div>
                                            </div>
                                            <div class="w-100 form-components-style_single-step-content__modern__buV1h form-theme-field-border">
                                                <div class="formz-fields-wrapper">
                                                    <div class="fields-global_form-form-row__DKNAN formaloo__field-container modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc" id="formz_singleStep_field_AaXE5FjT" style="padding-top:25px;">
                                                        <div>
                                                            <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:100%">
                                                                <div class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">Full name<span class="fields-global_titleRequired__4nob-">*</span>
                                                                </div>
                                                                <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                                                </div>
                                                                <div class="modern-view-global-styles_m-input-container__BWZf1" style="width:90%;margin:auto;">
                                                                    <input type="text" class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input formaloo__field-input" autocomplete="off" name="AaXE5FjT" value="" id="fullname">
                                                                    <!-- <img src="https://formaloo.me/static/media/error-icon.aa893f0a2cacae72df5e181e4a0609fc.svg" alt="error" class="modern-view-global-styles_m-error-icon__IrRpG"> -->
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="fields-global_form-form-row__DKNAN formaloo__field-container modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc" id="formz_singleStep_field_yuH9dxD1">
                                                        <div>
                                                            <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:90%;">
                                                                <div class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">Mobile<span class="fields-global_titleRequired__4nob-">*</span>
                                                                </div>
                                                                <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description" style="width:90%;margin:auto;">
                                                                    <div>Digit</div>
                                                                    <div>( Min: 1000000000 Max: 9999999999 )</div>
                                                                </div>
                                                                <input type="text" class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input" min="1000000000" max="9999999999" autocomplete="off" name="yuH9dxD1" value="" id="mobile">
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="fields-global_form-form-row__DKNAN formaloo__field-container modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc" id="formz_singleStep_field_XxPfAip9">
                                                        <div>
                                                            <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:100%;margin:auto;">
                                                                <div class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">Email<span class="fields-global_titleRequired__4nob-">*</span>
                                                                </div>
                                                                <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                                                </div>
                                                                <div class="modern-view-global-styles_m-input-container__BWZf1" style="width:90%;margin:auto;">
                                                                    <input class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input" placeholder="" autocomplete="off" name="XxPfAip9" value="" id="email">
                                                                    <!-- <img src="https://formaloo.me/static/media/error-icon.aa893f0a2cacae72df5e181e4a0609fc.svg" alt="error" class="modern-view-global-styles_m-error-icon__IrRpG"> -->
                                                                </div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-components-style_formz-form-error--big__y-vA2">

                                                </div>

                                                <!-- Hidden field for reCAPTCHA token -->
                                                <input type="hidden" name="recaptcha_response" class="recaptcha-response">

                                                <div class="form-components-style_single-step-button-wrapper__modern__s0XC+" style="margin-top:25px;padding-bottom:25px;">
                                                    <div class="form-components-style_submit-wrapper__RcH-V">
                                                        <div class="form-components-style_buttonRipple__WhqyN">
                                                            <button class="form-components-style_form-button-submit__ZzOBZ enabled form-theme-button formaloo__submit-button form-components-style_form-button-submit__modern__lOolW formaloo__button" raised="true" type="submit">
                                                                <div>Next</div>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="">
                                                <div class="style_form-status__91bF4 style_form-singleStep-status__QVq7E style_form-status__modern__F9tMY">
                                                    <div class="style_progressBar__P-isG" style="background-color: rgb(235, 239, 245); height: 7px; border-radius: 0px;">
                                                        <div style="width: 0%; background-color: rgb(0, 0, 0);">

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            // Get the modal
                            var modal = document.getElementById("myModal");

                            // Get all buttons that open the modal
                            var buttons = document.querySelectorAll("a[onclick='openModal()']");

                            // Get the <span> element that closes the modal
                            var span = document.getElementsByClassName("close")[0];

                            // Function to open the modal
                            function openModal() {
                                modal.style.display = "block";

                                // Disable body scroll when modal is open
                                $('body').addClass('modal-open');
                                $('body').css('overflow', 'hidden'); // Disable scroll
                            }

                            // Function to close the modal
                            function closeModal() {
                                modal.style.display = "none";

                                // Enable body scroll when modal is closed
                                $('body').removeClass('modal-open');
                                $('body').css('overflow', 'auto'); // Enable scroll
                            }

                            // When the user clicks the close button (span), close the modal
                            span.onclick = function() {
                                closeModal();
                            }

                            // When the user clicks anywhere outside the modal, close it
                            window.onclick = function(event) {
                                if (event.target == modal) {
                                    closeModal();
                                }
                            }

                            // Attach the modal opening function to each button
                            buttons.forEach(function(button) {
                                button.addEventListener('click', function() {
                                    openModal();
                                });
                            });
                        </script>

                        <!--Angel Health Centre - Landing Page-->
                        <!-- <div id="formz-wrapper" data-formz-slug="3amhPxH3" data-formz-type="simple"></div> -->
                        <!-- <script src="https://formaloo.me/istatic/js/main.js"></script> -->
                        <script>
                            function validateForm() {
                                let fullname = document.getElementById("fullname").value;
                                let mobile = document.getElementById("mobile").value;
                                let email = document.getElementById("email").value;

                                // Fullname validation: only letters and spaces allowed
                                let fullnameRegex = /^[a-zA-Z\s]+$/;
                                if (!fullnameRegex.test(fullname)) {
                                    alert("Please enter a valid full name.");
                                    document.getElementById("fullname").focus();
                                    return false;
                                }

                                // Mobile number validation: 10 digits only
                                let mobileRegex = /^\d{10}$/;
                                if (!mobileRegex.test(mobile)) {
                                    alert("Please enter a valid 10-digit mobile number.");
                                    document.getElementById("mobile").focus();
                                    return false;
                                }

                                // Email validation using regex
                                let emailRegex = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
                                if (!emailRegex.test(email)) {
                                    alert("Please enter a valid email address.");
                                    document.getElementById("email").focus();
                                    return false;
                                }

                                return true;
                            }
                        </script>
                        <script>
                            // JavaScript for validation and enabling/disabling submit button
                            document.addEventListener("DOMContentLoaded", function() {
                                const fullNameInput = document.querySelector('input[name="AaXE5FjT"]');
                                const mobileInput = document.querySelector('input[name="epR3yh3F"]');
                                const emailInput = document.querySelector('input[name="XxPfAip9"]');
                                const submitButton = document.querySelector('.form-components-style_form-button-submit__ZzOBZ');

                                function validateInputs() {
                                    const fullName = fullNameInput.value.trim();
                                    const mobile = mobileInput.value.trim();
                                    const email = emailInput.value.trim();

                                    // Check if all fields are filled and validation rules are met
                                    const isFullNameValid = fullName !== "";
                                    const isMobileValid = /^[0-9]{10,12}$/.test(mobile);
                                    const isEmailValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

                                    // Add or remove 'enabled' class based on validation
                                    if (isFullNameValid && isMobileValid && isEmailValid) {
                                        submitButton.classList.add('enabled');
                                    } else {
                                        submitButton.classList.remove('enabled');
                                    }
                                }

                                // Add event listeners to inputs for validation
                                fullNameInput.addEventListener('input', validateInputs);
                                mobileInput.addEventListener('input', validateInputs);
                                emailInput.addEventListener('input', validateInputs);
                            });
                        </script>


                        <div id="fullnameError" class="error"></div>
                        <div id="emailError" class="error"></div>
                        <div id="mobileNumberError" class="error"></div>

                        <!--Angel Health Centre - Landing Page-->

                        <!--<div class="appointlet-inline" data-appointlet-inline="https://appt.link/angel-health-centre/book-an-appointment"></div>
					<script async defer src="https://js.appointlet.com/"></script>
					<link href="https://js.appointlet.com/styles.css" rel="stylesheet">-->
                    </div>
                </div>
            </div>

        </div>




    </section>
</div>




<?php include("inc/footer.php"); ?>
<?php include("inc/isotope.php"); ?>
<?php include("inc/script.php"); ?>
<script src="assets/about/about.js"></script>
<script src="assets/templates/plugins/html5lightbox/jquery.js"></script>
<script src="assets/templates/plugins/html5lightbox/html5lightbox.js"></script>
<?php include("inc/copyright.php"); ?>