var tl_home = new TimelineMax();
tl_home.to(".loader", .5, {delay:1,opacity:0,ease:Power1.easeInOut})
  .to(".loader", .5, {zIndex:-1,ease:Power1.easeInOut})
  .staggerFrom(".spib", 1, {y:150,ease:Power1.easeInOut} , 0.1 )
  .from(".para-slide", 1, {opacity:0,y:100,ease:Power1.easeInOut} , "-=1") 

  .from(".hero-banner", 1, {scale:0,ease:Power1.easeInOut} , "-=1") 
  .from(".hero-banner img", 1, {scale:2,ease:Power1.easeInOut} , "-=1") 

  .staggerFrom(".dots-circle", .5, {scale:0,ease:Power1.easeInOut} , 0.1 )

;

 