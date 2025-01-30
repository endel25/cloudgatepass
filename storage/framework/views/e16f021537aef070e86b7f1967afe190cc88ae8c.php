
<?php $__env->startSection('content'); ?>
<section class="content-header">
   <div class="mb-2 flex items-center justify-between">
      <h5 class="text-lg font-semibold dark:text-white-light">Add Directories</h5>

      <a type="button" href="<?php echo e(route('appdirectory.index')); ?>" class="btn btn-sm btn-l btn-primary rounded-full">Back</a>

   </div>
</section>
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
<div class="panel">
	    <div class="flex flex-col md:flex-row gap-5 items-center  mx-auto">
	    	<label class="mb-0  sm:ltr:mr-2 rtl:ml-2">Vehicle Type</label>
	        <input type="text" placeholder="Enter Vehicle Type" id="VehicleType" class="form-input flex-1 text-xs" />
	        
	        <button id="vehicletype-submit" class="btn btn-outline-primary  rounded-full btn-sm ">Add</button>
	    </div>
</div>
<div class="panel">
	    <div class="flex flex-col md:flex-row gap-5 items-center  mx-auto">
	    	<label class="mb-0  sm:ltr:mr-2 rtl:ml-2">Product Type</label>
	        <input type="text" placeholder="Enter Product Type" id="ProductType" class="form-input flex-1 text-xs" />
	        
	        <button id="producttype-submit" class="btn btn-outline-primary  rounded-full btn-sm ">Add</button>
	    </div>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('Script'); ?>
<script>
	$.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
	$( "#vehicletype-submit" ).click(function() {
 	 	
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
		       		showMessage('VehicleType successfully added.','success');
					 $( "#VehicleType" ).val('')

	       }
	   		});
 	 	}
 	 	else
 	 	{
 	 		 showMessage('Field VehicleType is required','error');
 	 	}
    	
	});
	
	$( "#producttype-submit" ).click(function() {
 	 	
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
		       	showMessage('ProductType successfully added.','success');
				 	$( "#ProductType" ).val('');
			   }

	   		});
 	 	}
 	 	else
 	 	{
 	 		showMessage('Field ProductType is required','error');
 	 	}
    	
	});
</script>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\cloud-gatepass\resources\views/appdirectory/create.blade.php ENDPATH**/ ?>