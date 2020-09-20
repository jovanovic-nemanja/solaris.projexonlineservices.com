<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Add New Customer </h3>
        </div>
        
        <div class="row">
          <div class="col-lg-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="post" action="" id="addCustomer">
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Company Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="company_name" placeholder="" name="company_name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="email" class="col-sm-3 col-form-label">Email address</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="email" placeholder="" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">VAT number</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="vat_number" placeholder="" name="vat_number">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Address</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="address" placeholder="" name="address" >
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Telephone number</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="tel_number" placeholder="" name="tel_number" >
                    </div>
                  </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="inputPassword4">Payment terms 1</label>
                      <div class="col-sm-5">
                        <select class="js-example-basic-single" style="width:100%" name="payment_terms" id="payment_terms">
                          <option>Select</option>
                          <?php foreach($payment_terms as $value) { ?>
                            <option value="<?php  echo $value['id']; ?>"><?php  echo $value['title']; ?></option>
                          <?php } ?>  
                        </select>
                      </div>
                    </div>
                     
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="inputPassword4">Payment terms 2</label>
                      <div class="col-sm-5">
                        <select class="js-example-basic-single" style="width:100%" name="payment_terms2" id="payment_terms2">
                          <option>Select</option>
                          <?php foreach($payment_terms as $value) { ?>
                            <option value="<?php  echo $value['id']; ?>"><?php  echo $value['title']; ?></option>
                          <?php } ?>  
                        </select>
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label" for="inputPassword4">Payment terms 3</label>
                      <div class="col-sm-5">
                        <select class="js-example-basic-single" style="width:100%" name="payment_terms3" id="payment_terms3">
                          <option>Select</option>
                          <?php foreach($payment_terms as $value) { ?>
                            <option value="<?php  echo $value['id']; ?>"><?php  echo $value['title']; ?></option>
                          <?php } ?>  
                        </select>
                      </div>
                    </div>
                    <button type="button" class="btn btn-success" onclick="saveProfile('addCustomer','addCustomer')">Submit</button>
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