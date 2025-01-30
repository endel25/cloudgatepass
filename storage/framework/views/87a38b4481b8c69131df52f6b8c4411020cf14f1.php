
<?php $__env->startSection('content'); ?>
<!-- Company Managment -->
<section class="content-header">
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Company Managment</h3>
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<a class="btn btn-block bg-gradient-primary btn-sm" href="<?php echo e(route('companies.index')); ?>"> Back</a>
				</ol>
			</div>
		</div>
	</div>
	<form action="<?php echo e(route('companies.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Add Company</h3>
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
	                  <label>Company Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
	                  &nbsp;
	                  &nbsp;
	                  <input class="form-group col-md-7" type="text" required="" name="CompanyName" style="font-size: 14px;" id=""  autocomplete="off">
	               </div>
	            </div>
	         </div>
	         <div class="col-md-6">
	            <div class="form-group">
	               <div class="row">
	                  <label>Location Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
	                  &nbsp;
	                  &nbsp;
	                 	<select class="form-group col-md-9" name="LocationId">
                        <option selected="selected" value="">Select LocationName</option> 
                         <?php $__currentLoopData = $location; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $locations): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($locations->id); ?>"><?php echo e($locations->LocationName); ?>

                           </option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select> 
	               </div>
	            </div>
	         </div>
         <!-- <div class="col-md-6">
            <div class="custom-control custom-checkbox">
               <input type="checkbox" class="custom-control-input"  name="SAPIntegration" id="chkPassport">
               <label class="custom-control-label" for="chkPassport">SAP Integrated</label>
            </div>
         </div> -->
	      </div>
			</div>
		</div>
		<div class="card card-default" id="ahide" style="display: none;">
			<div class="card-header">
				<h3 class="card-title">Field Mapping</h3>
			</div>
			<div class="card-body">
				<div class="row">
         <div class="col-md-6">
            <div class="form-group">
               <div class="row">
                  <label>API</label>
                  &nbsp;
                  &nbsp;
                  <input class="form-group col-md-9" type="text" name="API" style="font-size: 14px;"   autocomplete="off">
               </div>
            </div>
         </div>
	       </div>
        <div class="row">
        	<div class="col-md-4">
    			<div class="custom-control custom-checkbox">
                 <input type="checkbox" class="custom-control-input" name="Product" id="ProductChecked" >
                 <label class="custom-control-label" for="ProductChecked">Product</label>
          		</div>
        	</div>
        	<div class="col-md-4">
    			<div class="custom-control custom-checkbox">
                 <input type="checkbox" class="custom-control-input" name="Warehouse" id="WarehouseChecked" >
                 <label class="custom-control-label" for="WarehouseChecked">Warehouse</label>
          		</div>
        	</div>
        	<div class="">
    			<div class="custom-control custom-checkbox">
                 <input type="checkbox" class="custom-control-input" name="Quantity" id="QantityChecked">
                 <label class="custom-control-label" for="QantityChecked">Quantity</label>
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
<?php $__env->startSection('UserScriptStr'); ?>
<script >
 $("#chkPassport").click(function () {
            if ($(this).is(":checked")) 
            {
               $('#ahide').show();
            } else {
              $('#ahide').hide();
            }
        });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/companies/create.blade.php ENDPATH**/ ?>