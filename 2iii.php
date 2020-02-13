<?php
function hitung_umur($tanggal_lahir)
{
    list($year, $month, $day) = explode("-", $tanggal_lahir);
    $jarak_tahun  = date("Y") - $year;
    $jarak_bulan = date("m") - $month;
    $jarak_hari   = date("d") - $day;
    if ($jarak_bulan < 0) $jarak_tahun--;
    elseif (($jarak_bulan == 0) && ($jarak_hari < 0)) $jarak_tahun--;
    return $jarak_tahun;
}
//Tampilkan Umur dengan Tanggal Lahir 1997-Oktober-08
echo hitung_umur("1998-04-25"); //isi sendiri sesuai tanggal lahir lu
