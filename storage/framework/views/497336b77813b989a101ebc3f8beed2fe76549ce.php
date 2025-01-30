
<?php $__env->startSection('content'); ?>
<section class="content-header">
   <div class="mb-2 flex items-center justify-between">
      <h5 class="text-lg font-semibold dark:text-white-light">Add Transporter</h5>

      <a type="button" href="<?php echo e(route('transporter.index')); ?>" class="btn btn-sm btn-l btn-primary rounded-full">Back</a>

   </div>
</section>
<div class="container">
	<?php if($errors->any()): ?>
	<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<div class="alert alert-danger" role="alert">
			<?php echo e($error); ?>

		</div>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	<?php endif; ?> 
	<?php if(session('error')): ?>
    	<div class="alert alert-danger"><?php echo e(session('error')); ?></div>
 	<?php endif; ?>
</div>
<section class="content" >
	<div class="panel">
		<form class="space-y-5" id="myForm" action="<?php echo e(route('transporter.update',$transporter->id)); ?>" method="POST">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				<div class="flex sm:flex-row flex-col" id="TransporterCodeField">
				    <label for="TransporterCode" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Transporter Code</label>
				    <input type="text" placeholder="Enter Transporter Code" class="text-xs form-input flex-1" name="TransporterCode" id="TransporterCode" value="<?php echo e($transporter->TransporterCode); ?>" />
				</div>
			    <div class="flex sm:flex-row flex-col" id="TransporterNameField">
			        <label for="TransporterName" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Transporter Name</label>
			        <input type="text" placeholder="Enter Transporter Name" class="text-xs form-input flex-1" name="TransporterName" id="TransporterName" value="<?php echo e($transporter->TransporterName); ?>"/>
			    </div>
			    <div class="flex sm:flex-row flex-col" id="ContactNoField">
			        <label for="ContactNo" class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Contact No.</label>
        			<input id="ContactNo" type="text" placeholder="___-_______" class="text-xs form-input flex-1" x-mask="999-9999999" name="ContactNo" value="<?php echo e($transporter->ContactNo); ?>"/>
			    </div>
			    <div class="flex sm:flex-row flex-col" id="EmailField">
			        <label  class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Email</label>
			        <input type="Email" placeholder="Enter Email" class="text-xs form-input flex-1" name="Email" id="Email" value="<?php echo e($transporter->Email); ?>"/>
			    </div>
			     <div class="flex sm:flex-row flex-col" id="AddressField">
			        <label  class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Address</label>
			        <textarea rows="3" placeholder="Enter Address" class="flex-1 text-xs form-textarea min-h-[130px] resize-none" name="Address" id="Address"><?php echo e($transporter->Address); ?></textarea>
			    </div>
			    <div class="flex sm:flex-row flex-col">
			        <label  class="mb-0 sm:w-1/4 sm:ltr:mr-2 rtl:ml-2">Notes</label>
			       	<textarea class="text-xs flex-1 form-textarea resize-none" name="Notes"><?php echo e($transporter->Notes); ?></textarea>
			    </div>
				<button type="submit" id="submitBtn" class="btn btn-outline-primary btn-sm rounded-full !mt-6">Update</button>
		</form>
	</div>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('Script'); ?>
<script>
	$("#myForm").submit(function(event) {
		  event.preventDefault();
		  var TransporterCode = $("#TransporterCode").val();
		  var TransporterName = $("#TransporterName").val();
		  if (!TransporterCode) {
		      $("#TransporterCodeField").addClass("has-error");
		      showMessage('Field TransporterCode is required','error');
		  } 
		  else if (!TransporterName) {
		       $("#TransporterNameField").addClass("has-error");
		      showMessage('Field TransporterName is required','error');
		  }
		  else {
		      showMessage('Transporter updated successfully.','success');
		      $("#myForm").unbind('submit').submit();
		  }
	});
 	$('#TransporterCode').on('input', function() {
    	$('#TransporterCodeField').removeClass('has-error').addClass('has-success');
	});
	$('#TransporterName').on('input', function() {
    	$('#TransporterNameField').removeClass('has-error').addClass('has-success');
	});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\cloud-gatepass\resources\views/transporters/edit.blade.php ENDPATH**/ ?>