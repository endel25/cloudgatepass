
<?php $__env->startSection('content'); ?>
<style type="text/css">
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
            <h1>Transporter Management Table</h1>
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
               <a class="btn btn-success" href="<?php echo e(route('accounts.create')); ?>">Create New Account</a>
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
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Transporter</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     
                     <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($account->FirstName); ?></td>
                        <td><?php echo e($account->LastName); ?></td>
                        <td><?php echo e($account->Email); ?></td>
                        <td><?php echo e($account->CompanyName); ?></td>
                        <td>
                           <?php if($userrole_permissions->IsUpdate==1): ?>
                           <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('accounts.edit',$account->id)); ?>"></a><?php endif; ?>
                            <?php if($userrole_permissions->IsDelete==1): ?>
                           / <a class="fas fa-trash-alt" href="<?php echo e(URL::to('/')); ?>/accounts/<?php echo e($account->id); ?>/delete"></a><?php endif; ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/accounts/index.blade.php ENDPATH**/ ?>