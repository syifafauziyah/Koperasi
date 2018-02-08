<!DOCTYPE html> 
<html>
<head>
    <title>Surat Perjanjian Peminjaman Uang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/hasil.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/responsive.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap-grid.css">
    <script src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/navbar.js"></script>
</head>
<body>
<div class="container" style="margin-top:1cm">
  <div class="row">
    <div class="col-sm-3" align="right">
    

        <img src="../../assets/image/lipi.png" width="70px" height="75px">
        
    </div>

    <div class="col-sm-6">
    <center>
        <b>Koperasi Pegawai Pusat Penelitian Informatika (KOPUSTIKA) </b>
        <br>
            <font size="2">Badan Hukum : 069/BH/VII.23/VII/DINAS KUKM & PERINDAG/2012<br>
            Gedung 20 Lt.2 Kampus LIPI Jl.Sangkurian Bandung 40135<br>
            Telp/Fax:022-70712445/2504712;email ;kopustika@gmail.com</td>
            </center>
    </div>
  </div>
</div>
    <hr size="5" color="black" width="60%">
    <center>
    <h2><b>SURAT PERJANJIAN PEMINJAMAN UANG</b></h2>
    </center>
    <br>
<div class="text2">
<form method="POST" name="sender-info" action="<?php echo base_url('index.php/Login/hasil')?>">
    
    <p>Yang bertanda tangan di bawah ini<br> 
    Nama : <?php echo $anggota->nama_anggota; ?>  No.Anggotaa:<?php echo $anggota->no_anggota;?><br>
    Adalah anggota KOPUSTIKA, yang mana bertindak secara hukum atas namanya sendiri, mengajukan permohonan<br> pinjaman uang sebesar <b>RP. 5.000.000</b> dengan jangka waktu peminjaman selama <b>(10) bulan </b>
    <p style="padding-top:4px">
    Untuk itu,pemohon telah bersepakat dengan ketua KOPUSTIKA untuk melunasi tunggakan berikut pinjaman<br>
    dengan ketentuan dan skema pembayaran sebagai berikut:
    <ol>
    <li>Membayar provisi sebesar 1% dari nilai pinjaman</li>
    <li>Membayar asusransi pinjaman sebesar 1% dari nilai pinjaman</li>
    <li>Membayar jasa pinjaman sebesar 1% dari nilai pinjaman per bulan</li>
    </ol>
    
    <p>Adapun rincian peminjaman sebagai berikut :
    <table width="400" style="padding-left:50px">
        <tr>
            <td>Jenis Peminjaman</td>
            <td> </td>
            <td><b>Top-up</b></td>
        </tr>
        <tr>
            <td>Lama Peminjaman</td>
            <td>10</td>
            <td>bulan</td>
        </tr>
        <tr>
            <td>Jumlah Peminjaman</td>
            <td>Rp.</td>
            <td>5.000.000</td>
        </tr>
        <tr>
            <td>Sisa Pokok pinjaman sebelumnya</td>
            <td>Rp.</td>
            <td>1.050.000</td>
        </tr>
        <tr>
            <td>Provisi 1%</td>
            <td>Rp.</td>
            <td>50.000</td>
        </tr>
        <tr>
            <td>Asuransi 1%</td>
            <td>Rp.</td>
            <td>50.000</td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td><hr></td>
        </tr>
        <tr>
            <td><b>Jumlah yang diterim</b></td>
            <td><b>Rp.<b></td>
            <td>550.000</td>
        </tr>
    </table>
    </form>
    </div>
    </body>
    </html>
