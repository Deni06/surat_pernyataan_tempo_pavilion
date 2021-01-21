<!DOCTYPE html>
<html lang="en" style="min-height:100%;height:100%">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Tempo Pavilion</title>

		<!-- Google font -->
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=DM+Sans' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet'>
		
		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="<?php echo base_url('/assets/home/css/bootstrap.min.css');?>"/>
		
		<link rel="stylesheet" href="<?php echo base_url('/assets/css/font-awesome.min.css');?>">				
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />
    <link rel="stylesheet" href="<?=base_url('assets/css/intlTelInput.css');?>">
    <link href="<?=base_url('assets/sweetalert-master/dist/sweetalert.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/home/css/home.css');?>">
    <link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/cropper.css')?>">

    <script src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js')?>"></script>				
		<script src="<?php echo base_url('/assets/home/js/popper.min.js')?>"></script>		
		<script src="<?php echo base_url('/assets/home/js/bootstrap.min.js')?>"></script>	
		<script src="<?php echo base_url('/assets/js/html5-qrcode.min.js');?>"></script>			    
    <script src="<?php echo base_url('/assets/home/js/fileSaver.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/home/js/html2canvas.min.js');?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
    <script src="<?php echo base_url('/assets/js/intlTelInput.js');?>"></script> 
    <script src="<?php echo base_url('/assets/home/js/fingerprint2.js');?>"></script>
    <script src="<?=base_url('assets/js/cropper.min.js')?>"></script>

    <style type="text/css">
    @font-face {
  font-family: league-gothic;
  src: url(<?php echo base_url('/assets/fonts/LeagueGothic-Regular.otf');?>);
}

      .btn-file {
    position: relative;
    overflow: hidden;
}
.btn-file input[type=file] {
    position: absolute;
    top: 0;
    right: 0;
    min-width: 100%;
    min-height: 100%;    
    text-align: right;
    filter: alpha(opacity=0);
    opacity: 0;
    outline: none;   
    cursor: inherit;
    display: block;
}

.file-upload {
    background-color: #ffffff;
    width: 600px;
    margin: 0 auto;
    padding: 20px;
  }
  
  .file-upload-btn {
    width: 100%;
    margin: 0;
    color: #fff;
    background: #1FB264;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #15824B;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }
  
  .file-upload-btn:hover {
    background: #1AA059;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }
  
  .file-upload-btn:active {
    border: 0;
    transition: all .2s ease;
  }
  
  .file-upload-content {
    display: none;
    text-align: center;
    width: 100%;
  }
  
  .file-upload-input {
    position: absolute;
    margin: 0;
    padding: 0;
    width: 100%;
    height: 100%;
    outline: none;
    opacity: 0;
    cursor: pointer;
  }
  
  .image-upload-wrap {
    margin-top: 20px;
    border: 4px dashed black;
    position: relative;
  }
  
  .image-dropping,
  .image-upload-wrap:hover {
    background-color: rgb(250, 250, 250);
    border: 4px dashed #ffffff;
  }
  
  .image-title-wrap {
    padding: 0 15px 15px 15px;
    color: #222;
  }
  
  .drag-text {
    text-align: center;
  }
  
  .drag-text h3 {
    font-weight: 100;
    text-transform: uppercase;
    color: rgb(15, 20, 18);
    padding: 60px 0;
  }
  
  .file-upload-image {    
    max-width: 100%;
    margin: auto;
    padding: 0 20px 20px 20px;
  }
  
  .remove-image {
    width: 200px;
    margin: 0;
    color: #fff;
    background: #cd4535;
    border: none;
    padding: 10px;
    border-radius: 4px;
    border-bottom: 4px solid #b02818;
    transition: all .2s ease;
    outline: none;
    text-transform: uppercase;
    font-weight: 700;
  }
  
  .remove-image:hover {
    background: #c13b2a;
    color: #ffffff;
    transition: all .2s ease;
    cursor: pointer;
  }
  
  .remove-image:active {
    border: 0;
    transition: all .2s ease;
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
  font-size: 31px;
}
}

.freebirdFormviewerViewHeaderCard {  
  border-color: transparent;
}

.modal-dialog {
    min-height: calc(100vh - 60px);
    display: flex;
    flex-direction: column;
    justify-content: center;
    overflow: auto;
}
@media(max-width: 768px) {
  .modal-dialog {
    min-height: calc(100vh - 20px);
  }
}
    </style>

    </head>
	<body style="min-height:100%;height:100%">
			<!-- Navigation -->
      <script>
      const months = ["JANUARY", "FEBRUARY", "MARCH","APRIL", "MAY", "JUNE", "JULY", "AUGUST", "SEPTEMBER", "OCTOBER", "NOVEMBER", "DECEMBER"];
      var uuid = (new Fingerprint2()).getSync().fprint;

      var is_new_surat = 0;

      var is_upload_image = true;

      var isCheckIdNumber = true;

      var local_check_latlong = "<?=base_url('customer/check_lat_long')?>";

      $( document ).ready(function() {        
if (navigator.geolocation) {      
       navigator.geolocation.getCurrentPosition(showPosition, showError, {timeout:7000, enableHighAccuracy:true});               
}else{                
  checkData();
    }    

}); 

function showError(error) {  
  switch(error.code) {
    case error.PERMISSION_DENIED:      
      $("#refresh_not_allowed").show();
      break;   
    case error.POSITION_UNAVAILABLE:
      $("#allow_text").text("Sorry we cannot access your location");               
      $("#refresh_not_allowed").show();
      break;
    case error.TIMEOUT:
      $("#allow_text").text("Sorry we cannot access your location");      
      $("#refresh_not_allowed").show();
      break;     
    default:
      checkData();
  }
}  

function showPosition(position) {   
      $("#allow_text").hide();       
      $("#refresh_not_allowed").hide();       
      $("#refresh_waiting").show();

          var request = $.ajax({
                url: local_check_latlong,
                type: "POST",
                data: {latitude : position.coords.latitude, longitude : position.coords.longitude},
                dataType: "json"
          });
    
          request.done(function(responseLocal) {                              
              if(responseLocal.is_valid == true){
                checkData();
            }else{                   
              var check_phone = "";
            if(localStorage) {          
        var check_phone = localStorage.getItem("phone_number_surat_pernyataan_tempo_paviliun");
        } 
                  var request = $.ajax({
                url: "<?=base_url('customer/checkout_location')?>",
                type: "POST",
                data: {device_id : uuid, phone_number : check_phone, registration_id : "<?=$check_unique->registration_id?>"},
                dataType: "json"
          });
    
          request.done(function(msg) {
            if (msg.is_valid == true) {                      
              $("#not_allowed").hide();
                      $("#date_checkout").text(msg.checkout_date);
                      $("#time_checkout").text(msg.checkout_time);
                      $("#check_out_success").show();                                          
                    }else{
                      $("#not_allowed").hide();
            $("#text_failed").text("We are sorry, we cannot process your check-in, you need to be inside Tempo Pavilion building to check-in.");         
              $("#waiting_text").hide();
              $("#check_in_button").show();
              $("#waiting_screen").show();              
                    }                                         
          });                   
            }                      
          });
        }

        function checkData() {                  
          var addtask = "<?=base_url('customer/check_device_id')?>";                
                var addtaskphone = "<?=base_url('customer/get_surat_phone')?>"; 
                var local_check_valid_phone = "<?=base_url('customer/check_valid_phone')?>";

                if(localStorage) {          
    		var local_phone = localStorage.getItem("phone_number_surat_pernyataan_tempo_paviliun");            

        var request = $.ajax({
                url: local_check_valid_phone,
                type: "POST",
                data: {phone_number : local_phone, character_registration : "<?=$check_unique->character_registration?>",
                  device_id : uuid, is_submit : "<?=$check_unique->is_submit?>"},
                dataType: "json"
          });
    
          request.done(function(responseLocal) {                              
              if(responseLocal.is_valid == true){
                if(responseLocal.type_checkout != 0){
                  window.location.href = "<?php echo site_url('customer')?>";
                }else{
                  $("#date").text(responseLocal.checkin_date);
              $("#time").text(responseLocal.checkin_time);              
              $("#check_in_floor").text(responseLocal.checkin_floor);
              $("#check_in_point").text(responseLocal.nama_lokasi);
              $("#registration_number").text(responseLocal.registration_number);
              $("#checkout_button").click(function () {
                check_out(responseLocal.registration_id)
    });
    $("#form_registration").hide();   
    $("#not_allowed").hide();
    $("#safe_entry_pass").css("background-color", responseLocal.background_safe_entry_pass);    
              $("#safe_entry_pass").show();
              $("#modalLoading").modal('hide');
                }                                                
            }else if(responseLocal.status_surat == 0 && responseLocal.id_surat != 0){
              $("#form_registration").hide(); 
              $("#not_allowed").hide();      
              $("#waiting_screen").show();                                                              
              $("#modalLoading").modal('hide'); 
              show_wait_screen(responseLocal.id_surat, "<?=$check_unique->registration_id?>");
            }else{                            
                  $("#modalLoading").modal('hide'); 

                  if("<?=$check_unique->device_id?>" == "" || uuid == ""){               
                  if(parseInt("<?=$type?>") == 1){
                    $("#modalLoading").modal('hide');
                    $("#full_name").attr("readonly", true);
                    $("#company").attr("readonly", true);
                    $("#address").attr("readonly", true);
                    $("#official_id_number").attr("readonly", true);
                    $("#suhu_tubuh").attr("readonly", true);
                    $("#destination_company").attr("readonly", true);
                    $("#email").attr("readonly", true);
                    $("#floor").attr("disabled", true);
                    $("#type_id_card").attr("disabled", true);

                    $("input[name='is_travelling']").attr("disabled", true);

                    $("input[name='is_using_transportation']").attr("disabled", true);                    
                    $("input[name='is_participate']").attr("disabled", true);                    
                    $("input[name='is_contact_patient']").attr("disabled", true);
                    $("input[name='is_sick']").attr("disabled", true);
                    $("input[name='is_agree']").attr("disabled", true);
                    $("input[name='is_fill_without_coercion']").attr("disabled", true);

                    $("#form_registration").css("background-color", responseLocal.background_declaration_form);                    
                    
                    $("#not_allowed").hide();
                    $("#form_registration").show();
                    $("#phone_number").focus();                    
                  }else{
                    window.location.href = "<?php echo site_url('customer')?>";
                  }                  
                }else{
                  var request = $.ajax({
                url: addtask,
                type: "POST",
                data: {device_id : uuid, character_registration : "<?=$check_unique->character_registration?>",
                is_submit : "<?=$check_unique->is_submit?>"},
                dataType: "json"
          });
    
          request.done(function(msg) {
            if(msg.is_valid_device == true){
              if(parseInt(responseLocal.count_surat) > 0){
                    $("#full_name").val(responseLocal.full_name);
                    var itiPhoneNumber = window.intlTelInputGlobals.getInstance(phone_number);  
                    itiPhoneNumber.setNumber(responseLocal.phone_number);                  
                  $("#email").val(responseLocal.email);                    
                  $("#company").val(responseLocal.company);          
                  $("#address").val(responseLocal.address);                            
                  $("#destination_company").val(responseLocal.destination_company);          
                  $("#ktp_photo_last").val(responseLocal.ktp_photo);
                  $("#floor").val(responseLocal.floor);
                  $("#type_id_card").val(responseLocal.type_id_card);
                  $("#official_id_number_hide").val(responseLocal.official_id_number); 
                  $("#type_input_official_id_number").val(responseLocal.type_input_official_id_number);

                  if(responseLocal.type_id_card == 3){
                    $("#official_id_number").val(responseLocal.official_id_number); 
                    }

                  is_upload_image = false; 

                  if(responseLocal.status_surat == 2){
                    if(responseLocal.is_rejection_day == true){
                      $("#reason_rejection").show();
                    $("#reason_rejection_text").text(responseLocal.reason_rejection);         
                    }                    
                    $("#suhu_tubuh").val(responseLocal.suhu_tubuh);                                        

                    if(responseLocal.type_id_card != 3){
                      $("#div_official_number").hide();
                    $("#official_number_input").hide();
                    }

                    getImageDetail("<?=base_url('assets/images/ktp_photo')?>/"+responseLocal.ktp_photo,"icon-upload-image", "icon-upload-content", "icon-title", "upload_button","", "icon-upload-input");
                  }else if(responseLocal.type_id_card == "0" || responseLocal.official_id_number == ""){                                        

                    if(responseLocal.type_id_card != 3){
                      $("#div_official_number").hide();
                    $("#official_number_input").hide();
                    }

                    getImageDetail("<?=base_url('assets/images/ktp_photo')?>/"+responseLocal.ktp_photo,"icon-upload-image", "icon-upload-content", "icon-title", "upload_button","", "icon-upload-input");
                  }else{                      
                    $("#photo").hide();        
                    $("#div_type_card").hide();
                    $("#type_id_card_input").hide();
                    $("#div_official_number").hide();
                    $("#official_number_input").hide();                    

                    isCheckIdNumber = false;
                  }                  

                  var current = document.getElementsByClassName("btn disabled");
        if (current.length > 0){
          current[0].className = current[0].className.replace("disabled", "");
        }           
                  
                    is_new_surat = 1;                    
                  }else{                    
                    $("#full_name").attr("readonly", true);
                    $("#company").attr("readonly", true);
                    $("#address").attr("readonly", true);
                    $("#official_id_number").attr("readonly", true);
                    $("#suhu_tubuh").attr("readonly", true);
                    $("#destination_company").attr("readonly", true);
                    $("#email").attr("readonly", true);
                    $("#floor").attr("disabled", true);
                    $("#type_id_card").attr("disabled", true);

                    $("input[name='is_travelling']").attr("disabled", true); 
                    $("input[name='is_using_transportation']").attr("disabled", true);
                    $("input[name='is_participate']").attr("disabled", true);                                       
                    $("input[name='is_contact_patient']").attr("disabled", true);
                    $("input[name='is_sick']").attr("disabled", true);
                    $("input[name='is_agree']").attr("disabled", true);
                    $("input[name='is_fill_without_coercion']").attr("disabled", true);

                    $("#div_official_number").hide();
                    $("#official_number_input").hide();
                  }         
                  $("#not_allowed").hide();        
                  $("#form_registration").css("background-color", responseLocal.background_declaration_form);
                  $("#modalLoading").modal('hide'); 
              $("#form_registration").show();
              $("#phone_number").focus();                           
            }else{
              window.location.href = "<?php echo site_url('customer')?>";
            }            
          });   
                }                 
            }                      
          });
        
          }
        }
      
       </script>

                <body>    
<div id="safe_entry_pass" style="display: none;min-height:100%;">
                  <div style="background-color:#EDEDED;padding:0.8em 0.8em 0.8em 1.5em;">
<h6 style="margin-bottom:0"><i class="fa fa-check-circle" style="font-size:1.3em;color:#085477"></i><span style="color: #717171;margin-left:0.5em;vertical-align:top">check-in successful</span></h6>
</div>
<div class="container" style="text-align: center;"> 
<div class="row" style="margin: 0;justify-content: center;">
    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-4" style="padding: 0;margin-bottom:1em">
      <div id="card_view" class="card" style="width: 18rem;margin-top: 1em;display: inline-block;border-radius: 10px;background-color: #092442;font-family: league-gothic">    
  <div class="card-body" style="padding: 0">
    <div style="padding: 1.8rem;border-radius: 10px;padding: 1.5em 1em 2em">
      <img src="<?=base_url()?>assets/img/logo-tempo-transparent.png" class="card-img-top" style="width: 8rem;height: auto">
      <h2 style="color: white;margin-top: 0.5rem;margin-bottom: 0;">TEMPO PAVILION</h2>
      <i class="fa fa-map-marker" style="color: white;margin-top: 0.3rem;font-size: 2rem"></i>
      <h4 style="color: white;margin-top: 0.3rem;margin-bottom: 0;">ACCESS PASS</h4>      
    </div>      
  </div>
</div>
<div style="font-family: DM Sans">
  <h6 style="font-weight: bold;margin-bottom: 0;margin-top: 0.7rem;color: #08244B;">DESTINATION FLOOR :</h6>
<h2 style="font-weight: bold;color: #08244B;margin-bottom: 0.4rem;" id="check_in_floor"></h2>
<h2 style="color: #08244B;margin-bottom: 0;font-family: league-gothic" id="date"></h2>
<h2 style="color: #08244B;margin-bottom: 0.8rem;font-family: league-gothic" id="time"></h2>
<h5 style="font-family: league-gothic;color: #08244B;margin-bottom: 0;font-size: 1.3rem">REGISTRATION NO :</h5>
<h5 style="font-family: league-gothic;color: #08244B;margin-bottom: 1.2rem;font-size: 1.3rem" id="registration_number">A000001</h5>
</div>
<a class="btn" id="checkout_button" href="javascript:void(0);" style="background-color: #092442;color: white;width: 100%;display:none">Check-Out <i class="fa fa-sign-out" style="margin-left: 2%"></i></a>
    </div>
</div>  
</div>
                </div>

                <div id="check_out_success" style="display: none;">
                  <div style="background-color:#EDEDED;padding:0.8em 0.8em 0.8em 1.5em;">
<h6 style="margin-bottom:0"><i class="fa fa-check-circle" style="font-size:1.3em;color:#085477"></i><span style="color: #717171;margin-left:0.5em;vertical-align:top">check-out successful</span></h6>
</div>
<div class="container" style="text-align: center;"> 
<div class="row" style="margin: 0;justify-content: center;">
    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-4" style="padding: 0;margin-bottom:1em">
      <div id="card_view" class="card" style="width: 18rem;margin-top: 1em;border-radius: 10px;display: inline-block;">    
  <div class="card-body" style="padding: 0">
    <div style="background-color: #092442;padding: 1.8rem;border-top-left-radius: 10px;border-top-right-radius: 10px;padding: 1.5em 0">
      <img src="<?=base_url()?>assets/img/logo-tempo-transparent.png" class="card-img-top" style="width: 8rem;height: auto">
      <h4 style="color: white;margin-top: 1rem;margin-bottom: 0;font-weight: bold;">Check-Out</h4>
    </div>  
    <div style="padding: 1.5rem 0;background-color: #F2F2F2;border-bottom-left-radius: 10px;border-bottom-right-radius: 10px;">
      <h4 class="card-title" id="date_checkout" style="color: #717171;font-weight: bold;"></h4>    
    <h4 class="card-title" id="time_checkout" style="color: #717171;font-weight: bold;margin-bottom: 0"></h4>    
    </div>    
  </div>
</div>
<hr>
<p style="font-weight: bold;font-size: 1rem;margin-bottom: 1.6rem;">Thank you for visiting Tempo Pavilion</p>
<p style="font-weight: normal;font-size: 1rem;margin-bottom: 0.5rem;"><em>Terima kasih atas kunjungan anda ke Tempo Pavilion</em></p>
    </div>
</div>  
</div>
</div>

<div id="not_allowed">
        <div class="freebirdFormviewerViewFormContentWrapper m2">
      <div class="freebirdFormviewerViewHeaderCard freebirdFormviewerViewCenteredContent freebirdViewerHeaderCard freebirdHeaderCard">        
          <img src="<?=base_url()?>assets/img/tempo-building.png" style="height: 100%;float: left;">
          <div style="display: table;height: 100%;">
            <div style="display: table-cell;vertical-align: middle;">
              <h1 id="header_company" style="text-align: left;font-weight: bold;margin-bottom: 1%"><?=$company['company_name']?></h1>
        <h1 id="title_company" style="text-align: left;line-height: 1.35;margin: 0;font-family: lato;font-weight: bold;"><?=$company['company_description']?></h1>    
            </div>            
          </div>
        </div>
      <div class="freebirdFormviewerViewCenteredContent">
        <form>
          <div class="freebirdFormviewerViewFormCard exportFormCard">
            <div class="freebirdFormviewerViewFormContent">
              <div class="freebirdFormviewerViewNoPadding">
                <div class="freebirdFormviewerViewHeaderHeader">
                  <div class="freebirdFormviewerViewHeaderThemeStripe" style="background-color: rgb(187, 142, 12);color: rgba(255, 255, 255, 1);"></div>
                  <div class="freebirdFormviewerViewHeaderTitleRow">
                    <div class="freebirdFormviewerViewHeaderTitle exportFormTitle freebirdCustomFont" dir="auto" role="heading" aria-level="1">VMS TEMPO PAVILION</div>
                  </div>                  
                  <div class="freebirdFormviewerViewHeaderRequiredLegend" id="allow_text" aria-hidden="true" dir="auto">Please allow access to your location</div>
                  <div style="display: none;" class="freebirdFormviewerViewHeaderRequiredLegend" id="refresh_not_allowed" aria-hidden="true" dir="auto">Please reload (refresh) this page</div>
                  <div id="refresh_waiting" style="text-align: center;margin-top: 12px;display: none;">
        <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>      
      </div> 
                </div>
              </div>                                         
            </div>
          </div>
        </form>
      </div>
    </div>
      </div>

      <div id="form_registration" style="display: none;">
        <div class="freebirdFormviewerViewFormContentWrapper m2">
      <div class="freebirdFormviewerViewHeaderCard freebirdFormviewerViewCenteredContent freebirdViewerHeaderCard freebirdHeaderCard">        
          <img src="<?=base_url()?>assets/img/tempo-building.png" style="height: 100%;float: left;">
          <div style="display: table;height: 100%;">
            <div style="display: table-cell;vertical-align: middle;">
              <h1 id="header_company" style="text-align: left;font-weight: bold;margin-bottom: 1%"><?=$company['company_name']?></h1>
        <h1 id="title_company" style="text-align: left;line-height: 1.35;margin: 0;font-family: lato;font-weight: bold;"><?=$company['company_description']?></h1>    
            </div>            
          </div>
        </div>
      <div class="freebirdFormviewerViewCenteredContent">
        <form>
          <div class="freebirdFormviewerViewFormCard exportFormCard">
            <div class="freebirdFormviewerViewFormContent">
              <div class="freebirdFormviewerViewNoPadding">
                <div class="freebirdFormviewerViewHeaderHeader">
                  <div class="freebirdFormviewerViewHeaderThemeStripe" style="background-color: rgb(187, 142, 12);color: rgba(255, 255, 255, 1);"></div>
                  <div class="freebirdFormviewerViewHeaderTitleRow">
                    <div class="freebirdFormviewerViewHeaderTitle exportFormTitle freebirdCustomFont" dir="auto" role="heading" aria-level="1">VMS TEMPO PAVILION</div>
                  </div>
                  <div class="freebirdFormviewerViewHeaderDisclosure" dir="auto">
                    The name and photo will be recorded when you upload files and submit this form.
                  </div>
                  <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto">* Required</div>
                </div>
              </div>

              <div class="freebirdFormviewerViewNoPadding" id="reason_rejection" style="display: none;">
                <div class="freebirdFormviewerViewHeaderHeader">
                  <div class="freebirdFormviewerViewHeaderThemeStripe" style="background-color: rgb(187, 142, 12);color: rgba(255, 255, 255, 1);"></div>
                  <div class="freebirdFormviewerViewHeaderTitleRow">
                    <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText freebirdCustomFont" dir="auto" role="heading" aria-level="1">Receptionist Comment: </div>
                  </div>
                  <div class="freebirdFormviewerViewHeaderRequiredLegend" dir="auto" id="reason_rejection_text">                    
                  </div>                  
                </div>
              </div>

              <div class="freebirdFormviewerViewItemList" role="list">
                <div>
                  <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" role="heading">
                    <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdMaterialHeaderbannerPagebreakBanner" style="background-color: rgb(187, 142, 12);color: rgba(255, 255, 255, 1);">
                      <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText freebirdCustomFont">
                        Data Visitor
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="m2">
                    <div class="freebirdFormviewerComponentsQuestionBaseRoot freebirdFormviewerComponentsQuestionBaseHasSectionBanner">

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            No Telepon / Phone Numbers
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="tel" id="phone_number" onkeyup='return isNumberKey(event)' style="padding-left:89px !important" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Nama Sesuai KTP / Name according to ID Card
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input id="full_name" type="text" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;" id="div_type_card">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                          Tipe Kartu Identitas / Official ID Card type:
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div id="type_id_card_input">
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <select class="form-control" id="type_id_card" style="font-size:14px" onchange="changeIdCard(this.value)">
                                  <option value="0" selected>Choose</option>
                                  <option value="1">KTP</option>
                                  <option value="2">SIM</option>                                  
                                  <option value="3">KITAS</option>                                  
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;" id="div_official_number">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Nomor ID Resmi (6 Angka Pertama) Sesuai ID yang dilampirkan / Official ID Numbers (First 6 Numbers) According to the Attached ID (KITAS)
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div id="official_number_input">
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="text" id="official_id_number" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" onKeyPress="if(this.value.length==6) return false;" required>
                                <input type="hidden" id="official_id_number_hide">
                                <input type="hidden" id="type_input_official_id_number">
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Perusahaan / Company
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="text" id="company" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>
                      
                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Alamat / Address
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="text" id="address" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>                      

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Alamat Email / Email Address
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="email" id="email" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Suhu Tubuh
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="number" id="suhu_tubuh" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Perusahaan yang Dituju / Destination Company
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="text" id="destination_company" class="form-control input" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Lantai / Floor
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <select class="form-control" id="floor" style="font-size:14px">
                                  <option value="0" selected>Choose</option>
                                  <option value="1">Lantai Loby</option>
                                  <option value="2">Lantai 1</option>
                                  <option value="3">Lantai 2</option>
                                  <option value="4">Lantai 3</option>
                                  <option value="5">Lantai 4</option>
                                  <option value="6">Lantai 5</option>
                                  <option value="7">Lantai 6</option>
                                  <option value="8">Lantai 7</option>
                                  <option value="9">Lantai 8</option>
                                  <option value="10">Lantai 9</option>
                                  <option value="11">Lantai 10</option>                                  
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;" id="photo">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                          Foto Kartu Identitas / ID Card Photo
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                            <div style="line-height: 1.35">
                              <span style="font-style: italic;font-size: 12px;">Mohon pastikan kartu identitas anda dalam posisi orientasi landscape dan hanya berisi kartu identitas anda, jika tidak silahkan anda crop dengan menekan tombol Crop Image</span>
                            </div>                            
                          </div>
                        </div>
                      </div>

                      <input type="hidden" name="isImage" id="isImage" value="1"> 
                      <input type="hidden" name="imageBase64" id="imageBase64" value=""> 

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent" style="height:auto">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <div>
                                <input type="hidden" id="ktp_photo_last">
                                <input style="visibility: hidden;" class="file-upload-input" id="icon-upload-input" name="filename" type='file' onchange="readURLChecklist(this, 'icon-upload-wrap', 'icon-upload-image', 'icon-upload-content', 'icon-title', 'icon-upload-input')" accept="image/*"/>

              <a href="javascript:void(0)" style="border-color:#e8eaed; color:#1a73e8;width: 100%;" id="upload_button" class="btn mr-2 btn-file" onclick="$('#icon-upload-input').trigger( 'click' )">
            <i class="fa fa-upload" style="margin-right: 8px;"></i> Add file
            </a>            
              </div>                                           
                    <div class="file-upload-content" id="icon-upload-content">
                        <img class="file-upload-image" id="icon-upload-image" src="#" />
                            <div class="image-title-wrap">                              
                                <button type="button" href="javascript:void(0)" id="remove_button" onclick="removeUploadChecklist('icon-upload-input', 'icon-upload-content', 'icon-upload-wrap')" class="btn btn-danger">Remove</button>
                                <button type="button" href="javascript:void(0)"  onclick="showCrop()" class="btn btn-success">Crop Image </button>
                            </div>
                    </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                    </div>
                  </div>  
                </div>

              </div>

              <div class="freebirdFormviewerViewItemList" role="list">
                <div>
                  <div class="freebirdMaterialHeaderbannerLabelContainer freebirdFormviewerViewItemsPagebreakBanner" role="heading">
                    <div class="freebirdMaterialHeaderbannerLabelTextContainer freebirdMaterialHeaderbannerPagebreakBanner" style="background-color: rgb(187, 142, 12);color: rgba(255, 255, 255, 1);">
                      <div class="freebirdMaterialHeaderbannerPagebreakText freebirdFormviewerViewItemsPagebreakBannerText freebirdCustomFont">
                        PERTANYAAN / QUESTIONS
                      </div>
                    </div>
                  </div>
                </div>

                <div>
                  <div class="m2">
                    <div class="freebirdFormviewerComponentsQuestionBaseRoot freebirdFormviewerComponentsQuestionBaseHasSectionBanner">

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Apakah pernah melakukan perjalanan ke luar kota/international (wilayah yang terjangkit/zona merah?) / Have you been traveled out of town/international (area that have confirmed covid-19/ red zone ?)                            
                          </div>
                        </div>
                      </div>

                      <div>
                        <div>
                          <div class="appsMaterialWizToggleRadiogroupGroupContainer exportGroupContainer freebirdFormviewerViewItemsRadiogroupRadioGroup">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_travelling" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_travelling" value="2">
                                    <label for="r2d">Tidak</label>
                                  </li>
                                </ul>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Apakah Anda menggunakan transportasi umum hari ini?/Do you use public transportation today?
                          </div>
                        </div>
                      </div>

                      <div>
                        <div>
                          <div class="appsMaterialWizToggleRadiogroupGroupContainer exportGroupContainer freebirdFormviewerViewItemsRadiogroupRadioGroup">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_using_transportation" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_using_transportation" value="2">
                                    <label for="r2d">Tidak</label>
                                  </li>
                                </ul>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>  

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Apakah Anda mengikuti kegiatan yang melibatkan orang banyak ? / Do you participate in activities that involve large numbers of People ?
                          </div>
                        </div>
                      </div>

                      <div>
                        <div>
                          <div class="appsMaterialWizToggleRadiogroupGroupContainer exportGroupContainer freebirdFormviewerViewItemsRadiogroupRadioGroup">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_participate" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_participate" value="2">
                                    <label for="r2d">Tidak</label>
                                  </li>
                                </ul>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div> 

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Apakah memiliki kontak erat dengan orang yang dinyatakan ODP, PDP atau konfirm Covid-19 (berjabat tangan, berbicara, berada dalam satu ruangan/satu rumah) ? / Have you been had close contact with ODP, PDP, confirmed Covid-19 case (shake hands, talking, being in the same room/same house) ?
                          </div>
                        </div>
                      </div>

                      <div>
                        <div>
                          <div class="appsMaterialWizToggleRadiogroupGroupContainer exportGroupContainer freebirdFormviewerViewItemsRadiogroupRadioGroup">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_contact_patient" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_contact_patient" value="2">
                                    <label for="r2d">Tidak</label>
                                  </li>
                                </ul>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div> 

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Apakah anda sedang mengalami demam/batuk/pilek/sakit tenggorokan/sesak ? / Are you have fever/cough/flu/sore throat/breathless today?
                          </div>
                        </div>
                      </div>

                      <div>
                        <div>
                          <div class="appsMaterialWizToggleRadiogroupGroupContainer exportGroupContainer freebirdFormviewerViewItemsRadiogroupRadioGroup">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_sick" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_sick" value="2">
                                    <label for="r2d">Tidak</label>
                                  </li>
                                </ul>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Saya menyetujui persyaratan dan menyetujui pengumpulan dan penggunaan informasi saya untuk tujuan pelacakan kontak COVID-19 / I agree to term and consent to colletion and use of my information for purpose of COVID-19 contact tracing
                          </div>
                        </div>
                      </div>

                      <div>
                        <div>
                          <div class="appsMaterialWizToggleRadiogroupGroupContainer exportGroupContainer freebirdFormviewerViewItemsRadiogroupRadioGroup">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_agree" value="1">
                                    <label for="r1d">Menyetujui</label>
                                  </li>                                  
                                </ul>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div>
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                            Saya mengisi formulir ini dengan sukarela tanpa paksaan dari pihak manapun / I, fill out the form voluntarily without coercion from any party
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div>
                          <div class="appsMaterialWizToggleRadiogroupGroupContainer exportGroupContainer freebirdFormviewerViewItemsRadiogroupRadioGroup">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" id="is_fill_without_coercion" name="is_fill_without_coercion" value="1">
                                    <label for="r1d">Menyetujui</label>
                                  </li>                                  
                                </ul>
                              
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>       
                      
                    </div>
                  </div>  
                </div>

              </div>
              
              <div class="freebirdFormviewerViewNavigationNavControls">
                <div class="freebirdFormviewerViewNavigationButtonsAndProgress">
                  <div class="freebirdFormviewerViewNavigationButtons">
                    <a href="javascript:void(0)" onclick="submitform()" id="submit" class="button7 btn disabled">Submit</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>
      </div>      

      <div id="waiting_screen" style="display:none">
    <div class="container" style="text-align: center;"> 
<div class="row" style="margin: 0;justify-content: center;">
    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-4" style="padding: 0;margin-bottom:1em">
      <div style="margin-top: 2em;">
        <img src="<?=base_url()?>assets/img/logo-tempo-transparent.png" class="card-img-top" style="width: 8rem;height: auto">
      </div>    
      <h2 style="margin-top: 0.6em;font-family: league-gothic">TEMPO PAVILION</h2> 
      <p id="text_failed" style="font-weight: normal;font-size: 1rem;margin-top: 1.6rem;">We have received your data<br>Please wait a moment while we are verifiing your data</p>
      <div id="waiting_text">
        <div class="lds-spinner"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
      <p style="font-weight: normal;font-size: 1rem;margin-top: 1.6rem;">Please do not close your browser</p>
      </div> 
      <a href="javascript:void(0)" id="check_in_button" onclick="location.reload();" class="btn" style="background-color: #085476;color: white;width: 100%;display: none;">Refresh Page</a>
      <a href="javascript:void(0)" id="scan_button" onclick="location.href='<?=site_url('customer')?>'" class="btn" style="background-color: #085476;color: white;width: 100%;display: none;">Scan QR Check-In <i class="fa fa-sign-in" style="margin-left: 2%"></i></a>       
      
    </div>
</div>  
</div>
    </div>

    <div id="official_id_number_page" style="display: none;">
  <div class="freebirdFormviewerViewFormContentWrapper m2">
      <div class="freebirdFormviewerViewHeaderCard freebirdFormviewerViewCenteredContent freebirdViewerHeaderCard freebirdHeaderCard">        
          <img src="<?=base_url()?>assets/img/tempo-building.png" style="height: 100%;float: left;">
          <div style="display: table;height: 100%;">
            <div style="display: table-cell;vertical-align: middle;">
              <h1 id="header_company" style="text-align: left;font-weight: bold;margin-bottom: 1%"><?=$company['company_name']?></h1>
        <h1 id="title_company" style="text-align: left;line-height: 1.35;margin: 0;font-family: lato;font-weight: bold;"><?=$company['company_description']?></h1>    
            </div>            
          </div>
        </div>
  </div>
  <div class="container" style="text-align: center;">  
  <hr style="border-color: black">
  <p style="color: #717171;font-size: 0.85rem">Mohon input 6 digit pertama nomor Kartu Identitas anda / please input the first 6 digit number of the official ID that you have attached</p>  
  <form role="form" name="form">
    <div class="row" style="margin: 0;justify-content: center;">
      <div class="col col-md-7 col-lg-5 col-xl-4">              
        <input type="number" id="official_id_number_2" class="form-control" autocomplete="off" style="margin-bottom: 1rem;text-align:center" onKeyPress="if(this.value.length==6) return false;" required>        
        <a href="javascript:void(0)" onclick="setOfficialIdNumber()" class="btn" style="background-color: #085476;color: white;width: 100%">Submit</a>
      </div>
    </div>        
  </form>      
</div>
</div>

      <div class="modal fade" id="modalLoading" role="dialog">
            <div class="modal-dialog modal-sm">
              <div class="modal-content">
                <div class="modal-body" style="text-align:center">
                  <p>Please wait...</p>
                  <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
                </div>
              </div>
            </div>
          </div>

          <div class="modal" id="modalCropHome">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-body" style="display: inline-block;max-width: 100%;">
              <div style="max-width:100%">
              <img id="upload-demo-home" style="width:100%"/>
              </div>                
              </div>
              <div class="modal-footer">
              <button type="button" href="javascript:void(0)" onclick="cancelCrop()" class="btn btn-danger">Cancel</button>
        <button type="button" href="javascript:void(0)" id="upload-result-home" class="btn btn-success">Crop Image</button>
      </div>
            </div>
          </div>
        </div>
<!-- /.container -->		

    <script>

var type_language = 1;
var id_surat_tesseract = 0;

function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        /* Applying the top margin on modal dialog to align it vertically center */
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    // $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    });   
    
function showLoading(){    
              $('#modalLoading').modal({backdrop: 'static', keyboard: false});   

              var originalModal = $( '#modalLoading' ).clone();
            $( '#modalLoading' ).on( 'hidden.bs.modal', function () {              
                $( '#modalLoading' ).remove();
                var myClone = originalModal.clone();
                $( '#waiting_screen' ).after(myClone);
            } );               
            };

            function ValidateEmail(mail) 
{
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(mail))
  {
    return (true)
  }    
    return (false)
}

function cancelCrop(){
  $('#modalCropHome').modal('hide');
}

var add_registration = "<?php echo site_url('customer/add_registration'); ?>";

var check_official_id_number = "<?php echo site_url('customer/get_official_id_number'); ?>";

var update_official_id_number = "<?php echo site_url('customer/update_official_id_number'); ?>";

function setOfficialIdNumber() {  
  if($('#official_id_number_2').val() == ""){          
          swal("Sorry", "Official ID Number is required", "error").then((value) => {
      $("#official_id_number_2").focus();
      });        
  }else if($('#official_id_number_2').val().length < 6){            
          swal("Sorry", "You Must Enter The First 6 Digits Of The Official ID That You Attach", "error").then((value) => {
      $("#official_id_number_2").focus();
      });        
  }else{
    showLoading();    
  $('#modalLoading').on('shown.bs.modal', function (e) {    
    $.ajax({
      url: update_official_id_number,
                type: "POST",
                data: {id_surat : id_surat_tesseract, official_id_number : $('#official_id_number_2').val()},
                dataType: "json",
                    success: function(data)
                    {                                                             
    $('#official_id_number_2').val("");                                       
    $("#official_id_number_page").hide();       
              $("#waiting_screen").show();                                                                                          
              $("#modalLoading").modal('hide');                 
                show_wait_screen(id_surat_tesseract, "<?=$check_unique->registration_id?>");                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {   
                      $("#modalLoading").modal('hide');                                     

                        swal("Sorry", "Please Try Again", "error");                        
                    }
                });                  
});
  }  
}

function getOfficialIdNumber(id_surat, image) {  
  
      var formdata = new FormData();                        
          formdata.append('id_surat', id_surat);  
          formdata.append('image', image);   
          formdata.append('type_id_card', $('#type_id_card').val());                 

        $.ajax({
                    url : check_official_id_number,
                    contentType: false,
                    cache: false,
                    processData: false,
                    type: "POST",
                    data: formdata,
                    dataType: "json",
                    async: true,
                    timeout: 600000,
                    success: function(data)
                    {                                            
                      if(data.is_insert == 1){    
                        $("#form_registration").hide();       
              $("#waiting_screen").show();                                                                                          
              $("#modalLoading").modal('hide');                 
                show_wait_screen(id_surat, "<?=$check_unique->registration_id?>");                        
                      }else{            
                        id_surat_tesseract = id_surat;          
                        $("#form_registration").hide();       
              $("#official_id_number_page").show();                                                                                          
              $("#modalLoading").modal('hide');  
                      }                                                          
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    { 
                      id_surat_tesseract = id_surat;          
                        $("#form_registration").hide();       
              $("#official_id_number_page").show();                                                                                          
              $("#modalLoading").modal('hide');  
                    }
                });                                      
    }     

    function submitform() {     

    if (navigator.geolocation) {        
        navigator.geolocation.getCurrentPosition(checkPositionSubmit, checkErrorSubmit, {timeout:7000, enableHighAccuracy:true});                     
}else{          
  showLoading();  
  $('#modalLoading').on('shown.bs.modal', function (e) {
    go_submit();
      }); 
    }                 
    }    

    canvas = $('#upload-demo-home').cropper();

    $('#modalCropHome').on('shown.bs.modal', function (e) {

      canvas.cropper('destroy');        

       var cropper = canvas.cropper({
            //these options can be changed or modified according to need
            viewMode: 2,
            cropBoxResizable: true,
            // minCropBoxWidth: 100,
            // minCropBoxHeight: 100,
            dragMode: 'none',  
            built: function () {
      // Width and Height params are number types instead of string
      canvas.cropper("setCanvasData", { width: 100, height: 800 });
    },               
            crop : function(e){
               $('#crop_x').val(e.x);
               $('#crop_y').val(e.y);
			}
		});		    	  
		cropper.cropper('replace', $('#icon-upload-image').attr('src'));


      $('#upload-result-home').on('click', function (ev) {  
        var imageData = cropper.cropper('getCroppedCanvas').toDataURL('image/jpeg');

        $('#isImage').val('0');
     $('#imageBase64').val(imageData);
    
     $('#icon-upload-image').attr('src', imageData);     
     $('#modalCropHome').modal('hide');         
    
  });
});           

    function showCrop(){                 
      $('#modalCropHome').modal('show');               
    }; 

    function checkErrorSubmit(error) {
  switch(error.code) {
    case error.PERMISSION_DENIED:
      $("#modalLoading").modal('hide');   
      swal("Sorry", "Please allow access to your location", "error");
      break;    
    case error.POSITION_UNAVAILABLE:
    $("#modalLoading").modal('hide');
      swal("Sorry", "We cannot access your location", "error");      
      break;
    case error.TIMEOUT:
    $("#modalLoading").modal('hide');
      swal("Sorry", "We cannot access your location", "error");      
      break;     
    default:
    go_submit();
  }
}  

    function checkPositionSubmit(position) { 
      showLoading();   
      $('#modalLoading').on('shown.bs.modal', function (e) {        
        var request = $.ajax({
                url: local_check_latlong,
                type: "POST",
                data: {latitude : position.coords.latitude, longitude : position.coords.longitude},
                dataType: "json"
          });
    
          request.done(function(responseLocal) {                              
              if(responseLocal.is_valid == true){
                go_submit();
            }else{                
              $("#modalLoading").modal('hide');   
              swal("Sorry", "you need to be inside Tempo Pavilion building to check-in", "error");
            }                      
          });
      });               
        }

    function go_submit() {
            var itiPhoneNumber = window.intlTelInputGlobals.getInstance(phone_number);  
            if($('#full_name').val() == ""){          
              $("#modalLoading").modal('hide');
          swal("Sorry", "Full Name is required", "error").then((value) => {
      $("#full_name").focus();
      });        
      }else if($('#type_id_card').val() == "0" && isCheckIdNumber == true){              
        $("#modalLoading").modal('hide');
          swal("Sorry", "Official ID Card Type is required", "error").then((value) => {
      $("#type_id_card").focus();
      });        
      }else if($('#official_id_number').val() == "" && $('#type_id_card').val() == "3"  && isCheckIdNumber == true){            
        $("#modalLoading").modal('hide');
          swal("Sorry", "Official ID Number is required", "error").then((value) => {
      $("#official_id_number").focus();
      });        
      }else if($('#official_id_number').val().length < 6 && $('#type_id_card').val() == "3"  && isCheckIdNumber == true){            
        $("#modalLoading").modal('hide');
          swal("Sorry", "You Must Enter The First 6 Digits Of The Official ID That You Attach", "error").then((value) => {
      $("#official_id_number").focus();
      });        
      }else if(!itiPhoneNumber.isValidNumber()){        
        $("#modalLoading").modal('hide');
          swal("Sorry", "The Phone Number format you entered is incorrect", "error").then((value) => {
      $("#phone_number").focus();
      });
     }else if($('#email').val() != "" && !ValidateEmail($('#email').val())){                     
      $("#modalLoading").modal('hide');
          swal("Sorry", "The email format you entered is incorrect", "error").then((value) => {
      $("#email").focus();
      });         
    }else if($('#company').val() == ""){            
      $("#modalLoading").modal('hide');
          swal("Sorry", "Company is required", "error").then((value) => {
      $("#company").focus();
      });        
      }else if($('#address').val() == ""){            
        $("#modalLoading").modal('hide');
          swal("Sorry", "Address is required", "error").then((value) => {
      $("#address").focus();
      });        
      }else if($('#suhu_tubuh').val() == ""){           
        $("#modalLoading").modal('hide');
          swal("Sorry", "Suhu Tubuh is required", "error").then((value) => {
      $("#suhu_tubuh").focus();
      });        
      }else if($('#destination_company').val() == ""){           
          swal("Sorry", "Destination Company is required", "error").then((value) => {
      $("#destination_company").focus();
      });        
      }else if($('#floor').val() == ""){             
          swal("Sorry", "Floor is required", "error").then((value) => {
      $("#floor").focus();
      });        
      }else if($('#floor').val() == 0){               
          swal("Sorry", "Floor is required", "error").then((value) => {
      $("#floor").focus();
      });        
      }else if($.trim($('#icon-upload-input').val()) == '' && is_upload_image){           
        $("#modalLoading").modal('hide');
          swal("Sorry", "ID Card Photo is required", "error").then((value) => {
            document.getElementById("upload_button").focus();
      });        
      }else if($("input[name='is_fill_without_coercion']:checked").val() != 1){             
        $("#modalLoading").modal('hide');
          swal("Sorry", "You must check this input", "error").then((value) => {
      $("#is_fill_without_coercion").focus();
      });        
      }
      else {                        
          var itiPhoneNumber = window.intlTelInputGlobals.getInstance(phone_number);
        var phoneNumber = itiPhoneNumber.getNumber(); 
        if(localStorage) {          
        localStorage.setItem("phone_number_surat_pernyataan_tempo_paviliun", phoneNumber);
          }

          var formdata = new FormData();    
          formdata.append('full_name', $('#full_name').val());     
          formdata.append('phone_number', phoneNumber);              
          formdata.append('email', $('#email').val());
          formdata.append('device_id', uuid);
          formdata.append('company', $('#company').val());  
          formdata.append('address', $('#address').val());        
          formdata.append('suhu_tubuh', $('#suhu_tubuh').val());  
          formdata.append('destination_company', $('#destination_company').val());  
          formdata.append('floor', $('#floor').val());  
          formdata.append('type_id_card', $('#type_id_card').val());  
          formdata.append('ktp_photo_last', $('#ktp_photo_last').val());  
          formdata.append('is_travelling', $("input[name='is_travelling']:checked").val());
          formdata.append('is_using_transportation', $("input[name='is_using_transportation']:checked").val());
          formdata.append('is_participate', $("input[name='is_participate']:checked").val());  
          formdata.append('is_contact_patient', $("input[name='is_contact_patient']:checked").val());  
          formdata.append('is_sick', $("input[name='is_sick']:checked").val());  
          formdata.append('is_agree', $("input[name='is_agree']:checked").val());  
          formdata.append('is_fill_out_without_coercion', 1);  
          formdata.append('registration_id', "<?=$check_unique->registration_id?>");           
          formdata.append('isImage', $('#isImage').val());                
          formdata.append('type_input_official_id_number', $('#type_input_official_id_number').val());  

          if($('#isImage').val() == 0){
            formdata.append('imageBase64', $('#imageBase64').val());      
          }else{
            formdata.append('ktp_photo', document.getElementById('icon-upload-input').files[0]);      
          }

          if(isCheckIdNumber == true && $('#type_id_card').val() != "3"){
            formdata.append('status', 3);    
            formdata.append('official_id_number', 0);            
          }else{
            if($('#type_id_card').val() == "3"){                  
                  formdata.append('official_id_number', $('#official_id_number').val());            
              }else{
                formdata.append('official_id_number', $('#official_id_number_hide').val());            
              }                
              formdata.append('status', 0);                
          }

        $.ajax({
                    url : add_registration,
                    contentType: false,
                    cache: false,
                    processData: false,
                    type: "POST",
                    data: formdata,
                    dataType: "json",
                    async: true,
                    timeout: 600000,
                    success: function(data)
                    {                                            
                      if(data.error != ""){                        
                        $("#modalLoading").modal('hide');                         
                        swal("Sorry", data.error, "error");
                      }else if(data.is_insert == 0){
                        getOfficialIdNumber(data.id_surat, data.image);
                      }else{
                        $("#form_registration").hide();       
              $("#waiting_screen").show();                                                                                          
              $("#modalLoading").modal('hide');                 
                show_wait_screen(data.id_surat, "<?=$check_unique->registration_id?>");
                      }                                                          
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {   
                      $("#modalLoading").modal('hide');                                                   
                        swal("Sorry", "Please Try Again", "error");                        
                    }
                });                    
      }
          }      

function check_out(id){  
        swal({
          title: "Are you sure?",          
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {            
            showLoading();    
            $('#modalLoading').on('shown.bs.modal', function (e) {
              alignModal();
              $.ajax({
                    url : "<?php echo site_url('customer/add_checkout'); ?>",
                    type: "POST",
                    data: {registration_id : id},
                    dataType: "json",
                    success: function(data)
                    {                           
                    $("#form_registration").hide();
                    $("#safe_entry_pass").hide();       
                    if (data.is_valid == true) {                      
                      $("#date_checkout").text(data.checkout_date);
                      $("#time_checkout").text(data.checkout_time);
                      $("#check_out_success").show();                    
                      $("#modalLoading").modal('hide');
                    }else if (data.is_double == true) {
                      $("#text_failed").text("We are sorry, we cannot process your check-out because you have successfully check-out before on "+data.double_checkout_time+". Thank you for visiting Tempo Pavilion");         
                      $("#waiting_text").hide();                      
                      $("#waiting_screen").show();     
                      $("#modalLoading").modal('hide');         
                    }else{
                      $("#text_failed").text("We are sorry we cannot process your check-out. You need to check-in first to check-out. Please check-in first. Thank you");         
                      $("#waiting_text").hide();
                      $("#scan_button").show();
                      $("#waiting_screen").show();     
                      $("#modalLoading").modal('hide');         
                    }                             
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                      $("#modalLoading").modal('hide');
                        swal("Sorry", "Please Try Again", "error");                       
                    }
                });
    })                      
  }          
        });
    }

    function changeIdCard(val){
      if (val == '3') {                                               
                $("#div_official_number").show();
                $("#official_number_input").show();
                $('#official_number_input').attr('required','true');            
              }else{                
                $("#official_number_input").removeAttr("required");            
                $("#div_official_number").hide();
                $("#official_number_input").hide();                
              }
    }    

    function checkPhone(){      
      var itiPhoneNumber = window.intlTelInputGlobals.getInstance(phone_number);  
     if(itiPhoneNumber.isValidNumber()){      
        var phoneNumber = itiPhoneNumber.getNumber(); 
      var check_valid_phone = "<?=base_url('customer/check_valid_phone')?>";                  
        showLoading();   
        $('#modalLoading').on('shown.bs.modal', function (e) {
          alignModal();
          var request = $.ajax({
                url: check_valid_phone,
                type: "POST",
                data: {phone_number : phoneNumber, character_registration : "<?=$check_unique->character_registration?>",
                  device_id : uuid},
                dataType: "json"
          });
    
          request.done(function(msg) {                              
              if(msg.is_valid == true){
                if(localStorage) {          
        localStorage.setItem("phone_number_surat_pernyataan_tempo_paviliun", phoneNumber);
          }                            
              $("#date").text(msg.checkin_date);
              $("#time").text(msg.checkin_time); 
              $("#check_in_floor").text(msg.checkin_floor);             
              $("#check_in_point").text(msg.nama_lokasi);
              $("#registration_number").text(msg.registration_number);
              $("#checkout_button").click(function () {
                check_out(msg.registration_id)
    });    
    $("#form_registration").hide();       
    $("#safe_entry_pass").css("background-color", msg.background_safe_entry_pass);    
              $("#safe_entry_pass").show();
              $("#modalLoading").modal('hide');      
            }else if(msg.status_surat == 0 && msg.id_surat != 0){
              if(localStorage) {          
        localStorage.setItem("phone_number_surat_pernyataan_tempo_paviliun", phoneNumber);
          }     
              $("#form_registration").hide();       
              $("#waiting_screen").show();                                                              
              $("#modalLoading").modal('hide'); 
              show_wait_screen(msg.id_surat, "<?=$check_unique->registration_id?>");
            }else{              
              $("#full_name").val(msg.full_name);                  
                  $("#email").val(msg.email);
                  $("#company").val(msg.company);          
                  $("#address").val(msg.address);                     
                  $("#destination_company").val(msg.destination_company);                            
                  $("#floor").val(msg.floor);    
                  $("#ktp_photo_last").val(msg.ktp_photo);                              
                  $("#type_id_card").val(msg.type_id_card);
                  $("#official_id_number_hide").val(msg.official_id_number);
                  $("#type_input_official_id_number").val(msg.type_input_official_id_number);

                  if(msg.type_id_card == 3){
                    $("#official_id_number").val(msg.official_id_number); 
                    }else{
                      $("#official_id_number").val(""); 
                    } 

                  if(msg.count_surat > 0){                    
                  is_upload_image = false;                    
                  
                  if(msg.status_surat == 2){
                    $("#suhu_tubuh").val(msg.suhu_tubuh);
                    getImageDetail("<?=base_url('assets/images/ktp_photo')?>/"+msg.ktp_photo,"icon-upload-image", "icon-upload-content", "icon-title", "upload_button","", "icon-upload-input");
                    $("#photo").show();        
                    $("#div_type_card").show();
                    $("#type_id_card_input").show();     

                    isCheckIdNumber = true;                                   

if(msg.type_id_card != 3){
  $("#div_official_number").hide();
$("#official_number_input").hide();
}
                  }else if(msg.type_id_card == "0" || msg.official_id_number == ""){
                    $("#photo").show();        
                    $("#div_type_card").show();
                    $("#type_id_card_input").show();                                                                                 

                    if(msg.type_id_card != 3){
                      $("#div_official_number").hide();
                    $("#official_number_input").hide();
                    }

                    getImageDetail("<?=base_url('assets/images/ktp_photo')?>/"+msg.ktp_photo,"icon-upload-image", "icon-upload-content", "icon-title", "upload_button","", "icon-upload-input");
                    isCheckIdNumber = true;
                  }else{                    
                    $("#photo").hide();   
                    $("#div_type_card").hide();
                    $("#type_id_card_input").hide();
                    $("#div_official_number").hide();
                    $("#official_number_input").hide();                    

                    isCheckIdNumber = false;     
                  }                    
                  }else{                    
                    $("#suhu_tubuh").val("");                    
                    removeUploadChecklist('icon-upload-input', 'icon-upload-content', 'icon-upload-wrap');
                    $("#photo").show(); 
                    $("#div_type_card").show();
                    $("#type_id_card_input").show();
                    $("#div_official_number").hide();
                    $("#official_number_input").hide(); 
                    isCheckIdNumber = true;      
                  }                  
                  $("#modalLoading").modal('hide');                  
            }                      
          });
    })                                  
     }
    }  

        $('#phone_number').focusout(function() {
      checkPhone();  
  });          

var phone_number = document.querySelector("#phone_number");
    window.intlTelInput(phone_number, {     
      preferredCountries: ['ID'],
      separateDialCode: true,   
      utilsScript: "<?php echo base_url('/assets/js/utils.js');?>",
    });    
    
    function isNumberKey(evt)
{  
  var itiPhoneNumber = window.intlTelInputGlobals.getInstance(phone_number);  
     if(itiPhoneNumber.isValidNumber()){      
      $("#full_name").attr("readonly", false);
                    $("#company").attr("readonly", false);
                    $("#address").attr("readonly", false);
                    $("#official_id_number").attr("readonly", false);
                    $("#suhu_tubuh").attr("readonly", false);
                    $("#destination_company").attr("readonly", false);
                    $("#email").attr("readonly", false);
                    $("#floor").attr("disabled", false);
                    $("#type_id_card").attr("disabled", false);

                    $("input[name='is_travelling']").attr("disabled", false);  
                    $("input[name='is_using_transportation']").attr("disabled", false);
                    $("input[name='is_participate']").attr("disabled", false);                                      
                    $("input[name='is_contact_patient']").attr("disabled", false);
                    $("input[name='is_sick']").attr("disabled", false);
                    $("input[name='is_agree']").attr("disabled", false);
                    $("input[name='is_fill_without_coercion']").attr("disabled", false);
                    var current = document.getElementsByClassName("btn disabled");
        if (current.length > 0){
          current[0].className = current[0].className.replace("disabled", "");
        }                 
     }else{      
      $("#full_name").attr("readonly", true);
                    $("#company").attr("readonly", true);
                    $("#address").attr("readonly", true);
                    $("#official_id_number").attr("readonly", true);
                    $("#suhu_tubuh").attr("readonly", true);
                    $("#destination_company").attr("readonly", true);
                    $("#email").attr("readonly", true);
                    $("#floor").attr("disabled", true);
                    $("#type_id_card").attr("disabled", true);

                    $("input[name='is_travelling']").attr("disabled", true);
                    $("input[name='is_using_transportation']").attr("disabled", false); 
                    $("input[name='is_participate']").attr("disabled", true);                                       
                    $("input[name='is_contact_patient']").attr("disabled", true);
                    $("input[name='is_sick']").attr("disabled", true);
                    $("input[name='is_agree']").attr("disabled", true);
                    $("input[name='is_fill_without_coercion']").attr("disabled", true);

                    var current = document.getElementsByClassName("btn disabled");
        if (current.length > 0){
          current[0].className = current[0].className.replace("disabled", "");
        } 
                
          $("#submit").addClass("disabled");              
     }
   var charCode = (evt.which) ? evt.which : event.keyCode
   if (charCode > 31 && (charCode < 48 || charCode > 57)){
    return false; 
   }         
}

function show_wait_screen(id, registration_id) {                        
        var interval = setInterval(function () {
            $.ajax({
                    url : "<?php echo site_url('customer/get_surat_pernyataan'); ?>",
                    type: "POST",
                    data: {id : id, registration_id : registration_id},
                    dataType: "json",
                    success: function(data)
                    {                                                            
                        if(data.status_surat != 0){                                                        
                            if(data.status_surat == 1){
                              $("#date").text(data.checkin_date);
              $("#time").text(data.checkin_time);     
              $("#check_in_floor").text(data.checkin_floor);         
              $("#check_in_point").text(data.nama_lokasi);
              $("#registration_number").text(data.registration_number);
              $("#checkout_button").click(function () {
                check_out(data.registration_id);
    });    
    $("#waiting_screen").hide();
    $("#safe_entry_pass").css("background-color", data.background_safe_entry_pass);    
              $("#safe_entry_pass").show();              
                            }else{       

                    is_new_surat = 1; 

                     $("#full_name").val(data.full_name);
                    var itiPhoneNumber = window.intlTelInputGlobals.getInstance(phone_number);  
                    itiPhoneNumber.setNumber(data.phone_number);                  
                  $("#email").val(data.email);                    
                  $("#company").val(data.company);          
                  $("#address").val(data.address);                            
                  $("#destination_company").val(data.destination_company);          
                  $("#ktp_photo_last").val(data.ktp_photo);
                  $("#floor").val(data.floor);
                  $("#type_input_official_id_number").val("0");
                  $("#type_id_card").val(data.type_id_card);
                  $("input[name='is_fill_without_coercion']").prop('checked',true);

                  $("input[name='is_travelling']").filter('[value='+data.is_travelling+']').prop('checked',true);
                  $("input[name='is_using_transportation']").filter('[value='+data.is_using_transportation+']').prop('checked',true);                  
                  $("input[name='is_participate']").filter('[value='+data.is_participate_activities+']').prop('checked',true);                  
                  $("input[name='is_contact_patient']").filter('[value='+data.is_contact_patient+']').prop('checked',true);                  
                  $("input[name='is_sick']").filter('[value='+data.is_sick+']').prop('checked',true);                  
                  $("input[name='is_agree']").filter('[value='+data.is_agree+']').prop('checked',true);                  

                  is_upload_image = false; 

                  isCheckIdNumber = true;

                  $("#suhu_tubuh").val(data.suhu_tubuh);

                  getImageDetail("<?=base_url('assets/images/ktp_photo')?>/"+data.ktp_photo,"icon-upload-image", "icon-upload-content", "icon-title", "upload_button","", "icon-upload-input");

                  var current = document.getElementsByClassName("btn disabled");
        if (current.length > 0){
          current[0].className = current[0].className.replace("disabled", "");
        } 

                    $("#photo").show();

                    $("#div_type_card").show();
                    $("#type_id_card_input").show();
                    $("#type_id_card").val(data.type_id_card);

                    $("#official_id_number_hide").val(data.official_id_number);

if(data.type_id_card != 3){
  $("#div_official_number").hide();
$("#official_number_input").hide();
$("#official_id_number").val("");
}else{
  $("#div_official_number").show();
$("#official_number_input").show();
  $("#official_id_number").val(data.official_id_number);
}

                    $("#reason_rejection").show();
                    $("#reason_rejection_text").text(data.reason_rejection);         
                    $("#waiting_screen").hide();                    
                    $("#form_registration").css("background-color", data.background_declaration_form);
                    $("#form_registration").show();                            
                            }                                                        
                            clearInterval(interval);
                        }                        
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {                              
                        console.log(errorThrown);                        
                    }
                });
        },1000);
    }

    function readURLChecklist(input, wrap, uploadimage, uploadcontent, imagetitle, idremove) {
    console.log("input "+input);    
    uploadwrap = wrap;
    if (input.files && input.files[0]) {
  
      var reader = new FileReader();
  
      reader.onload = function(e) {
        $('#'+wrap).hide();
  
        $('#'+uploadimage).attr('src', e.target.result);
        $('#'+uploadcontent).show();
          
      };
        
      reader.readAsDataURL(input.files[0]);
      $('#upload_button').hide();     
    } else {
      removeUploadChecklist();
    }
  }
  
  function removeUploadChecklist(uploadinput, uploadcontent, wrap) {
    $('#'+uploadinput).replaceWith($('#'+uploadinput).val(''));
    $('#'+uploadcontent).hide();
    $('#'+wrap).show();    
    $( "#icon-upload-input" ).attr( "required", true);
    $('#upload_button').show();
    $('#isImage').val('1');
    uploadwrap = wrap;
    is_upload_image = true; 
  }  

  function getImageDetail(image,uploadimage,uploadcontent,imagetitle,wrap,url,uploadinput) {    
    // var image = $("#image_edit").val();            
    if(image != "" && image != null){        
	  console.log(image);	        
      $('#'+uploadimage).attr('src', image);
	  $('#'+uploadcontent).show();
	  $('#'+wrap).hide();      
    //   readURL(image, 'icon-upload-wrap', 'icon-upload-image', 'icon-upload-content', 'icon-title');
  }
}
    </script>
	</body>  
</html>
