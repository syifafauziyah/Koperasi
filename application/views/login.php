<!DOCTYPE html>
<html>
<head>
	<title>KOPUSTIKA</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/login.css">
</head>
<body style="background-color: #6d95ED">

<div class="container" > 

<div id="header">
        <table border="0">
            <tr>
                <td class="col-md-4"><img id="logo1" src="<?php echo base_url(); ?>assets/image/lipi.png"></td>
                <td><span id="judul">KOPERASI PEGAWAI PUSAT PENELITIAN INFORMATIKA (KOPUSTIKA)</span>
                    <span style="font-family: 15px">Gedung 20 Lt.3 Kampus LIPI Jl. Sangkuriang Bandung 40135</span>
                    <br>
                    <span style="font-family: 15px">Telp/Fax : 022-70712445/2504712 ; email :kopustika@gmail.com</span>
                </td>

            </tr>
        </table>
</div>
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" class="form-horizontal" role="form" action="<?= base_url('index.php/login/user_login');?>" method="post">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email">                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password">
                                    </div>  

                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                      <input type="submit" class="btn btn-success" name="login" value="LOGIN">

                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Only Admin ! 
                                        </div>
                                    </div>
                                </div>    
                            </form>     
                        </div>                     
                    </div>  
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
    </body>
</html>