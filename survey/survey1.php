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
        <!--<link rel="stylesheet" href="assets/vendors/jquery-tags-input/jquery.tagsinput.min.css">-->
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
                                        <h4>What made you not happy about our site?</h4> 
                                        <br>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <button class='btn btn-default'>Payment Gateway</button>
                                                    </div>
                                                    <div class="form-check">
                                                        <button class='btn btn-default'>Information</button>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <button class='btn btn-default'>Products</button>
                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <button class='btn btn-default'>Ease of use</button>
                                                        
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <button class='btn btn-default'>Support</button>
                                                        
                                                    </div>
                                                    <div class="form-check">
                                                        <button class='btn btn-default'>Checkout</button>
                                                        
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <br>
                                        <a class="btn btn-success prev" id="prev" href="survey.php">BACK</a>
                                        <!--<a class="btn btn-danger submit" id="submit" href="survey.php">SUBMIT</a>-->
                                        <button class="btn btn-danger" onclick="showSwal('basic')">SUBMIT</button>
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

        <script src="assets/vendors/js/vendor.bundle.base.js"></script>
        <script src="assets/vendors/sweetalert/sweetalert.min.js"></script>
        <!--<script src="assets/vendors/jquery-tags-input/jquery.tagsinput.min.js"></script>-->
        <!--<script src="assets/js/form-addons.js"></script>-->
        <script src="assets/js/off-canvas.js"></script>
        <script src="assets/js/hoverable-collapse.js"></script>
        <script src="assets/js/misc.js"></script>
        <script src="assets/js/settings.js"></script>
        <script src="assets/js/todolist.js"></script>
        <script src="assets/js/alerts.js"></script>
        
    </body>
</html>

<style>
    .btn-default {
        border-color: black;
        background-color: white;
        color: black;
    }
    
    .btn-default:hover {
        color: white;
        background-color: black;
    }
    .btn-default.active {
        color: white;
        background-color: black;
    }
    .btn-default:active {
        color: white;
        background-color: black;
    }
</style>
<script>
    $(document).ready(function() {
       $('button').click(function() {
            if($(this).attr('class') == "btn btn-default active") {
                $(this).attr('class', 'btn btn-default');
                return;
            }if($(this).attr('class') == "btn btn-default") {
                $(this).attr('class', 'btn btn-default active');    
                return;
            }
       }) ;
    });
</script>