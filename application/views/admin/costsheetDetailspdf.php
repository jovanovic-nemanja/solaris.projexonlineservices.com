<?php $img = $this->site_model->get_rows_d1('logo', 'device', "2", 'active', "1"); ?>
<?php 
    if (@$img) { ?>
        <img src="<?= base_url('admin_assets')  ?>/images/logo/<?= $img[0]['name']; ?>" style="margin: 0px 20px 0px; width: 30%; height: 20%;">
<?php }else{ ?>
  
<?php } ?>
    
<div style="width:1000px; margin: 0px auto 0px; padding: 195px 0px 0px; display: block;">
    <table border="0" style="width:100%; padding: 0px 20px 20px; margin: 0px 0px 0px;">
        <tr>
            <td style="padding: 5px;"><strong>To: <?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?></strong></td>
            <td style="padding: 5px;">&nbsp;</td>
        </tr>
        <tr>
            <td style="padding: 5px;"><strong>Attention: <?php echo get_single_col_value('contact_person','id',$costSheetData->conatct_person,'name'); ?></strong></td>
            <?php 
                $date = getdate();
                $year = $date['year'];
            ?>
            <?php 
                if($costSheetData->quot_numb) { ?>
                    <td style="padding: 5px;"><strong>Ref No: QT/S-<?php echo $costSheetData->quotation_number; ?> rev <?php echo $costSheetData->quot_numb; ?>/<?=$year?></strong></td>
            <?php } else{ ?>
                <td style="padding: 5px;"><strong>Ref No: QT/S-<?php echo $costSheetData->quotation_number; ?>/<?=$year?></strong></td>
            <?php } ?>
        </tr>
        <tr>
            <td style="padding: 5px;"><strong>From: Mr. Martin Clough </strong></td>
            <td style="padding: 5px;"><strong>Date: <?php echo dateConvert($costSheetData->genrated_date,"d-m-Y"); ?> </strong></td>
        </tr>
        <tr>
            <td style="padding: 5px;"><strong>Subject: Quotation for Your <?php echo $costSheetData->name; ?></strong></td>
        </tr>
    </table>
    
    <?php 
        if($cover) { 
            echo $cover;
        ?>
    <?php }else{ ?>
            <p style="margin: 40px 0px 40px; padding: 0px 20px;">Dear Sir / Madam,</p>
            <p style="padding: 0px 20px 0px;">Please find our quotation for the above and should they meet with your approval, we look forward to receiving <strong> signature of acceptance by return fax/ e-mail (please sign all pages of the quote)</strong>. </p>
            <p style="padding: 0px 20px 20px;">Should   you   require   any further information or clarification, please feel free to contact <?php echo get_single_col_value('salesperson','id',$costSheetData->sales_person,'name'); ?> at <u><?php echo get_single_col_value('salesperson','id',$costSheetData->sales_person,'email'); ?></u> who will be happy to assist you.</p>
            <p style="margin: 40px 0px 0px; padding: 0px 20px;">Yours sincerely,</p>
            <p style="margin: 0px 0px 40px; padding: 0px 20px;"><strong> PROJEX </strong></p>
            <p style="margin: 0px 0px 0px; padding: 0px 20px;"><strong>Martin Clough</strong></p>
            <p style="margin: 0px 0px 0px; padding: 0px 20px;"><strong>Commercial manager</strong></p>
    <?php } ?>
    
</div>

<div style="  width:1000px; margin: 0px auto 0px; padding: 80px 0px 00px; display: block;">
    <div style="padding: 1rem 1rem;background: white;margin-top: 0px; margin-bottom:0px; padding-top:100px;">
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong>TO <?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?> </strong></p>
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong>FOR <?php echo $costSheetData->name; ?></strong></p>
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong><?php echo get_single_col_value('venue','id',$costSheetData->venue,'title'); ?></strong></p>
        <table style="width:100%;margin:10px 0px 0px;background-color:transparent; color: black;font-weight: bold;" border="0">
            <tr>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;" colspan="5"><?php echo $costSheetData->name; ?></td>
            </tr>
            <tr>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Sl. No</td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Description</td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Qty</td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Unit</td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">Price</td>
            </tr>
            <?php $i =1; foreach ($cost_sheet_cat as $key => $value) { 
              $alphas = range('A', 'Z'); 
            ?>
            <tr>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;"><?= $alphas[$i-1] ?></td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;" colspan='3'> <?= $value['title']; ?> </td>
                
                <td style=" padding:5px; background:#ccc;">&nbsp;</td>
            </tr>
            <?php 
                $query = "select cE.id, cE.title, cE.quantity, cE.unit, (SELECT SUM(total_cost) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumTotalCost, (SELECT SUM(selling_price) FROM cost_sheet_line_item WHERE sub_cat_id = cE.id) as sumSellingCost from costsheet_subcategory cE where cE.costsheet_id = '".$this->uri->segment(4)."' AND cE.cat_id = '".$value['id']."'";
                $subCategory= $this->db->query($query)->result_array();
                $j= 1; foreach ($subCategory as $key => $subvalue) {  
                $lineItems = $this->site_model->get_rows_c2('cost_sheet_line_item','cost_sheet_id',$this->uri->segment(4),'sub_cat_id',$subvalue['id']);
                ?>
            <tr>
                <td style=" padding:5px; background:#fff; border:1px solid #ccc; text-align:center;"><?= $j; ?></td>
                <td style=" padding:5px; background:#fff; border:1px solid #ccc;"><?= $subvalue['title']; ?></td>
                <td style=" padding:5px; background:#fff; border:1px solid #ccc;text-align:center;">
                    <?php if(!empty($subvalue['quantity'])) { ?>
                        <?= $subvalue['quantity']; ?>
                    <?php } ?>
                </td>
                <td style="padding:5px; background:#fff; border:1px solid #ccc; text-align:center;">
                    <?php if(!empty($subvalue['unit'])) { ?>
                        <?= $subvalue['unit']; ?>
                    <?php } ?>
                </td>
                <td style=" padding:5px; background:#fff; border:1px solid #ccc; text-align:center;"><?= $costSheetData->currency; ?> <?= number_format(round($subvalue['sumSellingCost'],0,PHP_ROUND_HALF_UP),2,'.',','); ?> </td>
            </tr>
            
           <?php $j++; } $i++; } ?>
           <tr>
                <td style="font-weight:bold; padding:5px; background:#ccc;" colspan="4">Total </td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">AED  <?= number_format(round($costSheetTotal[0]->sellingPriceSum,0,PHP_ROUND_HALF_UP),2,'.',','); ?></td>
            </tr>
           <?php 
              $disPrice = $costSheetData->discountPerent;
              $totalPrice = $costSheetTotal[0]->sellingPriceSum - $disPrice;
              $calculateVat = ((5/100)*$totalPrice);
              $totalCost = $calculateVat+$totalPrice;
              if($costSheetData->discountPerent != 0)
              {
            ?>
            <tr>
                <td style="font-weight:bold; padding:5px; background:#fff; border:1px solid #ccc;" colspan="4">Discount &nbsp;&nbsp;&nbsp;&nbsp; <?= $costSheetData->discountPerent; ?> </td>
                <td style="font-weight:bold; padding:5px; background:#fff; border:1px solid #ccc; text-align:center;">-AED <?= number_format(round($disPrice,0,PHP_ROUND_HALF_UP),2,'.',','); ?> </td>
            </tr>
            <tr>
                <td style="font-weight:bold; padding:5px; background:#fff; border:1px solid #ccc;" colspan="4">Total after discount</td>
                <td style="font-weight:bold; padding:5px; background:#fff; border:1px solid #ccc; text-align:center;">AED <?= number_format(round($totalPrice,0,PHP_ROUND_HALF_UP),2,'.',','); ?> </td>
            </tr>
            <?php } ?>
            <tr>
                <td style="font-weight:bold; padding:5px; background:#fff; border:1px solid #ccc;" colspan="4">Vat @ 5%</td>
                <td style="font-weight:bold; padding:5px; background:#fff; border:1px solid #ccc; text-align:center;">AED <?= number_format(round($calculateVat,0,PHP_ROUND_HALF_UP),2,'.',','); ?> </td>
            </tr>
            <tr>
                <td style="font-weight:bold; padding:5px; background:#ccc;" colspan="4">Total Including TAX</td>
                <td style="font-weight:bold; padding:5px; background:#ccc; text-align:center;">AED <?= number_format(round($totalCost,0,PHP_ROUND_HALF_UP),2,'.',','); ?> </td>
            </tr>
        </table>
    </div>
</div>
<div style="  width:1000px; margin: 0px auto 0px; padding: 340px 0px 0px; display: block;">
    <!-- <img src="<?= base_url('/admin_assets/images/') ?>projexlogo.jpg.PNG" style="margin: 0px 20px 40px;"> -->
    <p style="margin: 240px 0px 0px; padding: 50px 20px 0px;"><strong>Refurbishment would be required after year 1 to ensure that the existing build items are refurbished and made as good as new for the subsequent installation.</strong></p>
    <p style="margin: 20px 0px 0px; padding: 0px 20px;">Read & Agreed.........................<br>
        <?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?>.........................<br>Projex.........................</p>
    <h2 style="margin: 20px 0px 0px; padding: 0px 20px;"><strong>Exclusions:</strong> </h2>
    <ul style="margin: 20px 0px; padding: 0px 60px; display: inline-block; width: 87%; line-height: 24px;">
        <?php
            if (@$exclusions) {
                foreach ($exclusions as $key => $value) { ?>
                    <li><?= $value['description']; ?></li>    
        <?php } } ?>
    </ul>
    <h2 style="margin: 20px 0px 0px; padding: 0px 20px;"><strong>Terms & Conditions:</strong> </h2>
    <ul style="margin: 20px 0px; padding: 0px 60px; display: inline-block; width: 87%; line-height: 24px;">
        <?php 
            if(@$terms) {
                foreach($terms as $key => $value) { ?>
                    <li><?= $value['description']; ?></li>        
        <?php } } ?>
    </ul>
    <h2 style="margin: 20px 0px 0px; padding: 0px 20px;"><strong>Validity</strong> </h2>
    <?php 
        if(@$validity) {
            foreach($validity as $key => $value) { ?>
                <p style="margin: 10px 0px 0px; padding: 0px 20px;"><strong><?php echo dateConvert($costSheetData->project_end_date,"d M Y"); ?></strong> <?= $value['description']; ?></p>
    <?php } } ?>  
    
    <h2 style="margin: 20px 0px 0px; padding: 0px 20px;"><strong>Payment Conditions</strong> </h2>
    <p style="margin: 10px 0px 0px; padding: 0px 20px;">50% advance on confirmation.</p>

    <!-- <img src="<?= base_url('/admin_assets/images/') ?>footer.jpg" style="margin: 40px 20px 0px;">      -->
</div>
<div style="  width:1000px; margin: 40px auto; padding: 120px 0px 0px; display: block;">
    <!-- <img src="<?= base_url('/admin_assets/images/') ?>projexlogo.jpg.PNG" style="margin: 0px 20px 40px;"> -->
    <p style="margin: 20px 0px 0px; padding: 0px 20px;">50% of the balance after successful handover.</p>
    <h2 style="margin: 20px 0px 0px; padding: 0px 20px;"><strong>Copyright</strong> </h2>
    <?php 
        if($costSheetData->copyright == 1) { ?>
            <p style="margin: 10px 0px 0px; padding: 0px 20px;"><?= $copyrights[0]['description']; ?></p>        
    <?php } ?>
    <?php 
      $date = getdate();
      $year = $date['year'];
    ?>
    <p style="margin: 30px 0px 0px; padding: 0px 20px;"><strong><em>Your quotation (QT/<?php echo $costSheetData->id; ?>/<?= $year; ?>), terms and conditions are accepted. Please commence work. Please mention the Purchase Order No. (if applicable) for Accounting Purposes</em></strong></p>
    <table border="0" style="width:100%; padding: 0px 20px 20px; margin: 40px 0px 0px">
        <tr>
            <td style="padding: 5px;">
                <p style="margin: 50px 35px 40px; padding: 0px 20px; width:27%; float:left; display: inline; border-top: 1px solid #000;"><strong>for and on behalf of <?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?> </strong></p>
            </td>
            <td style="padding: 5px;">
                <p style="margin: 50px 40px 40px; padding: 0px 20px; width:15%; float:right; display: inline;border-top: 1px solid #000;"><strong>Purchase Order No.</strong></p>
            </td>
        </tr>

    </table>
</div>

<img src="<?php echo base_url('/admin_assets/images/') ?>footer.jpg" style="margin: 0px 10px 0px 0px;">