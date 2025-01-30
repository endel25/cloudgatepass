
<?php $__env->startSection('content'); ?>

<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>User  Role Managment Table</h1>
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
<section>
   <div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <?php if($userrole_permissions->IsCreate==1): ?>
            <div class="card-header">
               <ol class="float-sm-right">
               <a class="btn btn-success" href="<?php echo e(route('userroles.create')); ?>">Create New User Role</a>
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
                        <th>User Role</th>
                        <!-- <th>Active</th> -->
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                    <?php $__currentLoopData = $userrole; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userroles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($userroles->UserRoleName != 'endel'): ?>
                     <tr>
                        <td><?php echo e($userroles->UserRoleName); ?></td>
                        <!-- <td><i class="fa <?php echo e($userroles->Active!=''?'fa-check' : 'fa-times'); ?> " aria-hidden="true"> -->
                        </td>
                        <td> <?php if($userrole_permissions->IsUpdate==1): ?>
                           <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('userroles.edit',$userroles->id)); ?>"></a><?php endif; ?>
                           <?php if($userrole_permissions->IsDelete==1): ?>/
                           <a class="fas fa-trash-alt" href="<?php echo e(URL::to('/')); ?>/userroles/<?php echo e($userroles->id); ?>/delete"></a> <?php endif; ?>
                        </td>
                     </tr>
                     <?php endif; ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/userroles/index.blade.php ENDPATH**/ ?>