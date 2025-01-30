
<?php $__env->startSection('content'); ?>
<style type="text/css">
  .th{text-align: center;}
</style>
<section class="content-header">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-6">
        <h1>Scrap Report</h1>
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
                  <th>Vehicle No</th>
                  <th>Transaction Type</th>
                  <th>Company Name</th>
                  <th>Delivery No</th>
                  <th>Mazeras Del.</th>
                  <th>Mazeras Webridge Tickets No</th>
                  <th>Tare Weight</th>
                  <th>Gross Weight</th>
                  <th>Net Weight</th>
                  <th>As per Mazeras Webridge</th>
                  <th>As per IST and Ahmed Webridge</th>
               </tr>
            </thead>
            <tbody> 
             <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $datas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
               <tr>
                  <td><?php echo e($datas->VehicleNo); ?></td>
                  <td><?php echo e($datas->TransactionType); ?></td>
                  <td><?php echo e($datas->CompanyID); ?></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td><?php echo e($datas->TareWeight); ?></td>
                  <td><?php echo e($datas->GrossWeight); ?></td>
                  <td><?php echo e($datas->NetWeight); ?></td>
                  <td></td>
                  <td></td>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/suppliyers/filter.blade.php ENDPATH**/ ?>