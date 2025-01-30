
<?php $__env->startSection('content'); ?>
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Exit Approved Data</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
	<div class="container-fluid">
	   <div class="row">
	      <div class="col-12">
	         <div class="card">
	            <div class="card-body">
	               <table id="example1" class="table table-bordered table-striped">
	                  <thead>
	                     <tr>
	                        <th>DateTime</th>
	                        <th>Vehicle No</th>
	                        <th>Trailer No</th>
	                        <th>Company Name</th>
	                        <th>Transporter</th>
	                        <th>Driver Name</th>
	                        <th>Driver ID</th>
	                        <th>VisitFor</th>
	                        <th>Status</th>
	                        <th>Action</th>

	                     </tr>
	                  </thead>
	                  <tbody> 
	                   <?php $__currentLoopData = $ExitApproved; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PendingEntry): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
	                     <tr>
	                        <td><?php echo e($PendingEntry->GatepassEntryTime); ?></td>
	                        <td ><?php echo e($PendingEntry->VehicleNo); ?></td>
	                        <td ><?php echo e($PendingEntry->TrailerNo); ?></td>
	                        <td ><?php echo e($PendingEntry->CompanyID); ?></td>
	                        <td><?php echo e($PendingEntry->TransporterID); ?></td>
	                        <td><?php echo e($PendingEntry->DriverID); ?></td>
	                        <td><?php echo e($PendingEntry->D_licenseNo); ?></td>
	                        <td><?php echo e($PendingEntry->VisitFor); ?></td>
	                        <td><?php echo e($PendingEntry->Status); ?></td>
	                        <td> 
                          <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ups->IsUpdate==1): ?>
                             <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('gatepass.edit',$PendingEntry->id)); ?>"></a> <?php endif; ?>
                            <?php if($ups->IsDelete==1): ?> 
                              <a class="fas fa-trash-alt" href="gatepass/<?php echo e($PendingEntry->id); ?>/delete"></a>
                            <?php endif; ?>
                            <a class="fas fa-print" title="PRINT"  href="<?php echo e($PendingEntry->id); ?>/invoice"></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
	                     </tr>
	                   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	                  </tbody>
	               </table>
	            </div>
	         </div>
	      </div>
	   </div>
	</div>
	<div class="form-group">
		 <div class="col-xs-12 col-sm-12 col-md-12">
		    <ol class="breadcrumb float-sm-right">
		       <a class="btn btn-primary btn-sm" href="<?php echo e(route('home')); ?>"> Back</a>
		    </ol>
		 </div>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script type="text/javascript">


  setInterval(function()
  { 
    window.location.reload();
  }, 60000);

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/exit.blade.php ENDPATH**/ ?>