<?php

include 'koneksi.php';


$nama = $_POST ['nama'];
$nik = $_POST ['nik'];
$umur = $_POST ['umur'];
$gender = $_POST ['gender'];
$kecamatan = $_POST ['kecamatan'];
$jenis = $_POST ['jenis'];
$keluhan = $_POST ['keluhan'];
$saran = $_POST ['saran'];
$pict = $_POST ['pict'];

$input = mysql_query("INSERT INTO tb_database VALUES('','$nama','$nik','$umur','$gender','$kecamatan','$jenis','$keluhan','$saran','$pict')");

if(!$input){
echo "Tidak Tersambung ke Tabel";
}

header('Location:insert.php');


?>
