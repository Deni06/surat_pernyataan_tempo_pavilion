<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login - Tempo Pavilion</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/home/css/all.min.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/home/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?=base_url()?>assets/home/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?=base_url()?>assets/home/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?=base_url()?>assets/img/logo-tempo-transparent.png" />
</head>
<body>

<div class="container-scroller">
  <div class="container-fluid page-body-wrapper full-page-wrapper">
    <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
      <div class="row flex-grow">
        <div class="col-lg-6 d-flex align-items-center justify-content-center">
          <div class="auth-form-transparent text-left p-3">
            <div class="brand-logo">
              <img src="<?=base_url()?>assets/img/logo-tempo.jpg" alt="logo">
            </div>
            <h4>Welcome back!</h4>
            <h6 class="font-weight-light">Happy to see you again.</h6>
            <?php 
                            if($this->session->flashdata('error') != null){
                              echo '<div class="alert alert-block alert-danger mt-10" style="width:100%;"><button class="close close-sm" type="button" data-dismiss="alert" style="font-size:0 !important;"><i class="fa fa-times"></i></button>
                              '.$this->session->flashdata('error').'
                              </div>';
                            }
                            if($this->session->flashdata('success') != null){
                              echo '<div class="alert alert-success">
                              <p style="color:#ffffff;font-size:1.2em">'.$this->session->flashdata('success').'</p>
                              </div>';
                            }
                          ?>
            <form class="pt-3" action="<?php echo site_url('login/aksi_login'); ?>" method="POST">
              <div class="form-group">
                <label for="exampleInputEmail">Username</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="fa fa-user text-primary"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control form-control-lg border-left-0" name="username" id="username" placeholder="Username" value="">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <div class="input-group">
                  <div class="input-group-prepend bg-transparent">
                    <span class="input-group-text bg-transparent border-right-0">
                      <i class="fa fa-lock text-primary"></i>
                    </span>
                  </div>
                  <input type="password" class="form-control form-control-lg border-left-0" name="password" id="password" placeholder="Password">
                </div>
              </div>
              <div class="my-3">
                <button type="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit">Login</button>
              </div>
            </form>
          </div>
        </div>
        <div class="col-lg-6 login-half-bg d-flex flex-row">
          <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2020  All rights reserved.</p>
        </div>
      </div>
    </div>
  </div>
</div>

  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?=base_url()?>assets/home/js/vendor.bundle.base.js"></script>
  <script src="<?=base_url()?>assets/home/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?=base_url()?>assets/home/js/off-canvas.js"></script>
  <script src="<?=base_url()?>assets/home/js/hoverable-collapse.js"></script>
  <script src="<?=base_url()?>assets/home/js/misc.js"></script>
  <script src="<?=base_url()?>assets/home/js/settings.js"></script>
  <script src="<?=base_url()?>assets/home/js/todolist.js"></script>
  <!-- endinject -->
</body>
</html>

