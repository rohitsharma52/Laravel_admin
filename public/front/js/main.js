var swiper = new Swiper('.swiper-container', {
          effect: 'cube', // Cube effect
          grabCursor: true,
          loop: true,
          cubeEffect: {
              shadow: true,
              slideShadows: true,
              shadowOffset: 20,
              shadowScale: 0.94,
          },
          autoplay: {
              delay: 3000,  // 5 seconds delay between slides
              disableOnInteraction: false,  // Interaction ke baad autoplay continue rahe
          },
          speed: 1000,  // Transition speed: 1 second
          pagination: {
              el: '.swiper-pagination',
              clickable: true,
          },
          navigation: {
              nextEl: '.swiper-button-next',
              prevEl: '.swiper-button-prev',
          },
      });