<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
      <div class="content-wrapper">
        <div class="page-header">
          <h3 class="page-title"> Change Password </h3>
        </div>
        
        <div class="row">
          <div class="col-lg-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <form class="forms-sample" method="post" action="" id="addUser">
                  <div class="form-group row">
                    <label for="exampleInputEmail1" class="col-sm-3 col-form-label">Old Password :</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="name" placeholder="Old Pass" name="old_pass">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="exampleInputEmail1">New Password :</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="password" placeholder="New Password" name="new_pass">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label" for="exampleInputEmail1">Confirm Password :</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" id="password" placeholder="Confirm Password" name="confirm_pass">
                    </div>
                  </div>
                  
                  <button type="button" class="btn btn-success" onclick="saveProfile('addUser','changepass')">Submit</button>
                  <!--<input type="submit" class="btn btn-success" value="login" name="change_pass"/><br />-->
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