<?php 
if($this->input->post('is_submitted')){   
        $pro_cat            = set_value('subcategory');     
        $cat_parent         = set_value('category');
}else{
        $pro_cat            = null;     
        $cat_parent         = null;
}
    
?>


<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Add Location - Tempo Pavilion</title>
    <link href= "<?=base_url('assets/css/bootstrap.min.css')?>" rel="stylesheet">
    <link href= "<?=base_url('assets/css/nifty.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/plugins/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/plugins/switchery/switchery.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/plugins/bootstrap-select/bootstrap-select.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/css/nifty-demo.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/plugins/pace/pace.min.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/plugins/datatables/media/css/dataTables.bootstrap.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css')?>" rel="stylesheet">
    <link href="<?=base_url('assets/sweetalert-master/dist/sweetalert.css')?>" rel="stylesheet">
    <script src="<?=base_url('assets/plugins/pace/pace.min.js')?>"></script>
    <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/ui/trumbowyg.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/ui/trumbowyg.specialchars.min.css')?>">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>     
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />
    <style>
    body{
        font-family: montserrat;        
    }
    html, body, #container, .boxed, #content-container {
      height:100%;
    }
    .hidden-box {
  position: absolute;
  top: -9999px;
  left: -9999px;
  appearance: none;
  opacity: 0;    
}
.check--label {
  font-size: 20px;
  margin: 0;
  display: flex;
  flex-direction: row;
  flex-wrap: nowrap;
  justify-content: flex-start;
  align-items: center;
}
.check--label-box {
  display: flex;
  align-self: center;
  position: relative;
  height: 20px;
  width: 20px;
  margin: 0 10px;
  border: 2px solid #3498db;
  border-radius: 2px;
  cursor: pointer;
}
.check--label-text {
  display: flex;
  align-self: center;
  position: relative;
  cursor: pointer;
  padding: 20px;
  border-left: 1px solid #ecf0f1;
}
.check--label-text:after {
  content: '';
  display: block;
  width: 0%;
  height: 2px;
  background-color: #000;
  position: absolute;
  top: 50%;
  left: 7.5%;
  transform: translateY(-50%);
  transition: width 100ms ease-in-out;
}

.hidden-box:checked + .check--label .check--label-box {
  background-color: #3498db;
}
.hidden-box:checked + .check--label .check--label-box:after {
  content: '';
  display: block;
  position: absolute;  
  left: 0.29em;
  width: 40%;
  height: 75%;
  border: solid #fff;
  border-width: 0 2.4px 2.4px 0;
  transform: rotate(45deg);
}
.hidden-box:checked + .check--label .check--label-text:after {
  width: 85%;
}

  label{
      font-size: 1.1em;
  }

.cntr {
  position: absolute;
  top: calc(50% - 10px);
  left: 0;
  width: 100%;
  text-align: center;
}

c {
    font-size: 1.1em;
    font-weight: normal;
}

d {
    font-size: 1.3em;
    font-weight: bold;
}
hr{
    border: 0;
    margin: 0;
    height: 0.1vw;    
    background-color: #eee;
}
    </style>

</head>
<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');
    ?>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

        <!--CONTENT CONTAINER-->
        <!--===================================================-->
        <div id="content-container">

      <div id="page-content">
                <div class="panel panel-primary"> 
                    <div class="panel-heading" style="background: #455a64">
                        <h3 class="panel-title"><b>Add Location QR Code</b></h3>
                    </div>
                    <div class="panel-body">
                    <form role="form" method="POST" action="<?php echo site_url('admin/location/add'); ?>" onsubmit="return submitform()">
                        <div class="row">
                <!-- body items -->

                <div class="col-md-12">
                    <div class="panel panel-default">
                       
                        <div class="panel-body">
                            <?php 
                            if($this->session->flashdata('error') != null){
                              echo '<div class="alert alert-danger">
                              <p style="color:#ffffff;font-size:1.2em">'.$this->session->flashdata('error').'</p>
                              </div>';
                            }
                            if($this->session->flashdata('success') != null){
                              echo '<div class="alert alert-success">
                              <p style="color:#ffffff;font-size:1.2em">'.$this->session->flashdata('success').'</p>
                              </div>';
                            }
                          ?>
                            <div class="row">
                                 <div class="col-md-7">
                            <div class="form-group" style="margin-bottom:3%;">
                                <label for="fullname"><b>Location Name</b></label>
                                <input type="text" name="nama_lokasi" placeholder="Location Name" value="<?php echo $this->input->post('nama_lokasi'); ?>" class="form-control" id="usr_fullname" required/>
                                </div>                                                                                
                                 <div class="form-group" style="margin-bottom:5%;">
                                <label for="fullname" style="margin-bottom:2%"><b>Generate QR Code For :</b></label>

                                <div class="row" style="margin-left: 0">
                                  <div class="col-md-4" style="padding:0">
                                    <input type="checkbox" class="hidden-box" id="is_check_in" name="generate_checkin" value="1" checked/>
                  <label for="is_check_in" class="check--label">
      <span class="check--label-box" style="margin-left:0;"></span> <label style="font-size:0.7em;margin-bottom:0"><b>Check In</b></label>
    </label>                    
                                  </div>     

                                  <div class="col-md-4" style="padding:0">
                                    <input type="checkbox" class="hidden-box" id="second" name="generate_checkout" value="1" checked/>
                  <label for="second" class="check--label">
      <span class="check--label-box" style="margin-left:0;"></span> <label style="font-size:0.7em;margin-bottom:0"><b>Check Out</b></label>
    </label>                    
                                  </div>                             
    

    <input type="checkbox" class="hidden-box" id="is_emergency_gate" name="is_emergency_gate" value="1"/>
                  <label for="is_emergency_gate" class="check--label">
      <span class="check--label-box" style="margin-left:0;"></span> <label style="font-size:0.7em;margin-bottom:0"><b>Is Emergency Gate</b></label>
    </label>                    
                                </div>                                          
    
                                </div>                                                                                                                                       

                                    <button type="submit" name="submit" style="background: #455a64; color:white;font-family:montserrat; margin-right: 20px" class="btn col-md-5">  GENERATE QR CODE  <i class="fa fa-save" ></i></button>
                                        <a style="border: 2px solid #455a64;font-family:montserrat" class="btn col-md-5" onclick="location.href='<?=site_url('admin/location/')?>'">  CANCEL  <i class="fa fa-ban"></i></a>
                            </div>
                            


                           
                        </div><!-- /..panel-body -->
                    </div><!-- /..panel panel-default -->
                </div>

            </div>
</form>
                    </div>
                </div>
                <!--===================================================-->
                <!--<!--End page content-->

            </div>
        </div>

        <div class="modal fade" id="modalLoading" role="dialog">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-body" style="text-align:center">
                <p>Please wait while the data are being saved...</p>
                <i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i>
              </div>
            </div>
          </div>
        </div>
        <!--===================================================-->
        <!--END CONTENT CONTAINER-->

        <?php
        $this->load->view('backend/layout/sidebar');
        ?>

    </div>



    <!-- FOOTER -->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/footer');
    ?>
    <!--===================================================-->
    <!-- END FOOTER -->


    <!-- SCROLL TOP BUTTON -->
    <!--===================================================-->
    <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
    <!--===================================================-->



</div>
<!--===================================================-->
<!-- END OF CONTAINER -->
<!--JAVASCRIPT-->
<!--=================================================-->




<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>


<!--Fast Click [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/fast-click/fastclick.min.js')?>"></script>


<!--Nifty Admin [ RECOMMENDED ]-->
<script src="<?=base_url('assets/js/nifty.min.js')?>"></script>


<!--Switchery [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/switchery/switchery.min.js')?>"></script>


<!--Bootstrap Select [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/bootstrap-select/bootstrap-select.min.js')?>"></script>
<!--Bootstrap Timepicker [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/bootstrap-timepicker/bootstrap-timepicker.min.js')?>"></script>


<!--Bootstrap Datepicker [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js')?>"></script>

<!--Demo script [ DEMONSTRATION ]-->
<!--DataTables [ OPTIONAL ]-->
<script src="<?=base_url('assets/plugins/datatables/media/js/jquery.dataTables.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables/media/js/dataTables.bootstrap.js')?>"></script>
<script src="<?=base_url('assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js')?>"></script>
<!--Demo script [ DEMONSTRATION ]-->
<script src="<?=base_url('assets/js/demo/nifty-demo.min.js')?>"></script>
<script src="<?php echo base_url('/assets/js/register-form.js');?>"></script>
<!--DataTables Sample [ SAMPLE ]-->
<script src="<?=base_url('assets/js/demo/tables-datatables.js')?>"></script>

<script src="<?=base_url('assets/trumbowyg/dist/trumbowyg.min.js')?>"></script>          
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/colors/trumbowyg.colors.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/lineheight/trumbowyg.lineheight.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/trumbowyg.specialchars.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/upload/trumbowyg.upload.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/fontsize/trumbowyg.fontsize.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/resizimg/resolveconflict-resizable.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/resizimg/resize.with.canvas.min.js')?>"></script>
          <script src="<?=base_url('assets/trumbowyg/dist/plugins/resizimg/trumbowyg.resizimg.min.js')?>"></script>
          <script src="<?=base_url('assets/jquery-resizable/dist/jquery-resizable.min.js')?>"></script>

<script>

    function submitform() {    
      var f = document.getElementsByTagName('form')[0];  
      if(f.checkValidity()) {        
        if($('#is_emergency_gate').is(":checked") && !$('#is_check_in').is(":checked")){
          swal("Sorry,", "Emergency Gate is only used for check-in", "error");
          return false;
        }else{          
          return true;
        }        
      }      
    } 

    $(document).ready(function(){
    var interval = setInterval(function () {
            $.ajax({
                    url : "<?php echo site_url('admin/my_task/count_my_task'); ?>",
                    type: "GET",                    
                    dataType: "json",
                    success: function(data)
                    {                                                            
                      $("#badge_my_task").text(data.count);
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {                              
                      console.log(errorThrown);                        
                    }
                });
        },1000);
    });   
    
    </script>

</body>
</html>