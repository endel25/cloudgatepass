
<?php $__env->startSection('content'); ?>
<!-- Unit Managment -->
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         <div class="col-sm-6">
            <h1>Change Password</h1>
         </div>
      </div>
   </div>
</section>
<section class="content-header">
  <div class="container">
       <?php if($errors->any()): ?>
       <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
       <div class="alert alert-danger" role="alert">
          <?php echo e($error); ?>

       </div>
       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       <?php endif; ?> 
      <?php if($message = Session::get('success')): ?>
       <div class="alert alert-success">
          <p><?php echo e($message); ?></p>
       </div>
      <?php endif; ?> 
    </div>
  <form action="<?php echo e(route('changes.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title"></h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-12">
                  <div class="form-group">
                     <label>Current Password</label>
                     <input class="form-control form-control-sm" type="password" id="p1" name="current_password"  autocomplete="current-password">
                  </div>
                  <div class="form-group">
                     <label>New Password</label>
                     <input class="form-control form-control-sm" type="password" id="p2" name="new_password" autocomplete="current-password">
                  </div>
                  <div class="form-group">
                     <label>New Confirm Password</label>
                     <input class="form-control form-control-sm" type="password" id="p3" name="new_confirm_password" autocomplete="current-password">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="form-group">
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
         </div>
      </div>
  </form>
   <script type="text/javascript">
      $(function() {
        $('#p1').on('keypress', function(e) {
            if (e.which == 32){
            
                return false;
            }
        });
      });
      $(function() {
        $('#p2').on('keypress', function(e) {
            if (e.which == 32){
            
                return false;
            }
        });
      });
      $(function() {
        $('#p3').on('keypress', function(e) {
            if (e.which == 32){
            
                return false;
            }
        });
      });
   </script>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/errors/change.blade.php ENDPATH**/ ?>