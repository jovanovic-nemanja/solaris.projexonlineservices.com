<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Backup Database </h3>
        </div>

        <div class="row">
          <div class="col-lg-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="post" action="" id="backup_database">
                    <a type="button" class="btn btn-success" href="<?= base_url('admin/app/backup_database'); ?>">Backup</a>
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