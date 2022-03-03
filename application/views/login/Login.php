<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/admin/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
  #text {display:none;color:red}

  .mySlides {
    display:none;
    
    }
  </style>

</head>

<body  class="bg-gradient-white">
<!--class="bg-gradient-primary"-->
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">

              <div class="col-lg-6 bg-white">

              <div class="w3-content w3-display-container m-5">
                <img class="mySlides" src="<?php echo base_url(); ?>assets/front/img/work1.png" width="100%" height="auto"> 
               <!-- <img class="mySlides" src="<?php echo base_url(); ?>assets/images/icon_dg2.png" width="100%" height="auto"> 
                <img class="mySlides" src="<?php echo base_url(); ?>assets/images/icon_dg.png" width="100%" height="auto"> -->
              </div>

              </div>
              <div class="col-lg-6">
                <div class="p-3">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Admin Gilimedia!</h1>
                    <div id="text" style="color:red">Caps Lock Anda Aktif!</div>
                    <span><?php echo $info; ?></span><br>
                    
                  </div>
                  <form class="user" action="<?php echo base_url(); ?>login/proseslog" id="form-login" method="post">
                    <div class="form-group">
                      <!--<input type="email" class="form-control form-control-user" name="nama_user" id="nama_user" aria-describedby="emailHelp" placeholder="Enter User Name" required/>-->
					  <input type="text" class="form-control form-control-user" name="nama_user" id="nama_user"  placeholder="Enter User Name" required/>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" name="pass_user" id="pass_user" placeholder="Password">
                    </div>
                    <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div>
                    
          <input type="submit" name="login" value="Login" id="submit-login" class="btn btn-primary btn-user btn-block" />
          <hr>
          <!--<a href="<?php echo base_url(); ?>register" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Registrasi User
          </a>
                    <hr>
                    <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a>-->
                  </form>
                  <!--<div class="text-center">
                    <a class="small" href="<?php echo base_url(); ?>forgot">Lupa Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div>-->
                </div>
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
    
  var input = document.getElementById("pass_user");
  var text = document.getElementById("text");
  input.addEventListener("keyup", function(event) {

  if (event.getModifierState("CapsLock")) {
      text.style.display = "block";
    } else {
      text.style.display = "none"
    }
  });
</script>

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
