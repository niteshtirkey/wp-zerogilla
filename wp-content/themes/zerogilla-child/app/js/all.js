jQuery(document).ready(function($) {
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
        
        // tabs.eq(index).find('.progress-fill').animate({width: '100%'}, 10000);
    }

    function nextTab() {
        currentTab = (currentTab + 1) % totalTabs;
        showTab(currentTab);
    }

    showTab(0);
    interval = setInterval(nextTab, 10000);

    $('.service-tabs').hover(
        function() { clearInterval(interval); },
        // function() { interval = setInterval(nextTab, 10000); }
    );

    tabs.click(function() {
        currentTab = $(this).index();
        showTab(currentTab);
        clearInterval(interval);
        // interval = setInterval(nextTab, 10000);
    });




    // caard slide 

   
  let currentIndex = 0;
  const cardWidth = $('.travel-card').outerWidth(true);
  const totalCards = $('.travel-card').length;
  const visibleCards = 3;

  $('.next').on('click', function () {
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
    $('.travel-track').css(
      'transform',
      `translateX(-${currentIndex * cardWidth}px)`
    );
  }

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
      { breakpoint: 1024, settings: { slidesToShow: 3 } },
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

  
});