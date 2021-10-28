<div class="container-fluid page-body-wrapper">
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title" style="display: inline-flex;">
                    Quotation (<?= $this->uri->segment(4); ?>)&nbsp;&nbsp;&nbsp;&nbsp;
                    <p style="color: #38ce3c; ">Job Code:<?php echo $approval_status->job_code; ?></p>
                </h3>
            </div>

    	    <div class="row">
                <div class="col-md-12 admin-accord">
                    <div id="accordion" class="accordion accordion-multi-colored" role="tablist">
                        <div class="card">
        					<div class="card-header" role="tab" id="headingOne">
            					  <h5 class="mb-0">
            						<a data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            						  Customer Information
            						</a>
            					  </h5>
        					</div>
        					<div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
    					            <div class="row" style="margin-bottom: 20px">
        							    <div class="col-3">
            								<form method="post" id="customerForm">
            									<label for="inputPassword4"  class="">Customer</label>
    									        <select class="form-control select2" disabled="" name="customer"  id="customer">
        										    <option>Select</option>
        										    <?php foreach($customers as $value) { ?>
            										    <option value="<?php  echo $value['id']; ?>" <?php if($costSheetData->customer==$value['id']){echo 'selected';} ?>><?php  echo $value['company_name']; ?></option>
            										<?php } ?>                                        
            									</select>
            								</form>
        								</div>

        								<div class="col-3">
        									<?php $getContactPerson = $this->site_model->get_rows_c1('contact_person','conatct_person',$costSheetData->customer); ?>
        									<form method="post" id="contact_person">
    											<label for="inputPassword4" class="">Contact person</label>
    											<select class="form-control select2" disabled="" name="contactPerson"  id="contactPerson">
    												<?php foreach ($getContactPerson as $key => $person) { ?>
    												    <option value="<?php echo $person['id'] ?>" <?php if($costSheetData->conatct_person==$person['id']){echo "selected";} ?>><?php echo $person['name']; ?></option>>
    												<?php } ?>
    											</select>
        									</form>
        								</div>

        								<div class="col-3">
        									<?php 
            									if($costSheetData->customer) {
            									   $payment_termss =$this->db->query("SELECT customer.*, (SELECT title FROM payment_terms WHERE id = customer.payment_terms) as pterms1, (SELECT title FROM payment_terms WHERE id = customer.payment_terms2) as pterms2, (SELECT title FROM payment_terms WHERE id = customer.payment_terms3) as pterms3 FROM `customer` WHERE id = ".$costSheetData->customer."")->row(); 
            									}
        									?>

        									<form method="post" id="paymentTerms">
    											<label for="inputPassword4" class="">Payment terms </label>
    											<select class="form-control select2" disabled="" name="payment_terms"  id="payment_terms">
    												<?php if(!empty($payment_termss)) { ?>
    											        <option value="<?php echo $payment_termss->payment_terms; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms){echo "selected";} ?>><?php echo $payment_termss->pterms1; ?></option>
    												    <option value="<?php echo $payment_termss->payment_terms2; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms2){echo "selected";} ?>><?php echo $payment_termss->pterms2; ?></option>
    												    <option value="<?php echo $payment_termss->payment_terms3; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms3){echo "selected";} ?>><?php echo $payment_termss->pterms3; ?></option>
    							                    <?php } ?>                              
    											</select>
        									</form>
        								</div>

        								<div class="col-3">
        									<form method="post" id="sales_person">
    											<label for="inputPassword4" class="">Sales Person</label>
    											<select class="form-control select2" name="salesPerson" disabled="" id="salesPerson">
    												<?php foreach ($salesperson as $key => $sales) { ?>
    												    <option value="<?php echo $sales['id'] ?>" <?php if($costSheetData->sales_person==$sales['id']){echo "selected";} ?>><?php echo $sales['name']; ?></option>>
    												<?php } ?>
    											</select>
        									</form>
        								</div>
        						    </div>
                                </div>
        					</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

    		  <div class="col-md-12 admin-accord">

    			  <div id="accordionProject" class="accordion accordion-multi-colored" role="tablist">

    				  <div class="card">

    					<div class="card-header" role="tab" id="headingOne">

    					  <h5 class="mb-0">

    						<a data-toggle="collapse" href="#collapseTwo" aria-expanded="true" aria-controls="collapseOne">

    						  Project Information

    						</a>

    					  </h5>

    					</div>



    					<div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordionProject">

    					  <div class="card-body">

    					  	<div class="row" style="margin-bottom: 20px">

    						 <div class="col-md-3">

    							<form method="post" id="template_name">

    								<label for="exampleInputEmail1">Job / Template Name</label>

    								  <input type="text" class="form-control" readonly="readonly" name="template_Name" readonly="" value="<?= $costSheetData->name; ?>" id="template_Name"  placeholder="">

    							</form>

    						  </div>

    						  	<div class="col-3">

    								<form method="post" id="costTypeForm">

    										<label for="inputPassword4" class="">Job type</label>

    										  <select class="form-control select2" disabled="" name="cost_type"  id="cost_type">

    											 

    											  <option>Select</option>

    											  <?php foreach($cost_type as $value) { ?>

    											  <option value="<?php  echo $value['id']; ?>"  <?php if($costSheetData->cost_type==$value['id']){echo 'selected';} ?>><?php  echo $value['title']; ?></option>

    											  <?php } ?>                                        

    										  </select>

    								</form>

    							</div>

    							<div class="col-3">

    							  <form method="post" id="venueForm">

    									<label for="inputPassword4" class="">Venue</label>

    									<input type="text" class="form-control" name="venue" value="<?= $costSheetData->venue; ?>" id="venue" disabled readonly>

    							  </form>

    							</div>

    							<div class="col-3">

    									 <form method="post" id="currencyForm">

    											<label for="inputPassword4" class="">Currency</label>

    											  <select class="form-control select2" disabled="" name="currency"  id="currency">

    												  <option>Select</option>

    												  <option value="USD" <?php if($costSheetData->currency=='USD'){echo 'selected';} ?>>USD</option>

    												  <option value="AED" <?php if($costSheetData->currency=='AED'){echo 'selected';} ?>>AED</option>                                    

    											  </select>

    									  </form>

    								  </div> 

    						</div>

    						

    						<div class="row" style="margin-bottom: 20px">

    						  <div class="col-md-6">

    							<form method="post" id="projectStartDate">

    								<label for="exampleInputEmail1">Project Start Date</label>

    								  <input type="text" class="form-control" readonly="readonly" name="project_start_date" value="<?= $costSheetData->project_start_date; ?>" id="project_start_date"  placeholder="" >

    							</form>

    						  </div>

    						  <div class="col-6">

    							<form method="post" id="projectEndDate">

    								<label for="inputPassword4"  class="">Project End Date</label>

    								  <input type="text" class="form-control" readonly="readonly" name="project_end_date" value="<?= $costSheetData->project_end_date; ?>" id="project_end_date"  placeholder="" >

    							</form>

    							</div>

    					   </div> 

    					  </div>

    				    </div>

    				 </div>

    			  </div>

    		  </div>

    	    </div>          

    	    <div class="row">

                <div class="col-12">

              <div class="card">

                <div class="row">

                  <div class="col-lg-12 admin-accord">

                    <div class="card-body">

                        <?php  if($costSheetTotal[0]->totalCostSum!=0){ ?>

                       <div class="pp-to-ll" style="text-align: center;"><p>Cost&nbsp;&nbsp;&nbsp;&nbsp; <span style="float: right;" ><span class="currencyC"><?= $costSheetData->currency ?></span><span class="currencyConvert"><?= number_format(round($costSheetTotal[0]->totalCostSum,0,PHP_ROUND_HALF_UP),2,'.',','); ?></span></span></p></div>

                       <?php } ?>

                      <div class="accordion accordion-bordered" id="accordion-2" role="tablist">

                        <?php $i =1; foreach ($cost_sheet_cat as $key => $value) { 

    					    $alphas = range('A', 'Z');

    				        ?>  

                            <div class="card">

                        <div class="card-header" role="tab" id="heading-<?= $i; ?>" style="background-color: #3e4b5b;">

                          <h6 class="mb-0" style="color: white;">

                            <a data-toggle="collapse" href="#collapse-<?= $i; ?>" aria-expanded="false" aria-controls="collapse-<?= $i; ?>" class="collapsed">

                              <?php echo $alphas[$i-1].'. '.$value['title']; ?>

    						  <div class="aa-bb">

    						  	<?php if($value['sumSellingCost']){ ?>

    						        <span class="ab-2"><span class="currencyConvert"><?= number_format(round($value['sumTotalCost'],0,PHP_ROUND_HALF_UP),2,'.',','); ?></span></span>

    							 <?php } ?>

    						  </div>

                            </a>

                          </h6>

                        </div>

                        

                        <div id="collapse-<?= $i; ?>" class="collapse card-body" role="tabpanel" aria-labelledby="heading-<?= $i; ?>" data-parent="#accordion-2" style="">

                        <?php 
                            $query = "select cE.id, cE.title, cE.quantity, cE.unit, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$this->uri->segment(4)."' AND cE.cat_id = '".$value['id']."'";

                            $subCategory= $this->db->query($query)->result_array();

                            $j= 1; foreach ($subCategory as $key => $subvalue) {  

                           	    $lineItems = $this->site_model->get_rows_c3('cost_sheet_line_item', 'cost_sheet_id', $this->uri->segment(4), 'sub_cat_id', $subvalue['id'], 'status', 1);
                           	    ?>

        						<div id="accordion-1" style="padding-bottom: 1%;">
        						    <div class="card">
        								<div class="card-header-2" id="heading-1-1">

        									<h5 class="mb-0">

        										<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-<?=$i?>-<?=$j?>" aria-expanded="false" aria-controls="collapse-1-1">

        											<div class="subcat">

        												<h4 style="font-size: 1rem!important; width: 40%;">

        													<?=$j.'.';?><?= $subvalue['title']; ?>

        													<div class="aa-bb" style="">

        														<?php if(!empty($subvalue['sumTotalCost'])){ ?>

        														    <span class="ab-2"><span class="currencyConvert"><?php echo number_format(round($subvalue['sumTotalCost'],0,PHP_ROUND_HALF_UP),2,'.',','); ?></span></span>

        														<?php } ?>

        													 </div>

        												</h4>

        											</div>

        											<div class="aaa-bbb" style="">

                                                         <?php if(!empty($subvalue['quantity'])) { ?><span><?= $subvalue['quantity']; ?></span><?php } ?>

                                                         <?php if(!empty($subvalue['unit'])) { ?><span>&nbsp;&nbsp; <?= $subvalue['unit']; ?></span><?php }?>

            										</div>

        										</a>

        									</h5>

        								</div>
        								<div id="collapse-<?=$i?>-<?=$j?>" class="collapse" data-parent="#accordion-1-1" aria-labelledby="heading-1-1-1">

        									<div class="card-body">

        										<table id="myTable" class="table order-list-<?= $subvalue['id']; ?>">

        												<?php if(!empty($lineItems)) { ?>

        											  <thead>

        												  <tr>

        												  	  <td>Action</td>	

        													  <td>DESCRIPTION</td>

        													  <td>QTY</td>

        													  <td>UNIT</td>

        													  <td>COST</td>
                                                                <td>ACTUAL COST</td>
        													  <td>TOTAL COST</td>

        													  <td>TOTAL ACTUAL COST</td>

        													  <td>Deviation</td>

        													  <td style="opacity: 0;">Submit</td>

        												  </tr>

        											  </thead>

        											  <tbody>

        												  <?php $k=1; foreach ($lineItems as $key => $lineItem) {

        												  	 $coutDoc = $this->site_model->row_count_c1('document','line_item_id',$lineItem['id']);

        												   ?>

        												  <tr class="record">

        												  	  <td style="width:5%">
    												  	          
    												  	          <button class="btn-33" type="button" onclick="openMultiDos('add-multi-doc','<?=$lineItem['id']; ?>')" >

        												  	          <i id="uploadID-<?=$lineItem['id']; ?>" class="fa fa-upload" <?php if($coutDoc>0){echo 'style="color:green"'; } ?> aria-hidden="true"></i>

    												  	          </button>

    											  	          </td>

        													  <td style="width:20%" class="">

        														  <p><?=$lineItem['product_name']; ?></p>

        													  </td>

        													  <td style="width:10%" class=""><p class="qty_val"><?=$lineItem['quantity']; ?></p></td>

        													  <td style="width:10%" class="">

        														   <p class="unit_text"><?=get_single_col_value('units','id',$lineItem['unit_id'],'name'); ?></p>

        													  </td>

        													  <td style="width:10%" class=""><p><span class="currencyConvert cost_only"><?=$lineItem['unit_cost']; ?></span></p>

        													  </td>
        													  
        													  
        													  <?php 

    													        if ($lineItem['editable'] == 1) {

    													            $editable = "disabled";

    													            $style = "cursor: not-allowed;";

    													        }else{

    													            $editable = "";

    													            $style = "";

    													        }

    													      ?>

        													  <td style="width:10%" class="">

    											                <input type='text' <?= $editable; ?> class='actual_cost input-sm' name='actual_cost' id='actual_cost' style="width: 50%;" value="<?=$lineItem['actual_cost']; ?>"/>

        													  </td>

        													  <td style="width:10%" class="">

        														   <p style=""><span class="currencyConvert total_cost_val"><?= number_format(round($lineItem['total_cost'],0,PHP_ROUND_HALF_UP),2,'.',','); ?></span></p>

        													  </td>

        													  

        													  <td style="width:10%" class="">

        														   <p class='total_actual_cost'><?= number_format(round($lineItem['total_actual_cost'], 0, PHP_ROUND_HALF_UP),2,'.',','); ?></p>

        													  </td>

        													  <td style="width:10%" class="">

        														   <p class='deviation_val'><?= number_format(round($lineItem['deviation'], 0, PHP_ROUND_HALF_UP),2,'.',','); ?></p>

        													  </td>

        													  <td style="width:10%; opacity: 0;">

        													      <button <?= $editable; ?> style="<?= $style; ?>" type="button" class="prev_submitCostSheet btn-success"><i class="fa fa-check" aria-hidden="true"></i></button>

        													  </td>

        												  </tr>

        												<?php $k++; } ?>

        											  </tbody>

        										   <?php } ?>

        											  <tfoot>

        											  </tfoot>

        										 </table>

        									</div>

        								</div>			
            						</div>
                                </div>
                        <?php $j++; } ?>

                        </div>

                       </div>

                        <?php  $i++; } ?>

                        </div>

                        

                        <div class="row">
                            <br>
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-3">
                                <br>
                                Total Cost : <p class='total_cost_all' style='display: inline-block;'></p>
                            </div>
                            <div class="col-md-3"><br>
                                Total Actual Cost : <p class='total_ac_cost_all' style='display: inline-block;'></p>
                            </div>
                            <div class="col-md-3"><br>
                                Deviation : <p class='total_dev_all' style='display: inline-block;'></p> 
                            </div>
                        </div>
                        <br>
                        
                        <?php 
                            if(@$lineItems) {
                                if($lineItems[0]['editable'] == 0 || $lineItems[0]['editable'] == -1) { ?>
                    			<?php }else{ ?>	
                    			     <div id="outer">
                		                <div class="inner">
                							<a href="<?php echo base_url(); ?>admin/app/job_summery_details_Pdf/<?= $this->uri->segment(4); ?>" class="btn msgBtn btn-primary"><i class="fa fa-file-text-o" aria-hidden="true"></i>Download PDF</a>
                		                </div>
                		                
                		                <div class="inner">
                    						<form method="post" action="<?php echo base_url(); ?>admin/app/summery_subcat_excel">
                    							<input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>">
                    							<button class="btn msgBtn btn-success" name="export" type="submit"><i class="fa fa-file-text-o" aria-hidden="true"></i>Download Excel</button>
                    						</form>
                		                </div> 
                					</div>
                        <?php } } ?>
                        <br>

                        <div>
                            <?php 
                                if(@$lineItems) {
                                    if($lineItems[0]['editable'] == 0 || $lineItems[0]['editable'] == -1) { ?>
                                        <form style='display: inline-flex; text-align: right;' id="updatejob">
            					  		    <input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>" />
                                            <button type="button" class="btn msgBtn updateJob btn-success" style=' text-align: right;'><i class="fa fa-check" aria-hidden="true" style='display: inline-flex;'></i>Update</button>
            					  		</form>
                                        <form method="post" id="genrateTemplate" style='display: inline-flex; text-align: right;'>
            					  			<input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>" />
            					  			<input type="hidden" name="description" id="description_text" value="" />
            					  			<input type="hidden" name="deviation" id="deviation" value="0" />
            					  			<input type="hidden" name="actual_cost" id="_actual_cost" value="0" />
            					  			<input type="hidden" name="total_actual_cost" id="total_actual_cost" value="0" />
            					  			<button type="button" class="btn msgBtn submitCostSheet btn-success" style=' text-align: right;'><i class="fa fa-location-arrow" aria-hidden="true" style='display: inline-flex;'></i>Submit</button>
  		                                </form>
                                <?php }else{ ?>

                                    <?php
                                        if(@$comments) {
                                            foreach($comments as $key => $value) { ?>
                                                <div class='row'>
                        						   <form method="post" id="statusChange" style='width: 100%;' action='<?= base_url('admin/app/addJobcomment'); ?>'> 
                        							    <div class="form-group">
                        							        <?php 
                        							            $d = date_create($value['created_at']);
                                                                $created_at = date_format($d,"F d, Y") . " at " . date_format($d,"H:i:s");
                        							        ?>
                							                <label><?= $value['username']; ?>&nbsp;&nbsp;&nbsp; (<?= $created_at; ?>)</label>
                        									<textarea class="form-control ff-fdd" name="comment" id="comment" style="width: 100%;" rows="1" disabled><?= $value['comment']; ?></textarea>
                        									<input type="hidden"  name="cost_sheet_id" value="<?= $this->uri->segment(4); ?>">
                        							   </div>
                    							    </form>
                        					    </div>
                                    <?php } } ?>

                                    <div class='row'>
            						   <form method="post" id="statusChange" style='width: 100%;' action='<?= base_url('admin/app/addJobcomment'); ?>'> 
            							   <div class="form-group">
            							        <label>Comment</label>
            									<textarea class="form-control ff-fdd" name="comment" value="" id="comment" style="width: 100%;" rows="1" id="" placeholder="Please enter the comment." required></textarea>
            									<input type="hidden"  name="user_id" value="<?= $this->session->userdata('userid'); ?>">
            									<input type="hidden"  name="cost_sheet_id" value="<?= $this->uri->segment(4); ?>">
            							   </div>

            							   <div class="form-group text-center">
            							       <button class="btn btn-success" type="submit">Save</button>
            							   </div>
        							    </form>
            					    </div>
                            <?php } } ?>
                        </div>
                    </div>
                    </div>
                  </div>

    				<style>
    					.btn-btn{
    						background: black;
    						color:white;
    					}

    					.btn-lg{
    						background: white;
    						color: black;
    						border: 1px solid #000;
    						padding: 10px 15px;
    						margin-right: 0px;
    						border-radius: 5px;
    						font-size: 18px !important;
    					}

    					.form-group label {
    						font-size: 1rem;
    					}

                        #button{
                            display: block;
                            margin: 20px 42px;
                            width: 140px;
                            text-align: left;
                            background: white;
				            color: black;
				            border: 1px solid #000;
				            padding: 10px;
				            margin-right: 20px;
				            border-radius: 5px 5px 0px 0px;
                        }

    					.custom-file-label {
                            line-height: 1.5 !important;
    					}

                        #item{
                            margin: 23px 42px;
				            width: 100%;
				            border: 1px solid #000;
				            padding: 6px;
				            top: 38px;
				            position: absolute;
				            z-index: 9999;
				            background: #fff;
    					}

    					#outer {
    						position: relative;
    					}

    					.box {
    					    position: relative;
    						margin: 20px 0px 0px 40px;
    						padding: 30px 10px 5px;
    						width: 90%;
    						min-height: 150px;
    						border: 1px solid grey;
    						border-radius: 3px;
    						background : #fff;
    						text-align: left;
    					}

    					.editable {
    					   border-color: #bd0f18;
    					   box-shadow: inset 0 0 10px #555;
    					   background: #f2f2f2;
    					}

    					.text {
				            outline: none;
    					}

    					.edit, .save {
				            width: 60px;
				            display: block;
    					    position: absolute;
    					   top: 0px;

    					  right: 0px;

    					  padding: 4px 10px;

    					  border-top-right-radius: 2px;

    					  border-bottom-left-radius: 10px;

    					  text-align: center;

    					  cursor: pointer;

    					  box-shadow: -1px 1px 4px rgba(0,0,0,0.5);

    					}



    					.edit { 

    					  background: #557a11;

    					  color: #f0f0f0;

    					  opacity: 0;

    					  transition: opacity .2s ease-in-out;

    					}



    					.save {

    					  display: none;

    					  background: #bd0f18;

    					  color: #f0f0f0;

    					}



    					.box .edit {

    					  opacity: 1;

    					}
    				</style>

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

<div class="modal fade" id="add-cost-line" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

      <div class="modal-content">

        <div class="modal-header">

          <h5 class="modal-title" id="exampleModalLabel">Add Cost sheet</h5>

          <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

          </button>

        </div>

        <div class="modal-body">

            <form method="post" action="" id="addCostSheet">

              <div class="row">

                <div class="form-group col-md-12">

                  <label for="exampleInputEmail1">Product Name</label>

                    <input type="text" class="form-control" name="product_name" id="product_name"  placeholder="">

                </div>

                <div class="form-group col-md-12">

                  <label for="exampleInputEmail1">Quantity</label>

                  <input type="number" class="form-control" name="qty" value="1"id="qty"  placeholder="">

                </div>

                <div class="form-group col-md-12">

                  <label for="inputPassword4" class="col-form-label">Product Unit</label>

                  <select class="form-control select2" name="product_unit"  id="product_unit">

                     

                      <option>Select</option>

                      <?php foreach($units as $value) { ?>

                      <option value="<?php  echo $value['id']; ?>"><?php  echo $value['name']; ?></option>

                      <?php } ?>                                        

                  </select>

                </div>

                

                <div class="form-group col-md-12">

                  <label for="exampleInputEmail1">Cost</label>

                  <input type="text" class="form-control" name="product_cost" id="product_cost"  placeholder="">

                </div>

                <input type="hidden" name="cost_sheet_id" id="cost_sheet_id" value="<?= $this->uri->segment(4); ?>">

                <input type="hidden" name="cost_category_id" id="cart_category_id" >

                <input type="hidden" name="cost_category_sub_id" id="cart_category_sub_id">

              </div>

              <div class="form-group col-md-12 text-right">

                  <button type="button" class="btn btn-primary" onclick="saveProfile('addCostSheet','addCostSheet')">Submit</button> 

              </div>

              

            </form>

        </div>

      </div>

    </div>

</div>



<div class="modal fade" id="add-multi-doc" tabindex="-1" role="dialog" aria-labelledby="add-multi-doc" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Upload Document</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="post" enctype="multipart/form-data" id="uploadDocument">
        <div class="modal-body">
          
            <input type="file" id="image" name="image[]"  class="form-control" multiple>
            <input type="hidden" id="lineItemID" value="" name="lineItemID">
          <div class="preview-images-zone">
          </div>
        </div>
        <div class="form-group col-md-12 text-right">
            <button type="button" class="btn btn-primary" onclick="saveProfileDoc('uploadDocument','uploadDocument')">Submit</button> 
        </div>
        </form>
      </div>
    </div>
</div>

<style type="text/css">
    .table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td {
        padding: 0.1rem!important;
    }

    .pp-to-ll p {
        display: inline-block;
        margin: 0px 20px;
        font-weight: bold;
        color: #000;
        text-align: left;
        font-size: 18px;
    }

    .inner {
        padding-right: 1%;
        display: inline-block;
    }

    .btn {
        font-weight: inherit!important;
    }

    #outer {
        width: 100%;
        text-align: right;
        margin-bottom: 30px;
        padding: 10px;
    }

    tr.ui-sortable-handle {
        cursor: move;
    }

    tr.ui-sortable-handle td:last-child {
        text-align: center;
    }

    table.dragable {
        counter-reset: rowNumber;
        width: 100%; margin: 0 auto;
    }

    table.dragable tbody tr {
        counter-increment: rowNumber;
    }

    table.dragable tbody tr a{ text-align: left; }

    table.dragable tbody tr td:first-child::before {
        content: counter(rowNumber);
        min-width: 1em;
        margin-right: 0.5em;
    }

    .preview-images-zone {
        width: 100%;
        border: 1px solid #ddd;
        min-height: 180px;
        padding: 5px 5px 0px 5px;
        position: relative;
        overflow:auto;
    }

    .preview-images-zone > .preview-image:first-child {
        height: 120;
        width: 120;
        position: relative;
        margin-right: 5px;
    }

    .autocomplete {
      position: relative;
      display: inline-block;
    }

    .fa-upload {
        color: red;
    }

    .autocomplete-items {
      position: absolute;
      border: 1px solid #d4d4d4;
      border-bottom: none;
      border-top: none;
      z-index: 99;
      top: 100%;
      left: 0;
      right: 0;
    }

    .autocomplete-items div {
      padding: 10px;
      cursor: pointer;
      background-color: #fff; 
      border-bottom: 1px solid #d4d4d4; 
    }

    .autocomplete-items div:hover {
      background-color: #e9e9e9; 
    }

    .autocomplete-active {
      background-color: DodgerBlue !important; 
      color: #ffffff; 
    }

    .preview-images-zone > .preview-image {
        height: 90px;
        width: 90px;
        position: relative;
        margin-right: 5px;
        float: left;
        margin-bottom: 5px;
    }

    .preview-images-zone > .preview-image > .image-zone {
        width: 100%;
        height: 100%;
    }

    .preview-images-zone > .preview-image > .image-zone > img {
        width: 100%;
        height: 100%;
    }

    .preview-images-zone > .preview-image > .tools-edit-image {
        position: absolute;
        z-index: 100;
        color: #fff;
        bottom: 0;
        width: 100%;
        text-align: center;
        margin-bottom: 10px;
        display: none;
    }

    .preview-images-zone > .preview-image > .image-cancel {
        font-size: 18px;
        position: absolute;
        top: 0;
        right: 0;
        font-weight: bold;
        margin-right: 10px;
        cursor: pointer;
        display: none;
        z-index: 100;
    }

    .preview-image:hover > .image-zone {
        cursor: move;
        opacity: .5;
    }

    .preview-image:hover > .tools-edit-image,

    .preview-image:hover > .image-cancel {
        display: block;
    }

    .ui-sortable-helper {
        width: 90px !important;
        height: 90px !important;
    }

    .admin-accord .btn.edit_sub_cat {
        padding: 4px;
        background: none;
        color: black;
    }

    .accordion.accordion-bordered .card {
        margin: 0 0rem!important;
    }

    .admin-accord .btn.delete_sub_cat {
        padding: 4px;
        background: none;
        color: black;
    }

    .admin-accord .accordion .card .card-header-2{
        padding: 0.1rem 1.25rem;
        margin-bottom: 0;
        background-color: #d6d6d6;
        border-bottom: 1px solid rgba(0, 0, 0, 0.125);
        border-radius: calc(0.25rem - 1px) calc(0.25rem - 1px) 0 0;
    }

    .admin-accord .accordion .card .card-header-2 a {
        color: #000 !important;
    }

    .admin-accord .accordion .card .card-header-2 .subcat {
        font-size: 1rem;
        margin-bottom: 0px;
        line-height: 2.7;
    }

    .admin-accord .accordion .card .card-header-2 .delete_rows{
        padding:10px;
        background: transparent;
        border: transparent;
        color: #000;
        z-index: 999;
        position: relative;
    }

    .admin-accord .accordion .card .card-header-2 .mb-0 > a {
      display: block;
      position: relative;
    }

    .admin-accord .accordion .card .card-header-2 .mb-0 > a:after {
      content: "\f078"; /* fa-chevron-down */
      font-family: 'FontAwesome';
      position: absolute;
      right: 0;
      top:3px;
    }

    .admin-accord .accordion .card .card-header-2 .mb-0 > a[aria-expanded="true"]:after {
      content: "\f077"; /* fa-chevron-up */
    }

    .admin-accord .accordion .card #accordion-1 .card-body {
        border:1px solid #ccc;
        padding: 20px;
    }

    .delete_rowss{
        padding:0px;
        background: transparent;
        border: transparent;
        color: #fff;
        z-index: 999;
        position: relative;
        vertical-align: middle;
    }

    .admin-accord .table .btn-33{
        padding:0px;
        background: transparent;
        border: transparent;
        color: #000;
        z-index: 999;
        position: relative;
        vertical-align: top;
        display:inline-block;
        margin: 0px 5px;
    }

    .delete_rowss i{
        font-size:1.2rem !important;
    }

    .aa-bb{
        float: right;
        margin-right: 71px;
        font-size: 1rem;
        position: absolute;
        top: 4px;
        right: 0px;
        z-index: 999;
    }

    .aaa-bbb{
        float: right;
        margin-right: 0px;
        line-height: 1;
        font-size: 1rem;
        position: absolute;
        top: -4px;
        right: 40%;
        z-index: 999;
    }

    .aaa-bbb span {
        margin: 13px 20px 0px 0px;
        display: inline-block;
        width: auto;
        color:#000;
        font-weight: bold;
    }

    .admin-accord .table .form-control{
        padding: 0.275rem 1.375rem;
        height: auto !important;
    }
</style>

<script>
    $(document).ready(function () {
        var err_flag = 0;

        var ele = $('.total_cost_val');
        if(ele.length > 0) {
            var all4 = 0;
            for (var i = 0; i < ele.length; i++) {
                (ele[i].innerText == '') ? ele[i].innerText = 0 : ele[i].innerText = ele[i].innerText;
                all4 += parseInt(formatNumber(ele[i].innerText));
        	}

        	$('.total_cost_all').text(formatNum(all4));
        }

        var _eles2 = $('.total_actual_cost');

        if(_eles2.length > 0) {
            var _all2 = 0;
            for (var j = 0; j < _eles2.length; j++) {
                (_eles2[j].innerText == '') ? _eles2[j].innerText = 0 : _eles2[j].innerText = _eles2[j].innerText;
                _all2 += parseInt(formatNumber(_eles2[j].innerText));
        	}

        	$('.total_ac_cost_all').text(formatNum(_all2));
        }

        var _eles3 = $('.deviation_val');
        if(_eles3.length > 0) {
            var _all3 = 0;
            for (var k = 0; k < _eles3.length; k++) {
                (_eles3[k].innerText == '') ? _eles3[k].innerText = 0 : _eles3[k].innerText = _eles3[k].innerText;
                _all3 += parseInt(formatNumber(_eles3[k].innerText));
        	}

        	$('.total_dev_all').text(formatNum(_all3));
        }

        $('#MyModal').on('hidden.bs.modal', function() {
            $(this).find('form').trigger('reset');
        });

        var counter = 0;
        $("table.order-list").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();       
            counter -= 1
        });

  		$( "#button" ).click(function() {
			$( "#item" ).toggle();
		});

        var convertVal = <?= $convertCost->convert_value; ?>;
        var currency = '<?= $costSheetData->currency ?>';
	    if(currency == 'USD') {
	   		$("span.currencyConvert").each(function(index) { 
        		$(this).text(formatNum(formatNumber($(this).html()) / convertVal));
		 	});
	    }

        function formatNum(num) {
          return num.toFixed(2).replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
        }

	    function formatNumber(num) {
            return num.replace(",", "");
        }

	    $('input').change(function () {
	       var val = $(this).val();
	       var qty = $(this).parent().prev().prev().prev().children().text();
	       var to_cost = $(this).parent().next().children().text();
	       $(this).parent().next().next().children().text(formatNum(val*qty));
	       var next_cost = $(this).parent().next().next().children().text();
	       var diff_val = parseInt(parseInt(formatNumber(to_cost)) - parseInt(formatNumber(next_cost)));
	       if(diff_val > 0) {
	           $(this).parent().next().next().next().children().css("color", "#38ce3c");
	       }else{
	           $(this).parent().next().next().next().children().css("color", "red");
	       }

	       $(this).parent().next().next().next().children().text(formatNum(diff_val));

	       var eles = $('.total_cost_val');
	       if(eles.length > 0) {
	            var all = 0;
	            for (var i = 0; i < eles.length; i++) {
	                (eles[i].innerText == '') ? eles[i].innerText = 0 : eles[i].innerText = eles[i].innerText;
                    all += parseInt(formatNumber(eles[i].innerText));
            	}

            	$('.total_cost_all').text(formatNum(all));
	       }

	       var eles2 = $('.total_actual_cost');
	       if(eles2.length > 0) {
	            var all2 = 0;
	            for (var j = 0; j < eles2.length; j++) {
	                (eles2[j].innerText == '') ? eles2[j].innerText = 0 : eles2[j].innerText = eles2[j].innerText;
                    all2 += parseInt(formatNumber(eles2[j].innerText));
            	}

            	$('.total_ac_cost_all').text(formatNum(all2));
	       }

	       var eles3 = $('.deviation_val');
	       if(eles3.length > 0) {
	            var all3 = 0;
	            for (var k = 0; k < eles3.length; k++) {
	                (eles3[k].innerText == '') ? eles3[k].innerText = 0 : eles3[k].innerText = eles3[k].innerText;
                    all3 += parseInt(formatNumber(eles3[k].innerText));
            	}

            	$('.total_dev_all').text(formatNum(all3));
	       }
	    });

	    $('.prev_submitCostSheet').on('click', function(){
			var deviation 	= formatNumber($(this).parent().prev().children().text());
			var actual_cost 	= $(this).parent().prev().prev().prev().prev().children().val();
			var total_actual_cost 	= formatNumber($(this).parent().prev().prev().children().text());
			var description_text 	= $(this).parent().prev().prev().prev().prev().prev().prev().prev().prev().children().text();

			if(actual_cost == 0 || actual_cost == "") {
    			if (err_flag == 0) {
                    $.toast({
                        heading: 'Error',
                        text: 'Actual Cost is not a Zero or Blank value.',
                        position: String("top-right"),
                        icon: 'error',
                        stack: false,
                        loaderBg: '#f96868'
                    });
                }

                return;
			}else{
			    $('#description_text').val(description_text);
    			$('#deviation').val(deviation);
    			$('#_actual_cost').val(actual_cost);
    			$('#total_actual_cost').val(total_actual_cost);
    			genrateTemplate('genrateTemplate','saveJob');
			}
        });

        $('.submitCostSheet').on('click', function(){
            var items = $('.actual_cost.input-sm');
            if(items.length > 0) {
                for(var i=0; i<items.length; i++) {
                    if(items[i].value == 0 || items[i].value == "") {
                        $.toast({
                            heading: 'Error',
                            text: 'Actual Cost is not a Zero or Blank value.',
                            position: String("top-right"),
                            icon: 'error',
                            stack: false,
                            loaderBg: '#f96868'
                        });

                        return;
                    }
                }
            }

            $('.prev_submitCostSheet.btn-success').each(function(i) {
                this.click(); 
            });

			genrateTemplate('genrateTemplate','noeditable');
		});

        $('.updateJob').on('click', function(){
            err_flag = 1;

            $('.prev_submitCostSheet.btn-success').each(function(i) {
                this.click(); 
            });

            genrateTemplate('updatejob','updatejob');
        });
	});

    function addMoreRow(id,cat_id) {
        var counter = 0;
        var newRow = $("<tr><form method='POST' id='insertRowitem-"+id+"'>");
        var cols = "";

        var options ="";
        options += '<option>Select</option>';
        var optionArray = <?php echo json_encode($units); ?>;
        for(x in optionArray){
            options += '<option value='+optionArray[x]['id']+'>' + optionArray[x]['name'] + '</option>';
        }

        cols += '<td  style="width:13%" ><button type="button" class="ibtnDel btn-33" id="'+cat_id+'" value="'+id+'" ><i class="fa fa-trash" aria-hidden="true"></i></button><button type="button" class="btn-33 saveItem" id="'+cat_id+'" value="'+id+'" ><i class="fa fa-bookmark" aria-hidden="true"></i></button></td>';
        cols += '<td><input type="text" class="form-control" name="description-'+id+'"  id="description-'+id+'" placeholder="description"/></td>';
        cols += '<td><input type="number" class="form-control" min="1" name="qty-'+id+'" id="qty-'+id+'" placeholder="Quantity"/></td>';
        cols += '<td><select class="form-control select2" name="product_unit-'+id+'"  id="product_unit-'+id+'">'+options+'</select></td>';
        cols += '<td><input type="text" class="form-control" name="unit_cost-'+id+'" id="unit_cost-'+id+'" placeholder="cost"/></td>';
        cols += '<td><input type="text" class="form-control" name="total_cost-'+id+'" readonly="readonly" id="total_cost-'+id+'" placeholder="Total Cost"/></td>';
        cols += '<td><input type="text" class="form-control" name="margin-'+id+'" id="margin-'+id+'" value="0.65" placeholder=""O/H/></td>';
        cols += '<td><input type="text" class="form-control" name="selling_price-'+id+'" readonly="readonly" id="selling_price-'+id+'" placeholder="Selling price"/><input type="hidden" value="'+cat_id+'"  id="cat_id-'+id+'"></td>';
        newRow.append(cols);

        $("table.order-list-"+id+"").append(newRow);

        counter++;

        $("table.order-list-"+id+"").on("click", ".ibtnDel", function (event) {
            $(this).closest("tr").remove();       
            counter -= 1
        });

        $('#qty-'+id+',#unit_cost-'+id+'').on('keyup change',function(){
            qty = $('#qty-'+id+'').val()
            unitcost = $('#unit_cost-'+id+'').val();
            totalCost = unitcost * qty;
            $('#total_cost-'+id+'').val(totalCost);
        });

        $('#total_cost-'+id+',#margin-'+id+',#qty-'+id+',#unit_cost-'+id+'').on('keyup change',function(){
            total_cost = $('#total_cost-'+id+'').val()
            margin = $('#margin-'+id+'').val();
            totalsellingCost = Math.round(total_cost / margin);
            $('#selling_price-'+id+'').val(totalsellingCost);
        });
    }

    function calculateRow(row) {
        var price = +row.find('input[name^="price"]').val();
    }

    function calculateGrandTotal(){
        var grandTotal = 0;
        $("table.order-list").find('input[name^="price"]').each(function () {
            grandTotal += +$(this).val();
        });

        $("#grandtotal").text(Math.round(grandTotal));
    }
</script>

<script type="text/javascript">
    function findTotal(){
        alert()
        var arr = document.getElementsByName('qty');
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }

        document.getElementById('total_cost').value = tot;
    }
    
    $(document).on('click','.saveItem', function() {
        formID = $(this).val();
        cat_id         = $('#cat_id-'+formID+'').val();
        description    = $('#description-'+formID+'').val();
        qty            = $('#qty-'+formID+'').val();
        product_unit   = $('#product_unit-'+formID+'').val();
        unit_cost      = $('#unit_cost-'+formID+'').val();
        total_cost     = $('#total_cost-'+formID+'').val();
        margin         = $('#margin-'+formID+'').val();
        selling_price  = $('#selling_price-'+formID+'').val();
        cost_sheet_id  = '<?= $this->uri->segment(4); ?>'; 
        var adddata    = {"description":description,"qty":qty,'product_unit':product_unit,'unit_cost':unit_cost,'total_cost':total_cost,'margin':margin,'selling_price':selling_price,'cost_sheet_id':cost_sheet_id,'sub_cat_id':formID,'cat_id':cat_id};

        $.ajax({
            type:"POST",
            data:adddata,
            url:"<?php echo base_url();?>index.php/admin/app/addCostSheet",
            statusCode:{
                200:function(data) {      
                    obj = JSON.parse(data);
                    if(obj.err==1) {
                        swal("Requird", "Please insert value in empty field)", "error");
                    }

                    if(obj.err==0) {
                        swal("success", "Line item added successfully", "success");
                        location.reload();
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
    });

    $(document).ready(function() {
        $('#example').DataTable();
        $('#changeStatus').on('hidden.bs.modal', function (){
            $('#statusval option:selected').removeAttr("selected");
        });

        $(".delete_row").click(function(e){
            e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'cost_sheet_line_item'};

            if(confirm("Are you sure want to delete this record?")) {
                $.ajax({
                    type:"POST",
                    data:deldata,
                    url:"<?php echo base_url();?>index.php/admin/app/delete_record",
                    statusCode:{
                        200:function(data) {      
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

                $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
            }
            return false;
        });

        $(".delete_sub_cat").click(function(e){
            e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'costsheet_subcategory'};

            if(confirm("Are you sure want to delete this record?")) {
                $.ajax({
                    type:"POST",
                    data:deldata,
                    url:"<?php echo base_url();?>index.php/admin/app/delete_record",
                    statusCode:{
                        200:function(data) {      
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

                $(this).parents("#accordion-1").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
            }

            return false;
        });

        $(".delete_rowss").click(function(e){
            e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'cost_sheet_category'};

            if(confirm("Are you sure want to delete this record?")) {
                $.ajax({
                    type:"POST",
                    data:deldata,
                    url:"<?php echo base_url();?>index.php/admin/app/delete_record",
                    statusCode:{
                        200:function(data)
                        {      
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
                $(this).closest(".card").animate({ backgroundColor: "#fbc7c7" }, "fast").animate({ opacity: "hide" }, "slow");
            }
            return false;
        });
    });
</script>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

<script>
    $(document).ready(function () {
    	$('#quotation_status').on('change', function(){
          	status = $(this).val();
          	if(status == 'Accepted')
          	{
          		$('#pdfupload').show();
          	}

          	if(status == 'Not Accepted')
          	{
          		$('#pdfupload').hide();
          	}

          	if(status == 'Pending')
          	{
          		$('#pdfupload').hide();
          	}
        });

    	$('#approval_status').on('change', function(){
          	status = $(this).val();
          	if(status == 'Approved')
          	{
          		$('.approvalJobCode').show();
          		$('.notApprovalReason').hide();
          	}

          	if(status == 'Not Approved')
          	{
          		$('.approvalJobCode').hide();
          		$('.notApprovalReason').show();
          	}
        });

        $('a').click(function() {
            localStorage.setItem('collapseItem', $(this).attr('href'));
        });

        var collapseItem = localStorage.getItem('collapseItem'); 
        if (collapseItem) {
        }
    });
</script>

<script>
    $(document).ready(function() {
        $( ".preview-images-zone" ).sortable();
        $(document).on('click', '.image-cancel', function() {
            let no = $(this).data('no');
            $(".preview-image.preview-show-"+no).remove();
        });
    });

    var num = 4;
    function readImage() {
        if (window.File && window.FileList && window.FileReader) {
            var files = event.target.files; //FileList object
            var output = $(".preview-images-zone");

            for (let i = 0; i < files.length; i++) {
                var file = files[i];
                if (!file.type.match('image')) continue;
                var picReader = new FileReader();
                picReader.addEventListener('load', function (event) {
                    var picFile = event.target;
                    var html =  '<div class="preview-image preview-show-' + num + '">' +
                                  '<div class="image-cancel" data-no="' + num + '">x</div>' +
                                  '<div class="image-zone"><img id="pro-img-' + num + '" src="' + picFile.result + '"></div>' +
                                  '<div class="tools-edit-image"><a href="javascript:void(0)" data-no="' + num + '" class="btn btn-light btn-edit-image">edit</a></div>' +
                                  '</div>';
                    output.append(html);
                    num = num + 1;
                });

                picReader.readAsDataURL(file);
            }
        } else {
            console.log('Browser not support');
        }
    }
</script>

<script>
    $('.edit').click(function(){
        $(this).hide();
        $('.box').addClass('editable');
        $('.text').attr('contenteditable', 'true');  
        $('.save').show();
    });

    $('.save').click(function(){
    	$(this).hide();
    	$('.box').removeClass('editable');
    	$('.text').removeAttr('contenteditable');
    	$('.edit').show();	
        cdata = $('#commentText').html();
        var comdata = {"id":<?=$this->uri->segment(4); ?>,"data":cdata};
        $.ajax({
            type:"POST",
            data:comdata,
            url:"<?php echo base_url();?>index.php/admin/app/update_comment",
            statusCode:{
                200:function(responce) {      
                },
                500:function(responce){
                    console.log("Error :  Internal Server Error");
                },

                404:function(responce){
                    console.log("Error :  Page not found");
                },
                502:function(responce){
                    console.log("Error :  Internal Server Error");
                }
            }
        });	
    });
</script>

<script>
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>