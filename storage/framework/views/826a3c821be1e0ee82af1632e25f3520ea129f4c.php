
<?php $__env->startSection('content'); ?>
<!-- Driver Managment -->
<style>
#CamScan{
 width: 100%;
 height: 189px;
 border: 1px solid black;
}
#LicenseScan{
 width:100%;
 height: 189px;
 border: 1px solid black;
}
#my_camera{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-bottom: ;
}
#my_camera1{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-bottom: ;
}
.myimg{
	 height: inherit;
	 width:inherit;
}
#hidemob{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-bottom: ;
}
#hide_mob{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-bottom: ;
}
</style>
<section class="content-header">
	<div class="card card-default">
		<div class="card-header">
			<h3 class="card-title">Edit Driver Managment</h3>
			<div class="card-tools">
				<ol class="breadcrumb float-sm-right">
					<a class="btn btn-block btn-primary btn-sm" href="<?php echo e(route('drivers.index')); ?>"> Back</a>
				</ol>
			</div>
		</div>
	</div>
	<!-- <form action="<?php echo e(route('drivers.update',$driver->id)); ?>"> -->
		<div class="card card-default">
			<div class="card-header">
				<h3 class="card-title">Edit Driver</h3>
				<div class="card-tools">
					<button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
					<button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
				</div>
			</div>
			<div class="card-body">
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
							<input type="hidden" name="" id="driverid" value="<?php echo e($driver->id); ?>">
							<label>First Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
							<input class="form-control form-control-sm " type="text" value="<?php echo e($driver->FirstName); ?>" id="FirstName" name="FirstName" placeholder="Enter First Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Last Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
							<input class="form-control form-control-sm " type="text" value="<?php echo e($driver->LastName); ?>" id="LastName" name="LastName" placeholder="Enter Last Name" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Transporter</label>
							<select class="form-control form-control-sm select2bs4" id="AccountID" name="AccountID">
							   <?php $__currentLoopData = $driver->accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			                   <?php if($driver->AccountID == $driver->id): ?>
			                   {    <option></option>
			                     	<option selected="" value="<?php echo e($account->id); ?>"><?php echo e($account->CompanyName); ?></option>
			                   }
			                   <?php else: ?>
			                   {   
			                      
			                      <option  value="<?php echo e($account->id); ?>"><?php echo e($account->CompanyName); ?></option>
			                   }                       
			                   <?php endif; ?>
			             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		        		</select>
						</div>
						<div class="form-group">
							<label>LicenseNo <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
							<input class="form-control form-control-sm " type="text" id="LicenseNo" name="LicenseNo" value="<?php echo e($driver->licenseNo); ?>" placeholder="Enter License No" autocomplete="off">
						</div>
						<div class="form-group">
							<label>Notes</label>
							<textarea id="Notes"  name="Notes" class="form-control form-control-sm " ><?php echo e($driver->Notes); ?></textarea> 
						</div>
					</div>
					<div class="col-md-6">
		            <div id="my_camera">	
		            <?php 
            		$str=$driver->CamScan;
            		
            		if (strpos($str, 'data:image/jpeg;base64,') !== false)
            		{?>
            			  <img class="myimg"  id="CamScan" src='<?php echo e($driver->CamScan); ?>' name="">
            		<?php
            	  }
            		else
            		{?>
            				<img  class="myimg"  id="CamScan" src='data:image/jpeg;base64,<?php echo e($driver->CamScan); ?>' name="">
            		<?php	
            		}
								?>
		            </div>
		            <div id="hidemob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan"></div>
                <label for="cameraFileInput"style="margin-left: 40%; margin-top: 2%; display: none;" id="mobcamof">
                  <span class="btn btn-block btn-outline-primary btn-xs" >Take Photo Snap</span>
                  <input type="file" id="cameraFileInput" style="display: none;" accept="image/*"  onchange="previewFile()" capture="environment"/>
                </label>
                <div style="margin-top: 2%;" id="hidecam">
                  <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take_snapshot()" style="margin-left: 22%;" id="disable" disabled="">Take Photo Snap</button>
                </div>
                <div id="camoff">
                   <button type="button"   class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take_stream()" style="margin-left: 22%;">Start Stream</button>    
                </div> 
             &nbsp;
            <div id="my_camera1">
            		<?php 
            		$str=$driver->LicenseScan;
            		if (strpos($str, 'data:image/jpeg;base64,') !== false)
            		{?>
            			 <img class="myimg"  id="LicenseScan" src='<?php echo e($driver->LicenseScan); ?>' name="">
            		<?php
            		}
            		else
            		{?>
            				 <img  class="myimg" id="LicenseScan" src='data:image/jpeg;base64,<?php echo e($driver->LicenseScan); ?>' name="">
            		<?php	
            		}
            		?>
            </div>
            <div id="hide_mob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan"></div>
            <label for="cameraFile" id="mobcam" style="margin-left: 40%; margin-top: 2%; display: none;" >
              <span class="btn btn-block btn-outline-primary btn-xs"  >Take LincenseId Snap</span>
              <input type="file" id="cameraFile" style="display: none;" accept="image/*"  onchange="previewFile2()" capture="environment"/>
            </label>
            <div style="margin-top: 2%;" id="camof">
              <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take1_snapshot()" style="margin-left: 22%;" id="disabled" disabled="">Take LincenseId Snap</button>
            </div>
            <div  id="camofff">
               <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take1_stream()" style="margin-left: 22%;">Start Stream</button>    
            </div>
          </div>              
				</div>
			</div>
		</div>
		<div class="form-group">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center">
				<button id="driverupdate_click" class="btn btn-primary">Submit</button>
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
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script  src="<?php echo e(asset('plugins/jquery/webcam.min.js')); ?>"></script>
<script> 
function previewFile() 
{

  const preview = document.getElementById('CamScan');
  const file = document.getElementById('cameraFileInput').files[0];
  const reader = new FileReader();

  reader.addEventListener("load", function () {
    // convert image file to base64 string
    preview.src = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);

    
  }
}

function previewFile2() 
{

  const preview = document.getElementById('LicenseScan');
  const file = document.getElementById('cameraFile').files[0];
  const reader = new FileReader();

  reader.addEventListener("load", function () {
    // convert image file to base64 string
    preview.src = reader.result;

  }, false);

  if (file) {
    reader.readAsDataURL(file);

    
  }
}

</script>
<script>

 // Configure a few settings and attach camera

  Webcam.set({
  width: 275,
  height: 185,
  image_format: 'jpeg',
  jpeg_quality: 60
  });


  function take_stream() 
  {
		Webcam.on( 'error', function(err) {
		      $('#my_camera').hide();
		      $('#hidecam').hide();
		      $('#camoff').hide();
		      $('#hidemob').show();
		      $('#mobcamof').show();
		      
		    });
    Webcam.attach( '#my_camera' );
   
     $('#disable').prop('disabled',false);
  }
  function take1_stream() 
  {

	  Webcam.on( 'error', function(err) {
	      $('#my_camera1').hide();
	      $('#camof').hide();
	      $('#camofff').hide();

	      $('#mobcam').show();
	      $('#hide_mob').show();
	    });

    Webcam.attach( '#my_camera1' );
    $('#disabled').prop('disabled',false);
   }

   // take snapshot and get image data
	function take_snapshot() {
	   Webcam.snap( function(data_uri) {
	    document.getElementById('my_camera').innerHTML = 
	                      '' + 
	        '<img  src="' + data_uri + '"style=" width: 275px; height: 185px;" id="CamScan" alt="photo" >';
	   } ); 
	  }
	// take snapshot and get image data
	function take1_snapshot() {
	   Webcam.snap( function(data_uri) {
	    document.getElementById('my_camera1').innerHTML = 
	                      '' + 
	        '<img  src="' + data_uri + '"style=" width: 275px; height: 185px;" id="LicenseScan">';  
	         } );   
	  }

	$("#driverupdate_click").click(function(e) {

	       e.preventDefault();
	       var driverid = $('#driverid').val();
	       var FirstName = $('#FirstName').val();
	       var LastName = $('#LastName').val();
	       var AccountID = $('#AccountID').val();
	       var LicenseNo = $('#LicenseNo').val();
	       var Notes = $('#Notes').val();
	       var LicenseScan = $('#LicenseScan').attr('src');
	       var CamScan = $('#CamScan').attr('src');
	       let _token = $('meta[name="csrf-token"]').attr('content');
	       if (LicenseScan=='' && CamScan=='') 
	       {
	       	toastr.error('Please capture both snap.!!')
	       }
	      if (driverid != "" && FirstName != "" && LicenseNo != "" && LastName!='') 
	      {
	           $.ajax({
	               type: "POST",
	               url: "<?php echo e(URL::to('/')); ?>/Driver/DriverDbupdate",
	               data: {
	               	   driverid:driverid,
	                   FirstName: FirstName,
	                   LastName: LastName,
	                   AccountID: AccountID,
	                   LicenseNo: LicenseNo,
	                   Notes: Notes,
	                   LicenseScan: LicenseScan,
	                   CamScan: CamScan,
	                   _token: _token
	               },
	               cache: false,
	               success: function(response) {
	                  location.href = "<?php echo e(URL::to('/')); ?>/drivers";
	               }
	           });
	      } 
	      else 
	      {
	          toastr.error('Please fill Required Field.!!');
	      }
	   });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/drivers/edit.blade.php ENDPATH**/ ?>