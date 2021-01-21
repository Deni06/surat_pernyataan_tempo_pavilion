<?php
date_default_timezone_set('Asia/Jakarta');
$period = str_replace("/","-",str_replace(" ","",$search_period));

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=rekapitulasi_checkin_checkout_".$period.".xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3 class="card-title" style="text-align:center;">
    <b style="display:block;">REKAPITULASI CHECK-IN dan CHECK-OUT</b><br>
    <b style="display:block;">PERIODE <?=$search_period?></b>    
</h3>
<style>
  table {
    width:100%;
    border-collapse: collapse;
    border:1px solid;
  }
  table tr td{
    padding:5px;
    border:1px solid;
  }
  table tr th{
    border:1px solid;
    padding:5px;
  }
  table tr{
      border:1px solid;
  }
  tr, td, th{
      border:1px solid;
  }
  .str{ mso-number-format:\@; }
</style>
<table>
    <tr>
        <th style="text-align:center">Nomor Handphone &nbsp;&nbsp;</th>
        <th style="text-align:center">Nama Lengkap &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Official ID Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Email Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Registration Number &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Tanggal Surat Pernyataan &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Tanggal Checkin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Jam Checkin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Tanggal Checkout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Jam Checkout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Type Checkout &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">ID Number Input Type &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">Checkin Point &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>        
    </tr>
    <?php    
    if($report_list != FALSE){
        foreach($report_list as $row){
            $checkin_time = "";
            $checkout_date = "";
            $checkout_time = "";
            $type_checkout = "Auto checkout";

            if($row->type_checkout == 1 || $row->type_checkout == 3){
                $type_checkout = "Self checkout";
            }

            if(date("H", strtotime($row->check_in)) == "00"){
                $checkin_time = date('H:i A', strtotime($row->check_in));
            }else{
                $checkin_time = date('h:i A', strtotime($row->check_in));
            }					

            if($row->check_out != ""){
                $checkout_date .= date_format(date_create($row->check_out),"j F Y");
                if(date("H", strtotime($row->check_out)) == "00"){
                    $checkout_time .= date('H:i A', strtotime($row->check_out));
                }else{
                    $checkout_time .= date('h:i A', strtotime($row->check_out));
                }					
            }                                                                              
                        ?>
                            <tr>                                
                                <td class="str" style="text-align:center"><?=$row->phone_number?></td>
                                <td class="str" style="text-align:center"><?=$row->name?></td>
                                <td class="str" style="text-align:center"><?=$row->official_id_number?></td>
                                <td class="str" style="text-align:center"><?=$row->email?></td>
                                <td class="str" style="text-align:center"><?=$row->registration_number?></td>
                                <?php 
                                $registrationDate = "";
                                if($row->created_on != ""){                                    
                                    $registrationDate = date_format(date_create($row->created_on),"j F Y");                    
                }                
                ?>
                                <td class="str" style="text-align:center"><?=$registrationDate?></td>
                                <td class="str" style="text-align:center"><?=date_format(date_create($row->check_in),"j F Y")?></td>
                                <td class="str" style="text-align:center"><?=$checkin_time?></td>
                                <td class="str" style="text-align:center"><?=$checkout_date?></td>
                                <td class="str" style="text-align:center"><?=$checkout_time?></td>
                                <td class="str" style="text-align:center"><?=$type_checkout?></td>
                                <?php
                                $description_input = "N/A";
                                if($row->type_id_card != 0 && $row->official_id_number != ""){
                                  if($row->type_input_official_id_number == 1){
                                    $description_input = "OCR Recognition";
                                  }else if($row->type_input_official_id_number == 2){
                                    $description_input = "Manual Input";                                
                                  }else if($row->type_input_official_id_number == 3){
                                    $description_input = "OCR Corrected By Receptionist";                                
                                  }
                                }
                                ?>
                                <td class="str" style="text-align:center"><?=$description_input?></td>                                
                                <td class="str" style="text-align:center"><?=$row->nama_lokasi?></td>                                
                            </tr>
                          <?php         
        }
    }else{
    ?>
    <tr>
        <td colspan="13" style="text-align:center">No Data Available</td>
    </tr>
    <?php
    }
    ?>
</table>