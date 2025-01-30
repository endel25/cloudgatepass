
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .th{text-align: center;}
</style>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

</style>
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h1>Scrap Daily Report</h1>
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
          <table id="example" class="" style="width:100%">
               <tr>
                <th>DATE </th>
                <th class="text-center"><u>SCRAP</u></th>
                <th>IN</th>
                <th>OUT</th>
                <th>NET WGT</th>
              </tr>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <tr>
                <td>Date:-<?php echo e($datas->GatepassEntryTime); ?></td>
                <td>Name</td>
                <td>WEIGHT</td>
                <td>WEIGHT</td>
                <td>WEIGHT</td>
              </tr>
              <tr>
                <td>Driver Name:-<?php echo e($datas->DriverID); ?></td>
                <td></td>
                <td><?php echo e($datas->TareWeight); ?></td>
                <td><?php echo e($datas->GrossWeight); ?></td>
                <td><?php echo e($datas->NetWeight); ?></td>
              </tr>
              <tr>
                <td>Driver ID:<?php echo e($datas->D_licenseNo); ?></td>
                <td>VehicleNo.<?php echo e($datas->VehicleNo); ?></td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td>Mob No.</td>
                <td>Time:</td>
                <td></td>
                <td></td>
                <td></td>
              </tr>
              <tr>
                <td colspan="4">Remarks Heavy.....less D/S:mix Medium......less....D/S:C:l/H.C Returned</td>
                <td></td>
              </tr>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
          
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





<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/scrap/filter.blade.php ENDPATH**/ ?>