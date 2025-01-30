<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tarmal Groups| Receipt Print</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Bootstrap 4 -->
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="`/5ionicons.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet')); ?>">
  <!-- jQuery -->
  <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
</head>
<body>
  <style type="text/css">
    .th{text-align: center;}
  </style>
<div class="wrapper">
  <section class="invoice">
    <div class="row">
      <div class="col-12">
        <h2 class="page-header" style="text-align-last: center;">
         <!--   <span><img src="<?php echo e(asset('dist/img/Tarmallogo.png')); ?>"   style="margin-left: 25px; width: 80%;"></span> -->
          Tarmal Groups
          <small class="float-right"></small>
        </h2>
      </div>
    </div>
     <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoicies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="invoice p-3 mb-3">
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <input type="hidden" id="datetime" value="<?php echo e($invoicies->GatepassEntryTime); ?>" name="">
                    <input type="hidden" id="Outdatetime" value="<?php echo e($invoicies->GatepassExitTime); ?>" name="">
                    <div class="col-md-7">
                      <label>Gatepass No</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4">
                      <input value="GP0<?php echo e($invoicies->id); ?>" disabled=""  style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <input type="hidden" id="datetime" value="<?php echo e($invoicies->GatepassEntryTime); ?>" name="">
                    <input type="hidden" id="Outdatetime" value="<?php echo e($invoicies->GatepassExitTime); ?>" name="">
                    <div class="col-md-7">
                      <label>Date</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4">
                      <input value="" disabled="" id="date" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-7">
                      <label>In Time</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="" disabled="" id="time" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <label>Vehicle No</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->VehicleNo); ?>" disabled=""  style="border: none; background: white; flex: 0 0 0%;">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <label>Company Name</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->CompanyID); ?>" disabled="" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                    <div class="row">
                    <div class="col-md-7">
                      <label>Transporter</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->TransporterID); ?> " disabled="" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <label>Driver</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->DriverID); ?>" disabled="" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                   <div class="row">
                    <div class="col-md-7">
                      <label>Driver ID</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->D_licenseNo); ?> " disabled="" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <label>Visit For</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->VisitFor); ?>" disabled="" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <label>Status</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->Status); ?>" disabled="" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="col-md-7">
                      <label>Out Date</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input  disabled="" id="Outdate" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-7">
                      <label>Out Time</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input  disabled="" id="Outtime" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                </div>
              </div>
              &nbsp;
              &nbsp;
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
               <div class="row">
                
               </div>
          </div>
          
        </div>
         <?php if($invoicies->Status!='Entry Approved' && $invoicies->Status!='Pending Entry'): ?>
          <div class="card card-default col-md-12">
           <div class="card-header">
              <h3 class="card-title">Order Details</h3>
           </div>
           <table id="locationTable" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th class="th">Sequence No</th>
                  <th class="th">SO No</th>
                  <th class="th">Product Name</th>
                  <th class="th">Quantity(piece)</th>
                  <th class="th">Weight(In kg)</th>
                  <th class="th">Warehouse</th>
                </tr>
              </thead>
              <tbody>
                <?php $__currentLoopData = $g_l_m; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_l_m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                 <tr>
                  <td class="th"><?php echo e($g_l_m->Sequenceno); ?></td>
                  <td class="th"><?php echo e($g_l_m->SONo); ?></td>
                  <td class="th"><?php echo e($g_l_m->ProductName); ?></td>
                  <td class="th"><?php echo e($g_l_m->Quantity); ?></td>
                  <td class="th"><?php echo e($g_l_m->Weight); ?></td>
                  <td class="th"><?php echo e($g_l_m->warehouse); ?></td>
                 </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </tbody>
           </table>
          </div> 
        <?php endif; ?> 
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>         
  </section>
</div>
<script> 
  window.addEventListener("load", window.print()); 
    
    var date=$('#datetime').val();
    var Outdatetime=$('#Outdatetime').val();
    var Date_d = date.split(" ")[0];
    var Date_t = date.split(" ")[1]; 
    var Outdate = Outdatetime.split(" ")[0];
    var Outtime = Outdatetime.split(" ")[1]; 
      $('#date').val(Date_d);
      $('#time').val(Date_t);
      $('#Outdate').val(Outdate);
      $('#Outtime').val(Outtime);
</script>

</body>
</html>

<?php /**PATH C:\Program Files\Ampps\www\resources\views/invoice/singal_Double_print.blade.php ENDPATH**/ ?>