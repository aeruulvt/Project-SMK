<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
  switch ($page) { // Beranda
    case 'dashboard':
      include 'dashboard.php';
      break;
    case 'view_kelas':
      include 'view_kelas.php';
      break;
    case 'view_mapel':
      include 'view_mapel.php';
      break;
    case 'view_guru':
      include 'view_guru.php';
      break;
    case 'view_jadwal':
      include 'view_jadwal.php';
      break;
    case 'view_manajemenuser':
      include 'view_manajemenuser.php';
      break;
    case 'input_manajemenuser':
      include 'input_manajemenuser.php';
      break;
    case 'edit_manajemenuser':
      include 'edit_manajemenuser.php';
      break;
    case 'edit_kelas':
      include 'edit_kelas.php';
      break;
    case 'view_kelas':
      include 'view_kelas.php';
      break;
    case 'input_kelas':
      include 'input_kelas.php';
      break;
    case 'input_guru':
      include 'input_guru.php';
      break;
    case 'edit_guru':
      include 'edit_guru.php';
      break;
    case 'input_mapel':
      include 'input_mapel.php';
      break;
    case 'view_siswa':
      include 'view_siswa.php';
      break;
    case 'input_siswa':
      include 'input_siswa.php';
      break;
    case 'edit_siswa':
      include 'edit_siswa.php';
      break;
    case 'edit_mapel':
      include 'edit_mapel.php';
      break;
    case 'input_jadwal':
      include 'input_jadwal.php';
      break;
  }
}
