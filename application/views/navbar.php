<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s8 w3-bar">
    <span>Welcome, User</span>
      <!--<a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>-->
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5><b>Dashboard</b></h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="<?php echo site_url('algoritma/ganjilgenap');?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Ganjil Genap</a>
    <a href="<?php echo site_url('algoritma/bilanganprima');?>" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i> Bilangan Prima</a>
    <a href="" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Geser Huruf</a>
    <a href="" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Fibonacci</a>
    <a href="" class="w3-bar-item w3-button w3-padding"><i class="fa fa-users fa-fw"></i>  Array Sort (dari kecil ke besar)</a>
    <a href="" class="w3-bar-item w3-button w3-padding"><i class="fa fa-bullseye fa-fw"></i> Segitiga loop </a><br><br>
    <!--<a href="../application/datauser.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-cog fa-fw"></i>  Pengaturan</a><br><br>-->
	<!--<a href="#" class="w3-bar-item w3-button w3-padding" onclick="konfirmasi()"><i class="fa fa-sign-out"></i>  Keluar</a>-->
  </div>
</nav>
<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>