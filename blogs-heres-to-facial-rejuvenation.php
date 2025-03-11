<?php 
	$Page="blogs";
	$article = pathinfo($_SERVER['REQUEST_URI'], PATHINFO_FILENAME); 
	//$article = "blogs-heres-to-facial-rejuvenation";
?>
<?php include("inc/head.php"); ?>
<?php include("inc/meta.php"); ?>
<?php include("inc/css.php"); ?>
<link rel="stylesheet" href="assets/blogs/blogs-innerpage.css">
<?php include("inc/header.php"); ?>
<div class="page-wrp">
	
	<section class="blogs-inner-hero">
	  <div class="container">
            <div class="row">
              <div class="col-md-11 mx-auto">
				  <h1 class="">
				  	<span class="spo"><span class="spib"><span class="d-inline-block">Here’s to </span></span></span>
				  	<span class="spo"><span class="spib"><span class="d-inline-block">Facial Rejuvenation! </span></span></span>
				  </h1>
				  <p class="blog-names para-slide"> By Dr. Pornima Mhatre, Cosmetic Physician </p>
              </div>
              <div class="col-md-11 mx-auto">
              	<div class="inner-banner">
					<img src="assets/blogs/heres-to-facial-rejuvenation/heres-to-facial-rejuvenation.jpg" class="" alt="">  
				</div>
              </div>
            </div>
          </div>
	</section>
	
	<section class="blogs-inner-common">
	  <div class="container">
            <div class="row">
              <div class="col-md-3">
				<div class="article-details">
					<p class="post-date"><span class="ad-word">Date</span><span class="ad-date">18 Mar 2024</span></p>  
				</div>
              </div>
              <div class="col-md-6">
				  <p class="font-weight-bold font-italic">Wrinkling is a normal ageing process. Today, however, we see that the process of ageing has advanced by 10 years due to people leading a faulty lifestyle: they’re exposed to the sun for long hours, undergo immense amounts of stress, smoke and consume alcohol regularly. To combat this, it is important to use a good sunscreen lotion during the day and a good moisturizer at night, increase fluid intake, follow a healthy diet with more green vegetables and fruits and exercise regularly.</p>
				  
				  <h2>What treatments can help you remove wrinkles?</h2>
				  <p>Both early signs and future possibilities of wrinkling can be reduced by regularly visiting a qualified dermatologist for facial rejuvenation. Suitable treatments here include: </p>
              </div>
            </div>
          </div>
	</section>
	
	<section class="blogs-inner-common">
	  <div class="container">
	 		<div class="row">
				<div class="col-md-6">
					<div class="inner-banner">
						<img src="assets/blogs/heres-to-facial-rejuvenation/Chemical-Peel.jpg" alt="">
					</div>
				</div>
				<div class="col-md-6">
					<div class="inner-banner">
						<img src="assets/blogs/heres-to-facial-rejuvenation/Microderm-Abrasion.jpg" alt="">
					</div>
				</div>
            </div>
	 		<div class="row">
		  		<div class="col-md-6 mx-auto">
					<h3>Chemical Peel</h3>
					<p>Glycolic peels of different strengths are used for this treatment, depending on your skin type and the stage of wrinkling. This is followed by facials done with natural extracts to smoothen and lighten the skin.</p>
					<p>Remember to only avail of this treatment under a certified, trusted dermatologist for the best effects with minimal harm to your skin. </p>
				</div>
            </div>
	 		<div class="row">
		  		<div class="col-md-6 mx-auto">
					<h3>Microderm Abrasion</h3>
					<p>Microderm Abrasion is a progressive, non-invasive treatment that propels natural mineral crystals onto the skin’s surface for gentle epidermal abrasions, revealing healthier, younger-looking skin.</p>
				</div>
            </div>
          </div>
	</section>
	<!--
	<section class="blogs-inner-common">
	  <div class="container">
	 		<div class="row">
				<div class="col-md-11 mx-auto">
					<div class="inner-banner">
						<img src="assets/blogs/heres-to-facial-rejuvenation/Microderm-Abrasion.jpg" alt="">
					</div>
				</div>
            </div>
          </div>
	</section>
	-->
	<section class="blogs-inner-common">
	  <div class="container">
	 		<div class="row">
				<div class="col-md-11 mx-auto">
					<div class="inner-banner">
						<img src="assets/blogs/heres-to-facial-rejuvenation/Autologous-Fat-Transplant.jpg" alt="">
					</div>
				</div>
		  		<div class="col-md-6 mx-auto">
					<h3>Autologous Fat Transplant </h3>					
					<p>Autologous fat (one's own fat) transfer is today's number one filling agent for loss of volume and creases on our faces. This loss of fat and associated loose skin shows up in the cheek area, making one look gloomy and their face appear drooped down.</p>
					<p>In an Autologous Fat Transplant, your body fat is placed in the upper third of your face to produce an uplift effect; thereby reshaping your face to resemble more youthful years. Apart from the face, the back of your hands can also lose volume, making the autologous fat present there the ideal filler to rejuvenate the back of your hands, the nasal labial fold (mouth-to-nose grooves) or any other body depression.</p>
					<p>Since your own fat is used in this procedure, there is no risk of rejection and developing an allergic reaction is highly unlikely. It produces a more youthful look and helps in recontouring the face, hands and other body parts. The transplant also defines your cheeks and chin and can help in correcting facial deformities.</p> 
					<p>Fat transfer is performed on an outpatient basis. The area from which fat is taken and the treatment site are both anaesthetized with a local anaesthetic. Most patients need 2-3 sessions for this procedure to be successful, for which some of the fat harvested from the body is stored in a fat bank freezer.</p>
				</div>
            </div>
          </div>
	</section>
	
	<section class="blogs-inner-common">
	  <div class="container">
	 		<div class="row">
				<div class="col-md-11 mx-auto">
					<div class="inner-banner">
						<img src="assets/blogs/heres-to-facial-rejuvenation/Botox.jpg" alt="">
					</div>
				</div>
		  		<div class="col-md-6 mx-auto">
					<h3>Botox</h3>
					<p>This procedure involves the relaxation of muscles that cause dynamic wrinkles, giving the face a more relaxed and refreshed look. It’s a simple, safe and quick procedure! </p>
				</div>
            </div>
          </div>
	</section>
	
	<?php include("blogs-next-prev.php"); ?>
</div>

<?php include("inc/footer.php"); ?>
<?php include("inc/script.php"); ?>
<script src="assets/blogs/blogs.js"></script>
<?php include("inc/copyright.php"); ?>
 