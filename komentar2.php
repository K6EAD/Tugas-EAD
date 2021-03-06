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
  <a class="w3-bar-item w3-button w3-border-bottom w3-large" href="#">Kelompok 6</a>
  <a class="w3-bar-item w3-button w3-hide-large w3-large" href="javascript:void(0)" onclick="w3_close()">Close <i class="fa fa-remove"></i></a>
  <a class="w3-bar-item w3-button" href="home.php">Beranda</a>
  <a class="w3-bar-item w3-button" href="insert.php">Masukan Keluhan & Saran</a>
  <a class="w3-bar-item w3-button" href="updatedata.php">Ubah Komplain</a>
  <a class="w3-bar-item w3-button" href="delete.php">Hapus Komplain</a>
  <a class="w3-bar-item w3-button" href="showdatabase.php">Data Keluhan & Saran</a>
  <div>
<a class="w3-bar-item w3-button" onclick="myAccordion('demo')" href="javascript:void(0)">Lainnya<i class="fa fa-caret-down"></i></a>
    <div id="demo" class="w3-hide">
      <a class="w3-bar-item w3-button" href="tatacara.html">Download Form Komplain</a>
      <a class="w3-bar-item w3-button" href="video.html">Video Perwujudan Smart City</a>
	  <a class="w3-bar-item w3-button w3-teal" href="komentar2.php" >Chat</a>
    </div>
  </div>
  
</nav>

<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" id="myOverlay"></div>

<div class="w3-main" style="margin-left:250px;">

<div id="myTop" class="w3-container w3-top w3-theme w3-large">
  <p><i class="fa fa-bars w3-button w3-teal w3-hide-large w3-xlarge" onclick="w3_open()"></i>
  <span id="myIntro" class="w3-hide">Chat</span></p>
</div>

<header class="w3-container w3-theme" style="padding:64px 32px">
  <h1 class="w3-xxxlarge">Chat</h1>
</header>

<div class="w3-container" style="padding:32px">
</div>
<div class="komentar">
<?php
echo "<head><title>My Guest Book</title></head>";
$fp = fopen("guestbook.txt","r");
echo "<table border=0>";

while ($isi = fgets($fp,250))
{
$pisah = explode("|",$isi);
echo "<tr><td>$pisah[0], $pisah[1], $pisah[2]</td></tr>";
echo "<tr><td><font color=brown>$pisah[3]</font>, Bilang</td></tr>";
echo "<tr><td>$pisah[4]<hr/></td></tr>
<tr><td>&nbsp;</td><td>&nbsp;</td></tr>";
}
echo "</table>"; 
?>

</div>
</center><br/>
<center>
<form id="formku" method="post" action="proses_komentar.php" onsubmit="return formCheck(this);" >
<table style="font-style: oblique; font-weight: bold;">
<tr>
<td width="150">Nama</td>
<td width="30">:</td>
<td width="550"><input type="text" name="nama" size="30" class="form-control" minlength="3" placeholder="Nama Anda" required /></td>
</tr>
<td width="150">Komentar</td>
<td width="30">:</td>
<td width="550"><input type="text" name="komentar" size="30" class="form-control" minlength="3" placeholder="Komentar Anda" required /></td>
</tr>
<tr>
<td width="150"></td>
<td width="30"></td>
<td width="550">
<button type="submit" class="btn btn-info btn-sm">Kirim <span class="glyphicon glyphicon-send"></span></button>
<button type="reset" class="btn btn-warning btn-sm">batal <span class="glyphicon glyphicon-refresh"></span></button>
</td>
</tr>
</table>
</form>
</center>



<footer class="w3-container w3-theme" style="padding:32px">
<p>Contact Me !</p>
<a href="https://www.instagram.com/" class="fa fa-instagram"></a> lakom_koba <br>
<a href="https://web.facebook.com/?_rdc=1&_rdr" class="fa fa-facebook"></a> LAKOM KOBAa<br>
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
