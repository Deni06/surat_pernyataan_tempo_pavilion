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
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/home/css/bootstrap.min.css');?>"/>
		
    <link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css');?>">				
    <link href="<?=base_url('assets/sweetalert-master/dist/sweetalert.css')?>" rel="stylesheet">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />

<style type="text/css">
@font-face {
  font-family: league-gothic;
  src: url(<?php echo base_url('/assets/fonts/LeagueGothic-Regular.otf');?>);
}
	.bg-light{
		background-color: white !important;
    }
    body{
        font-family: Montserrat !important;
    }
    .active_img{
    	border-bottom: 1.5px solid #085476;
    }
    .swal-footer, .swal-text {
text-align: center;
}

.freebirdFormviewerViewFormContentWrapper {
  display: -webkit-box;
  display: -webkit-flex;
  display: flex;
  -webkit-flex-direction: column;
  flex-direction: column
}

.freebirdFormviewerViewFormContentWrapper.freebirdFormviewerViewWithHeaderBar {
  margin-top: 70px
}

.freebirdFormviewerViewHeaderCard {
  border: 1px solid #dadce0;
  border-radius: 8px;
  margin-top: 12px !important;
  border-color: transparent;
}

.freebirdFormviewerViewCenteredContent {
  margin: auto;
  max-width: 90vw;
  width: 640px;
}

.freebirdHeaderCard.freebirdViewerHeaderCard {
  max-height: 22.313167259786475vw;
  max-width: 90vw;
  height: 158.67141162514827px;
  width: 640px;
}

#header_company {
  font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";
}

@media screen and (min-width: 320px) {
  #header_company {
    font-size: calc(13px + 26 * ((100vw - 320px) / 642));
  }
  #title_company {
  font-size: calc(14px + 28 * ((100vw - 320px) / 626));
}
}

@media screen and (min-width: 689px) {
  #header_company {
  font-size: 28px;
}
}

@media screen and (min-width: 627px) {  
#title_company {
  font-size: 32px;
}
}
</style>
    </head>
	<body>
			<!-- Navigation -->
      <div id="scan_qr" style="text-align: center;">
        <div class="freebirdFormviewerViewFormContentWrapper m2">
      <div class="freebirdFormviewerViewHeaderCard freebirdFormviewerViewCenteredContent freebirdViewerHeaderCard freebirdHeaderCard">        
          <img src="<?=base_url()?>assets/img/tempo-logo.png" style="height: 100%;float: left;">
          <div style="display: table;height: 100%;">
            <div style="display: table-cell;vertical-align: middle;">
              <h1 id="header_company" style="text-align: left;font-weight: bold;margin-bottom: 1%"><?=$company['company_name']?></h1>
        <h1 id="title_company" style="text-align: left;line-height: 1.35;margin: 0;font-family: lato;font-weight: bold;"><?=$company['company_description']?></h1>    
            </div>            
          </div>
        </div>
  </div>

<!-- Page Content -->
<div class="container">
  <h3 class="mt-4" style="font-weight: bold;">Safe Entry QR Scanner</h3>
  <hr style="border-color: black">
  <p style="color: #717171;line-height: 2" id="body">Silahkan Scan QRCode yang terdapat di Lokasi Check-In</p>
  <p style="color: red;display:block" id="title_error">Mohon ijinkan akses ke lokasi anda</p>
  <p style="color: red;display:none" id="title_denied">Silahkan muat ulang (refresh) halaman ini</p>
  <div id="reader" style="max-width:100%"></div>  
</div>
      </div>

<div id="check_out_failed" style="display:none">
    <div class="container" style="text-align: center;"> 
<div class="row" style="margin: 0;justify-content: center;">
    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-4" style="padding: 0;margin-bottom:1em">
      <div style="margin-top: 2em;">
        <img src="<?=base_url()?>assets/img/logo-tempo-transparent.png" class="card-img-top" style="width: 8rem;height: auto">
      </div>    
      <h2 style="margin-top: 0.6em;font-family: league-gothic">TEMPO PAVILION</h2> 
      <p style="font-weight: normal;font-size: 1rem;margin-top: 1.6rem;margin-bottom: 1.5rem" id="text_failed">We are sorry, we cannot process your check-in, you need to be inside Tempo Pavilion building to check-in.</p>            
      <ul style="text-align:left;display:none" id="browser_support">
        <li style="margin-bottom:2px">For iOS device: Safari</li>
        <li>For Android: Google Chrome and Mozilla Firefox</li>
      </ul>      
      <a href="javascript:void(0)" id="check_in_button" onclick="location.href='<?=site_url('customer')?>'" class="btn" name="submit" style="background-color: #085476;color: white;width: 100%">Scan QR Check-In <i class="fa fa-sign-in" style="margin-left: 2%"></i></a> 
    </div>
</div>  
</div>
    </div>
	
		<script src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js')?>"></script>				
		<script src="<?php echo base_url('/assets/home/js/popper.min.js')?>"></script>		
		<script src="<?php echo base_url('/assets/home/js/bootstrap.min.js')?>"></script>	
    <script src="<?php echo base_url('/assets/js/html5-qrcode.min.js');?>"></script>			
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
	</body>
  <?php  
  if($this->session->flashdata('error') != null){           
       ?>

<script type = "text/javascript">
swal("Invalid URL", "<?=$this->session->flashdata('error')?>", "error");

</script>
<?php } ?>
  <script>
      // This method will trigger user permissions    
      var url = "<?=base_url("customer/registrasi");?>";      

      var local_check_latlong = "<?=base_url('customer/check_lat_long')?>";

      $( document ).ready(function() {

        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(showPosition, showError, {timeout:7000, enableHighAccuracy:true});    
  }else{              
              showCamera();
            }
        
      });    

      function showPosition(position) {         
          var request = $.ajax({
                url: local_check_latlong,
                type: "POST",
                data: {latitude : position.coords.latitude, longitude : position.coords.longitude},
                dataType: "json"
          });
    
          request.done(function(responseLocal) {                              
              if(responseLocal.is_valid == true){
                showCamera();
            }else{              
              $("#scan_qr").hide(); 
              $("#check_out_failed").show();              
            }                      
          });
        }

        function showCamera() {          
          $("#title_error").text("Mohon ijinkan akses ke kamera anda");                 
                Html5Qrcode.getCameras().then(devices => {
          $("#title_error").hide();
  if (devices && devices.length) {    
    var cameraId = devices[devices.length - 1].id;
    devices.forEach(function(value,index){          
      if(value.label.toLowerCase().includes("back")){
        cameraId = value.id;
      }        
    })    
    
    const html5QrCode = new Html5Qrcode("reader");

html5QrCode.start(
  cameraId,     // retreived in the previous step.
  {
    fps: 10,    // sets the framerate to 10 frame per second
    qrbox: 250  // sets only 250 X 250 region of viewfinder to
                // scannable, rest shaded.
  },
  qrCodeMessage => {        
    if(qrCodeMessage.includes(url)){
      window.location.href = qrCodeMessage;
      }
    console.log(`QR Code detected: ${qrCodeMessage}`);
  },
  errorMessage => {
    // parse error, ideally ignore it. For example:
    console.log(`QR Code no longer in front of camera.`);
  })
.catch(err => {
  if(err.toLowerCase().includes("notallowederror")){        
    $("#title_denied").show();
      }else{
        if("<?=$character_checkin?>" != ""){
          window.location.href = "<?=base_url('customer/registrasi/'.$character_checkin)?>";
        }else{
          $("#scan_qr").hide(); 
          $("#check_in_button").hide();
          $("#text_failed").text("We are sorry we cannot process your check-in. Your browser does not support. Supported and recommended browser are: ");
          $("#browser_support").show();
          $("#check_out_failed").show();              
        }        
      }          
});
  }else{
    if("<?=$character_checkin?>" != ""){
          window.location.href = "<?=base_url('customer/registrasi/'.$character_checkin)?>";
        }else{
          $("#scan_qr").hide(); 
          $("#check_in_button").hide();
          $("#text_failed").text("We are sorry we cannot process your check-in. Your browser does not support. Supported and recommended browser are: ");
          $("#browser_support").show();
          $("#check_out_failed").show();              
        }        
  }
}).catch(err => {    
  if(err.toLowerCase().includes("notallowederror")){    
    $("#title_denied").show();
      }else{
        if("<?=$character_checkin?>" != ""){
          window.location.href = "<?=base_url('customer/registrasi/'.$character_checkin)?>";
        }else{
          $("#scan_qr").hide(); 
          $("#check_in_button").hide(); 
          $("#text_failed").text("We are sorry we cannot process your check-in. Your browser does not support. Supported and recommended browser are: ");
          $("#browser_support").show(); 
          $("#check_out_failed").show();              
        }        
      }          
});
        }

        function showError(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      $("#title_error").text("Mohon ijinkan akses ke lokasi anda");
      $("#title_error").show();
      $("#title_denied").show();
      break;
    case error.POSITION_UNAVAILABLE:
      $("#title_error").text("Mohon maaf kami tidak dapat mendeteksi lokasi anda");         
      $("#title_error").show();
      $("#title_denied").show();
      break;
    case error.TIMEOUT:
      $("#title_error").text("Mohon maaf kami tidak dapat mendeteksi lokasi anda");
      $("#title_error").show();
      $("#title_denied").show();
      break;    
    default:
      showCamera();
  }
}  

  </script>
</html>
