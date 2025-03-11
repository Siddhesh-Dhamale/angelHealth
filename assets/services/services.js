var tl_services = new TimelineMax();
tl_services.to(".loader", .5, {delay:1,opacity:0,ease:Power1.easeInOut})
  .to(".loader", .5, {zIndex:-1,ease:Power1.easeInOut})
  .staggerFrom(".circle", 1, {scale:'0.1',ease:Power1.easeInOut} , 0.1, "-=1")
  .staggerTo(".line", 1, {width:'100vw',ease:Power1.easeInOut} , 0.1, "-=1.2")
  .staggerFrom(".spib", 1, {y:150,ease:Power1.easeInOut} , 0.1 ) 
  .from(".para-slide", 1, {opacity:0,y:100,ease:Power1.easeInOut} , "-=1")

;
 