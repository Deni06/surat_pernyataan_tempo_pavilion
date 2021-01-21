<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">  
  <title>View Declaration Form - Tempo Pavilion</title> 
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
  <link href="<?=base_url('assets/home/css/home.css')?>" rel="stylesheet">
  <script src="<?=base_url('assets/plugins/pace/pace.min.js')?>"></script>
  <script src="<?=base_url('assets/sweetalert-master/dist/sweetalert.min.js')?>"></script>
  <script src="<?=base_url('assets/js/jquery-3.4.1.min.js')?>"></script>
  <script src="<?=base_url('/assets/ckeditor/ckeditor.js');?>"></script>
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="<?php echo base_url('/assets/js/intlTelInput.js');?>"></script> 

  <style>
    body{
      font-family: montserrat;
    }        

    .swal-text {
text-align: center;
}

    p, label {
      color: #717171;
      font-size:1.4rem;
    }        

    .freebirdFormviewerComponentsQuestionBaseTitle{
    	font-size: 15px;
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
              <div class="panel-title">
                <b>View Declaration Form</b> 
              </div>
            </div>
            <div class="panel-body">
              <div class="panel panel-default">                
                <div class="panel-body">  

                <div class="container mb-4" style="width: 100%">
                      <div style="margin-bottom : 1%">                                        
                    <button style="font-family:montserrat;border: 2px solid #455a64;" class="btn" onclick="location.href='<?=site_url('admin/recap_visitor/view_history/'.$phone_number)?>'"><i class="fa fa-reply" style="margin-right: 4%;"></i>BACK TO LIST</button>
                    </div>                  

                    <div class="row" style="margin: 0;justify-content: center;display:flex">
    <div class="col-md-12" style="padding: 0">                      
    	<div class="freebirdFormviewerViewFormContentWrapper m2">      
      <div class="freebirdFormviewerViewCenteredContent">
        <form>
          <div class="freebirdFormviewerViewFormCard exportFormCard">
            <div class="freebirdFormviewerViewFormContent">              
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
                                <input type="tel" id="phone_number" onkeyup='return isNumberKey(event)' style="padding-left:89px !important" class="form-control input" value="<?=$me->row()->phone_number?>" readonly>
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
                            Nama / Name
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input id="full_name" type="text" class="form-control input" value="<?=$me->row()->name?>" readonly>
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
                          Tipe Kartu Identitas / Official ID Card type:
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                              <?php 
                              $type_id_card = "N/A";
                              if($me->row()->type_id_card == 1){
                                $type_id_card = "KTP";   
                              }else if($me->row()->type_id_card == 2){
                                $type_id_card = "SIM";   
                              }else if($me->row()->type_id_card == 3){
                                $type_id_card = "KITAS";   
                              }
                              ?>
                                <input id="type_id_card" type="text" class="form-control input" value="<?=$type_id_card?>" readonly>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <?php                               
                      $description_input = "N/A";
                      if($me->row()->type_id_card != 0 && $me->row()->official_id_number != ""){
                        if($me->row()->type_input_official_id_number == 1){
                          $description_input = "OCR Recognition";
                        }else if($me->row()->type_input_official_id_number == 2){
                          $description_input = "Manual Input";                                
                        }else if($me->row()->type_input_official_id_number == 3){
                          $description_input = "OCR Corrected By Receptionist";                                
                        }
                      }                              
                              ?>

                      <div style="margin-bottom: 20px;">
                        <div class="freebirdFormviewerComponentsQuestionBaseHeader">
                        <div class="freebirdFormviewerComponentsQuestionBaseTitleDescContainer">
                          <div class="freebirdFormviewerComponentsQuestionBaseTitle" role="heading" aria-level="3" aria-describedby="i4">
                          Nomor ID Resmi (6 Angka Pertama) Sesuai ID yang dilampirkan / Official ID Numbers (First 6 Numbers) According to the Attached ID (KTP/SIM/KITAS)
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                            <div style="margin-top:10px">
                              <span style="font-size:13px;"><b style="color:red">*</b> Input Type : <b style="color:#0000EE"><?=$description_input?></b></span>
                            </div>                            
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input id="official_id_number" type="text" class="form-control input" value="<?=$me->row()->official_id_number?>" readonly>
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
                                <input type="text" id="company" class="form-control input"  value="<?=$me->row()->company?>" readonly>
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
                                <input type="text" id="address" class="form-control input"  value="<?=$me->row()->address?>" readonly>
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
                                <input type="text" id="email" class="form-control input"  value="<?=$me->row()->email?>" readonly>
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
                                <input type="text" id="suhu_tubuh" class="form-control input"  value="<?=$me->row()->suhu_tubuh?>" readonly>
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
                                <input type="text" id="destination_company" class="form-control input"  value="<?=$me->row()->destination_company?>" readonly>
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
                                <select class="form-control" id="floor" style="font-size:14px" value="<?=$me->row()->floor?>" disabled>
                                	<?php
                                	 $value = $me->row()->floor;

                                $selected1 = "";
                                $selected2 = "";
                                $selected3 = "";
                                $selected4 = "";
                                $selected5 = "";
                                $selected6 = "";
                                $selected7 = "";
                                $selected8 = "";
                                $selected9 = "";
                                $selected10 = "";
                                $selected11 = "";                                

                                if($value == 1){
                                  $selected1 = "selected";   
                                }else if($value == 2){
                                    $selected2 = "selected";                              
                                }else if($value == 3){
                                    $selected3 = "selected";
                                }else if($value == 4){
                                    $selected4 = "selected";
                                }else if($value == 5){
                                    $selected5 = "selected";
                                }else if($value == 6){
                                    $selected6 = "selected";
                                }else if($value == 7){
                                    $selected7 = "selected";
                                }else if($value == 8){
                                    $selected8 = "selected";
                                }else if($value == 9){
                                    $selected9 = "selected";
                                }else if($value == 10){
                                    $selected10 = "selected";
                                }else if($value == 11){
                                    $selected11 = "selected";
                                }
                                	 ?>
                                  <option value="0">Choose</option>
                                  <option value="1" <?=$selected1?> >Lantai Loby</option>
                                  <option value="2" <?=$selected2?> >Lantai 1</option>
                                  <option value="3" <?=$selected3?> >Lantai 2</option>
                                  <option value="4" <?=$selected4?> >Lantai 3</option>
                                  <option value="5" <?=$selected5?> >Lantai 4</option>
                                  <option value="6" <?=$selected6?> >Lantai 5</option>
                                  <option value="7" <?=$selected7?> >Lantai 6</option>
                                  <option value="8" <?=$selected8?> >Lantai 7</option>
                                  <option value="9" <?=$selected9?> >Lantai 8</option>                                  
                                  <option value="10" <?=$selected10?> >Lantai 9</option>                                  
                                  <option value="11" <?=$selected11?> >Lantai 10</option>                                  
                                </select>
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
                          Foto Kartu Identitas / ID Card Photo
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div style="text-align:center">
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent" style="height:auto;">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <div class="file-upload-content" id="icon-upload-content">
                        <img class="file-upload-image" id="icon-upload-image" src="<?=base_url().'assets/images/ktp_photo/'.$me->row()->foto_ktp?>" />
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
                              <?php
                                $valueTravelling = $me->row()->is_travelling;                                
                                $checkedTravellingYes = "";
                                $checkedTravellingNo = "";                                

                                if($valueTravelling == 1){
                                  $checkedTravellingYes = "checked";
                                }else if($valueTravelling == 2){
                                    $checkedTravellingNo = "checked";
                                }
                                
                                 ?>

                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_travelling" value="1" <?=$checkedTravellingYes?> disabled>
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_travelling" value="2" <?=$checkedTravellingNo?> disabled>
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
                              <?php
                                $valueTransportation = $me->row()->is_using_transportation;                                
                                $checkedTransportationYes = "";
                                $checkedTransportationNo = "";    

                                if($valueTransportation == 1){
                                  $checkedTransportationYes = "checked";
                                }else if($valueTransportation == 2){
                                    $checkedTransportationNo = "checked";
                                }
                                
                                 ?>

                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_using_transportation" value="1" <?=$checkedTransportationYes?> disabled>
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_using_transportation" value="2" <?=$checkedTransportationNo?> disabled>
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
                              <?php
                                $valueParticipate = $me->row()->is_participate_activities;                                
                                $checkedParticipateYes = "";
                                $checkedParticipateNo = "";                                

                                if($valueParticipate == 1){
                                  $checkedParticipateYes = "checked";
                                }else if($valueParticipate == 2){
                                    $checkedParticipateNo = "checked";
                                }
                                
                                 ?>

                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_participate" value="1" <?=$checkedParticipateYes?> disabled>
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_participate" value="2" <?=$checkedParticipateNo?> disabled>
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
                              <?php
                                $valueContactPatient = $me->row()->is_contact_patient;                                
                                $checkedContactPatientYes = "";
                                $checkedContactPatientNo = "";                        

                                if($valueContactPatient == 1){
                                  $checkedContactPatientYes = "checked";
                                }else if($valueContactPatient == 2){
                                    $checkedContactPatientNo = "checked";
                                }
                                
                                 ?>

                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_contact_patient" value="1" <?=$checkedContactPatientYes?> disabled>
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_contact_patient" value="2" <?=$checkedContactPatientNo?> disabled>
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
                              <?php
                                $valueSick = $me->row()->is_sick;                                
                                $checkedSickYes = "";
                                $checkedSickNo = "";                        

                                if($valueSick == 1){
                                  $checkedSickYes = "checked";
                                }else if($valueSick == 2){
                                    $checkedSickNo = "checked";
                                }
                                
                                 ?>

                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_sick" value="1" <?=$checkedSickYes?> disabled>
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input type="radio" name="is_sick" value="2" <?=$checkedSickNo?> disabled>
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
                              <?php
                                $valueAgree = $me->row()->is_agree;                                
                                $checkedAgreeYes = "";                                

                                if($valueAgree == 1){
                                  $checkedAgreeYes = "checked";
                                }
                                
                                 ?>

                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input type="radio" name="is_agree" value="1" <?=$checkedAgreeYes?> disabled>
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
                                    <input type="radio" id="is_fill_without_coercion" name="is_fill_without_coercion" value="1" checked disabled>
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
                    <div style="margin:3% 0 20px">
<label class="freebirdFormviewerComponentsQuestionBaseTitle" style="margin-bottom:0">Created On : <?=$me->row()->created_on?></label>
</div>
<div>
<label class="freebirdFormviewerComponentsQuestionBaseTitle">Valid Until : <?=$me->row()->valid_until?></label>
</div>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
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
        <!--===================================================-->
        <!--<!--End page content-->

      </div>
    </div>
    <!--===================================================-->
    <!--END CONTENT CONTAINER-->

    <?php
    $this->load->view('backend/layout/sidebar');
    ?>



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
<script src="<?php echo base_url('assets/js/register-form.js');?>"></script>
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

    var phone_number = document.querySelector("#phone_number");
    window.intlTelInput(phone_number, {     
      preferredCountries: ['ID'],
      separateDialCode: true,
      customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
        return "(" + selectedCountryPlaceholder + ")";
  },
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@15.0.1/build/js/utils.js",
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