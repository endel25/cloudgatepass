<?php $__env->startSection('content'); ?>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-12">
        <h4 class="m-0 text-dark">Tarmal Group</h4>
      </div>
  </div>
</div>
</div>
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3 col-6">
        <!-- small box -->
        <div onclick="document.location='/PendingEntry';" class="small-box bg-secondary" style="cursor: pointer;">
          <div class="inner">
            <h7><?php echo e(Session::get('Pending_Entry')); ?></h7>
            <p>Pending Entry</p>
          </div>
          <div class="icon">
            <i> <img  class="bg-success" src="<?php echo e(asset('dist/img/Pending.png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.3;"></i>
          </div>
          <!-- <a href="TABLE?ID="PENDING" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
      <!-- ./col -->
      <div onclick="document.location='/EntryApproved';" class="col-lg-3 col-6" style="cursor: pointer;">
        <!-- small box<sup style="font-size: 20px"></sup> -->
        <div class="small-box bg-secondary" style="cursor: pointer;">
          <div class="inner">
            <h7><?php echo e(Session::get('Entry_Approved')); ?></h7>
            <p>Entry Approved</p>
          </div>
          <div class="icon">
            <i> <img  class="bg-success" src="<?php echo e(asset('dist/img/Complate (1).png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.3;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div onclick="document.location='/Loading';" class="col-lg-3 col-6" style="cursor: pointer;">
        <!-- small box -->
        <div class="small-box bg-secondary" style="cursor: pointer;">
          <div class="inner">
            <h7><?php echo e(Session::get('Loading')); ?></h7>
            <p>Loading</p>
          </div>
          <div class="icon">
            <i> <img  src="<?php echo e(asset('dist/img/Loading.png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.4;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
      <div onclick="document.location='/GatepassIssued';" class="col-lg-3 col-6" style="cursor: pointer;">
        <!-- small box -->
        <div class="small-box bg-secondary" style="cursor: pointer;">
          <div class="inner">
            <h7><?php echo e(Session::get('Gatepass_Issued')); ?></h7>
            <p>Gatepass Issued</p>
          </div>
          <div class="icon">
           <i> <img  src="<?php echo e(asset('dist/img/Entry approved.png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.4;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      
      <!-- ./col -->
      <div onclick="document.location='/ExitApproved';" class="col-lg-3 col-6" style="cursor: pointer;">
        <!-- small box -->
        <div class="small-box bg-secondary" style="cursor: pointer;">
          <div class="inner">
            <h7><?php echo e(Session::get('Exit_Approved')); ?></h7>
            <p>Exit Approved</p>
          </div>
          <div class="icon">
            <i> <img  src="<?php echo e(asset('dist/img/Exit approval.png')); ?>" style="height:20%; width: 20%;margin-left: 80%; margin-bottom: 30%; opacity: 0.4;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <!-- ./col -->
    </div>
    <div class="row">
      <section class="col-md-6">
        <div class="card">
            <div class="card-header" style="height: 50px;" >
               Accepted Vehicle
                <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if($ups->IsCreate==1): ?>
               <ol class="float-sm-right" >
                  <a class="btn btn-block btn-secondary btn-sm" href="<?php echo e(route('gatepass.create')); ?>">Create Gate Pass</a>
               </ol>
               <?php endif; ?> 
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Gatepass No</th>
                        <th>Vehicle No</th>
                        <th>VisitFor</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody> 
                   <?php $__currentLoopData = $gatepass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gatepasses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                     <?php if($gatepasses->Status == 'Entry Approved' ||  $gatepasses->Status== 'Pending Entry' ): ?>
                     <tr>
                        <td>GP0<?php echo e($gatepasses->id); ?></td>
                        <td><?php echo e($gatepasses->VehicleNo); ?></td>
                        <td><?php echo e($gatepasses->VisitFor); ?></td>
                        <td><?php echo e($gatepasses->Status); ?></td>
                        <td> 
                          <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ups->IsUpdate==1): ?>
                             <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('gatepass.edit',$gatepasses->id)); ?>"></a> <?php endif; ?>
                            <?php if($ups->IsDelete==1): ?> 
                              <a class="fas fa-trash-alt" href="gatepass/<?php echo e($gatepasses->id); ?>/delete"></a>
                            <?php endif; ?>
                            <a class="fas fa-print" title="PRINT"  href="<?php echo e($gatepasses->id); ?>/invoice"></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                     </tr>
                    <?php endif; ?> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </tbody>
              </table>
            </div>
        </div>
      </section>
      <section class="col-md-6">
        <div class="card">
            <div class="card-header"style="height: 50px;">
               Active Vehicle
            </div>
            <div class="card-body">
              <input type="hidden" id="" name="">
              <table id="example3" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Gatepass No</th>
                        <th>Vehicle No</th>
                        <th>VisitFor</th>
                        <th>Status</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                <?php $__currentLoopData = $Exit24; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gatepasses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                     <?php if($gatepasses->Status == 'Gatepass Issued' || $gatepasses->Status == 'Loading' ||  $gatepasses->Status== 'Exit Approved' ): ?>
                     <tr>
                        <td>GP0<?php echo e($gatepasses->id); ?></td>
                        <td><?php echo e($gatepasses->VehicleNo); ?></td>
                        <td><?php echo e($gatepasses->VisitFor); ?></td>
                        <td><?php echo e($gatepasses->Status); ?></td>
                        <td> 
                          <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($ups->IsUpdate==1): ?>
                             <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('gatepass.edit',$gatepasses->id)); ?>"></a> <?php endif; ?>
                            <?php if($ups->IsDelete==1): ?> 
                              <a class="fas fa-trash-alt" href="gatepass/<?php echo e($gatepasses->id); ?>/delete"></a>
                            <?php endif; ?>
                            <a class="fas fa-print" title="PRINT"  href="<?php echo e($gatepasses->id); ?>/invoice"></a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                     </tr>
                    <?php endif; ?> 
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                  
                  </tbody>
              </table>
            </div>
        </div>
      </section>
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/home.blade.php ENDPATH**/ ?>