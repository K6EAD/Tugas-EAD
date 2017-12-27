<!DOCTYPE html>
<html>
<title>LAKOM Jalanan</title>
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
<a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">Lainnya <i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="tatacara.html">Download Form Komplain</a>
      <a class="w3-bar-item w3-button" href="video.html">Video Pemeliharaan Jalanan</a>
	  <a class="w3-bar-item w3-button" href="komentar2.php">Chat</a>
    </div>
  </div>
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">LAKOM Jalanan</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">Beranda</h1>
</header>

<div class="w3-container" style="padding:32px">


<form>
<h2><center><b>Selamat Datang di Layanan Komplain Jalanan</b></center></h2>
<img src="jalan1.jpg" alt="Database" align="middle"> <br>
<p>
Layanan Komplain Jalanan (LAKOM Jalanan) adalah aplikasi berbasis website yang melibatkan partisipasi 
publik dan bersifat dua arah, yang digunakan sebagai alat bantu untuk melakukan monitoring dan verifikasi capaian 
program Smart City maupun pengaduan masyarakat terkait pelaksanaan program Smart City di Kota Bandung. 
LAKOM Jalanan dikembangkan oleh Kelompok 6 Open Recruitment EAD.
Aplikasi LAKOM Jalanan berupaya untuk menjembatani partisipasi publik dalam pembangunan daerah antara masyarakat umum 
dengan Pemerintah Kota Bandung. Masyarakat umum dapat memberikan komplain tentang kondisi jalanan yang akan ditinjau dan 
didisposisikan oleh tim verifikasi LAKOM Jalanan kepada Instansi yang terkait untuk ditindaklanjuti.</p><br>
</p>
<h3><center><b>Alur Kerja LAKOM Jalanan</b></center></h3>
<img src="alur.jpg" alt="Database" align="middle"> <br>
	







	
	
	
	
	
	
	
	
	
	

	
	
	
</form>




<footer class="w3-container w3-theme" style="padding:32px">
<p>Contact Us !</p>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a> lakom_jalanan <br>
<a href="http://facebook.com" class="fa fa-facebook"></a>  LAKOM Jalanan<br>
<p>E-mail : lakom.jalanan@gmail.com</p> 
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
