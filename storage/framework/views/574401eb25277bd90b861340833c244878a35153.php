
<?php $__env->startSection('content'); ?>
<!-- <div class="overlayer" id="overlayer">
   <div class="loader flex-column justify-content-center align-items-center" style=" background-color: transparent;">
      <img class="loader-inner" src="<?php echo e(asset('dist/img/Load.png')); ?>"  minheight="100" minwidth="120" >
   </div>
</div> -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Product Management Table</h1>
         </div>
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
                        <!-- <th>Theoratical Weight</th> -->
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
                        <!-- <td><?php echo e($product->ProductPrice); ?></td> -->
                        <td><?php if($userrole_permissions->IsUpdate == 1): ?>
                           <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('products.edit',$product->id)); ?>"></a><?php endif; ?>
                           <?php if($userrole_permissions->IsDelete == 1): ?> / <a class="fas fa-trash-alt" href="<?php echo e(URL::to('/')); ?>/products/<?php echo e($product->id); ?>/delete"></a><?php endif; ?>
                        </td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>
                &nbsp;
                  <div class="d-flex" style="justify-content: right;">
                     <?php echo $products->links(); ?>

                  </div>
            </div>
         </div>
      </div>
   </div>
</div>  
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script type="text/javascript">
  setInterval(function()
  { 
    window.location.reload();
  }, 300000);

   function GetProductUpdata()
   {
      let _token = $('meta[name="csrf-token"]').attr('content');
       $.ajax({
            type: "GET",
            url: "<?php echo e(URL::to('/')); ?>/getproductmasterdetails",
            data: {
               _token: _token
            },
            cache: false,
            success: function(response) {
               if (response.error) 
               {
                  toastr.error(response.error);
               }
               if (response.Message) 
               {
                  toastr.success(response.Message);
                  window.location.reload();
               }
           
            }
         });
   }
   
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/products/index.blade.php ENDPATH**/ ?>