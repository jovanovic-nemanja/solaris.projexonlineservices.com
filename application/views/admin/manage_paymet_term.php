<div class="main-panel">
        <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title">
              Manage Payment Terms
            </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Manage Payment Terms</a></li>
                <li class="breadcrumb-item active" aria-current="page">Payment Terms</li>
              </ol>

            </nav>
            <button class="btn btn-block btn-lg btn-gradient-primary mt-4 col-md-2" data-toggle="modal" data-target="#add-Unit">+ Add a Payment Term</button>
          </div>

          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                          <th>No #</th>
                          <th>Title</th>
                          <th>created date</th>
                          <th>Status</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php $i=1; foreach ($payment_terms as $key => $value) {?>
                      <tr>
                          <td><?= $i; ?></td>
                          <td><?php echo $value['title']; ?></td>
                          <td><?php echo dateConvert($value['created_at'],'d-M-Y'); ?></td>
                          <td>
                            <label class="badge badge-info">Active</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                      </tr>
                      <?php $i++; } ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
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
        <!-- partial -->
      </div>

    <div class="modal fade" id="add-Unit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Payment Terms</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="" id="addPaymentTerms">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail1">Payment Terms</label>
                  <input type="text" class="form-control" name="title" id="title"  placeholder="">
                </div>
              </div>
              <div class="form-group col-md-12 text-right">
                  <button type="button" class="btn btn-primary" onclick="saveProfile('addPaymentTerms','addPaymentTerms')">Submit</button> 
              </div>
              
            </form>
        </div>
      </div>
    </div>
</div>