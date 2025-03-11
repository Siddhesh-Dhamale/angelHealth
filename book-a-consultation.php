<?php $Page="contact"; ?>
<?php include("inc/head.php"); ?>
<?php include("inc/meta.php"); ?>
<?php include("inc/css.php"); ?>
<link rel="stylesheet" href="assets/contact/contact.css">
<!-- Event snippet for Book A Consultation conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-16475801570/_zfaCKLfyJ4ZEOKPo7A9',
      'event_callback': callback
  });
  return false;
}
</script>

<?php include("inc/header.php"); ?>

  <div class="page-wrp">
	<section class="contact-sec-02">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="banner-txt">
						<h2>
							<span class="spo"><span class="spib"><span class="d-inline-block">Ready to proceed?</span></span></span>
							<span class="spo"><span class="spib"><span class="d-inline-block">Fill in your details,</span></span></span>
							<span class="spo"><span class="spib"><span class="d-inline-block">and we'll set up</span></span></span>
							<span class="spo"><span class="spib"><span class="d-inline-block">your appointment</span></span></span>
						</h2>
						<p class=" para-slide">Note: We charge Rs.3000 for 30-min personal consultation with the doctor.</p>
 
					</div>
				</div>
				<div class="col-md-7 text-center">
					<!--<h5>How would you like to take it ahead from here?</h5>-->
					<style>
					  /* Style for the disabled button */
					  .form-components-style_form-button-submit__ZzOBZ {
						background-color: #ccc;
						cursor: not-allowed;
					  }

					  /* Style for the enabled button */
					  .form-components-style_form-button-submit__ZzOBZ.enabled {
						background-color: #007bff; /* Change background color to active state */
						cursor: pointer;
					  }
					</style>

					  <div id="formz-wrapper" data-formz-slug="3amhPxH3" data-formz-type="simple">
						<div id="formz-layout-wrapper" class="normal-height">
							<!-- <form id="main-form" class="main-form-embedded formaloo__form-container" action="contact-e.php" method="POST"> -->
							<form id="main-form" class="main-form-embedded formaloo__form-container" onsubmit="return validateForm()" action="contact-e.php" method="POST">
								<div class="form-components-style_form-m-info__lj0Ty">
									<div class="form-components-style_form-m-desc__MT7eX form-theme-text--lighten formaloo__form-description">

									</div>
								</div>
								<div class="form-components-style_single-step-content__modern__buV1h form-theme-field-border">
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

						</div><div class="form-components-style_single-step-button-wrapper__modern__s0XC+" style="margin-top:25px;padding-bottom:25px;">
							<div class="form-components-style_submit-wrapper__RcH-V">
								<div class="form-components-style_buttonRipple__WhqyN">
									<button class="form-components-style_form-button-submit__ZzOBZ enabled form-theme-button formaloo__submit-button form-components-style_form-button-submit__modern__lOolW formaloo__button" raised="true" type="submit">
										<div>Book an appointment</div>
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
	</section> 
</div>

<?php include("inc/footer.php"); ?> 
<?php include("inc/script.php"); ?>
<script src="assets/contact/contact.js"></script>
<?php include("inc/copyright.php"); ?>