<?php

include 'koneksi.php';


$nama = $_POST ['nama'];
$nik = $_POST ['nik'];
$umur = $_POST ['umur'];
$gender = $_POST ['gender'];
$kecamatan = $_POST ['kecamatan'];
$keluhan = $_POST ['keluhan'];
$saran = $_POST ['saran'];

$input = mysql_query("INSERT INTO tb_database VALUES('','$nama','$nik','$umur','$gender','$kecamatan','$keluhan','$saran')");

if(!$input){
echo "Tidak Tersambung ke Tabel";
}

header('Location:insert.php');


?>