
<?php $__env->startSection('content'); ?>
<style type="text/css">
   .wmd-view-topscroll, .wmd-view {
    overflow-x: scroll;
    overflow-y: scroll;
    width: 100%;
    border: none 2px RED;
}

.wmd-view-topscroll { height: 20px; }
.wmd-view { height: 400px ; }
.scroll-div1 { 
    width: 100%; 
    overflow-x: scroll;
    overflow-y: hidden;
}
.scroll-div2 { 
    width: 1000px; 
    height:400px;
}
</style>
<section class="content-header">
   <div class="container-fluid">
      <div class="row mb-2">
         
         <div class="col-sm-12">
            <h1>Complete Loading Data Warehouse</h1>
         </div>
         
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
               <table id="example13" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Gatepass No</th>
                        <th>Vehicle No</th>
                        <th>Product Name</th>
                        <th>Transporter Name</th>
                        <th>Quantity</th>
                        <th>Assign Quantity</th>
                        <th>Actual Quantity</th>
                        <th>Action</th>
                        <th>User (Warehosue Incharge)</th>
                     </tr>
                  </thead>
                  <tbody> 
                     <?php $id="";
                     ?>
                   <?php $__currentLoopData = $gatepass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gatepasses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php if($gatepasses->User_incharge==$user_name[0]->FirstName || $UserRoleName[0]->UserRoleName=='WarehouseSupervisor'): ?>

                    <?php 

                     if($id!=$gatepasses->Gatepass_ID) { ?>
                     <tr>
                        <form action="<?php echo e(URL::to('/')); ?>/Warehouse_loading" method="POST">
                           <td style="display:none;"><input  name="OrderNo" value="<?php echo e($gatepasses->OrderNo); ?>"></td>
                           <td><button class="fa fa-plus-circle" id="showGP<?php echo e($gatepasses->Gatepass_ID); ?>" style="border: none; position: absolute" value="GP<?php echo e($gatepasses->Gatepass_ID); ?>" onclick="lmyFunction(this.value);"></button>
                              <button class="fa fa-minus-circle"  id="hideGP<?php echo e($gatepasses->Gatepass_ID); ?>" style="border: none; position: absolute ;display:none; " value="GP<?php echo e($gatepasses->Gatepass_ID); ?>" onclick="lhidemyFunction(this.value)"></button>
                              <input type="label" name="Gatepass_ID"  style="font-size: 14px; width:80%; text-align:center; border: none; background: white; flex: 0 0 0%; display: flex;"  value="GP<?php echo e($gatepasses->Gatepass_ID); ?>" readonly></td>
                           <td><input type="label" name="VehicleNo"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->VehicleNo); ?>" readonly></td>
                           <td><input type="label" name="ProductName"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->ProductName); ?>" readonly></td>
                           <td><input type="label" name="TransporterID"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->TransporterID); ?>" readonly></td>
                           <td><input type="hidden" class="Assign_Quantity" name="Assign_Quantity"  value="<?php echo e($gatepasses->Assign_Quantity); ?>"><?php echo e($gatepasses->Assign_Quantity); ?></td>
                           <td><input type="label" name="Quantity"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->Quantity); ?>" readonly></td>
                           <td><input type="label" name="Actual_Quantity" required style="font-size: 14px; width:100%; text-align:center;" value="<?php echo e($gatepasses->Actual_Quantity); ?>" readonly></td>
                           <td><button type="submit" name="LoadingStatus"  value="Loading" class="btn btn-block btn-outline-primary btn-xs">Edit</button></td>
                           <td><input type="label" name="whuser"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->User_incharge); ?>" readonly></td></td>
                           
                        </form>
                     </tr>

                   <?php } 

                    else
                     {   ?>

                     <tr  style="display: none;" id="<?php echo 'GP'.$gatepasses->Gatepass_ID;?>">
                        <form action="<?php echo e(URL::to('/')); ?>/Warehouse_loading" method="POST">
                           <td style="display:none;"><input  name="OrderNo" value="<?php echo e($gatepasses->OrderNo); ?>"></td>
                           <td><input type="label" name="Gatepass_ID"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;"  value="GP<?php echo e($gatepasses->Gatepass_ID); ?>" readonly></td>
                           <td><input type="label" name="VehicleNo"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->VehicleNo); ?>"  readonly></td>
                           <td><input type="label" name="ProductName"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->ProductName); ?>" readonly></td>
                           <td><input type="label" name="TransporterID"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->TransporterID); ?>" readonly></td>
                           <td><input type="label" name="Quantity"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->Quantity); ?>" readonly></td>
                           <td><input type="hidden" class="Assign_Quantity" name="Assign_Quantity"  value="<?php echo e($gatepasses->Assign_Quantity); ?>"><?php echo e($gatepasses->Assign_Quantity); ?></td>
                       
                           <td><input type="label" name="Actual_Quantity" readonly style="font-size: 14px; width:100%; text-align:center;" value="<?php echo e($gatepasses->Actual_Quantity); ?>" readonly></td>
                           <td><button type="submit" name="LoadingStatus"  value="Loading" class="btn btn-block btn-outline-primary btn-xs">Edit</button></td>
                           <td><input type="label" name="whuser"  style="font-size: 14px; width:100%; text-align:center; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($gatepasses->User_incharge); ?>" readonly></td></td>
                           
                        </form>
                     </tr>

                     <?php }
                     ?>
                    <?php endif; ?>
                    <?php $id=$gatepasses->Gatepass_ID;?>
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

  function lmyFunction(VehicleNumber) {
       event.preventDefault();
        var elms=document.querySelectorAll("[id='"+VehicleNumber+"']");
         if(elms.length < 1){

         console.log("none");
        }
         else{
        for(var i = 0; i < elms.length; i++) {
           elms[i].style.display=''; 
        }
           document.getElementById("show"+VehicleNumber).style.display="none";
            document.getElementById("hide"+VehicleNumber).style.display="";
         }
   }
   function lhidemyFunction(VehicleNumber) {
       event.preventDefault();
        var elms=document.querySelectorAll("[id='"+VehicleNumber+"']");
        if(elms.length < 1){

         console.log("none");
        }
        else{
          for(var i = 0; i < elms.length; i++) {
           elms[i].style.display='none'; 
        }
            document.getElementById("show"+VehicleNumber).style.display="";
            document.getElementById("hide"+VehicleNumber).style.display="none";
        }
       
        // $('#hide').show();
   }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/gatepass/complete.blade.php ENDPATH**/ ?>