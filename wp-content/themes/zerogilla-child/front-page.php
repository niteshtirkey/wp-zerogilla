<?php get_header(); ?>

<main class="site-main homepage">
  <header class="site-header">
    <div class="container">
      <div class="logo">Lynk</div>

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
            <div class="tab-head"><img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/Book-1.svg" alt="Book taxi"> <span>Book</span></div>

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
              <a class="business-btn" href="#"><span> Contact Us</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/images/arrow.svg" alt="Arrow icon"></a>
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
                 <a class="business-btn" href="#"><span> Contact Us</span> <img src="<?php echo get_stylesheet_directory_uri(); ?>/app/images/arrow.svg" alt="Arrow icon"></a>
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

</main>

<?php get_footer(); ?>