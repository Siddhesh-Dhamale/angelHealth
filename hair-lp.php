<?php $Page = "hair-lp"; ?>
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

        <a class="navbar-brand pageLink m-0   flex-row align-items-center" href="/">
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
                    <a class="Cicon px-3 py-1" href="tel:+91 90042 64646"><i class="fa fa-phone shake-icon"
                            aria-hidden="true"></i> </a>
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
        /* border-radius: 100px; */
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

    .steps-section {
        background: rgba(160, 94, 193, 0.2);
        /* Background color similar to the image */
        padding: 80px 20px;
        text-align: center;
        color: #fff;
    }

    .step-card {
        background: #fff;
        color: #333;
        border-radius: 10px;
        padding: 30px 20px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        height: 100%;
    }

    .step-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    }

    .step-icon {
        width: 60px;
        height: 60px;
        margin-bottom: 15px;
    }

    .step-number {
        background-color: #333;
        color: #fff;
        display: inline-block;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 14px;
        margin-bottom: 10px;
    }

    .step-title {
        font-weight: 600;
        margin-bottom: 10px;
        font-size: 18px;
    }

    .step-description {
        font-size: 14px;
        color: #555;
    }

    .concern {
        margin-top: 6rem !important;
    }
</style>


<body>

    <!-- Unlock stunning hair,one treatement at a time section  -->
    <div class="concern">
        <h1 class="pb-4 text-center">Unlock stunning hair,<br> one treatement at a time</h1>
        <div class="row justify-content-center">

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/Skin-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Skin</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul class="position-relative">
                            <li class="position-relative">Acne</li>
                            <li class="position-relative">Pigmentation</li>
                            <li class="position-relative">Lightening</li>
                            <li class="position-relative">Wrinkle Erase</li>
                        </ul>
                    </div>
                    <button class="view-details"><a href="skin.php">Explore</a></button>
                </div> -->
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/933x750-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Hair</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul>
                            <li>Hair Transplant</li>
                            <li>Mane Revival</li>
                            <li>Bald Patches</li>
                            <li>Hairline Correction</li>
                        </ul>
                    </div>
                    <button class="view-details"><a href="hair.php">Explore</a></button>
                </div> -->
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/Weight-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Weight</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul>
                            <li>Tummy Tuck</li>
                            <li>Thighs Tuck</li>
                            <li>Arms Tuck</li>
                            <li>Gynecomastia</li>
                        </ul>

                    </div>
                    <button class="view-details"><a href="weight.php">Explore</a></button>
                </div> -->
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/Health-1.png" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Health</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul>
                            <li>Reverse Diabetes</li>
                            <li>Thyroid Hormones</li>
                            <li>PCOD</li>
                            <li>Obesity</li>
                        </ul>
                    </div>
                    <button class="view-details"><a href="health.php">Explore</a></button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Treatments Section  -->

    <section class="aboutDR container py-5 services-sec-04">
        <!-- <h2 class="pt-4 text-center">About Dr Pornima Mhatray</h2> -->

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


    <!-- Steps section  -->

    <section class="steps-section">
        <div class="container">
            <h2 class="mb-5">Our great 3 steps for treatment</h2>

            <div class="row justify-content-center g-4">
                <!-- Step 1 -->
                <div class="col-md-4 d-flex">
                    <div class="step-card mx-auto">
                        <!-- <img src="https://cdn-icons-png.flaticon.com/512/706/706797.png" alt="Step 1" class="step-icon"> -->
                        <div class="step-number">Step 1</div>
                        <h4 class="step-title">Doctor Consultation</h4>
                        <p class="step-description">These theme is insanely flexible and amazingly easy to use. This
                            alone would be enough for a 5 star rating.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-4 d-flex">
                    <div class="step-card mx-auto">
                        <!-- <img src="https://cdn-icons-png.flaticon.com/512/3048/3048398.png" alt="Step 2"
                            class="step-icon"> -->
                        <div class="step-number">Step 2</div>
                        <h4 class="step-title">Digital Diagnosis</h4>
                        <p class="step-description">These theme is insanely flexible and amazingly easy to use. This
                            alone would be enough for a 5 star rating.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-4 d-flex">
                    <div class="step-card mx-auto">
                        <!-- <img src="https://cdn-icons-png.flaticon.com/512/2917/2917242.png" alt="Step 3"
                            class="step-icon"> -->
                        <div class="step-number">Step 3</div>
                        <h4 class="step-title">Safe & Holistic Treatment</h4>
                        <p class="step-description">These theme is insanely flexible and amazingly easy to use. This
                            alone would be enough for a 5 star rating.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap JS (Optional if you need JS features) -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <?php include("inc/footer.php"); ?>
    <?php include("inc/isotope.php"); ?>
    <?php include("inc/script.php"); ?>
    <script src="assets/about/about.js"></script>
    <script src="assets/templates/plugins/html5lightbox/jquery.js"></script>
    <script src="assets/templates/plugins/html5lightbox/html5lightbox.js"></script>
    <?php include("inc/copyright.php"); ?>