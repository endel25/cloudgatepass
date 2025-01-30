
<?php $__env->startSection('content'); ?>
<!-- Company Managment -->
<section class="content-header">
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Company Managment</h3>
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<a class="btn btn-block bg-gradient-primary btn-sm" href="<?php echo e(route('locations.index')); ?>"> Back</a>
				</ol>
			</div>
		</div>
	</div>
	<div class="container">
		<?php if($errors->any()): ?>
		<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="alert alert-danger" role="alert">
			<?php echo e($error); ?>

		</div>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		<?php endif; ?> 
	</div>
	<form action="<?php echo e(route('locations.update',$location->id)); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Edit Location</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
			        <div class="col-md-6">
			            <div class="form-group">
			               <div class="row">
			                  <label>Location Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
			                  &nbsp;
			                  &nbsp;
			                  <input class="form-group col-md-8" type="text" required="" name="LocationName" value="<?php echo e($location->LocationName); ?>" style="font-size: 14px;"   autocomplete="off">
			               </div>
			            </div>
			        </div>
			        <!-- <div class="col-md-6">
				        <div class="form-group">
			               <div class="row">
			                  <label>Company Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
			                  &nbsp;
			                  &nbsp;
			                   <select class="form-group col-md-8" name="CompanyName">
				                <?php $__currentLoopData = $location->companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
	                              <?php if($location->CompanyName == $companies->CompanyName): ?>
	                              {
	                                 <option selected="" value="<?php echo e($companies->CompanyName); ?>"><?php echo e($companies->CompanyName); ?></option>
	                              }
	                              <?php else: ?>
	                              {     
	                                 <option  value="<?php echo e($companies->CompanyName); ?>"><?php echo e($companies->CompanyName); ?></option>
	                              }                       
	                              <?php endif; ?>
	                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
				              </select>
				              
			                   <input class="form-group col-md-8" type="text" required="" name="CompanyName" style="font-size: 14px;"  autocomplete="off">
			               </div>
						</div>
			        </div> -->
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/locations/edit.blade.php ENDPATH**/ ?>