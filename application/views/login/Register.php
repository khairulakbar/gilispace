<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Register User</title>


  
  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

  <style type="text/css">
  .text-success {
      color: #28a745;
  }
  .text-danger {
      color: #dc3545;
  }
  .mySlides {
    display:none;
    
    }
 
  </style>

  

</head>

<body  class="bg-gradient-white">
<!--class="bg-gradient-primary"-->
<div class="container">


<div class="card o-hidden border-0 shadow-lg my-5">
  <div class="card-body p-0">
    <!-- Nested Row within Card Body -->
    <div class="row">
      <div class="col-lg-6 bg-white">

      <div class="w3-content w3-display-container">
            <img class="mySlides" src="<?php echo base_url(); ?>assets/images/banner1.jpg" width="100%" height="auto"> 
                <img class="mySlides" src="<?php echo base_url(); ?>assets/images/banner2.jpg" width="100%" height="auto"> 
                <img class="mySlides" src="<?php echo base_url(); ?>assets/images/banner3.jpg" width="100%" height="auto">  
      </div>

    

      </div>
      <div class="col-lg-6">
        <div class="p-4">
          <div class="text-center">
            <h1 class="h4 text-gray-900 mb-4">Registrasi User</h1>
            <div style="color:red">DAFTAR SEKARANG UNTUK FREE TRIAL 3 HARI</div>
            <span><?php echo $info; ?></span><br>
          </div>
          <form role="form" action="<?php echo base_url(); ?>register/newuser" method="POST" enctype="multipart/form-data" oninput='passwordrepeat.setCustomValidity(passwordrepeat.value != password.value ? "Passwords do not match." : "")' >
            <!--<div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" id="exampleFirstName" placeholder="First Name">
              </div>
              <div class="col-sm-6">
                <input type="text" class="form-control form-control-user" id="exampleLastName" placeholder="Last Name">
              </div>
            </div>-->
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="nama" id="nama" placeholder="Nama" required>
            </div>
            <div class="form-group">
              <input type="email" class="form-control form-control-user" name="email"  id="email" placeholder="Email Address" required>
            </div>
            <div class="form-group">
              <input type="text" class="form-control form-control-user" name="telpon"  id="telpon" placeholder="Nomor Telepon" required>
            </div>
            <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
                <input type="password" class="form-control form-control-user" name="password" id="password" placeholder="Password" required>
              </div>
              <div class="col-sm-6">
                <input type="password" class="form-control form-control-user" name="passwordrepeat" id="passwordrepeat" placeholder="Ulangi Password" >
              </div>
            </div>
            <button type="submit" id="submit" name="submit" class="btn btn-primary btn-user btn-block">
              DAFTAR
            </button>
            
            <!--<hr>
            <a href="index.html" class="btn btn-google btn-user btn-block">
              <i class="fab fa-google fa-fw"></i> Register with Google
            </a>
            <a href="index.html" class="btn btn-facebook btn-user btn-block">
              <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
            </a>-->
          </form>
          <div class="text-center">
            <a class="small" href="<?php echo base_url(); ?>forgot">Lupa Password?</a>
          </div>
          <div class="text-center">
            <a class="small" href="<?php echo base_url(); ?>login">Sudah Punya Akun? Silahkan Login!</a>
          </div>
          <div class="text-center">
            atau...
          </div>
          <div class="text-center">
          <a href="https://api.whatsapp.com/send?phone=6285646647507&text=Saya ingin mendaftar akses Premium" target="_blank" class="btn btn-info">
            Aktifkan Premium 30 Hari hanya 50k Sekarang
          </a>
          </div>
                    
        </div>
      </div>
    </div>
  </div>
</div>

</div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url(); ?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url(); ?>assets/js/sb-admin-2.min.js"></script>

  <script>
  var myIndex = 0;
  carousel();



  function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    
    setTimeout(carousel, 10000); // Change image every 2 seconds
    
  }
  </script>
  
</body>

</html>
