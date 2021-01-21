<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Location - Tempo Pavilion</title>
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
    </style>
<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');
    $location_access = $this->user_library->show_location_access();
                        if($location_access != null && $location_access != ""){                                                        
                $add_access = strpos($location_access, ';2;');
                $edit_access = strpos($location_access, ';3;');
                $delete_access = strpos($location_access, ';4;');                
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
                        <h3 class="panel-title"><b>Location</b></h3>
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

                            if($add_access !== false){
                          ?>
                        <button style="background: #455a64;font-family:montserrat" class="btn btn-primary btn-labeled fa fa-plus" onclick="location.href='<?=site_url('admin/location/add')?>'">ADD NEW</button>                         
                            <?php } ?>
                    </div>  
                    <div>                        
                    </div>
                    
                    <div class="panel-body">
                    <div class=" table-responsive">
                    <table id="demo-dt-basic" class="table table-striped table-responsive table-bordered" cellspacing="0" width="100%">
                            <thead style="font-size:1em">
                            <tr style="background: #455a64; color:white">                         
                                <th style="text-align:center">Location Name</th>  
                                <th style="text-align:center">QR Code Check In</th>
                                <th style="text-align:center">QR Code Check Out</th>
                                <th style="text-align:center">Is Emergency Gate</th>
                                <th width="7%"></th>     
                                <th width="7%"></th>
                                <th width="7%"></th>                            
                            </tr>
                            </thead>
                          
                             <tbody>
                             <?php                                     
                                    foreach($lokasi as $l):                                     
                                ?>
                                <tr style="font-size:1.1em; text-align:center">                                 
                                <td style="vertical-align:middle"><?php echo $l['nama_lokasi']; ?></td>
		                            <td>
                                <?php 
                                if($l['image_checkin'] != ""){ ?>
                                  <img style="width: 100px;" src="<?php echo $l['image_checkin'];?>">
                                <?php } ?>                                
                                </td>                                
                                <td>
                                <?php 
                                if($l['image_checkout'] != ""){ ?>
                                  <img style="width: 100px;" src="<?php echo $l['image_checkout'];?>">
                                <?php } ?>                                
                                </td>                                
                                <td style="vertical-align:middle">
                                  <?php
                                  $is_emergency_gate = "No";
                                  if($l['is_emergency_gate'] == 1){
                                    $is_emergency_gate = "Yes";
                                  }

                                  echo $is_emergency_gate;
                                    ?>
                                </td>
                                      <td style="vertical-align:middle">                                      
                                        <a onclick='View_user("<?=$l['lokasi_id']?>")' class="btn btn-info btn-anim btn-large" style="color:#fff !important;"><i class="fa fa-eye font-size-11 pt-8-im"></i></a>                
                                      </td>
                                        <td style="vertical-align:middle">
                                        <?php    
                if($edit_access !== false){
                ?>
                                          <a onclick="location.href='<?=site_url('admin/location/update/'.$l['lokasi_id'])?>'" class="btn btn-primary btn-anim btn-large" style="color:#fff !important;"><i class="fa fa-pencil font-size-11 pt-8-im"></i></a>
                                          <?php } ?>
                                        </td>
                                        <td style="vertical-align:middle">
                                        <?php    
                if($delete_access !== false){
                ?>
                                          <a onclick='delete_item("<?=$l['lokasi_id']?>")' class="btn btn-danger btn-anim btn-large" style="color:#fff !important;"><i class="fa fa-trash font-size-11 pt-8-im"></i></a>
                <?php } ?>
                                        </td>                               
                                    </tr>
                                
                            <?php endforeach;
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
    function delete_item(id){
        swal({
          title: "Are you sure?",
          text: "You can't undo this action.",
          icon: "warning",
          buttons: true,
          dangerMode: true,
        })
        .then((willDelete) => {
            if (willDelete) {
              window.location.href = "<?php echo site_url('admin/location/remove/')?>/"+id;
            }
        });
    }
  function View_user(x){
        window.location.href = "<?php echo site_url('admin/location/View/')?>/"+x;
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