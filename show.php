<html>
<head>




</head>
<body>
<table>
<?php

include 'koneksi.php';
$query = mysql_query('SELECT * FROM tb_contoh');
$nomor = 1;
while ($data = mysql_fetch_assoc($query)){
	echo'<tr>';
	echo'<td>'.$nomor.'</td>';
	echo'<td>'.$data['nama'].'</td>';
	echo'<td>'.$data['nim'].'</td>';
	echo'<td>'.$data['kelas'].'</td>';
	echo'<td>'.$data['alamat'].'</td>';
	echo'<td><a href="updatedata.php?nim='.$data['nim'].'">UPDATE</td>';
	echo'<td><a href="proses_deletedata.php?nim='.$data['nim'].'">DELETE</td>';
	echo'</tr>';
	$nomor++;
}




?>
</table>




</body>

















</html>