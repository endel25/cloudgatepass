
<?php $__env->startSection('content'); ?>
<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 28px;
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
  height: 20px;
  width: 20px;
  left: 4px;
  bottom: 4px;
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
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
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
         <?php $__currentLoopData = $UserLocation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $UserLocations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
         <div class="col-sm-6">
            <h1>Loading Data #<?php echo e($UserLocations->Warehousenumber); ?></h1>
         </div>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
   </div>
</section>
<section class="content">
   <div class="container-fluid">
   <div class="row">
      <div class="col-12">
         <div class="card">
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

                        <th>Gatepass No</th>
                        <th>Vehicle No</th>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Weight</th>
                        <th>Actual Quantity</th>
                        <th>Actual  Weight</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                   <?php $__currentLoopData = $gatepass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gatepasses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                     <tr>
                        <form action="/Warehouse_loading" method="POST">
                           <input type="hidden" name="Sequenceno" value="<?php echo e($gatepasses->Sequenceno); ?>">
                           <td><input type="label" name="Gatepass_ID"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;"  value="GP<?php echo e($gatepasses->Gatepass_ID); ?>" readonly></td>
                           <td><input type="label" name="VehicleNo"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->VehicleNo); ?>" readonly></td>
                           <td><input type="label" name="ProductName"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->ProductName); ?>" readonly></td>
                           <td><input type="label" name="Quantity"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->Quantity); ?>" readonly></td>
                           <td><input type="label" name="Weight"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->Weight); ?>" readonly></td>
                           <td><input type="label" name="Actual_Quantity" required style="font-size: 14px; width:100%; text-align:center;" value="<?php echo e($gatepasses->Actual_Quantity); ?>" readonly></td>
                           <td><input type="label" name="Actual_Weight" required font-size: 14px; style="width:100%; text-align:center;"value="<?php echo e($gatepasses->Actual_Weight); ?>" readonly ></td>
                          
                           <td style="text-align-last: center;">
                              <?php if($gatepasses->LoadingStatus == "" && $gatepasses->Actual_Weight!=""): ?>
                              <button type="submit" name="LoadingStatus"  value="Loading" class="btn btn-block btn-outline-primary btn-xs">Loading</button>
                              <button type="submit" name="LoadingStatus"  value="Unloading" class="btn btn-block btn-outline-primary btn-xs">UnLoading</button></td> 
                              <?php elseif($gatepasses->LoadingStatus == "Unloading"): ?>
                              <button type="submit" name="LoadingStatus" value="Loading" class="btn btn-block btn-outline-primary btn-xs">Loading</button></td>
                              <?php elseif($gatepasses->LoadingStatus == "Loading" ): ?>
                              <button type="submit" name="LoadingStatus" value="Complate" class="btn btn-block btn-outline-primary btn-xs">Complate</button></td>
                              <?php elseif($gatepasses->LoadingStatus == "Complate" ): ?>
                                 <i class="fa fa-check"  aria-hidden="true"></i>
                              <?php endif; ?>
                        </form>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/gatepass/loading.blade.php ENDPATH**/ ?>