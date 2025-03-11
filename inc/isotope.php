

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script> 
<script src="https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js"></script> 
<script src="assets/templates/js/isotope.js"></script>

<script>
	$('.btn.btn-link.collapsed').click(function() {
	  $('grid').isotope('layout');
	  $('.btn.btn-link.collapsed').removeClass('on');
		$('.accordion-content').slideUp('normal');
		if(
		$(this).next().is(':hidden') == true) {
		$(this).addClass('on');
			$(this).next().slideDown('normal');
		$('.grid').isotope('layout');
		}
	});
	$('.accordion-content').hide();

	$grid.on( 'click', '.btn.btn-link', function() {
	  console.log('clicked');
	  $('.grid').isotope('layout');
	
	
	});
 

/*
$(window).on('load', function() {
	$grid.isotope('shuffle');
});


$('.shuffle-button').on( 'click', function() {
  $grid.isotope('shuffle');
});
*/

	 
</script> 
<script>
   jQuery(document).ready(function($){

	var $container = $('.portfolioContainer');
	$container.isotope({
		itemSelector: '.color-shape',
		filter: '*',
		animationOptions: {
			duration: 750,
			easing: 'linear',
			queue: false
		}
	});


	$('.portfolioFilter li').click(function(){
		$('.portfolioFilter .is-checked').removeClass('is-checked');
		$(this).addClass('is-checked');

		var selector = $(this).attr('data-filter');
		$container.isotope({
			filter: selector,
			animationOptions: {
				duration: 750,
				easing: 'linear',
				queue: false
			}
		 });
		 return false;
	}); 


	//****************************
	// Isotope Load more button
	//****************************

	var initShow = 4; //number of images loaded on init & onclick load more button
	var counter = initShow; //counter for load more button
	var iso = $container.data('isotope'); // get Isotope instance
	//console.log(iso.elemCount);

	loadMore(initShow); //execute function onload

	function loadMore(toShow) {

		$container.find(".hidden").removeClass("hidden");

		var hiddenElems = iso.filteredItems.slice(toShow, iso.filteredItems.length).map(function(item) {
			//console.log(item.element);
		return item.element;
		});
		$(hiddenElems).addClass('hidden');
		$container.isotope('layout');

		//when no more to load, hide show more button
		if (hiddenElems.length == 0) {
		$("#load-more").hide();
		} 
		else {
		$("#load-more").show();
		};

	}


	//append load more button
	$container.after('<div class="viewPlan"><a href="#" class="btn btn-knowmore-05" id="load-more"><span class="txt">Load More</span></a></div>');

	//when load more button clicked
	 $(document).on("click", "#load-more", function(e) {
		e.preventDefault();

		if ($('#filters').data('clicked')) {
		//when filter button clicked, set initial value for counter
		counter = initShow;
		j$('#filters').data('clicked', false);
		} else {
		counter = counter;
		};

		counter = counter + initShow;

		loadMore(counter);
	});
});
</script>
 