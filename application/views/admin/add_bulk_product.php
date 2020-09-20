<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Bulk Product Import </h3>
        </div>
        
        <div class="row">
          <div class="col-lg-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class='row'>
                    <!--<div class='col-md-7'></div>-->
                    <div class='col-md-5'>
                        <form class="forms-sample" method="post" id='importdata'>
                            <div class="form-group" id="pdfupload" style="">
        				        <label>Upload CSV</label>
        						<div class="custom-file">
        							<input type="file" class="custom-file-input" name="uploadExcel" id="uploadExcel" style="border: none;" accept=".csv">
        							<label class="custom-file-label" for="customFile">Choose CSV</label>
        						</div>
        				    </div>
                            <button type="button" class="btn btn-success" name="submit" value="submit" onclick="saveProfile('importdata','importdata')">Upload</button>
                            <a href='<?= base_url('../uploads/quotationpdf/15916355325ede6e4c6c1fereal.csv'); ?>' class='btn btn-danger'>Download Sample</a>
                        </form>
                    </div>
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