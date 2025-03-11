<?php $Page="weight"; ?>
<?php include("inc/head.php"); ?>
<?php include("inc/meta.php"); ?>
<?php include("inc/css.php"); ?>
<link rel="stylesheet" href="assets/services/services.css">
<?php include("inc/header.php"); ?>

<div class="page-wrp">


<section class="services-sec-04 my-5">
<div class="bg-light overflow-hidden">
  <div class="container space-2">
    <div class="row align-items-center p-5 ml-5">
      <!-- Left Content -->
      <div class="col-md-7 mb-4 mb-md-0">
        <button class="btn btn-sm btn-secondary text-uppercase mb-2">Contact Us</button>
        <h4 class="font-weight-bold text-dark">WE ARE READY TO GIVE YOU BACK </h4>
        <h4 class="font-weight-bold text-dark">YOUR HAIR & CONFIDENCE</h4>
        <p class="text-muted">Aliquam magna massa, gravida finibus fermentum sit amet.<br> consequat lacus libero.</p>
        <a href="#" class="btn btn-dark mt-2">Book Free Consultation</a>
      </div>
      <!-- Right Image -->
      <div class="col-md-3 text-md-right">
        <img src="your-image-path.jpg" alt="Hair Confidence" class="img-fluid">
      </div>
    </div>
  </div>
</div>

</section>


<section class="services-sec-05 my-5">
<style>
        .experience-box {
            position: absolute;
            bottom: -16px;
            background: white;
            padding: 10px 15px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            font-weight: bold;
            border-bottom: 3px solid orange;
            text-align: center;
        }
        .btn-custom {
            background-color: #e4a048;
            border: none;
            color: white;
            padding: 10px 15px;
        }
        .btn-custom:hover {
            background-color: #cf8d3a;
        }
        .font-25 {
            font-size: 35px;

        }
    </style>
        <div class="container py-5">
        <div class="row align-items-center px-5">
            <div class="col-md-6 position-relative text-center d-flex justify-content-center align-items-center">
                <img src="assets/landing/dummytest.png" class="img-fluid rounded" alt="Doctor consulting patient">
                <div class="experience-box"><span id="count" class="font-25">0+</span>
                <br><small>Years of Experience</small></div>
            </div>
            <div class="col-md-6">
                <h2>We're Tressa Hair Clinic</h2>
                <p>Get started swiftly & easily by importing a demo of your choice in a single click. Over 30 high-quality professionally designed pre-built website concepts to choose from.</p>
                <p>Tressa is a modern business theme that lets you build stunning high-performance websites using a fully visual interface. Start with any of the demos below or build one on your own. Exponent is a perfect blend of spacious layouts and precise typography.</p>
                <button class="btn btn-custom">Make an Appointment</button>
            </div>
        </div>
    </div>
    </section>
</div>


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


<?php include("inc/footer.php"); ?>
<?php include("inc/isotope.php"); ?>
<?php include("inc/script.php"); ?>
<script src="assets/services/services.js"></script>
<?php include("inc/copyright.php"); ?>