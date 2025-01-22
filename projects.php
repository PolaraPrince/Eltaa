<!DOCTYPE html>
<html lang="zxx">

<?php include 'commonHead.php'; ?>

<body>

  <!--Header -->
  <?php include 'header.php'; ?>

  <!--=================================
      Main Menu OffCanvas -->
  <div class="offcanvas main-menu-offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas" aria-labelledby="menuOffcanvasLabel">
    <div class="offcanvas-header">
      <a id="menuOffcanvasLabel" class="navbar-brand" href="index.html"><img class="img-fluid" src="images/logo.svg" alt="logo" /></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body lenis-scroll-disable">
      <div class="body-inner">
        <nav class="navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.html">Home 01</a></li>
                <li><a class="dropdown-item" href="index-02.html">Home 02</a></li>
                <li><a class="dropdown-item" href="index-03.html">Home 03</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about-us.html">About Us</a></li>
                <li><a class="dropdown-item" href="pricing.html">Pricing</a></li>
                <li><a class="dropdown-item" href="careers.html">Careers</a></li>
                <li><a class="dropdown-item" href="contact-us.html">Contact</a></li>
                <li><a class="dropdown-item" href="faq.html">Faq</a></li>
                <li><a class="dropdown-item" href="team.html">Team</a></li>
                <li><a class="dropdown-item" href="team-single.html">Team Single</a></li>
                <li><a class="dropdown-item" href="typography.html">Typography</a></li>
                <li><a class="dropdown-item" href="page-left-sidebar.html">Page Left Sidebar</a></li>
                <li><a class="dropdown-item" href="page-right-sidebar.html">Page Right Sidebar</a></li>
                <li><a class="dropdown-item" href="error-404.html">Error 404</a></li>
                <li><a class="dropdown-item" href="coming-soon.html">Coming Soon</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Service</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item active" href="service.html">Service</a></li>
                <li><a class="dropdown-item" href="service-detail.html">Service Single</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Case Studies</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="case-studies.html">Case Studies</a></li>
                <li><a class="dropdown-item" href="case-studies-detail.html">Case Studies Single</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="blog.html">Blog Standard</a></li>
                <li><a class="dropdown-item" href="blog-detail.html">Blog Single</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact-us.html">Contact</a></li>
          </ul>
        </nav>
        <div class="bottom-info">
          <div class="contact-info">
            <span class="number">+1 234 567 8910</span>
            <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>info@gmail.com</a>
            <span class="text">Looking for collaboration for your next creative project?</span>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--=================================
      Header Side Panel -->
  <div class="offcanvas offcanvas-end sidepanel-offcanvas" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>

    <div class="offcanvas-body lenis-scroll-disable">
      <div class="body-inner">
        <div class="about-info">
          <h4 class="title mb-3">Scalable Business for Startups</h4>
          <p>Get the oars in the water and start rowing. Execution is the single biggest factor in achievement so the faster and better your execution.</p>
        </div>
        <div class="socail-info">
          <ul class="socail-list-item">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a></li>
            <li><a href="#"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
            <li><a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a></li>
            <li><a href="#"><i class="fa-brands fa-dribbble"></i>Dribbble</a></li>
          </ul>
        </div>
        <div class="contact-info">
          <span class="number">+1 234 567 8910</span>
          <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>info@gmail.com</a>
          <span class="text">Looking for collaboration for your next creative project?</span>
        </div>
      </div>
    </div>
  </div>


  <div class="site-content">
    <!--=================================
        Page Header -->
    <div class="inner-header bg-holder" style="background-image: url(images/banner/inner-header/page-header-01.jpg);">
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
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/01.png" alt="" />
                    <a href="#" class="category">Music</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Gozzby</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_133)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_133">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/02.png" alt="" />
                    <a href="#" class="category">Education</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Petfluent</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_134)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_134">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/03.png" alt="" />
                    <a href="#" class="category">Pet Care</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Mobifluent</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_135)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_135">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

     
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="case-studies-grid grid-wrapper grid-xl-3 grid-md-2 grid-sm-1">
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/01.png" alt="" />
                    <a href="#" class="category">Music</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Gozzby</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_133)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_133">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/02.png" alt="" />
                    <a href="#" class="category">Education</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Petfluent</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_134)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_134">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/03.png" alt="" />
                    <a href="#" class="category">Pet Care</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Mobifluent</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_135)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_135">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <section class="space-ptb z-index-2 bg-black">
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-lg-12">
              <div class="case-studies-grid grid-wrapper grid-xl-3 grid-md-2 grid-sm-1">
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/01.png" alt="" />
                    <a href="#" class="category">Music</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Gozzby</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_133)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_133">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/02.png" alt="" />
                    <a href="#" class="category">Education</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Petfluent</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_134)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_134">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="case-studies-wrapper case-studies-style-1">
                  <div class="case-studies-img">
                    <img class="img-fluid" src="images/case-studies/03.png" alt="" />
                    <a href="#" class="category">Pet Care</a>
                  </div>
                  <div class="case-studies-info">
                    <div class="case-studies-info-inner">
                      <h3 class="case-studies-title"><a href="#">Mobifluent</a></h3>
                      <div class="case-studies-content">
                        <div class="case-studies-description">Some people will tell you there are four while others may tell you there are eight.</div>
                      </div>
                      <div class="case-studies-link">
                        <a class="btn-arrow" href="#"><svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_923_135)">
                              <path d="M8.70801 0.959961L9.29825 2.7665C10.2512 5.68321 12.8308 7.77453 15.8928 8.1128C12.8468 8.37564 10.2578 10.4348 9.3276 13.3343L8.70801 15.2657" stroke="inherit" stroke-width="2" />
                              <path d="M15.7602 8.12158H0.1875" stroke="inherit" stroke-width="2" />
                            </g>
                            <defs>
                              <clipPath id="clip0_923_135">
                                <rect width="15.904" height="14.8437" fill="inherit" transform="translate(0.1875 0.578125)" />
                              </clipPath>
                            </defs>
                          </svg></a>
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
          Case Studies -->

    </div>
  </div>

  <!--=================================
      Site Footer -->
  <footer class="site-footer footer-dark">
    <div class="footer-main">
      <div class="container">
        <div class="row">
          <div class="col-xl-3 col-md-5">
            <div class="widget widget-address-info">
              <h5 class="widget-title">Where To Find Us</h5>
              <ul class="address-info-list">
                <li><i class="icon"><img class="img-fluid" src="images/svg/address-info-contacts.svg" alt="" /></i><span class="info"><span>17504 Carlton Cuevas Rd </span>Gulfport, MS, 39503</span></li>
                <li><i class="icon"><img class="img-fluid" src="images/svg/address-info-headphone.svg" alt="" /></i><span class="info"><span>001123456789 </span>Mon-fri 8:30am 6:30pm</span></li>
                <li><i class="icon"><img class="img-fluid" src="images/svg/address-info-email.svg" alt="" /></i><span class="info"><span>Info@example.com </span>24x7 online support</span></li>
              </ul>
            </div>
          </div>
          <div class="col-xl-5 col-md-7">
            <div class="widget">
              <h5 class="widget-title">Newsletter</h5>
              <div class="widget widget-newsletter mb-4 pb-2">
                <form class="newsletter-form">
                  <input type="text" class="form-control" placeholder="Enter Your Email">
                  <button type="submit" class="subscribe-btn"><i class="fa-solid fa-paper-plane"></i></button>
                </form>
              </div>
              <div class="widget widget-menu">
                <h6 class="widget-title">Quick Links</h6>
                <ul class="list-unstyled list-col-3 mb-0">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="about-us.html">About us</a></li>
                  <li><a href="team.html">Team</a></li>
                  <li><a href="team-single.html">Team Single</a></li>
                  <li><a href="service.html">Service</a></li>
                  <li><a href="service-detail.html">Service Single</a></li>
                  <li><a href="blog.html">Blog</a></li>
                  <li><a href="blog-detail.html">Blog Single</a></li>
                  <li><a href="contact-us.html">Contact</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-md-12 ms-auto">
            <div class="widget widget-info">
              <h5 class="widget-title">Call Center</h5>
              <a class="number" href="tel:+1800555500">1-800-555-500</a>
              <h6 class="title">and get a free estimate</h6>
            </div>
            <div class="widget-socail">
              <ul class="socail-icon">
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
    <div class="footer-copyright">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <p><a class="footer-logo" href="index.html"><img class="img-fluid" src="images/logo.svg" alt="logo" /></a></p>
          </div>
          <div class="col-lg-6 text-lg-end">
            <p>Develop and design by <a href="#">Potenza Global Solutions</a></p>
          </div>
        </div>
      </div>
    </div>
  </footer>

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

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/it-infinite/service.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 08 Jan 2025 18:09:19 GMT -->

</html>