jQuery(function ($) {
  const $items = $(".stack__menu li");
  const $indicator = $(".stack__indicator");
  const $lineFill = $(".stack__line-fill");
  const $cards = $(".stack__card");
  const itemHeight = $items.outerHeight(true);
  const totalItems = $items.length;

  function updateUI(index) {
    const indicatorTop = index * itemHeight;

    // Update indicator position and line fill
    $indicator.css("top", indicatorTop);
    $lineFill.css("height", indicatorTop + $indicator.outerHeight());

    // Update counter numbers
    const current = index + 1;
    const next = index + 1 < totalItems ? index + 2 : totalItems;

    $("#current").text(String(current).padStart(2, "0"));
    $("#total").text(String(next).padStart(2, "0"));
  }

  // Initialize with first item active
  updateUI(0);

  $items.on("click", function () {
    const index = $(this).index();
    const target = $(this).data("stack");

    // Update active menu item
    $items.removeClass("active");
    $(this).addClass("active");

    // Hide all cards, then show only the matching one
    $cards.removeClass("active");
    $("#" + target).addClass("active");

    // Update UI
    updateUI(index);
  });

// scroll 


});


  function initCardStack() {
  if (typeof jQuery === 'undefined') return;
  
  const $ = jQuery;
    const $stack = $(".case-study__stack");
    const $cards = $(".case-study__card");
    const totalCards = $cards.length;
    
    if (totalCards === 0) return;
    
    $(window).off("scroll.cardStack resize.cardStack");
    
    // Calculate dimensions
    const windowHeight = $(window).height();
    const stackTop = $stack.offset().top;
    
    // Each card gets 80% of viewport height
    const scrollPerCard = windowHeight * 0.8;
    const totalScrollDistance = scrollPerCard * totalCards;
    const extraSpace = windowHeight * 0.5;
    
    $stack.height(totalScrollDistance + extraSpace);
    
    // Track scroll position
    $(window).on("scroll.cardStack", function() {
      const scrollTop = $(window).scrollTop();
      const stackBottom = stackTop + $stack.outerHeight();
      
      // Only animate when stack is in viewport
      if (scrollTop + windowHeight < stackTop || scrollTop > stackBottom) {
        $cards.removeClass("is-active is-next is-prev is-far");
        return;
      }
      
      // Calculate progress (0 to totalCards)
      const rawProgress = (scrollTop - stackTop + windowHeight * 0.3) / scrollPerCard;
      const progress = Math.max(-0.5, Math.min(rawProgress, totalCards - 0.5));
      
      // Determine active card
      const activeIndex = Math.floor(progress);
      const activeProgress = progress - activeIndex; // -0.5 to 0.5
      
      // Update all cards
      $cards.each(function(index) {
        const $card = $(this);
        const distance = index - activeIndex;
        
        // Remove all state classes
        $card.removeClass("is-active is-next is-prev is-far");
        
        // Assign classes based on distance from active
        if (distance === 0) {
          // ACTIVE CARD - Always fully visible
          $card.addClass("is-active");
          
          // Move up slightly when being overtaken
          const moveY = Math.min(0, -activeProgress * 40);
          $card.css('transform', `translateY(calc(-50% + ${moveY}px)) scale(1)`);
          
        } else if (distance === 1) {
          // NEXT CARD - Coming up from below
          $card.addClass("is-next");
          
          // Only start appearing when activeProgress > 0.2
          if (activeProgress > 0.2) {
            const appearProgress = (activeProgress - 0.2) / 0.8;
            const startY = 200;
            const currentY = startY - (startY - 120) * appearProgress;
            const opacity = 0.4 * appearProgress;
            const scale = 0.92 + (0.08 * appearProgress);
            
            $card.css({
              'transform': `translateY(calc(-50% + ${currentY}px)) scale(${scale})`,
              'opacity': opacity
            });
          } else {
            $card.css({
              'transform': 'translateY(calc(-50% + 200px)) scale(0.92)',
              'opacity': 0
            });
          }
          
        } else if (distance === -1) {
          // PREVIOUS CARD - Moving up and fading
          $card.addClass("is-prev");
          
          // Fade out as activeProgress increases
          const fadeOutProgress = Math.min(1, activeProgress + 0.5);
          const moveY = -120 + (fadeOutProgress * 20);
          const opacity = 0.2 * (1 - fadeOutProgress);
          const scale = 0.88 - (fadeOutProgress * 0.08);
          
          $card.css({
            'transform': `translateY(calc(-50% + ${moveY}px)) scale(${scale})`,
            'opacity': opacity
          });
          
        } else if (Math.abs(distance) === 2) {
          // CARDS 2 AWAY - Very faint
          $card.addClass("is-far");
          $card.css({
            'transform': 'translateY(-50%) scale(0.8)',
            'opacity': 0.05
          });
          
        } else {
          // VERY FAR CARDS - Almost invisible
          $card.css({
            'transform': 'translateY(-50%) scale(0.7)',
            'opacity': 0
          });
        }
      });
    });
    
    // Handle resize
    $(window).on("resize.cardStack", function() {
      clearTimeout(window.resizeTimer);
      window.resizeTimer = setTimeout(initCardStack, 250);
    });
    
    // Initial trigger
    $(window).trigger("scroll.cardStack");
  }
  // Initialize
  setTimeout(initCardStack, 100);

  // testimonials 

jQuery(document).ready(function($) {
  let current = 0;
  const clients = $('.client');
  const testimonials = $('.testimonial');

  function activate(index) {
    clients.removeClass('active');
    testimonials.removeClass('active');

    clients.eq(index).addClass('active');
    testimonials.eq(index).addClass('active');

    // Auto scroll left side
    const offset = clients.eq(index).position().top;
    $('.clients').animate({
      scrollTop: offset - 60
    }, 500);
  }

  // Click event
  clients.on('click', function () {
    current = $(this).data('index');
    activate(current);
  });

  // Auto slide
  setInterval(() => {
    current = (current + 1) % clients.length;
    activate(current);
  }, 4500);
});

