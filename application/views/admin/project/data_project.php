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

<!-- DataTales Example -->
<div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">Data Artikel </h6>
    <a class="btn btn-primary" href="<?php echo base_url(); ?>dashboard/addproject/"><i class="fa fa-plus"></i> Project</a>

    
  </div>
  <div class="card-body">
    <div class="table-responsive">
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
            <th>No </th>
            <th>Project</th>
            <th>Category</th>
            <th>Action</th>
          </tr>
        </thead>
        <!--<tfoot>
          <tr>
            <th>Username</th>
            <th>Status</th>
            <th>Action</th>
            
          </tr>
        </tfoot>-->
        <tbody>
          <?php $no=0; foreach ($listproj as $row) { $no++ ?>
          <tr>
            <td><?php echo $no; ?></td>
            <td><?php echo $row['project_name'];?></td>
            <td><?php echo $row['category'];?></td>
            <td>
              <a class="btn btn-success" href="<?php echo base_url(); ?>dashboard/editproject/<?php echo $row['id_project']; ?>">Edit Project</a>
              
              <?php if($row['status'] == 2){?>
                <span class="btn btn-primary">Published</span>
              <?php }else{ ?>
                <span class="btn btn-danger">Draft</span>
              <?php } ?>

            </td>
            
          </tr>
          <?php } ?>
          
        </tbody>
      </table>
    </div>
  </div>
</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content --> 
      <!-- include footer here -->
      

      <?php $this->load->view('admin/dashboard/footer'); ?>
      