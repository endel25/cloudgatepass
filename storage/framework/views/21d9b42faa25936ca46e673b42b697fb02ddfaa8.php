
<?php $__env->startSection('content'); ?>
<style>
   .table td {
  padding: 0.5rem;
  vertical-align: top;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}
</style>

<section class="content-header">
   <div class="mb-5 flex items-center justify-between">
      <h5 class="text-lg font-semibold dark:text-white-light">Directories Management Stack</h5>

      <a type="button" href="<?php echo e(route('appdirectory.create')); ?>" class="btn btn-sm btn-l btn-primary rounded-full">Add Directories</a>

   </div>
</section>
<section>
   <div class="panel">
      <table id="myTable" class="table-hover whitespace-nowrap">
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
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('Script'); ?>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\cloud-gatepass\resources\views/appdirectory/index.blade.php ENDPATH**/ ?>