<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Survey</title>

        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/vendors/css/vendor.bundle.base.css">
        <link rel="stylesheet" href="<?= base_url('demo_admin_assets'); ?>/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="<?= base_url('demo_admin_assets'); ?>/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <div class="horizontal-menu">
                <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                    <div class="container">
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo" href="<?= base_url('/admin/app/surveyNew');  ?>"><img src="<?= base_url('admin_assets')  ?>/images/Projex_Strap_blk.png" alt="logo" style="height: 60px;" /></a>
                            <a class="navbar-brand brand-logo-mini" href="<?= base_url('/admin/app/surveyNew');  ?>"><img src="<?= base_url('admin_assets')  ?>/images/Projex_Strap_blk.png" alt="logo" style="height: 60px;" /></a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- partial -->
            <div class="container-fluid page-body-wrapper">
                <div class="main-panel">
                    <div class="content-wrapper">
                        <div class="row">
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5;"> Smile<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 5rem;">😊 </h2><br>
                                        <h5 class="mb-0">How many peoples chosen a smiles : <?= $smile; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#3892ec;"> Normal<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 5rem;">😐 </h2><br>
                                        <h5 class="mb-0">How many peoples chosen a normals : <?= $normal; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#f92788;"> Sad<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 5rem;">🙁 </h2><br>
                                        <h5 class="mb-0">How many peoples chosen a sads : <?= $sad; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <hr/>

                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#3892ec;"> Payment Gateway<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👍 </h2><br>
                                        <h5 class="mb-0">How many peoples liked a payment Gateways : <?= $happy_payment_gateway; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#3892ec;"> Information<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👍 </h2><br>
                                        <h5 class="mb-0">How many peoples liked a informations : <?= $happy_information; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#3892ec;"> Product<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👍 </h2><br>
                                        <h5 class="mb-0">How many peoples liked a products : <?= $happy_products; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color: #3892ec;"> Ease of use<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👍 </h2><br>
                                        <h5 class="mb-0">How many peoples liked a Ease of use : <?= $happy_easeofuse; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#3892ec;"> Support<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👍 </h2><br>
                                        <h5 class="mb-0">How many peoples liked a Support : <?= $happy_support; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#3892ec;"> Checkout<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👍 </h2><br>
                                        <h5 class="mb-0">How many peoples liked a Checkout : <?= $happy_checkout; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>

                            <hr/>

                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#f92788;"> Payment Gateway<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👎 </h2><br>
                                        <h5 class="mb-0">How many peoples unliked a payment Gateways : <?= $unhappy_payment_gateway; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#f92788;"> Information<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👎 </h2><br>
                                        <h5 class="mb-0">How many peoples unliked a informations : <?= $unhappy_information; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#f92788;"> Product<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👎 </h2><br>
                                        <h5 class="mb-0">How many peoples unliked a products : <?= $unhappy_products; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#f92788;"> Ease of use<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👎 </h2><br>
                                        <h5 class="mb-0">How many peoples unliked a Ease of use : <?= $unhappy_easeofuse; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#f92788;"> Support<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👎 </h2><br>
                                        <h5 class="mb-0">How many peoples unliked a Support : <?= $unhappy_support; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="col-md-4 grid-margin stretch-card">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#f92788;"> Checkout<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 2rem;">👎 </h2><br>
                                        <h5 class="mb-0">How many peoples unliked a Checkout : <?= $unhappy_checkout; ?></h5><br>
                                    </div>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        
                <footer class="footer container">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <?php 
                            $date = getdate();
                            $year = $date['year'];
                        ?>
                    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?= $year; ?> </span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> <a href="https://solarisdubai.com/">Powered by Solaris</a></span>
                  </div>
                </footer>
              </div>
        </div>

        <script src="<?= base_url('demo_admin_assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/off-canvas.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/hoverable-collapse.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/misc.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/settings.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/todolist.js"></script>
        
    </body>
</html>