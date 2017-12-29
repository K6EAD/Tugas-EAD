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
    <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#">Kelompok 6 EAD</a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
<a class="w3-bar-item w3-button w3-teal" href="home.php">Beranda</a>
  <a class="w3-bar-item w3-button" href="insert.php">Masukan Keluhan & Saran</a>
  <a class="w3-bar-item w3-button" href="updatedata.php">Ubah Komplain</a>
  <a class="w3-bar-item w3-button" href="delete.php">Hapus Komplain</a>
  <a class="w3-bar-item w3-button" href="showdatabase.php">Data Keluhan & Saran</a>
 <div>
<a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">Lainnya<i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="tatacara.html">Download Form Komplain</a>
      <a class="w3-bar-item w3-button" href="video.html">Video Pemeliharaan Jalanan</a>
	  <a class="w3-bar-item w3-button" href="komentar2.php" >Chat</a>
    </div>
  </div>
  
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Ubah Komplain</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">Ubah Komplain</h1>
</header>

<div class="w3-container" style="padding:32px">

<?php

include 'koneksi.php';
$nim = $_GET['id'];
$show = mysql_query("SELECT * FROM tb_database WHERE id = '$nim'");
$data = mysql_fetch_assoc($show); 

?>
<form action ="proses_updatedata.php" method="POST">
<input type ="hidden" name = "id" value = "<?php echo $nim?>">
Nama Lengkap					: <br>
	<input type = "text" name= "nama" placeholder = "Nama" ><br>
ID KTP					: <br>
     <input type = "text" name= "nik" placeholder = "ID KTP" ><br>
Umur			    : <br>
	<input type = "text" name = "umur" placeholder = "Umur"><br>
Jenis Kelamin					: <br>
				  <input type = "radio" name = "gender" id="gender" value="Pria">Pria
				  <input type = "radio" name = "gender" id="gender" value="Wanita">Wanita<br>
				  
Asal Kecamatan :<br>
<select name="kecamatan"> 
<option value="">Silahkan Pilih</option>  
 <option value="Antapani">Antapani</option>  
 <option value="Arcamanik">Arcamanik</option>  
 <option value="Batu Nunggal">Batu Nunggal</option>  
 <option value="Buah Batu">Buah Batu</option>  
 <option value="Cibiru">Cibiru</option>  
 <option value="Cidadap">Cidadap</option>  
 <option value="Kiara Condong">Kiara Condong</option>  
 <option value="Lengkong">Lengkong</option>  
 </select>   <br>
Jenis Keluhan :<br>
 <select name="jenis"> 
<option value="">Silahkan Pilih</option>  
 <option value="Jalanan">Jalanan</option>  
 <option value="Rumah Sakit">Rumah Sakit</option>  
 <option value="Pasar">Pasar</option>  
 <option value="Bangunan">Bangunan</option>  
 <option value="Rumah Ibadah">Rumah Ibadah</option>  
 <option value="Transportasi">Transportasi</option>  
 <option value="Energi">Energi</option>
 <option value="Taman">Taman</option>
 </select>   <br>
 Keluhan 					: <br>
	<input type = "text" name="keluhan" placeholder = "Keluhan anda" ><br>
Saran 						: <br>
	<input type = "text" name="saran" placeholder = "Saran anda" ><br>
	<input type = "submit" value= "Submit"> <br>
	
	
Select image to upload : <br>
	<input type = "file" name = "gambar"/>
	<br>
	
	<input type = "submit" value= "Submit"> <br>
</form>



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
