<html>
<head>
<title></title>
</head>
<body bgcolor="#45B5FF">
<?php 

$hr=array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$hari_ini=date("w");
$hari_ini=$hr[$hari_ini];
$jam = date ("H:i:s");

$tgl=date("d/m/Y");
$aktif="1";
$nama = $_POST["nama"];
$komentar = $_POST["komentar"];


$fp = fopen("guestbook.txt","a+");
fputs($fp,"$hari_ini|$tgl|$jam|$nama|$komentar\n");
fclose($fp);

header('Location:komentar2.php');
?>

</body>
</html>