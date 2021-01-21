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

.iti {
  margin-bottom: 1rem;
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
</style>
    </head>
	<body>
			<!-- Navigation -->
			<script>      
      var uuid = (new Fingerprint2()).getSync().fprint;

      var is_new_surat = 0;
      window.addEventListener("load", (event) => {                               
                var addtask = "<?=base_url('customer/check_device_checkout')?>"; 
                var local_check_valid_phone = "<?=base_url('customer/check_phone_checkout')?>";

                if(localStorage) {          
    		var local_phone = localStorage.getItem("phone_number_surat_pernyataan_tempo_paviliun");            

        var request = $.ajax({
                url: local_check_valid_phone,
                type: "POST",
                data: {phone_number : local_phone},
                dataType: "json"
          });
    
          request.done(function(responseLocal) {                              
              if(responseLocal.is_valid == true){ 
                $("#date_checkout").text(responseLocal.checkout_date);
              $("#time_checkout").text(responseLocal.checkout_time);                                                                     
                $("#check_out_success").show();                      
                $("#modalLoading").modal('hide');           
            }else{              
                  $("#modalLoading").modal('hide'); 
                  $("#check_out_entry").show();                                                 
            }                      
          });
        
          }else{            
            $("#check_out_entry").show();
          }                               
                }); </script>

<!-- Page Content -->
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

<div id="check_out_failed" style="display:none">
    <div class="container" style="text-align: center;"> 
<div class="row" style="margin: 0;justify-content: center;">
    <div class="col col-sm-12 col-md-6 col-lg-4 col-xl-4" style="padding: 0;margin-bottom:1em">
      <div style="margin-top: 2em;">
        <img src="<?=base_url()?>assets/img/logo-tempo-transparent.png" class="card-img-top" style="width: 8rem;height: auto">
      </div>    
      <h2 style="margin-top: 0.6em;font-family: league-gothic">TEMPO PAVILION</h2> 
      <p style="font-weight: normal;font-size: 1rem;margin-top: 1.6rem;" id="text_failed"></p>            
    </div>
</div>  
</div>
    </div>

<div id="check_out_entry" style="display: none;">
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
  <h3 class="mt-4" style="font-weight: bold;">Check-Out Entry</h3>
  <hr style="border-color: black">
  <p style="color: #717171;font-size: 0.85rem">Please enter your phone number to check-out<br>
  Silahkan masukkan nomor handphone anda untuk check-out</p>  
  <form role="form" name="form">
    <div class="row" style="margin: 0;justify-content: center;">
      <div class="col col-md-7 col-lg-5 col-xl-4">      
        <input type="tel" id="phone_number" class="form-control" autocomplete="off" style="margin-bottom: 1rem;padding-left:99px !important" required>        
        <a href="javascript:void(0)" onclick="submitform()" class="btn" style="background-color: #085476;color: white;width: 100%">Check - Out <i class="fa fa-sign-out" style="margin-left: 2%"></i></a>
      </div>
    </div>        
  </form>      
</div>
</div>
<!-- /.container -->	
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
	</body>
	<script>
	function alignModal(){
        var modalDialog = $(this).find(".modal-dialog");
        /* Applying the top margin on modal dialog to align it vertically center */
        modalDialog.css("margin-top", Math.max(0, ($(window).height() - modalDialog.height()) / 2));
    }
    // Align modal when it is displayed
    $(".modal").on("shown.bs.modal", alignModal);
    
    // Align modal when user resize the window
    $(window).on("resize", function(){
        $(".modal:visible").each(alignModal);
    }); 

    var phone_number = document.querySelector("#phone_number");
    window.intlTelInput(phone_number, {     
      preferredCountries: ['ID'],
      separateDialCode: true,   
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@15.0.1/build/js/utils.js",
    });     
    
function showLoading(){              
              $('#modalLoading').modal({backdrop: 'static', keyboard: false});
            };

    function submitform() {
    var itiPhoneNumber = window.intlTelInputGlobals.getInstance(phone_number);         
      if(!itiPhoneNumber.isValidNumber()){      
          swal("Sorry", "The Phone Number format you entered is incorrect", "error").then((value) => {
      $("#phone_number").focus();
      });
     }
      else {
    swal({
          title: "Are you sure you want to check out ?",          
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
          if (willDelete) {           
        var phoneNumber = itiPhoneNumber.getNumber(); 
        showLoading();    
            $('#modalLoading').on('shown.bs.modal', function (e) {
              $.ajax({
                    url : "<?=base_url('customer/check_phone_checkout')?>",
                    type: "POST",
                    data: {phone_number : phoneNumber},
                    dataType: "json",
                    success: function(data)
                    {
                      if(data.is_valid == true){
                        $("#check_out_entry").hide();              
              $("#date_checkout").text(data.checkout_date);
              $("#time_checkout").text(data.checkout_time);                          
                      $("#check_out_success").show();                    
                      $("#modalLoading").modal('hide');
                      }else{
                        $("#text_failed").text("We are sorry we cannot process your check-out. You need to check-in first to check-out. Please check-in first. Thank you");
                        $("#check_out_entry").hide();
                        $("#check_out_failed").show();
                        $("#modalLoading").modal('hide');
                      }                                                               
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                      $("#modalLoading").modal('hide');
                        console.log(errorThrown);                        
                    }
                });
    })
                             
  }          
        });  
        }    
    }
	</script>
</html>
