
<?php
//no 2ii
$tgl1 = "2020-11-23"; // pendefinisian tanggal awal
$tgl2 = date('m-y-d', strtotime($tgl1)); //mengubah letak bulan
echo $tgl2; //print tanggal
