<!DOCTYPE html> 
<html>
<head>
	<title>KOPUSTIKA</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery.cycle2.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
</head>

<body>
	<header style="font-family: helvetica">
		<div class="navbar">
			<img id="logo" src="<?php echo base_url(); ?>assets/image/lipi.png">
			<img class="menu-toggle" src="<?php echo base_url(); ?>assets/image/toggle.png" width="10vw" >
			
			<nav class="site-nav">
				<ul>
					<!--<li><font color="yellow">Home</font></li>-->
					<li class="active-link">Home</li>
					<li><a href="<?php echo base_url()."index.php/login/data" ?>">Data Anggota Koperasi</a></li>
					<li><a href="<?php echo base_url()."index.php/login/logout" ?>">Log out</a></li>
					
					
				</ul>
			</nav>
			
		</div>
	</header>

	<div class="banner cycle-slideshow">
		<span class="cycle-prev">&#9001</span>
		<span class="cycle-next">&#9002</span>
		<span class="cycle-pager"></span>
		<img src="<?php echo base_url(); ?>assets/image/Gambar1.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/image/Gambar2.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/image/Gambar3.jpg" height="100%" width="100%">
		<img src="<?php echo base_url(); ?>assets/image/Gambar4.jpg" height="100%" width="100%">
		
	</div>

	<div class="container">
		<div class="row">
			<div class="tracking col-sm-7">
				<form method="POST" name="tracking-finder" action="<?php echo base_url('index.php/login/cari'); ?>">
					<label style="font-size: 20px">Cari Nomer Anggota</label>
					<br>
					<input style="margin-top: : 20px" type="text" placeholder="e.g xxxx" name="no_anggota" required>
					<br>
					<div id="button">
							<input style="color: black; font-family: helvetica; text-transform: none; border-radius: 12px; font-weight: normal;" type="submit" name="temukan" value="Temukan">
							<!-- <a href="<?php //echo base_url()."index.php/login/cari" ?>">Temukan</a> -->
					</div>
			</form>
			</div>
			
					<div style="padding-top:30px" class"fromto col-sm-5">
						<div id="button">
							<a href="<?php echo base_url()."index.php/login/tambahAnggota" ?>">Tambah Anggota Baru</a>
	

						</div>
					</div>
		</div>
	</div>

					
</body>
</html>