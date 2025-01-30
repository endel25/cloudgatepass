
<?php $__env->startSection('content'); ?>
<!-- WeighBridge Managment -->
<section class="content-header">
   <div class="card card-default">
      <div class="card-header">
         <h3 class="card-title">User Role Managment</h3>
         <div class="card-tools">
            <ol class="breadcrumb float-sm-right">
               <a class="btn btn-block bg-gradient-primary btn-sm" href="<?php echo e(route('userroles.index')); ?>"> Back</a>
            </ol>
         </div>
      </div>
   </div>
  
   <form action="<?php echo e(route('userroles.store')); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title">Add User Role</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <div class="row">
                        <label>User Role Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> </label>
                        &nbsp;
                        &nbsp;
                        <input class="form-group col-md-9" type="text" required="" name="UserRoleName" style="font-size: 13px;" id="" placeholder=" Enter User Role Name" autocomplete="off">
                     </div>
                  </div>
               </div>
               <!-- <div class="col-md-5">
                  <div class="form-group">
                     <div class="row">
                        <label>User Location</label>
                        &nbsp;
                        &nbsp;
                        <select class="form-group col-md-9" name="" id="">
                           <option selected="selected" value="">Select warehouseName</option> 
                            <?php $__currentLoopData = $warehouses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($warehouses->id); ?>"><?php echo e($warehouses->warehouseNumber); ?>

                              </option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select> 
                     </div>
                  </div>
               </div> -->
                <div class="col-md-1">
                  <div class="custom-control custom-checkbox">
                     <input type="checkbox" class="custom-control-input" name="Active" id="defaultChecked" checked="">
                     <label class="custom-control-label" for="defaultChecked">Active</label>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title">Permission</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
         </div>
         <div class="card-body">
            <div class="card">
               <div class="row">
                  <div class="col-md-12">
                     <div class="card-body table-responsive p-0">
                        <table  class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th>Permission</th>
                                 <th>Read</th>
                                 <th>Create</th>
                                 <th>Update</th>
                                 <th>Delete</th>
                                 <th>Execute</th>
                              </tr>
                           </thead>
                           <tbody>
                              <!-- Transaction Management -->
                              <?php $__currentLoopData = $permission; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $permissions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                 <td data-name="id">
                                    <input   type="hidden" name="items[][<?php echo e($permissions->id); ?>]"  >
                                    <?php echo e(Form::hidden('id'.$permissions->id, $permissions->id)); ?>

                                    <span style="font-weight:<?php echo e($permissions->IsMaster==1?'600':'500'); ?>"><?php echo e($permissions->permissionName); ?></span></td>
                                 <td class="jsgrid-cell jsgrid-align-center">
                                    <input id="IsRead<?php echo e($permissions->id); ?>" class="<?php echo e($permissions->ParentFeatureID); ?>" type="checkbox" name="IsRead<?php echo e($permissions->id); ?>"  style="display: <?php echo e($permissions->IsReadDisplay==0?'none':'block'); ?>" onclick="CheckFunction(<?php echo e($permissions->id); ?>)">  
                                                                    
                                 </td>
                                 <td  class="jsgrid-cell jsgrid-align-center" >
                                    <?php echo e(Form::checkbox('IsCreate' .$permissions->id,null,false, array('class'=>$permissions->ParentFeatureID , 'style' =>  $permissions->IsCreateDisplay==0?'display:none':'display:block'))); ?>

                                 </td>
                                 <td class="jsgrid-cell jsgrid-align-center">
                                    <?php echo e(Form::checkbox('IsUpdate' .$permissions->id,null,false, array('class'=>$permissions->ParentFeatureID, 'style' =>  $permissions->IsUpdateDisplay==0?'display:none':'display:block'))); ?>

                                 </td>
                                 <td class="jsgrid-cell jsgrid-align-center">
                                    <?php echo e(Form::checkbox('IsDelete' .$permissions->id,null,false, array('class'=>$permissions->ParentFeatureID , 'style' =>  $permissions->IsDeleteDisplay==0?'display:none':'display:block'))); ?>

                                 </td>
                                <td class="jsgrid-cell jsgrid-align-center">
                                    <?php echo e(Form::checkbox('IsExecute' .$permissions->id,null,false, array('class'=>$permissions->ParentFeatureID , 'style' =>  $permissions->IsExecuteDisplay==0?'display:none':'display:block'))); ?>

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
      </div>
      <div class="form-group">
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
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
   </form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
  function CheckFunction(id) {
   // Get the checkbox
   var checkBox = document.getElementById("IsRead"+id);

   $("." + id).prop('checked', checkBox.checked); 

   $("input[name=IsCreate"+ id +"]").prop('checked', checkBox.checked);
   $("input[name=IsUpdate"+ id +"]").prop('checked', checkBox.checked);
   $("input[name=IsDelete"+ id +"]").prop('checked', checkBox.checked);
   $("input[name=IsExecute"+ id +"]").prop('checked', checkBox.checked);
   
   var inputs = $("." + id);
    


   for (var i = 0; i < inputs.length; i++) 
   {
      var iid = $(inputs[i]).attr('id');
      if(iid!= null)
      {
         if(iid.indexOf("IsRead") != -1)
         {
            iid = iid.replace('IsRead','');     
            $("." + iid).prop('checked', checkBox.checked);
         }  
      }
          
      
     
      //alert($(inputs[i]));
   }

      $(":hidden").prop('checked', false);

}
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/userroles/create.blade.php ENDPATH**/ ?>