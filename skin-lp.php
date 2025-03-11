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

    .location,
    .mobile {
        font-size: 30px;
    }

    .number,
    .gap10 {
        /* border: 2px solid #622863; */
        /* border-radius: 100px; */
        gap: 10px;
    }

    .headerFont {
        font-size: 14px;
    }

    .number a,
    a {
        color: #622863;
    }

    .num {
        display: block;
    }

    .Cicon {
        display: none;
    }

    @media (max-width: 768px) {
        .Cicon {
            display: block;
        }
    }
</style>




<div class="page-wrp">

    <section class="banerCont pt-5 mt-5 about-sec-hero ">
        <div class="position-relative ">
            <img class="w-100 hBanner desktopHero" src="assets/landing/4320x1500.jpg" alt="banner">
            <div class="content">
              
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