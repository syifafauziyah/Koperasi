<!DOCTYPE html> 
<html>
<head>
	<title>Thunder Express</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tambahAnggota.css">
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
					<li><a href="<?php echo base_url()."index.php/login/home" ?>">Home</a></li>
					<li><a href="<?php echo base_url()."index.php/login/data" ?>">Data Anggota Koperasi</a></li>
					<li><a href="<?php echo base_url()."index.php/login/logout" ?>">Log out</a></li>
				
				</ul>
			</nav>
		</div>
    </header>
    
    <form method="POST" name="tambahAnggota" action="<?php echo base_url('index.php/login/tambahData')?>">
 <h2><i class="fa fa-user"></i>Form Pendaftaran</h2>
 <br/>
 <div class="form-group">
  <input type="text" class="input-mode" placeholder="Nama Lengkap" name="nama_anggota" required>
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="No.HP" name="no_hp" required>
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="BANK" name="bank" required> 
 </div>
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="No.Rekening" name="no_rek" required> 
 </div>
 
 <div class="form-group">
 <input type="text" class="input-mode" placeholder="Alamat" name="alamat" required> 
 </div>
 <br/>
 <div class="form-group form-cek">

 <!-- <div class="form-group">
  <button class="btn btn-submit" type="submit">
  	<a href="<?php //echo base_url()."index.php/login/info" ?>" style="text-decoration: none; color: white" >Daftar</a>
  </button>
 </div> -->

 <div class="form-group from-cek">
 	<div id="button">
 		<input style="color: white; background-color: #6d95ED; font-family: helvetica; text-transform: none; border-radius: 8px;" type="submit" name="tambah" value="Daftar" class="button">
 	</div>
 	
 </div>
 <br/>

 </body>
 </html>