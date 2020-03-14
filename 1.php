<?php 
$saldo = 2921690;
$bunga = 2.1/100;

for($month=1;$month<=12;$month++){
    $jumlah_bunga = $saldo * $bunga;
    echo "Bulan ".$month."</br>";
    echo "Saldo Awal : ".number_format($saldo,2,',','.');
    echo "</br>";
    echo "Bunga : ".number_format($jumlah_bunga,2,',','.');
    echo "</br>";


    $saldo = $saldo + $jumlah_bunga;

    echo "Saldo : ".number_format($saldo,2,',','.');
    echo "</br></br>";
}
?>