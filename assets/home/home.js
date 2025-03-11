var tl_home = new TimelineMax();
tl_home.to(".loader", .5, {delay:1,opacity:0,ease:Power1.easeInOut})
  .to(".loader", .5, {zIndex:-1,ease:Power1.easeInOut})
  .staggerFrom(".spib", 1, {y:150,ease:Power1.easeInOut} , 0.1 )
  .from(".para-slide", 1, {opacity:0,y:100,ease:Power1.easeInOut} , "-=1")

;



 gsap.registerPlugin("scrollTrigger");

  const rotationItems = document.querySelectorAll(".rotation-item");

  gsap.set(rotationItems, { autoAlpha: 0 });

  function rotateText(index) {
    gsap.to(rotationItems[index], {
      rotationX: 360,
      opacity: 1,
      duration: 2,
      ease: "power2.out",
      onComplete: () => {
        gsap.to(rotationItems[index], {
          rotationX: 0,
          opacity: 0,
          duration: 2,
          delay: 1,
          onComplete: () => rotateText((index + 1) % rotationItems.length),
        });
      },
    });
  }

  rotateText(0);