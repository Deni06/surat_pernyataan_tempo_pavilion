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

    <script src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js')?>"></script>				
		<script src="<?php echo base_url('/assets/home/js/popper.min.js')?>"></script>		
		<script src="<?php echo base_url('/assets/home/js/bootstrap.min.js')?>"></script>	
		<script src="<?php echo base_url('/assets/js/html5-qrcode.min.js');?>"></script>			
    <script src="<?php echo base_url('/assets/home/js/fingerprint2.js');?>"></script>
    <script src="<?php echo base_url('/assets/home/js/fileSaver.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/home/js/html2canvas.min.js');?>"></script>

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
      <script>      

      var uuid = (new Fingerprint2()).getSync().fprint;      
      
      var location_id = "<?=$location->lokasi_id?>";      
      window.addEventListener("load", (event) => {  
          showLoading();              
                var addtask = "<?=base_url('customer/add_check_in')?>";                                
                  var request = $.ajax({
                url: addtask,
                type: "POST",
                data: {device_id : uuid, location_id : location_id},
                dataType: "json"
          });
    
          request.done(function(msg) {
              <?php $this->session->set_userdata("IS_REGISTER", 1) ?>
            window.location.href = "<?php echo site_url('customer/check_in')?>"+"/"+msg.character_checkin;
          });                   
                }); </script>                    

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
<!-- /.container -->		

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
    
function showLoading(){              
              $('#modalLoading').modal({backdrop: 'static', keyboard: false});
            };   
    </script>
	</body>  
</html>
