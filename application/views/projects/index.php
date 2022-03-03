<?php $this->load->view('front/header'); ?>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="<?php echo base_url(); ?>">GiliSpace.com</a>
     <!-- <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
	  
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#projects">Projects</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about">Tutorial</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#contact">Contact</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#">Articles</a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#donat">Donat</a>
            </li>
        </ul>
      </div>-->
    </div>
  </nav>

  

  <!-- Portfolio Grid Section -->
  <section class="portfolio mt-5" id="projects">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary mb-0">Projects <?php echo $category;?></h2>
      <hr class="star-dark mb-5">
      <div class="row">

      <?php 
         $cek = count($model['projects_table']);
         if($cek > 0){
				foreach($model['projects_table'] as $data) {
         
        
        ?>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="#portfolio-modal-<?php echo $data->id_project?>">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                
                <?php echo $data->project_name?>
              </div>
            </div>
            <img class="img-fluid" src="<?php echo base_url().'assets/front/img/portfolio/'.$data->img; ?>" alt="">
          </a>
        </div>


        <!-- Portfolio Modal 1 -->
      <div class="portfolio-modal mfp-hide" id="portfolio-modal-<?php echo $data->id_project?>">
        <div class="portfolio-modal-dialog bg-white">
          <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
            <i class="fa fa-3x fa-times"></i>
          </a>
          <div class="container text-center">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <h2 class="text-secondary text-uppercase mb-0"><?php echo $data->project_name?></h2>
                <hr class="star-dark mb-5">
                <img class="img-fluid mb-5" width="80%" src="<?php echo base_url().'assets/front/img/portfolio/'.$data->img; ?>" alt="">
                <p class="mb-5"><?php echo $data->description; ?></p>
                
                <a class="portfolio-modal-dismiss" href="#">
                  <i class="fa fa-close"></i>
              </a>
              <?php 
              if($data->id_category != 2){
              if($data->price != 0){ ?>
                <p class="mb-5"><h4><?php echo 'Rp '.number_format($data->price); ?></h4></p>
                <a class="btn btn-primary btn-lg rounded-pill" href="<?php echo base_url().'projects/order';?>">
                  Buy Project
                </a>
              <?php }else{ ?>
                <p class="mb-5"><h4><?php echo "Yay, It's Free to Use!"; ?></h4></p>
                <p><small>but don't forget to credit me as owner</small></p>
                <a class="btn btn-primary btn-lg rounded-pill" href="<?php echo $data->url;?>">
                  Download
                </a>
              <?php }  
              }else{
                echo "<a class='btn btn-primary btn-lg rounded-pill' href='$data->url'>Visit</a>";
              } ?>
              </div>
            </div>
          </div>
        </div>
      </div>
        <?php 
        }
        }else{
          echo "<div class='col-lg-12 text-center mb-5 mt-5'>";
          echo "<h4 class='text-uppercase text-danger mb-0'>Sorry, Projects Not Available Now</h2>";
          echo "</div>";
        }
      
				?>
          

      </div>
	  
	  <div class="row">
        <div class="col-md-6 col-lg-4">
		<nav aria-label="Page navigation example">
          <?php
						// Tampilkan link-link paginationnya
						echo $model['pagination'];
          ?>
		</nav>
		</div>
    </div>
    

    <div class="row">
					<div class="col-md-12 text-center">
          <nav aria-label="Page navigation example">
					
          
          </nav>
						<!--<ul class="pagination">
							<li class="disabled"><a href="#">&laquo;</a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>-->
					</div>
					
				</div>
	
    </div>
	
	
	 


  </section>

 

  

  <?php $this->load->view('front/footer'); ?>
