
<?php $__env->startSection('content'); ?>

<!-- <script>
function imageZoom(imgID, resultID) {

  var img, lens, result, cx, cy;
  img = document.getElementById(imgID);
  result = document.getElementById(resultID);
  /*create lens:*/
  lens = document.createElement("DIV");
  lens.setAttribute("class", "img-zoom-lens");
  /*insert lens:*/
  img.parentElement.insertBefore(lens, img);
  /*calculate the ratio between result DIV and lens:*/
  cx = result.offsetWidth / lens.offsetWidth;
  cy = result.offsetHeight / lens.offsetHeight;
  /*set background properties for the result DIV:*/
  result.style.backgroundImage = "url('" + img.src + "')";
  result.style.backgroundSize = (img.width * cx) + "px " + (img.height * cy) + "px";
  /*execute a function when someone moves the cursor over the image, or the lens:*/
  lens.addEventListener("mousemove", moveLens);
  img.addEventListener("mousemove", moveLens);
  /*and also for touch screens:*/
  lens.addEventListener("touchmove", moveLens);
  img.addEventListener("touchmove", moveLens);
  function moveLens(e) {

    var pos, x, y;
    /*prevent any other actions that may occur when moving over the image:*/
    e.preventDefault();
    /*get the cursor's x and y positions:*/
    pos = getCursorPos(e);
    /*calculate the position of the lens:*/
    x = pos.x - (lens.offsetWidth / 2);
    y = pos.y - (lens.offsetHeight / 2);
    /*prevent the lens from being positioned outside the image:*/
    if (x > img.width - lens.offsetWidth) {x = img.width - lens.offsetWidth;}
    if (x < 0) {x = 0;}
    if (y > img.height - lens.offsetHeight) {y = img.height - lens.offsetHeight;}
    if (y < 0) {y = 0;}
    /*set the position of the lens:*/
    lens.style.left = x + "px";
    lens.style.top = y + "px";
    /*display what the lens "sees":*/
    result.style.backgroundPosition = "-" + (x * cx) + "px -" + (y * cy) + "px";
  }
  function getCursorPos(e) {
    var a, x = 0, y = 0;
    e = e || window.event;
    /*get the x and y positions of the image:*/
    a = img.getBoundingClientRect();
    /*calculate the cursor's x and y coordinates, relative to the image:*/
    x = e.pageX - a.left;
    y = e.pageY - a.top;
    /*consider any page scrolling:*/
    x = x - window.pageXOffset;
    y = y - window.pageYOffset;
    return {x : x, y : y};
  }
}
</script> -->
<style>
/*.img-zoom-container {
  position: relative;
}

.img-zoom-lens {
  position: absolute;
  border: 1px solid #d4d4d4;
 
  width: 40px;
  height: 40px;
}

.img-zoom-result {
  border: 1px solid #d4d4d4;
  width: 300px;
  height: 300px;
}*/
.img-zoom-container:hover{
  transform: scale(1.5);
}
#CamScan{
 width: 100%;
 height: 100%;
 border: 1px solid black;
 object-fit: contain;
}
#LicenseScan{
    width: 100%;
    height: 100%; 
    object-fit: contain;
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
              <label>National ID <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
              <input class="form-control form-control-sm " type="text"  name="LicenseNo" id="LicenseNo" placeholder="Enter National ID No" autocomplete="off">
            </div>
            <div class="form-group">
              <label>Notes</label>
              <textarea id="Notes"  name="Notes" class="form-control form-control-sm "></textarea> 
            </div>
          </div>
          <div class="col-md-6">
            <div>
                  <div class="img-zoom-container" id="my_camera"><img class="onepp" src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan"></div>
                 <!--  <div id="hidemob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan_mob"></div> -->
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
                  <div class="img-zoom-container"id="my_camera1"><img  src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan"></div>  <div id="myresult" class="img-zoom-result"></div>
                  <!-- <div id="hide_mob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan_mob" ></div> -->
                    <label for="cameraFile" id="mobcamof" style="margin-left: 40%; margin-top: 2%; display: none;">
                      <span class="btn btn-block btn-outline-primary btn-xs" >Take National ID Snp</span>
                      <input type="file" id="cameraFile" style="display: none;" accept="image/*"  onchange="previewFile2()" capture="environment"/>
                    </label>
                  <div style="margin-top: 2%;" id="camoff">
                    <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take1_snapshot()" style="margin-left: 22%;" id="disabled" disabled="">Take National ID Snap</button>

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
<!-- <script>
// Initiate zoom effect:
imageZoom("LicenseScan", "myresult");
</script> -->
<script> 
var device_info;
$( document ).ready(function() {
    var device_info=deviceType();
    //device canmera setting
    if(device_info=="tablet"){
        $('#hidecam').hide();
        $('#camof').hide();
        $('#mobcam').show();
        // $('#hidemob').show();
        $('#my_camera').show();

        $('#camoff').hide();
        $('#camofff').hide();
        $('#mobcamof').show();
        // $('#hide_mob').show();
        $('#my_camera1').show();
    }
    else if(device_info=="mobile"){
        $('#hidecam').hide();
        $('#camof').hide();
        $('#mobcam').show();
        // $('#hidemob').show();
        $('#my_camera').hide();

        $('#camoff').hide();
        $('#camofff').hide();
        $('#mobcamof').show();
        // $('#hide_mob').show();
        $('#my_camera1').hide();
    }
});
  const deviceType = () => {
    const ua = navigator.userAgent;
    if (/(tablet|ipad|playbook|silk)|(android(?!.*mobi))/i.test(ua)) {
        return "tablet";
        // alert("tablet");
    }
    else if (/Mobile|Android|iP(hone|od)|IEMobile|BlackBerry|Kindle|Silk-Accelerated|(hpw|web)OS|Opera M(obi|ini)/.test(ua)) {
        return "mobile";
        // alert("mobile");
    }
    return "desktop";
  };

  function previewFile() 
  {

    const preview = document.getElementById('CamScan');
    preview.style.width = "100%";
    preview.style.height="100%";
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
    preview.style.width = "275px";
    preview.style.height="190px";
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
  jpeg_quality: 60,
  facingMode: "environment",

  });

  function take_stream() {

    Webcam.on( 'error', function(err) {
      $('#hidecam').hide();
      $('#camof').hide();
      $('#mobcam').show();
      $('#hidemob').show();
      $('#my_camera').show();
    });
    Webcam.attach( '#my_camera' );

     $('#disable').prop('disabled',false);
    }
  function take1_stream() {
    Webcam.on( 'error', function(err) {
      $('#camoff').hide();
      $('#camofff').hide();
      $('#mobcamof').show();
      // $('#hide_mob').show();
      $('#my_camera1').show();
    });
    Webcam.attach( '#my_camera1' );
    $('#disabled').prop('disabled',false);
    }

 // take snapshot and get image data

  function take_snapshot() {
     Webcam.snap( function(data_uri) {
      document.getElementById('my_camera').innerHTML = 
                        '' + 
          '<img class="onepp" src="' + data_uri + '"style="hover width: 275px; height: 185px;" id="CamScan" alt="photo" >';
     } ); 
    }
  // take snapshot and get image data
  function take1_snapshot() {
     Webcam.snap( function(data_uri) {
      document.getElementById('my_camera1').innerHTML = 
                        '' + 
          '<img class="onepp" src="' + data_uri + '"style=" width: 275px; height: 185px;" id="LicenseScan">';  
           } );   
    }

$("#driver_click").click(function(e) {

       e.preventDefault();
       var FirstName = $('#FirstName').val();
       var LastName = $('#LastName').val();
       var AccountID =$("#AccountID option:selected").val();
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