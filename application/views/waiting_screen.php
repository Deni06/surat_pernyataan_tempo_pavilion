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
    <link rel="stylesheet" href="<?=base_url('assets/css/intlTelInput.css');?>">
    <link href="<?=base_url('assets/sweetalert-master/dist/sweetalert.css')?>" rel="stylesheet">
		
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css');?>">				
		<link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />

    <link rel="stylesheet" href="<?=base_url('assets/home/css/home.css');?>">

		<script src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js')?>"></script>				
		<script src="<?php echo base_url('/assets/home/js/popper.min.js')?>"></script>		
		<script src="<?php echo base_url('/assets/home/js/bootstrap.min.js')?>"></script>	
		<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
    <script src="<?php echo base_url('/assets/js/intlTelInput.js');?>"></script> 
    <script src="<?php echo base_url('/assets/home/js/fingerprint2.js');?>"></script>

<style type="text/css">
	.bg-light{
		background-color: white !important;
    }
    body{
        font-family: Montserrat !important;
    }

    .lds-spinner {
  color: official;
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-spinner div {
  transform-origin: 40px 40px;
  animation: lds-spinner 1.2s linear infinite;
}
.lds-spinner div:after {
  content: " ";
  display: block;
  position: absolute;
  top: 3px;
  left: 37px;
  width: 6px;
  height: 18px;
  border-radius: 20%;
  background: black;
}
.lds-spinner div:nth-child(1) {
  transform: rotate(0deg);
  animation-delay: -1.1s;
}
.lds-spinner div:nth-child(2) {
  transform: rotate(30deg);
  animation-delay: -1s;
}
.lds-spinner div:nth-child(3) {
  transform: rotate(60deg);
  animation-delay: -0.9s;
}
.lds-spinner div:nth-child(4) {
  transform: rotate(90deg);
  animation-delay: -0.8s;
}
.lds-spinner div:nth-child(5) {
  transform: rotate(120deg);
  animation-delay: -0.7s;
}
.lds-spinner div:nth-child(6) {
  transform: rotate(150deg);
  animation-delay: -0.6s;
}
.lds-spinner div:nth-child(7) {
  transform: rotate(180deg);
  animation-delay: -0.5s;
}
.lds-spinner div:nth-child(8) {
  transform: rotate(210deg);
  animation-delay: -0.4s;
}
.lds-spinner div:nth-child(9) {
  transform: rotate(240deg);
  animation-delay: -0.3s;
}
.lds-spinner div:nth-child(10) {
  transform: rotate(270deg);
  animation-delay: -0.2s;
}
.lds-spinner div:nth-child(11) {
  transform: rotate(300deg);
  animation-delay: -0.1s;
}
.lds-spinner div:nth-child(12) {
  transform: rotate(330deg);
  animation-delay: 0s;
}
@keyframes lds-spinner {
  0% {
    opacity: 1;
  }
  100% {
    opacity: 0;
  }
}
</style>
    </head>
	<body>
			
<div id="check_out_success">                  
<div class="container" style="text-align: center;"> 
<div class="row" style="margin: 0;justify-content: center;">
    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-4" style="padding: 0;margin-bottom:1em">
    	<div style="margin-top: 2em;">
    		<img src="<?=base_url()?>assets/img/logo-tempo-transparent.png" class="card-img-top" style="width: 8rem;height: auto">
    	</div>    
    	<h5 style="margin-top: 0.6em">TEMPO PAVILION</h5>	
      <p style="font-weight: normal;font-size: 1rem;margin-top: 1.6rem;">We are sorry we cannot process your check-in. Your browser does not support. Supported browser are: </p>      
      <ul style="text-align:left" id="browser_support">
        <li style="margin-bottom:2px">For iOS device: Safari</li>
        <li>For Android: Google Chrome and Mozilla Firefox</li>
      </ul>      
    	<!-- <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
    	<p style="font-weight: normal;font-size: 1rem;margin-top: 1.6rem;">Please do not close your browser</p> -->
      
    </div>
</div>  
</div>
</div>

<!-- /.container -->	
	</body>	
</html>
