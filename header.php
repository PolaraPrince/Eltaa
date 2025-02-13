<?php
$current_page = basename($_SERVER['PHP_SELF']);
?>
<!--cursor -->
<div id="cursor">
  <div class="cursor__circle"></div>
</div>
<!--cursor -->

<div id="page" class="main">

<style>
.site-logo img {
    max-width: 250px;  
    width: auto; 
    height: auto;    
    display: block;   
}

@media (max-width: 1200px) {
    .site-logo img {
        max-width: 220px; 
    }
}

@media (max-width: 768px) {
    .site-logo img {
        max-width: 200px; 
    }
}
</style>
  <!--=================================
      Header -->
  <header class="header header-default header-sticky">
    <div class="header-inner">
      <div class="site-logo">
        <a class="navbar-brand" href="index.php"><img class="img-fluid" style="display: block; width:auto; height: auto;" src="images/eltaaIcon.png" alt="Eltaa Innovations" /></a>
      </div>
      <div class="site-menu d-none d-xl-block">
        <ul class="main-menu">
          <li class="nav-item <?php if ($current_page == 'index.php' || $current_page == 'index-02.php' || $current_page == 'index-03.php') echo 'active' ?>">
            <a class="nav-link" href="index.php">Home </a>
          </li>
          <li class="nav-item <?= ($current_page == 'about-us.php') ? 'active' : '' ?>"><a class="nav-link" href="about-us.php">About</a></li>
          <li class="nav-item <?= ($current_page == 'service.php') ? 'active' : '' ?>"><a class="nav-link" href="service.php">Service</i></a>
          </li>
          <li class="nav-item <?= ($current_page == 'Projects.php') ? 'active' : '' ?>"><a class="nav-link" href="Projects.php">Projects</a></li>
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
      <a id="menuOffcanvasLabel" class="navbar-brand" href="index.php"><img class="img-fluid" src="images/eltaaIcon.png" alt="logo" /></a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
    </div>
    <div class="offcanvas-body lenis-scroll-disable">
      <div class="body-inner">
        <nav class="navbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php" role="button">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about-us.php" role="button">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="service.php" role="button">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="projects.php" role="button">Projects</a>
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
            <li><a target="_blank" href="https://www.instagram.com/eltaa__?igsh=MXg4aDAxa3I1dTIxdA%3D%3D&utm_source=qr"><i class="fa-brands fa-instagram"></i>Instagram</a></li>
            <li><a href="https://www.linkedin.com/company/eltaaa/" target="_blank"><i class="fa-brands fa-linkedin"></i>LinkedIn</a></li>
          </ul>
        </div>
        <div class="contact-info">
          <span class="number">+91 9978886614</span>
          <a class="mail" href="#"><i class="fa-regular fa-envelope"></i>info@eltaa.com</a>
        </div>
      </div>
    </div>
  </div>