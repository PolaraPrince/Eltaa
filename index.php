<!DOCTYPE html>
<html lang="zxx">

<?php include 'commonHead.php'; ?>

<body>

  <!--Header -->
  <?php include 'header.php'; ?>

<style>/* Make sure images are responsive */
.img-fluid {
    max-width: 100%;
    height: auto;
}

/* Ensure the images within case studies have the same height */
.equal-height-img {
    object-fit: cover; /* Ensures images scale to cover their containers */
    height: 650px; /* Set a fixed height for consistency */
    width: 100%; /* Ensure it fills the container */
}

/* Ensure that the case study wrappers are aligned */
.case-studies-wrapper {
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

/* Optional: Make case study images equal in height when resizing */
@media (max-width: 768px) {
    .equal-height-img {
        height: 600px; /* Adjust height for smaller screens */
    }
}
</style>
  <div class="site-content">

    <div class="container-fluid">
      <div class="item-efftect">
        <div class="efftect overflow-hidden"></div>
        <div class="efftect overflow-hidden"></div>
        <div class="efftect overflow-hidden"></div>
        <div class="efftect overflow-hidden"></div>
        <div class="efftect overflow-hidden"></div>
      </div>
    </div>

    <!--=================================
        Main Banner -->
    <div class="main-banner main-banner-1">
      <div class="banner-inner">
        <img class="img-fluid banner-bg-one" src="images/banner/banner-01/banner-bg-01.png" alt="#">
        <h1 class="banner-title">Eltaa Innovations..!</h1>
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <img class="img-fluid rotate rotate-img" src="images/banner/banner-01/banner-shape-01.png" alt="#">
            </div>
            <div class="col-md-6 ms-auto">
              <div class="banner-content">
                <h3>Innovative Tech Solutions, Real Outcomes with Eltaa Innovations</h3>
                <!-- <a class="btn btn-effect" href="contact-us.php">
                  <span>Get A Quote</span>
                  <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_59_253)">
                      <path d="M19.4854 11.4293L17.0513 12.221C13.1214 13.4993 10.3036 16.9595 9.84784 21.0668C9.49371 16.981 6.71926 13.5081 2.81255 12.2604L0.210283 11.4293" stroke="white" stroke-width="2" />
                      <path d="M9.83594 20.8889L9.83594 0" stroke="white" stroke-width="2" />
                    </g>
                    <defs>
                      <clipPath id="clip0_59_253">
                        <rect width="21.3333" height="20" fill="white" transform="translate(20) rotate(90)" />
                      </clipPath>
                    </defs>
                  </svg>
                </a> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrapper">
      <!--=================================
          WHAT WE DO -->
      <section class="space-ptb">
        <div class="container">
          <div class="row">
            <div class="col-xxl-7 col-lg-8">
              <div class="section-title mb-lg-0">
                <span class="sub-title"><img class="img-fluid" src="images/subtitle-icon.png" alt=""> WHAT WE DO</span>
                <h2 class="title mb-0">This is what we do and we do it perfectly.</h2>
              </div>
            </div>
            <div class="col-xxl-5 col-lg-4 align-self-end">
              <p class="mb-0 ps-xxl-5">We provide a wide range of solutions and continuously enhance our offerings to support your company's growth.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="services grid-wrapper grid-xl-4 grid-md-2 grid-sm-1 grid-gap-0  mt-5 pt-lg-4">
                <div class="service-bottom-space service-wrapper service-style-2 ">
                  <div class="service-inner">
                    <div class="service-icon">
                      <img class="img-fluid" src="images/svg/services/Information-Security.svg" alt="#">
                    </div>
                    <div class="service-content">
                      <h5 class="service-title">Web Development</h5>
                      <div class="list-wrapper">
                        <ul class="step-list list">
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">SEO</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">Custom design</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">Front-End development</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">E-commerce site</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="service-wrapper service-style-2 service-top-space">
                  <div class="service-inner">
                    <div class="service-icon">
                      <img class="img-fluid" src="images/svg/services/Data-Synchronization.svg" alt="#">
                    </div>
                    <div class="service-content">
                      <h5 class="service-title">Mobile Development</h5>
                      <div class="list-wrapper">
                        <ul class="step-list list">
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">iOS</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">Android</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">Cross platform</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="service-wrapper service-style-2 service-bottom-space">
                  <div class="service-inner">
                    <div class="service-icon">
                      <img class="img-fluid" src="images/svg/services/Mobile-Platforms.svg" alt="#">
                    </div>
                    <div class="service-content">
                      <h5 class="service-title">Branding Services</h5>
                      <div class="list-wrapper">
                        <ul class="step-list list">
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">Logo design</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">UI/UX design</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">Visual design</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="service-wrapper service-style-2 service-top-space">
                  <div class="service-inner">
                    <div class="service-icon">
                      <img class="img-fluid" src="images/svg/services/Process-Automation.svg" alt="#">
                    </div>
                    <div class="service-content">
                      <h5 class="service-title">Enterprise Softwares</h5>
                      <div class="list-wrapper">
                        <ul class="step-list list">
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">ERP</li>
                          <li><img class="img-fluid" src="images/arrow-right.png" alt="">CRM</li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </section>
      <!--=================================
          WHAT WE DO -->
      <!--=================================
          About Info -->
      <section class="space-pt">
        <div class="container">

          <div class="row">
            <div class="col-xxl-7 col-lg-8">
              <div class="section-title mb-lg-0">
                <span class="sub-title"><img class="img-fluid" src="images/subtitle-icon.png" alt="">About Us</span>
                <h2 class="title mb-0">Your experience is everything to us</h2>
              </div>
            </div>
            <div class="col-xxl-5 col-lg-4 align-self-end">
              <p class="mb-0 ps-xxl-5">At Eltaa Innovations, we provide cutting-edge IT solutions designed to empower businesses. From custom software development to system integrations, our expert team delivers tailored solutions that drive growth and innovation. Partner with us to navigate the ever-evolving tech landscape with confidence.</p>
            </div>
          </div>

          <div class="row justify-content-between mt-5 pt-2">
            <div class="col-lg-5 mb-5 mb-lg-0">
              <img class="img-fluid pe-5" src="images/about/about-07.jpg" alt="">
            </div>
            <div class="col-lg-4 col-sm-6">
              <div class="about-details">
                <div class="rated-reviews-2">
                  <h6>
                    <span>5<i class="fa-solid fa-star"></i></span>
                    <span class="review-detail">Rated 4.80 out of 5 based on over <a href="#"> 100+ reviews</a></span>
                  </h6>
                </div>
                <div class="list-wrapper">
                  <ul class="list">
                    <li><img class="img-fluid" src="images/arrow-right.png" alt="">Web Development</li>
                    <li><img class="img-fluid" src="images/arrow-right.png" alt="">App Development</li>
                    <li><img class="img-fluid" src="images/arrow-right.png" alt="">ERP and CRM Solutions</li>
                    <li><img class="img-fluid" src="images/arrow-right.png" alt="">Branding Services</li>
                  </ul>
                </div>
                <div class="row">
                  <!-- <div class="col-xxl-9">
                    <div class="counter counter-style-1">
                      <div class="counter-number"><span class="timer mb-0" data-to="240" data-speed="2000">240</span><span class="suffix">+</span></div>
                      <div class="counter-info"><span class="counter-title">Business Peoples</span></div>
                    </div>
                  </div> -->
                  <div class="col-xxl-9">
                    <div class="counter counter-style-1">
                      <div class="counter-number"><span class="timer mb-0" data-to="100" data-speed="2000">100</span><span class="suffix">%</span></div>
                      <div class="counter-info"><span class="counter-title">Customer Satisfaction</span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-5">
              <div class="about-right">
                <div class="about-img">
                  <img class="img-fluid" src="images/about/about-08.png" alt="">
                </div>
                <div class="d-flex justify-content-end">
                  <a class="btn btn-effect" href="about-us.php">
                    <span>About Us</span>
                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_59_256)">
                        <path d="M19.4854 11.4293L17.0513 12.221C13.1214 13.4993 10.3036 16.9595 9.84784 21.0668C9.49371 16.981 6.71926 13.5081 2.81255 12.2604L0.210283 11.4293" stroke="white" stroke-width="2" />
                        <path d="M9.83594 20.8889L9.83594 0" stroke="white" stroke-width="2" />
                      </g>
                      <defs>
                        <clipPath id="clip0_59_256">
                          <rect width="21.3333" height="20" fill="white" transform="translate(20) rotate(90)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
          About Info -->

      <!--=================================
          Client Logo -->
      <div class="space-ptb">
        <div class="container-fluid p-0">
          <div class="row g-0">
            <div class="col-md-12">
              <div class="marquee-bg">
                <div class="marquee-wrapper">
                  <div class="marquee-inner">
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon1.png" alt=""></span>
                      <span class="title">Web Development</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon2.png" alt=""></span>
                      <span class="title">UI/UX Design</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon3.png" alt=""></span>
                      <span class="title">ERP Development</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon4.png" alt=""></span>
                      <span class="title">App Development</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon5.png" alt=""></span>
                      <span class="title">Branding Services</span>
                    </div>
                    <div class="marquee-item">
                      <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon1.png" alt=""></span>
                      <span class="title">CRM Development</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--=================================
          Client Logo -->

      <!--=================================
          Steps -->
      <section class="space-ptb  z-index-2 bg-black ellipse-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-7">
              <div class="sticky-top" style="top: 80px;">
                <div class="section-title mb-0">
                  <span class="sub-title"><img class="img-fluid" src="images/subtitle-icon.png" alt="" /> How It Works</span>
                  <h2 class="title">Smart strategy & excellent performance</h2>
                </div>
                <div class="ps-xxl-5 ms-0 ms-md-5 pb-5 pb-lg-0">
                  <p class="mb-5">Follow our streamlined process to bring your ideas to life efficiently and effectively.</p>
                  <a class="btn btn-effect" href="contact-us.php">
                    <span>Get Started</span>
                    <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g clip-path="url(#clip0_59_255)">
                        <path d="M19.4854 11.4293L17.0513 12.221C13.1214 13.4993 10.3036 16.9595 9.84784 21.0668C9.49371 16.981 6.71926 13.5081 2.81255 12.2604L0.210283 11.4293" stroke="white" stroke-width="2" />
                        <path d="M9.83594 20.8889L9.83594 0" stroke="white" stroke-width="2" />
                      </g>
                      <defs>
                        <clipPath id="clip0_59_255">
                          <rect width="21.3333" height="20" fill="white" transform="translate(20) rotate(90)" />
                        </clipPath>
                      </defs>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="steps-wrapper">
                <div class="steps-item">
                  <div class="step-arrow">
                    <a class="btn-arrow"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_923_136)">
                          <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                          <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                        </g>
                        <defs>
                          <clipPath id="clip0_923_136">
                            <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                          </clipPath>
                        </defs>
                      </svg></a>
                  </div>
                  <div class="step-info">
                    <span class="step-number">Step 01</span>
                    <h3 class="step-title">Let us know your need</h3>
                    <p>Sharing your vision helps us craft tailored solutions that fit perfectly.</p>
                    <div class="list-wrapper">
                      <ul class="step-list list col-2">
                        <li><img class="img-fluid" src="images/arrow-right.png" alt="" />E-commerce strategy</li>
                        <li><img class="img-fluid" src="images/arrow-right.png" alt="" />Business intelligence</li>
                        <li><img class="img-fluid" src="images/arrow-right.png" alt="" />Custom design</li>
                        <li><img class="img-fluid" src="images/arrow-right.png" alt="" />Android</li>
                        <li><img class="img-fluid" src="images/arrow-right.png" alt="" />iOS</li>
                        <li><img class="img-fluid" src="images/arrow-right.png" alt="" />Front-End development</li>
                      </ul>
                    </div>
                    <div class="step-image"><img class="img-fluid" src="images/steps/01.png" alt=""></div>
                  </div>
                </div>
                <div class="steps-item">
                  <div class="step-arrow">
                    <a class="btn-arrow"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_923_137)">
                          <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                          <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                        </g>
                        <defs>
                          <clipPath id="clip0_923_137">
                            <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                          </clipPath>
                        </defs>
                      </svg></a>
                  </div>
                  <div class="step-info">
                    <span class="step-number">Step 02</span>
                    <h3 class="step-title">Meet the team</h3>
                    <p>Connect with the minds dedicated to making your project a success.</p>
                    <div class="step-image"><img class="img-fluid" src="images/steps/02.png" alt=""></div>
                  </div>
                </div>
                <div class="steps-item">
                  <div class="step-arrow">
                    <a class="btn-arrow"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_923_138)">
                          <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                          <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                        </g>
                        <defs>
                          <clipPath id="clip0_923_138">
                            <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                          </clipPath>
                        </defs>
                      </svg></a>
                  </div>
                  <div class="step-info">
                    <span class="step-number">Step 03</span>
                    <h3 class="step-title">Craft the Solution</h3>
                    <p>This is where ideas take shape, Our collaborative efforts turn your concept into a fully functional, effective solution.</p>
                    <div class="step-image"><img class="img-fluid" src="images/steps/03.png" alt=""></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
          Steps -->

      <!--=================================
          Case Studies -->
     <section class="space-ptb z-index-2 bg-black">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="section-title text-center">
                    <span class="sub-title justify-content-center">
                        <img class="img-fluid" src="images/subtitle-icon.png" alt=""> Our Innovation
                    </span>
                    <h2 class="title"> What's next? our latest Projects</h2>
                </div>
            </div>
        </div>
            <div class="col-lg-12">
                <div class="case-studies-grid grid-wrapper grid-xl-3 grid-md-2 grid-sm-1">
                    <!-- First Case Study -->
                    <div class="case-studies-wrapper case-studies-style-1">
                        <div class="case-studies-img">
                            <img class="img-fluid equal-height-img" src="images/banner/kalpvrusksha.jpeg" alt="" />
                            <a class="category">Website</a>
                        </div>
                        <div class="case-studies-info">
                            <div class="case-studies-info-inner">
                                <h3 class="case-studies-title"><a target="_blank" href="https://kalpavrikshadesign.com/">Kalpavriksha</a></h3>
                                <div class="case-studies-content">
                                    <div class="case-studies-description">Discover our latest project, Kalpavriksha, where cutting-edge technology meets excellence. Explore how we are transforming ideas into reality through innovative solutions and expert collaboration</div>
                                </div>
                                <div class="case-studies-link">
                                    <a class="btn-arrow" target="_blank" href="https://kalpavrikshadesign.store/">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_923_133)">
                                                <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_923_133">
                                                    <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Second Case Study -->
                    <div class="case-studies-wrapper case-studies-style-1">
                        <div class="case-studies-img">
                            <img class="img-fluid equal-height-img" src="images/projects-img/foodapp.png" alt="" />
                            <a class="category">Flutter</a>
                        </div>
                        <div class="case-studies-info">
                            <div class="case-studies-info-inner">
                                <h3 class="case-studies-title"><a>Food Zone</a></h3>
                                <div class="case-studies-content">
                                    <div class="case-studies-description">Introducing Food Zone, our innovative Flutter app designed to enhance your culinary experience. Discover seamless meal planning, recipe sharing, and grocery management, all at your fingertips</div>
                                </div>
                                <div class="case-studies-link">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_923_134)">
                                                <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_923_134">
                                                    <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Third Case Study -->
                    <div class="case-studies-wrapper case-studies-style-1">
                        <div class="case-studies-img">
                            <img class="img-fluid equal-height-img" src="images/projects-img/myditto.png" alt="" />
                            <a class="category">Shopify</a>
                        </div>
                        <div class="case-studies-info">
                            <div class="case-studies-info-inner">
                                <h3 class="case-studies-title"><a target="_blank" href="https://myditto.store/">MyDitto</a></h3>
                                <div class="case-studies-content">
                                    <div class="case-studies-description">Introducing MyDitto, our powerful Shopify app designed to streamline your e-commerce experience. Enhance your online store with seamless integration, improved inventory management, and personalized customer engagement!</div>
                                </div>
                                <div class="case-studies-link">
                                    <a class="btn-arrow" target="_blank" href="https://myditto.store/">
                                        <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <g clip-path="url(#clip0_923_135)">
                                                <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                                                <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                                            </g>
                                            <defs>
                                                <clipPath id="clip0_923_135">
                                                    <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                                                </clipPath>
                                            </defs>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a class="btn btn-effect">
                        <span>All Case Study</span>
                        <svg width="20" height="22" viewBox="0 0 20 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_59_254)">
                                <path d="M19.4854 11.4293L17.0513 12.221C13.1214 13.4993 10.3036 16.9595 9.84784 21.0668C9.49371 16.981 6.71926 13.5081 2.81255 12.2604L0.210283 11.4293" stroke="white" stroke-width="2" />
                                <path d="M9.83594 20.8889L9.83594 0" stroke="white" stroke-width="2" />
                            </g>
                            <defs>
                                <clipPath id="clip0_59_254">
                                    <rect width="21.3333" height="20" fill="white" transform="translate(20) rotate(90)" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

      <!-- =================================
          Case Studies -->
      
      <!--=================================
          Our Testimonial -->
      <section class="space-ptb testimonial-section overflow-hidden ellipse-top bg-black z-index-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-10">
              <div class="section-title text-center">
                <span class="sub-title justify-content-center"><img class="img-fluid" src="images/subtitle-icon.png" alt=""> Our Testimonial</span>
                <h2 class="title">Feedback That Drives Us</h2>
              </div>
            </div>
          </div>
          <div class="row justify-content-start">
            <div class="col-md-11">
              <div class="owl-carousel slider-overflow" data-cursor-type="text" data-custom-text="Drag" data-nav-arrow="false" data-items="2" data-lg-items="1" data-md-items="1" data-sm-items="1" data-space="50">
                <div class="item">
                  <div class="testimonial-wrapper testimonial-style-2">
                    <div class="testimonial-ratings">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="testimonial-quote"><img class="img-fluid" src="images/quote-icon-01.png" alt="" /></div>
                    <div class="testimonial-content">
                      <p>We recently worked with Eltaa Innovations to develop a custom website for our import-export business, and the results have been outstanding. The website provides us with a simple, clear, and professional online presence that showcases our services, products, and business information without unnecessary complexity</p>
                    </div>
                    <div class="testimonial-author">
                      <div class="author-info">
                        <h6 class="author-name">Kevin Dobariya</h6>
                        <span class="author-position">CEO-GlobeDocks international</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper testimonial-style-2">
                    <div class="testimonial-ratings">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                    </div>
                    <div class="testimonial-quote"><img class="img-fluid" src="images/quote-icon-01.png" alt="" /></div>
                    <div class="testimonial-content">
                      <p>We couldn't be more thrilled with the exceptional work done by Eltaa Innovations in developing our toy shop website on Shopify. The site is not only visually appealing and user-friendly, but it's also highly functional,making it easy for our customers to browse and purchase their favorite toys.</p>
                    </div>
                    <div class="testimonial-author">
                      <div class="author-info">
                        <h6 class="author-name">Team</h6>
                        <span class="author-position">MyDitto</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="testimonial-wrapper testimonial-style-2">
                    <div class="testimonial-ratings">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="testimonial-quote"><img class="img-fluid" src="images/quote-icon-01.png" alt="" /></div>
                    <div class="testimonial-content">
                      <p>We are extremely impressed with the website Eltaa Innovations created for our bean business using WordPress. The level of professionalism and attention to detail exceeded our expectations, and we’ve already seen an increase in online orders.</p>
                    </div>
                    <div class="testimonial-author">
                      <div class="author-info">
                        <h6 class="author-name">Jaydip Mungra</h6>
                        <span class="author-position">CEO-DesiBeans</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="item">
                  <div class="testimonial-wrapper testimonial-style-2">
                    <div class="testimonial-ratings">
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-solid fa-star"></i>
                      <i class="fa-regular fa-star"></i>
                    </div>
                    <div class="testimonial-quote"><img class="img-fluid" src="images/quote-icon-01.png" alt="" /></div>
                    <div class="testimonial-content">
                      <p>The IT-Hub database has been one of our current sources for recruitment, backed by a very experienced team who would go out of their way to make sure that requests are taken ahead.</p>
                    </div>
                    <div class="testimonial-author">
                      <div class="author-info">
                        <h6 class="author-name">John Doe</h6>
                        <span class="author-position">Director</span>
                      </div>
                    </div>
                  </div>
                </div> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
          Our Testimonial -->

      <!--=================================
          Our Staff -->
      <!-- <section class="space-pb bg-black z-index-2">
            <div class="container">
              <div class="row">
                <div class="col-xxl-6 col-lg-8">
                  <div class="section-title mb-lg-0">
                    <span class="sub-title"><img class="img-fluid" src="images/subtitle-icon.png" alt=""> Our Staff</span>
                    <h2 class="title mb-0">Our team is friendly, talkative, and fully reliable.</h2>
                  </div>
                </div>
                 <div class="col-xxl-6 col-lg-4 align-self-end">
                  <p class="mb-0 ps-xxl-5">So, make the decision to move forward. Commit your decision to paper, just to bring it into focus. Then, go for it!</p>
                 </div>
              </div>

              <div class="row mt-xl-5 pt-5">
                <div class="col-md-12">
                  <div class="team-boxs grid-wrapper grid-xl-4 grid-lg-3 grid-md-2 grid-sm-2 grid-xs-1">
                    <div class="team-item team-style-1">
                      <div class="team-img">
                        <img class="img-fluid" src="images/team/01.jpg" alt="" />
                        <div class="image-overlay"><img class="img-fluid" src="images/team/symbol.png" alt="" /></div>
                      </div>
                      <div class="team-info">
                        <a href="team-detail.php" class="team-title">Anne Smith</a>
                        <span class="team-destination">Officer</span>
                        <div class="team-social">
                          <ul>
                            <li><a href="#">Fb</a></li>
                            <li><a href="#">Dr</a></li>
                            <li><a href="#">Tw</a></li>
                            <li><a href="#">Be</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="team-item team-style-1">
                      <div class="team-img">
                        <img class="img-fluid" src="images/team/02.jpg" alt="" />
                        <div class="image-overlay"><img class="img-fluid" src="images/team/symbol.png" alt="" /></div>
                      </div>
                      <div class="team-info">
                        <a href="team-detail.php" class="team-title">John Doe</a>
                        <span class="team-destination">Director</span>
                        <div class="team-social">
                          <ul>
                            <li><a href="#">Fb</a></li>
                            <li><a href="#">Dr</a></li>
                            <li><a href="#">Tw</a></li>
                            <li><a href="#">Be</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="team-item team-style-1">
                      <div class="team-img">
                        <img class="img-fluid" src="images/team/03.jpg" alt="" />
                        <div class="image-overlay"><img class="img-fluid" src="images/team/symbol.png" alt="" /></div>
                      </div>
                      <div class="team-info">
                        <a href="team-detail.php" class="team-title">Mellissa Doe</a>
                        <span class="team-destination">Analyst</span>
                        <div class="team-social">
                          <ul>
                            <li><a href="#">Fb</a></li>
                            <li><a href="#">Dr</a></li>
                            <li><a href="#">Tw</a></li>
                            <li><a href="#">Be</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                    <div class="team-item team-style-1">
                      <div class="team-img">
                        <img class="img-fluid" src="images/team/04.jpg" alt="" />
                        <div class="image-overlay"><img class="img-fluid" src="images/team/symbol.png" alt="" /></div>
                      </div>
                      <div class="team-info">
                        <a href="team-detail.php" class="team-title">Paul Flavius</a>
                        <span class="team-destination">Coordinator</span>
                        <div class="team-social">
                          <ul>
                            <li><a href="#">Fb</a></li>
                            <li><a href="#">Dr</a></li>
                            <li><a href="#">Tw</a></li>
                            <li><a href="#">Be</a></li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </section> -->
      <!--=================================
          Our Staff -->

      <!--=================================
          FAQ -->
      <section class="space-pt ellipse-top">
        <div class="space-pb ellipse-bottom">
          <div class="container">
            <div class="row">
              <div class="col-md-12 text-center">
                <div class="section-title">
                  <span class="sub-title justify-content-center"><img class="img-fluid" src="images/subtitle-icon.png" alt=""> FAQ</span>
                  <h2 class="title mb-0">Frequently Asked Questions</h2>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="accordion" id="pgsaccordion">
                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingOne">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">01. How much does it costs to develop website with eltaa innovations?</button>
                    </h5>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#pgsaccordion">
                      <div class="accordion-body">The cost varies based on project's complexity and requirements. We provide personalized quotes after discussing your specific needs.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingTwo">
                      <button
                        class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        02. What is typical timeline for development?
                      </button>
                    </h5>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#pgsaccordion">
                      <div class="accordion-body">Timeline depends on project scope. We work closely with clients to establish realistic deadines and ensure timely delivery.</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">03. Do you provide ongoing support and maintenance after the project is launched?</button>
                    </h5>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#pgsaccordion">
                      <div class="accordion-body">Yes, we offer post-launch support and maintenance services to address any issues and keep your project up-to-date</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">04. Will my website be optimized for mobile devices?</button>
                    </h5>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#pgsaccordion">
                      <div class="accordion-body">Absolutely! Having a mobile-friendly website is more important than ever. We work diligently to ensure your website looks fantastic on every device.</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 mt-4 mt-md-0">
                <div class="accordion" id="pgsaccordion1">
                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingFive">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">05. Who will be in charge of creating the website's content ?</button>
                    </h5>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#pgsaccordion1">
                      <div class="accordion-body">Since you know your industry best, we recommend you provide the content. If you’d like help, we can connect you with a qualified content writer to produce original, tailored content at affordable rate.</div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingSix">
                      <button
                        class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="true" aria-controls="collapseSix">
                        06. Can you integrate third-party tools or systems into my website?
                      </button>
                    </h5>
                    <div id="collapseSix" class="accordion-collapse collapse show" aria-labelledby="headingSix" data-bs-parent="#pgsaccordion1">
                      <div class="accordion-body">Yes, we can seamlessly integrate third-party tools and systems into your website to enhance its functionality. Whether it’s payment gateways, CRM systems, analytics tools, or other applications, we ensure smooth integration tailored to your specific needs.</div>
                    </div>
                  </div>

                  <!-- <div class="accordion-item">
                    <h5 class="accordion-header" id="headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">07. I am worried about e-mail scams...</button>
                    </h5>
                    <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#pgsaccordion1">
                      <div class="accordion-body"> Walk out 10 years into your future and feel how it feels to carry on doing the same thing. I want you to think about how you will feel in 10 years if you continue doing the exact same things you have done to date. What will your daily life be like? </div>
                    </div>
                  </div>

                  <div class="accordion-item">
                    <h5 class="accordion-header" id="headingEight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseThree">08. Why IT Staff Management?</button>
                    </h5>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#pgsaccordion1">
                      <div class="accordion-body">Really experience that. See what you see, hear what you hear, feel the feelings. Notice everything that you need to know about what it will be like if you carry on with the same behaviour, putting off change. Drift back to where the path splits.</div>
                    </div>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--=================================
          FAQ -->

    </div>
  </div>

  <!--=================================
      Site Footer -->
  <?php include 'footer.php'; ?>

  <!--=================================
      Back To Top -->
  <div class="back-to-top">
    <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
    </svg>
  </div>

  </div>
  <!--=================================
    Javascript -->
  <!-- JS Global Compulsory (Do not remove)-->
  <script src="js/jquery-3.7.1.min.js"></script>
  <script src="js/jquery.appear.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>
  <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
  <script src="js/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/swiper/swiper.min.js"></script>
  <script src="js/swiperanimation/SwiperAnimation.min.js"></script>
  <script src="js/shuffle/shuffle.min.js"></script>
  <script src="js/magnific-popup/jquery.magnific-popup.js"></script>
  <script src="js/counter/jquery.countTo.js"></script>
  <script src="js/gsap.min.js"></script>
  <script src="js/attractHover.js"></script>
  <script src="js/lenis.min.js"></script>
  <script src="js/custom.js"></script> <!-- Template Scripts (Do not remove)-->
</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/it-infinite/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2025 18:08:59 GMT -->

</html>