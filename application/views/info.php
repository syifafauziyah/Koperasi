<!DOCTYPE html>
<html>
<head>
	<title>Informasi Anggota</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/home.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
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
					<li><a href="<?php echo base_url()."index.php/login/logout" ?>">Logout</a></li>
				</ul>
			</nav>
		</div>
	</header>
	

	<div class="container">
	<!-- <div>
	<ul class="header">
		<li class="dropdown" style="float:right; font-family:arial; font-size:20px;background-color: #dcdcdc; border-radius:8px;list-style-type:none;">
				<?php //echo $anggota->nama_anggota?>
					<div class="dropdown-content" style="font-family:arial; font-size:8px;background-color: #dcdcdc;border-radius:8px; list-style-type:none;">
					<a href="<?php //echo base_url()."index.php/login/destroy" ?>">Logout</a></div>
			</li>
			</ul>
		</div> -->
		<h1>INFORMASI ANGGOTA</h1>
		<div class="row">
			<div class="sender-info col-sm-6">
				<form method="POST" name="sender-info" action="<?php echo base_url('index.php/Login/info')?>">
					<table border="0" class="info">
						<tr>
							<td><span>No Anggota</span></td>
							<td><span>: <?php echo $anggota->no_anggota; ?></span></td>
						</tr>
						<tr>
							<td><span>Nama Anggota</span></td>
							<td><span>: <?php echo $anggota->nama_anggota; ?></span></td>
						</tr>
						<tr>
							<td><span>No Hp</span></td>
							<td><span>: <?php echo $anggota->no_hp; ?></span></td>
						</tr>
						<tr>
							<td><span>Bank</span></td>
							<td><span>: <?php echo $anggota->bank; ?></span></td>
						</tr>
						<tr>
							<td><span>No Rekening</span></td>
							<td><span>: <?php echo $anggota->no_rek; ?></span></td>
						</tr>
						<tr>
							<td><span>Alamat</span></td>
							<td><span>: <?php echo $anggota->alamat; ?></span></td>
						</tr>
						<tr>
							<td><span>Sisa Pokok Pinjaman Sebelumnya</span></td>
							<td><span>: <?php  ?></span></td>
						</tr>
					</table>

					<table border="0" style="padding-top: 20px">
					<tr>
						<td>
							<div id="button" class="col-sm-2">
                  				 <a href="<?php echo base_url()."index.php/login/peminjaman/".$anggota->no_anggota;?>" role="button">Peminjaman</a>
								<!-- <a href="<?php //echo base_url()."index.php/login/peminjaman"?>">Pinjaman</a> -->
							</div>
						</td>
						<td>
							<div id="button" class="col-sm-2">
                  				 <a href="<?php echo base_url()."index.php/login/tagihanButton/".$anggota->no_anggota;?>" role="button">Tagihan</a>
							</div>
						</td>
						<td>
							<div id="button" class="col-sm-2">
								<a href="<?php echo base_url()."index.php/login/hasil_data/".$anggota->no_anggota;?>" role="button" target="_blank">Print</a>
							</div>
						</td>
					</tr>
					
				</table>
				</form>

				<!-- <table border="0" style="padding-top: 20px">
					<tr>
						<td>
							<div id="button" class="col-sm-2">
								<a href="">Print</a>
							</div>
						</td>
						<td>
							<div id="button" class="col-sm-2">
								<a href="<?php //echo base_url()."index.php/login/peminjaman" ?>">Pinjaman</a>
							</div>
						</td>
						<td>
							<div id="button" class="col-sm-2">
								<a href="<?php //echo base_url()."index.php/login/tagihan" ?>">Tagihan</a>
							</div>
						</td>
					</tr>
					
				</table>
				 -->
			</div>
		</div>
	</div>


</body>
</html>