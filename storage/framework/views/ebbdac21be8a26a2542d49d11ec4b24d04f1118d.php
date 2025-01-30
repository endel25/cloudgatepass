
<?php $__env->startSection('content'); ?>
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Product Management Table</h1>
         </div>
         <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               
               <li class="breadcrumb-item"><a href="<?php echo e(route('home')); ?>">Home</a></li>
               <li class="breadcrumb-item">
                  <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><?php echo e(__('Logout')); ?></a>    
                  <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                  <?php echo csrf_field(); ?>
                  </form>
               </li>
            </ol>
         </div> -->
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <?php if($userrole_permissions->IsCreate == 1): ?>
            <div class="card-header">
               <ol class="float-sm-right">
               <a class="btn btn-success" href="<?php echo e(route('products.create')); ?>"> Create New Product</a>
            </div>
            <?php endif; ?>
            <div class="card-body">
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
                        <th>Product Name</th>
                        <th>Product Code</th>
                        <th>Primary Unit</th>
                        <th>Secondary Unit</th>
                        <th>Product Variance</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($product->ProductName); ?></td>
                        <td><?php echo e($product->ProductCode); ?></td>
                        <td><?php echo e($product->ProductUnit); ?></td>
                        <td><?php echo e($product->ProductSecUnit); ?></td>
                        <td><?php echo e($product->ProductVariance); ?></td>
                        <td><?php if($userrole_permissions->IsUpdate == 1): ?>
                           <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('products.edit',$product->id)); ?>"></a><?php endif; ?>
                           <?php if($userrole_permissions->IsDelete == 1): ?> / <a class="fas fa-trash-alt" href="<?php echo e(URL::to('/')); ?>/products/<?php echo e($product->id); ?>/delete"></a><?php endif; ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/products/index.blade.php ENDPATH**/ ?>