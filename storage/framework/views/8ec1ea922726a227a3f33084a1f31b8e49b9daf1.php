
<?php $__env->startSection('content'); ?>
<!-- Transporter Managment -->
<section class="content-header">
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Edit Transporter Managment</h3>
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<a class="btn btn-block btn-primary btn-sm" href="<?php echo e(route('accounts.index')); ?>"> Back</a>
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
	<form action="<?php echo e(route('accounts.update',$account->id)); ?>" method="POST" autocomplete="off">
		<?php echo csrf_field(); ?>
		<?php echo method_field('PUT'); ?>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Edit Account</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="form-group col-md-6">
			                  <label>Transporter ID <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
			                  <input type="text " name="TransporterId" class="form-control form-control-sm" placeholder="Enter  Company Name"value="<?php echo e($account->TransporterId); ?>"  autocomplete="off">  
            				</div>
            				<div class="form-group col-md-6">
				                 <label>Transporter Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
		                  		<input type="text " name="CompanyName" class="form-control form-control-sm" placeholder="Enter TransporterId" value="<?php echo e($account->CompanyName); ?>" autocomplete="off">    
	                		</div>
						</div> 
			            <div class="form-group">
		                  <label>First Name</label>
		                  <input class="form-control form-control-sm " name="FirstName" value="<?php echo e($account->FirstName); ?>" placeholder="Enter  first Name" autocomplete="off">
		              	</div>
		              	<div class="form-group">
		                  <label>Last Name</label>
		                  <input class="form-control form-control-sm " name="LastName" value="<?php echo e($account->LastName); ?>"  placeholder="Enter  Last Name" autocomplete="off">
		              	</div>
		              	<div class="form-group">
		                  <label>Transporter Code</label>
		                  <input class="form-control form-control-sm "  name="AccountCode" value="<?php echo e($account->AccountCode); ?>" placeholder="Enter  Transporter Code " autocomplete="off">
		              	</div>
		              	<div class="form-group">
		                  <label>Contact No</label>
		                  <input class="form-control form-control-sm " name="ContactNo" value="<?php echo e($account->ContactNo); ?>" placeholder="Enter  Contact No" autocomplete="off">
		              	</div>
					</div>
					<div class="col-md-6">
		              	<div class="form-group">
		                  <label>Email</label>
		                  <input class="form-control form-control-sm " name="Email"  value="<?php echo e($account->Email); ?>" placeholder="Enter  Email " autocomplete="off">
		              	</div>
		              	<div class="form-group">
		                  <label>Address</label>
		                  <input class="form-control form-control-sm " name="Address" value="<?php echo e($account->Address); ?>" placeholder="Enter  Address " autocomplete="off">
		              	</div>
						<div class="form-group">
		                  <label>City</label>
		                  <input type="text" class="form-control form-control-sm " name="City" value="<?php echo e($account->City); ?>" placeholder="Enter  city" autocomplete="off">
                		</div>
                		<div class="form-group">
		                  <label>Pin Code</label>
		                  <input type="text" class="form-control form-control-sm " name="Pincode" value="<?php echo e($account->Pincode); ?>" placeholder="Enter  Pin Code" autocomplete="off">
               			</div>
               			<div class="form-group">
		                  <label>Notes</label>
		                  <textarea type="text" class="form-control form-control-sm " name="Notes" placeholder=""></textarea> 
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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/accounts/edit.blade.php ENDPATH**/ ?>