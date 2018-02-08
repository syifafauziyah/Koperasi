<!DOCTYPE html>
<html>
<head>
  <title>Data Anggota Koperasi</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/data.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/bootstrap.min.css"> 
  <!-- <link rel="stylesheet" type="text/css" href="<?php //echo base_url(); ?>assets/css/login.css"> -->
  <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/jquery.cycle2.min.js"></script>
  <script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
</head>

<body style="background-color: #6495ED">

  <header style="text-decoration: none">
      <div class="navbar">
        <img id="logo" src="<?php echo base_url(); ?>assets/image/lipi.png">
        <img class="menu-toggle" src="<?php echo base_url(); ?>assets/image/toggle.png" width="10vw" >
        
        <nav class="site-nav">
          <ul>
            <!--<li><font color="yellow">Home</font></li>-->
            <li><a  href="<?php echo base_url()."index.php/login/home" ?>" style="text-decoration: none">Home</a></li>
            <li class="active-link">Data Anggota Koperasi</li>
            <li><a href="<?php echo base_url()."index.php/login/logout" ?>" style="text-decoration: none">Log out</a></li>
          </ul>
        </nav>
      </div>
  </header>

  <div class="container" style="width: 50%">
    <h1 id="hh">DATA ANGGOTA KOPERASI</h1>

    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th style="width: 10%">No Anggota</th>
          <th>Nama</th>
          <th style="width: 20%">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php 
          foreach ($koperasi->result() as $row) {
        ?>
              <tr>
                <td><?php echo $row->no_anggota; ?></td>
                <td><?php echo $row->nama_anggota; ?></td>
                <td>
                   <a href="<?php echo base_url()."index.php/login/info_data/".$row->no_anggota;?>" class="btn-xs btn-info" role="button"><span class="glyphicon glyphicon-pencil"></span> Detail</a>
                </td>      
              </tr>
        <?php
          }
        ?> 
      </tbody>
    </table>

    
  </div>

</body>
</html>