
<?php $__env->startSection('content'); ?>

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
      <h3 class="card-title">Driver Managment</h3>
      <div class="card-tools">
        <ol class="breadcrumb float-sm-right">
          <a class="btn btn-block btn-primary btn-sm" href="<?php echo e(route('drivers.index')); ?>"> Back</a>
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
  <form action="<?php echo e(route('drivers.store')); ?>" method="POST" autocomplete="off">
    <?php echo csrf_field(); ?>
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">Add Driver</h3>
        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
          <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
        </div>
      </div>
      <div class="card-body">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label>First Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
              <input class="form-control form-control-sm " type="text"  name="FirstName" id="FirstName" placeholder="Enter First Name" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Last Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
              <input class="form-control form-control-sm " type="text"  name="LastName" id="LastName" placeholder="Enter Last Name" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Transporter</label>
              <select class="form-control form-control-sm  select2bs4" name="AccountID" id="AccountID">
                <option selected="selected" value="">Select Transporter</option>
                <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($account->id); ?>"><?php echo e($account->CompanyName); ?></option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
            </div>
            <div class="form-group">
              <label>license No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
              <input class="form-control form-control-sm " type="text"  name="LicenseNo" id="LicenseNo" placeholder="Enter License No" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Notes</label>
              <textarea id="Notes"  name="Notes" class="form-control form-control-sm "></textarea> 
            </div>
          </div>
          <div class="col-md-6">
            <div>
                  <div id="my_camera"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan"></div>
                  <div id="hidemob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan"></div>
                  <label for="cameraFileInput" id="mobcam" style="margin-left: 40%; margin-top: 2%; display: none;">
                      <span class="btn btn-block btn-outline-primary btn-xs" >Take Photo Snp</span>
                      <input type="file" id="cameraFileInput" style="display: none;" accept="image/*"  onchange="previewFile()" capture="environment"/>
                  </label>
                <div style="margin-top: 2%;" id="hidecam">
                  <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take_snapshot()" id="disable" style="margin-left: 22%;" disabled="">Take Photo Snap</button>
                </div>
                <div  id="camof">
                   <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take_stream()" style="margin-left: 22%;">Start Stream</button>    
                </div>
            </div> 
             &nbsp;
            <div>
                  <div id="my_camera1"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan"></div>
                  <div id="hide_mob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan"></div>
                    <label for="cameraFile" id="mobcamof" style="margin-left: 40%; margin-top: 2%; display: none;">
                      <span class="btn btn-block btn-outline-primary btn-xs" >Take LicenseId Snp</span>
                      <input type="file" id="cameraFile" style="display: none;" accept="image/*"  onchange="previewFile2()" capture="environment"/>
                    </label>
                  <div style="margin-top: 2%;" id="camoff">
                    <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take1_snapshot()" style="margin-left: 22%;" id="disabled" disabled="">Take LicenseId Snap</button>
                  </div>
                  <div id="camofff">
                    <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take1_stream()" style="margin-left: 22%;">Start Stream</button>    
                  </div>
            </div>
          </div>         
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button id="driver_click" class="btn btn-primary btn-sm">Submit</button>
      </div>
    </div>
   
  </form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script  src="<?php echo e(asset('plugins/jquery/webcam.min.js')); ?>"></script>
<!-- Mobile cam  -->
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

  function take_stream() {

    Webcam.on( 'error', function(err) {
      $('#hidecam').hide();
      $('#camof').hide();
      $('#mobcam').show();
      $('#hidemob').show();
      $('#my_camera').hide();
    });
    Webcam.attach( '#my_camera' );

     $('#disable').prop('disabled',false);
    }
  function take1_stream() {
    Webcam.on( 'error', function(err) {
      $('#camoff').hide();
      $('#camofff').hide();
      $('#mobcamof').show();
      $('#hide_mob').show();
      $('#my_camera1').hide();
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

$("#driver_click").click(function(e) {

       e.preventDefault();
       var FirstName = $('#FirstName').val();
       var LastName = $('#LastName').val();
       var AccountID = $('#AccountID').val();
       var LicenseNo = $('#LicenseNo').val();
       var Notes = $('#Notes').val();
       var LicenseScan = $('#LicenseScan').attr('src');
       var CamScan = $('#CamScan').attr('src');
       let _token = $('meta[name="csrf-token"]').attr('content');

       if (LicenseScan =="<?php echo e(URL::to('/')); ?>/dist/img/webcam.png" && CamScan =="<?php echo e(URL::to('/')); ?>/dist/img/webcam.png") 
       {
          toastr.error('Please capture both snap.!!')
       }
      if (FirstName != "" && LicenseNo != "" && LastName!="") 
      {
           $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/Driver/DriverDb",
               data: {
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
                if (response.error) 
                {
                   toastr.error(response.error);
                }
                else
                {
                  location.href = "<?php echo e(URL::to('/')); ?>/drivers";
                }
                  
               }
           });
      } 
      else 
      {
          toastr.error('Please fill  Required Field.!!');
      }
});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/drivers/create.blade.php ENDPATH**/ ?>