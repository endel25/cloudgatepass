
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .th{text-align: center;}
</style>
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoicies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if($invoicies->Status!="Exit Approved"): ?>
        <h1>Gatepass In</h1>
        <?php else: ?>
        <h1>Gatepass Out</h1>
        <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
      <div class="col-sm-6">
            <ol class="float-sm-right">
            <a class="btn btn-block btn-primary" href="<?php echo e(route('home')); ?>">Back</a>
            </ol>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
       <form>
        <?php $__currentLoopData = $invoice; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $invoicies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="invoice p-3 mb-3">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-header" style="text-align-last: center;">
                <!--  <span><img src="<?php echo e(asset('dist/img/Tarmallogo.png')); ?>"   style="margin-left: 25px; width: 20%;"></span> -->
                 Tarmal Gropus
                <small class="float-right"></small>
              </h2>
            </div>
          </div>
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
                      <label>In Date</label>
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
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-7">
                      <label>Vehicle No</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4">
                      <input value="<?php echo e($invoicies->VehicleNo); ?>" disabled="" style="border: none; background: white; flex: 0 0 0%; ">
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
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
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="row">
                    <div class="col-md-7">
                      <label>Transporter</label>
                    </div>
                    <div>
                      <label>:</label>
                    </div>
                    <div class="col-md-4"> 
                      <input value="<?php echo e($invoicies->TransporterID); ?>" disabled="" style="border: none; background: white; flex: 0 0 0%; ">
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
            </div>
            <div class="col-md-6">
            </div>
          </div>
          &nbsp;
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
                  <td class="th"><?php echo e($g_l_m->OrderNo); ?></td>
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
          <div class="row no-print">
            <div class="col-12">
              <a href="print" target="_blank" class="btn btn-default"><i class="fas fa-print"></i> Print</a>
          </div>
          </div>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </form>

      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
 <?php $__env->startSection('UserScriptStr'); ?>
<script>
 
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/invoice/singal_Double.blade.php ENDPATH**/ ?>