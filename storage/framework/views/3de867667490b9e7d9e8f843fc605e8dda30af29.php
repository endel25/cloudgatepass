
<?php $__env->startSection('content'); ?>
<style>
   .switch {
     position: relative;
     display: inline-block;
     width: 40px;
     height: 20px;
   }

   .switch input { 
     opacity: 0;
     width: 0;
     height: 0;
   }

   .slider {
     position: absolute;
     cursor: pointer;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #ccc;
     -webkit-transition: .4s;
     transition: .4s;
   }

   .slider:before {
     position: absolute;
     content: "";
     height: 18px;
     width: 18px;
     left: 2px;
     bottom: 2px;
     background-color: white;
     -webkit-transition: .4s;
     transition: .4s;
   }

   input:checked + .slider {
     background-color: #2196F3;
   }

   input:focus + .slider {
     box-shadow: 0 0 1px #2196F3;
   }

   input:checked + .slider:before {
     -webkit-transform: translateX(18px);
     -ms-transform: translateX(18px);
     transform: translateX(18px);
   }

   /* Rounded sliders */
   .slider.round {
     border-radius: 10px;
   }

   .slider.round:before {
     border-radius: 50%;
   }
   .table th,
.table td {
  padding: 0.5rem;
  vertical-align: top;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}
</style>
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Warehouse Management Table</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <?php if($userrole_permissions->IsCreate==1): ?>
            <div class="card-header">
               <ol class="float-sm-right">
               <a class="btn btn-success" href="<?php echo e(route('warehouse.create')); ?>">Add Warehouse</a>
            </div>
            <?php endif; ?>
            <div class="card-body">
               <?php if(session('error')): ?>
               <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
               <?php endif; ?>
               <?php if($message = Session::get('success')): ?>
               <div class="alert alert-success">
                  <p><?php echo e($message); ?></p>
               </div>
               <?php endif; ?> 
                <?php if($message = Session::get('danger')): ?>
               <div class="alert alert-danger">
                  <p><?php echo e($message); ?></p>
               </div>
               <?php endif; ?> 
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Warehouse Number</th>
                        <th>Warehouse Name</th>
                        <th>Location</th>
                        <th>Key PersonName</th>
                        <th>Key PersonEmail</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $warehouse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($warehouse->warehouseNumber); ?></td>
                        <td><?php echo e($warehouse->warehouseName); ?></td>
                        <td><?php echo e($warehouse->WLocation); ?></td>
                        <td><?php echo e($warehouse->KeyPersonName); ?></td>
                        <td><?php echo e($warehouse->KeyPersonEmail); ?></td>
                        <td> <?php if($userrole_permissions->IsUpdate==1): ?>
                           <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('warehouse.edit',$warehouse->id)); ?>"></a><?php endif; ?>
                           <?php if($userrole_permissions->IsDelete ==1): ?> / <a class="fas fa-trash-alt" href="<?php echo e(URL::to('/')); ?>/warehouse/<?php echo e($warehouse->id); ?>/delete"></a><?php endif; ?>
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
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/warehouse/index.blade.php ENDPATH**/ ?>