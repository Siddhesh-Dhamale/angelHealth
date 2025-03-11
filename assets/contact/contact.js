var tl_home = new TimelineMax();
tl_home.to(".loader", .5, {delay:1,opacity:0,ease:Power1.easeInOut})
  .to(".loader", .5, {zIndex:-1,ease:Power1.easeInOut})
  .from(".google-maps", 1, {scale:0,ease:Power1.easeInOut})
  .from(".google-maps img", 1, {scale:2,ease:Power1.easeInOut}, "-=1")  
  .staggerFrom(".spib", 1, {y:150,ease:Power1.easeInOut} , 0.1 , "-=1")  
  .staggerFrom(".para-slide", 0.5, {opacity:0,y:100,ease:Power1.easeInOut} , 0.1 , "-=0.5")  
  .from(".contact-sec-04", 1, {opacity:0,y:100,ease:Power1.easeInOut}, "-=1")  
;


 