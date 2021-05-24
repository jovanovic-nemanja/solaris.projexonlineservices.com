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
                            <div class="col-12 grid-margin">
                                <div class="card">
                                    <div class="card-body text-center mb-5 pb-5">
                                        <h2>Thank You!</h2> 
                                        <br>

                                        <h4>How many smiles: <?= $smile ?></h4><br>
                                        <h4>How many normals: <?= $normal ?></h4><br>
                                        <h4>How many sad: <?= $sad ?></h4><br>
                                        <h4>How many Happy Payment Gateway: <?= $happy_payment_gateway ?></h4><br>
                                        <h4>How many Happy Information: <?= $happy_information ?></h4><br>
                                        <h4>How many Happy Products: <?= $happy_products ?></h4><br>
                                        <h4>How many Happy Ease of use: <?= $happy_easeofuse ?></h4><br>
                                        <h4>How many Happy Support: <?= $happy_support ?></h4><br>
                                        <h4>How many Happy Checkout: <?= $happy_checkout ?></h4><br>
                                        <h4>How many Unhappy Payment Gateway: <?= $unhappy_payment_gateway ?></h4><br>
                                        <h4>How many Unhappy Information: <?= $unhappy_information ?></h4><br>
                                        <h4>How many Unhappy Products: <?= $unhappy_products ?></h4><br>
                                        <h4>How many Unhappy Ease of use: <?= $unhappy_easeofuse ?></h4><br>
                                        <h4>How many Unhappy Support: <?= $unhappy_support ?></h4><br>
                                        <h4>How many Unhappy Checkout: <?= $unhappy_checkout ?></h4><br>
                                    </div>
                                </div>
                            </div> 
                            <br>
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