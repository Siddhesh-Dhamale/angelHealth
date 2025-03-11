
gsap.config({ trialWarn: false });
gsap.registerPlugin(SplitText, ScrollTrigger, DrawSVGPlugin);


$(window).scroll(function () {
	
	if ($(document).scrollTop() > 50) { $('header').addClass('stickyheader');} else {$('header').removeClass('stickyheader');};
	if ($(document).scrollTop() > 150) { $('.btn-scrollTop').addClass('active');} else {$('.btn-scrollTop').removeClass('active');}; 
	
});

$('.pageLink').click(function(e) {
	e.preventDefault();
	href = $(this).attr('href');
	$('#clickAnimation_wrp').animate( { width: '100%',opacity:1, zIndex:999999999999999999 }, 1000, function() {window.location = href;});
});

$('.pageLink').click(function(){
	var tab_id = $(this).attr('data-tab');
	$("#clickAnimation_wrp").addClass('current');
});

$(document).ready(function() {
    // Check if the screen size is larger than a certain threshold (e.g., 768px)
    if (window.matchMedia("(min-width: 990px)").matches) {
        // Initialize ScrollTrigger for smooth scrolling animations
        gsap.registerPlugin(ScrollSmoother);

		// create the smooth scroller FIRST!
		const smoother = ScrollSmoother.create({content: "#scrollsmoother-container",smooth:2,normalizeScroll: true,ignoreMobileResize: true,effects: true, preventDefault: true,ease: 'power4.out',smoothTouch: 1, });
 
    } else {
        // Disable ScrollTrigger for mobile devices
        gsap.config({
            autoKillThreshold: 9999 // Set a large threshold to disable ScrollTrigger
        });
        console.log("ScrollTrigger disabled on mobile devices.");
    }
});





$('section.services-sec-04 ul.np-tabs li').click(function(){
	$(".overlay_01").width(0);
});
 
 

$(function() {
  $('.smoothScroll').click(function() {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {$('html,body').animate({scrollTop: target.offset().top-90}, 1000);return false;}
    }
  });
});

 
const split_0 = new SplitText(".sc", { type: "lines" });

split_0.lines.forEach((target0) => {
  gsap.to(target0, {
    backgroundPositionX: 0,
	y:0,
    ease: "none",
    scrollTrigger: {
      trigger: target0,
      //markers: true,
      scrub: 1,
      start: "-=400px center",
      end:  "-=300px center",
    }
  })
});
 
const split_1 = new SplitText(".sc_h1", { type: "lines" });

split_1.lines.forEach((target1) => {
  gsap.to(target1, {
    backgroundPositionX: 0,
	y:0,
    ease: "none",
    scrollTrigger: {
      trigger: target1,
      //markers: true,
      scrub: 1,
      start: "-=400px center",
      end:  "-=300px center",
    }
  })
});
	
const split_2 = new SplitText(".sc_h2", { type: "lines" });
split_2.lines.forEach((target2) => {
  gsap.to(target2, {
    backgroundPositionX: 0,
    ease: "none",
    scrollTrigger: {
      trigger: target2,
      //markers: true,
      scrub: 1,
      start: "-=400px center",
      end:  "-=300px center",
    }
  })
});


const split_3 = new SplitText(".sc_h3", { type: "lines" });
split_3.lines.forEach((target3) => {
  gsap.to(target3, {
    backgroundPositionX: 0,
    ease: "none",
    scrollTrigger: {
      trigger: target3,
      //markers: true,
      scrub: 1,
      start: "-=400px center",
      end:  "-=300px center",
    }
  })
});


///////////////////////////////
/*********Text Reveal*********/
///////////////////////////////
let windowWidth = window.outerWidth;

$(".split-text").each(function (index) {
  let myText = $(this);
  let mySplitText;
  function createSplits() {
    mySplitText = new SplitText(myText, {
      type: "chars,words,lines",
      charsClass: "split-chars",
      wordsClass: "split-words",
      linesClass: "split-lines"
    });
  }
  createSplits();
  $(window).resize(function () {
  	if (window.outerWidth !== windowWidth) {
    	mySplitText.revert();
			location.reload();
    }
    windowWidth = window.outerWidth;
  });
});
 
function createTextAnimations() {
  // Line Animation
  $(".col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .col-md-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12").each(function (index) {
    let triggerElement = $(this);
    let myText = $(this).find(".split-text");
    let targetElement = $(this).find(".split-lines");

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: triggerElement,
        // trigger element - viewport
        /*start: "top bottom",
        end: "bottom bottom",*/
	  start: "-=300px center",
	  end:  "-=350px center",
        scrub: 3,
        //toggleActions: "restart none none none"
      }
    });
    tl.from(targetElement, {
      duration: .4,
      y: "150%",
      rotationX: -90,
      opacity: 0,
      ease: "power1.inOut",
      stagger: {
        amount: 0.4,
        from: "0"
      }
    });
  });
  // Word Animation
  $(".word-animation").each(function (index) {
    let triggerElement = $(this);
    let myText = $(this).find(".split-text");
    let targetElement = $(this).find(".split-words");

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: triggerElement,
        // trigger element - viewport
        start: "top bottom",
        end: "bottom top",
        toggleActions: "restart none none none"
      }
    });
    tl.from(targetElement, {
      duration: 0.3,
      y: "80%",
      rotationX: -90,
      opacity: 0,
      ease: "power1.inOut",
      stagger: {
        amount: 0.9,
        from: "0"
      }
    });
  });
  // Letter Animation
  $(".letter-animation").each(function (index) {
    let triggerElement = $(this);
    let myText = $(this).find(".split-text");
    let targetElement = $(this).find(".split-chars");

    let tl = gsap.timeline({
      scrollTrigger: {
        trigger: triggerElement,
        // trigger element - viewport
        start: "top bottom",
        end: "bottom top",
        toggleActions: "restart none none none"
      }
    });
    tl.from(targetElement, {
      duration: 0.5,
      y: "60%",
      opacity: 0,
      rotationX: -90,
      ease: "power1.inOut",
      stagger: {
        amount: 0.7,
        from: "0"
      }
    });
  });
}
createTextAnimations();

///////////////////////////////
/*********Text Reveal*********/
///////////////////////////////



///////////////////////////////
/*****Mouse-Move-Cursure******/
///////////////////////////////

var hoverMouse = function($el) {
  $el.each(function() {
    var $self = $(this);
    var hover = false;
    var offsetHoverMax = $self.attr("offset-hover-max") || 0.5;
    var offsetHoverMin = $self.attr("offset-hover-min") || 0.4;

    var attachEventsListener = function() {
      $(window).on("mousemove", function(e) {
        //
        var hoverArea = hover ? offsetHoverMax : offsetHoverMin;

        // cursor
        var cursor = {
          x: e.clientX,
          y: e.clientY + $(window).scrollTop()
        };

        // size
        var width = $self.outerWidth();
        var height = $self.outerHeight();

        // position
        var offset = $self.offset();
        var elPos = {
          x: offset.left + width / 2,
          y: offset.top + height / 2
        };

        // comparaison
        var x = cursor.x - elPos.x;
        var y = cursor.y - elPos.y;

        // dist
        var dist = Math.sqrt(x * x + y * y);

        // mutex hover
        var mutHover = false;

        // anim
        if (dist < width * hoverArea) {
          mutHover = true;
          if (!hover) {
            hover = true;
          }
          onHover(x, y);
        }

        // reset
        if (!mutHover && hover) {
          onLeave();
          hover = false;
        }
      });
    };

    var onHover = function(x, y) {
      TweenMax.to($self, 0.4, {
        x: x * 0.8,
        y: y * 0.8,
        //scale: .9,
        rotation: x * 0.05,
        ease: Power2.easeOut
      });
    };
    var onLeave = function() {
      TweenMax.to($self, 0.7, {
        x: 0,
        y: 0,
        scale: 1,
        rotation: 0,
        ease: Elastic.easeOut.config(1.2, 0.4)
      });
    };

    attachEventsListener();
  });
};

hoverMouse($('.btn_move'));
//($('.lw_thumbs img'));
hoverMouse($('.btn-scroll-down'));
	 

///////////////////////////////
/********scrollTrigger********/
///////////////////////////////
	 
const tl_overlay_bg = gsap.utils.toArray('.overlay_bg');
tl_overlay_bg.forEach(overlay_bg => {gsap.to(overlay_bg, 1, {/*className:"lw_name show_txt",width:0,*/x:'102%',scrollTrigger: {trigger: overlay_bg,start:'top bottom',end: "bottom bottom",scrub: 1}})});


const tl_lwthumb = gsap.utils.toArray('.lwthumb');
tl_lwthumb.forEach(lwthumb => {gsap.from(lwthumb, {scale: 1.3,scrollTrigger: {trigger: lwthumb,scrub: true}})});

const tl_lwname = gsap.utils.toArray('.overlay_01');
tl_lwname.forEach(overlay_01 => {gsap.to(overlay_01, 0.01, {/*className:"lw_name show_txt",width:0,*/width:'0%',scrollTrigger: {trigger: overlay_01, start:'150px bottom',end: "100px bottom",scrub: 1, }})});
 
 

// apply parallax effect to any element with a data-speed attribute
gsap.utils.toArray("[data-speed]").forEach(el => {
  gsap.to(el, {
    y: function() {return (1 - parseFloat(el.getAttribute("data-speed"))) * (ScrollTrigger.maxScroll(window) - (this.scrollTrigger ? this.scrollTrigger.start : 0))},
    ease: "none",
    scrollTrigger: {
      trigger: el,
      start: " bottom top",
      end: "max",
      invalidateOnRefresh: true,
      scrub: true
    }
  });
});


///////////////////////////////
/********scrollTrigger********/
///////////////////////////////