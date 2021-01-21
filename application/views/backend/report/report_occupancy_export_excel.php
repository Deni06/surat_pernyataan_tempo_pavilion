<?php
date_default_timezone_set('Asia/Jakarta');
$period = str_replace("/","-",str_replace(" ","",$search_period));

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=report_occupancy_".$period.".xls");
header("Pragma: no-cache");
header("Expires: 0");
?>
<h3 class="card-title" style="text-align:center;">
    <b style="display:block;">REPORT OCCUPANCY</b><br>
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
        <th style="text-align:center">Tanggal &nbsp;&nbsp;</th>
        <th style="text-align:center">Waktu &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">IN &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">OUT &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
        <th style="text-align:center">OCCUPANCY &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>        
    </tr>
    <?=$value?>
</table>