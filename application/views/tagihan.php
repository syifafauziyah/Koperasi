<!DOCTYPE html> 
<html>
<head>
	<title>Tagihan Anggota</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/tagihan.css">
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

    <body style="background-color: #6495ED">

  <div class="container">
  <!-- <div>
	<ul class="header" style="padding-bottom:20px;">
		<li class="dropdown" style="float:right; font-family:arial; font-size:20px;background-color: #dcdcdc; border-radius:8px;list-style-type:none;">
				<?php //echo $this->session->userdata('nama_anggota') ?>
					<div class="dropdown-content" style="font-family:arial; font-size:8px;background-color: #dcdcdc;border-radius:8px; list-style-type:none;">
					<a href="<?php //echo base_url()."index.php/login/destroy"?>">Logout</a></div>
			</li>
			</ul>
		</div> -->
    <h1 id="hh">TAGIHAN PINJAMAN</h1>
    <form method="POST" name="peminjaman" action="<?php echo base_url()."index.php/login/data_tagihan/".$tagihan->no_anggota;?>">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Bulan</th>
          <th>Angsuran Pinjaman</th>
          <th>Jasa Pinjaman</th>
          <th>Jumlah Potongan</th>
          <th>Tanggal Pembayaran</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          // foreach ($tagihan->result() as $row) {
        ?>
              <tr>
                <td><?php echo $no?></td>
                <td><?php echo $tagihan->bulan; ?></td>
                <td><?php echo $tagihan->angsuransipinjaman; ?></td>
                <td><?php echo $tagihan->jasa_pinjaman; ?></td>
                <td><?php echo $tagihan->jml_potongan; ?></td>
                <td><input type="date" name=""></td>     
              </tr>
       <!--  <?php
          
        ?> -->
      </tbody>
    </table>
    <div class="row">
         <div class="col-sm-12">
         <!-- <a style="float: right;" href="<?php //echo base_url()."index.php/login/data_pinjam/".$anggota->no_anggota;?>" type="submit"></a> -->
          <input type="submit" value="Submit">
    </div>
    </form>

    
  </div>

</body>
</html>
    