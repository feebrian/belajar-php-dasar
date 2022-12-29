<?php

// deklarasi variable 
$punyaUtang = true;
$utang = 10_000; // utang
$telat_bayar = 12; // telat bayar "/bulan"
$msg;

if ($punyaUtang) {
  $msg = "Anda punya utang sebesar $utang <br>";
  function denda(){
    global $utang;
    global $telat_bayar;

    if ($telat_bayar === 0) {
      $msg = "Terima kasih anda telah membayar utang tepat waktu";
      echo "$msg";

      exit;
    } 

    $denda = $utang * $telat_bayar;

    $msg = "Tetapi karena anda telat membayar selama $telat_bayar bulan maka utang anda kami kali kan $telat_bayar menjadi $denda";

    echo "$msg";

  }
} else {
  $msg = "Hore anda tidak punya utang \n";
}

echo $msg;
denda();
