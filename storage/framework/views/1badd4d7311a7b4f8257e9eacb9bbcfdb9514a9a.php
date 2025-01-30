
<?php $__env->startSection('content'); ?>
<section class="content-header">
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Appdirectory Managment</h3>
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<a class="btn btn-block btn-primary btn-sm" href="<?php echo e(route('appdirectory.index')); ?>">Back</a>
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
	<form>
		<div class="alert alert-success col-md-6" role="alert" style="display: none;" id="hide">Sucessfully Add VehicleType</div>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Add VehicleType</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="form-group col-md-6">
								<label>Vehicle Type</label>
								&nbsp;
								<input class="form-group form-group-sm col-md-9" type="text" id="VehicleType" style="font-size: 14px;" id=""  autocomplete="off">
							</div> 
							<div class="form-group col-md-6">
								<a class="btn btn-block btn-primary btn-xs col-md-2" id="vtype">Add</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="alert alert-success col-md-6" role="alert" style="display: none;" id="showw">Sucessfully Add Visit Purpose</div>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Add Visit Purpose</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="form-group col-md-6">
								<label>Visit Purpose</label>
								&nbsp;
								<input class="form-group form-group-sm col-md-9" type="text"  style="font-size: 14px;" id="VisitType"  autocomplete="off">
							</div> 
							<div class="form-group col-md-6">
								<a class="btn btn-block btn-primary btn-xs col-md-2" id="VisitFor">Add</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="alert alert-success col-md-6" role="alert" style="display: none;" id="showp">Sucessfully Add Product Type</div>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">AddProduct Type</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-12">
						<div class="row">
							<div class="form-group col-md-6">
								<label>Product Type</label>
								&nbsp;
								<input class="form-group form-group-sm col-md-9" type="text"  style="font-size: 14px;" id="ProductType"  autocomplete="off">
							</div> 
							<div class="form-group col-md-6">
								<a class="btn btn-block btn-primary btn-xs col-md-2" id="clickp">Add</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
	$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
	$( "#vtype" ).click(function() {
 	 	
 	 	var VehicleType= $( "#VehicleType" ).val()
 	 	let _token = $('meta[name="csrf-token"]').attr('content');
 	 	if (VehicleType!= "") 
 	 	{
 	 			$.ajax({
	       type: "POST",
	       url: "<?php echo e(URL::to('/')); ?>/addVehicleType",
	       data: {
	           VehicleType:VehicleType,
	           _token: _token
	       },
	       cache: false,
	       success: function(response) {
	       	
				
				 toastr.success("VehicleType successfully added");
				 $( "#VehicleType" ).val('')

       }
   		});
 	 	}
 	 	else
 	 	{
 	 		 toastr.error('VehicleType is not null');
 	 	}
    	
	});
	$( "#VisitFor" ).click(function() {
 	 	
 	 	var VisitType= $( "#VisitType" ).val()
 	 	let _token = $('meta[name="csrf-token"]').attr('content');
 	 	if (VisitType!= "") 
 	 	{
 	 			$.ajax({
	       type: "POST",
	       url: "<?php echo e(URL::to('/')); ?>/addVisitType",
	       data: {
	           VisitType:VisitType,
	           _token: _token
	       },
	       cache: false,
	       success: function(response) {

	       			toastr.success("VisitType successfully added");
				 			$( "#VisitType" ).val(' ');
				   }

   		});
 	 	}
 	 	else
 	 	{
 	 		 toastr.error('Visit Purpose is not null');
 	 	}
    	
	});
	$( "#clickp" ).click(function() {
 	 	
 	 	var ProductType= $( "#ProductType" ).val()
 	 	let _token = $('meta[name="csrf-token"]').attr('content');
 	 	if (ProductType!= "") 
 	 	{
	 	 	$.ajax({
		       type: "POST",
		       url: "<?php echo e(URL::to('/')); ?>/addProductType",
		       data: {
		           ProductType:ProductType,
		           _token: _token
		       },
		       cache: false,
		       success: function(response) {

		   		toastr.success("ProductType successfully added");
				 	$( "#ProductType" ).val(' ');
			   }

	   		});
 	 	}
 	 	else
 	 	{
 	 		toastr.error('Product Type  is not null');
 	 	}
    	
	});
</script>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/appdirectory/create.blade.php ENDPATH**/ ?>