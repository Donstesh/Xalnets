@extends('layouts.header')

@section('content')
<!-- Hero Section -->
    <section id="hero" class="hero section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center mb-5">
          <div class="col-lg-6 mb-4 mb-lg-0">
            <div class="badge-wrapper mb-3">
              <div class="d-inline-flex align-items-center rounded-pill border border-accent-light">
                <div class="icon-circle me-2">
                  <i class="bi bi-bell"></i>
                </div>
                <span class="badge-text me-3">Innovative Solutions</span>
              </div>
            </div>

            <h1 class="hero-title mb-4">Innovative Solutions for a Connected Future</h1>

            <p class="hero-description mb-4">Your one-stop hub for seamless ISP billing, cutting-edge web & app development, secure cloud solutions, and powerful digital growth strategies.</p>

            <div class="cta-wrapper">
              <a href="#" class="btn btn-primary">Discover More</a>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="hero-image">
              <img src="assets/img/illustration/illustration-16.webp" alt="Business Growth" class="img-fluid" loading="lazy">
            </div>
          </div>
        </div>

        <div class="row feature-boxes">
          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-gear"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Rapid Deployment</h3>
                <p class="feature-text">Fast-track your projects with seamless, efficient solutions tailored to meet your business needs without delays.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-4 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-window"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Advanced Security</h3>
                <p class="feature-text">Protect your data with enterprise-grade security measures, ensuring privacy and safety across all digital platforms.</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="feature-box">
              <div class="feature-icon me-sm-4 mb-3 mb-sm-0">
                <i class="bi bi-headset"></i>
              </div>
              <div class="feature-content">
                <h3 class="feature-title">Dedicated Support</h3>
                <p class="feature-text">24/7 expert assistance to resolve issues quickly and keep your operations running smoothly at all times.</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p class="who-we-are">Who We Are</p>
            <h3>Unleashing Potential with Creative Strategy</h3>
            <p class="fst-italic">
              Empowering businesses with innovative solutions, cutting-edge technology, and strategic expertise to drive growth and digital transformation.
            </p>
            <ul>
              <li><i class="bi bi-check-circle"></i> <span><strong>Tailored Solutions</strong> – Custom strategies designed to fit your unique business needs.</span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Expert Team</strong> – Skilled professionals passionate about delivering exceptional results.</span></li>
              <li><i class="bi bi-check-circle"></i> <span><strong>Future-Ready</strong> – Scalable solutions that evolve with your growing ambitions.</span></li>
            </ul>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

          <div class="col-lg-6 about-images" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">
              <div class="col-lg-6">
                <img src="assets/img/about/about-portrait-1.webp" class="img-fluid" alt="">
              </div>
              <div class="col-lg-6">
                <div class="row gy-4">
                  <div class="col-lg-12">
                    <img src="assets/img/about/about-8.webp" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-12">
                    <img src="assets/img/about/about-12.webp" class="img-fluid" alt="">
                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- /About Section -->

    <!-- How We Work Section -->
    <section id="how-we-work" class="how-we-work section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>How We Work</h2>
        <p>Streamlined processes, cutting-edge tech, and client-focused execution drive our success.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="steps-5">
          <div class="process-container">

            <div class="process-item" data-aos="fade-up" data-aos-delay="200">
              <div class="content">
                <span class="step-number">01</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-pencil-square"></i>
                  </div>
                  <div class="step-content">
                    <h3>Project Planning</h3>
                    <p>We define goals, map strategies, and create blueprints to ensure your vision aligns with actionable execution.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="300">
              <div class="content">
                <span class="step-number">02</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-gear"></i>
                  </div>
                  <div class="step-content">
                    <h3>Development Phase</h3>
                    <p>Our experts build scalable, high-performance solutions using cutting-edge technologies tailored to your business requirements.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="400">
              <div class="content">
                <span class="step-number">03</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-search"></i>
                  </div>
                  <div class="step-content">
                    <h3>Testing &amp; QA</h3>
                    <p>Rigorous testing ensures flawless functionality, security, and user experience before your product goes live.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

            <div class="process-item" data-aos="fade-up" data-aos-delay="500">
              <div class="content">
                <span class="step-number">04</span>
                <div class="card-body">
                  <div class="step-icon">
                    <i class="bi bi-rocket-takeoff"></i>
                  </div>
                  <div class="step-content">
                    <h3>Launch &amp; Support</h3>
                    <p>We deploy seamlessly and provide ongoing support to optimize performance and adapt to evolving needs.</p>
                  </div>
                </div>
              </div>
            </div><!-- End Process Item -->

          </div>
        </div>

      </div>

    </section><!-- /How We Work Section -->

    <!-- Services Section -->
    <section id="services" class="services section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Services</h2>
        <p>End-to-end digital solutions—from billing software to cloud tech—designed to scale businesses with innovation and precision.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center g-5">
          <div class="col-md-6" data-aos="fade-left" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-shield-lock"></i>
              </div>
              <div class="service-content">
                <h3>ISP Billing Software</h3>
                <p>Streamline your internet service operations with our robust ISP billing software, automating invoicing, subscriptions, and revenue management. Reduce errors, enhance scalability, and deliver seamless customer experiences with real-time analytics and support.</p>
                <a href="https://billing.xalnets.com" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-code-slash"></i>
              </div>
              <div class="service-content">
                <h3>Custom Web Development</h3>
                <p>Transform your digital presence with tailor-made websites built for performance, security, and user engagement. From e-commerce to dynamic web apps, we craft responsive, SEO-friendly solutions that grow with your business.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="100">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-phone-fill"></i>
              </div>
              <div class="service-content">
                <h3>Mobile App Solutions</h3>
                <p>Elevate your brand with cross-platform mobile apps designed for iOS and Android. Our solutions prioritize speed, intuitive UX, and cutting-edge features to engage users and drive business growth.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-palette2"></i>
              </div>
              <div class="service-content">
                <h3>UI/UX Design</h3>
                <p>Captivate your audience with sleek, user-centric designs that enhance usability and brand identity. We combine aesthetics with functionality to create seamless, visually appealing interfaces that boost conversions and retention.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-left" data-aos-delay="200">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-bar-chart-line"></i>
              </div>
              <div class="service-content">
                <h3>Digital Marketing</h3>
                <p>Amplify your reach with data-driven marketing strategies, including SEO, PPC, and social media campaigns. We optimize visibility, engagement, and ROI to ensure your brand stands out in a competitive market.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

          <div class="col-md-6" data-aos="fade-right" data-aos-delay="300">
            <div class="service-item">
              <div class="service-icon">
                <i class="bi bi-cloud-check"></i>
              </div>
              <div class="service-content">
                <h3>Cloud Computing</h3>
                <p>Scale effortlessly with secure, high-performance cloud solutions, from migration to management. We leverage AWS, Azure, and Google Cloud to optimize costs, enhance flexibility, and ensure enterprise-grade reliability for your operations.</p>
                <a href="#" class="service-link">
                  <span>Learn More</span>
                  <i class="bi bi-arrow-right"></i>
                </a>
              </div>
            </div>
          </div><!-- End Service Item -->

        </div>

      </div>

    </section><!-- /Services Section -->

    <!-- Services Alt Section -->
    <section id="services-alt" class="services-alt section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="content-block">
              <h6 class="subtitle">Our innovative services</h6>
              <h2 class="title">Our customers excel in technology management</h2>
              <p class="description">
                At Xalnets, we deliver cutting-edge technology solutions designed to drive success. Our innovative services—from ISP billing to cloud computing—empower businesses to optimize operations, enhance security, and accelerate growth. Partner with us, and join our customers who excel in streamlined, future-ready technology management for unmatched competitive advantage.</p>
              <div class="button-wrapper">
                <a class="btn" href="services.html"><span>Explore All Services</span></a>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="services-list">
              <div class="service-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="200">
                <div class="service-icon">
                  <i class="bi bi-code-square"></i>
                </div>
                <div class="service-content">
                  <h4><a href="service-details.html">Software Engineering</a></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="service-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="300">
                <div class="service-icon">
                  <i class="bi bi-graph-up"></i>
                </div>
                <div class="service-content">
                  <h4><a href="service-details.html">Business Analytics</a></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="service-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="400">
                <div class="service-icon">
                  <i class="bi bi-phone"></i>
                </div>
                <div class="service-content">
                  <h4><a href="service-details.html">Mobile Solutions</a></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                </div>
              </div><!-- End Service Item -->

              <div class="service-item d-flex align-items-center" data-aos="fade-up" data-aos-delay="500">
                <div class="service-icon">
                  <i class="bi bi-gear"></i>
                </div>
                <div class="service-content">
                  <h4><a href="service-details.html">Tech Infrastructure</a></h4>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing.</p>
                </div>
              </div><!-- End Service Item -->
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Services Alt Section -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
        <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <div class="portfolio-filters-container" data-aos="fade-up" data-aos-delay="200">
            <ul class="portfolio-filters isotope-filters">
              <li data-filter="*" class="filter-active">All Work</li>
              <li data-filter=".filter-web">Web Design</li>
              <li data-filter=".filter-graphics">Graphics</li>
              <li data-filter=".filter-motion">Motion</li>
              <li data-filter=".filter-brand">Branding</li>
            </ul>
          </div>

          <div class="row g-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-1.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-1.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>Modern Dashboard Interface</h3>
                  <p>Maecenas faucibus mollis interdum sed posuere consectetur est at lobortis.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-10.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-10.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Creative Brand Identity</h3>
                  <p>Vestibulum id ligula porta felis euismod semper at vulputate.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-motion">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-7.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-7.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-motion"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Motion</span>
                  <h3>Product Animation Reel</h3>
                  <p>Donec ullamcorper nulla non metus auctor fringilla dapibus.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-brand">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-4.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-4.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-brand"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Branding</span>
                  <h3>Luxury Brand Package</h3>
                  <p>Aenean lacinia bibendum nulla sed consectetur elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-web">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-2.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-2.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-web"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Web Design</span>
                  <h3>E-commerce Platform</h3>
                  <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-6 col-md-6 portfolio-item isotope-item filter-graphics">
              <div class="portfolio-card">
                <div class="portfolio-image">
                  <img src="assets/img/portfolio/portfolio-11.webp" class="img-fluid" alt="" loading="lazy">
                  <div class="portfolio-overlay">
                    <div class="portfolio-actions">
                      <a href="assets/img/portfolio/portfolio-11.webp" class="glightbox preview-link" data-gallery="portfolio-gallery-graphics"><i class="bi bi-eye"></i></a>
                      <a href="portfolio-details.html" class="details-link"><i class="bi bi-arrow-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="portfolio-content">
                  <span class="category">Graphics</span>
                  <h3>Digital Art Collection</h3>
                  <p>Cras mattis consectetur purus sit amet fermentum.</p>
                </div>
              </div>
            </div><!-- End Portfolio Item -->

          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contact</h2>
        <p>Let’s collaborate! Contact us for innovative digital solutions that drive real results.</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4 mb-5">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-geo-alt"></i>
              </div>
              <h3>Our Address</h3>
              <p>3221, 30100 Eldoret, Kenya</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-telephone"></i>
              </div>
              <h3>Contact Number</h3>
              <p>Mobile: +254 (0) 720 924 348<br>
                Email: info@xalnets.com</p>
            </div>
          </div>

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="info-card">
              <div class="icon-box">
                <i class="bi bi-clock"></i>
              </div>
              <h3>Opening Hour</h3>
              <p>Monday - Saturday: 9:00 - 18:00<br>
                Sunday: Closed</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-12">
            <div class="form-wrapper" data-aos="fade-up" data-aos-delay="400">
              <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-person"></i></span>
                      <input type="text" name="name" class="form-control" placeholder="Your name*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Email address*" required="">
                    </div>
                  </div>
                </div>
                <div class="row mt-3">
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-phone"></i></span>
                      <input type="text" class="form-control" name="phone" placeholder="Phone number*" required="">
                    </div>
                  </div>
                  <div class="col-md-6 form-group">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-list"></i></span>
                      <select name="subject" class="form-control" required="">
                        <option value="">Select service*</option>
                        <option value="Service 1">Consulting</option>
                        <option value="Service 2">Development</option>
                        <option value="Service 3">Marketing</option>
                        <option value="Service 4">Support</option>
                      </select>
                    </div>
                  </div>
                  <div class="form-group mt-3">
                    <div class="input-group">
                      <span class="input-group-text"><i class="bi bi-chat-dots"></i></span>
                      <textarea class="form-control" name="message" rows="6" placeholder="Write a message*" required=""></textarea>
                    </div>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center">
                    <button type="submit">Submit Message</button>
                  </div>

                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </section><!-- /Contact Section -->
    @endsection