<div class="container-fluid page-body-wrapper">

    <div class="main-panel">

      <div class="content-wrapper">

        <div class="page-header">

            <?= ($edit == true)?'<h3 class="page-title"> Edit Product </h3>':'<h3 class="page-title"> Add New Product </h3>'; ?>

        </div>

        

        <div class="row">

          <div class="col-lg-12 grid-margin">

            <div class="card">

              <div class="card-body">

                

                <form class="forms-sample" method="post" action="" id="addCategory">

                  <div class="form-group row">

                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Product Name</label>

                    <div class="col-sm-5">

                      <input type="text" class="form-control" id="product_name" placeholder="" name="product_name" value="<?php echo isset($edit_products->product_name)?$edit_products->product_name:''; ?>">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label class="col-sm-3 col-form-label" for="inputPassword4">Product Category</label>

                    <div class="col-sm-5">

                      <select class="js-example-basic-single" style="width:100%" name="product_cat" id="product_cat">

                        <option>Select</option>

                        <?php foreach($categories as $value) {

                            if ($edit == false) { ?>

                                <option value="<?php  echo $value['id']; ?>"><?php  echo $value['title']; ?></option>

                            <?php }else { ?>

                                <option value="<?php  echo $value['id']; ?>" <?php if($edit_products->product_cat==$value['id']){ echo 'selected'; } ?> ><?php  echo $value['title']; ?></option>

                        <?php } } ?>  

                      </select>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label class="col-sm-3 col-form-label" for="inputPassword4">Product Unit</label>

                    <div class="col-sm-5">

                      <select class="js-example-basic-single" style="width:100%" name="product_unit" id="product_unit">

                        <option>Select</option>

                        <?php foreach($units as $value) {

                            if ($edit == false) { ?>

                                <option value="<?php  echo $value['id']; ?>"><?php  echo $value['name']; ?></option>

                            <?php }else { ?>

                                <option value="<?php  echo $value['id']; ?>" <?php if($edit_products->product_unit==$value['id']){ echo 'selected'; } ?> ><?php  echo $value['name']; ?></option>

                        <?php } } ?>  

                      </select>

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Product Description</label>

                    <div class="col-sm-5">

                      <input type="text" class="form-control" id="product_desc" placeholder="" name="product_desc" value="<?php echo isset($edit_products->product_desc)?$edit_products->product_desc:''; ?>">

                    </div>

                  </div>

                  <div class="form-group row">

                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Product Cost(AED)</label>

                    <div class="col-sm-5">

                      <input type="text" class="form-control" id="product_cost_aed" placeholder="" name="product_cost_aed" value="<?php echo isset($edit_products->cost_in_aed)?$edit_products->cost_in_aed:''; ?>">

                    </div>

                  </div>

                    <?php 
                        if($edit == true) { ?>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <button type="button" class="btn btn-success" onclick="saveProfile('addCategory','addProduct')">Submit</button>
                    <?php }else{ ?>
                        <button type="button" class="btn btn-success" onclick="saveProfile('addCategory','addProduct')">Submit</button>
                    <?php } ?>
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