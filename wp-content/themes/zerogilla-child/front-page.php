<?php get_header(); ?>

<main class="site-main homepage">
  <!-- Your custom homepage content here -->
  <section class="hero">
    <picture>
      <source srcset="<?php echo get_template_directory_uri(); ?>/assets/images/ZeroZilla-banner.webp" media="(min-width: 768px)">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ZeroZilla-banner.webp" alt="bg img">
    </picture>
    <div class="container">
      <div class="hero__content">
        <h1>The Engineering Behind<br />Great Marketing</h1>

        <p>
          At Zerozilla Studio, we blend creativity, data, and systems thinking to
          make marketing as measurable, scalable, and predictable as technology itself.
        </p>

        <div class="hero__actions">
          <a href="#" class="btn btn--primary">Download Our Playbook</a>
          <a href="#" class="btn btn--ghost">Talk to a Strategist</a>
        </div>

        <div class="hero__logos">
          <p>Here’s why people choose to work with us</p>
          <div class="brand-logo">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Gatewise.webp" alt="bg img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Signeez.webp" alt="bg img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ClykOps.webp" alt="bg img">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/screee.webp" alt="bg img">
          </div>

        </div>
      </div>
    </div>
  </section>

  <section class="growth">
    <div class="container">
      <div class="growth__container">
        <!-- LEFT -->
        <div class="growth__left">
          <span class="label">Our Stack</span>
          <h2>
            Your Growth Stack<br />
            <strong>Fully Engineered</strong>
          </h2>
        </div>

        <!-- RIGHT -->
        <div class="growth__right">
          <p>
            From brand identity to performance campaigns, we connect every
            moving part of marketing into one cohesive, repeatable system.
            Our approach aligns strategy, design, content, and growth to
            ensure consistent messaging, measurable results, and scalable
            success across all channels.
          </p>

          <a href="#" class="btn">Explore Our Stack</a>
        </div>
      </div>
    </div>
  </section>



  <section class="stack">
    <div class="stack__container">
      <!-- LEFT -->
      <ul class="stack__menu">
        <li class="active" data-stack="design">DESIGN STUDIO</li>
        <li data-stack="branding">BRANDING & IDENTITY</li>
        <li data-stack="seo">SEO & AI-SEO</li>
        <li data-stack="media">PAID MEDIA</li>
        <li data-stack="social">SOCIAL & INFLUENCER</li>
        <li data-stack="content">CONTENT & STORYTELLING</li>
        <li data-stack="pr">REPUTATION & PR</li>
      </ul>

      <!-- CENTER -->
      <div class="stack__center">
        <div class="stack__line">
          <span class="stack__line-fill"></span>
          <span class="stack__indicator"></span>
        </div>

        <div class="stack__counter">
          <span id="current">01</span> — <span id="total">07</span>
        </div>
      </div>

      <!-- RIGHT -->
      <div class="stack__right">
        <!-- Each card has unique ID matching menu data-stack values -->
        <div class="stack__card active" id="design">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a1.webp" alt="bg img">
          <h3>Design Studio</h3>
          <ul class="tags">
            <li style="list-style: none;">Website</li>
            <li>Motion Design</li>
            <li>Ad Creatives</li>
          </ul>
          <p class="desc">
            Zerozilla Studio’s Design Studio delivers user-centric, visually impactful design solutions from branding to UX/UI helping businesses communicate clearly and stand out across digital touchpoints.
          </p>
          <a href="#" class="btn">Explore Our Stack</a>
        </div>

        <!-- 2 - Branding -->
        <div class="stack__card" id="branding">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a1.webp" alt="bg img">
          <h3>Design Studio</h3>
          <ul class="tags">
            <li style="list-style: none;">Website</li>
            <li>Motion Design</li>
            <li>Ad Creatives</li>
          </ul>
          <p class="desc">
            Zerozilla Studio’s Design Studio delivers user-centric, visually impactful design solutions from branding to UX/UI helping businesses communicate clearly and stand out across digital touchpoints.
          </p>
          <a href="#" class="btn">Explore Our Stack</a>
        </div>

        <!-- 3 - SEO -->
        <div class="stack__card" id="seo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a1.webp" alt="bg img">
          <h3>Design Studio</h3>
          <ul class="tags">
            <li style="list-style: none;">Website</li>
            <li>Motion Design</li>
            <li>Ad Creatives</li>
          </ul>
          <p class="desc">
            Zerozilla Studio’s Design Studio delivers user-centric, visually impactful design solutions from branding to UX/UI helping businesses communicate clearly and stand out across digital touchpoints.
          </p><a href="#" class="btn">Explore Our Stack</a>
        </div>

        <!-- 4 - Media -->
        <div class="stack__card" id="media">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a1.webp" alt="bg img">
          <h3>Design Studio</h3>
          <ul class="tags">
            <li style="list-style: none;">Website</li>
            <li>Motion Design</li>
            <li>Ad Creatives</li>
          </ul>
          <p class="desc">
            Zerozilla Studio’s Design Studio delivers user-centric, visually impactful design solutions from branding to UX/UI helping businesses communicate clearly and stand out across digital touchpoints.
          </p><a href="#" class="btn">Explore Our Stack</a>
        </div>

        <!-- 5 - Social -->
        <div class="stack__card" id="social">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a1.webp" alt="bg img">
          <h3>Design Studio</h3>
          <ul class="tags">
            <li style="list-style: none;">Website</li>
            <li>Motion Design</li>
            <li>Ad Creatives</li>
          </ul>
          <p class="desc">
            Zerozilla Studio’s Design Studio delivers user-centric, visually impactful design solutions from branding to UX/UI helping businesses communicate clearly and stand out across digital touchpoints.
          </p><a href="#" class="btn">Explore Our Stack</a>
        </div>

        <!-- 6 - Content -->
        <div class="stack__card" id="content">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a1.webp" alt="bg img">
          <h3>Design Studio</h3>
          <ul class="tags">
            <li style="list-style: none;">Website</li>
            <li>Motion Design</li>
            <li>Ad Creatives</li>
          </ul>
          <p class="desc">
            Zerozilla Studio’s Design Studio delivers user-centric, visually impactful design solutions from branding to UX/UI helping businesses communicate clearly and stand out across digital touchpoints.
          </p><a href="#" class="btn">Explore Our Stack</a>
        </div>

        <!-- 7 - PR -->
        <div class="stack__card" id="pr">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/images/a1.webp" alt="bg img">
          <h3>Design Studio</h3>
          <ul class="tags">
            <li style="list-style: none;">Website</li>
            <li>Motion Design</li>
            <li>Ad Creatives</li>
          </ul>
          <p class="desc">
            Zerozilla Studio’s Design Studio delivers user-centric, visually impactful design solutions from branding to UX/UI helping businesses communicate clearly and stand out across digital touchpoints.
          </p><a href="#" class="btn">Explore Our Stack</a>
        </div>
      </div>
    </div>
  </section>

  <section class="case-study">
    <!-- BACKGROUND -->
    <picture class="case-study__bg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/it-bg.webp" alt="bg image" />
    </picture>

    <div class="container">
      <!-- TOP CONTENT -->
      <div class="case-study__top">
        <div class="case-study__top-left">
          <span class="eyebrow">Case Study Highlights</span>
          <h2>
            Integrate with your<br />
            existing <span>workflows</span>
          </h2>
        </div>

        <div class="case-study__top-right">
          <p>
            Every brand we collaborate with follows a structured growth
            framework covering discovery, design, deployment, and
            optimization.
          </p>
          <a href="#" class="btn">See More Case Studies</a>
        </div>
      </div>

      <!-- STACK WRAPPER (IMPORTANT) -->
      <div class="case-study__stack">
        <!-- CARD 1 -->
        <div class="case-study__card">
          <div class="case-study__card-left">
            <span class="count">01</span>
            <h3>MedEquip</h3>
            <p class="highlight">
              +120% organic growth with<br />AI-SEO architecture
            </p>
            <a href="#" class="link">View project</a>
          </div>
          <div class="case-study__card-right">
            <img src="images/c1.webp" alt="project image">
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="case-study__card">
          <div class="case-study__card-left">
            <span class="count">02</span>
            <h3>HealthTech</h3>
            <p class="highlight">
              Conversion-focused UX<br />design system
            </p>
            <a href="#" class="link">View project</a>
          </div>
          <div class="case-study__card-right">
            <img src="images/c2.webp" alt="project image">
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="case-study__card">
          <div class="case-study__card-left">
            <span class="count">03</span>
            <h3>FinServe</h3>
            <p class="highlight">
              3× engagement via<br />AI-driven optimization
            </p>
            <a href="#" class="link">View project</a>
          </div>
          <div class="case-study__card-right">
            <img src="images/c3.webp" alt="project image">
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="why-us">
    <div class="why-us__container">

      <!-- TOP ROW -->
      <div class="why-us__top">

        <!-- LEFT BIG CARD -->
        <div class="why-us__card why-us__card--intro">
          <span class="label">Why Us</span>
          <h2>Creative Systems<br>Not Chaos</h2>
          <p>
            Most marketing efforts collapse under guesswork. We build creative
            systems that run on structure, where design, strategy, and execution
            work in sync. With over a decade of engineering discipline, we’ve
            turned marketing into a function that can be designed, tested, and
            improved just like great software.
          </p>
        </div>

        <!-- RIGHT CARD -->
        <div class="why-us__card">
          <div class="icon">🧠</div>
          <h3>Tech + Marketing DNA</h3>
          <p>
            Engineered workflows, AI-powered insights, and automation at every layer.
          </p>
        </div>

      </div>

      <!-- BOTTOM ROW -->
      <div class="why-us__bottom">

        <div class="why-us__card">
          <div class="icon">📊</div>
          <h3>Accountable Creativity</h3>
          <p>
            Every design, ad, or story is tied to measurable business outcomes.
          </p>
        </div>

        <div class="why-us__card">
          <div class="icon">🤝</div>
          <h3>Agile Partnership</h3>
          <p>
            We don’t deliver campaigns; we deliver sprints, transparency, and results.
          </p>
        </div>

        <div class="why-us__card">
          <div class="icon">🌍</div>
          <h3>Global Perspective</h3>
          <p>
            100+ professionals, 20+ retainer clients, and projects across the globe.
          </p>
        </div>

      </div>

    </div>
  </section>

  <section class="playbook">
    <div class="playbook__container">

      <!-- TOP -->
      <div class="playbook__top">
        <div class="playbook__top-left">
          <span class="label">Marketing & Branding Kit</span>
          <h2>
            Steal Our Marketing &<br />
            Branding <span>Playbook</span>
          </h2>
        </div>

        <div class="playbook__top-right">
          <p>
            We codified ten years of brand-building into one toolkit —
            templates for positioning, voice, SEO, content planning,
            and media execution. Download the same playbook we use
            with 100+ brands to simplify growth.
          </p>

          <a href="#" class="btn">Get The Playbook</a>
        </div>
      </div>

      <!-- BOTTOM -->
      <div class="playbook__bottom">

        <!-- STATS CARD -->
        <div class="playbook__card playbook__card--stats">
          <h3>2K+</h3>
          <span class="subtitle">Downloads Successfully</span>
          <p>
            Lorem ipsum dolor sit amet consectetur.
            Mi tempor in vel elit aliquam nec rutrum.
          </p>
        </div>

        <!-- IMAGE CARD -->
        <div class="playbook__card playbook__card--image">
          <img src="images/branding.jpg" alt="Marketing & Branding">
          <span class="overlay-text">Marketing & Branding</span>
        </div>

      </div>

    </div>
  </section>

  <section class="testimonial-section">
    <picture class="testimonial__bg">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/t1.webp" alt="bg image" />
    </picture>
    <div class="container">
      <span class="label">Testimonials</span>
      <h2>
        Trusted by Teams Who Value<br>
        Speed, Ownership & Results
      </h2>
      <p class="sub">
        Top clients tell us that they love working with Zerozilla Studio.
      </p>
      <div class="test-cont">
        <!-- LEFT CONTENT -->
        <div class="left">


          <div class="clients">
            <div class="client active" data-index="0">
              <img src="img/client1.jpg" />
              <div>
                <h4>Abhishek Singhvi</h4>
                <span>Finance And Operations</span>
              </div>
            </div>

            <div class="client" data-index="1">
              <img src="img/client2.jpg" />
              <div>
                <h4>Anthony C. Ogden</h4>
                <span>Managing Director</span>
              </div>
            </div>

            <div class="client" data-index="2">
              <img src="img/client3.jpg" />
              <div>
                <h4>Umesh Vaidyamath</h4>
                <span>Co-Founder and CEO</span>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT CONTENT -->
        <div class="right">
          <div class="testimonial active">
            <p>
              As an emerging business, Gateway sought a comprehensive solution to
              bolster our website, graphic design endeavors, and IT requirements.
              Zerozilla came highly recommended...
            </p>
            <div class="brand">GATEWAY</div>
          </div>

          <div class="testimonial">
            <p>
              Zerozilla epitomizes reliability, collaboration, and affordability.
              They consistently deliver outstanding results.
            </p>
            <div class="brand">OGDEN GROUP</div>
          </div>

          <div class="testimonial">
            <p>
              Zerozilla is an invaluable partner and helped us scale efficiently.
            </p>
            <div class="brand">UMESH VENTURES</div>
          </div>
        </div>
      </div>
    </div>
  </section>


</main>

<?php get_footer(); ?>