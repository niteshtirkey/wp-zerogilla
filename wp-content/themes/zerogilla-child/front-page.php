<?php get_header(); ?>

<main class="site-main homepage">
  <header class="site-header">
    <div class="container">
      <div class="logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo.svg" alt="Lynk Taxi Service Logo"> </div>

      <button class="mobile-toggle">
        <span></span>
        <span></span>
        <span></span>
      </button>

      <nav class="nav">
        <a href="#">Business</a>
        <a href="#">Personal</a>
        <a href="#">Drivers</a>
        <a href="#">Services</a>
      </nav>

      <div class="auth">
        <button class="btn-outline">Register</button>
        <button class="btn-primary">Log in</button>
      </div>
    </div>
  </header>


  <section class="hero">
    <div class="container">
      <!-- TOP HEADING -->
      <div class="hero-title">
        <h1>
          Dublin’s #1 <span>Taxi Service</span>
        </h1>
      </div>
      <div class="hero-wrapper">

        <!-- LEFT -->
        <div class="service-tabs">

          <!-- BOOK -->
          <div class="service-tab active" data-tab="book">
            <div class="tab-head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Book-1.svg" alt="Book taxi icon"> <span>Book</span></div>

            <div class="tab-body">
              <h2>Book for Now or Later</h2>
              <p>Go anywhere with Lynk - book in seconds, arrives in minutes</p>

              <div class="actions">
                <a href="#" class="call"><strong><span style="font-style: italic;">Call</span> <span style="color: blue;">01 8 20 20 20 </span></strong><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call.svg" alt="Call now">
                </a>
                <div class="info-cta">
                  <button class="primary">Book Online</button>
                  <button class="outline">Download App</button>
                </div>

              </div>
            </div>
          </div>

          <!-- BUSINESS -->
          <div class="service-tab" data-tab="business">
            <div class="tab-head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Business-1.svg" alt="Business services"> <span>Business</span></div>

            <div class="tab-body">
              <h2>Reliable Travel for Employees and Guests</h2>
              <p>Save time, cut costs and manage how your business moves with Lynk Business</p>

              <div class="actions business-cta">
                <a href="#" class="call"><strong><span style="font-style: italic;">Call</span> <span style="color: blue;">01 8 20 20 20 </span></strong><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call.svg" alt="Call now">
                </a>
                <button class="outline">Learn More</button>
              </div>
              <a class="business-btn" href="#"><span> Contact Us</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow icon"></a>
            </div>
          </div>

          <!-- DRIVER -->
          <div class="service-tab" data-tab="driver">
            <div class="tab-head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Drive-1.svg" alt="Driver services"> <span>Driver</span></div>

            <div class="tab-body">
              <h2>One App. Thousands of High Value Passengers</h2>
              <p>Make the most of your time on the road. Pay 0% commission on cash, card* & hotel fares with Lynk</p>
              <p>* For Lynk bookings with card-in-car payments, on your own device.</p>

              <div class="actions business-cta">
                <button class="primary">Get Driver App</button>
                <a class="business-btn" href="#"><span> Contact Us</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow icon"></a>
              </div>
            </div>
          </div>

        </div>

        <div class="service-images">
          <div class="service-image active" data-tab="book">
            <img src="https://www.lynk.ie/wp-content/uploads/2024/06/Book.webp" alt="Book taxi service online" />
          </div>

          <div class="service-image" data-tab="business">
            <img src="https://www.lynk.ie/wp-content/uploads/2024/07/Reliable-Business-Transportation.webp" alt="Business transportation services" />
          </div>

          <div class="service-image" data-tab="driver">
            <img src="https://www.lynk.ie/wp-content/uploads/2024/06/Driver.webp" alt="Become a Lynk driver" />
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="call-cta">
    <div class="call-cta__inner">

      <span class="call-cta__label">Looking for a Taxi</span>

      <h2 class="call-cta__title">
        Call
        <a href="tel:018202020" class="call-cta__number">
          01 8 20 20 20
          <span class="call-cta__icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call-button.webp" alt="App download icon"></span>
        </a>
      </h2>

      <p class="call-cta__desc">
        Prebook your next taxi with Lynk by app, online or give us a call<br>
        Pick a vehicle for any journey &amp; pay your way by cash or card
      </p>

      <a href="#" class="call-cta__btn">Download App</a>

    </div>
  </section>

  <section class="booking-method">
    <div class="booking-method__inner">

      <!-- TITLE -->
      <div class="booking-method__title">
        <h2>
          What’s your <span>favourite</span><br />
          way to book?
        </h2>
      </div>

      <!-- CONTENT -->
      <div class="booking-method__content">

        <!-- LEFT -->
        <div class="booking-method__left">
          <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Use-the-App.svg" alt="App download icon"></div>

          <h3>Get the App</h3>

          <p>
            Book on the go with the Lynk Taxi App. Book in a tap, track your taxi
            and add a card for effortless contactless payments.
          </p>

          <a href="#" class="call-cta__btn">Get the App</a>
        </div>

        <!-- RIGHT -->
        <div class="booking-method__right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image-2.webp" alt="App download icon">
        </div>

      </div>
    </div>
    <div class="booking-method__inner">
      <!-- CONTENT -->
      <div class="booking-method__content">
        <!-- RIGHT -->
        <div class="booking-method__right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image-1.webp" alt="App download icon">
        </div>
        <!-- LEFT -->
        <div class="booking-method__left">
          <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Book-Online.svg" alt="App download icon"></div>
          <h3>Book Online</h3>
          <p>
            Easily book from any desktop or mobile device. Book as a guest for a once off booking or create a Personal or Business account.
          </p>
          <div class="info-cta">
            <button class="primary">Book Online</button>
            <button class="outline">
              Register for Free</button>
          </div>
        </div>
      </div>
    </div>
    <div class="booking-method__inner">
      <!-- CONTENT -->
      <div class="booking-method__content">
        <!-- LEFT -->
        <div class="booking-method__left">
          <div class="icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Call1.svg" alt="App download icon"></div>
          <h3>Call to Book</h3>
          <p>
            We’re always here to take your booking. Speak with one of our booking support team by phone. Save the number
            01 8 20 20 20
          </p>
          <a href="#" class="call"><strong><span style="font-style: italic;">Call</span> <span style="color: blue;">01 8 20 20 20 </span></strong><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/call.svg" alt="Call now">
          </a>
        </div>
        <!-- RIGHT -->
        <div class="booking-method__right">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/image.webp" alt="App download icon">
        </div>
      </div>
    </div>
  </section>

  <section class="travel-types">
    <div class="travel-types__header">
      <h2>
        <span>Multiple</span> ways to travel
      </h2>



      <div class="slider-controls">
        <button class="arrow prev">‹</button>
        <button class="arrow next">›</button>
      </div>
    </div>

    <div class="travel-slider">
      <div class="travel-track">

        <div class="travel-card">
          <img src="https://www.lynk.ie/wp-content/uploads/2025/05/Any-Taxi-1.webp" alt="Any Taxi service">
          <div class="t-cont">
            <h3>Any Taxi</h3>
            <p>• Quickest option</p>
            <p class="hover-desc">
              We’ll get the next available taxi to you.
            </p>
          </div>
        </div>

        <div class="travel-card">
          <img src="https://www.lynk.ie/wp-content/uploads/2025/05/Saloon.webp" alt="Saloon taxi service">
          <div class="t-cont">
            <h3>Saloon</h3>
            <p>• 4 seater taxi</p>
            <p class="hover-desc">
              Usually lower to the ground for easier access.
            </p>
          </div>
        </div>

        <div class="travel-card">
          <img src="https://www.lynk.ie/wp-content/uploads/2025/05/Van.webp" alt="Van taxi service">
          <div class="t-cont">
            <h3>Van</h3>
            <p>• 6 – 8 seater taxi</p>
            <p class="hover-desc">
              Perfect for a small group or large family heading to the airport.
            </p>
          </div>
        </div>

        <div class="travel-card">
          <img src="https://www.lynk.ie/wp-content/uploads/2025/05/Accessible.webp" alt="Accessible taxi service">
          <div class="t-cont">
            <h3>Accessible</h3>
            <p>• Wheelchair accessible taxi</p>

            <p class="hover-desc">
              A vehicle designed with ramps and restraints so wheelchair users can travel in comfort.
            </p>
          </div>
        </div>

        <div class="travel-card">
          <img src="https://www.lynk.ie/wp-content/uploads/2025/05/Electric-Hybrid.webp" alt="Electric and Hybrid taxi service">
          <div class="t-cont">
            <h3>Electric / Hybrid</h3>
            <p>• Eco-friendly option</p>
            <p class="hover-desc">
              A mix of both electric and hybrid taxis for a greener journey.
            </p>
          </div>
        </div>

      </div>
    </div>
  </section>

  <section class="office-app">
    <div class="office-app__inner">

      <!-- LEFT CONTENT -->
      <div class="office-app__content">
        <span class="office-app__label">The Office Taxi App</span>

        <h2>
          The ease of an app – designed for desks, offices and receptions
        </h2>

        <p>
          A taxi booking and payment solution for businesses across
          multiple industries. Get your team or your guests where they
          need to go with Lynk Business – an all in one booking dashboard
          designed for business.
        </p>

        <div class="office-app__actions">
          <a href="#" class="btn-primary">Contact Us</a>
          <a class="business-btn" href="#"><span> Contact Us</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/w-arrow.webp" alt="Arrow icon"></a>
        </div>
      </div>

      <!-- RIGHT IMAGE -->
      <div class="office-app__visual">
        <div class="blob"></div>

        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Save_Time_3.webp" alt="App download icon">
      </div>

    </div>
  </section>

  <section class="benefits">
    <div class="container">
      <div class="benefits__inner">

        <!-- LEFT CONTENT -->
        <div class="benefits__content">
          <h2>
            Benefits of<br />
            <span>Lynk Business</span>
          </h2>

          <p class="benefits__intro">
            A fast, reliable and convenient way to travel. All business customers
            get a premium service with Lynk.
          </p>

          <ul class="benefits__list">
            <li>Card or Bill Pay</li>
            <li>Priority Booking</li>
            <li>Bespoke Invoicing</li>
            <li>Unlimited Users</li>
            <li>Security Pins &amp; Passwords</li>
            <li>Account Manager</li>
          </ul>

          <a class="business-btn" href="#"><span> Learn more</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow icon"></a>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="benefits__visual">
          <img
            src="https://www.lynk.ie/wp-content/uploads/2024/06/ilustracion.webp"
            alt="Lynk Business Premium" />
        </div>

      </div>
    </div>
  </section>

  <section class="solutions">
    <div class="solutions__inner">

      <!-- Heading -->
      <div class="solutions__header">
        <h2>
          Simple <span>software</span> that excels
        </h2>
        <p>Solutions for every industry</p>
      </div>

      <!-- Cards -->
      <div class="solutions__cards">

        <div class="solution-card">
          <div class="icon"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Corporate.webp" alt="Corporate icon"></div>
          <h3>Corporate</h3>
          <p>Business trips & events.</p>
        </div>

        <div class="solution-card">
          <div class="icon"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Healthcare.webp" alt="Healthcare icon"></div>
          <h3>Healthcare</h3>
          <p>Dedicated patient & carer transportation.</p>
        </div>

        <div class="solution-card">
          <div class="icon"> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Hospitality.webp" alt="Hospitality icon"></div>
          <h3>Hospitality</h3>
          <p>Guest & client booking.</p>
        </div>

      </div>

      <!-- CTA -->
      <div class="solutions__cta">
        <a href="#" class="pill-cta">
          <span class="pill-cta__text">Learn more</span>
          <span class="pill-cta__icon"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/btn-right.svg" alt="Arrow icon">
        </a>

      </div>

    </div>
  </section>

  <section class="logo-marquee">
    <div class="logo-marquee__track">

      <!-- ORIGINAL LOGOS -->
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s1.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s2.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s3.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s4.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s5.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s6.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s7.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s8.webp" alt="Partner company logo">
      </div>

      <!-- DUPLICATE (IMPORTANT) -->

      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s1.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s2.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s3.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s4.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s5.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s6.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s7.webp" alt="Partner company logo">
      </div>
      <div class="logo">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/s8.webp" alt="Partner company logo">
      </div>

    </div>
  </section>

  <section class="drivers-cta">
    <div class="drivers-cta__inner">

      <h2>
        <span>Lynk Drivers</span> Pay Less
      </h2>

      <p>
        Drive your taxi with Lynk and get more from your time on the road.
        Download the driver app and gain access to thousands of high quality,
        high value reliable passengers.
      </p>

      <div class="drivers-cta__actions">
        <a href="#" class="call-cta__btn">Get the App</a>
        <a class="business-btn" href="#"><span> Contact Us</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow icon"></a>
      </div>

    </div>
  </section>

  <section class="driver-benefits">
    <div class="driver-benefits__wrapper">

      <!-- CENTER TITLE -->
      <div class="driver-benefits__title">
        <h2>
          <span>Benefits</span> of<br />
          driving with Lynk
        </h2>
      </div>

      <!-- CONTENT GRID -->
      <div class="driver-benefits__grid">

        <!-- LEFT CONTENT -->
        <div class="driver-benefits__content">
          <ul class="benefits-list">

            <li>
              <span class="icon">✓</span>
              <div class="text">
                <h4>Average fares of €35</h4>
                <p>
                  Gain access to high value passengers. We’re known for having some of the most reliable passengers in Dublin.
                </p>
              </div>
            </li>

            <li>
              <span class="icon">✓</span>
              <div class="text">
                <h4>0% commission on cash, card* & hotel fares</h4>
                <p>
                  Stop paying high commissions on every booking. All cash, card and hotel fares are free with Lynk. You only pay commission on account fares.
                </p>
              </div>
            </li>

            <li>
              <span class="icon">✓</span>
              <div class="text">
                <h4>Driver support team</h4>
                <p>
                  Have an issue or need assistance with a booking? Lynk has a driver support team dedicated to helping drivers 24/7.
                </p>
              </div>
            </li>
            <li>
              <span class="icon">✓</span>
              <div class="text">
                <h4>Better cost management for you</h4>
                <p>
                  Gain full access from only €85 per week. Unlimited earnings with bookings available Mon –Sun. Options also available for Pay Per Job drivers.
                </p>
              </div>
            </li>
            <li>
              <span class="icon">✓</span>
              <div class="text">
                <h4>Easy to use app</h4>
                <p>
                  Simple and user friendly driver app which shows your position in your zone and upcoming prebookings available.
                </p>
              </div>
            </li>
            <li class="driver-cta">
              <button class="primary">Get Driver App</button>
              <a class="business-btn" href="#"><span> Learn more</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/arrow.svg" alt="Arrow icon"></a>
            </li>

          </ul>
        </div>

        <!-- RIGHT IMAGE -->
        <div class="driver-benefits__image">
          <img
            src="https://www.lynk.ie/wp-content/uploads/2024/06/Driver.webp"
            alt="Lynk Driver" />
        </div>

      </div>
    </div>
  </section>
  <section class="customer-ratings">
    <div class="customer-ratings__wrapper">

      <!-- TITLE -->
      <div class="customer-ratings__header">
        <h2>Customer <span>Ratings</span></h2>

        <div class="summary">
          <strong>EXCELLENT</strong>
          <div class="stars">★★★★★</div>
          <p>Based on <b>4231 reviews</b></p>
          <img src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg" alt="Google">
        </div>
      </div>

      <!-- SLIDER -->
      <div class="ratings-slider">

        <!-- CARD -->
        <div class="rating-card">
          <div class="top">
            <div class="avatar g">G</div>
            <h4>Gabriel Fabregas</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>On time and helpful driver</p>
        </div>

        <div class="rating-card">
          <div class="top">
            <div class="avatar n">N</div>
            <h4>Noeleen Cronan</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>Phoned for taxi very straight forward, only waited 5 min.</p>
        </div>

        <div class="rating-card">
          <div class="top">
            <img class="photo" src="https://randomuser.me/api/portraits/men/32.jpg">
            <h4>Edward Doyle</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>Prompt and very courteous drivers</p>
        </div>

        <div class="rating-card">
          <div class="top">
            <div class="avatar j">J</div>
            <h4>James Flynn</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>Driver Maurice was a gentleman. Very pleasant experience.</p>
        </div>

        <div class="rating-card">
          <div class="top">
            <div class="avatar g">G</div>
            <h4>Gabriel Fabregas</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>On time and helpful driver</p>
        </div>

        <div class="rating-card">
          <div class="top">
            <div class="avatar n">N</div>
            <h4>Noeleen Cronan</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>Phoned for taxi very straight forward, only waited 5 min.</p>
        </div>

        <div class="rating-card">
          <div class="top">
            <img class="photo" src="https://randomuser.me/api/portraits/men/32.jpg">
            <h4>Edward Doyle</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>Prompt and very courteous drivers</p>
        </div>

        <div class="rating-card">
          <div class="top">
            <div class="avatar j">J</div>
            <h4>James Flynn</h4>
            <img class="google" src="https://upload.wikimedia.org/wikipedia/commons/2/2f/Google_2015_logo.svg">
          </div>
          <div class="stars">★★★★★</div>
          <p>Driver Maurice was a gentleman. Very pleasant experience.</p>
        </div>

      </div>

      <!-- ARROWS -->
      <div class="slider-arrows">
        <button class="arrow prev"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/left-arrow.svg" alt="Arrow icon"></button>
        <button class="arrow next"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/right-arrow.svg" alt="Arrow icon"></button>
      </div>

    </div>
  </section>

  <section class="ly-app-scanner" id="ly-app-scanner">
    <div class="ly-app-scanner__inner">

      <!-- Background App Screens -->
      <div class="app-grid">
        <div class="app-col">
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/10xx.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/11xx.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/12xx.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/10xx.webp" />
        </div>
        <div class="app-col">
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/2xx-1.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/5xx-1.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/11xx-1.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/2xx-1.webp" />
        </div>
        <div class="app-col">
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/8-Driver-En-Route-to-Pickup-1.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/12xx.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/11xx-1-1.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/12xx.webp" />
        </div>
        <div class="app-col">
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/8-Driver-En-Route-to-Pickup-1.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/12xx.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/11xx-1-1.webp" />
          <img src="https://www.lynk.ie/wp-content/uploads/2024/06/12xx.webp" />
        </div>
      </div>

      <!-- Sticky QR Cards -->
      <div class="qr-cards">
        <a href="#" class="qr-card passenger">
          <img src="https://www.lynk.ie/wp-content/uploads/2025/12/Passenger-App.png" />
          <div>
            <h4>Lynk Passenger App</h4>
            <p>Scan QR code to download</p>
          </div>
        </a>

        <a href="#" class="qr-card driver">
          <img src="https://www.lynk.ie/wp-content/uploads/2025/12/Untitled-presentation-19.png" />
          <div>
            <h4>Lynk Driver App</h4>
            <p>Scan QR code to download</p>
          </div>
        </a>
      </div>

    </div>
  </section>


</main>

<script>
  window.addEventListener('scroll', function() {
    const header = document.querySelector('.site-header');
    if (window.scrollY > 50) {
      header.classList.add('scrolled');
    } else {
      header.classList.remove('scrolled');
    }
  });

  // QR Cards functionality moved to all.js to prevent conflicts
  // jQuery(function ($) {
  //   const $section = $('#ly-app-scanner');
  //   const $cards = $('.qr-cards');

  //   function syncCardsWithScroll() {
  //     if (window.innerWidth <= 600) {
  //       $cards.css({
  //         'transform': 'none',
  //         'opacity': '1',
  //         'visibility': 'visible'
  //       });
  //       return;
  //     }
  //     const winTop = $(window).scrollTop();
  //     const winH = $(window).height();

  //     const secTop = $section.offset().top;
  //     const secH = $section.outerHeight();
  //     const secBottom = secTop + secH;

  //     // Only move cards while inside section
  //     if (winTop + winH > secTop && winTop < secBottom) {
  //       // Scroll progress inside section (0 → 1)
  //       let progress =
  //         (winTop + winH / 2 - secTop) / secH;

  //       // Clamp between 0 and 1
  //       progress = Math.max(0, Math.min(1, progress));

  //       // Translate range (adjust if needed)
  //       const translateY = (progress - 0.5) * 220;

  //       $cards.css(
  //         'transform',
  //         `translateY(${translateY}px)`
  //       );
  //     }
  //   }

  //   $(window).on('scroll', syncCardsWithScroll);
  //   syncCardsWithScroll(); // run on load
  // });
</script>

<?php get_footer(); ?>