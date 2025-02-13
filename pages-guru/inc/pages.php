<?php
    if(isset($_GET['page'])){
      $page = $_GET['page'];
      switch ($page) {// Beranda
        case 'dashboard':
          include 'dashboard.php';
          break;
        case 'view_jurnal':
          include 'view_jurnal.php';
          break;  
        case 'input_jurnal':
          include 'input_jurnal.php';
          break;  
        case 'view_absen':
          include 'view_absen.php';
          break;   
        case 'input_absen':
          include 'input_absen.php';
          break;   
        case 'detail_viewabsen':
          include 'detail_viewabsen.php';
          break;   
        case 'cetak_absen':
          include 'cetak_absen.php';
          break;
        case 'cetak_jurnal':
          include 'cetak_jurnal.php';
          break;
        }
      }
?>