<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Manage Sales Person
        </h3>
        </div>
        <div class="row">
            <!--<div class="col-md-12">-->
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                      <form class="" method="post" action="" id="addSalesPerson">
                        <div class="row">
                          <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" class="form-control pulsate" name="name" id="name" value="<?php echo isset($edit_salesperson->name) ? $edit_salesperson->name: ''; ?>" placeholder="">
                          </div>
                          <div class="form-group col-md-12">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control pulsate" name="email" id="email" value="<?php echo isset($edit_salesperson->email) ? $edit_salesperson->email: ''; ?>" placeholder="">
                            <input type="hidden" name="action" value="<?php if(isset($_GET['action'])=='edit'){echo 'edit'; }  ?>">
                            <input type="hidden" name="id" value="<?= isset($_GET['action'])?$_GET['id']:''; ?>">
                          </div>
                        </div>
                        <div class="form-group col-md-12 text-right">
                          <button type="button" class="btn btn-success mb-2" onclick="saveProfile('addSalesPerson','addSalesPerson')">Submit</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">       
                            <div class="table-responsive">
                                <table id="order-listing" class="table">
                                    <thead>
                                      <tr>
                                        <th style="width: 10%;">No #</th>
                                        <th style="width: 10%;">Name</th>
                                        <th style="width: 10%;">Email</th>
                                        <!--<th>Created date</th>-->
                                        <!-- <th>Status</th> -->
                                        <th style="width: 70%;">Actions</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <?php $i=1; foreach ($salesPerson as $key => $value) { ?>
                                        <tr>
                                          <td><?= $i; ?></td>
                                          <td><?php echo $value['name']; ?></td>
                                          <td><?php echo $value['email']; ?></td>
                                          <!--<td><?php echo dateConvert($value['created_at'],'d-M-Y'); ?></td>-->
                                          <!-- <td>
                                            <label class="badge badge-info">Active</label>
                                          </td> -->
                                          <td>
                                            <a title="View" type="button" id="<?=$value['id']; ?>" href="<?=  base_url('admin/app/salesperson?action=edit&id='.$value['id'].''); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                            <?php if(empty($this->session->userdata('is_admin_logged'))){ ?>
                                            <?php }else{ ?>
                                              <button title="Deete" type="button" id="<?=$value['id']; ?>" class="btn btn-danger delete_row"><i class="fa fa-trash" aria-hidden="true"></i></button>
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
            <!--</div>-->
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

<?php 
    if($edit == true) { ?>
        <style type="text/css">
          .pulsate {
            /*background: red;*/
            /*border-radius: 50%;*/
            margin: 10px;
            /*height: 20px;*/
            /*width: 20px;*/
        
            /*box-shadow: 0 0 0 0 rgba(0, 0, 0, 1);*/
            /*transform: scale(1);*/
            animation: pulse 2s;
          }
        
          @keyframes pulse {
            0% {
              transform: scale(0.95);
              box-shadow: 0 0 0 0 rgb(42, 169, 45);
            }
        
            70% {
              transform: scale(1);
              box-shadow: 0 0 0 10px rgba(20, 222, 222, 0);
            }
        
            100% {
              transform: scale(0.95);
              box-shadow: 0 0 0 0 rgb(42, 169, 45);
            }
          }
        </style>
<?php } ?>

<script>
    $(document).ready(function() {
        $(".delete_row").click(function(e){
            e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'salesperson'};

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