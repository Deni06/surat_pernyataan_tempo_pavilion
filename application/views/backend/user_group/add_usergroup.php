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
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/assets/img/logo.png');?>" />
    <meta name="msapplication-TileImage" content="<?php echo base_url('/assets/img/logo.png');?>" />
    <title>Add User Group - Tempo Pavilion</title>
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
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
    <style>
    body{
        font-family: montserrat;
    }      

.control-group {
  display: inline-block;  
  height: 210px;
  margin: 10px;
}
.control {  
  position: relative;
  padding-left: 30px;
  margin-bottom: 15px;
  cursor: pointer;
  font-size: 1.1em;
}
.control input {
  position: absolute;
  z-index: -1;
  opacity: 0;
}
.control__indicator {
  position: absolute;
  top: 2px;
  left: 0;
  height: 20px;
  width: 20px;
  background: #e6e6e6;
}
.control:hover input ~ .control__indicator,
.control input:focus ~ .control__indicator {
  background: #ccc;
}
.control input:checked ~ .control__indicator {
  background: #2aa1c0;
}
.control:hover input:not([disabled]):checked ~ .control__indicator,
.control input:checked:focus ~ .control__indicator {
  background: #0e647d;
}
.control input:disabled ~ .control__indicator {
  background: #e6e6e6;
  opacity: 0.6;
  pointer-events: none;
}
.control__indicator:after {
  content: '';
  position: absolute;
  display: none;
}
.control input:checked ~ .control__indicator:after {
  display: block;
}
.control--checkbox .control__indicator:after {
  left: 8px;
  top: 4px;
  width: 6px;
  height: 10px;
  border: solid #fff;
  border-width: 0 2px 2px 0;
  transform: rotate(45deg);
}
.control--checkbox input:disabled ~ .control__indicator:after {
  border-color: #7b7b7b;
}
label{
      font-size: 1.1em;
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
                        <h3 class="panel-title"><b>Add User Group</b></h3>
                    </div>
                    <div class="panel-body">
                    <form role="form" method="POST" action="<?php echo site_url('admin/user_group/add'); ?>" onsubmit="return checkSubmit()">
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
                            <div class="form-group">
                                <label for="fullname"><b>User Group Name</b></label>
                                <input type="text" name="user_group_name" placeholder="User Group Name" value="<?php echo $this->input->post('user_group_name'); ?>" class="form-control" id="usr_fullname" required/>
                                </div> 
                                </div>
                                </div>

                                <div class="row">
                                 <div class="col-md-9">
                                <div style="margin-bottom:4%;margin-top:2%"><h4>Previledge</h4></div>                                                                
                                <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">Location</label>		
    <div class="col-md-9" style="padding-left:0">
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="locations[]" class="form-check-input my-check" id="location1" value="1" onclick="location_checkbox_robot(true)">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Add
    <input type="checkbox" name="locations[]" class="form-check-input my-check" id="location2" value="2" onclick="location_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="locations[]" class="form-check-input my-check" id="location3" value="3" onclick="location_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Delete
    <input type="checkbox" name="locations[]" class="form-check-input my-check" id="location4" value="4" onclick="location_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>    
    </div>
	</div> 

                               <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">User</label>		
    <div class="col-md-9" style="padding-left:0">  
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user1" value="1" onclick="user_checkbox_robot(true)">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Add
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user2" value="2" onclick="user_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user3" value="3" onclick="user_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox"><i class="input-helper"></i> Delete
    <input type="checkbox" name="users[]" class="form-check-input my-check" id="user4" value="4" onclick="user_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    </div>
	</div>	 

                                <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">User Group</label>		
    <div class="col-md-9" style="padding-left:0">
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group1" value="1" onclick="user_group_checkbox_robot(true)">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Add
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group2" value="2" onclick="user_group_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group3" value="3" onclick="user_group_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox"><i class="input-helper"></i> Delete
    <input type="checkbox" name="user_groups[]" class="form-check-input my-check" id="user_group4" value="4" onclick="user_group_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    </div>
  </div>
  
  <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">Recap Visitor</label>		
    <div class="col-md-9" style="padding-left:0">
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="recap_visitors[]" class="form-check-input my-check" id="recap_visitor1" value="1" onclick="recap_visitor_checkbox_robot(true)">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Mark As VIP
    <input type="checkbox" name="recap_visitors[]" class="form-check-input my-check" id="recap_visitor2" value="2" onclick="recap_visitor_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Mark As Blacklist
    <input type="checkbox" name="recap_visitors[]" class="form-check-input my-check" id="recap_visitor4" value="4" onclick="recap_visitor_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Unmark Visitor
    <input type="checkbox" name="recap_visitors[]" class="form-check-input my-check" id="recap_visitor3" value="3" onclick="recap_visitor_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>    
    </div>
	</div>

                                <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">Setting Background</label>		
    <div class="col-md-9" style="padding-left:0">
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="backgrounds[]" class="form-check-input my-check" id="background1" value="1" onclick="background_checkbox_robot(true)">
      <div class="control__indicator"></div>
    </label>    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Edit
    <input type="checkbox" name="backgrounds[]" class="form-check-input my-check" id="background2" value="2" onclick="background_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>   
    </div>
    </div>
    
    <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">Declaration Form</label>		
      <div class="col-md-9" style="padding-left:0">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="declaration_form" class="form-check-input my-check" id="declaration_form" value="1">
      <div class="control__indicator"></div>
    </label>        
    </div>
    </div>
    
    <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">Report</label>		
      <div class="col-md-9" style="padding-left:0">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="report" class="form-check-input my-check" id="report" value="1">
      <div class="control__indicator"></div>
    </label>        
    </div>
    </div>
    
    <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">My Task</label>		
      <div class="col-md-9" style="padding-left:0">    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> Manage
    <input type="checkbox" name="my_task" class="form-check-input my-check" id="my_task" value="1" onclick="mytask_checkbox_robot()">
      <div class="control__indicator"></div>
    </label>        
    </div>
    </div>

    <div class="form-group" style="display:none;overflow:auto;" id="location_my_task_div">
    <label for="cat_name" class="col-md-3 control-label">Location My Task</label>		
    <div class="col-md-9" style="padding-left:0">    
    <?php 
    if(count($lokasi) > 0){
      foreach($lokasi as $l){ ?>      		        
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> <?=$l['nama_lokasi']?>
    <input type="checkbox" name="location_my_task[]" class="form-check-input my-check" value="<?=$l['lokasi_id']?>">
      <div class="control__indicator"></div>
    </label>                
    <?php }
    }else{ ?>      		    
    <label class="control control--checkbox" style="padding-left:0">No Location Available</label>            
    <?php }
    ?>    
    </div>    
    </div>

    <div class="form-group" style="overflow:auto;">
		<label for="cat_name" class="col-md-3 control-label">Visitor In Building</label>		
        <div>    
    <label class="control control--checkbox" style="margin-right: 2%"><i class="input-helper"></i> View
    <input type="checkbox" name="visitor_in_building" class="form-check-input my-check" id="visitor_in_building" value="1">
      <div class="control__indicator"></div>
    </label>        
    </div>
    </div>

                                    <button type="submit" name="submit" style="background: #455a64; color:white;font-family:montserrat; margin-right: 20px" class="btn col-md-5">  SAVE  <i class="fa fa-save" ></i></button>
                                        <a style="border: 2px solid #455a64;font-family:montserrat" class="btn col-md-5" onclick="location.href='<?=site_url('admin/user_group/')?>'">  CANCEL  <i class="fa fa-ban"></i></a>
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

function location_checkbox_robot(isView=false){        
        if(isView == true){
            if(document.getElementById('location1').checked == false){
            $('#location2').checked = false;
            $('#location2').prop('checked', false);
            $('#location3').checked = false;
            $('#location3').prop('checked', false);            
            $('#location4').checked = false;
            $('#location4').prop('checked', false);                        
        }
        }else{
            if(document.getElementById('location2').checked == true || document.getElementById('location3').checked == true
        || document.getElementById('location4').checked == true){            
            $('#location1').checked = true;
            $('#location1').prop('checked', true);
        }
        }                
    }
    
    function user_checkbox_robot(isView=false){        
        if(isView == true){
            if(document.getElementById('user1').checked == false){
            $('#user2').checked = false;
            $('#user2').prop('checked', false);
            $('#user3').checked = false;
            $('#user3').prop('checked', false);            
            $('#user4').checked = false;
            $('#user4').prop('checked', false);                        
        }
        }else{
            if(document.getElementById('user2').checked == true || document.getElementById('user3').checked == true
        || document.getElementById('user4').checked == true){            
            $('#user1').checked = true;
            $('#user1').prop('checked', true);
        }
        }                
    }
    
    function user_group_checkbox_robot(isView=false){        
        if(isView == true){
            if(document.getElementById('user_group1').checked == false){
            $('#user_group2').checked = false;
            $('#user_group2').prop('checked', false);
            $('#user_group3').checked = false;
            $('#user_group3').prop('checked', false);            
            $('#user_group4').checked = false;
            $('#user_group4').prop('checked', false);                        
        }
        }else{
            if(document.getElementById('user_group2').checked == true || document.getElementById('user_group3').checked == true
        || document.getElementById('user_group4').checked == true){            
            $('#user_group1').checked = true;
            $('#user_group1').prop('checked', true);
        }
        }                
    }

    function recap_visitor_checkbox_robot(isView=false){        
        if(isView == true){
            if(document.getElementById('recap_visitor1').checked == false){
            $('#recap_visitor2').checked = false;
            $('#recap_visitor2').prop('checked', false);
            $('#recap_visitor3').checked = false;
            $('#recap_visitor3').prop('checked', false);                        
            $('#recap_visitor4').checked = false;
            $('#recap_visitor4').prop('checked', false);                        
        }
        }else{
            if(document.getElementById('recap_visitor2').checked == true 
            || document.getElementById('recap_visitor3').checked == true
            || document.getElementById('recap_visitor4').checked == true){            
            $('#recap_visitor1').checked = true;
            $('#recap_visitor1').prop('checked', true);
        }
        }                
    }
        
    function background_checkbox_robot(isView=false){        
        if(isView == true){
            if(document.getElementById('background1').checked == false){
            $('#background2').checked = false;
            $('#background2').prop('checked', false);            
        }
        }else{
            if(document.getElementById('background2').checked == true){            
            $('#background1').checked = true;
            $('#background1').prop('checked', true);
        }
        }                
    }

    function mytask_checkbox_robot(){
      if(document.getElementById('my_task').checked == true){
          $('#location_my_task_div').show();            
        }else{
          $('#location_my_task_div').hide();
        }        
    }

    function checkSubmit() {   
      if($("input[name='my_task']:checked").val() == 1){
        var names = [];
        $.each($("input[name='location_my_task[]']:checked"), function(){
                names.push($(this).val());
            });        
        
        if(names.length == 0){
          swal("Sorry", "You haven't select a location for the my task menu", "error");
          return false;
        }else{
          return true;
        }                
      }else{
        return true;
      }
              return false;
            };

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