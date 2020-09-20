<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
        <h3 class="page-title">
          Manage Cover Letter
        </h3>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">
                <form class="" method="post" action="" id="addcoverletter">
                    <div class="form-group col-md-12">
                      <label for="exampleInputEmail1">Description Editor</label>
                      <?php 
                        if(!@($edit_coverletter->description)) {
                            $tags = 
'<p style="margin: 40px 0px 40px; padding: 0px 20px;">Dear Sir / Madam,</p>
<p style="padding: 0px 20px 0px;">Please find our quotation for the above and should they meet with your approval, we look forward to receiving <strong> signature of acceptance by return fax/ e-mail (please sign all pages of the quote)</strong>. </p>
<p style="padding: 0px 20px 20px;">Should   you   require   any further information or clarification, please feel free to contact $salespersonName at <u>$salespersonEmail</u> who will be happy to assist you.</p>
<p style="margin: 40px 0px 0px; padding: 0px 20px;">Yours sincerely,</p>
<p style="margin: 0px 0px 40px; padding: 0px 20px;"><strong> PROJEX </strong></p>
<p style="margin: 0px 0px 0px; padding: 0px 20px;"><strong>Martin Clough</strong></p>
<p style="margin: 0px 0px 0px; padding: 0px 20px;"><strong>Commercial manager</strong></p>
                            ';
                        }else{
                            $tags = $edit_coverletter->description;
                        }
                      ?>
                      <div id="ace_php">
                            <textarea id="ace_php" class="ace-editor w-100 form-control pulsate">
<?= $tags; ?>
                            </textarea>
                      </div>
                      <input type="hidden" name="id" value="<?= isset($_GET['action'])?$_GET['id']:''; ?>">
                      <input type="hidden" name="description" id="description">
                      <input type="hidden" name="action" value="<?php if(isset($_GET['action'])=='edit'){echo 'edit'; }  ?>">
                    </div>
    
                    <div class="form-group col-md-12 text-right">
                      <button type="button" class="btn btn-success mb-2 real" onclick="saveProfile('addcoverletter', 'addcoverletter')" style="display: none;">Submit</button>
                    </div>
                </form>
                <br>
                <div class="form-group col-md-12 text-right">
                  <button type="button" class="btn btn-success mb-2 submitbutton">Submit</button>
                </div>
            </div>
          </div>
        </div><br>
        <div class="col-md-12">
          <div class="card">
            <div class="card-body">       
                <div class="table-responsive">
                    <table id="order-listing" class="table">
                        <thead>
                          <tr>
                            <th>No #</th>
                            <th>Description</th>
                            <th>Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $i=1; foreach ($coverletter as $key => $value) { ?>
                            <tr>
                              <td style="width: 1%; word-wrap: break-word;"><?= $i; ?></td>
                              <td style="width: 40%; word-wrap: break-word;"><?= nl2br($value['description']); ?></td>
                              <td style="width: 20%; word-wrap: break-word;">
                                <a title="View" type="button" id="<?=$value['id']; ?>" href="<?=  base_url('admin/app/coverletter?action=edit&id='.$value['id'].''); ?>" class="btn btn-success"><i class="fa fa-pencil" aria-hidden="true"></i></a>
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
</div>

<?php 
    if($edit == true) { ?>
        <style type="text/css">
          .pulsate {
            margin: 10px;
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
        $('.submitbutton').click(function() {
            var editor = ace.edit("ace_php");
            var code = editor.getValue();

            
            $('#description').val(code);
            $('.real').click();
        });
        
        $(".delete_row").click(function(e){
            e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue, "table":'coverletter'};

            if(confirm("Are you sure want to delete this record?")) {
                $.ajax({
                    type:"POST",
                    data:deldata,
                    url:"<?php echo base_url();?>admin/app/delete_record",
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
                });
    
                window.location.href = window.location.href; 
            } 
            return false;
        });
    });
</script>