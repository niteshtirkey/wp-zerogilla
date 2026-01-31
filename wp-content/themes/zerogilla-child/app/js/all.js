jQuery(document).ready(function($) {
    // Mobile toggle functionality
    $('.mobile-toggle').on('click', function() {
        $(this).toggleClass('active');
        $('.nav').toggleClass('active');
        $('.auth').toggleClass('active');
        $('body').toggleClass('menu-open');
    });
    
    // Close menu when clicking nav links
    $('.nav a').on('click', function() {
        $('.mobile-toggle').removeClass('active');
        $('.nav').removeClass('active');
        $('.auth').removeClass('active');
        $('body').removeClass('menu-open');
    });
    let currentTab = 0;
    const tabs = $('.service-tab');
    const images = $('.service-image');
    const totalTabs = tabs.length;
    let interval;

    tabs.each(function() {
        $(this).append('<div class="progress-bar"><div class="progress-fill"></div></div>');
    });

    function showTab(index) {
        tabs.removeClass('active');
        images.removeClass('active');
        $('.progress-fill').stop().css('width', '0%');
        
        tabs.eq(index).addClass('active');
        images.eq(index).addClass('active');
        
        tabs.eq(index).find('.progress-fill').animate({width: '100%'}, 10000);
    }

    function nextTab() {
        currentTab = (currentTab + 1) % totalTabs;
        showTab(currentTab);
    }

    showTab(0);
    interval = setInterval(nextTab, 10000);

    $('.service-tabs').hover(
        function() { clearInterval(interval); },
        function() { interval = setInterval(nextTab, 10000); }
    );

    tabs.click(function() {
        currentTab = $(this).index();
        showTab(currentTab);
        clearInterval(interval);
        interval = setInterval(nextTab, 10000);
    });




    // Travel cards slider with responsive behavior
  let currentIndex = 0;
  let visibleCards = getVisibleCards();
  
  function getVisibleCards() {
    const width = window.innerWidth || $(window).width();
    if (width <= 600) {
      return 1;
    } else if (width <= 1200) {
      return 2;
    } else {
      return 3;
    }
  }
  
  function updateSlider() {
    visibleCards = getVisibleCards();
    const totalCards = $('.travel-card').length;
    
    // Reset index if it's out of bounds
    if (currentIndex > totalCards - visibleCards) {
      currentIndex = Math.max(0, totalCards - visibleCards);
    }
    
    slideTrack();
  }

  $('.next').on('click', function () {
    const totalCards = $('.travel-card').length;
    if (currentIndex < totalCards - visibleCards) {
      currentIndex++;
      slideTrack();
    }
  });

  $('.prev').on('click', function () {
    if (currentIndex > 0) {
      currentIndex--;
      slideTrack();
    }
  });

  function slideTrack() {
    const $slider = $('.travel-slider');
    const sliderWidth = $slider.width();
    const moveDistance = sliderWidth / visibleCards;
    
    $('.travel-track').css(
      'transform',
      `translateX(-${currentIndex * moveDistance}px)`
    );
  }
  
  // Update slider on window resize
  $(window).on('resize', function() {
    updateSlider();
  });

  // logo slide 

   const $track = $('.logo-marquee__track');
  let position = 0;
  const speed = 0.3; // lower = slower

  function animateMarquee() {
    position -= speed;

    // reset when half of track is scrolled
    if (Math.abs(position) >= $track.width() / 2) {
      position = 0;
    }

    $track.css('transform', `translateX(${position}px)`);
    requestAnimationFrame(animateMarquee);
  }

  animateMarquee();


  // Rating slide 

  $('.ratings-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 5000,
    arrows: false,
    dots: false,
    infinite: true,
    responsive: [
      { breakpoint: 1025, settings: { slidesToShow: 3 } },
      { breakpoint: 768, settings: { slidesToShow: 2 } },
      { breakpoint: 480, settings: { slidesToShow: 1 } }
    ]
  });

  $('.arrow.next').on('click', function () {
    $('.ratings-slider').slick('slickNext');
  });

  $('.arrow.prev').on('click', function () {
    $('.ratings-slider').slick('slickPrev');
  });

  // QR Cards scroll animation and positioning
  function checkQRCards() {
    const section = $('#ly-app-scanner');
    const cards = $('.qr-cards');
    const heroSection = $('.hero');
    
    if (section.length) {
      const winTop = $(window).scrollTop();
      const winH = $(window).height();
      const sectionTop = section.offset().top;
      const sectionHeight = section.outerHeight();
      const sectionBottom = sectionTop + sectionHeight;
      
      // Mobile: only show when in ly-app-scanner section and not in hero
      if (window.innerWidth <= 600) {
        if (winTop + winH > sectionTop && winTop < sectionBottom) {
          cards.css({'visibility': 'visible', 'opacity': '1'});
        } else {
          cards.css({'visibility': 'hidden', 'opacity': '0'});
        }
      } else {
        // Desktop/tablet behavior
        if (winTop + winH > sectionTop && winTop < sectionBottom) {
          cards.css('opacity', '1');
          let progress = (winTop + winH / 2 - sectionTop) / sectionHeight;
          progress = Math.max(0, Math.min(1, progress));
          const translateY = (progress - 0.5) * 220;
          cards.css('transform', `translate(-50%, -50%) translateY(${translateY}px)`);
        } else {
          cards.css('opacity', '0');
        }
      }
    }
  }

  $(window).on('scroll', checkQRCards);
  $(window).on('resize', checkQRCards); // Also check on resize
  checkQRCards(); // Check on load



});