 

	<section class="blogs-inner-latest">
	  <div class="container">
	 		<div class="row">
				<div class="col-md-11 mx-auto">
					<h2>What’s next?</h2>
				</div>
				<div class="col-md-11 mx-auto">
					<div class="row">

						<div class="col-md-3 post-item <?php if ($article=="blogs-heres-to-facial-rejuvenation") {echo "active";} ?>">
							
							<a href="blogs-heres-to-facial-rejuvenation.php" class="post-articles sit pageLink">
								<div class="blog-thumbs">
									<img src="assets/blogs/heres-to-facial-rejuvenation/heres-to-facial-rejuvenation.jpg" class="img-fluid1" alt="">
								</div>
								<div class="blog-txt">
									<h6>05 April 2024</h6>
									<h3>Here's to Facial Rejuvenation!</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fuga voluptatibus, unde excepturi laudantium provident assumenda deleniti ea.</p>
								</div>
							</a>							
							
						</div>
						
						<div class="col-md-3 post-item <?php if ($article=="blogs-dont-get-burned-get-enlightened") {echo "active";} ?>">
							
							<a href="blogs-dont-get-burned-get-enlightened.php" class="post-articles sit pageLink">
								<div class="blog-thumbs">
									<img src="assets/blogs/dont-get-burned-get-enlightened/dont-get-burned-get-enlightened.jpg" class="img-fluid1" alt="">
								</div>
								<div class="blog-txt">
									<h6>05 April 2024</h6>
									<h3>Don't get burned, get enlightened!</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fuga voluptatibus, unde excepturi laudantium provident assumenda deleniti ea.</p>
								</div>
							</a>							
							
						</div>
						
						<div class="col-md-3 post-item <?php if ($article=="blogs-for-the-youngsters-complexion-over-complexities") {echo "active";} ?>">
							
							<a href="blogs-for-the-youngsters-complexion-over-complexities.php" class="post-articles sit pageLink">
								<div class="blog-thumbs">
									<img src="assets/blogs/for-the-youngsters-complexion-over-complexities/for-the-youngsters-complexion-over-complexities.jpg" class="img-fluid1" alt="">
								</div>
								<div class="blog-txt">
									<h6>05 April 2024</h6>
									<h3>For the youngsters: Complexion over complexities</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fuga voluptatibus, unde excepturi laudantium provident assumenda deleniti ea.</p>
								</div>
							</a>							
							
						</div>
						
						<div class="col-md-3 post-item <?php if ($article=="blogs-move-5-steps-closer-to-your-weight-loss-goal") {echo "active";} ?>">
							
							<a href="blogs-move-5-steps-closer-to-your-weight-loss-goal.php" class="post-articles sit pageLink">
								<div class="blog-thumbs">
									<img src="assets/blogs/move-5-steps-closer-to-your-weight-loss-goal/move-5-steps-closer-to-your-weight-loss-goal.jpg" class="img-fluid1" alt="">
								</div>
								<div class="blog-txt">
									<h6>05 April 2024</h6>
									<h3>Move 5 steps closer to your weight loss goal</h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fuga voluptatibus, unde excepturi laudantium provident assumenda deleniti ea.</p>
								</div>
							</a>							
							
						</div>
						
						
						<div class="col-md-3 post-item <?php if ($article=="blogs-skin-rejuvenation-for-the-middle-ages") {echo "active";} ?>">
							
							<a href="blogs-skin-rejuvenation-for-the-middle-ages.php" class="post-articles sit pageLink">
								<div class="blog-thumbs">
									<img src="assets/blogs/skin-rejuvenation-for-the-middle-ages/skin-rejuvenation-for-the-middle-ages.jpg" class="img-fluid1" alt="">
								</div>
								<div class="blog-txt">
									<h6>05 April 2024</h6>
									<h3>Skin rejuvenation for the middle ages </h3>
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore fuga voluptatibus, unde excepturi laudantium provident assumenda deleniti ea.</p>
								</div>
							</a>							
							
						</div>
						 
						
					</div>
				</div>
            </div>
          </div>
	</section>

<script>
  window.onload = function() {
    var activeIndex = document.querySelector('.active').index;
    var items = document.querySelectorAll('.post-item');
    
    for (var i = 0; i < items.length; i++) {
      items[i].classList.add('hidden');
    }
    
    for (var i = activeIndex - 2; i <= activeIndex + 2; i++) {
      if (i >= 0 && i < items.length) {
        items[i].classList.remove('hidden');
      }
    }
  };
</script>

	