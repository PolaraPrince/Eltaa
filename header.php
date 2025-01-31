<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!--=================================
    cursor -->
<div id="cursor">
  <div class="cursor__circle"></div>
</div>
<!--=================================
    cursor -->

<div id="page" class="main">

  <!--=================================
      Header -->
  <header class="header header-default header-sticky">
    <div class="header-inner">
      <div class="site-logo">
        <a class="navbar-brand" href="index.php"><img class="img-fluid" src="/images/eltaa-logo.png" alt="Eltaa Innovations" /></a>
      </div>
      <div class="site-menu d-none d-xl-block">
        <ul class="main-menu">
          <li class="nav-item <?php if ($current_page == 'index.php' || $current_page == 'index-02.php' || $current_page == 'index-03.php') echo 'active' ?>">
            <a class="nav-link" href="index.php">Home </a>
            <!-- <i class="fa-solid fa-chevron-down"></i> -->
            <!-- <ul class="submenu">
              <li><a class="nav-link" href="index.php">Home 01</a></li>
              <li><a class="nav-link" href="index-02.php">Home 02</a></li>
              <li><a class="nav-link" href="index-03.php">Home 03</a></li>
            </ul> -->
          </li>
          <li class="nav-item <?= ($current_page == 'about-us.php') ? 'active' : '' ?>"><a class="nav-link" href="about-us.php">About</a></li>
          <!-- <li class="nav-item"><a class="nav-link" href="#">Pages <i class="fa-solid fa-chevron-down"></i></a>
            <ul class="submenu">
              <li><a class="nav-link" href="about-us.php">About Us</a></li>
              <li><a class="nav-link" href="pricing.php">Pricing</a></li>
              <li><a class="nav-link" href="careers.php">Careers</a></li>
              <li><a class="nav-link" href="contact-us.php">Contact</a></li>
              <li><a class="nav-link" href="faq.php">Faq</a></li>
              <li><a class="nav-link" href="team.php">Team</a></li>
              <li><a class="nav-link" href="team-single.php">Team Single</a></li>
              <li><a class="nav-link" href="typography.php">Typography</a></li>
              <li><a class="nav-link" href="page-left-sidebar.php">Page Left Sidebar</a></li>
              <li><a class="nav-link" href="page-right-sidebar.php">Page Right Sidebar</a></li>
              <li><a class="nav-link" href="error-404.php">Error 404</a></li>
              <li><a class="nav-link" href="coming-soon.php">Coming Soon</a></li>
            </ul>
          </li> -->
          <li class="nav-item <?= ($current_page == 'service.php') ? 'active' : '' ?>"><a class="nav-link" href="service.php">Service</i></a>
            <!-- <ul class="submenu">
              <li><a class="nav-link" href="service.php">Service</a></li>
              <li><a class="nav-link" href="service-detail.php">Service Single</a></li>
            </ul> -->
          </li>
          <li class="nav-item <?= ($current_page == 'Projects.php') ? 'active' : '' ?>"><a class="nav-link" href="Projects.php">Projects</a></li>
          <!-- <li class="nav-item <?php if ($current_page == 'case-studies.php' || $current_page == 'case-studies-detail.php') echo 'active' ?>"><a class="nav-link" href="#">Case Studies <i class="fa-solid fa-chevron-down"></i></a>
                <ul class="submenu">
                  <li><a class="nav-link" href="case-studies.php">Case Studies</a></li>
                  <li><a class="nav-link" href="case-studies-detail.php">Case Studies Single</a></li>
                </ul>
              </li> -->
          <li class="nav-item <?= ($current_page == 'blog.php') ? 'active' : '' ?>"><a class="nav-link" href="blog.php">Blog</i></a>
            <!-- <ul class="submenu">
              <li><a class="nav-link" href="blog.php">Blog Standard</a></li>
              <li><a class="nav-link" href="blog-detail.php">Blog Single</a></li>
            </ul> -->
          </li>
          <li class="nav-item <?= ($current_page == 'contact-us.php') ? 'active' : '' ?>"><a class="nav-link" href="contact-us.php">Contact</a></li>
        </ul>
      </div>

      <div class="site-action d-none d-xl-block">
        <div class="action-hamburger">
          <a class="hamburger" href="#" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
            <span class="hamburger-container">
              <span class="hamburger-inner"></span>
              <span class="hamburger-hidden"></span>
            </span>
          </a>
        </div>
      </div>

      <div class="mobile-action d-block d-xl-none">
        <div class="mobile-hamburger">
          <a class="hamburger" href="#" data-bs-toggle="offcanvas" data-bs-target="#menuOffcanvas" aria-controls="menuOffcanvas">
            <span class="hamburger-container">
              <span class="hamburger-inner"></span>
              <span class="hamburger-hidden"></span>
            </span>
          </a>
        </div>
      </div>
    </div>
  </header>

  <!--=================================
      Main Menu OffCanvas -->
  <div class="offcanvas main-menu-offcanvas offcanvas-end" tabindex="-1" id="menuOffcanvas" aria-labelledby="menuOffcanvasLabel">
    <div class="offcanvas-header">
      <a id="menuOffcanvasLabel" class="navbar-brand" href="index.php"><img class="img-fluid" src="images/logo.svg" alt="logo" /></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body lenis-scroll-disable">
      <div class="body-inner">
        <nav class="navbar">
          <ul class="navbar-nav">
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Home</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="index.php">Home 01</a></li>
                <li><a class="dropdown-item" href="index-02.php">Home 02</a></li>
                <li><a class="dropdown-item" href="index-03.php">Home 03</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="about-us.php">About Us</a></li>
                <li><a class="dropdown-item" href="pricing.php">Pricing</a></li>
                <li><a class="dropdown-item" href="careers.php">Careers</a></li>
                <li><a class="dropdown-item active" href="contact-us.php">Contact</a></li>
                <li><a class="dropdown-item" href="faq.php">Faq</a></li>
                <li><a class="dropdown-item" href="team.php">Team</a></li>
                <li><a class="dropdown-item" href="team-single.php">Team Single</a></li>
                <li><a class="dropdown-item" href="typography.php">Typography</a></li>
                <li><a class="dropdown-item" href="page-left-sidebar.php">Page Left Sidebar</a></li>
                <li><a class="dropdown-item" href="page-right-sidebar.php">Page Right Sidebar</a></li>
                <li><a class="dropdown-item" href="error-404.php">Error 404</a></li>
                <li><a class="dropdown-item" href="coming-soon.php">Coming Soon</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Service</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="service.php">Service</a></li>
                <li><a class="dropdown-item" href="service-detail.php">Service Single</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Case Studies</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="case-studies.php">Case Studies</a></li>
                <li><a class="dropdown-item" href="case-studies-detail.php">Case Studies Single</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Blog</a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="blog.php">Blog Standard</a></li>
                <li><a class="dropdown-item" href="blog-detail.php">Blog Single</a></li>
              </ul>
            </li>
            <li class="nav-item"><a class="nav-link" href="contact-us.php">Contact</a></li>
          </ul>
        </nav>
        <div class="bottom-info">
          <div class="contact-info">
            <span class="number">+91 9978886614</span>
            <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>info@eltaa.com</a>
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
          <h4 class="title mb-3">Collaborative Vision</h4>
          <p>Looking for the perfect partner for your next project? Let’s connect and create something amazing!</p>
        </div>
        <div class="socail-info">
          <ul class="socail-list-item">
            <li><a href="#"><i class="fa-brands fa-facebook-f"></i>Facebook</a></li>
            <li><a target="_blank" href="https://www.instagram.com/eltaa__?igsh=MXg4aDAxa3I1dTIxdA%3D%3D&utm_source=qr"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
            <li><a href="#"><i class="fa-brands fa-x-twitter"></i>Twitter</a></li>
            <li><a href="#"><i class="fa-brands fa-dribbble"></i>Dribbble</a></li>
          </ul>
        </div>
        <div class="contact-info">
          <span class="number">+91 9978886614</span>
          <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>info@eltaa.com</a>
        </div>
      </div>
    </div>
  </div>