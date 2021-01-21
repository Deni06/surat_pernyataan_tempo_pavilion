<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Tempo Pavilion</title>

		<!-- Google font -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/home/css/bootstrap.min.css');?>"/>
		
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css');?>">				
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />

<style type="text/css">
	.bg-light{
		background-color: white !important;
    }
    body{
        font-family: Montserrat !important;
    }
</style>
    </head>
	<body>
			<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light static-top">
  <div class="container">
    <a class="navbar-brand brand-logo" href="#">
          <img src="<?=base_url()?>assets/img/logo.jpg" style="width: auto !important;max-width: 100%;height: 50px;" alt="logo">
        </a>        
  </div>
</nav>

<!-- Page Content -->
<div class="container" style="text-align: center;">
  <h2 class="mt-4" style="font-weight: bold;">Check-Out Entry</h2>
  <hr style="border-color: black">
  <p style="color: #717171">Please enter your phone number to check-out<br>
  Silahkan masukkan nomor handphone anda untuk check-out</p>  
  <form>
    <div class="row" style="margin: 0;justify-content: center;">
      <div class="col col-md-7 col-lg-5 col-xl-4">
        <input type="number" name="" class="form-control" style="margin-bottom: 1rem" required>        
        <button class="btn" style="background-color: #085476;color: white;width: 100%">Check - Out <i class="fa fa-sign-out" style="margin-left: 2%"></i></button>
      </div>
    </div>        
  </form>      
</div>
<!-- /.container -->
	
		<script src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js')?>"></script>				
		<script src="<?php echo base_url('/assets/home/js/popper.min.js')?>"></script>		
		<script src="<?php echo base_url('/assets/home/js/bootstrap.min.js')?>"></script>	
		<script src="<?php echo base_url('/assets/js/html5-qrcode.min.js');?>"></script>	
	</body>
</html>
