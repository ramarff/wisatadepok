<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="<?= base_url('assets/admin-lte/dist/img/AdminLTELogo.png')?>" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url("assets/admin-lte/dist/img/user2-160x160.jpg"); ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">
          <?php
            if($this->session->has_userdata("USERNAME")){
              // var_dump($this->session->has)
              echo $this->session->userdata("USERNAME");
              // echo $this->session->userdata["USERNAME"];
            }else{
              echo "admin";
            }
          ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url("admin/wisata"); ?>" class="nav-link">
             <p><i class="fa-solid fa-earth-asia"></i> Tempat Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("admin/kecamatan") ?>" class="nav-link">
              <p><i class="fa-solid fa-location-pin"></i> Kecamatan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("admin/jenis_wisata") ?>" class="nav-link">
              <p><i class="fa-solid fa-text-height"></i> Jenis Wisata</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("admin/users") ?>" class="nav-link">
              <p><i class="fa-solid fa-user"></i> Users</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("admin/booking") ?>" class="nav-link">
              <p><i class="fa-solid fa-ticket"></i> Daftar Pengunjung</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("admin/ulasan") ?>" class="nav-link">
              <p><i class="fa-solid fa-star"></i> Ulasan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url("account/admin/logout") ?>" class="nav-link">
              <p><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</p>
            </a>
          </li>
        </ul>
        
         
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
