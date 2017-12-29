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
$lokasi_file = $_FILES['gambar']['tmp_name'];
$tipe_file   = $_FILES['gambar']['type'];
$nama_file   = $_FILES['gambar']['name'];
$direktori   = "upload/$nama_file";

if(!empty($lokasi_file)){
	move_uploaded_file($lokasi_file,$direktori);
  $input = mysql_query("INSERT INTO tb_database VALUES('','$nama','$nik','$umur','$gender','$kecamatan','$jenis','$keluhan','$saran','$nama_file')");

if(!$input){
echo "Tidak Tersambung ke Tabel";
}else {
	echo 'berhasil';
}
}else {
	echo 'error';
	
}


header('Location:insert.php');


?>
