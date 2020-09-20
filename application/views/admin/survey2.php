    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <div class="card">
                        <div class="card-body">
                            <h4>What made you happy or unhappy about our site?</h4> 
                            <br>
                            <div class="section-experience">
                                
                            </div>
                            <br>
                            <a class="btn btn-success prev" id="prev" href="<?= base_url('admin/app/survey1'); ?>">BACK</a>
                            <a class="btn btn-danger submit" id="submit" href="<?= base_url('admin/app/survey2'); ?>">SUBMIT</a>
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