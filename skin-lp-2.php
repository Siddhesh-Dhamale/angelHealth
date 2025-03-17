<?php $Page = "hair-lp"; ?>
<?php include("inc/head.php"); ?>
<?php include("inc/meta.php"); ?>
<?php include("inc/css.php"); ?>
<?php include("inc/slick-carousel.php"); ?>
<link rel="stylesheet" href="assets/services/services.css">
<link rel="stylesheet" href="assets/landing/landing.css" />



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






<div class="page-wrp overflow-visible  position-static">

    <section class="banerCont pt-5 mt-5 about-sec-hero ">
        <div class="position-relative ">
            <img class="w-100 hBanner desktopHero" src="assets/landing/Skin-1440x550.jpg" alt="banner">
            <span class="w-100 hBanner mobileHero SHW-mobilebg"></span>
            <div class="Bannercontent">
                <!-- <a onclick="openModal()" class="ctabtn" href="javascript:void(0);" id="getStartedBtn">
                    <span class="menu-text">Get Started</span>
                </a> -->
                <p>#Ranked Hair Clinic in London</p>
                <h3>Life isn't Perfect but Your hair can be </h3>
                <div class="row ">
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 mt-3"><a onclick="openModal()" class="ctabtn skinCta rounded"
                            href="javascript:void(0);" id="getStartedBtn">
                            <span class="menu-text shw-home-button ">Make a appointment</span>
                        </a></div>
                    <div class="col-6 mt-3"> <a href="tel:+91 90042 64646"
                            class="skinBannerCall skinCta ctabtn rounded ">
                            <i class="fa fa-phone" aria-hidden="true"></i>
                            <span class="menu-text shw-home-button ">+91 90042 64646</span>
                        </a></div>
                </div>
            </div>
            <div class="bannerCards row justify-content-center">
                <div class="card bg-white shadow-lg border-0 col-md-3 col-12">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-center">Card title</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card bg-white shadow-lg border-0 col-md-3 col-12">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-center">Card title</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card bg-white shadow-lg border-0 col-md-3 col-12">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-center">Card title</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up
                            the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div>
                <form id="main-form" class="horizontalFormCont main-form-embedded formaloo__form-container "
                    onsubmit="return validateForm()" action="contact-e.php" method="POST">
                    <div class="form-components-style_form-m-info__lj0Ty">
                        <div
                            class="form-components-style_form-m-desc__MT7eX form-theme-text--lighten formaloo__form-description">

                        </div>
                    </div>
                    <div
                        class="w-100 form-components-style_single-step-content__modern__buV1h form-theme-field-border py-4">
                        <div class="formz-fields-wrapper horizontalForm row align-items-center justify-content-center">
                            <div class="col-lg-2 col-md-2 col-8 text-center">
                                Counsult Now :
                            </div>
                            <div class="col-lg-2 col-md-2 col-8 fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc"
                                id="formz_singleStep_field_AaXE5FjT">
                                <div class="w-100">
                                    <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:100%">
                                        <div
                                            class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">
                                            </span>
                                        </div>
                                        <div
                                            class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                        </div>
                                        <div class="modern-view-global-styles_m-input-container__BWZf1"
                                            style="width:100%;margin:auto;">
                                            <input type="text"
                                                class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input formaloo__field-input"
                                                autocomplete="off" name="AaXE5FjT" value="" id="fullname"
                                                placeholder="Full Name">
                                            <!-- <img src="https://formaloo.me/static/media/error-icon.aa893f0a2cacae72df5e181e4a0609fc.svg" alt="error" class="modern-view-global-styles_m-error-icon__IrRpG"> -->
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-8 fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc"
                                id="formz_singleStep_field_yuH9dxD1">
                                <div class="w-100">
                                    <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:100%;">
                                        <div
                                            class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">
                                            </span>
                                        </div>
                                        <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description"
                                            style="width:100%;margin:auto;">
                                            <div>Digit</div>
                                            <div>( Min: 1000000000 Max: 9999999999 )</div>
                                        </div>
                                        <input type="text"
                                            class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input"
                                            min="1000000000" max="9999999999" autocomplete="off" name="yuH9dxD1"
                                            value="" id="mobile" placeholder="Mobile number">
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-2 col-8 fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc"
                                id="formz_singleStep_field_XxPfAip9">
                                <div class="w-100">
                                    <label class="fields-global_form-field-and-label-holder__OiTHf"
                                        style="width:100%; margin:auto;">
                                        <div
                                            class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">
                                            </span>
                                        </div>
                                        <div
                                            class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                        </div>
                                        <div class="modern-view-global-styles_m-input-container__BWZf1"
                                            style="width:100%; margin:auto;">
                                            <input
                                                class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input"
                                                placeholder="Email " autocomplete="off" name="XxPfAip9" value=""
                                                id="email">
                                            <!-- <img src="https://formaloo.me/static/media/error-icon.aa893f0a2cacae72df5e181e4a0609fc.svg" alt="error" class="modern-view-global-styles_m-error-icon__IrRpG"> -->
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <!-- Hidden field for reCAPTCHA token -->
                            <input type="hidden" name="recaptcha_response" class="recaptcha-response">

                            <div
                                class="col-lg-2 col-md-2 col-8 fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc">
                                <button
                                    class="w-100 form-components-style_form-button-submit__ZzOBZ enabled form-theme-button formaloo__submit-button form-components-style_form-button-submit__modern__lOolW formaloo__button ctabtn rounded py-2 border-0"
                                    raised="true" type="submit">
                                    <div class="font-weight-bold">Next</div>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </section>


    <!-- popup  -->
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
                                <form id="main-form" class="main-form-embedded formaloo__form-container"
                                    onsubmit="return validateForm()" action="contact-e.php" method="POST">
                                    <div class="form-components-style_form-m-info__lj0Ty">
                                        <div
                                            class="form-components-style_form-m-desc__MT7eX form-theme-text--lighten formaloo__form-description">

                                        </div>
                                    </div>
                                    <div
                                        class="w-100 form-components-style_single-step-content__modern__buV1h form-theme-field-border">
                                        <div class="formz-fields-wrapper">
                                            <div class="fields-global_form-form-row__DKNAN formaloo__field-container modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc"
                                                id="formz_singleStep_field_AaXE5FjT" style="padding-top:25px;">
                                                <div>
                                                    <label class="fields-global_form-field-and-label-holder__OiTHf"
                                                        style="width:100%">
                                                        <div
                                                            class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">
                                                            Full name<span
                                                                class="fields-global_titleRequired__4nob-">*</span>
                                                        </div>
                                                        <div
                                                            class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                                        </div>
                                                        <div class="modern-view-global-styles_m-input-container__BWZf1"
                                                            style="width:90%;margin:auto;">
                                                            <input type="text"
                                                                class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input formaloo__field-input"
                                                                autocomplete="off" name="AaXE5FjT" value=""
                                                                id="fullname">
                                                            <!-- <img src="https://formaloo.me/static/media/error-icon.aa893f0a2cacae72df5e181e4a0609fc.svg" alt="error" class="modern-view-global-styles_m-error-icon__IrRpG"> -->
                                                        </div>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="fields-global_form-form-row__DKNAN formaloo__field-container modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc"
                                                id="formz_singleStep_field_yuH9dxD1">
                                                <div>
                                                    <label class="fields-global_form-field-and-label-holder__OiTHf"
                                                        style="width:90%;">
                                                        <div
                                                            class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">
                                                            Mobile<span
                                                                class="fields-global_titleRequired__4nob-">*</span>
                                                        </div>
                                                        <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description"
                                                            style="width:90%;margin:auto;">
                                                            <div>Digit</div>
                                                            <div>( Min: 1000000000 Max: 9999999999 )</div>
                                                        </div>
                                                        <input type="text"
                                                            class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input"
                                                            min="1000000000" max="9999999999" autocomplete="off"
                                                            name="yuH9dxD1" value="" id="mobile">
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="fields-global_form-form-row__DKNAN formaloo__field-container modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc"
                                                id="formz_singleStep_field_XxPfAip9">
                                                <div>
                                                    <label class="fields-global_form-field-and-label-holder__OiTHf"
                                                        style="width:100%;margin:auto;">
                                                        <div
                                                            class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title">
                                                            Email<span
                                                                class="fields-global_titleRequired__4nob-">*</span>
                                                        </div>
                                                        <div
                                                            class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                                        </div>
                                                        <div class="modern-view-global-styles_m-input-container__BWZf1"
                                                            style="width:90%;margin:auto;">
                                                            <input
                                                                class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input"
                                                                placeholder="" autocomplete="off" name="XxPfAip9"
                                                                value="" id="email">
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

                                        <div class="form-components-style_single-step-button-wrapper__modern__s0XC+"
                                            style="margin-top:25px;padding-bottom:25px;">
                                            <div class="form-components-style_submit-wrapper__RcH-V">
                                                <div class="form-components-style_buttonRipple__WhqyN">
                                                    <button
                                                        class="form-components-style_form-button-submit__ZzOBZ enabled form-theme-button formaloo__submit-button form-components-style_form-button-submit__modern__lOolW formaloo__button"
                                                        raised="true" type="submit">
                                                        <div>Next</div>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">
                                        <div
                                            class="style_form-status__91bF4 style_form-singleStep-status__QVq7E style_form-status__modern__F9tMY">
                                            <div class="style_progressBar__P-isG"
                                                style="background-color: rgb(235, 239, 245); height: 7px; border-radius: 0px;">
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
                    span.onclick = function () {
                        closeModal();
                    }

                    // When the user clicks anywhere outside the modal, close it
                    window.onclick = function (event) {
                        if (event.target == modal) {
                            closeModal();
                        }
                    }

                    // Attach the modal opening function to each button
                    buttons.forEach(function (button) {
                        button.addEventListener('click', function () {
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
                    document.addEventListener("DOMContentLoaded", function () {
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




    <!-- Unlock stunning hair,one treatement at a time section  -->
    <div class="concern SHW-concern">
        <h1 class="pb-4 text-center">Unlock stunning hair,<br> one treatement at a time</h1>
        <div class="row justify-content-center">

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/services/Skin 1.jpg" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Follicle Fusion Hair Transplant</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul class="position-relative text-center">
                            <li>Duration of treatment - 90 minutes</li>
                            <li>No. of sessions - 04</li>
                        </ul>
                    </div>
                </div> -->
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/services/Skin 2.jpg" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Mane Revival Treatment</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul class="position-relative text-center">
                            <li>Duration of treatment - 90 minutes</li>
                            <li>No. of sessions - 01</li>
                        </ul>
                    </div>
                </div> -->
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/services/Skin 3.jpg" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Bald Patches Correction</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul class="position-relative text-center">
                            <li>Duration of treatment - 90 minutes</li>
                            <li>No. of sessions - 02</li>
                        </ul>
                    </div>
                </div> -->
            </div>

            <div class="card border-0 col-md-5 col-10">
                <img src="assets/landing/services/Skin 4.jpg" alt="Card Image">
                <div class="op"></div>
                <div class="card-title">Edge Enhance Hairline Correction</div>
                <!-- <div class="card-overlay">
                    <div class="card-details">
                        <ul class="position-relative text-center">
                            <li>Duration of treatment - 90 minutes</li>
                            <li>No. of sessions - 02</li>
                        </ul>
                    </div>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Treatments Section  -->


    <section class="services-sec-04">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center d-none d-md-block">
                    <h2 class="sc_h2 mb-5">Rejuvenating skin treatments</h2>
                </div>
                <!-- <div class="col-md-12  ">

                    <div class="np-content grid portfolioContainer">
                        <div class="color-shape treatment-list col-md-6 skin-health">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Follicle Fusion Hair Transplant</h4>
                                </div>
                                <div class="t_para">
                                    <p>Experience a revolutionary solution for hair loss with our hair transplant
                                        procedure. Using state-of-the-art techniques, we carefully transplant healthy
                                        hair follicles from donor areas to restore a full and natural-looking head of
                                        hair.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>04</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 cosmetic-corrections ">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Mane Revival Treatment</h4>
                                </div>
                                <div class="t_para">
                                    <p>Discover the ultimate solution for hair loss with our Mane Revival treatment
                                        program. Our comprehensive approach targets the underlying causes of hair
                                        thinning, combining advanced therapies and customized treatment plans to
                                        stimulate hair growth and improve hair density.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>01</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 hormonal-issues">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Bald Patches Correction</h4>
                                </div>
                                <div class="t_para">
                                    <p>Say goodbye to bald patches and enjoy a full, luscious mane with our specialized
                                        bald patches correction treatments, using advanced techniques to stimulate hair
                                        follicle growth and fill in sparse areas. Using cutting-edge techniques, we
                                        address areas of hair loss with precision and artistry, seamlessly blending
                                        natural-looking hair growth to fill in sparse patches.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Edge Enhance Hairline Correction</h4>
                                </div>
                                <div class="t_para">
                                    <p>Enhance your facial harmony and redefine your hairline with our expert hairline
                                        correction procedures. Whether addressing receding hairlines or asymmetrical
                                        features, our expert team utilizes advanced techniques to sculpt a harmonious
                                        and youthful hairline that complements your facial features.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>


                    </div>

                </div> -->


                <div class="col-md-12 d-none d-md-block">
                    <div class="np-content grid portfolioContainer">

                        <div class="color-shape treatment-list col-md-6 skin-health">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Blemish Buster Acne Treatment</h4>
                                </div>
                                <div class="t_para">
                                    <p>Our comprehensive acne treatment targets breakouts at the root, addressing
                                        inflammation and preventing future eruptions. Through a combination of advanced
                                        skincare techniques and personalized treatment plans, we restore clarity and
                                        confidence to your complexion.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>04</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 cosmetic-corrections ">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Radiance Rebirth Pigmentation Therapy</h4>
                                </div>
                                <div class="t_para">
                                    <p>Combat uneven skin tone and hyperpigmentation with our targeted pigmentation
                                        correction treatments. Using state-of-the-art technology and advanced skincare
                                        formulations, we effectively diminish dark spots and discoloration, revealing a
                                        luminous, even complexion.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>01</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 hormonal-issues">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Luminous Glow Enhancement / Skin Lightening</h4>
                                </div>
                                <div class="t_para">
                                    <p>Illuminate your skin and unveil a radiant, luminous complexion with our
                                        transformative skin lightening treatments. By targeting excess melanin
                                        production and promoting cell turnover, we fade discoloration and reveal
                                        brighter, more youthful-looking skin.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Silken Smooth Laser Hair Removal Therapy</h4>
                                </div>
                                <div class="t_para">
                                    <p>Experience the freedom of smooth, hair-free skin with our advanced laser hair
                                        removal treatments. Our state-of-the-art laser technology selectively targets
                                        hair follicles, delivering long-lasting results for a silky-smooth appearance
                                        without the hassle of daily shaving or waxing.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>




                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Timeless Youth Revival Solutions</h4>
                                </div>
                                <div class="t_para">
                                    <p>Turn back the hands of time and rejuvenate your skin with our comprehensive
                                        anti-aging solutions. From wrinkle reduction and skin tightening to collagen
                                        stimulation and facial volumization, our customized treatments address multiple
                                        signs of aging, restoring youthfulness and vitality to your complexion.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Wrinkle Erase Therapy</h4>
                                </div>
                                <div class="t_para">
                                    <p>Smooth away fine lines and wrinkles with our specialized wrinkle reduction
                                        treatments. Using a combination of injectable fillers, neurotoxins and
                                        collagen-boosting therapies, we restore volume, firmness and elasticity to your
                                        skin, resulting in a more youthful and refreshed appearance.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Laugh Line Softening</h4>
                                </div>
                                <div class="t_para">
                                    <p>Soften and smooth laugh lines and nasolabial folds with our targeted laugh line
                                        softening treatments. Through a combination of dermal fillers and
                                        collagen-stimulating therapies, we restore volume and contour to the midface,
                                        rejuvenating your appearance and enhancing your natural beauty.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Alpha Glow Infusion</h4>
                                </div>
                                <div class="t_para">
                                    <p>Reveal a fresh, radiant complexion with our revitalizing AHA facial treatment.
                                        Our gentle yet effective exfoliation process removes dead skin cells, unclogs
                                        pores, and promotes cell turnover, leaving your skin soft, smooth, and glowing
                                        with youthful vitality.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Rhinoplasty Nasal Correction</h4>
                                </div>
                                <div class="t_para">
                                    <p>Achieve facial harmony and balance with our personalized rhinoplasty procedure.
                                        Whether correcting a nasal hump, refining the tip or improving overall symmetry,
                                        our board-certified surgeons use advanced techniques to sculpt a nose that
                                        complements your unique facial features and enhances your overall appearance.
                                    </p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Face Lift</h4>
                                </div>
                                <div class="t_para">
                                    <p>Turn back the hands of time and rejuvenate your facial appearance with our
                                        transformative face lift procedure. Through a combination of skin tightening,
                                        muscle repositioning and fat redistribution, we address sagging skin and deep
                                        facial folds to restore firmness, definition and vitality for natural-looking
                                        results that defy the signs of aging.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Jawline Sculpting</h4>
                                </div>
                                <div class="t_para">
                                    <p>Say goodbye to submental fullness and redefine your jawline with our targeted
                                        double chin reduction treatments. Whether through minimally invasive procedures
                                        or surgical techniques, we sculpt and contour the neck and jaw area, restoring
                                        youthful definition and enhancing facial harmony for a more confident and
                                        refined appearance.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Perfect Pout Refinement</h4>
                                </div>
                                <div class="t_para">
                                    <p>Achieve perfectly balanced and proportionate lips with our expert lip correction
                                        procedures. Whether enhancing volume, refining shape or correcting asymmetry,
                                        our tailored treatments restore harmony and definition to your lips, enhancing
                                        your natural beauty and confidence with subtle, natural-looking results.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Chin Correction</h4>
                                </div>
                                <div class="t_para">
                                    <p>Whether addressing a weak or recessed chin, asymmetry or disproportion, our
                                        board-certified chin correction treatments use advanced techniques to sculpt and
                                        enhance your chin, improving overall facial proportions and enhancing your
                                        natural beauty.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Bright Eye Rejuvenation / Blepharoplasty</h4>
                                </div>
                                <div class="t_para">
                                    <p>Refresh tired eyes and rejuvenate your appearance with our blepharoplasty
                                        procedure, targeting excess skin and fat around the eyes. Whether addressing
                                        sagging eyelids, under-eye bags, or drooping brows, our customized surgical
                                        techniques deliver an unforgettable gaze.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <!--<div class="color-shape treatment-list col-md-6 for-men">
    <div class="overlay_01"></div>
    <div class="tl_box">
        <div class="t_heading">
            <h4>Wrinkle Relaxation Botox Therapy</h4>
        </div>
        <div class="t_para">
            <p>Smooth away wrinkles and fine lines with our Botox injections, using a purified neurotoxin to relax facial muscles and reduce the appearance of dynamic wrinkles for a more youthful and refreshed appearance.</p>
        </div>
        <ul class="t_list">
            <li>Duration of treatment - <strong>90 minutes</strong></li>
            <li>No. of sessions - <strong>02</strong></li>
        </ul>
        <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span class="txt">Enquire now</span></a>
    </div>
</div>-->
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Youthful Volume Restoration</h4>
                                </div>
                                <div class="t_para">
                                    <p>Restore lost volume and enhance facial contours with our specialized filler
                                        treatments, customized to your unique needs. We use hyaluronic acid-based
                                        injectables to plump and rejuvenate the skin for a more youthful and refreshed
                                        appearance.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>
                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Firm & Fabulous Skin Tightening</h4>
                                </div>
                                <div class="t_para">
                                    <p>Tighten and firm sagging skin with our advanced skin tightening procedures,
                                        stimulating collagen production and improving skin elasticity for a smoother,
                                        more lifted appearance.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Contour Thread Sculpting</h4>
                                </div>
                                <div class="t_para">
                                    <p>Lift and tighten facial skin without surgery with our innovative contour thread
                                        lift procedure, using dissolvable sutures to lift and support sagging tissue for
                                        natural-looking results with minimal downtime.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>

                        <div class="color-shape treatment-list col-md-6 for-men">
                            <div class="overlay_01"></div>
                            <div class="tl_box">
                                <div class="t_heading">
                                    <h4>Ink Vanish Therapy / Tattoo Removal</h4>
                                </div>
                                <div class="t_para">
                                    <p>Say goodbye to unwanted tattoos with our safe and effective tattoo removal
                                        treatments, using advanced laser technology to break down ink particles and
                                        reveal clear, ink-free skin.</p>
                                </div>
                                <ul class="t_list">
                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                    <li>No. of sessions - <strong>02</strong></li>
                                </ul>
                                <a href="book-a-consultation.php" class="btn btn-knowmore pageLink"><span
                                        class="txt">Enquire now</span></a>
                            </div>
                        </div>




                    </div>
                </div>
                <!-- FAQs Likee treatment section for mobile  section -->
                <section class="faqs-services d-md-none d-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 mx-auto text-center">
                                <h2 class="sc_h2 mb-5">Rejuvenating skin treatments</h2>
                            </div>
                            <div class="col-md-4 mx-auto text-center">
                                <div class="seprator-color">
                                    <div class="s-star"></div>
                                    <div class="s-line"></div>
                                </div>
                            </div>
                            <div class="col-md-9 mx-auto">
                                <div class="accordion" id="accordionExample-02">

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-21">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-21" aria-expanded="false"
                                                aria-controls="collapse_0-21"><span class="acc_txt">Blemish Buster Acne
                                                    Treatment</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-21" class="collapse" aria-labelledby="heading_0-21"
                                            data-parent="#accordionExample-02" style="">
                                            <div class="card-body">
                                                <p>Our comprehensive acne treatment targets breakouts at the root,
                                                    addressing inflammation and preventing future eruptions. Through a
                                                    combination of advanced skincare techniques and personalized
                                                    treatment plans, we restore clarity and confidence to your
                                                    complexion.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>04</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-22">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-22" aria-expanded="false"
                                                aria-controls="collapse_0-22"><span class="acc_txt">Radiance Rebirth
                                                    Pigmentation Therapy</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-22" class="collapse" aria-labelledby="heading_0-22"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Combat uneven skin tone and hyperpigmentation with our targeted
                                                    pigmentation correction treatments. Using state-of-the-art
                                                    technology and advanced skincare formulations, we effectively
                                                    diminish dark spots and discoloration, revealing a luminous, even
                                                    complexion.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>01</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-23">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-23" aria-expanded="false"
                                                aria-controls="collapse_0-23"><span class="acc_txt">Luminous Glow
                                                    Enhancement / Skin Lightening</span> <span
                                                    class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-23" class="collapse" aria-labelledby="heading_0-23"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Illuminate your skin and unveil a radiant, luminous complexion with
                                                    our transformative skin lightening treatments. By targeting excess
                                                    melanin production and promoting cell turnover, we fade
                                                    discoloration and reveal brighter, more youthful-looking skin.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-24">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-24" aria-expanded="false"
                                                aria-controls="collapse_0-24"><span class="acc_txt">Silken Smooth Laser
                                                    Hair Removal Therapy</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-24" class="collapse" aria-labelledby="heading_0-24"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Experience the freedom of smooth, hair-free skin with our advanced
                                                    laser hair removal treatments. Our state-of-the-art laser technology
                                                    selectively targets hair follicles, delivering long-lasting results
                                                    for a silky-smooth appearance without the hassle of daily shaving or
                                                    waxing.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-25">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-25" aria-expanded="false"
                                                aria-controls="collapse_0-25"><span class="acc_txt">Timeless Youth
                                                    Revival Solutions</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-25" class="collapse" aria-labelledby="heading_0-24"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Turn back the hands of time and rejuvenate your skin with our
                                                    comprehensive anti-aging solutions. From wrinkle reduction and skin
                                                    tightening to collagen stimulation and facial volumization, our
                                                    customized treatments address multiple signs of aging, restoring
                                                    youthfulness and vitality to your complexion.</p>
                                                ul class="t_list">
                                                <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-26">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-26" aria-expanded="false"
                                                aria-controls="collapse_0-26"><span class="acc_txt">Wrinkle Erase
                                                    Therapy</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-26" class="collapse" aria-labelledby="heading_0-26"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Smooth away fine lines and wrinkles with our specialized wrinkle
                                                    reduction treatments. Using a combination of injectable fillers,
                                                    neurotoxins and collagen-boosting therapies, we restore volume,
                                                    firmness and elasticity to your skin, resulting in a more youthful
                                                    and refreshed appearance.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-27">

                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-27" aria-expanded="false"
                                                aria-controls="collapse_0-27"><span class="acc_txt">Laugh Line
                                                    Softening</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-27" class="collapse" aria-labelledby="heading_0-27"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Soften and smooth laugh lines and nasolabial folds with our targeted
                                                    laugh line softening treatments. Through a combination of dermal
                                                    fillers and collagen-stimulating therapies, we restore volume and
                                                    contour to the midface, rejuvenating your appearance and enhancing
                                                    your natural beauty.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-28">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-28" aria-expanded="false"
                                                aria-controls="collapse_0-28"><span class="acc_txt">Alpha Glow
                                                    Infusion</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-28" class="collapse" aria-labelledby="heading_0-28"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Reveal a fresh, radiant complexion with our revitalizing AHA facial
                                                    treatment. Our gentle yet effective exfoliation process removes dead
                                                    skin cells, unclogs pores, and promotes cell turnover, leaving your
                                                    skin soft, smooth, and glowing with youthful vitality.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-29">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-29" aria-expanded="false"
                                                aria-controls="collapse_0-29"><span class="acc_txt">Rhinoplasty Nasal
                                                    Correction</span> <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-29" class="collapse" aria-labelledby="heading_0-29"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Achieve facial harmony and balance with our personalized rhinoplasty
                                                    procedure. Whether correcting a nasal hump, refining the tip or
                                                    improving overall symmetry, our board-certified surgeons use
                                                    advanced techniques to sculpt a nose that complements your unique
                                                    facial features and enhances your overall appearance.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Face Lift</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Turn back the hands of time and rejuvenate your facial appearance
                                                    with our transformative face lift procedure. Through a combination
                                                    of skin tightening, muscle repositioning and fat redistribution, we
                                                    address sagging skin and deep facial folds to restore firmness,
                                                    definition and vitality for natural-looking results that defy the
                                                    signs of aging.</p>
                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Jawline
                                                    Sculpting</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Say goodbye to submental fullness and redefine your jawline with our
                                                    targeted double chin reduction treatments. Whether through minimally
                                                    invasive procedures or surgical techniques, we sculpt and contour
                                                    the neck and jaw area, restoring youthful definition and enhancing
                                                    facial harmony for a more confident and refined appearance.</p>

                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Perfect Pout
                                                    Refinement</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Achieve perfectly balanced and proportionate lips with our expert lip
                                                    correction procedures. Whether enhancing volume, refining shape or
                                                    correcting asymmetry, our tailored treatments restore harmony and
                                                    definition to your lips, enhancing your natural beauty and
                                                    confidence with subtle, natural-looking results.</p>

                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Chin
                                                    Correction</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Whether addressing a weak or recessed chin, asymmetry or
                                                    disproportion, our board-certified chin correction treatments use
                                                    advanced techniques to sculpt and enhance your chin, improving
                                                    overall facial proportions and enhancing your natural beauty.</p>


                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Bright Eye
                                                    Rejuvenation / Blepharoplasty</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Refresh tired eyes and rejuvenate your appearance with our
                                                    blepharoplasty procedure, targeting excess skin and fat around the
                                                    eyes. Whether addressing sagging eyelids, under-eye bags, or
                                                    drooping brows, our customized surgical techniques deliver an
                                                    unforgettable gaze.</p>



                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Youthful Volume
                                                    Restoration</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Restore lost volume and enhance facial contours with our specialized
                                                    filler treatments, customized to your unique needs. We use
                                                    hyaluronic acid-based injectables to plump and rejuvenate the skin
                                                    for a more youthful and refreshed appearance.</p>




                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Firm & Fabulous Skin
                                                    Tightening</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Tighten and firm sagging skin with our advanced skin tightening
                                                    procedures, stimulating collagen production and improving skin
                                                    elasticity for a smoother, more lifted appearance.</p>


                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Contour Thread
                                                    Sculpting</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Lift and tighten facial skin without surgery with our innovative
                                                    contour thread lift procedure, using dissolvable sutures to lift and
                                                    support sagging tissue for natural-looking results with minimal
                                                    downtime.</p>



                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card color-shape Hair">
                                        <div class="card-header" id="heading_0-30">
                                            <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                                data-target="#collapse_0-30" aria-expanded="false"
                                                aria-controls="collapse_0-30"><span class="acc_txt">Ink Vanish Therapy /
                                                    Tattoo Removal</span>
                                                <span class="acc_arrow"></span></button>
                                        </div>
                                        <div id="collapse_0-30" class="collapse" aria-labelledby="heading_0-30"
                                            data-parent="#accordionExample-02">
                                            <div class="card-body">
                                                <p>Say goodbye to unwanted tattoos with our safe and effective tattoo
                                                    removal treatments, using advanced laser technology to break down
                                                    ink particles and reveal clear, ink-free skin.</p>




                                                <ul class="t_list">
                                                    <li>Duration of treatment - <strong>90 minutes</strong></li>
                                                    <li>No. of sessions - <strong>02</strong></li>
                                                </ul>
                                                <a href="book-a-consultation.php"
                                                    class="btn btn-knowmore pageLink"><span class="txt">Enquire
                                                        now</span></a>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </section>


    <!-- Steps section  -->

    <section class="steps-section">
        <div class="container">
            <h2 class="mb-5">Our great 3 steps for treatment</h2>

            <div class="row step-box-custom justify-content-center g-4">
                <!-- Step 1 -->
                <div class="col-md-4 d-flex step-div">
                    <div class="step-card mx-auto w-100">
                        <div class="step-number">Step 1</div>
                        <h4 class="step-title">Doctor Consultation</h4>
                        <p class="step-description">These theme is insanely flexible and amazingly easy to use. This
                            alone would be enough for a 5 star rating.</p>
                    </div>
                </div>

                <!-- Step 2 -->
                <div class="col-md-4 d-flex step-div">
                    <div class="step-card mx-auto w-100">
                        <div class="step-number">Step 2</div>
                        <h4 class="step-title">Digital Diagnosis</h4>
                        <p class="step-description">These theme is insanely flexible and amazingly easy to use. This
                            alone would be enough for a 5 star rating.</p>
                    </div>
                </div>

                <!-- Step 3 -->
                <div class="col-md-4 d-flex step-div">
                    <div class="step-card mx-auto w-100">
                        <div class="step-number">Step 3</div>
                        <h4 class="step-title">Safe & Holistic Treatment</h4>
                        <p class="step-description">These theme is insanely flexible and amazingly easy to use. This
                            alone would be enough for a 5 star rating.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="services-sec-05 my-5 mt-5">

        <div class="container py-5">
            <div class="row align-items-center px-5">
                <div
                    class="col-md-6 position-relative text-center d-flex justify-content-center align-items-center mb-md-0 mb-5">
                    <img src="assets/landing/dummytest.png" class="img-fluid rounded" alt="Doctor consulting patient">
                    <div class="experience-box"><span id="count" class="font-25">0+</span>
                        <br><small>Years of Experience</small>
                    </div>
                </div>
                <div class="col-md-6">
                    <h2>We're Tressa Hair Clinic</h2>
                    <p>Get started swiftly & easily by importing a demo of your choice in a single click. Over 30
                        high-quality professionally designed pre-built website concepts to choose from.</p>
                    <p>Tressa is a modern business theme that lets you build stunning high-performance websites using a
                        fully visual interface. Start with any of the demos below or build one on your own. Exponent is
                        a perfect blend of spacious layouts and precise typography.</p>
                    <button class="btn btn-custom ">Make an Appointment</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Testooo -->


    <div class="testimonial-section container">
        <h2>OUR TESTIMONIAL</h2>
        <div class="google-logo">
            <img src="assets/landing/google_PNG102344.png" alt="Google Logo">
            <div>Reviews ★★★★★</div>
        </div>

        <div id="testimonialCarousel" class="carousel slide testimonial-carousel" data-bs-wrap="true"
            data-bs-ride="carousel" data-bs-interval="3000">
            <div class="carousel-inner container">
                <div class="carousel-item active">
                    <p class="testimonial-text">
                        I've been coming here for a little over half a year for laser hair removal and I'm really happy
                        with my experience here at Canada MedLaser. Super professional and knowledgeable about all of
                        their services, and the results are amazing. I would definitely recommend this place to anyone
                        looking!
                    </p>
                    <p class="testimonial-author">- Sasha Miranda</p>
                </div>
                <div class="carousel-item">
                    <p class="testimonial-text">
                        Amazing service! The staff is very professional and friendly. I’ve seen great results after just
                        a few sessions.
                    </p>
                    <p class="testimonial-author">- John Doe</p>
                </div>
            </div>

            <!-- Left/Right controls (arrows) -->
            <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel"
                data-bs-slide="prev">
                <span class="fa fa-chevron-left" aria-hidden="true" style="color: black;"></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel"
                data-bs-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true" style="color: black;"></span>
            </button>

            <!-- Carousel Indicators -->
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="0"
                    class="active"></button>
                <button type="button" data-bs-target="#testimonialCarousel" data-bs-slide-to="1"></button>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Video Section -->

    <div class="about-sec-video" id="corporate-video">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-video-wrp">
                        <video id="myVideo" loop controls autoplay playsinline
                            title="A group of people happy in the video with Angel Health Care Services.">
                            <source src="video/Angel-Health-Centre-Be-The-Star.mp4" type="video/mp4">
                        </video>

                        <!-- <a href="video/Angel-Health-Centre-Be-The-Star.mp4" class="w-play-video html5lightbox"><span class="sv-playvideo"> <img src="assets/templates/img/play-video.svg" class="img-fluid gm-observing gm-observing-cb" alt="" loading="lazy"></span><video id="myVideo" loop muted autoplay playsinline title="A group of people happy in the video with Angel Health Care Services."><source src="video/Angel-Health-Centre-Be-The-Star.mp4" type="video/mp4"></video></a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Video section -->

    <!-- CTAs Created by Dinesh -->

    <!-- <section class="services-sec-04 my-5">
        <div class="bg-light overflow-hidden">
            <div class="container space-2">
                <div class="row align-items-center p-5 ml-0 ml-md-5">
                    
                    <div class="col-md-7 mb-4 mb-md-0">
                        <button class="btn btn-sm btn-secondary text-uppercase mb-2">Contact Us</button>
                        <h4 class="font-weight-bold text-dark">WE ARE READY TO GIVE YOU BACK </h4>
                        <h4 class="font-weight-bold text-dark">YOUR HAIR & CONFIDENCE</h4>
                        <p class="text-muted">Aliquam magna massa, gravida finibus fermentum sit amet.<br> consequat
                            lacus libero.</p>
                        <a href="#" class="btn btn-dark mt-2">Book Free Consultation</a>
                    </div>
                    
                    <div class="col-md-3 text-md-right d-none d-md-block">
                        <img src="your-image-path.jpg" alt="Hair Confidence" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>

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





    <!-- FAQs section -->
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
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-11" aria-expanded="false"
                                    aria-controls="collapse_0-11"><span class="acc_txt">What is acne and how can it be
                                        treated?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-11" class="collapse" aria-labelledby="heading_0-11"
                                data-parent="#accordionExample-02" style="">
                                <div class="card-body">
                                    <p>Acne is a common skin condition characterized by pimples, blackheads, and
                                        whiteheads. Treatment options include topical creams, oral medications, laser
                                        therapy, chemical peels, and skincare routines tailored to your skin type and
                                        needs.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-12">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-12" aria-expanded="false"
                                    aria-controls="collapse_0-12"><span class="acc_txt">What causes pigmentation issues
                                        and how can they be addressed?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-12" class="collapse" aria-labelledby="heading_0-12"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Pigmentation issues, such as dark spots, melasma, and uneven skin tone, can
                                        result from sun exposure, hormonal changes, and skin conditions. Treatment may
                                        include topical lightening agents, chemical peels, laser treatments, and sun
                                        protection measures.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-13">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-13" aria-expanded="false"
                                    aria-controls="collapse_0-13"><span class="acc_txt">How does skin lightening work,
                                        and is it safe?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-13" class="collapse" aria-labelledby="heading_0-13"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Skin lightening treatments target hyperpigmentation and dark spots to achieve a
                                        more even skin tone. Safe options include topical creams, laser therapy, and
                                        chemical peels, guided by a skincare professional to ensure efficacy and safety.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-14">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-14" aria-expanded="false"
                                    aria-controls="collapse_0-14"><span class="acc_txt">What is laser hair removal, and
                                        how effective is it?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-14" class="collapse" aria-labelledby="heading_0-14"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Laser hair removal is a non-invasive procedure that uses laser energy to target
                                        hair follicles, reducing hair growth over time. It's effective for most skin
                                        types and offers long-lasting results with multiple sessions.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-15">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-15" aria-expanded="false"
                                    aria-controls="collapse_0-15"><span class="acc_txt">What anti-aging treatments are
                                        available to combat wrinkles and fine lines?</span> <span
                                        class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-15" class="collapse" aria-labelledby="heading_0-14"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <!--<p>Anti-aging treatments include topical retinoids, Botox injections, dermal fillers, microdermabrasion, and laser resurfacing to improve skin texture, firmness, and reduce the appearance of wrinkles and fine lines.</p>-->
                                    <p>Anti-aging treatments include topical retinoids, dermal fillers,
                                        microdermabrasion, and laser resurfacing to improve skin texture, firmness, and
                                        reduce the appearance of wrinkles and fine lines.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-16">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-16" aria-expanded="false"
                                    aria-controls="collapse_0-16"><span class="acc_txt">How can laugh lines and facial
                                        sagging be addressed?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-16" class="collapse" aria-labelledby="heading_0-16"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Laugh lines and facial sagging can be treated with procedures like facelifts,
                                        dermal fillers, PDO thread lifts, and radiofrequency skin tightening to restore
                                        volume, contour, and youthful appearance.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-17">

                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-17" aria-expanded="false"
                                    aria-controls="collapse_0-17"><span class="acc_txt">What is an AHA facial, and what
                                        are its benefits for the skin?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-17" class="collapse" aria-labelledby="heading_0-17"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>An AHA (Alpha Hydroxy Acid) facial uses exfoliating acids like glycolic acid to
                                        remove dead skin cells, improve skin texture, and stimulate collagen production
                                        for a brighter, smoother complexion.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-18">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-18" aria-expanded="false"
                                    aria-controls="collapse_0-18"><span class="acc_txt">What is rhinoplasty and how does
                                        it improve facial appearance?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-18" class="collapse" aria-labelledby="heading_0-18"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>Rhinoplasty, also known as a nose job, reshapes the nose to enhance facial
                                        harmony, correct breathing issues, and improve self-confidence. It's a surgical
                                        procedure performed by qualified plastic surgeons.</p>
                                </div>
                            </div>
                        </div>
                        <div class="card color-shape Skin">
                            <div class="card-header" id="heading_0-19">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse"
                                    data-target="#collapse_0-19" aria-expanded="false"
                                    aria-controls="collapse_0-19"><span class="acc_txt">How does a facelift address
                                        aging signs and facial contours?</span> <span class="acc_arrow"></span></button>
                            </div>
                            <div id="collapse_0-19" class="collapse" aria-labelledby="heading_0-19"
                                data-parent="#accordionExample-02">
                                <div class="card-body">
                                    <p>A facelift, or rhytidectomy, tightens sagging facial skin, smooths wrinkles, and
                                        lifts facial tissues to restore a more youthful and refreshed appearance,
                                        typically performed by board-certified plastic surgeons.</p>
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


    <!-- Map -->


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
                                <span class="spo"><span class="spib"><span class="d-inline-block">Reach us
                                            at</span></span></span>
                            </h2>
                            <ul class="c_list row">
                                <li class=" col-md-12 col-lg-6 col-12 para-21 para-slide">912, Maker Chambers 5, <br>
                                    Nariman Point, Mumbai, <br> Maharashtra - 400021.</li>
                                <li class=" col-md-12 col-lg-6 col-12 para-21 para-slide">Call us at: <a
                                        href="tel:+91 90042 64646">+91 90042 64646</a><br>
                                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a
                                        href="tel:+91 9819422422">+91 9819422422<br></a>
                                    <!-- &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;<a href="tel:+91 9819422422">+91 9819422422</a> -->
                                </li>

                                <li class="para-21 col-md-12 col-lg-6 col-12 para-slide">Email us at: <a
                                        href="mailto:info@angelhealthcentre.com">info@angelhealthcentre.com</a></li>
                                <div class="col-12 col-md-12 col-lg-6">
                                    <div class="para-slide mt-4">
                                        <p>Your feedback is valuable to us, write to us at: <br> <a
                                                href="mailto:feedback@angelhealthcentre.com">feedback@angelhealthcentre.com</a>
                                        </p>
                                    </div>
                                    <div class="para-slide mt-4">
                                        <p>For any grievances: <br> <a
                                                href="mailto:grievance@angelhealthcentre.com">grievance@angelhealthcentre.com</a>
                                        </p>
                                    </div>
                                </div>
                            </ul>
                            <div class="para-slide mt-0">
                                <a href="https://maps.app.goo.gl/veQ1ifxHq2aT5yC98" class="btn btn-knowmore"
                                    target="_blank"><span class="txt">Find us on google maps</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Map end -->

    <!-- Bootstrap JS (Optional if you need JS features) -->
    <script>
        function animateCounter(element, start, end, duration) {
            let startTime = null;

            function updateCounter(timestamp) {
                if (!startTime) startTime = timestamp;
                let progress = Math.min((timestamp - startTime) / duration, 1);
                let value = Math.floor(progress * (end - start) + start);
                element.innerHTML = value + "+";

                if (progress < 1) {
                    requestAnimationFrame(updateCounter);
                }
            }

            requestAnimationFrame(updateCounter);
        }

        let countElement = document.getElementById("count");
        animateCounter(countElement, 0, 31, 2500); // 2-second animation
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</div>
<script src="assets/services/services.js"></script>
<?php include("inc/footer.php"); ?>
<?php include("inc/isotope.php"); ?>
<?php include("inc/script.php"); ?>
<script src="assets/about/about.js"></script>
<script src="assets/templates/plugins/html5lightbox/jquery.js"></script>
<script src="assets/templates/plugins/html5lightbox/html5lightbox.js"></script>

<?php include("inc/copyright.php"); ?>