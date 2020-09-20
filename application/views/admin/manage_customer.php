<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Manage Customer
        </h3>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-body">       
              <div class="table-responsive">
                <table id="order-listing" class="table">
                  <thead>
                    <tr>
                      <th>No #</th>
                      <th>Company Name</th>
                      <th>Email address</th>
                      <th>VAT number</th>
                      <th>Payment terms</th>
                      <th>Telephone number</th>
                      <!--<th>Created date</th>-->
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i=1; foreach ($customer as $key => $value) {?>
                      <tr>
                        <td style="width: 1%; word-wrap: break-word;"><?= $i; ?></td>
                        <td><?php echo $value['company_name']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['vat_number']; ?></td>
                        <td><?php echo get_single_col_value('payment_terms','id',$value['payment_terms'],'title'); ?></td>
                        <td><?php echo $value['tel_number']; ?></td>
                        <!--<td><?php echo dateConvert($value['created_at'],'d-M-Y'); ?></td>-->
                       
                        <td>
                            <a type="button" id="<?=$value['id']; ?>" href="<?=  base_url('admin/app/edit_customers/'.$value['id'].''); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                            <?php if(empty($this->session->userdata('is_admin_logged'))){ ?>
                            <?php }else{ ?>
                              <button type="button" id="<?=$value['id']; ?>" class="btn btn-danger delete_row"><i class="fa fa-trash" aria-hidden="true"></i></button>
                            <?php } ?>
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
      <br>
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
</div>

<script>
    $(document).ready(function() {
      $(".delete_row").click(function(e){
        e.preventDefault();    
        var getvalue = $(this).attr("id");
        var deldata = {"id":getvalue,"table":'customer'};

        if(confirm("Are you sure want to delete this record?")) {
          $.ajax({
            type:"POST",
            data:deldata,
            url:"<?php echo base_url();?>index.php/admin/app/delete_record",
            statusCode:{
              200:function(data) {      
                console.log(data);        
              },
              500:function(data){
                console.log("Error :  Internal Server Error");
              },
              404:function(data){
                console.log("Error :  Page not found");
              },
              502:function(data){
                console.log("Error :  Internal Server Error");
              }
            }
          }); //ajax close

          window.location.href = window.location.href; 
        } 
        return false;
      });
    });
</script>