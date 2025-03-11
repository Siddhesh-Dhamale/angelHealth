<link rel="stylesheet" type="text/css" href="assets/templates/plugins/fullpage/fullpage.min.css" /> 
<script type="text/javascript" src="assets/templates/plugins/fullpage/fullpage.min.js"></script>
<script type="text/javascript">

	
if (screen.width > 900) {
	
	var myFullpage = new fullpage('#fullpage', {
		//sectionsColor: ['#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff', '#ffffff'],
		anchors: ['section-01', 'section-02', 'section-03', 'section-04', 'section-05', 'section-06', 'section-07', 'section-08', 'section-09', 'section-10'],
		menu: '.main-nav ul',
		lockAnchors: false,
		navigationTooltips: ['Start', 'Code of attraction', 'Science', 'Health + Skin', 'Health + Hair', 'Health + Weight', 'Reverse', 'FAQs', 'Open', 'Easy', 'Touch'],
		navigation: true,
		navigationPosition: 'right', 
		showActiveTooltip: true,
		slidesNavigation: false,
		slidesNavPosition: 'bottom',

		responsiveWidth: 900,
		afterResponsive: function (isResponsive) {},
		//Scrolling
		css3: true,
		scrollingSpeed: 2000,
		autoScrolling: true,
		fitToSection: true,
		//fitToSectionDelay: 1000,
		scrollBar: false,
		easing: 'easeInOutCubic',
		easingcss3: 'ease',
	});
	
	
}
else { 
}

</script>