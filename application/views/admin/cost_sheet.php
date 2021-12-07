<style type="text/css">
	.pp-to-ll p {
	    display: inline-block;
	    margin: 0px 20px;
	    font-weight: bold;
	    color: #000;
	    text-align: left;
	    font-size: 18px;
	}
	#accordion-1 {
	    padding-bottom: 1%;
	}
	.inner {
	    padding-right: 1%;
	    display: inline-block;
	}
    @media (max-width: 991px) {
        .inner {
            padding-bottom: 3%;        
        }
    }
    
	.btn {
	    font-weight: inherit!important;
	}
	.table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td {
	    padding: 0.1rem!important;
	}
	#outer {
	    width: 100%;
        text-align: right;
        margin-bottom: 30px;row mt-3
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
    
    .container {
        /*padding-top: 50px;*/
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
    	line-height: 1;
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
      top:5px;
    }
    .admin-accord .accordion .card .card-header-2 .mb-0 > a[aria-expanded="true"]:after {
      content: "\f077"; /* fa-chevron-up */
    }
    .admin-accord .accordion .card #accordion-1 .card-body {
    	border:1px solid #ccc;
        padding: 20px;
    }
    .delete_rowss:hover {
        background-color: #c1c1c1!important;
        border-color: #c1c1c1!important;
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
    	margin-right: 45px;
    	line-height: 2;
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
    	right: 50%;
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

<div class="container-fluid page-body-wrapper">
  	<!-- partial -->
  	<div class="main-panel">
        <div class="content-wrapper">
          	<div class="page-header">
	            <h3 class="page-title">
	              Cost Sheet (<?= $this->uri->segment(4); ?>)
	            </h3>

                <form class="forms-sample" method="post" id='importcostsheet'>
                  	<div class="form-group col-md-11 d-flex" id="pdfupload" style="margin-bottom: 0px !important;">
  						<div class="custom-file col-md-9">
  							<input type="file" class="custom-file-input" name="uploadExcel" id="uploadExcel" style="border: none;" accept=".csv">
  							<label class="custom-file-label" for="customFile">Choose CSV</label>
  							<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
  						</div>
  						
  						<div class="col-md-3">
  							<button type="button" class="btn btn-success" name="submit" value="submit" onclick="saveProfile('importcostsheet','importcostsheet')">Upload</button>
  						</div>
  				    </div>
                </form>
          	</div>
         
		  	<div class="">
		  		<div class="card">
            		<div class="card-body">    
					  	<div class="col-md-12 admin-accord">
						  	<div id="accordion-6" class="accordion accordion-multi-colored" role="tablist">
							  	<div class="card">
									<div class="card-header" role="tab" id="heading-16">
									  	<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapse-16" aria-expanded="false" aria-controls="collapse-16" referrerpolicy="origin" class="collapsed"> Customer Information </a>
									  	</h5>
									</div>
									<div id="collapse-16" class="collapse" role="tabpanel" aria-labelledby="heading-16" data-parent="#accordion-6" style="">
			                            <div class="card-body">
			                              	<div class="row">
			                              	  	<div class="col-md-4">
			                              	    	<form method="post" id="customerForm">
														<label for="inputPassword4"  class="">Customer</label>
													  	<select class="form-control select2" onchange="updateCustomerData('customerForm','UpdateCustomer');" name="customer"  id="customer">
														  	<option value="">Select</option>
														  	<?php foreach($customers as $value) { ?>
															  	<option value="<?php  echo $value['id']; ?>" <?php if($costSheetData->customer==$value['id']){echo 'selected';} ?>><?php  echo $value['company_name']; ?></option>
														  	<?php } ?>                                        
													  	</select>
														<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
													</form>
			                              	  	</div>
			                              	  	<div class="col-md-4">
													<?php $getContactPerson = $this->site_model->get_rows_c1('contact_person','conatct_person',$costSheetData->customer); ?>
													<form method="post" id="contact_person">
														<label for="inputPassword4" class="">Contact person</label>
														<select class="form-control select2" onchange="updateData('contact_person','UpdateContactPerson');" name="contactPerson"  id="contactPerson">
                                                            <option value="">Select</option>
															<?php foreach ($getContactPerson as $key => $person) { ?>
															<option value="<?php echo $person['id'] ?>" <?php if($costSheetData->conatct_person==$person['id']){echo "selected";} ?>><?php echo $person['name']; ?></option>>
															<?php } ?>
														</select>
													 	<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
													</form>
												</div>
												<!-- <div class="col-md-3">
													<?php 
														if($costSheetData->customer) {
															$payment_termss =$this->db->query("SELECT customer.*, (SELECT title FROM payment_terms WHERE id = customer.payment_terms) as pterms1, (SELECT title FROM payment_terms WHERE id = customer.payment_terms2) as pterms2, (SELECT title FROM payment_terms WHERE id = customer.payment_terms3) as pterms3 FROM `customer` WHERE id = ".$costSheetData->customer."")->row(); 
														} ?>
														<form method="post" id="paymentTerms">
															<label for="inputPassword4" class="">Payment terms </label>
															<select class="form-control select2" onchange="updateData('paymentTerms','UpdatePaymentTerms');" name="payment_terms"  id="payment_terms">
                                                                <option value="">Select</option>
																<?php if(!empty($payment_termss)) { ?>
																<option value="<?php echo $payment_termss->payment_terms; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms){echo "selected";} ?>><?php echo $payment_termss->pterms1; ?></option>
																<option value="<?php echo $payment_termss->payment_terms2; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms2){echo "selected";} ?>><?php echo $payment_termss->pterms2; ?></option>
																<option value="<?php echo $payment_termss->payment_terms3; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms3){echo "selected";} ?>><?php echo $payment_termss->pterms3; ?></option>
																  <?php } ?>                              
															</select>
															<input class="form-control select2" type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
														</form>
												</div> -->
												<div class="col-md-4">
													<form method="post" id="sales_person">
														<label for="inputPassword4" class="">Sales Person</label>
														<select class="form-control select2" onchange="updateData('sales_person','UpdateSalesPerson');" name="salesPerson"  id="salesPerson">
                                                            <option value="">Select</option>
															<?php foreach ($salesperson as $key => $sales) { ?>
															<option value="<?php echo $sales['id'] ?>" <?php if($costSheetData->sales_person==$sales['id']){echo "selected";} ?>><?php echo $sales['name']; ?></option>>
															<?php } ?>
																							
														</select>
													 	<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
													</form>
												</div>
			                              	</div>
			                            </div>
		                          	</div>
							 	</div>
							 	<div class="card">
									<div class="card-header" role="tab" id="heading-17">
									  	<h5 class="mb-0">
											<a data-toggle="collapse" href="#collapse-17" aria-expanded="false" aria-controls="collapse-17" referrerpolicy="origin" class="collapsed"> Project Information </a>
									  	</h5>
									</div>
									<div id="collapse-17" class="collapse" role="tabpanel" aria-labelledby="heading-17" data-parent="#accordion-6" style="">
			                            <div class="card-body">
			                              	<div class="row">
			                              	  	<div class="col-md-4">
			                              	    	<form method="post" id="template_name">
														<label for="exampleInputEmail1">Job Name</label>
													  	<input type="text" class="form-control" name="template_Name" value="<?= $costSheetData->name; ?>" id="template_Name"  placeholder="" onchange ="updateFormData('template_name','updateTemplateName');">
													   	<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
													</form>
			                              	  	</div>
			                              	  	<div class="col-md-4">
													<form method="post" id="costTypeForm">
														<label for="inputPassword4" class="">Job type</label>
												  		<select class="form-control js-example-basic-single" onchange="updateData('costTypeForm','UpdateCostType');" name="cost_type"  id="cost_type" style="width: 100%;">
														  	<option value="">Select</option>
														  	<?php foreach($cost_type as $value) { ?>
															  	<option value="<?php  echo $value['id']; ?>"  <?php if($costSheetData->cost_type==$value['id']){echo 'selected';} ?>><?php  echo $value['title']; ?></option>
														  	<?php } ?>                                        
													  	</select>
														<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
													</form>
												</div>
												<div class="col-md-4">
													<form method="post" id="venueForm">
														<label for="inputPassword4" class="">Venue</label>
                                                        
                                                        <input type="text" class="form-control" name="venue" value="<?= $costSheetData->venue; ?>" id="venue"  placeholder="" onchange ="updateData('venueForm','UpdateVenue');">

														<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
												  	</form>
												</div>
												<!-- <div class="col-md-3">
													<form method="post" id="currencyForm">
														<label for="inputPassword4" class="">Currency</label>
													  	<select class="form-control js-example-basic-single" onchange="updateDataCurrency('currencyForm','UpdateCurrency',this.value, <?= $convertCost->convert_value; ?>);" name="currency"  id="currency" style="width: 100%;">
														  	<option value="">Select</option>
														  	<option value="USD" <?php if($costSheetData->currency=='USD'){echo 'selected';} ?>>USD</option>
														  	<option value="AED" <?php if($costSheetData->currency=='AED'){echo 'selected';} ?>>AED</option>                                    
													  	</select>
														<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
												  	</form>
												</div> -->
			                              	</div><br>

                                            <div class="row">
                                                <div class="col-md-12">
                                                    <form method="post" id="cityForm">
                                                        <label for="inputPassword4" class="">City/Country</label>
                                                        
                                                        <textarea class="form-control" name="city" id="city"  rows="2" onchange ="updateData('cityForm','UpdateCity');"><?= $costSheetData->city; ?></textarea>

                                                        <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                                    </form>
                                                </div>

                                            </div><br>

			                              	<div class="row">
			                              	  	<div class="col-md-4">
													<form method="post" id="projectStartDate">
														<label for="exampleInputEmail1">Project Start Date</label>
													  	<input type="text" class="form-control" name="project_start_date" value="<?= $costSheetData->project_start_date; ?>" id="project_start_date"  placeholder="" onchange ="updateFormData('projectStartDate','updateStartDate');">
													   	<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
													</form>
											  	</div>
											  	<div class="col-md-4">
													<form method="post" id="projectEndDate">
														<label for="inputPassword4"  class="">Project End Date</label>
													  	<input type="text" class="form-control" name="project_end_date" value="<?= $costSheetData->project_end_date; ?>" id="project_end_date"  placeholder="" onchange ="updateFormData('projectEndDate','updateEndDate');">
														<input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
													</form>
												</div>
                                                <div class="col-md-4" style='display: inline-flex;'>
                                                    <br>
                                                    <?php 
                                                        if(@$costSheetData->exclusions) {
                                                            $color = "black";
                                                        }else{
                                                            $color = "#fff";
                                                        }
                                                    ?>
                                                    <a class="btn btn-default" data-toggle="modal" data-target="#add-exclusion" style='padding-top: 35px; color: <?= $color; ?>'><i class="fa fa-plus" aria-hidden="true"></i> Project Exclusion</a>
                                                    <div style='padding-top: 35px;'>
                                                        <form method="post" id="copyRight">
                                                            <label class='' for='inputPassword4'>Copyright 
                                                                
                                                            </label>
                                                            <input type='checkbox' class='copyright' id='copyright' onchange ="updateFormData('copyRight', 'copy_Right');" <?= ($costSheetData->copyright == 1) ? "checked" : ""; ?> />
                                                            <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                                            <input type='hidden' class='copy_right' name='copy_right' value='' />
                                                        </form>
                                                    </div>
                                                </div>
			                              	</div><br>

                                            <div class="row">
                                                <div class="col-md-4">
                                                    <form method="post" id="validityDate">
                                                        <label for="exampleInputEmail1">Validity Date</label>
                                                        <input type="text" class="form-control" name="validity_date" value="<?= $costSheetData->validity_date; ?>" id="validity_date"  placeholder="" onchange ="updateFormData('validityDate','updateValidityDate');">
                                                        <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                                    </form>
                                                </div>
                                                <div class="col-md-8">
                                                    <form method="post" id="paymenttermsForm">
                                                        <label for="inputPassword4" class="">Payment terms</label>

                                                        <?php if ($costSheetData->payment_terms) {
                                                            $payment_terms = $costSheetData->payment_terms;
                                                        }else{
                                                            $payment_terms = "50% Advance on Confirmation of order. 50% After Project Completion.";
                                                        } ?>
                                                        
                                                        <textarea class="form-control" name="payment_terms" id="payment_terms"  rows="4" onchange ="updateData('paymenttermsForm','UpdatePaymentTerms');"><?= $payment_terms; ?></textarea>

                                                        <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                                    </form>
                                                </div>

                                            </div>
			                            </div>
		                          	</div>
							 	</div>
						  	</div>
					  	</div>
		  			</div>
			  	</div>
		  	</div>

          	<div class="">
              	<div class="card">
	                <div class="row">
	                  	<div class="col-lg-12 admin-accord">
	                    	<div class="card-body">
	                        	<?php  if($costSheetTotal[0]->totalCostSum!=0){ ?>
	                       			<div class="pp-to-ll" style="text-align: center; font-size: larger;"><p>OVERALL   &nbsp;&nbsp;&nbsp;     Cost &nbsp; <span style="float: right;" ><span class="currencyC"><?= $costSheetData->currency ?></span>&nbsp;<span class="totcurr totalcostsum currencyConvert"><?= number_format(round($costSheetTotal[0]->totalCostSum,0,PHP_ROUND_HALF_UP),2); ?></span></span></p>| <p>Average O/H &nbsp; <span style="" class="mainavg"><?= round($costSheetTotal[0]->totalCostSum/$costSheetTotal[0]->sellingPriceSum,2); ?></span></p> | <p>Price &nbsp; <span style="float: right;"><span class="currencyC"><?=$costSheetData->currency ?></span>&nbsp;<span class="selcurr sellingPriceSum currencyConvert"> <?= number_format(round($costSheetTotal[0]->sellingPriceSum,0,PHP_ROUND_HALF_UP),2); ?></span></span></p></div>
	                       		<?php } else{ ?>
	                       			<div class="pp-to-ll" style="text-align: right; font-size: larger;"><p>OVERALL    &nbsp;&nbsp;&nbsp;    Cost &nbsp; <span style="float: right;" ><span class="currencyC"><?= $costSheetData->currency ?></span>&nbsp;<span class="totcurr totalcostsum currencyConvert">0.00</span></span></p>| <p>Average O/H &nbsp; <span style="" class="mainavg">0.00</span></p> | <p>Price &nbsp; <span style="float: right;"><span class="currencyC"></span>&nbsp;<span class="selcurr sellingPriceSum currencyConvert">0.00</span></span></p></div>
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
					                              		
					                              		<div class="aa-bb" style="top: -8px;">
    													  	<?php if($value['sumSellingCost']){ ?>
    														    <span class="ab-2" style="padding-right: 0px;">
    														    	<span class="totcurr totalcostsum-<?= $value['cat_id']; ?> currencyConvert"><?= number_format(round($value['sumTotalCost'],0,PHP_ROUND_HALF_UP),2); ?></span>&nbsp;|&nbsp;
    														    </span>
    															<span class="ab-2 totavg-<?= $value['cat_id']; ?>" style="padding-right: 0px;"><?= round($value['sumTotalCost']/$value['sumSellingCost'],2); ?></span>&nbsp;|&nbsp;
    															<span class="ab-3" style="padding-right: 25px;">
    																<span class="selcurr sellingPriceSum-<?= $value['cat_id']; ?> currencyConvert"><?= number_format(round($value['sumSellingCost'],0,PHP_ROUND_HALF_UP),2); ?></span>
    															</span>
    														<?php } else{ ?>
    														 	<span class="ab-2" style="padding-right: 0px;">
    														 		<span class="totcurr totalcostsum-<?= $value['cat_id']; ?> currencyConvert"></span>&nbsp;|&nbsp;
    														 	</span>
    															<span class="ab-2 totavg-<?= $value['cat_id']; ?>" style="padding-right: 25px;"></span>&nbsp;|&nbsp;
    															<span class="ab-3" style="padding-right: 0px;">
    																<span class="selcurr sellingPriceSum-<?= $value['cat_id']; ?> currencyConvert"></span>
    															</span>	
    													 	<?php } ?>	
    														<button type="button"  id="<?php echo $value['cat_ids'] ?>" value="<?= $value['cat_id']; ?>" class="delete_rowss btn-success" style="color: red;"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
    												  	</div>
					                            	</a>
						                            
					                          	</h6>
					                        </div>
					                        
					                        <div id="collapse-<?= $i; ?>" class="collapse card-body" role="tabpanel" aria-labelledby="heading-<?= $i; ?>" data-parent="#accordion-2" style="">
					                          	<?php 
						                          	$query = "select cE.id, cE.title, cE.quantity, cE.unit, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$this->uri->segment(4)."' AND cE.cat_id = '".$value['id']."'";
						                           	$subCategory= $this->db->query($query)->result_array();
						                           	$j= 1; 
						                           	foreach ($subCategory as $key => $subvalue) {  
						                           		$lineItems = $this->site_model->get_rows_c3('cost_sheet_line_item','cost_sheet_id',$this->uri->segment(4),'sub_cat_id',$subvalue['id'],'status',1);
					                           			?>
														<div id="accordion-1">
														    <div class="card">
																<div class="card-header-2" id="heading-1-1">
																	<h5 class="mb-0">
																		<a class="collapsed" role="button" data-toggle="collapse" href="#collapse-<?=$i?>-<?=$j?>" aria-expanded="false" aria-controls="collapse-1-1">
																			<div class="subcat">
																				<h4 style="font-size: 1rem!important; width: 40%;">
																					<?=$j.'.';?>&nbsp;&nbsp;<?= $subvalue['title']; ?>
																				</h4>
																			</div>
																			<div class="aaa-bbb" style="">
    							                                                 <?php if(!empty($subvalue['quantity'])) { ?><span><?= $subvalue['quantity']; ?></span><?php } ?>
    							                                                 <?php if(!empty($subvalue['unit'])) { ?><span> &nbsp;&nbsp;<?= $subvalue['unit']; ?></span><?php }?>
    																		</div>	
    																		
    																		<div class="aa-bb" style="top: 0px;">
    																			<?php if(!empty($subvalue['sumTotalCost'])){ ?>
        																			<span class="ab-2"><span class="totcurr subtotalcostsum-<?=$subvalue['id']; ?> urrencyConvert"><?php echo ' '.number_format(round($subvalue['sumTotalCost'],0,PHP_ROUND_HALF_UP),2); ?> &nbsp;&nbsp; | &nbsp;&nbsp;</span></span>
        																			<span class="ab-2 avgoh-<?=$subvalue['id'];?>"><?php echo round ($subvalue['sumTotalCost']/$subvalue['sumSellingCost'],2); ?>&nbsp;&nbsp; | &nbsp;&nbsp;</span>
        																			<span class="ab-3" style="padding-right: 35px;"><span class="selcurr subsellingPriceSum-<?=$subvalue['id']; ?> currencyConvert"><?php echo ' '.number_format(round($subvalue['sumSellingCost'],0,PHP_ROUND_HALF_UP),2); ?></span></span>
    																			<?php } else{ ?>
        																			<span class="ab-2"><span class="totcurr subtotalcostsum-<?=$subvalue['id']; ?> urrencyConvert"></span></span>
        																			<span class="ab-2 avgoh-<?=$subvalue['id'];?>"></span>
        																			<span class="ab-3"><span class="selcurr subsellingPriceSum-<?=$subvalue['id']; ?> currencyConvert"></span></span>	
    																			<?php } ?>
    																			<!--onclick="editCostSubCat('edit-cost-sub-cat',<?=$subvalue['id']; ?>);"-->
    																			<button type="button" id="<?=$subvalue['id']; ?>" id="<?=$subvalue['id']; ?>" class="btn btn-dnger edit_sub_cat"><i class="fa fa-pencil" aria-hidden="true"></i></button>
    																			<button type="button" id="<?=$subvalue['id']; ?>" class="btn btn-dager delete_sub_cat"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
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
																					  	<td>ACTION</td>
																					  	<td>DESCRIPTION</td>
																					  	<td style="width:5%">QTY</td>
																					  	<td>UNIT</td>
																					  	<td>COST</td>
																					  	<td>TOTAL COST</td>
																					  	<td>O/H</td>
																					  	<td>PRICE</td>
																				  	</tr>
																			  	</thead>
																			  	<tbody class="sortable_nav">
																				  	<?php $k=1; foreach ($lineItems as $key => $lineItem) { 
																				  	 	$coutDoc = $this->site_model->row_count_c1('document','line_item_id',$lineItem['id']);
																				  		?>
																					  	<tr class="record" data-postion="<?php echo $lineItem['position']; ?>" data-index="<?php echo $lineItem['id']; ?>" >
																							<form method="post" id="lineItemForm-<?= $lineItem['id']; ?>">
																							 	<td style="width:13%" class="geeks">
																								  	<button type="button" cat_id="<?=$subvalue['id']; ?>" sid="<?= $this->uri->segment(4); ?>" id="<?=$lineItem['id']; ?>" class="btn-33 delete_row"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
																									<button type="button" id="<?=$lineItem['id']; ?>" onclick="saveProfile('lineItemForm-<?= $lineItem['id']; ?>','updateLineItem');"  class="btn-33  updateRow"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
																									<button class="btn-33" type="button"  onclick="openMultiDos('add-multi-doc','<?=$lineItem['id']; ?>')" ><i id="uploadID-<?=$lineItem['id']; ?>" class="fa fa-upload" <?php if($coutDoc>0){echo 'style="color:green"'; } ?> aria-hidden="true"></i></button>
																							  	</td>
																							  	<td style="width:20%" class="">
																								  	<p><?=$lineItem['product_name']; ?></p>
																							  	</td>
																							  	<td style="width:9%" class="">
																								  	<input type="number" min="1" name="qty" class="form-control" value="<?=$lineItem['quantity']; ?>">
																							  	</td>
																							  	<td style="width:10%" class="">
																								   	<p><?=get_single_col_value('units','id',$lineItem['unit_id'],'name'); ?></p>
																							  	</td>
																							  	<td style="width:10%" class="">
																								   	<input type="text" class="form-control" name="unit_cost" value="<?=$lineItem['unit_cost']; ?>">
																							  	</td>
																							  	<td style="width:14%" class="">
																								   	<p style="color: green;"><span class="currencyConvert"><?= number_format(round($lineItem['total_cost'],0,PHP_ROUND_HALF_UP),2); ?></span></p>
																							  	</td>
																							  	<td style="width:10%" class="">
																								   	<input type="text" class="form-control" name="margin" value="<?=$lineItem['o/h']; ?>">
																								   	<input type="hidden" name="lineItemId" value="<?=$lineItem['id']; ?>">
																							  	</td>
																							  	<td style="width:40%" class="">
																								   	<p style=""><span class="currencyConvert"><?= number_format(round($lineItem['selling_price'],0,PHP_ROUND_HALF_UP),2); ?></span></p>
																							  	</td>
																							</form>
																					  	</tr>
																					<?php $k++; } ?>
																			  	</tbody>
																		   	<?php } ?>
																		  	<tfoot>
																			  	<tr>
																				  	<td colspan="5" style="text-align: left;">
																					  	<button class="btn btn-sm btn-block btn-success col-lg-3 addrow" cat="<?= $value['id']; ?>" value="<?=  $subvalue['id']; ?>" id="addrow" onclick="addMoreRow(this.value,'<?= $value['id']; ?>');"><i class="fa fa-plus" aria-hidden="true"></i>ADD LINE</button>
																				  	</td>
																			  	</tr>
																			  	<tr>
																			  	</tr>
																		  	</tfoot>
																	 	</table>
																	</div>
																</div>			
															</div>
														</div>
					                      		<?php $j++; } ?>
					                      		
        					                    <div class='card subcategory-add' style='display: none; padding: 10px 20px 10px;'>
            		                      		    <form method="post" action="" id="">
                                                        <div class="row">
                                                            <div class="form-group col-md-4">
                                                                <input type="text" class="form-control" name="subcategory" id="subcategory" placeholder='Sub Category'>
                                                                <input type="hidden" name="sub_cost_sheet_id" value="<?php echo $this->uri->segment(4); ?>">
                                                                <input type="hidden" name="pcategory_id" id="pcategory_id">
                                                            </div>
                                                             <div class="form-group col-md-4">
                                                            	<input type="number" min="1" name="editsubqty" id="editsubqty" class="form-control" value="" placeholder='Quantity'>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                            	<select class="form-control select2" name="sub_product_unit" id="sub_product_unit">
                                                            		<option value="">Unit</option>
                                                            		<?php foreach ($units as $key1 => $value1) { ?>
                                                            		    <option value="<?= $value1['name'] ?>"><?= $value1['name']; ?></option>
                                                            		<?php } ?>
                                                            	</select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group col-md-12 text-right">
                                                            <button type="button" class="btn btn-primary" onclick="saveProfile('addCostSubCat','addCostSubCat')">Submit</button> 
                                                        </div>
                                                    </form>
            		                      		</div>
            		                      		<div class='card subcategory-edit' style='display: none; padding: 10px 20px 10px;'>
            		                      		    <form method="post" action="" id="">
                                                      <div class="row">
                                                        <div class="form-group col-md-4">
                                                          <input type="text" class="form-control" name="editsubcategory" id="editsubcategory" placeholder='Sub Category'>
                                                          <input type="hidden" name="sub_cost_sheet_id" value="<?php echo $this->uri->segment(4); ?>">
                                                          <input type="hidden" name="subpcategory_id" id="subpcategory_id">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                        	<input type="number" min="1" name="editsubqty" id="editsubqty" class="form-control" value="" placeholder="Quantity">
                                                        </div>
                                                        <div class="form-group col-md-4">
                                                        	<select class="form-control select2" name="editsub_product_unit" id="editsub_product_unit">
                                                        		<option>Unit</option>
                                                        		<?php foreach ($units as $key2 => $value2) { ?>
                                                        		    <option value="<?= $value2['name']; ?>"><?= $value2['name']; ?></option>
                                                        		<?php } ?>
                                                        	</select>
                                                        </div>
                                                      </div>
                                                      <div class="form-group col-md-12 text-right">
                                                          <button type="button" class="btn btn-primary" onclick="saveProfile('editCostSubCat','updateCostSubCat')">Submit</button> 
                                                      </div>             
                                                    </form>
                                                </div>
            		                      		
					                       		<button class="btn btn-success btn-rrr" value="<?=  $value['id'] ?>">ADD SUB-CATEGORY</button>
					                        </div>
	                      				</div>
	                    			<?php  $i++; } ?>
		                      		<br>
                    			</div>  
                    			
                    			<div class='row'>
                    			    <form method="post" action="" id="addCostCat" class='addCostCat' style='display: none; padding: 10px;'>
                                        <div class="row">
                                            <div class="form-group col-md-12" style="display: inline-flex;">
                                                <select class="form-control select2" name="category" id="category" style="width: 70%; display: inline-flex;">
                                                    <option>Category</option>
                                                    <?php foreach($categories as $value) { ?>
                                                        <option value="<?php  echo $value['id']; ?>"><?php  echo $value['title']; ?></option>
                                                    <?php } ?>                                        
                                                </select>&nbsp;&nbsp;
                                                <input type="hidden" name="cost_sheet_id" value="<?php echo $this->uri->segment(4); ?>">
                                                <button type="button" class="btn btn-primary" onclick="saveProfile('addCostCat','addCostCat')" style="display: inline-flex;">Submit</button> 
                                            </div>
                                        </div>
                                    </form>    
                    			</div><br>
                    			
	                    		<button class="btn btn-default btn-success" onclick="openCostCat('add-cost-cat',<?= $this->uri->segment(4); ?>);"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button>
	                    		
	                    		<div class="row mt-3" style="padding-left: 15px; padding-right: 20px;">
                      	            <div class="col-md-4">
                    				</div>
                    				<div class="col-md-8">
                    				     <table class="table">
                    					    <tbody>
                    						  <tr>
                    							<td style="width:50%;"><p class="text-right mb-0"><strong>Total</strong></p></td>
                    							<td style="width:50%;"><p class="text-right mb-0"><strong>AED <span class="totalsellingPrice"><?= number_format(round($costSheetTotal[0]->sellingPriceSum,0,PHP_ROUND_HALF_UP),2); ?></span></strong></p></td>
                    						  </tr>
                    						  <tr>
                    							<td style="width:50%;">
                    								<div class="form-inline text-right mb-0">
                								        <span class="form-control" placeholder="Discount percent" id="email" style="width:40%; padding: 0.875rem 1.375rem; display: inline-flex;"> Discount</span>

                                                        <span class="form-control" placeholder="Flat" id="flat" style="width:30%; padding: 0.875rem 1.375rem; display: inline-flex;"> Flat</span>
                                                        <input type="hidden" name="discountBy" value="1" id="discountBy" />

                                                        <!-- <select class="form-control" id="discountBy" name="discountBy" style="width: 30%; display: inline-flex;">
                                                            <option value="1" <?php if($costSheetData->discountBy==1){echo 'selected';} ?> >Flat</option>
                                                            <option value="2" <?php if($costSheetData->discountBy==2){echo 'selected';} ?> >Percent</option>
                                                        </select> -->
                    									<input type="text" class="form-control" value="<?php echo $costSheetData->discountPerent;  ?>" placeholder="" id="discount" style="width:30%; display: inline-flex; text-align: right;" >
                    								 </div>	
                    							</td>
                    							<?php 
                    								$disPrice = $costSheetData->discountPerent;
                                                    $discountBy = $costSheetData->discountBy;
                                                    if ($discountBy == 2) {
                                                        $dispercent = $disPrice;
                                                        $percentPrice = $dispercent * $costSheetTotal[0]->sellingPriceSum / 100;
                                                        $disPrice = $percentPrice;
                                                    }
                    
                    								$totalPrice = $costSheetTotal[0]->sellingPriceSum - $disPrice;
                    
                    								$calculateVat = ((5/100)*$totalPrice);
                    
                    								$totalCost = $calculateVat+$totalPrice;
                    
                    							 ?>
                    							<td style="width:50%;"><p class="text-right mb-0"><strong ><span class="discountPrice">AED <?= number_format(round($disPrice,0,PHP_ROUND_HALF_UP),2); ?></span></strong></p></td>
                    						  </tr>
                    						  <tr>
                    							<td style="width:50%;"><p class="text-right mb-0"><strong>Total after discount</strong></p></td>
                    							<td style="width:50%;"><p class="text-right mb-0"><strong><span class="totalarterDis">AED <?= number_format(round($totalPrice,0,PHP_ROUND_HALF_UP),2); ?></span></strong></p></td>
                    						  </tr>
                    						  <tr>
                    							<td style="width:50%;"><p class="text-right mb-0"><strong>Vat @ 5%</strong></p></td>
                    							<td style="width:50%;"><p class="text-right mb-0"><strong><span class="vatPrice">AED <?= number_format(round($calculateVat,0,PHP_ROUND_HALF_UP),2); ?></span></strong></p></td>
                    						  </tr>
                    						  
                    						  <tr>
                    							<td style="width:60%;"><p class="text-right mb-0"><strong>Total including tax</strong></p></td>
                    							<td style="width:40%;"><p class="text-right mb-0"><strong><span class="total">AED <?= number_format(round($totalCost,0,PHP_ROUND_HALF_UP),2); ?></span></strong></p></td>
                    						  </tr>
                    						</tbody>
                    				    </table>
                    				</div>
                        		</div>
                        		<br>
	                    		
	                    		<div id="outer">
            		     <!--         	<div class="inner">-->
            							<!--<form method="post" action="<?php echo base_url(); ?>index.php/admin/app/action">-->
            							<!--	<input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>" />-->
            							<!--	<button class="btn msgBtn btn-success" name="export" type="submit"><i class="fa fa-file-text-o" aria-hidden="true"></i>Download excel</button>-->
            							<!--</form>-->
            		     <!--         	</div>-->
            					  	<div class="inner">
            					  		<form method="post" id="saveDraft">
            					  			<input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>" />
            					  			<button type="button" onclick="saveTemplateDraft('saveDraft','saveTemplateDraft');" class="btn msgBtn btn-success"><i class="fa fa-file-text-o" aria-hidden="true"></i>Save Draft</button>
            					  		</form>
            					  	</div>
            					  	<div class="inner">
            					  		<form method="post" id="genrateTemplate">
            					  			<input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>" />
            					  			<button type="button" class="btn msgBtn submitCostSheet btn-success"><i class="fa fa-location-arrow" aria-hidden="true"></i>Submit</button>
            					  		</form>
            					  	</div>
            					</div>
	                      	</div>
	                    </div>
                  	</div>
                </div>
            </div>
		  	
    		<br>
      	</div>
    </div>
    <footer class="footer container" style="padding-top: 50px;">
        <br><br><br>
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

<div class="modal fade" id="add-exclusion" tabindex="-1" role="dialog" aria-labelledby="add-exclusion" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="padding: 20px;">
            <h5 class="" id="exampleModalLabel" styly="color: black!important;">Project Exclusion</h5>
            <form method="post" id="projectExclusion">
                <div class="modal-body">
                    <input type="hidden" class="CostSheetId" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                    <input type="hidden" class="exclus" name="exclus" value="">
                    <input type="hidden" class="exclusions_data" value="<?= $costSheetData->exclusions; ?>">
                    <?php 
                        if(@$exclusions) {
                            foreach($exclusions as $key => $value) { ?>
                                <div class='row'>
                                    <input type='checkbox' class='exclusion col-md-1' value='<?= $value['id']; ?>' style='width: 20px; height: 20px;' />  
                                    <label class="col-md-11"><?= $value['description']; ?></label>
                                </div> 
                    <?php } } ?>
                </div>
                <div class="form-group col-md-12 text-right">
                    <button type="button" class="btn btn-primary" onclick="updateData1('projectExclusion','UpdateExclusion')">Submit</button> 
                    <button type="button" class="btn btn-danger" data-dismiss="modal" aria-label="Close">Close</button> 
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        var arr = [];
        
        $('.exclusion').click(function() {
            var element = $(this);
            if(!$(this).is(":checked")) {
                $(this).removeAttr('checked');
                var x = arr.indexOf($(this).val());
                arr.splice(x, 1);
            }else {
                $(this).attr('checked', true);
                arr.push($(this).val());
            }
            $('.exclus').val(arr);
        });
        
        $('.copyright').click(function() {
            if(!$(this).is(":checked")) {
                $(this).removeAttr('checked');
                $('.copy_right').val(0);
            }else {
                $(this).attr('checked', true);
                $('.copy_right').val(1);
            } 
        });
    });
</script>

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
<div class="modal fade" id="add-cost-cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Cost Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="" id="addCostCat">
              <div class="row">
               
                <div class="form-group col-md-12">
                  <label for="inputPassword4" class="col-form-label">Category</label>
                  <select class="form-control select2" name="category"  id="category">
                     
                      <option>Select</option>
                      <?php foreach($categories as $value) { ?>
                      <option value="<?php  echo $value['id']; ?>"><?php  echo $value['title']; ?></option>
                      <?php } ?>                                        
                  </select>
                  <input type="hidden" name="cost_sheet_id" value="<?php echo $this->uri->segment(4); ?>">
                </div>
              </div>
              <div class="form-group col-md-12 text-right">
                  <button type="button" class="btn btn-primary" onclick="saveProfile('addCostCat','addCostCat')">Submit</button> 
              </div>
              
            </form>
        </div>
      </div>
    </div>
</div>

<div class="modal fade" id="edit-cost-sub-cat" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Edit Sub Cost Category</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
            <form method="post" action="" id="editCostSubCat">
              <div class="row">
               
                <div class="form-group col-md-12">
                  <label for="inputPassword4" class="col-form-label">Sub Category</label>
                  <input type="text" class="form-control" name="editsubcategory" id="editsubcategory">
                  <input type="hidden" name="sub_cost_sheet_id" value="<?php echo $this->uri->segment(4); ?>">
                  <input type="hidden" name="subpcategory_id" id="subpcategory_id">
                </div>
                <div class="form-group col-md-12">
                	<label for="inputPassword4" class="col-form-label">Quantity</label>
                	<input type="number" min="1" name="editsubqty" id="editsubqty" class="form-control" value="">
                </div>
                <div class="form-group col-md-12">
                	<select class="form-control select2" name="editsub_product_unit" id="editsub_product_unit">
                		<option>Select</option>
                		<?php foreach ($units as $key => $value) { ?>
                		<option value="<?= $value['name']; ?>"><?= $value['name']; ?></option>
                		<?php } ?>
                	</select>

                </div>
              </div>
              <div class="form-group col-md-12 text-right">
                  <button type="button" class="btn btn-primary" onclick="saveProfile('editCostSubCat','updateCostSubCat')">Submit</button> 
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

<script>
  	
    $(document).ready(function ()
    {
      $('#MyModal').on('hidden.bs.modal', function()
      {
        $(this).find('form').trigger('reset');
      })
      var counter = 0;
      $("table.order-list").on("click", ".ibtnDel", function (event) 
      {	
      	  lineItemID = $(this).attr('linid');
      	  alert(lineItemID);      
          counter -= 1
      });

    });
    function getTotalSellingPrice(cat_id, cost_sheet_id)
      	{
      	 var data  = {"cat_id":cat_id,"cost_sheet_id":cost_sheet_id};
         $.ajax({
            type:"POST",
            data:data,
            url:"<?php echo base_url();?>index.php/admin/app/getTotalSellingPrice",
            success:function(response)
            {
            	obj = JSON.parse(response);
                if(obj.err==2)
                {

                  //swal("Requird", "Please insert value in empty field", "error");
                }
                if(obj.err==0)
                {
                    sellingPrice = obj.data.sellingPriceSum;
                    $('.sellingPriceSum, .totalsellingPrice').html(formatNumber(parseInt(obj.data.sellingPriceSum).toFixed(2)));
                    $('.totalcostsum').html(formatNumber(parseInt(obj.data.totalcostsum).toFixed(2)));
                    var TotalAvg = (obj.data.totalcostsum)/(obj.data.sellingPriceSum);
                    $('.mainavg').html(formatNumber(TotalAvg.toFixed(2)));
                    var Total = obj.data.sellingPriceSum;
                    $.each(obj.categoryData, function (i) {
                        (obj.categoryData[i].sumTotalCost == null) ? obj.categoryData[i].sumTotalCost = 0 : obj.categoryData[i].sumTotalCost = obj.categoryData[i].sumTotalCost;
                        (obj.categoryData[i].sumSellingCost == null) ? obj.categoryData[i].sumSellingCost = 0 : obj.categoryData[i].sumSellingCost = obj.categoryData[i].sumSellingCost;
                        
                    	var catAvg = '';
                    	if(obj.categoryData[i].sumTotalCost == 0 || obj.categoryData[i].sumSellingCost == 0) {
                    	    catAvg = 0.00;
                    	}else{
                    	    catAvg = (obj.categoryData[i].sumTotalCost)/(obj.categoryData[i].sumSellingCost);
                    	}
                    	
        				$('.totalcostsum-'+obj.categoryData[i].cat_id+'').html(formatNumber(parseInt(obj.categoryData[i].sumTotalCost).toFixed(2)));
        				$('.totavg-'+obj.categoryData[i].cat_id+'').html(formatNumber(catAvg.toFixed(2)));
        				$('.sellingPriceSum-'+obj.categoryData[i].cat_id+'').html(formatNumber(parseInt(obj.categoryData[i].sumSellingCost).toFixed(2)));
   					 
					});
					$.each(obj.subCategoryData, function (i) {
					    (obj.subCategoryData[i].sumTotalCost == null) ? obj.subCategoryData[i].sumTotalCost = 0 : obj.subCategoryData[i].sumTotalCost = obj.subCategoryData[i].sumTotalCost;
                        (obj.subCategoryData[i].sumSellingCost == null) ? obj.subCategoryData[i].sumSellingCost = 0 : obj.subCategoryData[i].sumSellingCost = obj.subCategoryData[i].sumSellingCost;
                        
                    	var avg = '';
                    	if(obj.subCategoryData[i].sumTotalCost == 0 || obj.subCategoryData[i].sumSellingCost == 0) {
                    	    avg = 0.00;
                    	}else{
                    	    avg = (obj.subCategoryData[i].sumTotalCost)/(obj.subCategoryData[i].sumSellingCost);
                    	}
                    	
        				$('.avgoh-'+obj.subCategoryData[i].id+'').html(formatNumber(avg.toFixed(2)) + " | ");
        				$('.subtotalcostsum-'+obj.subCategoryData[i].id+'').html(formatNumber(parseInt(obj.subCategoryData[i].sumTotalCost).toFixed(2)) + " | ");
        				$('.subsellingPriceSum-'+obj.subCategoryData[i].id+'').html(formatNumber(parseInt(obj.subCategoryData[i].sumSellingCost).toFixed(2)));
   					 
					});

					var percent = percents;
					var totalDiscount = percent;
      				var discountedprice = (Total)-totalDiscount;
      				var vatTotal = (5/100)*(discountedprice)
      				$('.discountPrice').html('AED '+formatNumber(parseInt(totalDiscount).toFixed(2)));
      				$('.discountTotal, .totalarterDis').html('AED '+ formatNumber(parseInt(discountedprice).toFixed(2)));
      				$('.vatPrice').html('AED '+formatNumber(parseInt(vatTotal).toFixed(2)));
      				$('.total, .esttotal').html('AED '+formatNumber(parseInt(discountedprice+vatTotal).toFixed(2)));

                }        
             }
            
          });
      	}
increment = 1;

function formatNumber(num) {
  return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,')
}

function formatNumber1(num) {
    return num.replace(",", "");
}

$('.btn-rrr').click(function() {
    var cat_id = $(this).val();
    $(this).prev().prev().show();
    $(this).prev().prev().children().attr('id', 'addCostSubCat');
    $(this).prev().prev().children().children().children().children().next().next().val(cat_id);
});

function addMoreRow(id,cat_id)
{
  
  var lineItemData 	= {'cat_id':cat_id,'sub_cat_id':id,'costsheet_id':<?= $this->uri->segment(4); ?>};
  $.ajax({
            type:"POST",
            data:lineItemData,
            url:"<?php echo base_url();?>index.php/admin/app/addCostSheetlineitem",
              success:function(data)
              {      
                obj = JSON.parse(data);
                if(obj.err==1)
                {
                  swal("Requird", "Please insert value in empty field", "error");
                }
                if(obj.err==0)
                {

                  increment++;
				  var newId = (+id) + (+increment);
				  var counter = 0;
				  var newRow = $("<tr data-index='"+obj.lineItemID+"'><form method='POST' id='insertRowitem-"+id+"-"+increment+"'>");
				        var cols = "";
				        var options ="";
				        options += '<option>Select</option>';
				        var optionArray = <?php echo json_encode($units); ?>;
				        console.log(optionArray);
				        for(x in optionArray){
				         if(optionArray[x]['name'] == 'SQM')
				         {
				         	options += '<option value='+optionArray[x]['id']+' selected="selected">' + optionArray[x]['name'] + '</option>';
				         }
				         else{
				         	options += '<option value='+optionArray[x]['id']+'>' + optionArray[x]['name'] + '</option>';
				         }
				          
				        }
				        var products ="";
				        var optionArrayX = obj.products;
				        for(y in optionArrayX){
				          products += '<option value='+optionArrayX[y]['id']+'>' + optionArrayX[y]['value'] + '</option>';
				        }
		        cols += '<td  style="width:10%" ><button type="button" class="ibtnDel btn-33" id="'+cat_id+'" linId="'+obj.lineItemID+'" value="'+id+'" ><i class="fa fa-trash-o" aria-hidden="true"></i></button><button type="button" class="btn-33 saveItem" id="'+cat_id+'" value="'+id+'" ><i class="fa fa-bookmark" aria-hidden="true"></i></button><button class="btn-33 uploadDoc" linId="'+obj.lineItemID+'" type="button"><i class="fa fa-upload" aria-hidden="true"></i></button></td>';
		        cols += '<td style="width:25%"><select class="form-control select2" name="description-'+newId+'"  id="description-'+newId+'">'+products+'</select></td>';
		        cols += '<td style="width:8%"><input type="number" class="form-control unit_qty" min="1" newfrmid="'+id+'"linId="'+obj.lineItemID+'" frmid="'+newId+'" name="qty-'+newId+'" id="qty-'+newId+'" value="1" placeholder="Quantity"/></td>';
		        cols += '<td style="width:10%"><select class="form-control select2" name="product_unit-'+newId+'"  id="product_unit-'+newId+'">'+options+'</select></td>';
		        cols += '<td style="width:8%"><input type="text" class="form-control unit_costss" newfrmid="'+id+'" linId="'+obj.lineItemID+'" frmid="'+newId+'"  name="unit_cost-'+newId+'" id="unit_cost-'+newId+'" placeholder="cost"/></td>';
		        cols += '<td style="width:8%"><input type="text" class="form-control" name="total_cost-'+newId+'" readonly="readonly" id="total_cost-'+newId+'" placeholder="Total Cost"/></td>';
		        cols += '<td style="width:7%"><input type="text" class="form-control marginss" newfrmid="'+id+'" linId="'+obj.lineItemID+'" frmid="'+newId+'" name="margin-'+newId+'" id="margin-'+newId+'" value="0.65" placeholder=""O/H/></td>';
		        cols += '<td style="width:10%"><input type="text" class="form-control" name="selling_price-'+newId+'" readonly="readonly" id="selling_price-'+newId+'" placeholder="Selling price"/><input type="hidden" value="'+cat_id+'"  id="cat_id-'+newId+'"></td>';
		        newRow.append(cols);
		        $("table.order-list-"+id+"").append(newRow);
		        counter++;
		        $("table.order-list-"+id+"").on("click", ".ibtnDel", function (event) {
		        	lineItemID = $(this).attr('linid');
            		var deldata = {"id":lineItemID,"table":'cost_sheet_line_item'};
            		
            		if(confirm("Are you sure want to delete this record?")) {
					    $.ajax({
			                type:"POST",
			                data:deldata,
			                url:"<?php echo base_url();?>index.php/admin/app/delete_record",
			                statusCode:{
			                    200:function(data) {   
			                	    getTotalSellingPrice(id, <?= $this->uri->segment(4); ?>);
			                    }
			                }
		                });
                        
                        var del2data = {"id":$('#cost_sheet_id').val(), "table":'cost_sheet_product'};
                        $.ajax({
			                type:"POST",
			                data:del2data,
			                url:"<?php echo base_url();?>index.php/admin/app/delete2_record",
			                statusCode:{
			                    200:function(data) {   
			                	    // getTotalSellingPrice(id, <?= $this->uri->segment(4); ?>);
			                    }
			                }
		                });
		                
			    		$(this).closest("tr").remove();
		         		counter -= 1
		     		}		     		
		        });
		        $('#qty-'+newId+',#unit_cost-'+newId+'').on('keyup change',function(){
		          qty = $('#qty-'+newId+'').val()
		          unitcost = $('#unit_cost-'+newId+'').val();
		          totalCost = Math.ceil(unitcost * qty).toFixed(2);
		          $('#total_cost-'+newId+'').val(totalCost);
		        });
		        $('#margin-'+newId+'').keypress(function (e) {
				     if (e.which == 13) {
				         addMoreRow(id,cat_id)
				     } 
				 });
		        $('#total_cost-'+newId+',#margin-'+newId+',#qty-'+newId+',#unit_cost-'+newId+'').on('keyup change',function(){
		          total_cost = $('#total_cost-'+newId+'').val()
		          margin = $('#margin-'+newId+'').val();
		          totalsellingCost = Math.ceil(total_cost / margin).toFixed(2);
		          $('#selling_price-'+newId+'').val(totalsellingCost);
	              });
		         
		        $('.uploadDoc').on('click', function(){
      				var lineid = $(this).attr('linId');
      				openMultiDos('add-multi-doc',lineid);

      			});
      			$('#description-'+newId+'').select2({
			      tags: true
			    });
			    $('#description-'+newId+'').on('change',function(){
			    	var productID = $(this).val();
			    	var deldata = {"id":productID};
					 $.ajax({
			              type:"POST",
			              data:deldata,
			              url:"<?php echo base_url();?>index.php/admin/app/getProductByCategories",
			              success:function(responce)
			                {  
			                	prodobj = JSON.parse(responce); 
			                	$('#unit_cost-'+newId+'').val(prodobj[0].cost_in_aed);
			                	$('#product_unit-'+newId+' option[value='+prodobj[0].product_unit+']').attr('selected', 'selected');
			                	
			                }
			            });
			      });
                }        
              }
          });
}
function toggleField(hideObj,showObj){
 hideObj.disabled=true;		
 hideObj.style.display='none';
 showObj.disabled=false;	
 showObj.style.display='inline';
 showObj.focus();
}

function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();
}


function calculateGrandTotal(){
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(Number.parseFloat(grandTotal));
}
   
  </script>
  <script type="text/javascript">
  	var sellingPrice = <?php echo isset($costSheetTotal[0]->sellingPriceSum) ? $costSheetTotal[0]->sellingPriceSum : 0 ?>;
  	var percents = <?php echo $costSheetData->discountPerent; ?>;
    function findTotal(){
        var arr = document.getElementsByName('qty');
        var tot=0;
        for(var i=0;i<arr.length;i++){
            if(parseInt(arr[i].value))
                tot += parseInt(arr[i].value);
        }
        document.getElementById('total_cost').value = tot;
      }

      $(document).on('change','.unit_costss, .unit_qty, .marginss', function()
      {
      	 linId 			= $(this).attr('linId');
         formID 		= $(this).attr('frmid');
         newformID 		= $(this).attr('newfrmid');
         cat_id         = $('#cat_id-'+formID+'').val();
         description    = $('#description-'+formID+'').val();
         qty            = $('#qty-'+formID+'').val();
         product_unit   = $('#product_unit-'+formID+'').val();
         unit_cost      = $('#unit_cost-'+formID+'').val();
         total_cost     = $('#total_cost-'+formID+'').val();
         margin         = $('#margin-'+formID+'').val();
         selling_price  = $('#selling_price-'+formID+'').val();
         cost_sheet_id  = '<?= $this->uri->segment(4); ?>'; 
         var adddata    = {"description":description,"qty":qty,'product_unit':product_unit,'unit_cost':unit_cost,'total_cost':total_cost,'margin':margin,'selling_price':selling_price,'cost_sheet_id':cost_sheet_id,'sub_cat_id':newformID,'cat_id':cat_id,'lineItemID':linId};
         $.ajax({
            type:"POST",
            data:adddata,
            url:"<?php echo base_url();?>index.php/admin/app/addCostSheet",
            statusCode:{
              200:function(data)
              {      
                obj = JSON.parse(data);
                if(obj.err==1)
                {

                  //swal("Requird", "Please insert value in empty field", "error");
                }
                if(obj.err==0)
                {

                    // alertify.success("Success");
                    sellingPrice = obj.data.sellingPriceSum;
                    $('.sellingPriceSum, .totalsellingPrice').html(formatNumber(parseInt(obj.data.sellingPriceSum).toFixed(2)));
                    $('.totalcostsum').html(formatNumber(parseInt(obj.data.totalcostsum).toFixed(2)));
                    var TotalAvg = (obj.data.totalcostsum)/(obj.data.sellingPriceSum);
                    $('.mainavg').html(formatNumber(TotalAvg.toFixed(2)));
                    var Total = obj.data.sellingPriceSum;
                    $.each(obj.categoryData, function (i) {
                        (obj.categoryData[i].sumTotalCost == null) ? obj.categoryData[i].sumTotalCost = 0 : obj.categoryData[i].sumTotalCost = obj.categoryData[i].sumTotalCost;
                        (obj.categoryData[i].sumSellingCost == null) ? obj.categoryData[i].sumSellingCost = 0 : obj.categoryData[i].sumSellingCost = obj.categoryData[i].sumSellingCost;
                        
                    	var catAvg = '';
                    	if(obj.categoryData[i].sumTotalCost == 0 || obj.categoryData[i].sumSellingCost == 0) {
                    	    catAvg = 0.00;
                    	}else{
                    	    catAvg = (obj.categoryData[i].sumTotalCost)/(obj.categoryData[i].sumSellingCost);
                    	}
                    	
        				$('.totalcostsum-'+obj.categoryData[i].cat_id+'').html(formatNumber(parseInt(obj.categoryData[i].sumTotalCost).toFixed(2)));
        				$('.totavg-'+obj.categoryData[i].cat_id+'').html(formatNumber(catAvg.toFixed(2)));
        				$('.sellingPriceSum-'+obj.categoryData[i].cat_id+'').html(formatNumber(parseInt(obj.categoryData[i].sumSellingCost).toFixed(2)));
   					 
					});
					$.each(obj.subCategoryData, function (i) {
						(obj.subCategoryData[i].sumTotalCost == null) ? obj.subCategoryData[i].sumTotalCost = 0 : obj.subCategoryData[i].sumTotalCost = obj.subCategoryData[i].sumTotalCost;
                        (obj.subCategoryData[i].sumSellingCost == null) ? obj.subCategoryData[i].sumSellingCost = 0 : obj.subCategoryData[i].sumSellingCost = obj.subCategoryData[i].sumSellingCost;
                        
                    	var avg = '';
                    	if(obj.subCategoryData[i].sumTotalCost == 0 || obj.subCategoryData[i].sumSellingCost == 0) {
                    	    avg = 0.00;
                    	}else{
                    	    avg = (obj.subCategoryData[i].sumTotalCost)/(obj.subCategoryData[i].sumSellingCost);
                    	}
                    	
        				$('.avgoh-'+obj.subCategoryData[i].id+'').html(formatNumber(avg.toFixed(2)) + "  |  ");
        				$('.subtotalcostsum-'+obj.subCategoryData[i].id+'').html(formatNumber(parseInt(obj.subCategoryData[i].sumTotalCost).toFixed(2)) + "  |  ");
        				$('.subsellingPriceSum-'+obj.subCategoryData[i].id+'').html(formatNumber(parseInt(obj.subCategoryData[i].sumSellingCost).toFixed(2)));
   					 
					});

					var percent = percents;
					var totalDiscount = percent;
      				var discountedprice = (Total)-totalDiscount;
      				var vatTotal = (5/100)*(discountedprice)
      				$('.discountPrice').html('AED '+formatNumber(parseInt(totalDiscount).toFixed(2)));
      				$('.discountTotal, .totalarterDis').html('AED '+formatNumber(parseInt(discountedprice).toFixed(2)));
      				$('.vatPrice').html('AED '+formatNumber((vatTotal).toFixed(2)));
      				$('.total, .esttotal').html('AED '+formatNumber(parseInt(discountedprice+vatTotal).toFixed(2)));

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

      	$('#discount').on('keyup', function(){
      		var subtotal = sellingPrice;
      		var percent = $(this).val();
            var discountBy = $("#discountBy").val();
      		percents = percent;
      		var deldata = { "percent" : percent, 'cost_sheet_id' : <?php echo $this->uri->segment(4) ?>, "discountBy" : discountBy };
      		$.ajax({
                type:"POST",
                data:deldata,
                url:"<?php echo base_url();?>index.php/admin/app/updateDiscount",
                statusCode:{
                  200:function(data)
                  {      
                    obj = JSON.parse(data);
                    if(obj.err==1)
                    {

                      //swal("Requird", "Please insert value in empty field", "error");
                    }
                    if(obj.err==0)
                    {

                        var totalDiscount = percent;
                        if (discountBy == 2) {
                            var percentPrice = percent * sellingPrice / 100;
                            totalDiscount = percentPrice;
                        }
          				var discountedprice = subtotal-totalDiscount;
          				var vatTotal = (5/100)*(discountedprice);
          				$('.discountPrice').html(formatNumber(parseInt(percent).toFixed(2)));
          				$('.discountTotal, .totalarterDis').html(formatNumber(parseInt(discountedprice).toFixed(2)));
          				$('.vatPrice').html(formatNumber(parseInt(vatTotal).toFixed(2)));
          				$('.total, .esttotal').html(formatNumber(parseInt(discountedprice+vatTotal).toFixed(2)));

                    }        
                  },
                }
            });
      	});
      	
        $('#example').DataTable();
           $('#changeStatus').on('hidden.bs.modal', function (){
               $('#statusval option:selected').removeAttr("selected");
              });
          $(".delete_row").click(function(e){
              e.preventDefault();    
            var getvalue = $(this).attr("id");
            var cat_id = $(this).attr("cat_id");
            var cost_sheet_id = $(this).attr("sid");
            var deldata = {"id":getvalue,"table":'cost_sheet_line_item'};


          if(confirm("Are you sure want to delete this record?"))
            {
              $.ajax({
              type:"POST",
              data:deldata,
              url:"<?php echo base_url();?>index.php/admin/app/delete_record",
              statusCode:{
                200:function(data)
                {      
                  getTotalSellingPrice(cat_id, cost_sheet_id);
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

              $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
              .animate({ opacity: "hide" }, "slow");
            }
            return false;
            });

          $(".delete_sub_cat").click(function(e){
              e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'costsheet_subcategory','cost_sheet_id':<?php echo $this->uri->segment(4) ?>};


          if(confirm("Are you sure want to delete this record?"))
            {
              $.ajax({
              type:"POST",
              data:deldata,
              url:"<?php echo base_url();?>index.php/admin/app/delete_subcategory_record",
              statusCode:{
                200:function(data)
                {      
                  
                	location.reload();
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

              $(this).parents("#accordion-1").animate({ backgroundColor: "#fbc7c7" }, "fast")
              .animate({ opacity: "hide" }, "slow");
            }
            return false;
            });
            
            var l = window.location;
            var base_url = l.protocol + "//" + l.host + "/" + l.pathname.split('/')[1]+"/app/";
            
            $('.edit_sub_cat').click(function() {
                var id = $(this).attr("id");
                $(this).parent().parent().parent().parent().parent().parent().parent().children().last().prev().show();
                
                $(this).parent().parent().parent().parent().parent().parent().parent().children().last().prev().children().attr("id", "editCostSubCat");
                $(this).parent().parent().parent().parent().parent().parent().parent().children().last().prev().children().children().children().children().next().next().val(id);
    			var s = $(this).parent().parent().parent().parent().parent().parent().parent().children().last().prev().children().children().children().children().first();
    			var t = $(this).parent().parent().parent().parent().parent().parent().parent().children().last().prev().children().children().children().next().children();
    			var fo = $(this).parent().parent().parent().parent().parent().parent().parent().children().last().prev().children().children().children().next().next().children();
    			
                var data = { id: id };
                $.ajax({
                	type:"POST",
                	url:base_url+"openCostSubCat",
                	data:data,
            		success:function(obj){
            		    res = JSON.parse(obj);
                		if(res)
                		{
                			s.val(res.title);
                			t.val(res.quantity);
                			fo.val(res.unit);
                		}
            		}
                });
            });

          $(".delete_rowss").click(function(e){
              e.preventDefault();    
            var getvalue = $(this).attr("id");
            var catvalue = $(this).attr("value");
            var deldata = {"id":getvalue,"table":'cost_sheet_category','cost_sheet_id':<?php echo $this->uri->segment(4) ?>,'cat_id':catvalue};


          if(confirm("Are you sure want to delete this record?"))
            {
              $.ajax({
              type:"POST",
              data:deldata,
              url:"<?php echo base_url();?>index.php/admin/app/delete_category_record",
              statusCode:{
                200:function(data)
                {      
                  
                	location.reload();
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

              $(this).closest(".card").animate({ backgroundColor: "#fbc7c7" }, "fast")
              .animate({ opacity: "hide" }, "slow");
            }
            return false;
            });
          
          
      });
      </script>
      <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      <script>
        $(document).ready(function () {
            $('a').click(function() {
                localStorage.setItem('collapseItem', $(this).attr('href'));
            });            
            var collapseItem = localStorage.getItem('collapseItem'); 
            if (collapseItem) {
            //   $(collapseItem).collapse('show');
            }
          })
      </script>
      <script>
        $(document).ready(function() {
          document.getElementById('image').addEventListener('change', readImage, false);
          $( ".preview-images-zone" ).sortable();
          $(document).on('click', '.image-cancel', function() {
          let no = $(this).data('no');
          var adddata    = {"id":no,'table':'document'};
         $.ajax({
            type:"POST",
            data:adddata,
            url:"<?php echo base_url();?>index.php/admin/app/delete_record",
            statusCode:{
              200:function(data)
              {      
                $(".preview-image.preview-show-"+no).remove(); 
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
        });

        var num = 4;
        function readImage() {
          if (window.File && window.FileList && window.FileReader) {
              var files = event.target.files;
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
    	$(document).ready(function(){
    		$('.submitCostSheet').on('click', function(){
    			var template_name 	= $('#template_Name').val();
    			var customer_name 	= $('#customer').val();
    			var venue_name 		= $('#venue').val();
    			var currency_name 	= 'AED';
                // var currency_name   = $('#currency').val();
    			var cost_type 		= $('#cost_type').val();
    			var contactPerson 	= $('#contactPerson').val();
    			var payment_terms 	= $('#payment_terms').val();
    			var salesPerson 	= $('#salesPerson').val();
    			var total_value = $('.totalsellingPrice').text();
    			
    			if(total_value == 0) {
    			    swal('A cost sheet with 0 value can not be submitted.');
    			}else{
    			    if(template_name != "" && customer_name != "" && venue_name != "" && currency_name != "" && cost_type != "" && contactPerson != "" && payment_terms != "" && salesPerson != "")
        			{
        				genrateTemplate('genrateTemplate','genrateTemplate');
        			}
        			else
        			{
        				swal('Please make sure you fill all the fields on Customer and Project Information.');
        			}
    			}
    		});
	       var convertVal = <?= $convertCost->convert_value; ?>;
	       var currency = '<?= $costSheetData->currency ?>';
		   if(currency == 'USD')
		   {
		   		$("span.currencyConvert").each(function(index) { 
        		    $(this).text(Number.parseFloat(formatNumber1($(this).html()) / convertVal).toFixed(2));
    		 	});
		   }

            $('#discountBy').change(function() {
                var subtotal = sellingPrice;
                var discountBy = $(this).val();
                var percent = $("#discount").val();
                percents = percent;
                var deldata = { "percent" : percent, 'cost_sheet_id' : <?php echo $this->uri->segment(4) ?>, "discountBy" : discountBy };
                $.ajax({
                    type:"POST",
                    data:deldata,
                    url:"<?php echo base_url();?>index.php/admin/app/updateDiscount",
                    statusCode:{
                      200:function(data)
                      {      
                        obj = JSON.parse(data);
                        if(obj.err==1) {
                        }
                        if(obj.err==0)
                        {

                            var totalDiscount = percent;
                            if (discountBy == 2) {
                                var percentPrice = percent * sellingPrice / 100;
                                totalDiscount = percentPrice;
                            }
                            var discountedprice = subtotal-totalDiscount;
                            var vatTotal = (5/100)*(discountedprice);
                            $('.discountPrice').html(formatNumber(parseInt(percent).toFixed(2)));
                            $('.discountTotal, .totalarterDis').html(formatNumber(parseInt(discountedprice).toFixed(2)));
                            $('.vatPrice').html(formatNumber(parseInt(vatTotal).toFixed(2)));
                            $('.total, .esttotal').html(formatNumber(parseInt(discountedprice+vatTotal).toFixed(2)));

                        }        
                      },
                    }
                });
            });

		    $("#project_start_date, #project_end_date, #validity_date").datepicker();

		    $("#project_end_date").change(function () {
    		    var startDate = document.getElementById("project_start_date").value;
    		    var endDate = document.getElementById("project_end_date").value;
    		 
    		    if ((Date.parse(endDate) <= Date.parse(startDate))) {
    		        alert("End date should be greater than Start date");
    		        document.getElementById("project_end_date").value = "";
    		    }
    		});

		    $(".sortable_nav").sortable({
    		    placeholder: "ui-state-highlight",
    		    helper: 'clone',
    		    sort: function(e, ui) {
    		        $(ui.placeholder).html(Number($(".sortable_nav > tr:visible").index(ui.placeholder)) + 1);
    		    },
    		    update: function(event, ui) {
    		        $(this).children().each(function (index) {
    
    		         if($(this).attr('data-postion') != (index+1))
    		         {
    		            $(this).attr('data-postion',(index+1)).addClass('updated');
    		         }
    		        });
    		        saveNewPosition();
    		    }
		    });

          function saveNewPosition()
          {
        
              positions = [];
                $('.sortable_nav > tr').each(function(){ 
                   positions.push([$(this).attr('data-index'),$(this).attr('data-postion')]);
                });
                var updatedPostCode=$('#updatedPostCode').val();
              
              console.log(positions);
                $.ajax({
                  url:'<?=base_url().'index.php/admin/app/updateLineItemPostion'?>',
                  type:'POST',
                  dataType:'text',
                  data: {
                    update: 1,
                    updatedPostCode: updatedPostCode,
                    position:positions
                  }, success: function(responce)
                  {
                    swal('Position Updated');
                    //console.log(responce);
                  }
            });
          }	   
				  
		});

    $(document).ready(function() {
        var exclusions_data = $('.exclusions_data').val();
        if (exclusions_data) {
            var diff_data = exclusions_data.split(",");
            var arr = [];
            var vals = [];

            if (diff_data) {
                for (var i = 0; i < diff_data.length; i++) {
                    arr[i] = diff_data[i];
                }
            }

            if($('.exclusion')) {
                $('.exclusion').each(function(i){
                    if(arr.includes($(this).val())) {
                        $(this).attr('checked', true);
                    }else{
                        $(this).removeAttr('checked');
                    }
                });
            }
            
            $('.exclus').val(exclusions_data);
        }
    });

</script>