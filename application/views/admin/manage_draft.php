<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Manage Cost Sheet
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
                      <th>Job/Template</th>
                      <th>Customer</th>
                      <th>Venue</th>
                      <th>Job type</th>
                      <!-- <th>Created date</th> -->
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php if(!empty($cost_sheet)){ $i=1; foreach ($cost_sheet as $key => $value) {?>
                      <tr>
                        <td style="width: 1%; word-wrap: break-word;"><?= $i; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo get_single_col_value('customer','id',$value['customer'],'company_name'); ?></td>
                        <td><?php echo get_single_col_value('venue','id',$value['venue'],'title'); ?></td>
                        <td><?php echo get_single_col_value('cost_type','id',$value['cost_type'],'title'); ?></td>
                        <!--<td><?php echo dateConvert($value['created_at'],'d-M-Y'); ?></td>-->
                       
                        <td>
                          <a type="button" id="<?=$value['id']; ?>" href="<?=  base_url('admin/app/cost_sheet/'.$value['id'].''); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                          <?php if(empty($this->session->userdata('is_admin_logged'))){ ?>
                          <?php }else{ ?>
                            <button type="button" id="<?=$value['id']; ?>" class="btn btn-danger delete_row"><i class="fa fa-trash" aria-hidden="true"></i></button>
                          <?php } ?>
                        </td>
                      </tr>
                    <?php $i++; } } ?>
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
        var deldata = {"id":getvalue,"table":'cost_sheet'};

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