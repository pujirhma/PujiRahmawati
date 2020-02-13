
<?php
//no 2ii
$tgl1 = "2020-11-23"; // pendefinisian tanggal awal
$tgl2 = date('Y-m-d', strtotime('+6 month', strtotime($tgl1))); //operasi penjumlahan tanggal sebanyak 6 hari
echo $tgl2; //print tanggal
