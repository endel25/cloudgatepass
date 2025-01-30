
<?php $__env->startSection('content'); ?>
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Company Management Table</h1>
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
            <?php if($userrole_permissions->IsCreate==1): ?> 
            <div class="card-header">
               <ol class="float-sm-right">
               <a class="btn btn-success" href="<?php echo e(route('companies.create')); ?>"> Create New Company</a>
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
                        <th>Company Name</th>
                        <!-- <th>API</th> -->
                        <th>Location</th>
                        <th>Action</th>
                     </tr>
                      
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                     <tr>
                        <td><?php echo e($company->CompanyName); ?></td>
                        <!-- <td><?php echo e($company->CompanyName); ?></td> -->
                        <td><?php echo e($company->LocationName); ?></td>
                        <td>
                        <?php if($userrole_permissions->IsUpdate==1): ?> 
                           <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('companies.edit',$company->id)); ?>"></a><?php endif; ?><!-- /<a class="fas fa-trash-alt" href="<?php echo e(URL::to('/')); ?>/companies/<?php echo e($company->id); ?>/delete"></a> -->
                        </td>
                     </tr>
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>
                &nbsp;
                  <div class="d-flex" style="justify-content: right;">
                     <?php echo $companies->links(); ?>

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

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/companies/index.blade.php ENDPATH**/ ?>