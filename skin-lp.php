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
    input::placeholder {
        color: var(--color-04);
    }

    .horizontalFormCont {
        background-color: #F2EDF0;
    }

    .horizontalFormCont .formaloo__field-title {
        height: 0 !important;
    }

    .horizontalFormCont label {
        display: unset !important;
    }

    .horizontalForm {
        gap: 20px;
    }
</style>


<div class="page-wrp overflow-visible  position-static">

    <section class="banerCont py-5 mt-5 about-sec-hero ">
        <div class="position-relative ">
            <img class="w-100 hBanner desktopHero" src="assets/landing/4320x1500.jpg" alt="banner">
            <img class="w-100 hBanner mobileHero" src="assets/landing/Mobile-size-Banner-750x850.jpg" alt="banner">
            <div class="Bannercontent">
                <!-- <a onclick="openModal()" class="ctabtn" href="javascript:void(0);" id="getStartedBtn">
                    <span class="menu-text">Get Started</span>
                </a> -->
                <p>#Ranked Hair Clinic in London</p>
                <h3>Life isn't Perfect but Your hair can be </h3>
                <div class="row">
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                    <div class="col-6 border-bottom border-1">hair treatment</div>
                </div>
                <div class="d-flex gap10 py-2">
                    <a onclick="openModal()" class="ctabtn skinCta rounded" href="javascript:void(0);" id="getStartedBtn">
                        <span class="menu-text">Make a appointment</span>
                    </a>
                    <a href="tel:+91 90042 64646" class="skinBannerCall skinCta ctabtn rounded">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <span class="menu-text">+91 90042 64646</span>
                    </a>
                </div>
            </div>
            <div class="bannerCards row justify-content-center">
                <div class="card bg-white shadow-lg border-0 col-md-3 col-12">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-center">Card title</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card bg-white shadow-lg border-0 col-md-3 col-12">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-center">Card title</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <div class="card bg-white shadow-lg border-0 col-md-3 col-12">
                    <div class="card-body">
                        <h5 class="font-weight-bold text-center">Card title</h5>
                        <p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div>
                <form id="main-form" class="horizontalFormCont main-form-embedded formaloo__form-container " onsubmit="return validateForm()" action="contact-e.php" method="POST">
                    <div class="form-components-style_form-m-info__lj0Ty">
                        <div class="form-components-style_form-m-desc__MT7eX form-theme-text--lighten formaloo__form-description">

                        </div>
                    </div>
                    <div class="w-100 form-components-style_single-step-content__modern__buV1h form-theme-field-border py-5">
                        <div class="formz-fields-wrapper horizontalForm d-flex align-items-center justify-content-center">
                            <div>
                                Counsult Now :
                            </div>
                            <div class="fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc" id="formz_singleStep_field_AaXE5FjT">
                                <div>
                                    <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:100%">
                                        <div class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title"></span>
                                        </div>
                                        <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                        </div>
                                        <div class="modern-view-global-styles_m-input-container__BWZf1" style="width:100%;margin:auto;">
                                            <input type="text" class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input formaloo__field-input" autocomplete="off" name="AaXE5FjT" value="" id="fullname" placeholder="Full Name">
                                            <!-- <img src="https://formaloo.me/static/media/error-icon.aa893f0a2cacae72df5e181e4a0609fc.svg" alt="error" class="modern-view-global-styles_m-error-icon__IrRpG"> -->
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc" id="formz_singleStep_field_yuH9dxD1">
                                <div>
                                    <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:100%;">
                                        <div class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title"></span>
                                        </div>
                                        <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description" style="width:100%;margin:auto;">
                                            <div>Digit</div>
                                            <div>( Min: 1000000000 Max: 9999999999 )</div>
                                        </div>
                                        <input type="text" class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input" min="1000000000" max="9999999999" autocomplete="off" name="yuH9dxD1" value="" id="mobile" placeholder="Mobile number">
                                    </label>
                                </div>
                            </div>
                            <div class="fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc" id="formz_singleStep_field_XxPfAip9">
                                <div>
                                    <label class="fields-global_form-field-and-label-holder__OiTHf" style="width:100%; margin:auto;">
                                        <div class="modern-view-global-styles_m-input-title__TcM6X form-theme-text--main formaloo__field-title"></span>
                                        </div>
                                        <div class="modern-view-global-styles_m-input-description__C9j56 form-theme-text--lighten formaloo__field-description">

                                        </div>
                                        <div class="modern-view-global-styles_m-input-container__BWZf1" style="width:100%; margin:auto;">
                                            <input class="modern-view-global-styles_m-textfield__ZOOyk form-modern-input fields-global_ltr-on-type__8WVVr formaloo__field-input" placeholder="Email " autocomplete="off" name="XxPfAip9" value="" id="email">
                                            <!-- <img src="https://formaloo.me/static/media/error-icon.aa893f0a2cacae72df5e181e4a0609fc.svg" alt="error" class="modern-view-global-styles_m-error-icon__IrRpG"> -->
                                        </div>
                                    </label>
                                </div>
                            </div>
                            <div class="fields-global_form-form-row__DKNAN formaloo__field-container d-flex modern-view-global-styles_modern-form-row__yNxu7 fields-global_full-width__5rHzc">
                                <button class="form-components-style_form-button-submit__ZzOBZ enabled form-theme-button formaloo__submit-button form-components-style_form-button-submit__modern__lOolW formaloo__button ctabtn rounded px-5 py-2 border-0" raised="true" type="submit">
                                    <div class="font-weight-bold">Next</div>
                                </button>
                            </div>

                        </div>
                        <div class="form-components-style_formz-form-error--big__y-vA2">

                        </div>

                        <!-- Hidden field for reCAPTCHA token -->
                        <input type="hidden" name="recaptcha_response" class="recaptcha-response">


                    </div>
                </form>
            </div>

        </div>





        





        <!-- popup section  -->

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