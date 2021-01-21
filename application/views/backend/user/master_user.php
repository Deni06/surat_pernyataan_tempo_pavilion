<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />
    <link rel="apple-touch-icon-precomposed" href="<?php echo base_url('/assets/img/logo.png');?>" />
    <meta name="msapplication-TileImage" content="<?php echo base_url('/assets/img/logo.png');?>" />
    <title>Master User - Tempo Pavilion</title>
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
<body>
<div id="container" class="effect mainnav-lg">

    <!--NAVBAR-->
    <!--===================================================-->
    <?php
    $this->load->view('backend/layout/header');
    $user_access = $this->user_library->show_user_access();
                        if($user_access != null && $user_access != ""){                                                        
                $add_access = strpos($user_access, ';2;');
                $edit_access = strpos($user_access, ';3;');
                $delete_access = strpos($user_access, ';4;');                
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
                        <h3 class="panel-title"><b>User</b></h3>
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
                        <button style="background: #455a64;font-family:montserrat" class="btn btn-primary btn-labeled fa fa-plus" onclick="location.href='<?=site_url('admin/user/add')?>'">ADD NEW</button>                         
                            <?php } ?>
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
                                <th style="text-align:center">Username</th>  
                                <th style="text-align:center">Fullname</th>  
                                <th style="text-align:center">Alamat</th>                                                                                              
                                <th style="text-align:center">Handphone</th>                                
                                <th style="text-align:center">Email</th>
                                <th width="7%"></th>     
                                <th width="7%"></th>
                                <th width="7%"></th>                            
                            </tr>
                            </thead>
                          
                             <tbody>
                             <?php                                     
                                    foreach($users as $u):                                     
                                ?>
                                <tr style="font-size:1.1em; text-align:center">                                 
                                <td><?php echo $u['user_name']; ?></td>
                                <td><?php echo $u['usr_fullname']; ?></td>
		                            <td><?php echo $u['usr_address']; ?></td>		                            
		                            <td><?php echo $u['usr_phone']; ?></td>		                            
		                            <td><?php echo $u['usr_email']; ?></td>
                                      <td><a onclick='View_user("<?=$u['user_id']?>")' class="btn btn-info btn-anim btn-large" style="color:#fff !important;"><i class="fa fa-eye font-size-11 pt-8-im"></i></a></td>
                                        <td>
                                        <?php    
                if($edit_access !== false){
                ?>
            <a onclick="location.href='<?=site_url('admin/user/edit/'.$u['user_id'])?>'" class="btn btn-primary btn-anim btn-large" style="color:#fff !important;"><i class="fa fa-pencil font-size-11 pt-8-im"></i></a>
                <?php } ?>              
                                        </td>
                                        <td>
                                        <?php    
                if($delete_access !== false){
                ?>
            <a onclick='delete_item("<?=$u['user_id']?>")' class="btn btn-danger btn-anim btn-large" style="color:#fff !important;"><i class="fa fa-trash font-size-11 pt-8-im"></i></a>
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
              window.location.href = "<?php echo site_url('admin/User/remove/')?>/"+id;
            }
        });
    }
  function View_user(x){
        window.location.href = "<?php echo site_url('admin/user/View/')?>/"+x;
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