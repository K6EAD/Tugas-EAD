<?php
include ('koneksi.php');
$nim = $_POST['id'];
$nama = $_POST ['nama'];
$nik = $_POST ['nik'];
$umur = $_POST ['umur'];
$gender = $_POST ['gender'];
$kecamatan = $_POST ['kecamatan'];
$keluhan = $_POST ['keluhan'];
$saran = $_POST ['saran'];


$update = mysql_query("UPDATE tb_database SET nama = '$nama', nik='$nik', umur = '$umur', gender = '$gender', kecamatan = '$kecamatan', keluhan = '$keluhan', saran = '$saran' WHERE id = '$nim'");


if(!$update)
{
	echo "GAGAL UPDATE";
}


header('Location:updatedata.php');






?>