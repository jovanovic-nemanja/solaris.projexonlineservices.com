<div class="container-fluid page-body-wrapper">

  <div class="main-panel">

    <div class="content-wrapper">

      <div class="page-header">

        <h3 class="page-title">

          Manage Template

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

                      <th>Quotation Number</th>

                      <th>Customer</th>

                      <th>Quotation Status</th>

                      <th>Actions</th>

                    </tr>

                  </thead>

                  <tbody>

                    <?php if($cost_sheet){ $i=1; foreach ($cost_sheet as $key => $value) {?>

                      <tr>

                        <td style="width: 1%; word-wrap: break-word;"><?= $i; ?></td>

                        <td><?php echo $value['name']; ?></td>

                        <td style="width: 1%; word-wrap: break-word;"><?= $value['quot_numb']; ?></td>

                        <td><?php echo get_single_col_value('customer','id',$value['customer'],'company_name'); ?></td>

                        <?php if(!empty(get_single_col_value('approval_status','costsheet_id',$value['id'],'approval_status'))){ ?>

                          <td><?php echo get_single_col_value('approval_status','costsheet_id',$value['id'],'approval_status'); ?></td>

                        <?php } else{ echo '<td>'.$value['quotation_status'].'</td>'; } ?>

                        <td class="d-flex">

                            <a type="button" id="<?=$value['id']; ?>" href="<?= base_url('admin/app/genrated_view_cost_sheet/'.$value['id'].''); ?>" class="btn btn-success mr-1"><i class="fa fa-eye" aria-hidden="true"></i></a>

                            <?php if( empty($this->session->userdata('is_sales_logged')) ){ ?>

                                <button class="btn revised btn-success mr-1" name="revised" onclick="" type="submit" id="revised" value="<?=$value['id']; ?>" title="REVISE">
                                  <i class="icon-copy"></i>REVISE
                                </button>
                                
                                <form class="mr-1 revise_csv_<?=$value['id']; ?>" method="post">
                                  <input type="file" class="custom-file-input" name="uploadCSV" id="uploadCSV" style="border: none;" accept=".csv" />
                                  <input type="hidden" name="id" value="<?=$value['id']; ?>" id="id" />
                                </form>

                                <button class="btn CSV btn-success mr-1" name="CSV" onclick="" type="button" id="CSV" title="CSV" value="<?=$value['id']; ?>">
                                  <i class="icon-copy"></i>CSV
                                </button>

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

      $('.custom-file-input').hide();

      $(".delete_row").click(function(e){

        e.preventDefault();    

        var getvalue = $(this).attr("id");

        var deldata = {"id":getvalue,"table":'sssss'};



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

      function showLoader(){
        $.blockUI({message:'<h1> Please wait...</h1>'});
        $("#flash").show();
      }

      $(".revised").click(function(e){

        e.preventDefault();    

        var getvalue = $(this).val();

        var deldata = {"id":getvalue,"table":'sssss'};

        if(confirm("Are you sure want to revise this record?")) {

          $.ajax({

            type:"POST",

            data:deldata,

            url:"<?php echo base_url();?>index.php/admin/app/revised_record",

            statusCode:{

              200:function(data)

              { 

                obj = JSON.parse(data);    

                if(obj.err ==0)

                {

                  window.location.href = "<?php echo base_url();?>admin/app" + '/revise_cost_sheet/'+obj.data;

                } 

                if(obj.err==2)

                {

                  swal(obj.msg);

                }    

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

        }

        return false;

      });


      $(".CSV").click(function(e){
        $(this).prev().children().click();
        var getvalue = $(this).val();

        $(".revise_csv_"+getvalue).change(function(){
          var form = $(".revise_csv_"+getvalue)[0]; // You need to use standart javascript object here
          var formData = new FormData(form);

          if(confirm("Are you sure want to revise this record with CSV import?")) {

            $.ajax({
              type: "POST",
              dataType: "json",
              contentType: false,
              processData: false,
              data: formData,
              url:"<?php echo base_url();?>index.php/admin/app/revised_record_csv",

              beforeSend: function(){
                showLoader();    
              }, 

              statusCode:{
                200:function(data)
                { 
                  if(data.err == 200) {
                    window.location.href = data.url;
                  } 
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

          }
        });

        return false;
      });
    });
</script>