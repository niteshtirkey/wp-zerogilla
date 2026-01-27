

// $(document).ready(function () {
//     // Function to reset widths to default
//     function resetWidths() {
//       $(".image-left").css("max-width", "770px");
//       $(".image-right").css("max-width", "420px");
//     }
  
//     // When .image-left is hovered
//     $(".image-left").hover(
//       function () {
//         // Reset both images to default first
//         resetWidths();
//         // Set .image-left to 770px (expand)
//         $(this).css("max-width", "770px");
//         // Set .image-right to 420px (shrink)
//         $(".image-right").css("max-width", "420px");
//       },
//       function () {
//         // Do nothing on hover out (keep the last state)
//       }
//     );
  
//     // When .image-right is hovered
//     $(".image-right").hover(
//       function () {
//         // Reset both images to default first
//         resetWidths();
//         // Set .image-right to 770px (expand)
//         $(this).css("max-width", "770px");
//         // Set .image-left to 420px (shrink)
//         $(".image-left").css("max-width", "420px");
//       },
//       function () {
//         // Do nothing on hover out (keep the last state)
//       }
//     );
//   });

// $(document).ready(function () {
//   function resetWidths() {
//     $(".image-left").css("max-width", "770px");
//     $(".image-right").css("max-width", "420px");
//   }

//   $(".image-left").hover(
//     function () {
//       resetWidths();
//       $(this).css("max-width", "720px"); // Shrink
//       $(".image-right").css("max-width", "720px"); // Expand
//     },
//     function () {
//       resetWidths();
//     }
//   );

//   $(".image-right").hover(
//     function () {
//       resetWidths();
//       $(this).css("max-width", "720px"); // Expand
//       $(".image-left").css("max-width", "720px"); // Shrink
//     },
//     function () {
//       resetWidths();
//     }
//   );
// });

// $(document).ready(function () {
//   let isAnimating = false; // Flag to prevent hover interruption

//   function startAnimation() {
//     isAnimating = true;
//     setTimeout(() => {
//       isAnimating = false; // Allow new hover only after transition completes
//     }, 800); // Match CSS transition duration (0.8s = 800ms)
//   }

//   $(".image-left").hover(function () {
//     if (!isAnimating) {
//       startAnimation();
//       $(".image-container").addClass("hover-left").removeClass("hover-right");
//     }
//   });

//   $(".image-right").hover(function () {
//     if (!isAnimating) {
//       startAnimation();
//       $(".image-container").addClass("hover-right").removeClass("hover-left");
//     }
//   });

//   // Reset to default state when mouse leaves
//   $(".image-container").mouseleave(function () {
//     if (!isAnimating) {
//       startAnimation();
//       $(".image-container").removeClass("hover-left hover-right"); // Reset classes
//     }
//   });
// });
//Magic Tab JS
// script.js
// $(document).ready(function() {
//     console.log("hello");
//     // Set initial state
//     $('.accordion-item:first .accordion-content').addClass('active');
//     $('.accordion-item:first .icon').text('-');
//     $('.feature-image[data-feature="Windows"]').addClass('active');

//     $('.accordion-header').click(function() {
//         const $header = $(this);
//         const $content = $header.next('.accordion-content');
//         const $icon = $header.find('.icon');
//         const feature = $header.find('h3').text(); // Change h2 to h3 as per your updated HTML

//         // Close all other panels
//         $('.accordion-content').not($content).removeClass('active');
//         $('.icon').not($icon).text('+');
        
//         // Toggle current panel
//         $content.toggleClass('active');
//         $icon.text($content.hasClass('active') ? '-' : '+');

//         // Update image
//         if ($content.hasClass('active')) {
//             $('.feature-image').removeClass('active');
//             $(`.feature-image[data-feature="${feature}"]`).addClass('active');
//         }
//     });
// });

// $(document).ready(function() {
//     console.log("hello");

//     // Set initial state
//     $('.accordion-item:first .accordion-content').addClass('active');
//     $('.accordion-item:first .icon img').attr('src', 'assets/images/min.svg');
//     $('.feature-image[data-feature="Windows"]').addClass('active');
//     $('.feature-images[data-feature="Windows"]').addClass('active');

//     $('.accordion-header').click(function() {
//         const $header = $(this);
//         const $content = $header.next('.accordion-content');
//         const $icon = $header.find('.icon img');
//         const feature = $header.find('h3').text();

//         // Close all other panels and reset their icons
//         $('.accordion-content').not($content).removeClass('active');
//         $('.icon img').attr('src', 'assets/images/max.svg'); // Reset all icons

//         // Toggle current panel
//         $content.toggleClass('active');

//         // Change icon based on active state
//         if ($content.hasClass('active')) {
//             $icon.attr('src', 'assets/images/min.svg'); // Show "-" when open
//         } else {
//             $icon.attr('src', 'assets/images/max.svg'); // Show "+" when closed
//         }

//         // Update image
//         if ($content.hasClass('active')) {
//             $('.feature-image').removeClass('active');
//             $(`.feature-image[data-feature="${feature}"]`).addClass('active');
//             $('.feature-images').removeClass('active');
//             $(`.feature-images[data-feature="${feature}"]`).addClass('active');
//         }
//     });
// });
$(document).ready(function () {
    $('.split-container').each(function () {
        const $container = $(this); // Scope to each accordion section

        // Reset all images, accordion content, and icons in this container
        $container.find('.feature-image, .feature-images').removeClass('active');
        $container.find('.accordion-content').removeClass('active');
        $container.find('.icon img').attr('src', 'assets/images/max.svg');

        // Set initial state for each accordion section (activate the first item)
        const $firstItem = $container.find('.accordion-item:first');
        $firstItem.find('.accordion-content').addClass('active');
        $firstItem.find('.icon img').attr('src', 'assets/images/min.svg');

        // Show only the first accordion's image in each section
        const firstFeature = $.trim($firstItem.find('h3').text());
        $container
            .find(`.feature-image[data-feature="${firstFeature}"], .feature-images[data-feature="${firstFeature}"]`)
            .addClass('active');

        // Accordion click handler
        $container.find('.accordion-header').click(function () {
            const $header = $(this);
            const $content = $header.next('.accordion-content');
            const $icon = $header.find('.icon img');
            const feature = $.trim($header.find('h3').text());

            // If the clicked accordion is already active, do nothing
            if ($content.hasClass('active')) {
                return;
            }

            // Close all other panels in THIS container
            $container.find('.accordion-content').removeClass('active');
            $container.find('.icon img').attr('src', 'assets/images/max.svg'); // Reset all icons

            // Open the clicked panel
            $content.addClass('active');
            $icon.attr('src', 'assets/images/min.svg'); // Show "-" when open

            // Hide all images in this container
            $container.find('.feature-image, .feature-images').removeClass('active');

            // Show only the active accordion's image
            $container
                .find(`.feature-image[data-feature="${feature}"], .feature-images[data-feature="${feature}"]`)
                .addClass('active');
        });
    });
});






// $(document).ready(function () {
//     // Make the first image visible by default
//     $('.tl-item:first-child .tl-bg').css({
//         opacity: 1,
//         filter: 'grayscale(0)'
//     });

//     // Handle hover events
//     $('.tl-item').hover(
//         function () {
//             // Hide the first image
//             $('.tl-item:first-child .tl-bg').css({
//                 opacity: 0,
//                 filter: 'grayscale(100%)'
//             });

//             // Show the hovered item's image
//             $(this).find('.tl-bg').css({
//                 opacity: 1,
//                 filter: 'grayscale(0)'
//             });
//         },
//         function () {
//             // Reset to default state when hover ends
//             $('.tl-item:first-child .tl-bg').css({
//                 opacity: 1,
//                 filter: 'grayscale(0)'
//             });

//             // Hide the previously hovered item's image
//             $(this).find('.tl-bg').css({
//                 opacity: 0,
//                 filter: 'grayscale(100%)'
//             });
//         }
//     );
// });
$(document).ready(function(){
    $('.slick-slider').slick({
        dots: true,               // Show navigation dots
        arrows: false,            // Disable default arrows
        infinite: false,           // Enable infinite loop
        autoplay: false,          // Disable autoplay
        autoplaySpeed: 3000,      // Slide changes every 3s
        slidesToShow: 1,          // Show one slide at a time
        slidesToScroll: 1,        // Scroll one slide at a time
        fade: true,               // Smooth fade effect
        cssEase: 'linear',        // Smooth transition
    });

    // Custom Navigation Buttons
    $('.custom-prev').click(function(){
        $('.slick-slider').slick('slickPrev');
    });

    $('.custom-next').click(function(){
        $('.slick-slider').slick('slickNext');
    });
});


// document.addEventListener('DOMContentLoaded', function() {
//     const mobileMenuButton = document.querySelector('.mobile-menu');
//     const navLinks = document.querySelector('.nav-links');

//     mobileMenuButton.addEventListener('click', function() {
//         navLinks.classList.toggle('active');
//     });
// });
document.addEventListener('DOMContentLoaded', function () {
    const mobileMenuButton = document.querySelector('.mobile-menu');
    const mobileMenuIcon = mobileMenuButton.querySelector('img');
    const navLinks = document.querySelector('.nav-links');
    const navLinksAnchors = document.querySelectorAll('.nav-links a'); // Select all nav links
    const header = document.querySelector('.header');
    const body = document.body;

    const originalIcon = "./assets/images/toggle.svg"; // Default menu icon
    const crossIcon = "./assets/images/cross.svg"; // Cross icon
    const headerHeight = header.offsetHeight; // Get the height of the fixed header

    // Function to close menu and enable scrolling
    function closeMenu() {
        navLinks.classList.remove('active');
        header.classList.remove('menu-open');
        body.style.overflow = ""; // Enable scrolling
        mobileMenuIcon.src = originalIcon; // Reset icon
    }

    // Toggle menu on button click
    mobileMenuButton.addEventListener('click', function () {
        const isActive = navLinks.classList.toggle('active');
        header.classList.toggle('menu-open', isActive);

        // Disable or enable scrolling
        body.style.overflow = isActive ? "hidden" : "";

        // Change menu icon
        mobileMenuIcon.src = isActive ? crossIcon : originalIcon;
    });

    // Close menu and scroll smoothly when a nav link is clicked
    navLinksAnchors.forEach(anchor => {
        anchor.addEventListener('click', function (event) {
            event.preventDefault(); // Prevent default anchor behavior

            const targetId = this.getAttribute('href'); // Get the section ID
            const targetSection = document.querySelector(targetId); // Get the section element

            if (targetSection) {
                closeMenu(); // Close the menu first

                // Delay slightly to ensure menu is closed first
                setTimeout(() => {
                    const sectionPosition = targetSection.getBoundingClientRect().top + window.scrollY; 
                    const offsetPosition = sectionPosition - headerHeight; // Adjust for the fixed header

                    window.scrollTo({
                        top: offsetPosition,
                        behavior: 'smooth' // Smooth scrolling
                    });
                }, 100);
            }
        });
    });
});

