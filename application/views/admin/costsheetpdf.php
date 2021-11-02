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
                        <td style="padding: 5px;"><strong>Ref No: QT/S-<?php echo $costSheetData->quotation_number; ?>' rev '<?php echo $costSheetData->quot_numb; ?>/<?=$year?></strong></td>
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

    <div style="background: white; padding: 110px 0px 00px;">
        <div style="padding: 0rem 0rem;background: white;margin-top: 0px; margin-bottom:0px; padding-top:80px;">
        <p style="margin: 0px 0px 5px; padding: 0px 20px; text-align: center;"><strong>TO <?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?> </strong></p>
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong>FOR <?php echo $costSheetData->name; ?></strong></p>
        <p style="margin: 10px 0px 5px; padding: 0px 20px; text-align: center;"><strong><?php echo get_single_col_value('venue','id',$costSheetData->venue,'title'); ?></strong></p>
        <div style="width:100%;text-align: left; margin-bottom: 15px; padding-top:0px; background:transparent;">
	        <table border="0" style="width:100%; padding: 0px 0px 20px; border: 0px solid; margin: 20px 0px 0px; text-align: left;">
                <thead>
                    <tr>
                        <th style="border: 1px solid #000; padding: 15px; font-size: 14px;">Category</th>
                        <th style="border: 1px solid #000; font-size: 14px;">Price</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i =1; foreach ($cost_sheet_cat as $key => $value){ 
                       $alphas = range('A', 'Z'); 
                    ?>
                        <tr>
                            <td style="width:70%; border: 1px solid #000; padding: 15px; font-size: 14px;"><?php echo $alphas[$i-1].'. '.$value['title']; ?></td>
                            <td style="width:30%; border: 1px solid #000; text-align: center; font-size: 14px;"><?= number_format(round($value['sumSellingCost'], 0, PHP_ROUND_HALF_UP),2,'.',','); ?> <?=$costSheetData->currency ?></td>
                        </tr>
                    <?php $i++; } ?>
                    <?php  if($costSheetTotal[0]->totalCostSum!=0){ ?>
                        <h4 style=''>Total: AED <?= number_format(round($costSheetTotal[0]->sellingPriceSum,0,PHP_ROUND_HALF_UP),2,'.',','); ?> <?= $costSheetData->currency ?></h4>
                    <?php } ?>
                </tbody>
           </table>  
        </div>
    </div>
</div>

<div style="width:1000px; margin: 0px auto; padding: 0px 0px 0px; display: block;">
      <div style="width:30%; float:right; text-align:right"></div>
        <div style="width:70%; float:right; text-align:right">
             <table style="width: 100%;">
              <tbody>
              <tr>
                <?php 
              
                $disPrice = $costSheetData->discountPerent;

                $totalPrice = $costSheetTotal[0]->sellingPriceSum - $disPrice;

                $calculateVat = ((5/100)*$totalPrice);

                $totalCost = $calculateVat+$totalPrice;
              ?>   
                <?php 
                    if ($disPrice != 0){ ?>
                        <td style="width:70%; text-align:right">
                            <table style="width:100%;">
                              <tbody>
                                <tr>
                                  <td style="width:60%; text-align:right; font-weight:bold;">
                                    <div style="width:100%; display:inline-block;">
                                      Discount
                                    </div>
                                  </td>
                                </tr>  
                              </tbody>                  
                            </table>  
                        </td>
                        <td style="width:30%; text-align:right; font-weight:bold;"><p class="text-right mb-0" style="text-align:right;"><strong>AED <?= number_format(round($disPrice,0,PHP_ROUND_HALF_UP),2,'.',','); ?></strong></p></td>
                <?php } ?>
                      
              </tr>
                <?php if($costSheetData->discountPerent == 0 || $costSheetData->discountPerent == "") { ?>
			    <?php }else{ ?>
                  <tr>
                    <td style="width:70%; text-align:right; font-weight:bold;"><p class="text-right mb-0" style="text-align:right;"><strong>Total after discount</strong></p></td>
                    <td style="width:30%; text-align:right; font-weight:bold;"><p class="text-right mb-0" style="text-align:right;"><strong>AED <?= number_format(round($totalPrice,0,PHP_ROUND_HALF_UP),2,'.',','); ?></strong></p></td>
                  </tr>
                <?php } ?>
              <tr>
              <td style="width:70%; text-align:right; font-weight:bold;"><p class="text-right mb-0" style="text-align:right;"><strong>Vat @ 5% <!--  <?= number_format(round($totalPrice,0,PHP_ROUND_HALF_UP),2,'.',','); ?> --></strong></p></td>
              <td style="width:30%; text-align:right; font-weight:bold;"><p class="text-right mb-0" style="text-align:right;"><strong>AED <?= number_format(round($calculateVat,0,PHP_ROUND_HALF_UP),2,'.',','); ?></strong></p></td>
              </tr>
              <tr>
              <td style="width:70%; text-align:right; font-weight:bold;"><p class="text-right mb-0" style="text-align:right;"><strong>Total including tax</strong></p></td>
              <td style="width:30%; text-align:right; font-weight:bold;"><p class="text-right mb-0" style="text-align:right;">AED <strong><?= number_format(round($totalCost,0,PHP_ROUND_HALF_UP),2,'.',','); ?></strong></p></td>
              </tr>
            </tbody>
            </table>
        </div>
           </div>
        <div style="  width:1000px; margin: 0px auto 0px; padding: 550px 0px 0px; display: block; height:3508px;">
                <p style="margin: 20px 0px 0px; padding: 60px 20px 0px;"><strong>Refurbishment would be required after year 1 to ensure that the existing build items are refurbished and made as good as new for the subsequent installation.</strong></p>
                <p style="margin: 20px 0px 0px; padding: 0px 20px;">Read & Agreed.................................................<?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?>...........Projex</p>
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
            </div>
            <div style="  width:1000px; margin: 40px auto; padding: 120px 0px 0px; display: block;">
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
                        <td style="padding: 5px;"> <p style="margin: 50px 35px 40px; padding: 0px 20px; width:27%; float:left; display: inline; border-top: 1px solid #000;"><strong>for and on behalf of <?php echo get_single_col_value('customer','id',$costSheetData->customer,'company_name'); ?> </strong></p></td>
                        <td style="padding: 5px;"><p style="margin: 50px 40px 40px; padding: 0px 20px; width:15%; float:right; display: inline;border-top: 1px solid #000;"><strong>Purchase Order No.</strong></p></td>
                    </tr>
           
                    </table> 
           </div>
        <img src="<?php echo base_url('/admin_assets/images/') ?>footer.jpg" style="margin: 0px 10px 0px 0px;">
                