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
    <title>Edit User - Tempo Pavilion</title>
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
    <link rel="stylesheet" href="<?=base_url('assets/css/intlTelInput.css');?>">
    <script src="<?=base_url('assets/plugins/pace/pace.min.js')?>"></script>
    <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/ui/trumbowyg.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/colors/ui/trumbowyg.colors.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/trumbowyg/dist/plugins/specialchars/ui/trumbowyg.specialchars.min.css')?>">
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>     
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
                        <h3 class="panel-title"><b>Edit User</b></h3>
                    </div>
                    <div class="panel-body">
                    <form role="form" method="POST" action="<?php echo site_url('admin/user/edit/'.$user['user_id']); ?>" onsubmit="return submitform()">
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
                                        <label for="name"><b>Username</b></label>
                                        <input type="text" name="usr_username" placeholder="User Username" value="<?php echo ($this->input->post('usr_username') ? $this->input->post('usr_username') : $user['user_name']); ?>" class="form-control" id="usr_fullname" readonly/>                                        
                                    </div>                                                                       

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Fullname</b></label>
                                        <input type="text" name="usr_fullname" placeholder="User Fullname" value="<?php echo ($this->input->post('usr_fullname') ? $this->input->post('usr_fullname') : $user['usr_fullname']); ?>" class="form-control" id="usr_fullname" required/>                                        
                                    </div>      

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Address</b></label>
                                        <input type="text" name="usr_address" placeholder="User Address" value="<?php echo ($this->input->post('usr_address') ? $this->input->post('usr_address') : $user['usr_address']); ?>" class="form-control" id="usr_address" required/>
                                    </div>      

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Phone</b></label>
                                        <input type="tel" style="padding-left:79px;" name="usr_phone" value="<?php echo ($this->input->post('usr_phone') ? $this->input->post('usr_phone') : $user['usr_phone']); ?>" class="form-control" id="usr_phone" onkeypress='return isNumberKey(event)' required/>
                                    </div>                                          

                                    <div class="form-group" style="margin-bottom:3%;">
                                        <label for="name"><b>Email</b></label>
                                        <input type="text" name="usr_email" placeholder="User Email" value="<?php echo ($this->input->post('usr_email') ? $this->input->post('usr_email') : $user['usr_email']); ?>" class="form-control" id="usr_name" required/>
                                    </div>      

                                    <div class="form-group" style="margin-bottom:3%;">
                                <label for="city_code"><b>User Group</b></label>
                                <select class="form-control" name="user_group" value="<?php echo ($this->input->post('user_group') ? $this->input->post('user_group') : $user['usr_group']); ?>" required>
                <?php foreach($user_group as $ug){ 
                  $value = ($this->input->post('user_group') ? $this->input->post('user_group') : $user['usr_group']);
                  $selected = "";
                  if($value == $ug['gro_id']){
                    $selected = "selected";
                  }
                  ?>
                    <option value="<?php echo $ug['gro_id'] ?>" <?=$selected?>><?php echo $ug['gro_name'] ?></option>
                 <?php } ?>
            </select>
                                </div>                                                                      
                                </div>
                                <div class="col-md-7">
                                    <div class="row">
                                        <button type="submit" name="submit" style="background: #455a64; color:white;font-family:montserrat; margin-right: 20px" class="btn col-md-5">  SAVE  <i class="fa fa-save" ></i></button>
                                        <a style="border: 2px solid #455a64;font-family:montserrat" class="btn col-md-5" onclick="location.href='<?=site_url('admin/user/')?>'">  CANCEL  <i class="fa fa-ban"></i></a>
                                    </div>
                                    <!-- <button type="submit" name="submittodetail" style="background: #455a64; color:white;font-family:montserrat" class="btn">  SAVE  <i class="fa fa-save" style="margin-left: 10%;"></i></button>
                                    <a style="border: 2px solid #455a64;font-family:montserrat" class="btn" onclick="location.href='<?=site_url('admin/sermon/')?>'">  CANCEL  <i class="fa fa-ban" style="margin-left: 10%;"></i></a> -->
                                </div>
                            </div>  
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
          <script src="<?php echo base_url('/assets/js/intlTelInput.js');?>"></script>

<script>

    var input = document.querySelector("#usr_phone");
    window.intlTelInput(input, {
      preferredCountries: ['ID'],
      separateDialCode: true,
      formatOnDisplay: false,
      customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
      return "Nomor Telepon Anda (" + selectedCountryPlaceholder + ")";
  },
      utilsScript: "<?php echo base_url('/assets/js/utils.js');?>",
    });
    
    function submitform() {
      var f = document.getElementsByTagName('form')[0];      
        var itiPhoneNumber = window.intlTelInputGlobals.getInstance(input);          
        var phone = itiPhoneNumber.getNumber();
        $('#usr_phone').val(phone);                
        if(!itiPhoneNumber.isValidNumber()){
      message_error = "";                      
            swal("Sorry", "The Phone Number format you entered is incorrect", "error");                       
      return false;
     }else{
      showLoading();
        f.submit();
        return true;
     }                    
      return false;
    }

    function showLoading(){
      $('#modalLoading').modal('show');
      $('#modalLoading').data('bs.modal').options.backdrop = 'static';
    };

    $('#sermon_content').trumbowyg({
              btns: [
        ['viewHTML'],
        ['undo', 'redo'], // Only supported in Blink browsers
        ['formatting'],
        ['bold', 'italic', 'underline', 'strikethrough'],
        // ['superscript', 'subscript'],
        // ['link'],
        ['insertImage'],
        ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
        ['unorderedList', 'orderedList'],
        ['horizontalRule'],
        ['removeformat'],
        ['fullscreen'],        
        ['foreColor', 'backColor'],
        ['lineheight'],
        // ['specialChars'],
        ['upload'],
        ['fontsize']
    ],
    plugins: {        
        upload: {
            serverPath: '<?php echo base_url(); ?>admin/imageupload',
            fileFieldName: 'imagewyg',
            headers: {
                'Authorization': 'Client-ID xxxxxxxxxxxx'
            },
            data: [{
              name: 'category', value: '2'
            }],
            urlPropertyName: 'url',                        
                    error: function (data) {                      
                        alert("gambar melebihi 2 MB atau format gambar tidak disupport");
                    }
        }
    }              
            });

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