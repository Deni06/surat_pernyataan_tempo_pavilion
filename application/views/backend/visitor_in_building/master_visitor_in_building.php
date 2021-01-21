<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <title>Visitor In Building - Tempo Pavilion</title>
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
</head>
<style>
    body{
        font-family: montserrat;
    }        

  label{
      font-size: 1.1em;
  }

  th, td{
    font-family: montserrat;
}

tbody tr{
  text-align: center;
  font-size: 1.1em;
}

td {
  vertical-align: middle !important;
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
                        <h3 class="panel-title"><b>Visitor In Building</b></h3>
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
                    <table id="declaration_table" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead style="font-size:1em">
                            <tr style="background: #455a64; color:white">                         
                                <th style="text-align:center">Phone Number</th>  
                                <th style="text-align:center">Customer Name</th>
                                <th style="text-align:center">Official ID Number</th>
                                <th style="text-align:center">Email Address</th>                                
                                <th style="text-align:center">Declaration Form Date</th>                                
                                <th style="text-align:center">Check In Date</th>                                
                                <th style="text-align:center">Check In Time</th>
                                <th style="text-align:center">ID Number Input Type</th>                                
                                <th style="text-align:center">Check In Point</th>                                   
                            </tr>
                            </thead>                          
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
var tabel = null;
 $(document).ready(function(){
    $.fn.dataTable.ext.errMode = 'none';
  tabel = $('#declaration_table').on('error.dt', function(e, settings, techNote, message) {
   console.log( 'An error has been reported by DataTables: ', message);
}).DataTable({                        
            "ajax":
            {
                url: "<?php echo site_url('admin/visitor_in_building/get_data')?>", // URL file untuk proses select datanya                
                type: "POST"
            },            
            "columns": [
                { "data": "phone_number" }, // Tampilkan nis
                { "data": "name" },  // Tampilkan nama
                { "data": "official_id_number" },  // Tampilkan nama
                { "data": "email" },  // Tampilkan nama
                { "data": "created_on" },  // Tampilkan nama                                                               
                { "data": "check_in_date" },  // Tampilkan nama  
                { "data": "check_in_hours" },  // Tampilkan nama
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                    var description_input = "N/A";
                      if(row.type_id_card != 0 && row.official_id_number != ""){
                        if(row.type_input_official_id_number == 1){
                          description_input = "OCR Recognition";
                        }else if(row.type_input_official_id_number == 2){
                          description_input = "Manual Input";                                
                        }else if(row.type_input_official_id_number == 3){
                          description_input = "OCR Corrected By Receptionist";                                
                        }
                      }                                              
                        
                        return description_input
                    }
                },  
                { "data": "nama_lokasi" },  // Tampilkan nama                  
            ],
        });
      
        setInterval( function () {
    tabel.ajax.reload();
},1000);

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
    
  function View_surat(x){
        window.location.href = "<?php echo site_url('admin/my_task/View/')?>/"+x;
    }
</script>
</body>
</html>