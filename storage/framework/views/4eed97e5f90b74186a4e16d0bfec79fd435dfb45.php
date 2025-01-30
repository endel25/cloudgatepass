
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
            <h1>Vehicle Management Table</h1>
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
               <a class="btn btn-success" href="<?php echo e(route('vehicles.create')); ?>">Create New Vehicle</a>
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
                        <th>Vehicle No</th>
                        <th>Trailer No</th>
                        <th>Account</th>
                        <th>Vehicle Type</th>
                        <th>Active</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $vehicles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicle): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($vehicle->VehicleNumber); ?></td>
                        <td><?php echo e($vehicle->TrailerNumber); ?></td>
                        <td><?php echo e($vehicle->Comp); ?></td>
                        <td><?php echo e($vehicle->VehicleType); ?></td>
                        <td style="text-align-last: center;"><label class="switch">
                             <input type="checkbox" <?php echo e(($vehicle->IsActive!=0)? "checked" : ""); ?> onclick="Active(<?php echo e($vehicle->id); ?>)">
                             <span class="slider round"></span>
                           </label>
                        </td>
                        <!-- <td><i class="fa <?php echo e($vehicle->vehicles!=''?'fa-times' : 'fa-check'); ?> " aria-hidden="true"></i></td> -->
                        <td> <?php if($userrole_permissions->IsUpdate==1): ?><a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('vehicles.edit',$vehicle->id)); ?>"></a><?php endif; ?> 
                           <?php if($userrole_permissions->IsDelete==1): ?> / <a class="fas <?php echo e($vehicle->vehicles!=''?'fa-trash-alt' : ''); ?> " href="<?php echo e(URL::to('/')); ?>/vehicles/<?php echo e($vehicle->id); ?>/delete"></a></td><?php endif; ?>
                     </tr>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
               </table>
                &nbsp;
                  <div class="d-flex" style="justify-content: right;">
                     <?php echo $vehicles->links(); ?>

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
<script>
function Active(id) 
{
   let _token = $('meta[name="csrf-token"]').attr('content');

   if (id != "") 
   {
      $.ajax({
         type: 'POST',
         url: "<?php echo e(URL::to('/')); ?>/Active_Vehicle",
         cache: false,
         data: {                     
            id: id,
            _token: _token
        },
         success: function(response){
            if (response.success==true) 
            {
               
               toastr.success('Vehicle Active');
            }
            else{
               
               toastr.error('Vehicle Active');
            }
           
           // window.location.reload();
         },
         error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            }
      });
   }
} 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/vehicles/index.blade.php ENDPATH**/ ?>