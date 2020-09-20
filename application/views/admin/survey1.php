    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <div class="container text-center pt-5">
                                    <h4 class="mb-3 mt-5">How was your online experience in using our portal?</h4>
                                    <p class="w-75 mx-auto mb-5">Choose the status that suits you the best. </p>
                                    <div class="row pricing-table">
                                        <div class="col-md-4 grid-margin stretch-card pricing-card">
                                            <div class="card border-primary border pricing-card-body">
                                                <div class="text-center pricing-card-head">
                                                  <h3 class="text-primary">Normal</h3>
                                                  <p>Normal Business</p>
                                                  <h1 class="font-weight-normal mb-4">👉</h1>
                                                </div>
                                                <ul class="list-unstyled plan-features">
                                                    <li style="text-align: center;">Level is a normal</li>
                                                    <h1 style="font-size: 700%;">🙂</h1>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-4 grid-margin stretch-card pricing-card">
                                            <div class="card border border-success pricing-card-body">
                                                <div class="text-center pricing-card-head">
                                                  <h3 class="text-success">Professional</h3>
                                                  <p>Professional Business</p>
                                                  <h1 class="font-weight-normal mb-4">👍</h1>
                                                </div>
                                                <ul class="list-unstyled plan-features">
                                                    <li style="text-align: center;">Level is a professional</li>
                                                    <h1 style="font-size: 700%;">😃</h1>
                                                </ul>
                                                <!--<div class="wrapper">-->
                                                <!--  <a href="#" class="btn btn-success btn-block">Start trial</a>-->
                                                <!--</div>-->
                                                <!--<p class="mt-3 mb-0 plan-cost text-success">or purchase now</p>-->
                                            </div>
                                        </div>
                                        <div class="col-md-4 grid-margin stretch-card pricing-card">
                                            <div class="card border border-danger pricing-card-body">
                                                <div class="text-center pricing-card-head">
                                                  <h3 class="text-danger">Never</h3>
                                                  <p>Never Business</p>
                                                  <h1 class="font-weight-normal mb-4">👎</h1>
                                                </div>
                                                <ul class="list-unstyled plan-features">
                                                    <li style="text-align: center;">Level is a bottom</li>
                                                    <h1 style="font-size: 700%;">😭</h1>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <br>
                                    <a class="btn btn-success next" id="next" href="<?= base_url('admin/app/survey2'); ?>">NEXT</a>
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