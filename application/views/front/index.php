
<?php $this->load->view('front/header'); ?>
<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">GiliSpace.com</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#products">Products & Apps</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#services">Services</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <!--
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Articles</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#donat">Donate</a>
            </li>-->
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead bg-primary text-white text-center">
    <div class="container">
    <div id="astro">
      <img class="img-fluid d-block mx-auto mt-0 mb-2" width="35%" src="<?php echo base_url().'assets/front/'; ?>img/earth.png" alt="">
    </div>
      <hr class="star-light">
      <h2 class="font-weight-light mb-0">Web & Apps Developer - Illustrator</h2>
    </div>
  </header>

  <!-- Product Grid Section -->
  <section class="portfolio mb-5" id="products">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Products & Apps</h2>
      <hr class="star-dark mb-5">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#modal-design">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-eye fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'assets/front/img/portfolio/icon/'; ?>design.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#modal-web">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-eye fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'assets/front/img/portfolio/icon/'; ?>web.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#modal-apps">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-eye fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'assets/front/img/portfolio/icon/'; ?>phone.png" alt="">
          </a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Service Section -->
  <section class="bg-primary text-white mb-0" id="services">
    <div class="container mb-5">
      <h2 class="text-center text-uppercase text-white">Services</h2>
      <hr class="star-light mb-3">
      <div class="row">
        <div class="col-lg-12 mr-auto text-center">
        <img class="img-fluid" width="30%" src="<?php echo base_url().'assets/front/'; ?>img/portfolio/work1.png" alt="">
        </div>
      </div>
      <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-hand-pointer mr-2"></i>
          Find Out Our Sevices!
        </a>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid Section -->
  <section class="portfolio mb-5" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Portfolio</h2>
      <hr class="star-dark mb-5">
      <div class="row mb-5">
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-eye fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'assets/front/img/portfolio/icon/'; ?>design.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-eye fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'assets/front/img/portfolio/icon/'; ?>web.png" alt="">
          </a>
        </div>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <i class="fas fa-eye fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'assets/front/img/portfolio/icon/'; ?>phone.png" alt="">
          </a>
        </div>
        
      </div>
    </div>
  </section>

  <!-- Contact Section -->
  <section id="contact" class="bg-primary">
    <div class="container">
      <h2 class="text-center text-uppercase text-white mb-0">I'm Here!</h2>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-3 mx-auto text-center">
          <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
          <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
          <ul class="list-inline mb-0">
              <!--<li class="list-inline-item">
                <a class="btn btn-outline-dark btn-social text-center rounded-circle" href="#">
                  <i class="fab fa-fw fa-twitter"></i>
                </a>
              </li>-->
              <p class="lead text-white">Contact Us & Social Media!</p>
              <li class="list-inline-item">
                  <a target="_blank" class="btn btn-outline-light btn-social text-center rounded-circle" href="https://www.instagram.com/ayoooonk/">
                    <i class="fab fa-fw fa-instagram"></i>
                  </a>
              </li>
              <li class="list-inline-item">
                  <a target="_blank" class="btn btn-outline-light btn-social text-center rounded-circle" href="https://api.whatsapp.com/send?phone=6285646647507&text=Hi Admin, saya ingin mengajukan pertanyaan">
                    <i class="fab fa-fw fa-whatsapp"></i>
                  </a>
              </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

   <!-- About Section 
   <section class="bg-primary text-white mb-0" id="donat">
    <div class="container">
      <h2 class="text-center text-uppercase text-white">Donate us </h2>
        <br><h4 class="text-center text-uppercase text-white">
          So, we can keep alive!
        </h4>
      <hr class="star-light mb-5">
      <div class="row">
        <div class="col-lg-4 mx-auto text-center">
          <p class="lead">
            Help us to buy some endog asin
          </p>
        </div>
       
        
      </div>
	  
	  <div class="text-center mt-4">
        <a class="portfolio-item mx-auto btn btn-xl btn-outline-light" href="#portfolio-modal-donat">
          <i class="fas fa-dollar-sign mr-2"></i>
          Donate
        </a>
      </div>
      
    </div>
  </section>-->

  <?php $this->load->view('front/footer'); ?>
