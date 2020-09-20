<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
            <h3 class="page-title"> Upload Logo </h3>
        </div>
        
        <div class="row">
          <div class="col-lg-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class='row'>
                    <!--<div class='col-md-7'></div>-->
                    <div class='col-md-5'>
                        <form class="forms-sample" method="post" id='uploadlogo'>
                            <div class="form-group" id="uploadlogo" style="">
        				        <label>Upload Logo</label>
        						<div class="custom-file">
        							<input type="file" class="custom-file-input" name="uploadlogo" id="uploadlogo" style="border: none;" accept="image/*">
        							<label class="custom-file-label" for="customFile">Choose Logo</label>
        						</div>
          			        </div>
                            <div class="form-group" id="which_device">
                                <input type="radio" id="mobile" name="device" value="mobile">
                                <label for="mobile" style="margin-top: 0.2rem;">Mobile</label><br>
                                <input type="radio" id="web" name="device" value="web">
                                <label for="web" style="margin-top: 0.2rem;">Web</label><br>
                                <input type="radio" id="quote" name="device" value="quote">
                                <label for="quote" style="margin-top: 0.2rem;">Quote</label><br>
                            </div>
                            <button type="button" class="btn btn-success" name="submit" value="submit" onclick="saveProfile('uploadlogo', 'Logoupload')">Upload</button>
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