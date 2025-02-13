<?php
function hariIndo ($hariInggris) {
    switch ($hariInggris) {
      case 'Sunday':
        return 'Minggu';
      case 'Monday':
        return 'Senin';
      case 'Tuesday':
        return 'Selasa';
      case 'Wednesday':
        return 'Rabu';
      case 'Thursday':
        return 'Kamis';
      case 'Friday':
        return 'Jumat';
      case 'Saturday':
        return 'Sabtu';
      default:
        return 'hari tidak valid';
    }
  }
  function bulan($bulan)
  {
  Switch ($bulan){
      case 1 : $bulan="Januari";
          Break;
      case 2 : $bulan="Februari";
          Break;
      case 3 : $bulan="Maret";
          Break;
      case 4 : $bulan="April";
          Break;
      case 5 : $bulan="Mei";
          Break;
      case 6 : $bulan="Juni";
          Break;
      case 7 : $bulan="Juli";
          Break;
      case 8 : $bulan="Agustus";
          Break;
      case 9 : $bulan="September";
          Break;
      case 10 : $bulan="Oktober";
          Break;
      case 11 : $bulan="November";
          Break;
      case 12 : $bulan="Desember";
          Break;
      }
  return $bulan;
  }
  $hariBahasaInggris = date('l');
  $hariBahasaIndonesia = hariIndo($hariBahasaInggris);

  $bln=date("m");
  $month= bulan($bln);
  $tanggal=$hariBahasaIndonesia. " " .date("d") . " " .$month ." " .date("Y");
?>