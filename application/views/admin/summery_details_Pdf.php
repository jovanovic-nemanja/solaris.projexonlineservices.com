<!DOCTYPE html>
<html>
<head>
</head>
<body style="background: #f2edf3; font-size:14px;">
	<div style="padding: 2.5rem 0rem;">
		<h2>Quotation</h2>
		<table style="width: 100%;">
			<tr>
				<td style="width:20%;">
					<label style="font-size:12px;">Customer Name</label>
					</td>
				<td style="width:20%;">
					<label style="font-size:12px;">Customer Address</label>
					</td>
				<td style="width: 20%;">
					<label style="font-size:12px;">Contact Person</label>
				</td>
				<td style="width: 20%;">
					<label style="font-size:12px;">Terms Of Payment</label>
				</td>
				<td style="width: 20%;">
					<label style="font-size:12px;">Venue</label>
				</td>
			</tr>
			<tr>
				<td style="width:20%;">
					<div style="border-radius: 4px; height: 34px; display:inline-block; margin-top: 10px; width:100%; padding: 10px; background-color: white;"><?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?></div>
				</td>
				<td style="width:20%;">
					<div style="border-radius: 4px; display:inline-block; height: 34px; margin-top: 10px; width:100%; padding: 10px; background-color: white;"><?php echo get_single_col_value('customer','id',$costSheetData->customer,'address'); ?></div>
				</td>
				<td style="width: 20%;">
					<div style="border-radius: 4px; height: 34px; display:inline-block; margin-top:10px; width:100%;  padding: 10px; background-color: white;"><?php echo get_single_col_value('contact_person','id',$costSheetData->conatct_person,'name'); ?></div>
			    </td>
				<td style="width: 20%;">
					<div style="border-radius: 4px; display:inline-block; height:34px; margin-top:10px; width:100%; padding: 10px; background-color: white;"><?php echo get_single_col_value('payment_terms','id',$costSheetData->payment_terms,'title'); ?></div>
				</td>
				<td style="width: 20%;">
					<div style="border-radius: 4px; display:inline-block; height:34px; margin-top: 6px; width:100%; padding: 10px; background-color: white;"><?php echo get_single_col_value('venue','id',$costSheetData->venue,'title'); ?></div>
				</td>
			</tr>
		</table>
	 </div>
	 <div style="padding: 2.5rem 2.5rem;background: white;margin-top: -13px;">
		 <div style="width:100%;text-align: left; margin-bottom: 15px; background:transparent;">
		 	<?php  if($costSheetTotal[0]->totalCostSum!=0){ ?>
			  <table style="width: 100%;">
				 <tr>
				   <td style="width:20%;"></td>
				   <td style="width:30%; font-weight: bold; color: #000; text-align: left; font-size: 14px;">Cost: <?= $costSheetData->currency ?> <?= round($costSheetTotal[0]->totalCostSum,3); ?></td>
				   <td style="width:30%; font-weight: bold; color: #000; text-align: left; font-size: 14px;">Average O/H: <?= round($costSheetTotal[0]->totalCostSum/$costSheetTotal[0]->sellingPriceSum,2); ?> </td>
				   <td style="width:20%; font-weight: bold; color: #000; text-align: left; font-size: 14px;">Price: <?=$costSheetData->currency ?> <?= round($costSheetTotal[0]->sellingPriceSum,3); ?> </td>
				 </tr>  
			  </table>
			  <?php } ?>
		  </div>
		  <?php $i =1; foreach ($cost_sheet_cat as $key => $value) { ?>
		 <div style="margin-top: 10px;">
			 <table style="width:100%;margin:20px;background-color:black; color: white;font-weight: bold;margin: auto;border-collapse: separate; border-spacing: 0 15px;">
				<tr>
					<td style="padding-left: 15px;width: 10%;"><?php echo $value['title']; ?> </td>
					<td style="width: 15%;"></td>
					<?php if($value['sumSellingCost']){ ?>
					<td style="padding:10px;width: 25%;">Cost:<?= $costSheetData->currency; ?><?= ' '.$value['sumTotalCost']; ?></td>
					<td style="padding:10px;width: 25%;">Average O/H: <?= round($value['sumTotalCost']/$value['sumSellingCost'],2); ?></td>
					<td style="padding:10px;width:25%;">Price: <?= $costSheetData->currency; ?><?= ' '.$value['sumSellingCost']; ?></td>
					<?php } ?>
				</tr>
			</table>
		</div>
		<?php 
		      $query = "select cE.id, cE.title, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$this->uri->segment(4)."' AND cE.cat_id = '".$value['id']."'";
                           $subCategory= $this->db->query($query)->result_array();
                           $j= 1; foreach ($subCategory as $key => $subvalue) {  
                           	$lineItems = $this->site_model->get_rows_c2('cost_sheet_line_item','cost_sheet_id',$this->uri->segment(4),'sub_cat_id',$subvalue['id']);

                           	?> 
		<div style="padding: 2.5rem 2.5rem;background: white;margin-top: 0px; border:1px solid #ccc;">
			<div style="margin-top: 0px;">
				<table style="margin:20px ;background-color: rgba(0, 0, 0, 0.03); color: black;font-weight: bold;margin: auto;padding: 10px;border-collapse: separate; border-spacing: 0 15px;">
					<tr>
						<td style="width: 10%; padding:10px">1.<?= $subvalue['title']; ?></td>
						<td style="width: 15%; padding:10px"></td>
						<?php if(!empty($subvalue['sumTotalCost'])){ ?>
						<td style="width: 25%;padding:10px">Cost:<?= $costSheetData->currency; ?><?php echo ' '.$subvalue['sumTotalCost']; ?></td>
						<td style="width: 25%; padding:10px"><?php echo 'Average O/H: '.round ($subvalue['sumTotalCost']/$subvalue['sumSellingCost'],2); ?></td>
						<td style="width: 25%; padding:10px">Price:<?= $costSheetData->currency; ?><?php echo ' '.$subvalue['sumSellingCost']; ?></td>
						<?php } ?>
					</tr>
				</table>
			</div>
    <!-- <div>
		<table style=" overflow: hidden;background-color: rgba(0, 0, 0, 0.03);">
		  <td style=" width:40%; font-weight: bold; font-size: 14px; text-align: left; padding: 10px;">1.Subtest</td>
		  <td style=" width:20%; font-weight: bold; font-size: 14px; text-align: left; padding: 10px;">Average O/H:AED 5381</td>
		  <td style=" width:20%; font-weight: bold; font-size: 14px; text-align: left; padding: 10px;">Cost: AED 5381</td>
		  <td style=" width:20%; font-weight: bold; font-size: 14px; text-align: left; padding: 10px;">Price: AED 5381</td>
		</table>
	</div> -->
<!-- 	<?php if(!empty($lineItems)) { ?>
	 <table style="border: 1px solid lightgray;padding: 23px;border-collapse: separate; border-spacing: 0 15px;width:100%;margin-top:0px;" align="center">
		<thead style="background-color: lightgray;color: white;padding: 40px;color: black;">
			<tr style="padding:20px;">
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">No</th>
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">Description</th>
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">Qty</th>
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">Unit</th>
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">Cost</th>
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">Total Cost</th>
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">O/H</th>
				<th style="padding: 15px;border: 1px solid gray;text-transform: uppercase;">Price</th>
			</tr>
			<tbody>
				<?php $k=1; foreach ($lineItems as $key => $lineItem) { ?>
				<tr>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?= $k; ?></td>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?=$lineItem['product_name']; ?></td>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?=$lineItem['quantity']; ?></td>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?=get_single_col_value('units','id',$lineItem['unit_id'],'name'); ?></td>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?=$lineItem['unit_cost']; ?></td>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?=$lineItem['total_cost']; ?></td>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?=$lineItem['o/h']; ?></td>
					<td align="center" style="padding: 13px;border: 1px solid gray;"><?=$lineItem['selling_price']; ?></td>
				</tr>
				<?php } ?>
			</tbody>
		</thead>

	</table> 
	<?php } ?> -->
    </div>
    <?php $j++; } ?>
<?php } ?>
</div>
</body>
</html>