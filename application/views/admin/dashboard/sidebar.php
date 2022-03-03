<!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3">endogasin</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <?php if($level==1) { ?>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>dashboard">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Settings
      </div>


      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>dashboard/listproject">
          <i class="fas fa-file fa-file-alt"></i>
          <span>Projects</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>akun">
          <i class="fas fa-file fa-file-alt"></i>
          <span>Pengaturan User</span></a>
      </li>

      <?php }?>
     <!-- <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-book fa-book-alt"></i>
          <span>Other</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-comment fa-comment-alt"></i>
          <span>Others</span></a>
      </li>-->

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url(); ?>login/logout">
          <i class="fas fa-sign-out fa-sign-out-alt"></i>
          <span>Keluar</span></a>
      </li>

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>
    <!-- End of Sidebar -->