 <!-- Donate Section 
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
            Help us to pay food and internet bills
          </p>
        </div>
       
        
      </div>
	  
	  <div class="text-center mt-4">
        <a class="btn btn-xl btn-outline-light" href="#">
          <i class="fas fa-dollar-sign mr-2"></i>
          Donate
        </a>
      </div>
      
    </div>
  </section>-->

 <!-- Footer -->
 <footer class="footer text-center">
   <div class="container">
     <div class="row">
       <div class="col-md-4 mb-5 mb-lg-0">
         <!-- content -->
       </div>
       <div class="col-md-4 mb-5 mb-lg-0">
         <h4 class="text-uppercase mb-4">Location</h4>
         <p class="lead mb-0">Jakarta, Indonesia</p>
       </div>
       <div class="col-md-4 mb-5 mb-lg-0">
         <!-- content -->
       </div>

     </div>
   </div>
 </footer>

 <div class="copyright py-4 text-center text-white">
   <div class="container">
     <small>Copyright &copy; gilispace.com <?php echo date("Y"); ?></small>
   </div>
 </div>

 <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
 <div class="scroll-to-top d-lg-none position-fixed ">
   <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
     <i class="fa fa-chevron-up"></i>
   </a>
 </div>

 <!-- Portfolio Modals -->

 <!-- Portfolio Modal 1 -->
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-donat">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Support Kami dengan Donasimu</h2>
           <hr class="star-dark mb-5">
           <!--<img class="img-fluid mb-5" src="<?php echo base_url() . 'assets/front/'; ?>img/portfolio/design.png" alt="">-->
           <div class="row m-5">
             <div class="col-lg-4 ">Nama :</div>
             <div class="col-lg-8 ">
               <input class="form-control" type="text" name="nama" placeholder="Nama">
             </div>
           </div>
           <div class="row m-5">
             <div class="col-lg-4 ">Email :</div>
             <div class="col-lg-8 ">
               <input class="form-control" type="email" name="email" placeholder="Alamat Email">
             </div>
           </div>
           <div class="row m-5">
             <div class="col-lg-4 ">Nominal Donasi :</div>
             <div class="col-lg-8 ">
               <input class="form-control" type="number" name="nominal" placeholder="Rp Berapa Saja yang penting Ikhlas">
             </div>
           </div>

           <a class="portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
           </a>
           <a class="btn btn-primary btn-lg rounded-pill" href="#">
             Donasikan
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 1 -->
 <div class="portfolio-modal mfp-hide" id="modal-design">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Design & Illustration</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" width="80%" src="<?php echo base_url() . 'assets/front/img/portfolio/icon/'; ?>design.png" alt="">
           <br>
           <a class="btn btn-primary btn-lg rounded-pill" href="<?php echo base_url() . 'projects/listprojects/1'; ?>">
             Details
           </a>
           <a class="portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
           </a>

         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 2 -->
 <div class="portfolio-modal mfp-hide" id="modal-web">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Web Apps</h2>
           <hr class="star-dark mb-5">


           <img class="img-fluid mb-5"  width="80%" src="<?php echo base_url() . 'assets/front/img/portfolio/icon/'; ?>web.png" alt="">
           <br>
           <a class="btn btn-primary btn-lg rounded-pill" href="<?php echo base_url() . 'projects/listprojects/2'; ?>">
             Details
           </a>
           <a class="portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
           </a>

         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 3 -->
 <div class="portfolio-modal mfp-hide" id="modal-apps">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Android Apps</h2>
           <hr class="star-dark mb-5">

           <img class="img-fluid mb-5"  width="80%" src="<?php echo base_url() . 'assets/front/img/portfolio/icon/'; ?>phone.png" alt="">
           <br>
           <a class="btn btn-primary btn-lg rounded-pill" href="<?php echo base_url() . 'projects/listprojects/3'; ?>">
             Details
           </a>
           <a class="portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
           </a>

         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 4 -->
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-4">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project Application</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="<?php echo base_url() . 'assets/front/'; ?>img/portfolio/game.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
           </a>
           <a class="btn btn-primary btn-lg rounded-pill" href="#">
             View Project
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 5 -->
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-5">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project </h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="<?php echo base_url() . 'assets/front/'; ?>img/portfolio/safe.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
           </a>
           <a class="btn btn-primary btn-lg rounded-pill" href="#">
             View Project
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Portfolio Modal 6 -->
 <div class="portfolio-modal mfp-hide" id="portfolio-modal-6">
   <div class="portfolio-modal-dialog bg-white">
     <a class="close-button d-none d-md-block portfolio-modal-dismiss" href="#">
       <i class="fa fa-3x fa-times"></i>
     </a>
     <div class="container text-center">
       <div class="row">
         <div class="col-lg-8 mx-auto">
           <h2 class="text-secondary text-uppercase mb-0">Project Name</h2>
           <hr class="star-dark mb-5">
           <img class="img-fluid mb-5" src="<?php echo base_url() . 'assets/front/'; ?>img/portfolio/submarine.png" alt="">
           <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
           <a class="portfolio-modal-dismiss" href="#">
             <i class="fa fa-close"></i>
           </a>
           <a class="btn btn-primary btn-lg rounded-pill" href="#">
             View Project
           </a>
         </div>
       </div>
     </div>
   </div>
 </div>

 <!-- Bootstrap core JavaScript -->
 <script src="<?php echo base_url() . 'assets/front/'; ?>vendor/jquery/jquery.min.js"></script>
 <script src="<?php echo base_url() . 'assets/front/'; ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Plugin JavaScript -->
 <script src="<?php echo base_url() . 'assets/front/'; ?>vendor/jquery-easing/jquery.easing.min.js"></script>
 <script src="<?php echo base_url() . 'assets/front/'; ?>vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

 <!-- Contact Form JavaScript -->
 <script src="js/jqBootstrapValidation.js"></script>
 <script src="<?php echo base_url() . 'assets/front/'; ?>js/contact_me.js"></script>

 <!-- Custom scripts for this template -->
 <script src="<?php echo base_url() . 'assets/front/'; ?>js/freelancer.min.js"></script>

 </body>

 </html>