<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo base_url('assets/css/w3.css');?>">
<link rel="stylesheet" href="<?php echo base_url('assets/font-awesome/css/font-awesome.min.css');?>">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right">Algoritma dengan PHP codeigniter</span>
</div>

<!--meload view navbar-->
<?php $this->load->view('navbar'); ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i>Ganjil Genap</b></h5>
  </header>

<div class="w3-container w3-content">

    <h3>*Nilai konstan</h3>
    <h5> Nilai = 10</h5>
    <h5> Hasil = <?php echo $hasil;?></h5>

    <br><br>

    <h3>*Nilai input</h3>
    <form method="POST" action="<?php echo site_url('algoritma/inputganjilgenap');?>" enctype="multipart/form-data">
    <div class="w3-row">
    <div class="w3-col s12 l4">
    <h5><input type="text" name="nilai" class="w3-input" placeholder="masukkan nilai"></input></h5>
    </div>
    <div class="w3-col s12 l4">
    <h5> Hasil = <?php echo $hasil; ?></h5>
    </div>
    </div>
    <button class="w3-btn w3-red" type="submit" name="submit">Proses</button>
    </form>

</div>

  <!-- Footer -->
  <!--<footer class="w3-container w3-padding-16 w3-black">
    <h4>FOOTER</h4>
    <p>Sistem Pengajuan Cuti Online PT.Astrindo Travel</p>
  </footer>-->

  <!-- End page content -->
</div>

<script>
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
    overlayBg.style.display = "none";
  } else {
    mySidebar.style.display = 'block';
    overlayBg.style.display = "block";
  }
}

// Close the sidebar with the close button
function w3_close() {
  mySidebar.style.display = "none";
  overlayBg.style.display = "none";
}
</script>

</body>
</html>