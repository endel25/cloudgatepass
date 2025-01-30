
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .th{text-align: center;}
</style>
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h1>Tranaction Report</h1>
      </div>
      <div class="col-md-5">
        <ol class="float-sm-right">
          <a class="btn btn-block btn-primary btn-sm" href="<?php echo e(route('home')); ?>">Back</a>
        </ol>
      </div>
      
      <div class="no-print" id="myclick">
          <button  onclick="myfunforprint()" target="_blank" class="btn btn-primary btn-sm "><i class="fas fa-print"></i> </button>
      </div>
    </div>
  </div>
</section>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="invoice p-3 mb-3">
          <div class="row">
            <div class="col-md-12">
              <h2 class="page-header" style="text-align-last: center;">
                 <h4 style="font: bold; text-align-last: center;">Tarmal Wire Products Ltd</h4>
              </h2>
            </div>
          </div>
          <table id="example" class="table table-bordered table-striped">
            <thead>
               <tr>
                  <th>GatepassNo</th>
                  <th>VehicleNo</th>
                  <th>TrailerNo</th>
                  <th>Transporter</th>
                  <th>ProductName</th>
                  <th>DriverName</th>
                  <th>DriverID</th>
                  <th>TareWeight</th>
                  <th>GrossWeight</th>
                  <th>NetWeight</th>
                  <th>VisitFor</th>
                  <th>User</th>
               </tr>
            </thead>
            <tbody> 
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <tr>
                  <th>GP<?php
                    if ($datas->Gatepass_ID<10) {
                      echo "0".$datas->id;
                    }
                    else
                    {
                      echo $datas->Gatepass_ID;
                    }
                    ?>
                  </th>
                  <td><?php echo e($datas->VehicleNo); ?></td>
                  <td><?php echo e($datas->TrailerNo); ?></td>
                  <td><?php echo e($datas->TransporterID); ?></td>
                  <td><?php echo e($datas->ProductName); ?></td>
                  <td><?php echo e($datas->DriverID); ?></td>
                  <td><?php echo e($datas->D_licenseNo); ?></td>
                  <td><?php echo e($datas->TareWeight); ?></td>
                  <td><?php echo e($datas->GrossWeight); ?></td>
                  <td><?php echo e($datas->NetWeight); ?></td>
                  <td><?php echo e($datas->VisitFor); ?></td>
                  <td><?php echo e($datas->FirstName); ?> <?php echo e($datas->LastName); ?></td>
               </tr>
             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        </div>
        
      </div>
    </div>
  </div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
    function myfunforprint(){
            document.getElementById("myclick").style.display="none";
            document.getElementById("myfooter").style.display="none";
            window.print();
            document.getElementById("myclick").style.display="block";
            document.getElementById("myfooter").style.display="block";  
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/reports/filter.blade.php ENDPATH**/ ?>