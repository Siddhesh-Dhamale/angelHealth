<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="">
	
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC5LRRZM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T5GS4BPC"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!--recpatcha-->
<?php
    // const CAPCTHA_SITE_KEY = '6Lflm-8qAAAAANZo3C-6NVWquw-zaZ88g244O6T5';
    // const CAPCTHA_SECRET_KEY = '6Lflm-8qAAAAAKf5PUvV9vqGTG5m6ZF25xtvlV1h';
?>
<!--recpatcha end-->

<script src='https://app.wotnot.io/chat-widget/KPxQQZVWifoQ100413326075geVma2ZL.js' defer></script>	
	
<div id="scroll_top"></div>
	
<div class="loader"></div>
<div id="clickAnimation_wrp"></div>
<style>
.float{
	position:fixed;
	width:50px;
	height:50px;
	bottom:23px;
	left:21px;
	background-color:#632963; /* #25d366 */
	color:#FFF;
	border-radius:50px;
	text-align:center;
  font-size:30px;
	box-shadow: 2px 2px 3px #999;
  z-index:100;
}

.my-float{
	margin-top:10px;
}

.call-buton .cc-calto-action-ripple2 {
	display:none;
}
</style>

	
<header class="allHeader">
	<a class="navbar-brand2 pageLink" href="tel:+91 90042 64646"><span class="logo-txt" style="background-color:#FFFFFF;border-radius:10px;color: black;padding:0px 10px;font-size:13px;"><i class="fa-solid fa-phone"></i> <b>+91 90042 64646</b></span></a> 
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg">
				    <section class="call-buton"><a class="cc-calto-action-ripple2" href="tel:+91 90042 64646"><i class="fa fa-phone"></i></section>
				    
				  <a class="navbar-brand pageLink" href="/"><img src="assets/templates/img/logo-angel-health-centre.png" class="img-fluid" alt=""> 
				  <span class="logo-txt">Health & Aesthetics Clinic</span></a> 
				  <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav">
						
					<?php /*?>  <li class="nav-item submenu-dropdown width-menu-02 <?php if ($Page=='learn') {echo "active";} ?>"> <a class="nav-link" href="#"><span class="menu-text">Learn</span></a>
						<div class="sm-dd">
						  <ul>
							  <li><a class="pageLink" href="about.php"><span class="menu-text">About us</span></a></li>
							  <!--<li><a class="pageLink" href="our-philosophy.php"><span class="menu-text">Our philosophy</span></a></li>-->
						  </ul>
						</div>
					  </li><?php */?>
						
						
						
					  <li class="nav-item <?php if ($Page=='home') {echo "active";} ?>">
					  	<a class="nav-link pageLink" href="/"><span class="menu-text">Home</span></a>
					  </li>
					  <li class="nav-item <?php if ($Page=='about') {echo "active";} ?>">
					  	<a class="nav-link pageLink" href="about.php"><span class="menu-text">About&nbsp;us</span></a>
					  </li>
						
						
					  <li class="nav-item submenu-dropdown width-menu-01 <?php if ($Page=='skin' || $Page=='hair' || $Page=='weight' || $Page=='health') {echo "active";} ?>"> <a class="nav-link" href="#"><span class="menu-text">Transform</span></a>
						<div class="sm-dd wm1">
						  <div class="row">
							<div class="col-md-12 pl-0">
							  <ul>
							  	<li><a class="pageLink" href="skin.php"><span class="menu-text">My skin</span></a></li>
							  	<li><a class="pageLink" href="hair.php"><span class="menu-text">My hair</span></a></li>
							  	<li><a class="pageLink" href="weight.php"><span class="menu-text">My weight</span></a></li>
							  	<li><a class="pageLink" href="health.php"><span class="menu-text">My health</span></a></li>
							  	<li></li>
							  </ul>  
							</div>
							<div class="col-md-8">
							  
							</div>
						  </div>
						</div>
					  </li>
					  <?php /*?>
					  <li class="nav-item submenu-dropdown width-menu-02 <?php if ($Page=='transform') {echo "active";} ?>"> <a class="nav-link" href="#"><span class="menu-text">Personalize</span></a>
						<div class="sm-dd">
						  <ul>
						  <li><a class="pageLink" href="#"><span class="menu-text">Mummy makeover plan</span></a></li>
						  <li><a class="pageLink" href="#"><span class="menu-text">C-Suite plan</span></a></li>
						  <li><a class="pageLink" href="#"><span class="menu-text">Power duo plan</span></a></li>
						  <li><a class="pageLink" href="#"><span class="menu-text">Glamour plan</span></a></li>
						  <li><a class="pageLink" href="#"><span class="menu-text">Social leaders plan</span></a></li>
						  </ul>
						</div>
					  </li>
					  <?php */?>
					  <li class="nav-item <?php if ($Page=='the-attraction-code') {echo "active";} ?>">
						  <a class="nav-link pageLink" href="the-attraction-code.php">
						 	<span class="menu-text">The&nbsp;&nbsp;&nbsp;<span class="font-shadows-into">Attraction</span>&nbsp;&nbsp;code</span>
						  </a>
						</li>
					  <li class="nav-item <?php if ($Page=='contact') {echo "active";} ?>">
						  <a class="nav-link pageLink" href="contact.php">
						 	<span class="menu-text">contact</span>
						  </a>
						</li>
					  <li class="nav-item <?php if ($Page=='appointment') {echo "active";} ?>">
						  <a class="nav-link pageLink" href="book-a-consultation.php">
						 	<span class="menu-text">Book a consultation</span>
						  </a>
						</li>
					</ul>					
				  </div>
				</nav>
			</div>
		</div>
	</div>

</header>
 
<div id="scrollsmoother-container" data-scroll-container> 
	
