<?php get_header(); ?>

<main class="site-main homepage">
  <!-- Your custom homepage content here -->


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
  <div class="hero-wrapper">

    <!-- LEFT TABS -->
    <div class="service-tabs">

      <div class="service-tab active" data-tab="book">
        <div class="tab-head">🚕 <span>Book</span></div>
        <div class="tab-body">
          <h2>Book for Now or Later</h2>
          <p>Go anywhere with Lynk - book in seconds, arrives in minutes</p>
          <div class="actions">
            <a href="#" class="call">Call <strong>01 8 20 20 20</strong></a>
            <button class="primary">Book Online</button>
            <button class="outline">Download App</button>
          </div>
        </div>
      </div>

      <div class="service-tab" data-tab="business">
        <div class="tab-head">💼 <span>Business</span></div>
        <div class="tab-body">
          <h2>Reliable Travel for Employees and Guests</h2>
          <p>Save time, cut costs and manage how your business moves with Lynk Business</p>
          <div class="actions">
            <a href="#" class="call">Call <strong>01 872 72 72</strong></a>
            <button class="outline">Learn More</button>
          </div>
        </div>
      </div>

      <div class="service-tab" data-tab="driver">
        <div class="tab-head">👨‍✈️ <span>Driver</span></div>
        <div class="tab-body">
          <h2>One App. Thousands of High Value Passengers</h2>
          <p>Make the most of your time on the road. Pay 0% commission.</p>
          <div class="actions">
            <button class="primary">Get Driver App</button>
            <a href="#" class="link">Learn more →</a>
          </div>
        </div>
      </div>

    </div>

    <!-- RIGHT IMAGES -->
    <div class="service-images">

      <div class="service-image active" data-tab="book">
        <img src="https://i.imgur.com/vfZP7Ih.png" alt="Book App">
      </div>

      <div class="service-image" data-tab="business">
        <img src="https://i.imgur.com/KF0a8oH.png" alt="Business App">
      </div>

      <div class="service-image" data-tab="driver">
        <img src="https://i.imgur.com/0R9Yc2X.png" alt="Driver App">
      </div>

    </div>

  </div>
</section>
</main>

<?php get_footer(); ?>