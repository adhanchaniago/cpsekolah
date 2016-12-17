<?php function time_stamp($waktu_sesi) { 
  $selisih_waktu = time() - $waktu_sesi ; 
  $detik = $selisih_waktu ; 
  $menit = round($selisih_waktu / 60 );
  $jam = round($selisih_waktu / 3600 ); 
  $hari = round($selisih_waktu / 86400 ); 
  $minggu = round($selisih_waktu / 604800 ); 
  $bulan = round($selisih_waktu / 2419200 ); 
  $tahun = round($selisih_waktu / 29030400 ); 

  if($detik <= 60){
    echo "$detik detik lalu"; 
  }
  else if($menit <= 60){
    if($menit==1){
      echo "1 menit lalu"; 
    }
    else{
      echo "$menit menit lalu"; 
    }
  }
  else if($jam <= 24){
    if($jam==1){
      echo "1 jam lalu";
    }
    else{
      echo "$jam jam lalu";
    }
  }
  else if($hari <= 7){
    if($hari==1){
      echo "1hari lalu";
    }
    else{
      echo "$hari hari lalu";
    }
  }
  else if($minggu <= 4){
    if($minggu==1){
      echo "1minggu lalu";
    }
    else{
      echo "$minggu minggu lalu";
    }
  }
  else if($bulan <= 12){
    if($bulan==1){
      echo "1 bulan lalu";
    }
    else{
      echo "$bulan bulan lalu";
    }   
  }
  else{
    if($tahun==1){
      echo "1 tahun lalu";
    }
    else{
      echo "$tahun tahun lalu";
    }
  }
} 
$time_line = time(); 
?>
