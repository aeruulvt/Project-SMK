<?php
    error_reporting(0); 
    include "../config/koneksi.php";
    session_start();
    $email=$_SESSION['email'];
    $sql = mysqli_query($connect_db,"SELECT * FROM tbl_users 
      WHERE user_email='$email'");
    $rowuser=mysqli_fetch_assoc($sql);  
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-green elevation-1" style="background-color:#161F30">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="dist/img/mutiarailmu.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-1"
        style="opacity: .8">
    <span class="brand-text font-weight-light">Jurnal Guru</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="dist/img/profil.png" class="img-circle elevation-1" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block"><?php echo $rowuser['user_name']?></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="menu.php?page=dashboard" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>Dashboard</p>
            </a>
            <li class="nav-item">
            <a href="menu.php?page=view_jurnal" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>Jurnal Mengajar</p>
            </a>
          </li> 
          <li class="nav-item has-treeview">
            
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-print"></i>
              <p>
                Cetak Laporan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="menu.php?page=cetak_jurnal" class="nav-link ">
                  <i class="fa fa-caret-right"></i>
                  <p>Jurnal Harian Guru</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="menu.php?page=cetak_absen" class="nav-link">
                  <i class="fa fa-caret-right"></i>
                  <p>Rekap Absensi</p>
                </a>
              </li>
              
            </ul>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Log Out</p>
            </a>
          </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>
