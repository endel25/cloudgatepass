
<?php $__env->startSection('content'); ?>
<style>
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
            <h1>Directory Management Table</h1>
         </div>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
            <div class="card-header">
               <ol class="float-sm-right">
               <a class="btn btn-success" href="<?php echo e(route('appdirectory.create')); ?>">Add Directory</a>
            </div>
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
                        <th>Field Namer</th>
                        <th>Field Value</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $__currentLoopData = $appdirectory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $appdirectory): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <tr>
                        <td><?php echo e($appdirectory->FieldName); ?></td>
                        <td><?php echo e($appdirectory->FieldValue); ?></td>
                        <td><a class="fas fa-trash-alt" href="" onclick="DeleteAD(<?php echo e($appdirectory->id); ?>)"></a>
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
  }, 300000);

</script>


<script>
function DeleteAD(id) 
{
   let _token = $('meta[name="csrf-token"]').attr('content');

   if (id != "") 
   {
      $.ajax({
         type: 'POST',
         url: "<?php echo e(URL::to('/')); ?>/DeleteAD",
         cache: false,
         data: {                     
            id: id,
            _token: _token
        },
         success: function(response){
           toastr.error("Appdirectory Delete successfully");
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/appdirectory/index.blade.php ENDPATH**/ ?>