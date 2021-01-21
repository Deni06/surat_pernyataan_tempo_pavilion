<!DOCTYPE html>
<html class="no-js" lang="">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Review Order - GROSIR BAJU & SUPPLIER BAJU IMPORT TERMURAH</title>
      <meta name="description" content="GROSIR BAJU & SUPPLIER BAJU IMPORT TERMURAH">
<meta name="keywords" content="GROSIR BAJU, SUPPLIER BAJU, BAJU IMPORT, BAJU TERMURAH, GROSIR BAJU, SUPPLIER BAJU IMPORT TERMURAH">
    <meta name="viewport" content="width=1024">

    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,vietnamese">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/plugins.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css');?>">

     <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">

    <script src="<?php echo base_url('/assets/js/vendor.js');?>"></script>

    <script>
        window.SHOW_LOADING = false;
    </script>
</head>

<body>
<div id="wrapper" class="main-wrapper ">
    <?php $this->load->view('layout/navigation');?>


    <div id="main">
        <?php foreach($invoices as $invoice):?>
            <div class="container text-center">
                <h1>Detail Transaksi : <?php
                    $date=date_create($invoice->date);
                    echo date_format($date,"Ymd").$invoice->id?></h1>
                    <h3>Status Transaksi</h3>
                    <span class="btn btn-primary btn-xs"><strong><?php
                                           if($invoice->is_due <=0)
                                           {
                                            echo "Expired";
                                           } 
                                           if($invoice->status==0)
                                            {
                                                echo "Menunggu Alamat";
                                            }
                                            else if($invoice->status==1)
                                            {
                                                echo "Menunggu Pembayaran";
                                            }
                                            if($invoice->status==2)
                                            {
                                                echo "Pembayaran Di Terima";
                                            }
                                            if($invoice->status==3)
                                            {
                                                echo "Barang Telah Dikirim";
                                            }
                                            if($invoice->status==4)
                                            {
                                                echo "Transaksi Sukses";
                                            }
                                            if($invoice->status==5)
                                            {
                                                echo "Transaksi Dibatalkan";
                                            }
                                            ?></strong></span>
            </div>

       <div class="checkout-wrapper">
                <div class="container">
                       <div class="row">
                        <div class="col-md-12">
                            <h2><center>Alamat Pengiriman</center></h2>



                                <div class="row">
                                <div class="col-md-12 bg-gray" >
                                    <div class="form-group" >
                                        <span for="first_name">Nama Lengkap : <?=$invoice->customer_name?>
                                        </span>
                                        </div>
                                    <div class="form-group">
                                         <span for="address">Alamat : <?=$invoice->address_shipping?>
                                        </span>
                                        </div>

                                    <div class="form-group">
                                        <span for="first_name">Telp/Hp : <?=$invoice->customer_phone?>
                                        </span>
                                        </div>
                                    <div class="form-group">
                                        <span for="email_address">Email : <?=$invoice->customer_mail?>
                                        </span>
                                       </div>
                                    <div class="form-group">
                                        <span for="order-notes">Catatan</span>
                                        <span for="order-notes"><?=$invoice->order_notes?>
                                    </div>
                                </div>

                            </div>
                            <!-- /.form-group -->

                            <!-- /.checkbox -->
                        </div>
                        </div>
                    <div class="row">
                        <div class="col-md-12">

                                <h2>Detail Pembelian</h2>

                            <div class="col-md-12 hidden-xs hidden-sm">

                                <div class="col-md-1">
                                    <h4>No</h4>
                                </div>
                                <div class="col-md-3">
                                    <h4>Nama Barang</h4>
                                </div>

                                <div class="col-md-2">
                                    <h4>Qty</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Harga</h4>
                                </div>
                                <div class="col-md-2">
                                    <h4>Total Harga</h4>
                                </div>
                                <div class="col-sm-12 hidden-lg hidden-md">
                                    <hr>
                                    <div class="col-sm-12">
                                        <h3>Barang Belanja</h3>
                                    </div>
                                </div>


                            </div>
                            <?php
                            $i=0;
                            $cartweight=0;
                            $cartqty=0;
                            $subtotal=0;
                            foreach ($orders as $items):
                                $i++;
                                $subtotal += $items->price;

                                ?>
                                <div class="col-md-12">
                                    <hr>
                                    <div class="col-md-1">
                                        <?= $i ?>
                                    </div>
                                    <div class="col-md-3">
                                        <?= $items->product_name  ?>
                                    </div>
                                    <div class="col-md-2"><?= $items->qty ?>
                                    </div>
                                    <div class="col-md-2">
                                        Rp. <?= number_format($items->price) ?>
                                    </div>
                                    <div class="col-md-2">
                                        Rp. <?= number_format($items->price*$items->qty) ?>
                                    </div>
                                     </div>
                            <?php endforeach;?>



                                <!-- /.payment-detail-wrapper -->



                            </div>
                        </div>
                    <div class="cart-total">
                        <table>
                            <tbody>
                            <tr class="order-total">
                                <th>Sub Total</th>
                                <td><strong><span class="amount">Rp. <?=number_format($invoice->total_invoice)?></span></strong>

                                </td>
                            </tr>
                            <tr class="order-total" id="jenis_paket">
                                <th>Kurir Pengiriman</th>
                                <td><span><?=$invoice->courier_service?> (Berat : <?=$invoice->total_weight?> ) - Rp. <?=number_format($invoice->shipping_fee)?></span> </td>
                            </tr>
                            <tr class="order-total">

                                <th>Grand Total</th>
                                <td>
                                    <span>Rp. <?=number_format($invoice->total_invoice)?></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                 
<div class="row">
    <?php if($invoice->status==1):?>
    <div class="col-md-6">
                    <h2>Konfirmasi Pembayaran</h2>
        <div class="form-group">
            <h4>No.Order  :<?php $date=date_create($invoice->date);
            echo date_format($date,"ym").str_pad($invoice->id,5,"0",STR_PAD_LEFT)?></h4>
        </div>
        <form action="<?=base_url('customer/payment_confirmation')?>" method="post">
        <input type="hidden" name="invoice_id" value="<?=$invoice->id?>">
        
        <div class="form-group">

            <label for="address">Transfer Ke Bank : <sup>*</sup></label>
            <select class="form-control dark" name="account_bank">
                <option value="BCA">BCA - 7130786281 a/n Koni</option>
                 <option value="Mandiri">Mandiri - 155-00-0739612-3 a/n Santy</option>
          
            </select>
            <?php echo form_error('account_bank'); ?>
        </div>
 <div class="form-group">

            <label for="name">Transfer Dari : <sup>*</sup></label>
            <input type="text" class="form-control dark" placeholder="Rekening Transfer atas nama" name="account_name" value="<?=$invoice->account_name?>">
            <?php echo form_error('account_name'); ?>
        </div>
         <!--<div class="form-group">

            <label for="dare">Tanggal Transfer :  <sup>*</sup></label>
            <input type="date" class="form-control dark" placeholder="Tanggal Transfer" name="payment_date" value="<?=$invoice->payment_date?>">
            <?php echo form_error('payment_date'); ?>
        </div>
         <div class="form-group">

            <label for="time">Jam Transfer :  <sup>*</sup></label>
            <input type="time" class="form-control dark" placeholder="Jam Transfer" name="payment_time" value="<?=$invoice->payment_time?>">
            <?php echo form_error('payment_time'); ?>
        </div>-->

        <div class="form-group">
            <label for="first_name">Jumlah Pembayaran<sup>*</sup>
            </label>
            <input type="text" class="form-control dark" placeholder="Nilai yang dibayarkan" name="total_paid" value="<?=$invoice->total_invoice?>">
            <?php echo form_error('total_paid'); ?>
        </div>
        

       <div class="row">
        <div class="col-md-12">
        <div class="form-group">

            <label for="address">Catatan Pembayaran</label>
            <input type="text" class="form-control dark" placeholder="Catatan Pembayaran" name="account_number" value="<?=$invoice->account_number?>">
            <?php echo form_error('account_number'); ?>
        </div>
    </div>
    </div>
        <input type="submit" class="btn btn-lg btn-primary" value="Konfirmasi Pembayaran"></input>
        </form>
</div>
<?php endif?>

    <?php if($invoice->status==2): ?>
        <div class="col-md-6">
            <h2>Konfirmasi Pembayaran</h2>
            <div class="form-group">
                <h4>No Order  : 


                    <?php 
            $date=date_create($invoice->date);
            echo date_format($date,"ym").str_pad($invoice->id,5,"0",STR_PAD_LEFT)?></h4>
            </div>
            
            <div class="form-group">
                <label for="address">Transfer Ke Bank : <?=$invoice->account_bank?></label>
            </div>
             <div class="form-group">
                <label for="address">Transfer Dari : <?=$invoice->account_name?></label>
            </div>
            <div class="form-group">

                <label for="address">Tanggal Transfer : <?=$invoice->payment_date?> </label>
            </div>
           
            <div class="form-group">
                <label for="first_name">Jumlah Transfer : <?=$invoice->total_paid?>
                </label>
            </div>
            <div class="form-group">
                <label for="first_name">Catatan Pembayaran: <?=$invoice->account_number?>
                </label>
            </div>

        </div>
    <?php endif?>

    </div>
                    </div>

                <!-- /.container -->
            </div>
            <!-- /.checkout-wrapper -->

        <?php endforeach;?>
    </div>
    <?php $this->load->view('layout/footer');?>





</div>



<script src="http://maps.google.com/maps/api/js?sensor=true"></script>

<script src="<?php echo base_url('/assets/js/jquery-ui.min.js')?>"></script>


<script src="<?php echo base_url('/assets/js/plugins.js')?>"></script>

<script src="<?php echo base_url('/assets/js/main.js')?>"></script>

<script src="<?php echo base_url('/assets/js/docs.js')?>"></script>

</body>

</html>