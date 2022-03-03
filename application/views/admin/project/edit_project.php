<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dashboard Admin</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url(); ?>assets/dashboard/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url(); ?>assets/dashboard/css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="<?php echo base_url(); ?>assets/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Summernote Text Editor CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-lite.css" rel="stylesheet">

  <style>
    
    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input { 
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: .4s;
      transition: .4s;
    }

    .slider:before {
      position: absolute;
      content: "";
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: .4s;
      transition: .4s;
    }

    input:checked + .slider {
      background-color: #2196F3;
    }

    input:focus + .slider {
      box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
      border-radius: 34px;
    }

    .slider.round:before {
      border-radius: 50%;
    }

    .tooltipp {
      position: relative;
      display: inline-block;
    }

    .tooltipp .tooltiptext {
      visibility: hidden;
      width: 540px;
      background-color: #555;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px;
      position: absolute;
      z-index: 1;
      bottom: 130%;
      left: 50%;
      margin-left: -75px;
      opacity: 0;
      transition: opacity 0.3s;
    }

    .tooltipp .tooltiptext::after {
      content: "";
      position: absolute;
      top: 100%;
      left: 10%;
      margin-left: -5px;
      border-width: 5px;
      border-style: solid;
      border-color: #555 transparent transparent transparent;
    }

    .tooltipp:hover .tooltiptext {
      visibility: visible;
      opacity: 1;
    }
    </style>
  
</head>

<body id="page-top">



<!-- Page Wrapper -->
<div id="wrapper">

<?php $this->load->view('admin/dashboard/sidebar'); ?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
  <i class="fa fa-bars"></i>
</button>



<!-- Topbar Navbar -->
<?php $this->load->view('admin/dashboard/header'); ?>
<!-- End of Topbar -->

<!--include header here-->
<!-- Begin Page Content -->
<div class="container-fluid">

<!-- Page Heading -->
<h1 class="h3 mb-4 text-gray-800">Edit Artikel</h1>
<span id="pesan-flash"><?php echo $this->session->flashdata('sukses'); ?></span>
<span id="pesan-error-flash"><?php echo $this->session->flashdata('alert'); ?></span>
<hr>
<form role="form" action="<?php echo base_url(); ?>dashboard/updateproject" method="POST" enctype="multipart/form-data">
<div class="row"> <!-- row 1 -->

    
  <!-- col 2-->
  <div class="col-lg-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Info Artikel</h6>
        </div>
        <div class="card-body">
          <!-- Circle Buttons (Default) -->
          <div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="hidden" class="form-control form-control-user" name="id_project" value="<?php echo $id_project;?>">
              </div>
          </div>
          <div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
              <h6 class="m-0 font-weight-bold text-primary">Judul Artikel : </h6>
                <input type="text" class="form-control form-control-user" name="project_name" placeholder = "Judul Project" value="<?php echo $project_name;?>">
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
              <h6 class="m-0 font-weight-bold text-primary">Category Artikel : </h6>
              <select class="col-sm-3 form-control form-control-user" name="category">
                  <option disable hidden value="<?php echo $id_kat;?>"><?php echo $kat; ?></option>
                  <?php foreach($category as $cat){?>
                  <option value="<?php echo $cat['id_category'];?>"><?php echo $cat['category'];?></option>
                  <?php }?>
              </select>
              </div>
          </div>

          <!--<div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0">
            <h6 class="m-0 font-weight-bold text-primary">Tanggal Posting : </h6>
              <?php
											//$newDate   =   date("d M Y", strtotime($date)); //Result Thu, 23 Jan 2020
											//echo $newDate; ?>
            </div>
          </div>-->

          <div class="form-group row">
              <div class="col-sm-6 mb-3 mb-sm-0">
              <h6 class="m-0 font-weight-bold text-primary">Price (IDR): </h6>
                <input type="number" class="form-control form-control-user" name="price" placeholder = "Price Project" value="<?php echo $price;?>">
              </div>
          </div>

          <div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
              <h6 class="m-0 font-weight-bold text-primary">Link : </h6>
                <input type="text" class="form-control form-control-user" name="link" placeholder = "Link Project" value="<?php echo $link;?>">
              </div>
          </div>

         
        </div>
      </div>
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Pengaturan Artikel</h6>
        </div>
        <div class="card-body">
          <!-- Circle Buttons (Default) -->
          
          <h6 class="m-0 font-weight-bold text-primary">Isi Artikel</h6>
          <!--<div class="form-group row">
              <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="text" class="form-control form-control-user" name="" placeholder = "isi running text" value="<?php echo $teks; ?>">
              </div>
          </div>-->
          
          
          <textarea id="summernote" name="description" rows="10"><?php echo $description; ?></textarea>
          <br>
          
          <h6 class="m-0 font-weight-bold text-primary">
            Status Article 
          </h6> 
          
          <select class="col-sm-3 form-control form-control-user" name="status">
                  <option disable hidden value="<?php echo $status;?>"><?php if ($status == 2){ 
                                  echo "<span class='m-0 font-weight-bold text-primary'>Published</span>";
                                }elseif($status == 1){ 
                                  echo "<span class='m-0 font-weight-bold text-danger'>Draft</span>";
                                };?></option>
                  <option value="1">Draft</option>
                  <option value="2">Published</option>
          </select>

        
         
          <div class="row">

          <div class="col-lg-3 mt-5">
              <!--<button type="submit" class="btn btn-primary btn-block btn-flat">Update Data</button>-->
            <button type="submit" class="btn btn-primary btn-icon-split">
                    <span class="icon text-white-50">
                      <i class="fas fa-save"></i>
                    </span>
                    <span class="text">Update Data</span>
            </button>

          
          </div>
        </div>

        </div>
      </div>
  </div><!-- end col -->
  
</div> <!-- end row1 -->

</form>
<hr>

<div class="row"> <!-- row 1 -->

  <div class="col-lg-12">
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Upload Gambar</h6>
        </div>
        
        <form role="form" action="<?php echo base_url(); ?>dashboard/saveimg/<?php echo $id_project ?>" method="POST" enctype="multipart/form-data">
        
        <div class="card-body">
          <!-- Circle Buttons (Default) -->
          
            <div class="form-group row">
                <div class="col-sm-12 mb-3 mb-sm-0">
                <input type="hidden" class="form-control form-control-user" name="oldimg" value="<?php echo $img;?>">
                    <input type="text" class="form-control form-control-user" name="judul_img" id="exampleFirstName" placeholder="Judul Gambar" required>
                </div>
            </div>

            <div class="input-group">
                <p>Upload Foto &nbsp;</p>
                <label class="input-group-btn">
                    <span class="btn btn-primary">
                        Browse&hellip; <input type="file" id="img" name="img" accept="image/*" style="display: none;" multiple required>
                    </span>
                </label>
                <input type="text" class="form-control" readonly>
            </div>

            <div class="form-group row">
            <div class="col-sm-12 mb-3 mb-sm-0 text-center">
            <?php echo $img;?>
            </div>
                <div class="col-sm-12 mb-3 mb-sm-0 text-center">
                
                <img src="<?php echo base_url().'assets/front/img/portfolio/'.$img;?>" width="50%" height="auto">
                </div>

            </div>


          <div class="my-2"></div>
          
           <!--tombol simpan-->
           <button id="btn_save" type="submit" class="btn btn-danger btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-save"></i>
              </span>
              <span class="text">Update Gambar</span>
            </button>
         
        </div>
      </div>
  </div><!-- end col -->
  </form>

       
        </div>

        </div>
      </div>
  </div><!-- end col -->

  

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Page Content -->

      <!-- include footer here -->
      
<?php $this->load->view('admin/dashboard/footer'); ?>
      