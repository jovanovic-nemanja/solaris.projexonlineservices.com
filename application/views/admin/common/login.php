<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.bootstrapdash.com/demo/purple/jquery/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 11:54:49 GMT -->
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Estimator Admin</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>admin_assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>admin_assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="<?= base_url(); ?>admin_assets/vendors/css/vendor.bundle.addons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>admin_assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>admin_assets/images/favicon.png" />
  
  <style type="text/css">
     .auth .login-half-bg {
        background: url(<?= base_url('demo_admin_assets'); ?>/images/auth/login-bg.jpg);
        background-size: cover;
     }
     .content-wrapper {
         background: #ecf0f4;
     }
  </style>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg"  style="margin-top: 0px!important;">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
                <?php if($this->session->flashdata('error')) { ?>
                  <div class="col-sm-12 alert alert-danger alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                    <?php echo $this->session->flashdata('error'); ?>
                  </div>
                <?php } ?>
              <div class="brand-logo">
                <img src="<?= base_url('admin_assets'); ?>/images/projexlogo.jpg.PNG" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
              <form class="pt-3" action="<?= base_url('index.php/admin/login'); ?>" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-success"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0 username" name="username" id="" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-success"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0 password" name="password" id="exampleInputPassword" placeholder="Password"> 
                    <?php
                        $csrf = array(
                            'name' => $this->security->get_csrf_token_name(),
                            'hash' => $this->security->get_csrf_hash()
                        );
                    ?>
                <input type="hidden" class="editInput csrf form-control input-sm" name="<?=$csrf['name'];?>" value="<?=$csrf['hash'];?>" >                       
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <div class="form-check">
                    <label class="form-check-label text-muted">
                      <input type="checkbox" class="form-check-input">
                      Keep me signed in
                    </label>
                  </div>
                </div>
                
                <a class="" href="<?= base_url('admin/app/forgotpassword'); ?>" style="color: #9c9fa6;">
                  <i class="icon-trash text-primary"></i>
                  Forgot Password
                </a>
                
                <div class="my-3">
                    <button type="submit" class="btn-lock" style="display: none;">LOGIN</button>
                    <!--<button type="submit" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn btn-login">LOGIN</button>-->
                </div>
              </form>
              <button type="button" class="btn btn-block btn-success btn-lg font-weight-medium auth-form-btn btn-login">LOGIN</button>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
            <?php
                $date = getdate();
                $year = $date['year'];
                ?>
             <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; <?= $year; ?> All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="<?= base_url(); ?>admin_assets/vendors/js/vendor.bundle.base.js"></script>
  <script src="<?= base_url(); ?>admin_assets/vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>admin_assets/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>admin_assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>admin_assets/js/misc.js"></script>
  <script src="<?= base_url(); ?>admin_assets/js/settings.js"></script>
  <script src="<?= base_url(); ?>admin_assets/js/todolist.js"></script>
  
  <script>
        $(document).ready(function() {
            $('.btn-login').click(function() {
                var username = $('.username').val();
                var password = $('.password').val();
                if(!username) {
                    $.toast({
                      heading: 'Required Field',
                      text: 'The Username field cannot be blank.',
                      position: "top-right",
                      icon: 'success',
                      stack: false,
                      loaderBg: '#46c35f'
                    });
                }else if(!password) {
                    $.toast({
                      heading: 'Required Field',
                      text: 'The Password field cannot be blank.',
                      position: "top-right",
                      icon: 'success',
                      stack: false,
                      loaderBg: '#46c35f'
                    });
                }else if(!username && !password){
                    $.toast({
                      heading: 'Required Fields',
                      text: 'The Username and Password fields cannot be blank.',
                      position: "top-right",
                      icon: 'success',
                      stack: false,
                      loaderBg: '#46c35f'
                    });
                }else{
                    $('.btn-lock').click();
                }
            });
        });
        
  </script>
  <!-- endinject -->
</body>


<!-- Mirrored from www.bootstrapdash.com/demo/purple/jquery/pages/samples/login-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 28 Dec 2018 11:54:49 GMT -->
</html>
