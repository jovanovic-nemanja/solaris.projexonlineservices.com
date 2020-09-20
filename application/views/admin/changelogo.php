<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
          <h3 class="page-title"> Change Logo </h3>
      </div>
      
      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class=''>
                <?php
                  if (@$img) {
                    foreach ($img as $key => $value) {
                        if($value['device'] == 2) {
                            
                        }else{ ?>
                            <form class="forms-sample" method="post" id='Logochange<?= $value['id']; ?>' style="width: 100%;">
                                <div class="row" style="padding: 20px; border-bottom: 1px solid #e8e5e5;">
                                  <div class="col-md-1"></div>
                                  <div class="col-md-3">
                                    <img src="<?= base_url('admin_assets'); ?>/images/logo/<?= $value['name']; ?>" style='width: inherit; cursor: pointer;' title='<?= $value['name']; ?>'>
                                  </div>
                                  <div class="col-md-1"></div>
                                  <div class="col-md-5">
                                    <br>
                                    <h4>Name: <?= $value['name']; ?></h4>
                                    <?php 
                                        if($value['device'] == 0) {
                                            $text = "Mobile Logo";
                                        }else if($value['device'] == 1) {
                                            $text = "Web Logo";
                                        }else {
                                            $text = "Quote Logo";
                                        }
                                    ?>
                                    <h4>Type: <?= $text; ?></h4>
                                    <input type="hidden" name="id" value="<?= $value['id']; ?>">
                                    <?php 
                                      if ($value['active'] == 0) { ?>
                                        <button type="button" class="btn btn-success" name="submit" value="submit" onclick="saveProfile('Logochange<?= $value['id']; ?>', 'Logochange')">Change</button>
        
                                        <button type="button" class="btn btn-danger delete_rows" id="<?= $value['id']; ?>">Delete</button>
                                    <?php }else{ ?>
                                        <button class="btn btn-success" disabled="">ACTIVE</button>
                                    <?php } ?>
                                  </div>
                                </div>
                                <br>
                            </form>
                <?php } } } ?>
              </div>
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

<script type="text/javascript">
  $(document).ready(function() {
    $(".delete_rows").click(function(e){
      e.preventDefault();    
      var getvalue = $(this).attr("id");
      var deldata = {"id": getvalue, "table": 'logo'};

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
        }); //ajax close

        window.location.href = window.location.href; 
      } 
      return false;
    });
  });
</script>