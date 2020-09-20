<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Update User </h3>
        </div>
        
        <div class="row">
          <div class="col-lg-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="post" action="" id="addUser">
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Name</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="name" placeholder="" name="name" value="<?= $userData->name; ?>">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" readonly="readonly" id="" value="<?= $userData->username; ?>" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Email address</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" readonly="readonly" id="email" value="<?= $userData->email; ?>" placeholder="" name="email">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="exampleInputEmail1">Password</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" name="password" id="password" value="<?= $userData->user_password; ?>" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="exampleInputEmail1">User type</label>
                    <div class="col-sm-5">
                      <select class="js-example-basic-single" style="width:100%" name="user_type" id="user_type">
                        <option>Select</option>
                        <?php foreach($user_type as $value) { ?>
                          <option <?php if($userData->user_role_id == $value['role_id'] ){echo 'selected'; } ?> value="<?php  echo $value['id']; ?>"><?php  echo $value['name']; ?></option>
                        <?php } ?>  
                      </select>
                      <input type="hidden"  name="user_id" value="<?= $this->uri->segment(4); ?>">
                    </div>
                  </div>
                  
                  <button type="button" class="btn btn-success" onclick="saveProfile('addUser','update_user_data')">Submit</button>
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