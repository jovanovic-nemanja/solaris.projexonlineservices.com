    <div class="container-fluid page-body-wrapper">
        <div class="main-panel">
            <div class="content-wrapper">
                <div class="row">
                    <?php if(!empty($this->session->userdata('is_project_manage_logged'))){ ?>
                        <div class="col-md-4 grid-margin stretch-card">
                            <a href="<?= base_url('admin/app/manage_jobs'); ?>" class="" style="text-decoration: none!important; width:100%;">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5;"> Jobs<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 1.1rem;">(This Month) </h2><br>
                                        <h5 class="mb-0">Total Jobs : <?= $jobs_count[0]['count']; ?></h5><br>
                                        <?php 
                                            if($jobs_count[0]['count'] > $jobs_l_count[0]['count']) { ?>
                                                <h5 class="mb-0"><span style="color:#a3efa5!important;"> + <?= ($jobs_count[0]['count'] - $jobs_l_count[0]['count']); ?></span> than last month </h5>
                                        <?php }else{ ?>
                                            <h5 class="mb-0"><span style="color:red!important;"> - <?= ($jobs_l_count[0]['count'] - $jobs_count[0]['count']); ?></span> than last month </h5>
                                        <?php } ?>
                                    </div>
                                  </div>
                                </div>
                            </a>                            
                        </div>
                    <?php }else if( !empty($this->session->userdata('is_sales_logged')) ) { ?>
                        <div class="col-md-4 grid-margin stretch-card">
                            <a href="<?= base_url('admin/app/manage_quotations'); ?>" class="" style="text-decoration: none!important; width:100%;">
                                <div class="card social-card card-colored facebook-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5;"> Quotations<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 1.1rem;">(This Month) </h2><br>
                                        <h5 class="mb-0" style="text-align: left;">Pipeline : <?= count($pipeline_count); ?> </h5><br>
                                        <?php 
                                            if($cost_sheet_m_count[0]['count'] > $cost_sheet_l_count[0]['count']) { ?>
                                                <h5 class="mb-0"><span style="color:#a3efa5!important;"> + <?= ($cost_sheet_m_count[0]['count'] - $cost_sheet_l_count[0]['count']); ?></span> than last month </h5>
                                        <?php }else{ ?>
                                            <h5 class="mb-0"><span style="color:red!important;"> - <?= ($cost_sheet_l_count[0]['count'] - $cost_sheet_m_count[0]['count']); ?></span> than last month </h5>
                                        <?php } ?>
                                    </div>
                                  </div>
                                </div>
                            </a>
                        </div>
                    <?php }else{ ?>
                        <div class="col-md-4 grid-margin stretch-card">
                            <a href="<?= base_url('admin/app/manage_costsheet'); ?>" class="" style="text-decoration: none!important; width:100%;">
                                <div class="card social-card card-colored twitter-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center" >
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5;">Cost Sheets<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 1.1rem;">(This Month) </h2><br>
                                        <h5 class="mb-0" style="text-align: left;">Total Cost Sheets : <?= $cost_sheet_m_count[0]['count']; ?></h5><br>
                                        <?php 
                                            if($cost_sheet_m_count[0]['count'] > $cost_sheet_l_count[0]['count']) { ?>
                                                <h5 class="mb-0" style="text-align: left;"> <span style="color:#a3efa5!important;"> + <?= ($cost_sheet_m_count[0]['count'] - $cost_sheet_l_count[0]['count']); ?> </span>than last month </h5>
                                        <?php }else{ ?>
                                            <h5 class="mb-0" style="text-align: left;"> <span style="color:red!important;">- <?= ($cost_sheet_l_count[0]['count'] - $cost_sheet_m_count[0]['count']); ?></span> than last month </h5>
                                        <?php } ?>
                                    </div>
                                  </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <a href="<?= base_url('admin/app/manage_quotations'); ?>" class="" style="text-decoration: none!important; width:100%;">
                                <div class="card social-card card-colored facebook-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5;"> Quotations<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 1.1rem;">(This Month) </h2><br>
                                        <h5 class="mb-0" style="text-align: left;">Pipeline : <?= count($pipeline_count); ?> </h5><br>
                                        <?php 
                                            if($cost_sheet_m_count[0]['count'] > $cost_sheet_l_count[0]['count']) { ?>
                                                <h5 class="mb-0"><span style="color:#a3efa5!important;"> + <?= ($cost_sheet_m_count[0]['count'] - $cost_sheet_l_count[0]['count']); ?></span> than last month </h5>
                                        <?php }else{ ?>
                                            <h5 class="mb-0"><span style="color:red!important;"> - <?= ($cost_sheet_l_count[0]['count'] - $cost_sheet_m_count[0]['count']); ?></span> than last month </h5>
                                        <?php } ?>
                                    </div>
                                  </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 grid-margin stretch-card">
                            <a href="<?= base_url('admin/app/manage_jobs'); ?>" class="" style="text-decoration: none!important; width:100%;">
                                <div class="card social-card card-colored instagram-card" style="background-color: #fbfbfb!important;">
                                  <div class="card-body d-flex flex-wrap align-items-center justify-content-center">
                                    <div class="">
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5;"> Jobs<br> </h2>
                                        <h2 class="mb-0" style="text-align: center; color:#a3efa5; font-size: 1.1rem;">(This Month) </h2><br>
                                        <h5 class="mb-0">Total Jobs : <?= $jobs_count[0]['count']; ?></h5><br>
                                        <?php 
                                            if($jobs_count[0]['count'] > $jobs_l_count[0]['count']) { ?>
                                                <h5 class="mb-0"><span style="color:#a3efa5!important;"> + <?= ($jobs_count[0]['count'] - $jobs_l_count[0]['count']); ?></span> than last month </h5>
                                        <?php }else{ ?>
                                            <h5 class="mb-0"><span style="color:red!important;"> - <?= ($jobs_l_count[0]['count'] - $jobs_count[0]['count']); ?></span> than last month </h5>
                                        <?php } ?>
                                    </div>
                                  </div>
                                </div>
                            </a>                            
                        </div>
                    <?php } ?>
                </div>
                
                <div class="row quick-action-toolbar">
                    <?php if(!empty($this->session->userdata('is_admin_logged')) || !empty($this->session->userdata('is_cost_estimator_logged'))){ ?>
                          <div class="col-md-12 grid-margin">
                            <div class="card">
                              <div class="card-header d-block d-md-flex">
                                <h5 class="mb-0">Quick Actions</h5>
                                <p class="ml-auto mb-0">You can access the links below.<i class="icon-bulb"></i></p>
                              </div>
                              <div class="d-md-flex row m-0 quick-action-btns" role="group" aria-label="Quick action buttons">
                                <div class="col-sm-6 col-md-4 p-3 text-center btn-wrapper">
                                  <a href="<?= base_url('admin/app/create_cost_sheet'); ?>" class="btn px-0"><i class="icon-paper-clip mr-2"></i> Add Cost Sheet </a>
                                </div>
                                <div class="col-sm-6 col-md-4 p-3 text-center btn-wrapper">
                                  <a href="<?= base_url('admin/app/add_customers'); ?>" class="btn px-0"><i class="fa fa-users mr-2"></i> Add New Customer </a>
                                </div>
                                <div class="col-sm-6 col-md-4 p-3 text-center btn-wrapper">
                                  <a class="btn px-0" href="<?= base_url('admin/app/add_product'); ?>"> <i class="fa fa-shopping-cart mr-2"></i> Add New Product </a>
                                </div>
                              </div>
                            </div>
                          </div>
                    <?php } ?>
                </div>
            </div>
        </div>

        <?php if( !empty($this->session->userdata('is_admin_logged')) || !empty($this->session->userdata('is_cost_estimator_logged')) ) { ?>
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-sm-flex align-items-center mb-4">
                                        <h4 class="card-title mb-sm-0">Log Report</h4>
                                    </div>
                                    <div class="table-responsive">
                                        <table id="order-listing" class="table">
                                            <thead>
                                                <tr>
                                                    <th class="font-weight-bold">No #</th>
                                                    <th class="font-weight-bold">Type</th>
                                                    <th class="font-weight-bold">Status</th>
                                                    <th class="font-weight-bold">Description</th>
                                                    <th class="font-weight-bold">User</th>
                                                    <th class="font-weight-bold">Date</th>
                                                    <?php if(empty($this->session->userdata('is_admin_logged'))){ ?>
                                                    <?php }else{ ?>
                                                        <th class="font-weight-bold">Action</th>
                                                    <?php } ?>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    if (@$logs) {
                                                        $id = 1;
                                                        foreach ($logs as $key => $value) {
                                                            if ($value['status'] == "Added" || $value['status'] == "Created" || $value['status'] == "Submitted" || $value['status'] == "Revised") {
                                                                $color = "color : blue";
                                                            }else if ($value['status'] == "Updated" || $value['status'] == "Changed") {
                                                                $color = "color : #2aa92d";
                                                            }else if ($value['status'] == "Deleted") {
                                                                $color = "color : red";
                                                            }
                                                         ?>
                                                            <tr>
                                                                <td><?= $id; ?></td>
                                                                <td><?= $value['type']; ?></td>
                                                                <td style="<?= $color; ?>"><?= $value['status']; ?></td>
                                                                <td>
                                                                    <?php
                                                                        if ($value['type'] == 'Cost Sheet' || $value['type'] == 'Quotation') {
                                                                            if ($value['status'] == 'Created' || $value['status'] == "Submitted" || $value['status'] == "Revised" || $value['status'] == "Updated" || $value['status'] == "Changed") { ?>
                                                                                <a href='<?= base_url('admin/app/cost_sheet/'.$value['description'].''); ?>'><?= $value['description']; ?></a>
                                                                            <?php }else{ ?>
                                                                                <?= $value['description']; ?>
                                                                    <?php } }elseif ($value['type'] == 'Jobs') {
                                                                        if ($value['status'] == 'Created' || $value['status'] == "Submitted" || $value['status'] == "Revised" || $value['status'] == "Updated" || $value['status'] == "Changed") { ?>
                                                                            <a href='<?= base_url('admin/app/genrated_view_job/'.$value['description'].''); ?>'><?= $value['description']; ?></a>
                                                                        <?php }else{ ?>
                                                                            <?= $value['description']; ?>
                                                                    <?php } } else{
                                                                        echo $value['description'];
                                                                    } ?>
                                                                </td>
                                                                <td><?= $value['name']; ?></td>
                                                                <?php 
                                                                    $d = date_create($value['created_at']);
                                                                    $created_at = date_format($d,"F d, Y") . " at " . date_format($d,"H:i:s");
                                                                ?>
                                                                <td><?= $created_at; ?></td>
                                                                <?php if(empty($this->session->userdata('is_admin_logged'))){ ?>
                                                                <?php }else{ ?>
                                                                    <td>
                                                                        <a id="<?= $value['id']; ?>" href type="button" class="btn btn-danger delete_row">Delete</a>
                                                                    </td>
                                                                <?php } ?>
                                                            </tr>
                                                <?php $id++; } } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>

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

<script type="text/javascript">
    $(document).ready(function() {
        $(".delete_row").click(function(e){
            e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id": getvalue, "table": 'logs'};

            if(confirm("Are you sure want to delete this record?")) {
                $.ajax({
                    type: "POST",
                    data: deldata,
                    url: "<?php echo base_url();?>index.php/admin/app/delete_record",
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