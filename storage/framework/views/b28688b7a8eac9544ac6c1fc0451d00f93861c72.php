
<?php $__env->startSection('content'); ?>
<!-- WeighBridge Managment -->
<section class="content-header">
   <div class="card card-default">
      <div class="card-header">
         <h3 class="card-title">User Managment</h3>
         <div class="card-tools">
            <ol class="breadcrumb float-sm-right">
               <a class="btn btn-block bg-gradient-primary btn-sm" href="<?php echo e(route('users.index')); ?>"> Back</a>
            </ol>
         </div>
      </div>
   </div>
  <div class="container">
      <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger" role="alert">
         <?php echo e($error); ?>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?> 
   </div>
   <form action="<?php echo e(route('users.update',$user->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title">Edit User</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>First Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     <input class="form-control form-control-sm" required="" type="text" value="<?php echo e($user->FirstName); ?>" name="FirstName" placeholder=" Enter First Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Last Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     <input class="form-control form-control-sm" required="" type="text"  value="<?php echo e($user->LastName); ?>" name="LastName" placeholder=" Enter Last Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>User Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     <input class="form-control form-control-sm" id="email" required=""  type="text"  value="<?php echo e($user->email); ?>" name="email" placeholder=" Enter User Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Password <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     <input id="password" type="password" class="form-control form-control-sm <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="password" required  autocomplete="new-password" placeholder="Enter  Password">
                       <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                           <span class="invalid-feedback" role="alert">
                               <strong><?php echo e($message); ?></strong>
                           </span>
                       <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                  </div>
                  <div class="form-group">
                     <label>Confrim Password <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     <input id="password-confirm" type="password" class="form-control form-control-sm" name="password_confirmation" required autocomplete="new-password" placeholder="Enter Confrim Password" autocomplete="off">
                    
                  </div>
                  <div class="form-group">
                     <label>Contect No</label>
                     <input class="form-control form-control-sm " type="number" name="ContectNo" value="<?php echo e($user->ContectNo); ?>"  placeholder=" Enter Contect No" autocomplete="off">
                  </div>
               </div>
               <div class="col-md-6">
                  
                  <div class="form-group">
                     <label>Email</label>
                     <input class="form-control form-control-sm " type="text" name="EmailAdd" value="<?php echo e($user->EmailAdd); ?>"  placeholder=" Enter Email" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Address</label>
                     <input class="form-control form-control-sm " type="text" name="Address" value="<?php echo e($user->Address); ?>"  placeholder=" Enter Address" autocomplete="off">
                  </div>
                  
                  <div class="form-group">
                     <label>User Role</label>
                      <select class="form-control form-control-sm " name="UserRoleId" id="">
                              <?php $__currentLoopData = $user->user_roles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user_roles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <?php if($user->UserRoleId == $user_roles->id): ?>
                                 {
                                   <option selected="" value="<?php echo e($user_roles->id); ?>"><?php echo e($user_roles->UserRoleName); ?></option>
                                 }
                                 <?php else: ?>
                                 {   
                                    <option value="<?php echo e($user_roles->id); ?>"><?php echo e($user_roles->UserRoleName); ?></option>
                                 }                       
                                 <?php endif; ?>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                  </div> 
                  <?php if($user->LocationId != ""): ?>
                  <div class="form-group" id="LocationId">
                     <label>Location <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> </label>
                     <select class="form-control form-control-sm "  name="LocationId" >
                           <option selected="selected">Select Location</option>
                           <?php $__currentLoopData = $user->locations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($user->LocationId == $locations->id): ?>
                           {
                             <option selected value="<?php echo e($locations->id); ?>"><?php echo e($locations->LocationName); ?></option>
                           }
                           <?php else: ?>
                           {   
                              <option value="<?php echo e($locations->id); ?>"><?php echo e($locations->LocationName); ?></option>
                           }                       
                           <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div> 
                  <?php endif; ?>
                  <?php if($user->CompanyId != ""): ?>
                  <div class="form-group" id="CompanyID" >
                     <label>Company <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> </label> 
                     <select class="form-control form-control-sm "   name="CompanyId"  >
                           <option selected="selected">Select Company</option>
                           <?php $__currentLoopData = $user->companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php if($user->CompanyId == $company->id): ?>
                           {
                             <option selected value="<?php echo e($company->id); ?>"><?php echo e($company->CompanyName); ?></option>
                           }
                           <?php else: ?>
                           {   
                              <option value="<?php echo e($company->id); ?>"><?php echo e($company->CompanyName); ?></option>
                           }                       
                           <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div>
                  <?php endif; ?>
                  <?php if($user->WarehouseId != ""): ?>  
                  <!-- <div class="form-group" id="WarehouseID" >
                     <label>Warehouse <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> </label>
                     <select class="form-control form-control-sm select2" multiple="multiple" name="WarehouseId[]" >
                           <?php $__currentLoopData = $user->warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <?php 
                              $warehouseid=explode(",",$user->WarehouseId);
                           ?>   
                           <?php for($i=0;$i<count($warehouseid);$i++){   
                                 ?>
                           <?php if($warehouseid[$i] == $warehouse->warehouseNumber): ?>
                           { 
                              <option selected value="<?php  echo  "$warehouseid[$i]" ;?>"><?php  echo  "$warehouseid[$i]" ;?></option>
                           }
                           <?php else: ?> 
                           {   
                              <option value="<?php echo e($warehouse->warehouseNumber); ?>"><?php echo e($warehouse->warehouseNumber); ?></option>
                           }                  
                           <?php endif; ?>
                           <?php  } ?>  
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div> -->
                  <?php endif; ?>
                  <!-- <div class="form-group" id="SubWarehouseID">
                     <label>Sub Warehouse<sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> </label>
                     <select class="form-control form-control-sm select2" placeholder="Select a Warehouse"  multiple="multiple"  name="SubWarehouseID[]" >
                          
                     </select>
                  </div>  -->                                                     
               </div>
            </div>
            <div class="form-group">
            <label>Note</label>
            <textarea class="form-control form-control-sm " type="text" name="Notes"    autocomplete="off"><?php echo e($user->Notes); ?></textarea> 
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
        $('#email').on('keypress', function(e) {
            if (e.which == 32){
            
                return false;
            }
        });
      });
      $(function() {
        $('#password').on('keypress', function(e) {
            if (e.which == 32){
            
                return false;
            }
        });
      });
      $(function() {
        $('#password-confirm').on('keypress', function(e) {
            if (e.which == 32){
            
                return false;
            }
        });
      });

      // $('#UserRoleId').on('change', function(e) {


      //       // alert($('#UserRoleId').val());
      //       var role=$('#UserRoleId').val();
      
      //       if (role=='Security' || role=='WeighbridgeClerk') 
      //       {
      //          $('#LocationId').show();
               
      //          $('#CompanyID').hide();
      //          $('#WarehouseID').hide();
      //       }
      //       if (role=='Logisitics') 
      //       {
      //          $('#CompanyID').show();
      //          $('#LocationId').hide();
      //          $('#WarehouseID').hide();
      //       }
      //       if (role=='WarehouseSupervisor' || role=='WarehouseIncharge') 
      //       {
      //          $('#CompanyID').show();
      //          $('#WarehouseID').show();
      //          $('#LocationId').hide();
      //       }
      //       if (role=='Manager') 
      //       {
      //          $('#CompanyID').show();
      //          $('#WarehouseID').hide();
      //          $('#LocationId').show();
      //       }
      //       if (role=="") 
      //       {
      //          $('#CompanyID').hide();
      //          $('#WarehouseID').hide();
      //          $('#LocationId').hide();
      //       }
      //       if (role=="Admin") 
      //       {
      //          $('#CompanyID').hide();
      //          $('#WarehouseID').hide();
      //          $('#LocationId').hide();
      //       }
      //       if (role=="") 
      //       {
      //          $('#CompanyID').hide();
      //          $('#WarehouseID').hide();
      //          $('#LocationId').hide();
      //       }
         

      // });
   </script>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/users/edit.blade.php ENDPATH**/ ?>