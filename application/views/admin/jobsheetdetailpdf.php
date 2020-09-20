<?php $img = $this->site_model->get_rows_d1('logo', 'device', "2", 'active', "1"); ?>
<?php 
    if (@$img) { ?>
        <img src="<?= base_url('admin_assets')  ?>/images/logo/<?= $img[0]['name']; ?>" style="margin: 0px 20px 0px; width: 30%; height: 20%;">
<?php }else{ ?>
  
<?php } ?>

<div style="  width:1000px; margin: 0px auto 0px; padding: 80px 0px 00px; display: block;">
    <div style="padding: 1rem 1rem;background: white;margin-top: 0px; margin-bottom:0px; padding-top:100px;">
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong>TO <?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?> </strong></p>
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong>FOR <?php echo $costSheetData->name; ?></strong></p>
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong><?php echo get_single_col_value('venue','id',$costSheetData->venue,'title'); ?></strong></p>
        
        <?php 
            $total_cost = 0;
            $total_actual_cost = 0;
            $total_deviation = 0;
        ?>
        
        <table style="width:100%; margin:10px 0px 0px; background-color:transparent; color: black; font-weight: bold;" border="0">
            <tr>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Sl. No</td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Description</td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Detail Information</td>
            </tr>
            <?php $i =1; foreach ($cost_sheet_cat as $key => $value) { 
              $alphas = range('A', 'Z'); 
            ?>
            <tr>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;"><?= $alphas[$i-1] ?></td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;"> <?= $value['title']; ?> </td>
                
                <td style=" padding:5px; background:#ccc;">&nbsp;</td>
            </tr>
            <?php 
                $query = "select cE.id, cE.title, cE.quantity, cE.unit, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$this->uri->segment(4)."' AND cE.cat_id = '".$value['id']."'";
                $subCategory= $this->db->query($query)->result_array();
                $j= 1; 
                foreach ($subCategory as $key => $subvalue) {  
                    $lineItems = $this->site_model->get_rows_c2('cost_sheet_line_item','cost_sheet_id',$this->uri->segment(4),'sub_cat_id',$subvalue['id']);
                ?>
                    <tr>
                        <td style="padding:5px; background:#fff; border:1px solid #ccc; text-align:center;"><?= $j; ?></td>
                        <td style="padding:5px; background:#fff; border:1px solid #ccc;"><?= $subvalue['title']; ?></td>
                        <td style="padding:5px; background:#fff; border:1px solid #ccc; text-align:center;"><?= $costSheetData->currency; ?> <?= number_format(round($subvalue['sumTotalCost'],3,PHP_ROUND_HALF_UP),2,'.',','); ?> </td>
                    </tr>
                    <br>
                    
                    <table id="myTable" class="table order-list-<?= $subvalue['id']; ?>">
            			<?php if(!empty($lineItems)) { ?>
                		    <thead>
                			    <tr>
                				    <td style="background:#ccc; font-weight:bold; padding:5px; text-align:center;">DESCRIPTION</td>
                				    <td style="background:#ccc; font-weight:bold; padding:5px; text-align:center;">COST</td>
                                    <td style="background:#ccc; font-weight:bold; padding:5px; text-align:center;">ACTUAL COST</td>
                				    <td style="background:#ccc; font-weight:bold; padding:5px; text-align:center;">TOTAL COST</td>
                				    <td style="background:#ccc; font-weight:bold; padding:5px; text-align:center;">TOTAL ACTUAL COST</td>
                				    <td style="background:#ccc; font-weight:bold; padding:5px; text-align:center;">Deviation</td>
                			    </tr>
                		    </thead>
            		        <tbody>
            		            <?php 
            		                $k=1; 
            		                foreach ($lineItems as $key => $lineItem) {
            		                    $total_cost += $lineItem['total_cost'];
            		                    $total_actual_cost += $lineItem['total_actual_cost'];
            		                    $total_deviation += $lineItem['deviation'];
            		                    ?>
                    			        <tr class="record">
                            				  <td style="border:1px solid #ccc; width:20%" class="">
                            					  <p><?=$lineItem['product_name']; ?></p>
                            				  </td>
                            				  <td style="border:1px solid #ccc; width:10%" class=""><p><span class="currencyConvert cost_only"><?=$lineItem['unit_cost']; ?></span></p>
                            
                            				  </td>
                            				  <td style="border:1px solid #ccc; width:10%" class="">
                            				        <p style=""><span class="currencyConvert total_cost_val"><?= number_format(round($lineItem['actual_cost'],0,PHP_ROUND_HALF_UP),2,'.',','); ?></span></p>
                            				  </td>
                            				  <td style="border:1px solid #ccc; width:10%" class="">
                					                <p style=""><span class="currencyConvert total_cost_val"><?= number_format(round($lineItem['total_cost'],0,PHP_ROUND_HALF_UP),2,'.',','); ?></span></p>
                            				  </td>
                            				  <td style="border:1px solid #ccc; width:10%" class="">
                            					   <p class='total_actual_cost'><?= number_format(round($lineItem['total_actual_cost'], 0, PHP_ROUND_HALF_UP),2,'.',','); ?></p>
                            				  </td>
                            				  <td style="border:1px solid #ccc; width:10%" class="">
                            					   <p class='deviation_val'><?= number_format(round($lineItem['deviation'], 0, PHP_ROUND_HALF_UP),2,'.',','); ?></p>
                            				  </td>
                    			        </tr>
            			        <?php $k++; } ?>
            	            </tbody>
            	        <?php } ?>
            		    <tfoot>
            		    </tfoot>
            	    </table>
            <?php $j++; } $i++; } ?>
        </table>
        <div style="display: inline-block;">
            <br>
            <h6 style="display: inline-block;">Total Cost : <?= number_format(round($total_cost, 0, PHP_ROUND_HALF_UP),2,'.',','); ?></h6>
            <h6 style="display: inline-block;">Total Actual Cost : <?= number_format(round($total_actual_cost, 0, PHP_ROUND_HALF_UP),2,'.',','); ?></h6>
            <h6 style="display: inline-block;">Total Deviation : <?= number_format(round($total_deviation, 0, PHP_ROUND_HALF_UP),2,'.',','); ?></h6>
        </div>
    </div>
</div>