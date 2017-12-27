<?php
include ('koneksi.php');

$nim = $_GET ['id'];

$check = mysql_query("SELECT id FROM tb_database WHERE id='$nim'"); 
$delete = mysql_query("DELETE FROM tb_database WHERE id='$nim'");


if(!$delete)
{
	echo "GAGAL MENGHAPUS";
}

header('Location:delete.php');







?>