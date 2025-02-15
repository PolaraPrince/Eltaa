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
    <!--=================================
        Page Header -->
    <div class="inner-header bg-holder" style="background-image: url(images/banner/banner-03/backG.jpg);">
      <div class="container">
        <div class="row  justify-content-center">
          <div class="col-md-12 text-center">
            <h1 class="title">Our Projects</h1>
            <p>Award-winning website design & creative digital agency services</p>
          </div>
        </div>
      </div>
    </div>

    <div class="content-wrapper">

      <!--=================================
          Case Studies -->
      
      <section class="space-ptb z-index-2 bg-black">
    <div class="container-fluid">
        <div class="row justify-content-center">
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
      <section class="space-ptb z-index-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-xl-5 col-lg-5">
              <div class="section-title mb-4 mb-lg-0">
                <span class="sub-title"><img class="img-fluid" src="images/subtitle-icon.png" alt=""> Case Studies</span>
                <h2 class="title"> Projects of Our Amazing Clients</h2>
              </div>
            </div>
            <div class="col-xl-5 col-lg-4">
              <p>Explore a selection of our completed projects that showcase our expertise in delivering tailored solutions. From innovative web development to robust software applications, we help businesses succeed with cutting-edge technology. Let our work speak for itself.</p>
            </div>
            <div class="col-xl-2 col-lg-3 text-end">
              <a class="btn btn-effect" href="about-us.php">
                <span>About Us</span>
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

          <div class="row">
            <div class="col-md-12">
              <div class="case-studies-wrapper case-studies-style-2">
                <div class="case-studies-item">
                  <div class="item-inner">
                    <h3 class="case-studies-title">GlobeDocks International</h3>
                    <div class="case-studies-description">Our team has extensive experience in developing platforms that help businesses manage their global trade operations seamlessly.</div>
                    <div class="case-studies-action"><a><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_923_139)">
                            <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2"></path>
                            <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_923_139">
                              <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)"></rect>
                            </clipPath>
                          </defs>
                        </svg></a></div>
                  </div>
                  <div class="case-studies-image"><img class="img-fluid gsap-img-animation" src="images/case-studies/globedocks.png" alt="" style="width : 550px; height:auto; scale: none; transform: translate(-50%, -50%) translate(746px, 498px); opacity: 0; visibility: hidden;"></div>
                  <div class="marquee-wrapper">
                    <div class="marquee-inner">
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon1.png" alt=""></span>
                        <span class="title">Web Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon2.png" alt=""></span>
                        <span class="title">UI/UX Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon3.png" alt=""></span>
                        <span class="title">Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon4.png" alt=""></span>
                        <span class="title">ISO Developer</span>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="case-studies-item">
                  <div class="item-inner">
                    <h3 class="case-studies-title">Jalia Engineering</h3>
                    <div class="case-studies-description">Our team of developers and designers crafts high-performance websites that enable engineering firms to showcase their services, projects, and technical expertise.</div>
                    <div class="case-studies-action"><a><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_923_140)">
                            <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2"></path>
                            <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_923_140">
                              <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)"></rect>
                            </clipPath>
                          </defs>
                        </svg></a></div>
                  </div>
                  <div class="case-studies-image"><img class="img-fluid gsap-img-animation" src="images/case-studies/Jaliaengineering.png" alt="" style="width: 550px; height:auto; scale: none; transform: translate(-50%, -50%) translate(746px, 498px); opacity: 0; visibility: hidden;"></div>
                  <div class="marquee-wrapper">
                    <div class="marquee-inner">
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon1.png" alt=""></span>
                        <span class="title">Web Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon2.png" alt=""></span>
                        <span class="title">UI/UX Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon3.png" alt=""></span>
                        <span class="title">Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon4.png" alt=""></span>
                        <span class="title">ISO Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon5.png" alt=""></span>
                        <span class="title">Digital Agency</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-item">
                  <div class="item-inner">
                    <h3 class="case-studies-title">Thermoforge</h3>
                    <div class="case-studies-description">We specialize in developing sophisticated and user-centric websites tailored for the industrial sector.</div>
                    <div class="case-studies-action"><a><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_923_141)">
                            <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2"></path>
                            <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_923_141">
                              <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)"></rect>
                            </clipPath>
                          </defs>
                        </svg></a></div>
                  </div>
                  <div class="case-studies-image"><img class="img-fluid gsap-img-animation" src="images/case-studies/Thermo.png" alt="" style="width: 550px; height:auto; scale: none; transform: translate(-50%, -50%) translate(746px, 498px); opacity: 0; visibility: hidden;"></div>
                  <div class="marquee-wrapper">
                    <div class="marquee-inner">
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon1.png" alt=""></span>
                        <span class="title">Web Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon2.png" alt=""></span>
                        <span class="title">UI/UX Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon3.png" alt=""></span>
                        <span class="title">Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon4.png" alt=""></span>
                        <span class="title">ISO Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon5.png" alt=""></span>
                        <span class="title">Digital Agency</span>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- <div class="case-studies-item">
                  <div class="item-inner">
                    <h3 class="case-studies-title">Financeoont</h3>
                    <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight thing.</div>
                    <div class="case-studies-action"><a><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_923_142)">
                            <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2"></path>
                            <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_923_142">
                              <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)"></rect>
                            </clipPath>
                          </defs>
                        </svg></a></div>
                  </div>
                  <div class="case-studies-image"><img class="img-fluid gsap-img-animation" src="images/case-studies/01.png" alt="" style="width: 550px; height:auto; scale: none; transform: translate(-50%, -50%) translate(746px, 498px); opacity: 0; visibility: hidden;"></div>
                  <div class="marquee-wrapper">
                    <div class="marquee-inner">
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon1.png" alt=""></span>
                        <span class="title">Web Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon2.png" alt=""></span>
                        <span class="title">UI/UX Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon3.png" alt=""></span>
                        <span class="title">Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon4.png" alt=""></span>
                        <span class="title">ISO Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon5.png" alt=""></span>
                        <span class="title">Digital Agency</span>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-item">
                  <div class="item-inner">
                    <h3 class="case-studies-title">Educatgenix</h3>
                    <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight thing.</div>
                    <div class="case-studies-action"><a><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <g clip-path="url(#clip0_923_143)">
                            <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2"></path>
                            <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2"></path>
                          </g>
                          <defs>
                            <clipPath id="clip0_923_143">
                              <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)"></rect>
                            </clipPath>
                          </defs>
                        </svg></a></div>
                  </div>
                  <div class="case-studies-image"><img class="img-fluid gsap-img-animation" src="images/case-studies/02.png" alt="" style="width: 550px; height:auto;scale: none; transform: translate(-50%, -50%) translate(746px, 498px); opacity: 0; visibility: hidden;"></div>
                  <div class="marquee-wrapper">
                    <div class="marquee-inner">
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon1.png" alt=""></span>
                        <span class="title">Web Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon2.png" alt=""></span>
                        <span class="title">UI/UX Design</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon3.png" alt=""></span>
                        <span class="title">Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon4.png" alt=""></span>
                        <span class="title">ISO Developer</span>
                      </div>
                      <div class="marquee-item">
                        <span class="icon"><img class="img-fluid" src="images/client-logo/brand-icon5.png" alt=""></span>
                        <span class="title">Digital Agency</span>
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
          Case Studies -->

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
  <script src="js/jarallax/jarallax.min.js"></script>
  <script src="js/jarallax/jarallax-video.min.js"></script>
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


</html>