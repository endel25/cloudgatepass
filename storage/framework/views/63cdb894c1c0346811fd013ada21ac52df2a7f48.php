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
      <?php if($userrole_permissions_status[0]->IsRead==1): ?>
      <div class="col-lg-3 col-6">
        <!-- small box -->
        
        <div <?php if($userrole_permissions_status[0]->IsRead==1 || $userrole_permissions_status[1]->IsRead==1): ?> onclick="document.location='<?php echo e(URL::to('/')); ?>/PendingEntry';" style="cursor: pointer;" <?php endif; ?> class="small-box bg-secondary" >
        
          <div class="inner">
            <h7><?php echo e(Session::get('Pending_Entry')); ?></h7>
            <p>Pending Entry</p>
          </div>
          <div class="icon">
            <i> <img  class="" src="<?php echo e(asset('dist/img/Pending.png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.3;"></i>
          </div>
          <!-- <a href="TABLE?ID="PENDING" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>

      </div>
      <?php endif; ?>
       <?php if($userrole_permissions_status[1]->IsRead==1): ?>
      <div <?php if($userrole_permissions_status[1]->IsRead==1 || $userrole_permissions_status[2]->IsRead==1): ?> onclick="document.location='<?php echo e(URL::to('/')); ?>/EntryApproved';" style="cursor: pointer;" <?php endif; ?> class="col-lg-3 col-6" >
        <!-- small box<sup style="font-size: 20px"></sup> -->
        <div class="small-box bg-secondary" >
          <div class="inner">
            <h7><?php echo e(Session::get('Entry_Approved')); ?></h7>
            <p>Entry Approved</p>
          </div>
          <div class="icon">
            <i> <img  class="" src="<?php echo e(asset('dist/img/Complate (1).png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.3;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <?php endif; ?>     
       <?php if($userrole_permissions_status[2]->IsRead==1): ?>
      <div <?php if($userrole_permissions_status[2]->IsRead==1 || $userrole_permissions_status[4]->IsRead==1): ?>onclick="document.location='<?php echo e(URL::to('/')); ?>/Loading';" style="cursor: pointer;" <?php endif; ?> class="col-lg-3 col-6" >
        <!-- small box -->
        <div class="small-box bg-secondary">
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
      <?php endif; ?>
      <?php if($userrole_permissions_status[3]->IsRead==1): ?>
      <div <?php if($userrole_permissions_status[3]->IsRead==1 || $userrole_permissions_status[4]->IsRead==1): ?>onclick="document.location='<?php echo e(URL::to('/')); ?>/OffLoading';" style="cursor: pointer;" <?php endif; ?> class="col-lg-3 col-6" >
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h7><?php echo e(Session::get('OffLoading')); ?></h7>
            <p>OffLoading</p>
          </div>
          <div class="icon">
            <i> <img  src="<?php echo e(asset('dist/img/Loading.png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.4;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <?php endif; ?>
      <?php if($userrole_permissions_status[7]->IsRead==1): ?>
      <div  onclick="document.location='<?php echo e(URL::to('/')); ?>/Verify';" style="cursor: pointer;" class="col-lg-3 col-6" >
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h7><?php echo e(Session::get('Ve_rify')); ?></h7>
            <p>Verify</p>
          </div>
          <div class="icon">
            <i> <img  src="<?php echo e(asset('dist/img/Verified.png')); ?>" style="height:20%; width: 20%; margin-left: 80%; margin-bottom: 30%; opacity: 0.4;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <?php endif; ?>
      <?php if($userrole_permissions_status[4]->IsRead==1): ?>
      <div <?php if($userrole_permissions_status[4]->IsRead==1 || $userrole_permissions_status[5]->IsRead==1): ?>onclick="document.location='<?php echo e(URL::to('/')); ?>/GatepassIssued';" style="cursor: pointer;" <?php endif; ?> class="col-lg-3 col-6" >
        <!-- small box -->
        <div class="small-box bg-secondary">
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
      <?php endif; ?>
      <?php if($userrole_permissions_status[5]->IsRead==1): ?>
      <div <?php if($userrole_permissions_status[5]->IsRead==1): ?>onclick="document.location='<?php echo e(URL::to('/')); ?>/ExitApproved';" style="cursor: pointer;"<?php endif; ?> class="col-lg-3 col-6" >
        <!-- small box -->
        <div class="small-box bg-secondary">
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
      <?php endif; ?>
      <?php if($userrole_permissions_status[6]->IsRead==1): ?>
      <div  onclick="document.location='<?php echo e(URL::to('/')); ?>/Rejected';" style="cursor: pointer;" class="col-lg-3 col-6" >
        <!-- small box -->
        <div class="small-box bg-secondary">
          <div class="inner">
            <h7><?php echo e(Session::get('Rejected_S')); ?></h7>
            <p>Rejected</p>
          </div>
          <div class="icon">
            <i> <img  src="<?php echo e(asset('dist/img/Rejected.png')); ?>" style="height:20%; width: 20%;margin-left: 80%; margin-bottom: 30%; opacity: 0.4;"></i>
          </div>
          <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
        </div>
      </div>
      <?php endif; ?>
    </div>
    <div class="row">
      <section class="col-md-6">
        <div class="card">
            <div class="card-header" style="height: 50px;" >
               <b>Pending/Entry Approved </b> Vehicle
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
                        <th>Status</th>
                        <th>Date-Time</th>
                        <!-- <th>VisitFor</th> -->
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                   <?php $__currentLoopData = $gatepass; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gatepasses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                    <?php if($name_u != 'Admin'): ?>
                      <?php if($gatepasses->CompanyID == $Company_Name): ?>
                        <?php if($gatepasses->Status == 'Entry Approved' || $gatepasses->Status== 'Pending Entry'): ?>
                           <tr>
                              <th>GP<?php
                            if ($gatepasses->id<10) {
                              echo "0".$gatepasses->id;
                            }
                            else
                            {
                              echo $gatepasses->id;
                            }
                            ?>
                          </th>
                              <td><?php echo e($gatepasses->VehicleNo); ?></td>
                              <td><?php echo e($gatepasses->Status); ?></td>
                              <td><?php echo e($gatepasses->GatepassEntryTime); ?></td>

                              <!-- <td><?php echo e($gatepasses->VisitFor); ?></td> -->
                              <td> 
                                <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($ups->IsUpdate==1): ?>
                                   <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('gatepass.edit',$gatepasses->id)); ?>"></a>  <?php endif; ?>
                                  <?php if($ups->IsDelete==1): ?> 
                                    <a class="fas fa-trash-alt" href="gatepass/<?php echo e($gatepasses->id); ?>/delete"></a>
                                  <?php endif; ?> 
                                  &nbsp;&nbsp;&nbsp;
                                      <a class="fas fa-print" title="PRINT"  href="<?php echo e($gatepasses->id); ?>/invoice"></a>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </td>
                           </tr>
                        <?php endif; ?>
                      <?php endif; ?> 
                    <?php else: ?>
                       <?php if($gatepasses->Status == 'Entry Approved' || $gatepasses->Status== 'Pending Entry'): ?>
                           <tr>
                                        <th>GP<?php
                            if ($gatepasses->id<10) {
                              echo "0".$gatepasses->id;
                            }
                            else
                            {
                              echo $gatepasses->id;
                            }
                            ?>
                          </th>
                              <td><?php echo e($gatepasses->VehicleNo); ?></td>
                              <td><?php echo e($gatepasses->Status); ?></td>
                              <td><?php echo e($gatepasses->GatepassEntryTime); ?></td>
                              <td> 
                                <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <?php if($ups->IsUpdate==1): ?>
                                   <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('gatepass.edit',$gatepasses->id)); ?>"></a> <?php endif; ?>
                                  <?php if($ups->IsDelete==1): ?> 
                                  &nbsp;
                                    <a class="fas fa-trash-alt" href="gatepass/<?php echo e($gatepasses->id); ?>/delete"></a>
                                  <?php endif; ?>
                                  &nbsp;&nbsp;&nbsp;
                                  <a class="fas fa-print" title="PRINT"  href="<?php echo e($gatepasses->id); ?>/invoice"></a>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </td>
                           </tr>
                        <?php endif; ?>
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
              <b>Loading/OffLoading/Issued/Exit Approved</b> Vehicle
            </div>
            <div class="card-body">
              <input type="hidden" id="" name="">
              <table id="example3" class="table table-bordered table-striped">
                  <thead>
                     <tr>
                        <th>Gatepass No</th>
                        <th>Vehicle No</th>
                        <th>Status</th>
                        <th>Date-Time</th>
                        <!-- <th>VisitFor</th> -->
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                <?php $__currentLoopData = $Exit24; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gatepasses): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                  <?php if($name_u != 'Admin'): ?>
                      <?php if($gatepasses->CompanyID == $Company_Name): ?>
                        <?php if($gatepasses->Status == 'Gatepass Issued' || $gatepasses->Status == 'Loading' || $gatepasses->Status == 'Verify' ||  $gatepasses->Status== 'Exit Approved' ): ?>
                         <tr>
                                        <th>GP<?php
                            if ($gatepasses->id<10) {
                              echo "0".$gatepasses->id;
                            }
                            else
                            {
                              echo $gatepasses->id;
                            }
                            ?>
                          </th>
                            <td><?php echo e($gatepasses->VehicleNo); ?></td>
                            <td><?php echo e($gatepasses->Status); ?></td>
                            <td><?php echo e($gatepasses->GatepassEntryTime); ?></td>
                            <td> 
                              <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ups->IsUpdate==1): ?>
                                 <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('gatepass.edit',$gatepasses->id)); ?>"></a> <?php endif; ?>
                                <?php if($ups->IsDelete==1): ?> 
                                &nbsp;
                                  <a class="fas fa-trash-alt" href="gatepass/<?php echo e($gatepasses->id); ?>/delete"></a>
                                <?php endif; ?>
                                &nbsp;&nbsp;&nbsp;
                                <a class="fas fa-print" title="PRINT"  href="<?php echo e($gatepasses->id); ?>/invoice"></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                         </tr>
                        <?php endif; ?> 
                      <?php endif; ?>
                  <?php else: ?>
                    <?php if($gatepasses->Status == 'Gatepass Issued' || $gatepasses->Status == 'Loading' ||  $gatepasses->Status== 'Exit Approved' || $gatepasses->Status == 'Verify' ): ?>
                         <tr>
                                       <th>GP<?php
                            if ($gatepasses->id<10) {
                              echo "0".$gatepasses->id;
                            }
                            else
                            {
                              echo $gatepasses->id;
                            }
                            ?>
                          </th>
                            <td><?php echo e($gatepasses->VehicleNo); ?></td>
                            <td><?php echo e($gatepasses->Status); ?></td>
                            <td><?php echo e($gatepasses->GatepassEntryTime); ?></td>
                            <td> 
                              <?php $__currentLoopData = $up; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ups): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($ups->IsUpdate==1): ?>
                                 <a class="fas fa-edit" title="EDIT"  href="<?php echo e(route('gatepass.edit',$gatepasses->id)); ?>"></a> <?php endif; ?>
                                <?php if($ups->IsDelete==1): ?> 
                                &nbsp;&nbsp;&nbsp;
                                  <a class="fas fa-trash-alt" href="gatepass/<?php echo e($gatepasses->id); ?>/delete"></a>
                                <?php endif; ?>
                                &nbsp;&nbsp;&nbsp;
                                <a class="fas fa-print" title="PRINT"  href="<?php echo e($gatepasses->id); ?>/invoice"></a>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                         </tr>
                        <?php endif; ?> 
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
  }, 120000);

</script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/home.blade.php ENDPATH**/ ?>