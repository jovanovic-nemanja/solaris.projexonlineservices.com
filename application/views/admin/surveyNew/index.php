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
                                    <div class="card-body">
                                        <form method="post" id="surveyForm">
                                            <div class="wizard1 acive_wizard" id="wizard1">
                                                <div class="container text-center pt-5">
                                                    <h4 class="mb-3 mt-5">How was your online experience in using our portal?</h4>
                                                    <div class="row pricing-table">
                                                        <div class="col-md-4 grid-margin stretch-card pricing-card" style="cursor: pointer;">
                                                            <div class="card border-priary border pricing-card-body" data-value="1">
                                                                
                                                                <ul class="list-unstyled plan-features">
                                                                    
                                                                    <h1 style="font-size: 700%;">😊</h1>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 grid-margin stretch-card pricing-card" style="cursor: pointer;">
                                                            <div class="card border border-sucess pricing-card-body" data-value="2">
                                                                
                                                                <ul class="list-unstyled plan-features">
                                                                    
                                                                    <h1 style="font-size: 700%;">😐</h1>
                                                                </ul>
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 grid-margin stretch-card pricing-card" style="cursor: pointer;">
                                                            <div class="card border border-dager pricing-card-body" data-value="3">
                                                                
                                                                <ul class="list-unstyled plan-features">
                                                                    
                                                                    <h1 style="font-size: 700%;">🙁</h1>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <br>

                                                    <button type="button" class="btn btn-success next" id="next">NEXT</button>
                                                </div>
                                            </div>

                                            <div class="wizard2" id="wizard2">
                                                <h4>What made you happy about our portal?</h4> 
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="payment_gateway" data-value="1">Payment Gateway</button>
                                                            </div>
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="information" data-value="2">Information</button>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="products" data-value="3">Products</button>
                                                                
                                                            </div>
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="ease_of_use" data-value="4">Ease of use</button>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="support" data-value="5">Support</button>
                                                                
                                                            </div>
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="checkout" data-value="6">Checkout</button>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <button type="button" class="btn btn-success prev" id="prev">BACK</button>
                                                <button type="button" class="btn btn-success next" id="next">NEXT</button>
                                            </div>

                                            <div class="wizard3" id="wizard3">
                                                <h4>What made you not happy about our portal?</h4> 
                                                <br>
                                                <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="payment_gateway" data-value="1">Payment Gateway</button>
                                                            </div>
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="information" data-value="2">Information</button>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="products" data-value="3">Products</button>
                                                                
                                                            </div>
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="ease_of_use" data-value="4">Ease of use</button>
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="support" data-value="5">Support</button>
                                                                
                                                            </div>
                                                            <div class="form-check">
                                                                <button type="button" class='btn btn-default' id="checkout" data-value="6">Checkout</button>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <br>
                                                <button type="button" class="btn btn-success prev" id="prev">BACK</button>
                                                <button type="button" class="btn btn-danger next" id="next">SUBMIT</button>
                                            </div>
                                        </form>
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

        <script src="<?= base_url('demo_admin_assets'); ?>/vendors/js/vendor.bundle.base.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/off-canvas.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/hoverable-collapse.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/misc.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/settings.js"></script>
        <script src="<?= base_url('demo_admin_assets'); ?>/js/todolist.js"></script>
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
        var current_page = 1;
        var data = {step1: 1, step2: [], step3: []};

        $('.pricing-card-body').click(function() {
            $(".pricing-card-body").removeClass('active');
            $(this).addClass('active');

            var cur_val = $(this).attr('data-value');
            data.step1 = cur_val;
        });

        $('button').click(function() {
            if($(this).attr('class') == "btn btn-default active") {
                $(this).attr('class', 'btn btn-default');
                return;
            }if($(this).attr('class') == "btn btn-default") {
                $(this).attr('class', 'btn btn-default active');    
                return;
            }
        });

        $('#wizard3').hide();
        $('#wizard2').hide();

        $('.next').click(function() {
            if (current_page == 1) {
                var actived_card = $('.pricing-card-body.active');
                if (actived_card.length == 0) {
                    alert('Please choose any card!');
                    return;
                }else{
                    $('#wizard1').hide();
                    $('#wizard1').removeClass('acive_wizard');

                    $('#wizard2').show();
                    $('#wizard3').hide();
                    $('#wizard2').addClass('acive_wizard');
                    current_page = 2;
                }
            }else if(current_page == 2) {
                var chosen_item = $('#wizard2 .active');
                if (chosen_item.length == 0) {
                    alert('Please choose any item!');
                    return;
                }else{
                    $('#wizard1').hide();
                    $('#wizard1').removeClass('acive_wizard');

                    $('#wizard2').hide();
                    $('#wizard2').removeClass('acive_wizard');

                    $('#wizard3').show();
                    $('#wizard3').addClass('acive_wizard');

                    var chosen_happy_items = $('#wizard2 .active');
                    data.step2 = [];
                    for (var i = 0; i < chosen_happy_items.length; i++) {
                        data.step2[i] = chosen_happy_items[i].dataset.value;    
                    }

                    current_page = 3;
                }
            }else if(current_page == 3) {
                var chosen_item = $('#wizard3 .active');
                if (chosen_item.length == 0) {
                    alert('Please choose any item!');
                    current_page = 3;
                    return;
                }else{
                    var chosen_unhappy_items = $('#wizard3 .active');
                    data.step3 = [];
                    for (var j = 0; j < chosen_unhappy_items.length; j++) {
                        data.step3[j] = chosen_unhappy_items[j].dataset.value;
                    }
                    
                    submitSurvey(data);
                }
            }
        });

        $('.prev').click(function() {
            if (current_page == 2) {
                $('#wizard1').show();
                $('#wizard1').addClass('acive_wizard');

                $('#wizard2').hide();
                $('#wizard2').removeClass('acive_wizard');

                $('#wizard3').hide();
                $('#wizard3').removeClass('acive_wizard');
                current_page = 1;
            }
            if (current_page == 3) {
                $('#wizard2').show();
                $('#wizard2').addClass('acive_wizard');

                $('#wizard1').hide();
                $('#wizard1').removeClass('acive_wizard');

                $('#wizard3').hide();
                $('#wizard3').removeClass('acive_wizard');
                current_page = 2;
            }
        });

        function submitSurvey(arr) {
            $.ajax({
                type: "POST",
                data: arr,
                url: "<?php echo base_url();?>index.php/admin/app/addSurvey",
                success: function(status, result) {
                    var res = JSON.parse(status);
                    if (res.err == 1) {
                        current_page = 1;
                        window.location.href = "<?php echo base_url();?>index.php/admin/app/thankyouSurvey";
                    }else{
                        alert(res.msg);
                        return;
                    }
                }
            });
        }
    });
</script>