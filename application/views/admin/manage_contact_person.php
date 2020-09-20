<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Manage Contact Person
        </h3>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="card">
                        

            <div class="card-body">
                <form class="" method="post" action="" id="addContactPerson">
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>Customer</label>
                      <select class="js-example-basic-single pulsate" style="width:100%" name="conatct_person" id="conatct_person">
                        <?php foreach($customer as $value) { ?>
                          <option value="<?php  echo $value['id']; ?>" <?php if(isset($edit_contact_person->conatct_person) == $value['id']){ echo 'selected'; } ?> ><?php  echo $value['company_name']; ?></option>
                        <?php } ?>  
                      </select>
                    </div>
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Contact Person Name</label>
                      <input type="text" class="form-control pulsate" name="name" id="name" value="<?php echo isset($edit_contact_person->name) ? $edit_contact_person->name: ''; ?>" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control pulsate" name="email" id="email" value="<?php echo isset($edit_contact_person->email) ? $edit_contact_person->email: ''; ?>" placeholder="">
                    </div>
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Mobile No.</label>
                      <input type="email" class="form-control pulsate" name="mobile" id="mobile" value="<?php echo isset($edit_contact_person->mobile) ? $edit_contact_person->mobile: ''; ?>" placeholder="">
                      <input type="hidden" name="action" value="<?php if(isset($_GET['action'])=='edit'){echo 'edit'; }  ?>">
                      <input type="hidden" name="id" value="<?= isset($_GET['action'])?$_GET['id']:''; ?>">
                    </div>
                  </div>
                  <div class="form-group col-md-12 text-right">
                    <button type="button" class="btn btn-success mb-2" onclick="saveProfile('addContactPerson','addContactPerson')">Submit</button>
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
                            <th>No #</th>
                            <th>Name</th>
                            <!--<th>Created date</th>-->
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach ($conatctPerson as $key => $value) { ?>
                            <tr>
                              <td style="width: 1%; word-wrap: break-word;"><?= $i; ?></td>
                              <td style="width: 5%; word-wrap: break-word;"><?php echo $value['name']; ?></td>
                              <!--<td><?php echo dateConvert($value['created_at'],'d-M-Y'); ?></td>-->
                              <td style="width: 10%; word-wrap: break-word;">
                                <a title="View" type="button" id="<?=$value['id']; ?>" href="<?=  base_url('admin/app/contact_person?action=edit&id='.$value['id'].''); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
        // $('#order-listing').DataTable({
        //     destroy: true,    
        // });
        $('#changeStatus').on('hidden.bs.modal', function (){
            $('#statusval option:selected').removeAttr("selected");
        });
        
        $(".delete_row").click(function(e){
            e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'contact_person'};

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