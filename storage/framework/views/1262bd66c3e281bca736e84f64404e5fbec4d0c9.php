
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
            <h1>SalesOrder Management Table</h1>
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
               <a class="btn btn-success" href="<?php echo e(route('salesorder.create')); ?>">Add SalesOrder</a>
            </div>
            <div class="card-body">
               <?php if($message = Session::get('success')): ?>
                <script type="text/javascript">
                   toastr.error(<?php echo e($message); ?>).fadeOut(6000);
                </script>
               <div class="alert alert-success">
                  <p><?php echo e($message); ?></p>
               </div>
               <?php endif; ?> 
                <?php if($message = Session::get('danger')): ?>
               <div class="alert alert-danger">
                  <p id="msg"><?php echo e($message); ?></p>
               </div>
               <?php endif; ?> 
               <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th >SalesOrder No</th>
                        <th>Party Name</th>
                        <th>Product Name</th>
                        <th>Weight</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $check=''; ?>
                     <?php $__currentLoopData = $Salesorder; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Salesorder): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                     <?php if($Salesorder->PartyName != $check ): ?>
                     <tr>
                        <td ><i class="fa fa-plus-circle " onclick="myFunction(<?php echo e($Salesorder->SalesOrderNo); ?>)" aria-hidden="true" style="color: blue;"></i><?php echo e($Salesorder->SalesOrderNo); ?></td>
                        <td><?php echo e($Salesorder->PartyName); ?></td>
                        <td><?php echo e($Salesorder->ProductName_ID); ?></td>
                        <td><?php echo e($Salesorder->Product_Weight); ?></td>
                        <td> <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('salesorder.edit',$Salesorder->id)); ?>"></a>/<a class="fas fa-trash-alt" href="Salesorder/<?php echo e($Salesorder->id); ?>/delete"></a>
                        </td>
                        <?php $check=$check.$Salesorder->PartyName; ?>
                     </tr>
                     <?php else: ?>
                     <tr  id="val">
                        <td ><?php echo e($Salesorder->SalesOrderNo); ?></td>
                        <td><?php echo e($Salesorder->PartyName); ?></td>
                        <td><?php echo e($Salesorder->ProductName_ID); ?></td>
                        <td><?php echo e($Salesorder->Product_Weight); ?></td>
                        <td> 
                        </td>

                     </tr>  
                      <?php $check=''; ?>    
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
<?php $__env->startSection('UserScriptStr'); ?>
<script>
$( document ).ready(function() {
   $('#val').hide();
});
var counter= 0;
$('.header').click(function(){
   if (counter % 2 == 0) 
   {
      $('#val').show();
   }
   else{
    $('#val').hide();  
   }
   
 counter++;
});

function myFunction(id) {
  if (counter % 2 == 0) 
   {
      $('#val').show();
   }
   else{
    $('#val').hide();  
   }
   
 counter++;
}

</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/salesorder/index.blade.php ENDPATH**/ ?>