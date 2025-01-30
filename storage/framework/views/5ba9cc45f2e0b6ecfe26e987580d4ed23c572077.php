
<?php $__env->startSection('content'); ?>
<style>
   .text-line {
   background-color: transparent;
   border-top: none;
   border-right: none;
   border-left: none;
   border-color: rgba(0,0,0,.2);
   font-size: smaller;
   padding: 1px;
   outline: none;
   }
</style>

<section class="content-header">
   <div class="container">
      <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger" role="alert">
         <?php echo e($error); ?>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?> 
   </div>
   <form action="<?php echo e(route('catch')); ?>" method="post">
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
               <div class="col-md-6">
                  <div class="form-group">
                  </div>
                  <div class="row">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">From:</label>
                        <input type="datetime-local"  name="From" value="<?php echo e(now()->setTimezone('T')->format('Y-m-d h:m:s')); ?>">
                     </div>
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     <div class="row">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">To:</label>
                        <input type="datetime-local"  name="To"  value="<?php echo e(now()->setTimezone('T')->format('Y-m-d h:m:s')); ?>">
                     </div>
                    </div>
                  </div>
                        <div class="row">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Vehicle No<sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <select class=" text-line form-control col-md-8"  name="VehicleNo" id="VehicleNo">
                        <option value=" ">Select Vehicle No</option>
                        <?php $__currentLoopData = $vehicle; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $vehicles): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($vehicles->VehicleNumber); ?>"><?php echo e($vehicles->VehicleNumber); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div>
                  <div  class="row">
                     <div class="form-group  col-md-4">
                        <label  style="font-size: 14px;" id="">Transaction<sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <select class="text-line form-control col-md-8" id="TransactionType" name="TransactionType">
                        <option  value="">Select Transaction</option>
                        <?php $__currentLoopData = $transaction; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transactions): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($transactions->TransactionType); ?>"><?php echo e($transactions->TransactionType); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
                  </div>
                     <div class="row">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Company Name<sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <select class=" text-line form-control col-md-8" id="CompanyName" name="CompanyName" >
                        <option value=" ">Select Company Name</option>
                        <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($companies->CompanyName); ?>"><?php echo e($companies->CompanyName); ?>

                        </option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select>
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
</section>
<script>
   $( document ).ready(function() {
   var load=document.getElementById("topmain");    
       load.style.display="none";
   });


</script>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
   setInterval(function()
      { 
         var dt = new Date($.now());
   
         var _day = dt.getDate();
         var _Month = dt.getMonth() + 1;
         var _Year = dt.getFullYear();
   
         var _Hour = dt.getHours();
         var _minute = dt.getMinutes();
         var _Secound = dt.getSeconds();
   
         var _days = _day>9?_day:"0"+_day;
         var _Months = _Month>9?_Month:"0"+_Month
         var _Hours = _Hour>9?_Hour:"0"+_Hour;
         var _minutes = _minute>9?_minute:"0"+_minute;
         var _Secounds = _Secound>9?_Secound:"0"+_Secound;
   
         var d=_days + "/" +_Months+ "/" +_Year+ " " +_Hours + ":" + _minutes + ":" + _Secounds;
         $("#gatepassDateTime").val(d);
   
      }, 1000);
   
</script>
<script>
   $("#VehicleNo").on("change", function(e) {
      e.preventDefault();
         var VehicleNo=$( "#VehicleNo" ).val();
         let _token = $('meta[name="csrf-token"]').attr('content');
         
         $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/Vehicle",
               data: {
                   VehicleNo: VehicleNo,
                   _token: _token
               },
               cache: false,
               success: function(response) {
                  
               }
         });
           
   });
</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/suppliyers/index.blade.php ENDPATH**/ ?>