<!DOCTYPE html>
<html>
<title>LAKOM KOBA</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-teal.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><style>
body {font-family: "Roboto", sans-serif}
.w3-bar-block .w3-bar-item{padding:16px;font-weight:bold}
</style>
<body>

<nav class="w3-sidebar w3-bar-block w3-collapse w3-animate-left w3-card" style="z-index:3;width:250px;" id="mySidebar">
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#">Kelompok 6</a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="home.php">Beranda</a>
  <a class="w3-bar-item w3-button" href="insert.php">Masukan Keluhan & Saran</a>
  <a class="w3-bar-item w3-button" href="updatedata.php">Ubah Komplain</a>
  <a class="w3-bar-item w3-button" href="delete.php">Hapus Komplain</a>
  <a class="w3-bar-item w3-button w3-teal" href="showdatabase.php">Data Keluhan & Saran</a>
  <div>
<a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">Lainnya<i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="tatacara.html">Download Form Komplain</a>
      <a class="w3-bar-item w3-button" href="video.html">Video Perwujudan Smart City</a>
	  <a class="w3-bar-item w3-button" href="komentar2.php" >Chat</a>
    </div>
  </div>
  
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Menampilkan Data Pada Database</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">Data Keluhan & Saran </h1>
</header>

<div class="w3-container" style="padding:32px">

<head>
	<title>Menampilkan Data MySQL Ke Dalam Tabel HTML</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	<h1>Tabel </h1>
	<table class="data-table">
		<caption class="title">Data Keluhan dan Saran Warga Kota Bandung</caption>
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>ID KTP</th>
				<th>Umur</th>
				<th>Jenis Kelamin</th>
				<th>Asal Kecamatan</th>
				<th>Jenis Keluhan</th>
				<th>Keluhan</th>
				<th>Saran</th>
				<th>Picture</th>
			</tr>
		</thead>
		<tbody>
		<?php
		include 'koneksi.php';
		$query = mysql_query('SELECT * FROM tb_database');
		$no 	= 1;
		while ($data = mysql_fetch_assoc($query)){
	echo'<tr>';
	echo'<td>'.$no.'. </td>';
	echo'<td> '.$data['nama'].'</td>';
	echo'<td> '.$data['nik'].'</td>';
	echo'<td> '.$data['umur'].'</td>';
	echo'<td> '.$data['gender'].'</td>';
	echo'<td> '.$data['kecamatan'].'</td>';
	echo'<td> '.$data['jenis'].'</td>';
	echo'<td> '.$data['keluhan'].'</td>';
	echo'<td> '.$data['saran'].'</td>';
	echo'<td><img src="upload/'.$data['pict'].'"></td>';		
	echo'</tr><br>';

			$no++;
		}?>
		</tbody>
	</table>
</body>

<footer class="w3-container w3-theme" style="padding:32px">
<p>Contact Us !</p>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a> lakom_koba <br>
<a href="http://facebook.com" class="fa fa-facebook"></a>  LAKOM KOBA<br>
<p>E-mail : lakom.koba@gmail.com</p> 
</footer>   
</div>

<script>
// Open and close the sidebar on medium and small screens
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Change style of top container on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
        document.getElementById("myTop").classList.add("w3-card-4", "w3-animate-opacity");
        document.getElementById("myIntro").classList.add("w3-show-inline-block");
    } else {
        document.getElementById("myIntro").classList.remove("w3-show-inline-block");
        document.getElementById("myTop").classList.remove("w3-card-4", "w3-animate-opacity");
    }
}

// Accordions
function myAccordion(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-theme";
    } else { 
        x.className = x.className.replace("w3-show", "");
        x.previousElementSibling.className = 
        x.previousElementSibling.className.replace(" w3-theme", "");
    }
}
</script>
     
</body>
</html> 
