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
    <link rel="stylesheet" href="<?=base_url('assets/css/intlTelInput.css');?>">
    <link href="<?=base_url('assets/sweetalert-master/dist/sweetalert.css')?>" rel="stylesheet">
    <link rel="stylesheet" href="<?=base_url('assets/home/css/home.css');?>">

    <script src="<?php echo base_url('/assets/js/jquery-3.4.1.min.js')?>"></script>       
    <script src="<?php echo base_url('/assets/home/js/popper.min.js')?>"></script>    
    <script src="<?php echo base_url('/assets/home/js/bootstrap.min.js')?>"></script> 
    <script src="<?php echo base_url('/assets/js/html5-qrcode.min.js');?>"></script>          
    <script src="<?php echo base_url('/assets/home/js/fileSaver.min.js');?>"></script>
    <script src="<?php echo base_url('/assets/home/js/html2canvas.min.js');?>"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>    
    <script src="<?php echo base_url('/assets/js/intlTelInput.js');?>"></script> 
    <script src="<?php echo base_url('/assets/home/js/fingerprint2.js');?>"></script>

    </head>
  <body>                  
    <div class="freebirdFormviewerViewFormContentWrapper m2">
      <div class="freebirdFormviewerViewHeaderCard freebirdFormviewerViewCenteredContent freebirdViewerHeaderCard freebirdHeaderCard" style="background-image: url(<?php echo base_url('/assets/img/tempo-logo.png');?>);
    background-size: cover;
    background-position: center;"></div>
      <div class="freebirdFormviewerViewCenteredContent">
        <form>
          <div class="freebirdFormviewerViewFormCard exportFormCard">
            <div class="freebirdFormviewerViewFormContent">
              <div class="freebirdFormviewerViewNoPadding">
                <div class="freebirdFormviewerViewHeaderHeader">
                  <div class="freebirdFormviewerViewHeaderThemeStripe" style="background-color: rgb(187, 142, 12);color: rgba(255, 255, 255, 1);"></div>
                  <div class="freebirdFormviewerViewHeaderTitleRow">
                    <div class="freebirdFormviewerViewHeaderTitle exportFormTitle freebirdCustomFont" dir="auto" role="heading" aria-level="1">VMS TEMPO PAVILION</div>
                  </div>
                  <div class="freebirdFormviewerViewHeaderDisclosure" dir="auto">
                    The name and photo will be recorded when you upload files and submit this form.
                  </div>
                  <div class="freebirdFormviewerViewHeaderRequiredLegend" aria-hidden="true" dir="auto">* Required</div>
                </div>
              </div>

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
                                <input type="tel" id="phone_number" onkeyup='return isNumberKey(event)' style="padding-left:89px !important" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
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
                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
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
                          Nomor ID Resmi (6 Angka Pertama) Sesuai ID yang dilampirkan / Official ID Numbers (First 6 Numbers) According to the Attached ID (KTP/SIM/KITAS)
                            <span class="freebirdFormviewerComponentsQuestionBaseRequiredAsterisk"> *</span>
                          </div>
                        </div>
                      </div>

                      <div>
                        <div class="quantumWizTextinputPaperinputEl freebirdFormviewerComponentsQuestionTextShort freebirdFormviewerComponentsQuestionTextTextInput freebirdThemedInput modeLight">
                          <div class="quantumWizTextinputPaperinputMainContent exportContent">
                            <div class="quantumWizTextinputPaperinputContentArea">
                              <div class="quantumWizTextinputPaperinputInputArea">
                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
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
                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
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
                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
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
                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
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
                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
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
                                <input type="text" class="quantumWizTextinputPaperinputInput exportInput form-control" autocomplete="off" tabindex="0" aria-labelledby="i1" aria-describedby="i2 i3" placeholder="Your answer" dir="auto" data-initial-dir="auto" data-initial-value="" required>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      </div>

                      <div>
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
                                <select class="form-control">
                                  <option selected>Choose</option>
                                  <option value="1">Lantai Loby</option>
                                  <option value="2">Lantai 2</option>
                                  <option value="3">Lantai 3</option>
                                  <option value="4">Lantai 15</option>
                                  <option value="5">Lantai 16</option>
                                  <option value="6">Lantai 18</option>
                                  <option value="7">Lantai 19</option>
                                  <option value="8">Lantai 20</option>
                                  <option value="9">Lantai 21</option>
                                  <!-- <option value="10">Lantai 22</option> -->
                                  <option value="11">Lantai 23</option>
                                  <!-- <option value="12">Lantai 24</option> -->
                                  <option value="13">Lantai 25</option>
                                  <option value="14">Lantai 26</option>
                                  <option value="15">Lantai 27</option>
                                  <option value="16">Lantai 28</option>
                                  <option value="17">Lantai 29</option>
                                  <option value="18">Lantai 30</option>
                                  <option value="19">Lantai 31</option>
                                  <option value="20">Lantai 32</option>
                                </select>
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
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input id="r1d" type="radio" name="radiod" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input id="r2d" type="radio" name="radiod" value="2">
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
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input id="r1d" type="radio" name="radiod" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input id="r2d" type="radio" name="radiod" value="2">
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
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input id="r1d" type="radio" name="radiod" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input id="r2d" type="radio" name="radiod" value="2">
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
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input id="r1d" type="radio" name="radiod" value="1">
                                    <label for="r1d">Ya</label>
                                  </li>
                                  <li>
                                    <input id="r2d" type="radio" name="radiod" value="2">
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
                              
                                <ul style="list-style: none;padding: 0">
                                  <li>
                                    <input id="r1d" type="radio" name="radiod" value="1">
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
                                    <input id="r1d" type="radio" name="radiod" value="1">
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
                    <a href="something" class="button7" style="color:rgb(166, 110, 0)">Submit</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </form>
      </div>
    </div>

  </body>  
  <script type="text/javascript">
    var phone_number = document.querySelector("#phone_number");
    window.intlTelInput(phone_number, {     
      preferredCountries: ['ID'],
      separateDialCode: true,   
      utilsScript: "https://cdn.jsdelivr.net/npm/intl-tel-input@15.0.1/build/js/utils.js",
    }); 
  </script>
</html>
