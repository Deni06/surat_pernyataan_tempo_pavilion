<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Recap Visitor - Tempo Pavilion</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
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
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />
    <script src="<?=base_url('assets/plugins/pace/pace.min.js')?>"></script>
    <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery-2.1.1.min.js')?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script> 
    <script src='https://kit.fontawesome.com/a076d05399.js'></script> 
    <style>
    th, td{
    font-family: montserrat;
}
    </style>
</head>
<style>
    body{
        font-family: montserrat;
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
    border: 4px dashed #455a64;
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
    max-height: 200px;
    max-width: 200px;
    margin: auto;
    padding: 20px;
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

  label{
      font-size: 1.1em;
  }

  .radio {
  position: relative;
  cursor: pointer;
  line-height: 20px;
  font-size: 1em;
  margin: 15px;
}
.radio .label {
  position: relative;
  display: block;
  float: left;
  margin-right: 10px;
  width: 20px;
  height: 20px;
  border: 2px solid #c8ccd4;
  border-radius: 100%;
  -webkit-tap-highlight-color: transparent;
}
.radio .label:after {
  content: '';
  position: absolute;
  top: 3px;
  left: 3px;
  width: 10px;
  height: 10px;
  border-radius: 100%;
  background: #225cff;
  transform: scale(0);
  transition: all 0.2s ease;
  opacity: 0.08;
  pointer-events: none;
}
.radio:hover .label:after {
  transform: scale(3.6);
}
input[type="radio"]:checked + .label {
  border-color: #225cff;
}
input[type="radio"]:checked + .label:after {
  transform: scale(1);
  transition: all 0.2s cubic-bezier(0.35, 0.9, 0.4, 0.9);
  opacity: 1;
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
.option-input {
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  position: relative;
  top: 13.33333px;
  right: 0;
  bottom: 0;
  left: 0;
  height: 30px;
  width: 30px;
  transition: all 0.15s ease-out 0s;
  background: #cbd1d8;
  border: none;
  color: #fff;
  cursor: pointer;
  display: inline-block;
  margin-right: 0.5rem;
  outline: none;
  position: relative;
  z-index: 1000;
}
.option-input:hover {
  background: #9faab7;
}
.option-input:checked {
  background: #40e0d0;
}
.option-input:checked::before {
  height: 30px;
  width: 30px;
  position: absolute;
  content: '✔';
  display: inline-block;
  font-size: 26.66667px;
  text-align: center;
  line-height: 30px;
}
.option-input:checked::after {
  -webkit-animation: click-wave 0.65s;
  -moz-animation: click-wave 0.65s;
  animation: click-wave 0.65s;
  background: #40e0d0;
  content: '';
  display: block;
  position: relative;
  z-index: 100;
}

tbody .odd .btn-marking .vip-button{
  margin-bottom:4px;
}
    </style>
<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');
    $recap_visitor_access = $this->user_library->show_recap_visitor_access();
                        if($recap_visitor_access != null && $recap_visitor_access != ""){                                                        
                $mark_as_vip = strpos($recap_visitor_access, ';2;');
                $unmark_access = strpos($recap_visitor_access, ';3;');                
                $mark_as_blacklist = strpos($recap_visitor_access, ';4;');
                        }
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
                        <h3 class="panel-title"><b>Recap Visitor</b></h3>
                    </div>
                    <div style="margin-left: 2%;margin-top: 2%">
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
                    </div>  
                    <div>
                        <!-- <div class="panel-body col-md-4">
                            <input type="text" class="form-control col-md-pull-1" style="height:45px;"/>
                        </div>
                        <div class="panel-body col-md-offset-5 col-md-3">
                            <button type="button" class="btn btn-danger col-md-12" style="height:45px;">DELETE SELECTED</button>
                         </div> -->
                    </div>
                    
                    <div class="panel-body">
                    <div class=" table-responsive">
                    <table id="demo-dt-basic" class="table table-striped table-responsive table-bordered" cellspacing="0" width="100%">
                            <thead style="font-size:1em">
                            <tr style="background: #455a64; color:white">                         
                                <th style="text-align:center;vertical-align:middle">Nomor Handphone</th>  
                                <th style="text-align:center;vertical-align:middle">Customer Name</th>
                                <th style="text-align:center;vertical-align:middle">Official ID Number</th>
                                <th style="text-align:center;vertical-align:middle">Email</th>                                
                                <th style="text-align:center;vertical-align:middle">Company</th>
                                <th style="text-align:center;vertical-align:middle">Address</th>                                
                                <th style="text-align:center;vertical-align:middle">Last Visit Date</th>                                
                                <th style="text-align:center;vertical-align:middle">Last Check Out Date</th>
                                <th style="text-align:center;vertical-align:middle">Last Visit Destination</th>
                                <th style="text-align:center;vertical-align:middle">Last Visit Floor</th>
                                <th style="text-align:center;vertical-align:middle">Status Mark</th>
                                <th width="7%"></th>                                     
                                <th width="7%"></th>                                                          
                            </tr>
                            </thead>
                          
                             <tbody>
                             <?php           
                             if($surat != FALSE){                          
                                    foreach($surat->result() as $s):                                     
                                ?>
                                <tr style="font-size:1.1em; text-align:center">                                 
                                <td style="vertical-align:middle"><?php echo $s->phone_number; ?></td>		                            
                                <td style="vertical-align:middle"><?php echo $s->name; ?></td>		                            
                                <td style="vertical-align:middle"><?php echo $s->official_id_number; ?></td>
                                <td style="vertical-align:middle"><?php echo $s->email; ?></td>		                                                            
                                <td style="vertical-align:middle"><?php echo $s->company; ?></td>	
                                <td style="vertical-align:middle"><?php echo $s->address; ?></td>		                                                                                          
                                <td style="vertical-align:middle"><?php echo $s->last_checkin; ?></td>		                      
                                <td style="vertical-align:middle"><?php echo $s->last_checkout; ?></td>
                                <td style="vertical-align:middle"><?php echo $s->destination_company; ?></td>	
                                <?php
                                $lastFloor = "";
                                switch ($s->floor) {
                                  case 2:
                                  $lastFloor = "1FL";	
                                    break;
                                  case 3:
                                  $lastFloor = "2FL";	
                                    break;
                                  case 4:
                                  $lastFloor = "3FL";	
                                    break;					  
                                  case 5:
                                  $lastFloor = "4FL";	
                                    break;					    
                                  case 6:
                                  $lastFloor = "5FL";	
                                    break;					    
                                  case 7:
                                  $lastFloor = "6FL";	
                                    break;					    
                                  case 8:
                                  $lastFloor = "7FL";	
                                    break;					    
                                  case 9:
                                  $lastFloor = "8FL";	
                                    break;					    					
                                  case 10:
                                  $lastFloor = "9FL";	
                                    break;					    					
                                  case 11:
                                  $lastFloor = "10FL";	
                                    break;					                                      			    
                                  default:
                                  $lastFloor = "GF";	
                                  }
                                  ?>	                      
                                <td style="vertical-align:middle"><?php echo $lastFloor; ?></td>
                                <?php
                                $statusMark = "Ordinary";
                                $colorStatus = "";
                                if($s->status_mark == 1){ 
                                  $statusMark = "VIP";
                                  $colorStatus = "color:#D4AF37;";
                                }else if($s->status_mark == 2){ 
                                  $statusMark = "Blacklist";
                                  $colorStatus = "color:red;";
                                } ?>                                      
                                <td style="vertical-align:middle;font-weight:800;<?=$colorStatus?>"><?=$statusMark?></td>
                                <td style="vertical-align:middle"><a onclick='View_surat("<?=str_replace("+","",$s->phone_number)?>")' 
                                class="btn btn-info btn-anim btn-large" style="color:#fff !important;">View History</a></td>                                        
                                <td style="vertical-align:middle" class="btn-marking">
                                <?php 
                                if($s->status_mark == "" && $mark_as_vip !== false){ ?>
                                <a onclick='update_item("<?=$s->phone_number?>",1)'
                                class="btn btn-info btn-anim btn-large vip-button" style="color:#fff !important;background-color:#D4AF37;border-color:#D4AF37"><i class="fas fa-crown" style="margin-right: 6%;"></i>Mark As VIP</a>                                
                                <?php } 
                                if($s->status_mark == "" && $mark_as_blacklist !== false){ ?>                                  
                                  <a onclick='update_item("<?=$s->phone_number?>",2)'
                                  class="btn btn-info btn-anim btn-large" style="color:#fff !important;background-color:black;border-color:black;">
                                  <i class="fa fa-ban" style="margin-right: 4%;"></i>Mark As Blacklist</a>
                                  <?php } 
                                if($s->status_mark != "" && $unmark_access !== false){ ?>
                                  <a onclick='update_item("<?=$s->phone_number?>",0)' class="btn btn-danger btn-anim btn-large" style="color:#fff !important;"><i class="fa fa-bookmark" style="margin-right: 7%;"></i>Unmark</a>
                                <?php }
                                 ?>
                                </td>                                                                                                             
                                    </tr>
                                
                            <?php endforeach;
                             }
                            ?>
                             
                          
                            </tbody>
                    </table>
                    </div>                    
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
                      <p>Please wait...</p>
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




<!--BootstrapJS [ RECOMMENDED ]-->
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
<!--DataTables Sample [ SAMPLE ]-->
<script src="<?=base_url('assets/js/demo/tables-datatables.js')?>"></script>

<script>    
  function View_surat(x){
        window.location.href = "<?php echo site_url('admin/recap_visitor/view_history/')?>/"+x;
    }   

  function update_item(phone_number, status=0){
        action = "Unmark";        
        actionSuccess = "Unmarked";        
        actionFailed = "Unmarking Visitor";
        if(status == 2){
            action = "Mark As Blacklist";
            actionSuccess = "Marked As Blacklist";
            actionFailed = "Marking Visitor As Blacklist";
        }else if(status == 1){
            action = "Mark As VIP";
            actionSuccess = "Marked As VIP";
            actionFailed = "Marking Visitor As VIP";
        }

        swal({
          title: "Are you sure To "+action+" this Visitor ?",          
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
                $('#modalLoading').modal('show');
                $('#modalLoading').data('bs.modal').options.backdrop = 'static';
                $.ajax({
                    url : "<?php echo site_url('admin/recap_visitor/change_mark/')?>",
                    data: {phone_number : phone_number, status : status},                    
                    type: "POST",
                    dataType: 'json',
                    success: function(data)
                    {                        
                        if(data.error != "")   {
                            $('#modalLoading').modal('hide');
					swal(data.error, data.error_text, "error").then((value) => {location.reload();});
				}else {	
                        $('#modalLoading').modal('hide');
                        swal({title: "Visitor has been "+actionSuccess+" !", text: data.success_text, icon: "success",}).then((value) => {location.reload();});
                }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#modalLoading').modal('hide');
                        console.log(errorThrown);
                        swal("Error to "+actionFailed+" !").then((value) => {location.reload();});
                    }
                });
            }
        });
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