  <div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Manage Currency </h3>
        </div>
        
        <div class="row">
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">USD to AED</h4>
                <p class="card-description"> This function changes the currency rate. </p>
                <form class="form-inline" method="post" action="" id="updateCurrency">
                  <label class="sr-only" for="inlineFormInputName2">Name</label>
                  <input type="text" class="form-control mb-2 mr-sm-2" id="convent_value" placeholder="" name="convent_value" value="<?php echo isset($currency[0]['convert_value']) ? $currency[0]['convert_value']: ''; ?>">
                  
                  <button type="button" class="btn btn-success mb-2" onclick="saveProfile('updateCurrency','manage_currency')">Update</button>
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