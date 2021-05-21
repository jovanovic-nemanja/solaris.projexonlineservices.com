<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Survey</title>

        <link rel="stylesheet" href="assets/vendors/simple-line-icons/css/simple-line-icons.css">
        <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
        <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
        
        <link rel="stylesheet" href="assets/css/style.css">
        <!-- End layout styles -->
        <link rel="shortcut icon" href="assets/images/favicon.png" />
    </head>
    <body>
        <div class="container-scroller">
            <div class="horizontal-menu">
                <nav class="navbar top-navbar col-lg-12 col-12 p-0">
                    <div class="container">
                        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
                            <a class="navbar-brand brand-logo" href="https://projexcost.com/survey"><img src="assets/images/Projex_Strap_blk.png" alt="logo" style="height: 60px;" /></a>
                            <a class="navbar-brand brand-logo-mini" href="https://projexcost.com/survey"><img src="assets/images/Projex_Strap_blk.png" alt="logo" style="height: 60px;" /></a>
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
                                    <div class="card-body">
                                        <div class="container text-center pt-5">
                                            <h4 class="mb-3 mt-5">How was your online experience in using our portal?</h4>
                                            <div class="row pricing-table">
                                                <div class="col-md-4 grid-margin stretch-card pricing-card" style="cursor: pointer;">
                                                    <div class="card border-priary border pricing-card-body">
                                                        
                                                        <ul class="list-unstyled plan-features">
                                                            
                                                            <h1 style="font-size: 700%;">😊</h1>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 grid-margin stretch-card pricing-card" style="cursor: pointer;">
                                                    <div class="card border border-sucess pricing-card-body">
                                                        
                                                        <ul class="list-unstyled plan-features">
                                                            
                                                            <h1 style="font-size: 700%;">😐</h1>
                                                        </ul>
                                                        
                                                    </div>
                                                </div>
                                                <div class="col-md-4 grid-margin stretch-card pricing-card" style="cursor: pointer;">
                                                    <div class="card border border-dager pricing-card-body">
                                                        
                                                        <ul class="list-unstyled plan-features">
                                                            
                                                            <h1 style="font-size: 700%;">🙁</h1>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <a class="btn btn-success next" id="next" href="survey.php">NEXT</a>
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
            <!-- page-body-wrapper ends -->
        </div>

        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
    </body>
</html>

<style>
    .pricing-card-body:hover {
        background-color: grey;
    }
    .pricing-card-body:active {
        background-color: black;
    }
    .pricing-card-body.active {
        background-color: black;
    }
</style>

<script>
    $(document).ready(function() {
       $('.pricing-card-body').click(function() {
            $(".pricing-card-body").removeClass('active');
            $(this).addClass('active');
       }) ;
    });
</script>