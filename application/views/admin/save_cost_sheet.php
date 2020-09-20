<div class="container-fluid page-body-wrapper">
  	<!-- partial -->
  	<div class="main-panel">
        <div class="content-wrapper">
          	<div class="page-header">
	            <h3 class="page-title">
	               Edit Cost Template
	            </h3>
          	</div>
           	<div class="card card-body" style="margin-bottom: 20px">
                <div id="accordion-6" class="accordion accordion-multi-colored" role="tablist">
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-16">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-16" aria-expanded="false" aria-controls="collapse-16" referrerpolicy="origin" class="collapsed"> Customer Information </a>
                            </h5>
                        </div>
                        <div id="collapse-16" class="collapse" role="tabpanel" aria-labelledby="heading-16" data-parent="#accordion-6" style="">
                            <div class="row card-body">
                                <div class="col-3">
                                    <form method="post" id="customerForm">
                                        <label for="inputPassword4"  class="">Customer</label>
                                          <select class="form-control select2" onchange="updateCustomerData('customerForm','UpdateCustomer');" name="customer"  id="customer">
                                             
                                              <option>Select</option>
                                              <?php foreach($customers as $value) { ?>
                                              <option value="<?php  echo $value['id']; ?>" <?php if($costSheetData->customer==$value['id']){echo 'selected';} ?>><?php  echo $value['company_name']; ?></option>
                                              <?php } ?>                                        
                                          </select>
                                        <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                    </form>
                                </div>
                                <div class="col-3">
                                    <?php $getContactPerson = $this->site_model->get_rows_c1('contact_person','conatct_person',$costSheetData->customer); ?>
                                    <form method="post" id="contact_person">
                                            <label for="inputPassword4" class="">Contact person</label>
                                            <select class="form-control select2" onchange="updateData('contact_person','UpdateContactPerson');" name="contactPerson"  id="contactPerson">
                                                <?php foreach ($getContactPerson as $key => $person) { ?>
                                                <option value="<?php echo $person['id'] ?>" <?php if($costSheetData->conatct_person==$person['id']){echo "selected";} ?>><?php echo $person['name']; ?></option>>
                                                <?php } ?>
                                                                                
                                            </select>
                                     <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                    </form>
                                </div>
                                <div class="col-3">
                                    <?php 
                                    if($costSheetData->customer)
                                    {
                                    $payment_termss =$this->db->query("SELECT customer.*, (SELECT title FROM payment_terms WHERE id = customer.payment_terms) as pterms1, (SELECT title FROM payment_terms WHERE id = customer.payment_terms2) as pterms2, (SELECT title FROM payment_terms WHERE id = customer.payment_terms3) as pterms3 FROM `customer` WHERE id = ".$costSheetData->customer."")->row(); 
                                    //print_r($payment_termss); exit;
                                     }
                                    ?>
                                    <form method="post" id="paymentTerms">
                                            <label for="inputPassword4" class="">Payment terms </label>
                                            <select class="form-control select2" onchange="updateData('paymentTerms','UpdatePaymentTerms');" name="payment_terms"  id="payment_terms">
                                                <?php if(!empty($payment_termss)) { ?>
                                                <option value="<?php echo $payment_termss->payment_terms; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms){echo "selected";} ?>><?php echo $payment_termss->pterms1; ?></option>
                                                <option value="<?php echo $payment_termss->payment_terms2; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms2){echo "selected";} ?>><?php echo $payment_termss->pterms2; ?></option>
                                                <option value="<?php echo $payment_termss->payment_terms3; ?>" <?php if($costSheetData->payment_terms==$payment_termss->payment_terms3){echo "selected";} ?>><?php echo $payment_termss->pterms3; ?></option>
                                                  <?php } ?>                              
                                            </select>
                                            <input class="form-control select2" type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                    </form>
                                </div>
                                <div class="col-3">
                                    <form method="post" id="sales_person">
                                            <label for="inputPassword4" class="">Sales Person</label>
                                            <select class="form-control select2" onchange="updateData('sales_person','UpdateSalesPerson');" name="salesPerson"  id="salesPerson">
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
                    <div class="card">
                        <div class="card-header" role="tab" id="heading-17">
                            <h5 class="mb-0">
                                <a data-toggle="collapse" href="#collapse-17" aria-expanded="false" aria-controls="collapse-17" referrerpolicy="origin" class="collapsed"> Project Information </a>
                            </h5>
                        </div>
                        <div id="collapse-17" class="collapse" role="tabpanel" aria-labelledby="heading-17" data-parent="#accordion-6" style="">
                                            <div class="row card-body">
                                <div class="col-md-3">
                                    <form method="post" id="template_name">
                                        <label for="exampleInputEmail1">Job/Template</label>
                                          <input type="text" class="form-control" name="template_Name" value="<?= $costSheetData->name; ?>" id="template_Name"  placeholder="" onchange ="updateFormData('template_name','updateTemplateName');">
                                           <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                    </form>
                                </div>
                                <div class="col-3">
                                    <form method="post" id="costTypeForm">
                                            <label for="inputPassword4" class="">Job type</label>
                                              <select class="form-control select2" onchange="updateData('costTypeForm','UpdateCostType');" name="cost_type"  id="cost_type">
                                                 
                                                  <option>Select</option>
                                                  <?php foreach($cost_type as $value) { ?>
                                                  <option value="<?php  echo $value['id']; ?>"  <?php if($costSheetData->cost_type==$value['id']){echo 'selected';} ?>><?php  echo $value['title']; ?></option>
                                                  <?php } ?>                                        
                                              </select>
                                            <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                    </form>
                                </div>
                                <div class="col-3">
                                    <form method="post" id="venueForm">
                                        <label for="inputPassword4" class="">Venue</label>
                                       <select class="form-control select2" onchange="updateData('venueForm','UpdateVenue');" name="venue"  id="venue">
                                             
                                              <option>Select</option>
                                              <?php foreach($venue as $value) { ?>
                                              <option value="<?php  echo $value['id']; ?>" <?php if($costSheetData->venue==$value['id']){echo 'selected';} ?>><?php  echo $value['title']; ?></option>
                                              <?php } ?>                                        
                                       </select>
                                        <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                    </form>
                                </div>
                                <div class="col-3">
                                    <form method="post" id="currencyForm">
                                            <label for="inputPassword4" class="">Currency</label>
                                              <select class="form-control select2" onchange="updateDataCurrency('currencyForm','UpdateCurrency',this.value);" name="currency"  id="currency">
                                                  <option>Select</option>
                                                  <option value="USD" <?php if($costSheetData->currency=='USD'){echo 'selected';} ?>>USD</option>
                                                  <option value="AED" <?php if($costSheetData->currency=='AED'){echo 'selected';} ?>>AED</option>                                    
                                              </select>
                                            <input type="hidden" name="CostSheetId" value="<?= $this->uri->segment(4); ?>">
                                    </form>
                                 </div>
                            </div>
                        </div>
                    </div>
                </div>
                <br><br>

                <div>
                    <div class="row">
                        <div class="col-lg-12 admin-accord">
                            <div class="">
                                <?php  if($costSheetTotal[0]->totalCostSum!=0){ ?>
                                    <div class="pp-to-ll" style="text-align: center;">
                                        <p>Cost: <span style="float: right;" ><span class="currencyC"><?= $costSheetData->currency ?></span> <?= number_format(round($costSheetTotal[0]->totalCostSum,0,PHP_ROUND_HALF_UP),2,'.',''); ?></span></p>| <p>Average O/H: <span style="" ><?= round($costSheetTotal[0]->totalCostSum/$costSheetTotal[0]->sellingPriceSum,2); ?></span></p> | <p>Price: <span style="float: right;"><span class="currencyC"><?=$costSheetData->currency ?></span> <?= number_format(round($costSheetTotal[0]->sellingPriceSum,0,PHP_ROUND_HALF_UP),2,'.',''); ?> </span></p>
                                    </div>
                                <?php } ?>
                                <div class="accordion accordion-bordered" id="accordion-2" role="tablist">
                                    <?php $i =1; foreach ($cost_sheet_cat as $key => $value) {  ?>  
                                        <div class="card">
                                            <div class="card-header" role="tab" id="heading-<?= $i; ?>" style="background-color: #c1c1c1;">
                                              <h6 class="mb-0">
                                                <a data-toggle="collapse" href="#collapse-<?= $i; ?>" aria-expanded="false" aria-controls="collapse-<?= $i; ?>" class="collapsed">
                                                  <?php echo $value['title']; ?>
                                                  <div class="aa-bb">
                                                    <?php if($value['sumSellingCost']){ ?>
                                                    <span class="ab-2"><span class="currencyC"><?= $costSheetData->currency; ?></span><?= ': '.number_format(round($value['sumTotalCost'],0,PHP_ROUND_HALF_UP),2,'.',''); ?></span>
                                                    <span class="ab-2">Average O/H: <?= round($value['sumTotalCost']/$value['sumSellingCost'],2); ?></span>
                                                    <span class="ab-3"><span class="currencyC"><?= $costSheetData->currency; ?></span><?= ': '.number_format(round($value['sumSellingCost'],0,PHP_ROUND_HALF_UP),2,'.',''); ?></span>
                                                     <?php } ?>
                                                    <button type="button"  id="<?php echo $value['cat_ids'] ?>" class="delete_rowss"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                  </div>
                                                </a>
                                              </h6>
                                            </div>
                                            
                                            <div id="collapse-<?= $i; ?>" class="collapse card-body" role="tabpanel" aria-labelledby="heading-<?= $i; ?>" data-parent="#accordion-2" style="">
                                                <?php 
                                                    $query = "select cE.id, cE.title, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$this->uri->segment(4)."' AND cE.cat_id = '".$value['id']."'";
                                                    $subCategory= $this->db->query($query)->result_array();
                                                    $j= 1; 
                                                    foreach ($subCategory as $key => $subvalue) {  
                                                        $lineItems = $this->site_model->get_rows_c2('cost_sheet_line_item','cost_sheet_id',$this->uri->segment(4),'sub_cat_id',$subvalue['id']);
                                                        ?>
                                                        <div id="accordion-1">
                                                            <div class="card">
                                                                <div class="card-header-2" id="heading-1-1">
                                                                    <h5 class="mb-0">
                                                                        <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-<?=$i?>-<?=$j?>" aria-expanded="false" aria-controls="collapse-1-1">
                                                                            <div class="subcat">
                                                                                <h4 style="font-size: 1rem!important;">
                                                                                    <?=$j.'.';?><?= $subvalue['title']; ?>
                                                                                    
                                                                                    <div class="aa-bb" style="">
                                                                                        <?php if(!empty($subvalue['sumTotalCost'])){ ?>
                                                                                        <span class="ab-2"><span class="currencyC"><?= $costSheetData->currency; ?></span><?php echo ' '.number_format(round($subvalue['sumTotalCost'],0,PHP_ROUND_HALF_UP),2,'.',''); ?></span>
                                                                                        <span class="ab-2"><?php echo 'Average O/H: '.round ($subvalue['sumTotalCost']/$subvalue['sumSellingCost'],2); ?></span>
                                                                                        <span class="ab-3"><span class="currencyC"><?= $costSheetData->currency; ?></span><?php echo ' '.number_format(round($subvalue['sumSellingCost'],0,PHP_ROUND_HALF_UP),2,'.',''); ?></span>
                                                                                        <?php } ?>
                                                                                        <button type="button" id="<?=$subvalue['id']; ?>" class="btn btn-danger delete_sub_cat"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                                                     </div>                                                     
                                                                                </h4>
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
                                                                                <tbody>
                                                                                    <?php $k=1; foreach ($lineItems as $key => $lineItem) { ?>
                                                                                      <tr class="record">
                                                                                        <form method="post" id="lineItemForm-<?= $lineItem['id']; ?>">
                                                                                         <td style="width:13%" class="geeks">
                                                                                              <button type="button" id="<?=$lineItem['id']; ?>" class="btn-33 delete_row"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                                                                            <button type="button" id="<?=$lineItem['id']; ?>" onclick="saveProfile('lineItemForm-<?= $lineItem['id']; ?>','updateLineItem');"  class="btn-33  updateRow"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                                                            <button class="btn-33" type="button" onclick="openMultiDos('add-multi-doc','<?=$lineItem['id']; ?>')" ><i class="fa fa-upload" aria-hidden="true"></i></button>
                                                                                          </td>
                                                                                          <td style="width:25%" class="">
                                                                                              <p><?=$lineItem['product_name']; ?></p>
                                                                                          </td>
                                                                                          <td style="width:10%" class="">
                                                                                              <input type="number" min="1" name="qty" class="form-control" value="<?=$lineItem['quantity']; ?>">
                                                                                          </td>
                                                                                          <td style="width:10%" class="">
                                                                                               <p><?=get_single_col_value('units','id',$lineItem['unit_id'],'name'); ?></p>
                                                                                          </td>
                                                                                          <td style="width:10%" class="">
                                                                                               <input type="text" class="form-control" name="unit_cost" value="<?=$lineItem['unit_cost']; ?>">
                                                                                          </td>
                                                                                          <td style="width:10%" class="">
                                                                                               <p style="color: green;"><?= number_format(round($lineItem['total_cost'],0,PHP_ROUND_HALF_UP),2,'.',''); ?></p>
                                                                                          </td>
                                                                                          <td style="width:10%" class="">
                                                                                               <input type="text" class="form-control" name="margin" value="<?=$lineItem['o/h']; ?>">
                                                                                               <input type="hidden" name="lineItemId" value="<?=$lineItem['id']; ?>">
                                                                                          </td>
                                                                                          <td style="width:10%" class="">
                                                                                               <p style=""><?= number_format(round($lineItem['selling_price'],0,PHP_ROUND_HALF_UP),2,'.',''); ?></p>
                                                                                          </td>
                                                                                        </form>
                                                                                          
                                                                                      </tr>
                                                                                    <?php $k++; } ?>
                                                                                </tbody>
                                                                            <?php } ?>
                                                                                <tfoot>
                                                                                      <tr>
                                                                                          <td colspan="5" style="text-align: left;">
                                                                                              <button class="btn btn-sm btn-block col-lg-3 addrow" cat="<?= $value['id']; ?>" value="<?=  $subvalue['id']; ?>" id="addrow" onclick="addMoreRow(this.value,'<?= $value['id']; ?>');" ><i class="fa fa-plus" aria-hidden="true"></i>ADD LINE</button>
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
                                                <button class="btn btn-success" value="<?=  $value['id'] ?>" onclick="openCostSubCat('add-cost-sub-cat',this.value);">ADD SUB-CATEGORY</button>
                                            </div>
                                        </div>
                                    <?php  $i++; } ?>
                                </div>  
                                <button class="btn btn-success" onclick="openCostCat('add-cost-cat',<?= $this->uri->segment(4); ?>);"><i class="fa fa-plus" aria-hidden="true"></i> ADD</button>
                            </div>
                        </div>
                    </div>
                    <div id="outer">
                      <div class="inner">
                        <form method="post" action="<?php echo base_url(); ?>index.php/admin/app/action">
                            <input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>">
                            <button class="btn msgBtn btn-success" name="export" type="submit"><i class="fa fa-file-text-o" aria-hidden="true"></i>Download excel</button>
                        </form>
                      </div>
                      <div class="inner">
                        <form method="post" id="saveTemplate">
                            <input type="hidden" name="costsheet_id"  value="<?= $this->uri->segment(4); ?>">
                            <button type="button" onclick="saveTemplate('saveTemplate','saveTemplate');"  class="btn msgBtn btn-success"><i class="fa fa-file-text-o" aria-hidden="true"></i>Save template</button>
                        </form>
                      </div>
                      <div class="inner">
                        <form method="post" id="saveDraft">
                            <input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>">
                            <button type="button" onclick="saveTemplateDraft('saveDraft','saveTemplateDraft');" class="btn msgBtn btn-success"><i class="fa fa-file-text-o" aria-hidden="true"></i>Save Draft</button>
                        </form>
                      </div>
                      <div class="inner">
                        <form method="post" id="genrateTemplate">
                            <input type="hidden" name="costsheet_id" value="<?= $this->uri->segment(4); ?>">
                            <button type="button" onclick="genrateTemplate('genrateTemplate','genrateTemplate');" class="btn msgBtn btn-success"><i class="fa fa-location-arrow" aria-hidden="true"></i>Submit</button>
                        </form>
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
    .btn {
        font-weight: inherit!important;
    }
    .table th, .jsgrid .jsgrid-table th, .table td, .jsgrid .jsgrid-table td {
        padding: 0.1rem!important;
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
        background-color: rgba(0, 0, 0, 0.03);
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
        margin-right: 71px;
        line-height: 2;
        font-size: 1rem;
        position: absolute;
        top: -4px;
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
    $(document).ready(function ()
    {
      $('#MyModal').on('hidden.bs.modal', function()
      {
        $(this).find('form').trigger('reset');
      })
      var counter = 0;
      $("table.order-list").on("click", ".ibtnDel", function (event) 
      {
          $(this).closest("tr").remove();       
          counter -= 1
      });
    });
increment = 1;
function addMoreRow(id,cat_id)
{
  increment++;
  var newId = (+id) + (+increment);
  var counter = 0;
  var newRow = $("<tr><form method='POST' id='insertRowitem-"+id+"-"+increment+"'>");
        var cols = "";
        var options ="";
        options += '<option>Select</option>';
        var optionArray = <?php echo json_encode($units); ?>;
        console.log(optionArray);
        for(x in optionArray){
          options += '<option value='+optionArray[x]['id']+'>' + optionArray[x]['name'] + '</option>';
        }
        //alert(options);
        cols += '<td  style="width:13%" ><button type="button" class="ibtnDel btn-33" id="'+cat_id+'" value="'+id+'" ><i class="fa fa-trash" aria-hidden="true"></i></button><button type="button" class="btn-33 saveItem" id="'+cat_id+'" value="'+id+'" ><i class="fa fa-bookmark" aria-hidden="true"></i></button><button class="btn-33 uploadDoc" type="button"><i class="fa fa-upload" aria-hidden="true"></i></button></td>';
        cols += '<td><input type="text" class="form-control" name="description-'+newId+'"  id="description-'+newId+'" placeholder="description"/></td>';
        cols += '<td><input type="number" class="form-control" min="1" name="qty-'+newId+'" id="qty-'+newId+'" placeholder="Quantity"/></td>';
        cols += '<td><select class="form-control select2" name="product_unit-'+newId+'"  id="product_unit-'+newId+'">'+options+'</select></td>';
        cols += '<td><input type="text" class="form-control unit_costss" newfrmid="'+id+'" frmid="'+newId+'"  name="unit_cost-'+newId+'" id="unit_cost-'+newId+'" placeholder="cost"/></td>';
        cols += '<td><input type="text" class="form-control" name="total_cost-'+newId+'" readonly="readonly" id="total_cost-'+newId+'" placeholder="Total Cost"/></td>';
        cols += '<td><input type="text" class="form-control" name="margin-'+newId+'" id="margin-'+newId+'" value="0.65" placeholder=""O/H/></td>';
        cols += '<td><input type="text" class="form-control" name="selling_price-'+newId+'" readonly="readonly" id="selling_price-'+newId+'" placeholder="Selling price"/><input type="hidden" value="'+cat_id+'"  id="cat_id-'+newId+'"></td>';
        newRow.append(cols);
        $("table.order-list-"+id+"").append(newRow);
        counter++;
        $("table.order-list-"+id+"").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
        });
        $('#qty-'+newId+',#unit_cost-'+newId+'').on('keyup change',function(){
          qty = $('#qty-'+newId+'').val()
          unitcost = $('#unit_cost-'+newId+'').val();
          totalCost = unitcost * qty;
          $('#total_cost-'+newId+'').val(totalCost);
        });
        $('#total_cost-'+newId+',#margin-'+newId+',#qty-'+newId+',#unit_cost-'+newId+'').on('keyup change',function(){
          total_cost = $('#total_cost-'+newId+'').val()
          margin = $('#margin-'+newId+'').val();
          totalsellingCost = Math.round(total_cost / margin);
          $('#selling_price-'+newId+'').val(totalsellingCost);
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

      $(document).on('change','.unit_costss', function()
      {
         formID = $(this).attr('frmid');
         newformID = $(this).attr('newfrmid');
         cat_id         = $('#cat_id-'+formID+'').val();
         description    = $('#description-'+formID+'').val();
         qty            = $('#qty-'+formID+'').val();
         product_unit   = $('#product_unit-'+formID+'').val();
         unit_cost      = $('#unit_cost-'+formID+'').val();
         total_cost     = $('#total_cost-'+formID+'').val();
         margin         = $('#margin-'+formID+'').val();
         selling_price  = $('#selling_price-'+formID+'').val();
         cost_sheet_id  = '<?= $this->uri->segment(4); ?>'; 
         var adddata    = {"description":description,"qty":qty,'product_unit':product_unit,'unit_cost':unit_cost,'total_cost':total_cost,'margin':margin,'selling_price':selling_price,'cost_sheet_id':cost_sheet_id,'sub_cat_id':newformID,'cat_id':cat_id};
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
                  swal("Requird", "Please insert value in empty field", "error");
                }
                if(obj.err==0)
                {

                    

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


          if(confirm("Are you sure want to delete this record?"))
            {
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

              $(this).parents(".record").animate({ backgroundColor: "#fbc7c7" }, "fast")
              .animate({ opacity: "hide" }, "slow");
            }
            return false;
            });

          $(".delete_sub_cat").click(function(e){
              e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'costsheet_subcategory'};


          if(confirm("Are you sure want to delete this record?"))
            {
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

              $(this).parents("#accordion-1").animate({ backgroundColor: "#fbc7c7" }, "fast")
              .animate({ opacity: "hide" }, "slow");
            }
            return false;
            });

          $(".delete_rowss").click(function(e){
              e.preventDefault();    
            var getvalue = $(this).attr("id");
            var deldata = {"id":getvalue,"table":'cost_sheet_category'};


          if(confirm("Are you sure want to delete this record?"))
            {
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
            //   $(collapseItem).collapse('show')
            }
          })
      </script>
      <script>
        $(document).ready(function() {
          // document.getElementById('image').addEventListener('change', readImage, false);
          $( ".preview-images-zone" ).sortable();
          $(document).on('click', '.image-cancel', function() {
          let no = $(this).data('no');
          $(".preview-image.preview-show-"+no).remove();
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


      </script>
