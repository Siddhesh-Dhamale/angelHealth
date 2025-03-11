<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script> 
<script>
	$(".true-slider").slick({
		//slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		centerMode: true,
		focusOnSelect: true,
		autoplay: true,
		//autoplaySpeed: 5000,
		variableWidth: true,
		responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 3,
			slidesToScroll: 3,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});
	
	$(".beautiful-slider").slick({
		//slidesToShow: 3,
		slidesToScroll: 1,
		dots: false,
		//centerMode: true,
		focusOnSelect: true,
		autoplay: true,
		//autoplaySpeed: 5000,
		variableWidth: true,
		responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 4,
			slidesToScroll: 4,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 2,
			slidesToScroll: 2
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			//variableWidth: false,
		  }
		}
	  ]
	});
	
	
	$(".product-slider").slick({
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		//centerMode: true,
		focusOnSelect: true,
		autoplay: true,
		nav:false,
		//autoplaySpeed: 5000,
		//variableWidth: true,
		responsive: [
		{
		  breakpoint: 1024,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1,
			infinite: true,
			dots: true
		  }
		},
		{
		  breakpoint: 600,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		},
		{
		  breakpoint: 480,
		  settings: {
			slidesToShow: 1,
			slidesToScroll: 1
		  }
		}
	  ]
	});
</script>
 </script>

