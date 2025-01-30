
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
            <h1>Driver Management Table</h1>
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
               <a class="btn btn-success" href="<?php echo e(route('drivers.create')); ?>">Create New Drive</a>
            </div>
            <?php endif; ?>
            <div class="card-body">
               <!-- <p class="alert alert-success col-md-6 "id="msg" style="display: none;">Driver Active</p>
                   <p class="alert alert-danger col-md-6 "id="dmsg" style="display: none;">Driver Deactive</p> -->
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
               <table id="example1" class="table table-bordered table-striped" style="height: 50px;">
                  <thead>
                     <tr>
                        <th>First Name </th>
                        <th>Last Name</th>
                        <th>license No</th>
                        <th>BlackListed</th>
                        <th>IsActive</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                      <?php $__currentLoopData = $drivers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $driver): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($driver->FirstName); ?></td>
                        <td><?php echo e($driver->LastName); ?></td>
                        <td><?php echo e($driver->licenseNo); ?></td>
                        <td style="text-align-last: center;" >
                           <label class="switch">
                             <input type="checkbox" <?php echo e(($driver->Active==0)? "" : "checked"); ?> onclick="Blacklist(<?php echo e($driver->id); ?>)" <?php echo e(($driver->IsActive==1)? "disabled" : ""); ?>>
                             <span class="slider round"></span>
                           </label>
                        </td>
                        <td style="text-align-last: center;" >
                           <label class="switch">
                             <input type="checkbox" <?php echo e(($driver->IsActive==0)? "" : "checked"); ?> onclick="Active(<?php echo e($driver->id); ?>)" <?php echo e(($driver->Active==1)? "disabled" : ""); ?>>
                             <span class="slider round"></span>
                           </label>
                        </td>
                        
                        <td><?php if($userrole_permissions->IsUpdate==1): ?>
                            <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('drivers.edit',$driver->id)); ?>"></a><?php endif; ?>
                             <?php if($userrole_permissions->IsDelete==1): ?> / <a class="fas <?php echo e($driver->drivers!=''?'' : 'fa-trash-alt'); ?> " href="drivers/<?php echo e($driver->id); ?>/delete"></a><?php endif; ?>
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
<?php $__env->startSection('UserScriptStr'); ?>
<script type="text/javascript">


  setInterval(function()
  { 
    window.location.reload();
  }, 60000);

</script>
<script>
function Blacklist(id) 
{
   let _token = $('meta[name="csrf-token"]').attr('content');

   if (id != "") 
   {
      $.ajax({
         type: 'POST',
         url: "<?php echo e(URL::to('/')); ?>/Driver/Blacklist",
         cache: false,
         data: {                     
            id: id,
            _token: _token
        },
         success: function(response){
            location.href = "<?php echo e(URL::to('/')); ?>/drivers";
         },
         error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            }
      });
   }
}
function Active(id) 
{
   let _token = $('meta[name="csrf-token"]').attr('content');

   if (id != "") 
   {
      $.ajax({
         type: 'POST',
         url: "<?php echo e(URL::to('/')); ?>/Active_Driver",
         cache: false,
         data: {                     
            id: id,
            _token: _token
        },
         success: function(response){
          if (response.success==true) 
            {
               // $('#msg').show().fadeOut(3000);
               toastr.success('Driver Active')
               location.href = "<?php echo e(URL::to('/')); ?>/drivers";
               
            }
            else{
               // $('#dmsg').show().fadeOut(3000);
               toastr.error('Driver DeActive')
               location.href = "<?php echo e(URL::to('/')); ?>/drivers";
               
            }
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/drivers/index.blade.php ENDPATH**/ ?>