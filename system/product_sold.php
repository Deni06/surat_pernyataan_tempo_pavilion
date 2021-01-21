<!DOCTYPE html>
<html class="no-js" lang="">
<head>

    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sold Product - GROSIR BAJU & SUPPLIER BAJU IMPORT TERMURAH</title>
      <meta name="description" content="GROSIR BAJU & SUPPLIER BAJU IMPORT TERMURAH">
<meta name="keywords" content="GROSIR BAJU, SUPPLIER BAJU, BAJU IMPORT, BAJU TERMURAH, GROSIR BAJU, SUPPLIER BAJU IMPORT TERMURAH">
<meta name="viewport" content="width=1024">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Montserrat:400,700">
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,700,400italic,700italic&amp;subset=latin,vietnamese">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/bootstrap.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/plugins.css');?>">

    <link rel="stylesheet" href="<?php echo base_url('/assets/css/styles.css');?>">
    
    <script src="<?php echo base_url('/assets/js/vendor.js');?>"></script>
     <link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>
    <script>
        window.SHOW_LOADING = false;
    </script>





</head>

<body>
<div id="wrapper" class="main-wrapper ">


    <?php $this->load->view('layout/navigation');?>

    <div id="main">
        <div class="main-header">
            <div class="container">
                <h1>Pesanan Saya</h1>
            </div>
        </div>
        <section>
            <div class="container">

                <div class="border-bottom">
                    <div class="row">
                        <div class="col-md-12" style="height: 640px">

                            <!--<div class="awe-box center">
                                <div >
                                    <?php if($history != FALSE):?>
                                        <?= $this->session->flashdata('message')?>
                                    <div class="col-md-12 hidden-xs hidden-sm">
                                        <hr>
                                        <div class="col-md-1">
                                            <h4>Order.No</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>Tgl.Order</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>Jatuh Tempo</h4>
                                        </div>

                                        <div class="col-md-2">
                                            <h4>Total Transaksi</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>No Resi</h4>
                                        </div>
                                        <div class="col-md-2">
                                            <h4>Status</h4>
                                        </div>
                                        <div class="col-md-1">
                                            <h4>Action</h4>
                                        </div>


                                    </div>
                                    <div class="col-sm-12 hidden-lg hidden-md">
                                        <hr>
                                        <div class="col-sm-12">
                                            <h3>Invoice</h3>
                                        </div>
                                        </div>
                                    <?php foreach ($history as $row): ?>
                                        <div class="col-md-12 center">
                                            <hr>
                                            <div class="col-md-1">
                                               <?php
                    $date=date_create($row->date);
                    echo date_format($date,"Ymd").$row->id?>
                                            </div>
                                            <div class="col-md-2">
                                               <?php
                                        $date=date_create($row->date);
                                         echo date_format($date,"d M Y H:i:s")?>
                                            </div>
                                             <div class="col-md-2">
                                               <?php
                                        $date=date_create($row->due_date);
                                         echo date_format($date,"d M Y H:i:s")?>
                                            </div>

                                            <div class="col-md-2">
                                                Rp. <?= number_format($row->total_invoice) ?>
                                            </div>
                                            <div class="col-md-2">
                                              <?php
                                              if($row->resi_awb=="")
                                              {
                                                  echo "-";
                                              }
                                              else{
                                                  echo $row->resi_awb;
                                              }
                                              ?>
                                            </div>
                                            <div class="col-md-2">

                                                <?php if($row->status == 'unpaid'):?>
                                                    <?= anchor('customer/payment_confirmation/'.$row->id,'Confirm Payment',array('class'=>'btn btn-primary btn-xs')) ?>
                                                <?php else:?>
                                                    <?php
                                                     if($row->status==0)
                                                     {
                                                         $status="Menunggu Alamat";
                                                     }
                                                    else  if($row->status==1)
                                                    {
                                                        $status="Menunggu Pembayaran";
                                                    }
                                                    else  if($row->status==2)
                                                    {
                                                        $status="Pembayaran Di Terima";
                                                    }
                                                    else  if($row->status==3)
                                                    {
                                                        $status="Barang Telah Dikirim";
                                                    }
                                                    else  if($row->status==4)
                                                    {
                                                        $status="Transaksi Sukses";
                                                    }
                                                    else  if($row->status==5)
                                                    {
                                                        $status="Transaksi Dibatalkan";
                                                    }
                                                    ?>
                                                    <label class="btn btn-success btn-xs active"><?=$status ?></label>
                                                <?php endif;?>
                                            </div>
                                            <div class="col-md-1">
                                                <?php
                                                if($row->status == 0):
                                                ?>
                                                 <a href="<?=site_url('customer/shopping_address/'.$row->id)?>" class="btn btn-success btn-xs">Lengkapi</a>
                                                 <?php
                                                  else:  
                                                 ?>
                                                <a href="<?=site_url('customer/shopping_detail/'.$row->id)?>" class="btn btn-success btn-xs">View</a>
                                                <?php
                                                endif;
                                                ?>
                                            </div>



                                        </div>
                                    <?php endforeach;?>
                                    <?php else: ?>
                                    <div class="col-md-12">
                                        <hr>
                                        <div class="col-md-3"></div>
                                        <div class="col-md-6"><h3>Anda belum pernah melakukan pemesanan !</h3></div>
                                        <div class="col-md-3"><?=  anchor(base_url(),'Belanja Sekarang',['class'=>'btn btn-primary','role'=>'button']) ?></div>
                                    </div>
                                    <?php endif?>
                                </div>
                                <!-- /.awe-box-content
                                 -->
                                  <!--<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
                            <thead style="font-size:1em">
                            <tr style="text-align:center">
                                <th class="col-sm-2">Title</th>
                                <th class="col-sm-1">Created On</th>
                                <th class="col-sm-1">Created By</th>
                                <th class="col-sm-1">Control</th>
                            </tr>
                            </thead>
                        
                                    <?php foreach ($history as $row): ?> 
                                <tr style="font-size:1.1em">
                                    <td class="col-sm-1">
                                       <?php
                    $date=date_create($row->date);
                    echo date_format($date,"Ymd").$row->id?>
                                    </td>
                                    <td class="col-sm-2"> Rp. <?= number_format($row->total_invoice) ?></td>
                                    <td class="col-sm-1">
                                       <?php
                                        $date=date_create($row->date);
                                         echo date_format($date,"d M Y H:i:s")?>
                                    </td>
                                    <td class="col-sm-1"><?php
                                        $date=date_create($row->date);
                                         echo date_format($date,"d M Y H:i:s")?></td>
                                    
                                    <td class="col-sm-1">
                                        <button class="btn btn-xs btn-labeled btn-primary fa fa-eye " data-toggle="tooltip"  href="javascript:void()" title="View" data-container="body" onclick="location.assign('<?=site_url('admin/article/edit/'.$row->id)?>')">View
                                        </button>
                                        <button class="btn btn-xs btn-labeled btn-danger fa fa-times " data-toggle="tooltip"  href="javascript:void()" title="Delete" data-container="body" onclick="delete_article('<?=$row->id?>')">Delete
                                        </button>
                                    </td>
                                </tr>
                            <?php endforeach;
                            ?>
                             <tbody>
                             </tbody>
                         </table>-->
                         <iframe src="<?php echo base_url('/product/list_sold');?>" width="100%" height="100%" frameborder="0">
                             
                         </iframe>

                            </div>
                            <!-- /.awe-box -->

                        </div>
                    </div>
                </div>
                <!-- /.padding-vertical-50 -->

            </div>
            <!-- /.container -->
        </section>
    </div>





</div>

<script src="<?=base_url('assets/js/bootstrap.min.js')?>"></script>


<script src="<?php echo base_url('/assets/js/jquery-ui.min.js')?>"></script>


<script src="<?php echo base_url('/assets/js/plugins.js')?>"></script>

<script src="<?php echo base_url('/assets/js/main.js')?>"></script>

<script src="<?php echo base_url('/assets/js/docs.js')?>"></script>

<script type="text/javascript">
    $(document).ready(function() {
    $('#example').DataTable();
} );

</script>

</body>

</html>