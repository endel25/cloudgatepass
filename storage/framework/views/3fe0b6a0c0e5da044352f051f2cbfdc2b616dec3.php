
<?php $__env->startSection('content'); ?>
<!-- Product Managment -->
<section class="content-header">
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Product Managment</h3>
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<a class="btn btn-block bg-gradient-primary btn-sm" href="<?php echo e(route('products.index')); ?>"> Back</a>
				</ol>
			</div>
		</div>
	</div>
	<form action="<?php echo e(route('products.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Add Product</h3>
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
								<label>Product Type</label>
								<select class="form-control select2" name="VehicleType">
					                <option  value="">Select VehicleType</option>
					              	<?php $__currentLoopData = $ptype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ptype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($ptype->FieldValue); ?>"><?php echo e($ptype->FieldValue); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					            </select>
							</div>
							<div class="form-group col-md-6">
								<label>Product Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
								<input class="form-control form-control-sm " required="" type="text"  name="ProductName" placeholder="Enter Product Name" autocomplete="off">
							</div>
						</div>
						
					</div>
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Product Code </label>
									<input class="form-control form-control-sm " type="text"  name="ProductCode" placeholder="Enter Product Code" autocomplete="off">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Product Variance </label>
									<input class="form-control form-control-sm " type="text"  name="ProductVariance" placeholder="Enter Product Code" autocomplete="off">
								</div>
							</div>
						</div>
					</div> 
					<div class="col-md-6">
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
									<label>Primary Unit <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> </label>
									<input class="form-control form-control-sm " type="text" required=""  name="ProductUnit" placeholder="Enter Product Unit" autocomplete="off">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<label>Secondary Unit <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
									<input class="form-control form-control-sm " required="" type="text"  name="ProductSecUnit" placeholder="Enter Secondary Unit" autocomplete="off">
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Notes</label>
							<textarea   name="Notes" class="form-control form-control-sm "></textarea> 
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
		<div class="container">
			<?php if($errors->any()): ?>
			<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="alert alert-danger" role="alert">
				<?php echo e($error); ?>

			</div>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			<?php endif; ?> 
		</div>
	</form>
</section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/products/create.blade.php ENDPATH**/ ?>