<!DOCTYPE html> 
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/peminjaman.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.cycle2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
</head>

<body>
	<header>
		<div class="navbar">
			<img id="logo" src="<?php echo base_url(); ?>assets/image/lipi.png">
			<img class="menu-toggle" src="<?php echo base_url(); ?>assets/image/toggle.png" width="10vw" >
			
			<nav class="site-nav">
				<ul>
					<!--<li><font color="yellow">Home</font></li>-->
					
                    <li><a href="<?php echo base_url()."index.php/login/home"?>">Home</a></li>
					<li><a href="<?php echo base_url()."index.php/login/Data" ?>">Data Anggota Koperasi</a></li>
					<li><a href="<?php echo base_url()."index.php/login/logout" ?>">Log out</a></li>
				
				</ul>
			</nav>
		</div>
    </header>
    
    <!-- <div class="destroy">
  <div>
		<ul class="header" style="padding-bottom:20px;">
		<li class="dropdown" style="float:right; font-family:arial; font-size:20px;background-color: #dcdcdc; border-radius:8px;list-style-type:none;">
				<?php //echo $this->session->userdata('nama_anggota') ?>
					<div class="dropdown-content" style="font-family:arial; font-size:8px;background-color: #dcdcdc;border-radius:8px; list-style-type:none;">
					<a href="<?php //echo base_url()."index.php/login/destroy"?>">Logout</a></div>
			</li>
			</ul>
    </div>
</div> -->

   
        <h2>Entry Peminjaman</h2>
        <div class="container">
  <form method="POST" name="peminjaman" action="<?php echo base_url()."index.php/login/data_pinjam/".$anggota->no_anggota;?>">
  <div class="row">
      <div class="col-sm-6">
        <label for="jenis">Jenis Peminjaman</label>
      </div>
      <div class="col-sm-6">
        <select id="jenis" name="jenis">
          <option value="cicilan1">Cicilan 1</option>
          <option value="cicilan2">Cicilan 2</option>
          <option value="cicilan3">Cicilan 3</option>
        </select>
      </div>
    </div>
    <!-- <?php //echo $anggota->no_anggota; ?> -->
    <div class="row">
      <div class="col-sm-6">
        <label for="bulan">Lama Peminjaman </label>
      </div>
      <div class="col-sm-6">
        <input type="number" id="bulan" name="bulan" placeholder="Hitungan dalam Bullan" min="1">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label for="jml_pinjaman">Jumlah Peminjaman</label>
      </div>
      <div class="col-sm-6">
        <input type="number" id="jml_pinjaman" name="jml_pinjaman" placeholder="Dalam Rupiah..">
      </div>
    </div>
    <br>
     <div class="row">
         <div class="col-sm-12">
         <!-- <a style="float: right;" href="<?php //echo base_url()."index.php/login/data_pinjam/".$anggota->no_anggota;?>" type="submit"></a> -->
          <input type="submit" value="Submit">
</div>
    </div>
  </form>
</div>


</body>
</html>