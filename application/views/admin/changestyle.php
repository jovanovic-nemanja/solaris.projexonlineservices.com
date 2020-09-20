<div class="container-fluid page-body-wrapper">
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="page-header">
          <h3 class="page-title"> Change Style </h3>
      </div>
      
      <div class="row">
        <div class="col-lg-12 grid-margin">
          <div class="card">
            <div class="card-body">
              <div class='row'>
                <?php
                  if (@$style) {
                    $i = 1;
                    foreach ($style as $key => $value) { 
                      if ($value['name'] == "style.css") {
                        $color1 = $color2 = "#38ce3c";
                      }else if ($value['name'] == "style(grey).css") {
                        $color1 = $color2 = "#3e4b5b";
                      }else if ($value['name'] == "style(blue, green).css") {
                        $color1 = "#38ce3c";
                        $color2 = "#1bdbe0";
                      }
                      ?>
                      <form class="forms-sample" method="post" id='Csschange<?= $i; ?>' style="width: 100%;">
                        <div class="row" style="padding: 20px;">
                            <div class="col-md-4">
                                <?php 
                                    if($value['name'] == "custom.php") { ?>
                                        <input type="color" id="head" name="head" value="#e66465" style="width: 100%;">
                                <?php }else{ ?>
                                    <div style="width: 100%; height: 100%; background-color: <?=$color1; ?>;">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-4">
                                <?php 
                                    if($value['name'] == "custom.php") { ?>
                                        <input type="text" id="headval" name="headval" value="" />
                                <?php }else{ ?>
                                    <div style="width: 100%; height: 100%; background-color: <?=$color2; ?>;">
                                    </div>
                                <?php } ?>
                            </div>
                            <div class="col-md-4">
                                <br>
                                <h4>Name: <?= $value['name']; ?></h4>
                                <input type="hidden" name="name" value="<?= $value['name']; ?>">
                                <button type="button" class="btn btn-success" name="submit" value="submit" onclick="saveProfile('Csschange<?= $i; ?>', 'Csschange')">Change</button>
                            </div>
                        </div>
                        <br>
                      </form>
                <?php $i++; } } ?>
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

<script>
    $(document).ready(function() {
       $('#head').change(function() {
          $('#headval').val($(this).val());
       });
    });
</script>