
<?php $__env->startSection('content'); ?>
<!-- Vehicle Managment -->
<style>
   .switch {
     position: relative;
     display: inline-block;
     width: 40px;
     height: 20px;
   }

   .switch input { 
     opacity: 0;
     width: 0;
     height: 0;
   }

   .slider {
     position: absolute;
     cursor: pointer;
     top: 0;
     left: 0;
     right: 0;
     bottom: 0;
     background-color: #ccc;
     -webkit-transition: .4s;
     transition: .4s;
   }

   .slider:before {
     position: absolute;
     content: "";
     height: 18px;
     width: 18px;
     left: 2px;
     bottom: 2px;
     background-color: white;
     -webkit-transition: .4s;
     transition: .4s;
   }

   input:checked + .slider {
     background-color: #2196F3;
   }

   input:focus + .slider {
     box-shadow: 0 0 1px #2196F3;
   }

   input:checked + .slider:before {
     -webkit-transform: translateX(18px);
     -ms-transform: translateX(18px);
     transform: translateX(18px);
   }

   /* Rounded sliders */
   .slider.round {
     border-radius: 10px;
   }

   .slider.round:before {
     border-radius: 50%;
   }
   .table th,
.table td {
  padding: 0.5rem;
  vertical-align: top;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}
</style>
<section class="content-header">
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Vehicle Managment</h3>
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<a class="btn btn-block btn-primary btn-sm" href="<?php echo e(route('vehicles.index')); ?>"> Back</a>
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
		</div>
	<form action="<?php echo e(route('vehicles.store')); ?>" method="POST">
		<?php echo csrf_field(); ?>
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Add Vehicle</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="row">
							<div class="form-group col-md-9">
								<label>Vehicle Type</label>
								<select class="form-control select2" name="VehicleType">
		              <option  value="">Select VehicleType</option>
		              <?php $__currentLoopData = $Vtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Vtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
									<option value="<?php echo e($Vtype->FieldValue); ?>"><?php echo e($Vtype->FieldValue); ?></option>
									<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		            </select>
							</div>
							<table class="col-md-2">
								<thead>
									<tr>
									<th colspan="2"  style="text-align-last: center;">Trailer</th>
								</tr>
								</thead>
								<tbody>
									<td style="text-align-last: center;" >
                     <label class="switch">
                       <input type="checkbox" id="Trailercheck" name="IsTrailar">
                       <span class="slider round"></span>
                     </label>
                  </td>
								</tbody>
							</table>
						</div> 
						<div class="form-group" id="Noramalshow">
							<label>Vehicle No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
							<input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="VehicleNumber" placeholder="" autocomplete="off">
						</div>
						<div class="row" id="Primeshow" style="display: none;">
							<div class="form-group col-md-6">
								<label>Vehicle No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
								<input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="T_VehicleNumber" placeholder="" autocomplete="off">
							</div>
							<div class="form-group col-md-6">
								<label>Trailer  No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
								<input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="TrailerNumber" placeholder="" autocomplete="off">
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Transporter</label>
							<select class="form-control select2" name="AccountID">
                	<option  value="">Select Transporter</option>
									<?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <option value="<?php echo e($account->id); ?>"><?php echo e($account->CompanyName); ?></option>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            	</select>
						</div>
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

	</form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
	$( "#Trailercheck" ).click(function() {
 	 	
 	 	var yes = document.getElementById("Trailercheck");  
  
 	 	if (yes.checked == true) 
 	 	{
 	 		$( "#Primeshow" ).show()
 	 		$( "#Noramalshow" ).hide()
 	 	}
 	 	else
 	 	{
 	 		$( "#Primeshow" ).hide()
 	 		$( "#Noramalshow" ).show()
 	 	} 	
	});
</script>
<?php $__env->stopSection(); ?>
	
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/vehicles/create.blade.php ENDPATH**/ ?>