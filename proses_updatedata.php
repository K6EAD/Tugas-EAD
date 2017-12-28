<?php
include ('koneksi.php');
$nim = $_POST['id'];
$nama = $_POST ['nama'];
$nik = $_POST ['nik'];
$umur = $_POST ['umur'];
$gender = $_POST ['gender'];
$kecamatan = $_POST ['kecamatan'];
$jenis = $_POST ['jenis'];
$keluhan = $_POST ['keluhan'];
$saran = $_POST ['saran'];
$pict = $_POST ['pict'];

$update = mysql_query("UPDATE tb_database SET nama = '$nama', nik='$nik', umur = '$umur', gender = '$gender', kecamatan = '$kecamatan',jenis = '$jenis', keluhan = '$keluhan', saran = '$saran', pict = '$pict' WHERE id = '$nim'");


if(!$update)
{
	echo "GAGAL UPDATE";
}


header('Location:updatedata.php');






?>
