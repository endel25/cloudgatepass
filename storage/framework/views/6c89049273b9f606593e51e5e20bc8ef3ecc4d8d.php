
<?php $__env->startSection('content'); ?>
<style>
#my_camera_data{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-top: 5%;
 margin-bottom: ;
}
.th{text-align: center;}
#CamScan{
 width: 100%;
 height: 189px;
 border: 1px solid black;
 object-fit: contain;
 
}
#V_CamScan{
 width: 100%;
 height: 189px;
 border: 1px solid black;
 object-fit: contain;
 
}
#LicenseScan{
 width:100%;
 height: 189px;
 border: 1px solid black;
 object-fit: contain;

}
#my_camera_v{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-bottom: ;
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
   <div class="container">
      <?php if($errors->any()): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div class="alert alert-danger" role="alert">
         <?php echo e($error); ?>

      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?> 
   </div>
   <form action="" method="POST">
      <?php echo csrf_field(); ?>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title">Create Gate Pass</h3>
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
                        <div class="from-group col-md-4">
                           <label style="font-size: 14px;">DateTime</label>
                        </div>
                        <div class="input-group  date col-md-6 " id="reservationdatetime" data-target-input="nearest">
                           <input disabled="" type="text" name="gatepassDateTime" id="gatepassDateTime" value="" class="input-group-text spanbutton col-md- datetimepicker-input" data-target="#reservationdatetime" style="text-align: left; font-size: 13px;" >
                           <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                               <div class="input-group-text disabled spanbutton"><i class="fa fa-calendar"></i></div>
                           </div>
                        </div>   
                     </div>   
                  </div>
                  <div class="row">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Purpose <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class=" col-md-8">
                        <!-- <input class="form-control form-control-sm" id="VisitFor"autocomplete="off"> -->
                        <select class="form-control col-md-12 select2" id="VisitFor">
                           <option value=" ">Select VisitPurpose</option>
                            <?php $__currentLoopData = $Vtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Vtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($Vtype->FieldValue); ?>"><?php echo e($Vtype->FieldValue); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>   
                       </select>
                     </div>
                  </div>
                  <!-- company -->
                  <div class="row" style="margin-top: 1%;" id="company_hide">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Company Name
                         <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class=" col-md-8">
                        <select class="form-control select2" name="" id="company">
                           <option value=" ">Select Company <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></option>
                              <?php $__currentLoopData = $company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($company->CompanyName); ?>"><?php echo e($company->CompanyName); ?></option>
                             <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                     
                        </select>
                     </div>
                  </div>
                  <!-- vehicle -->
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Vehicle No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class="col-md-7" id="Vehicle_hide">
                         <input class="form-control form-control-sm" id="VehicleNo" name="" placeholder="Enter  VehicleNo" autocomplete="off" style="text-transform: uppercase;">
                     </div>
                      <div class="col-md-8" style="display:none;" id="Vehicle_show">
                         <input class="form-control form-control-sm" id="V_VehicleNo" name=""  autocomplete="off" style="text-transform: uppercase;">
                     </div>
                     <div class="input-group-append" id="icon_hide">
                        <span class="input-group-text spanbutton" id="clickb" data-toggle="modal" data-target="#modal-default3">
                        <i class="fas fa-plus"  id="clickp"></i>
                        </span>
                     </div>
                  </div> 
                  <!-- TrailerNo -->
                  <div class="row" id="TrailerNoshow" style="margin-top: 1%; display: none;">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Trailer No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class="col-md-8">
                     <!-- <select class="form-control select2" name="TransporterID" id="TrailerNo" ></select> -->
                        <input class="form-control form-control-sm" id="TrailerNo" autocomplete="off">
                     </div>
                  </div> 
                  <!-- Transporter-->
                  <div class="row"  style="margin-top: 1%;" id="Transporter_hide">
                     <div class="from-group col-md-4" id="AccountVisible">
                        <label  style="font-size: 14px;">Transporter <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class="col-md-8">
                        <select class="form-control select2" name="TransporterID" id="TransporterID" >
                           <option value="">Select Transporter</option>
                               <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <option value="<?php echo e($account->CompanyName); ?>"><?php echo e($account->CompanyName); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                   
                        </select>
                     </div> 
                  </div>
                  <!-- National ID -->
                  <div class="row" style="margin-top: 1%;" id="DriverID_hide">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">National ID <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class=" col-md-7">
                       <input class="form-control form-control-sm" id="D_licenseNo" name="" placeholder="Enter National ID" autocomplete="off">
                     </div>
                     <div class="input-group-append">
                        <span class="input-group-text spanbutton" id="clickd"  data-toggle="modal" data-target="#modal-default4">
                        <i class="fas fa-plus"></i>
                        </span>
                     </div>
                  </div>
                  <!-- Driver Name -->
                  <div class="row" style="margin-top: 1%;" id="DriverName_hide">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Driver Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class="col-md-8">
                        <input class="form-control form-control-sm" disabled="" id="DriverID"autocomplete="off">
                     </div>
                  </div>
               </div>
               <div class="col-md-6" id="camera_hide">
                  <div id="my_camera_data">
                  <img src="<?php echo e(asset('dist/img/webcam.png')); ?>"> 
                  </div>
                  <div class="form-group col-md-6"  style="text-align: center; width: 50%; margin-left:22% ; margin-top: 2%;">
                      <textarea id="DriverNotes" disabled="" name="Notes" class="form-control form-control-sm "></textarea> 
                  </div>
                  <div class="alert alert-danger" role="alert" id="msg" style="display: none; text-align: center; width: 40%; margin-left:25% ; margin-top: 2%;">
                  </div>
               </div>
               <div class="col-md-6" id="camera_Show" style="display: none;">
                     <div id="my_camera_v"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="V_CamScan"></div>
                     <label for="cameraFileInput_v" id="mobcam_v" style="margin-left: 40%; margin-top: 2%; display: none;">
                     <span class="btn btn-block btn-outline-primary btn-xs" >Take Photo Snp</span>
                     <input type="file" id="cameraFileInput_v" style="display: none;" accept="image/*"  onchange="gpreviewFile_v()" capture="environment"/>
                     </label>
                     <div style="margin-top: 2%;" id="hidecam_v">
                     <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="Take_Snap_v()" id="disable" style="margin-left: 22%;" disabled="">Take Photo Snap</button>
                     </div>
                     <div id="hide_cam_v">
                      <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="TakeStream_v()" style="margin-left: 22%;">Start Stream</button>    
                     </div> 
               </div>
            </div>
         </div>
      </div>
      <div class="form-group">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <ol class="breadcrumb float-sm-right">
               <button id="Gatepass_create" disabled="" class="btn btn-primary btn-sm">Pending Entry</button>&nbsp;&nbsp;    
               <a type="button" class="btn btn-primary btn-sm" href="<?php echo e(route('home')); ?>">Back</a>
            </ol>
         </div>
      </div>
      <!-- Vehicle -->
      <div class="modal fade" id="modal-default3" >
         <div class="modal-dialog" >
            <div class="modal-content" style="background-image: linear-gradient(white, #D3D3D3);">
               <div class="modal-header">
                  <h4 class="modal-title">Add Vehicle</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="form-group col-md-9">
                           <label>Vehicle Type <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                           <select class="form-control select2" name="VehicleType" id="VehicleType">
                             <option  value="">Select VehicleType</option>
                              <?php $__currentLoopData = $Vehicletype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Vtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
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
                        <input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="VehicleNumber" id="VehicleNumber" placeholder="" autocomplete="off">
                     </div>
                     <div class="row" id="Primeshow" style="display: none;">
                        <div class="form-group col-md-6">
                           <label>Vehicle No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                           <input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="VehicleNumber" id="tVehicleNumber" placeholder="" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                           <label>Trailer  No <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                           <input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="TrailerNumber" id="TrailerNumber" placeholder="" autocomplete="off">
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Transporter <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                        <select class="form-control select2" id="AccountID" name="AccountID">
                           <option  value="">Select Transporter</option>
                           <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($account->id); ?>"><?php echo e($account->CompanyName); ?></option>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Notes</label>
                        <textarea   name="Notes" id="Notes" class="form-control form-control-sm "></textarea> 
                     </div>
                  </div>                           
                  <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                     <button type="" class="btn btn-primary" data-dismiss="modal" id="TestVehicle_click">Add</button>
                  </div>
               </div>
            </div>
         </div>
      </div> 
      <!-- driver -->
      <div class="modal fade" id="modal-default4" >
         <div class="modal-dialog" >
            <div class="modal-content" style="background-image: linear-gradient(white, #D3D3D3);">
               <div class="modal-header">
                  <h4 class="modal-title">Add Driver</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
               </div>
               <div class="modal-body">
            
               <div class="col-md-12">
                  <div class="form-group">
                    <label>First Name <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                    <input class="form-control form-control-sm " type="text"  name="FirstName" id="FirstName" placeholder="Enter First Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Last Name</label>
                    <input class="form-control form-control-sm " type="text"  name="LastName" id="LastName" placeholder="Enter Last Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Transporter</label>
                    <select class="form-control form-control-sm  select2bs4" name="AccountID" id="AccountID">
                      <option  value=" ">Select Transporter</option>
                      <?php $__currentLoopData = $accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($account->id); ?>"><?php echo e($account->CompanyName); ?></option>
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                  </div>
                  <div class="form-group">
                    <label>National ID <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                    <input class="form-control form-control-sm " type="text"  name="LicenseNo" id="LicenseNo" placeholder="Enter National Id No" autocomplete="off">
                  </div>
                  <div class="form-group">
                    <label>Notes</label>
                    <textarea id="Notes"  name="Notes" class="form-control form-control-sm "></textarea> 
                  </div>
                  <div>
                     <div id="my_camera"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan"></div>
                     <!-- <div id="hidemob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan"></div> -->
                     <label for="cameraFileInput" id="mobcam" style="margin-left: 40%; margin-top: 2%; display: none;">
                         <span class="btn btn-block btn-outline-primary btn-xs" >Take Photo Snp</span>
                         <input type="file" id="cameraFileInput" style="display: none;" accept="image/*"  onchange="previewFile()" capture="environment"/>
                     </label>
                      <div style="margin-top: 2%;" id="hidecam">
                        <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take_snapshot()" id="disable" style="margin-left: 22%;" >Take Photo Snap</button>
                      </div>
                      <div  id="camof">
                         <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="take_stream()" style="margin-left: 22%;">Start Stream</button>    
                      </div>
                  </div> 
                  &nbsp;
                  <div>
                     <div id="my_camera1"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan"></div>
                     <!-- <div id="hide_mob" style="display: none;"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan"></div> -->
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
                  &nbsp;                  
               <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="" class="btn btn-primary" data-dismiss="modal" id="driver_click">Add</button>

               </div>
               </div>
            </div>
         </div>
      </div>   
   </form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script  src="<?php echo e(asset('plugins/jquery/webcam.min.js')); ?>"></script>
<script>
   var opensubmit1=false;
   var opensubmit2=false;
   var device_info;

   $( document ).ready(function() 
   {

      setInterval(function()
      { 
         var dt = new Date($.now());

         var _day = dt.getDate();
         var _Month = dt.getMonth() + 1;
         var _Year = dt.getFullYear();

         var _Hour = dt.getHours();
         var _minute = dt.getMinutes();
         var _Secound = dt.getSeconds();

         var _days = _day>9?_day:"0"+_day;
         var _Months = _Month>9?_Month:"0"+_Month
         var _Hours = _Hour>9?_Hour:"0"+_Hour;
         var _minutes = _minute>9?_minute:"0"+_minute;
         var _Secounds = _Secound>9?_Secound:"0"+_Secound;

         var d=_days + "/" +_Months+ "/" +_Year+ " " +_Hours + ":" + _minutes + ":" + _Secounds;
         $("#gatepassDateTime").val(d);

      }, 1000);

        var device_info=deviceType();
          //device canmera setting
          if(device_info=="tablet"){
              $('#hidecam').hide();
              $('#camof').hide();
              $('#mobcam').show();
              // $('#hidemob').show();
              $('#my_camera').show();
              // $('#my_camera_v').show();

              
              $('#camoff').hide();
              $('#camofff').hide();
              $('#mobcamof').show();
              // $('#hide_mob').show();
              $('#my_camera1').show();
              $('#mobcam_v').show();
              $('#hidecam_v').hide();
              $('#hide_cam_v').hide();



          }
          else if(device_info=="mobile"){
              $('#hidecam').hide();
              $('#camof').hide();
              $('#mobcam').show();
              // $('#hidemob').show();
              $('#my_camera').show();
              // $('#my_camera_v').show();

              $('#camoff').hide();
              $('#camofff').hide();
              $('#mobcamof').show();
              // $('#hide_mob').show();
              $('#my_camera1').show();
              $('#mobcam_v').show();
              $('#hidecam_v').hide();
              $('#hide_cam_v').hide();

          }
   });
      
      function warehouseAddToTable() {

      var value = parseInt(document.getElementById('number').value, 10);
       value = isNaN(value) ? 0 : value;
       value++;
       document.getElementById('number').value = value;
       // First check if a <tbody> tag exists, add one if not
       if ($("#locationTable tbody").length == 0) {
           $("#locationTable").append("<tbody></tbody>");
       }

       // Append product to the table
       $("#locationTable tbody").append(
           "<tr>" +
           "<td class='th'>" + $("#number").val() + "</td>" +
           "<td class='th'>" + $("#GatepassLocation").val() + "</td>" +
           "<td class='th'>" +
           "<a type='button'  onclick='productDelete(this);' class='fas fa-trash-alt'>" +
           "</td>" +
           "</tr>");
      }
      function productDelete(ctl) {
       $(ctl).parents("tr").remove();
      }
</script>
<!-- For Visitor -->
<script>
   function gpreviewFile_v() 
   {
        const preview = document.getElementById('V_CamScan');
         preview.style.width = "275px";
         preview.style.height="190px";
        const file = document.getElementById('cameraFileInput_v').files[0];
        const reader = new FileReader();

        reader.addEventListener("load", function () {
          // convert image file to base64 string
          preview.src = reader.result;

        }, false);

        if (file) {
          reader.readAsDataURL(file);
        }
   }
   // Configure a few settings and attach camera

   Webcam.set({
   width: 275,
   height: 185,
   image_format: 'jpeg',
   jpeg_quality: 60
   });
   
   function TakeStream_v() {
      Webcam.on( 'error', function(err) {
          
            
      });
      Webcam.attach( '#my_camera_v' );
      $('#disable').prop('disabled',false);
   }
  

   // take snapshot and get image data

   function Take_Snap_v() {
      Webcam.snap( function(data_uri) {
       document.getElementById('my_camera_v').innerHTML = 
                         '' + 
           '<img  src="' + data_uri + '"style=" width: 180; height: 180;" id="V_CamScan" alt="photo" >';
      } ); 
   }
  

</script>

<!-- vehicle -->
<script>
   $( "#Trailercheck" ).click(function() {
      
      var yes = document.getElementById("Trailercheck");  
  
      if (yes.checked == true) 
      {
         $( "#Primeshow" ).show();
         $( "#Noramalshow" ).hide();
      }
      else
      {
         $( "#Primeshow" ).hide();
         $( "#Noramalshow" ).show();
      }  
   });
   $( "#VisitFor" ).change(function() {
      
      var Visit = $( "#VisitFor" ).val();
  
      if (Visit != 'Loading' && Visit != 'OffLoading' && Visit != 'WITH OUT ORDER')
      {
         $( "#Transporter_hide" ).hide();
         $( "#DriverID_hide" ).hide();
         $( "#DriverID" ).prop('disabled',false);
         $( "#camera_hide" ).hide();

         $( "#camera_Show" ).show();
         $( "#Vehicle_hide" ).hide();
         $( "#Vehicle_show" ).show();
         $( "#icon_hide" ).hide();
         $( "#Gatepass_create" ).prop('disabled',false);
         
      }
      else
      {
         $( "#Transporter_hide" ).show();
         $( "#DriverID_hide" ).show();
         $( "#DriverName_hide" ).show();
         $( "#Vehicle_hide" ).show();
         $( "#icon_hide" ).show();
         $( "#Vehicle_show" ).hide();
         $( "#camera_hide" ).show();
         $( "#camera_Show" ).hide();
         $( "#DriverID" ).prop('disabled',true);
      }  
   });
   
   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
   
   $("#TestVehicle_click").click(function(e) 
   {
       e.preventDefault();
       var VehicleType = $('#VehicleType').val();
       var Trailercheck = $("input[type=checkbox][name=IsTrailar]:checked").val();
       var VehicleNumber = $("#VehicleNumber").val();
       var tVehicleNumber = $("#tVehicleNumber").val();
       var TrailerNumber = $('#TrailerNumber').val();
       var AccountID = $('#AccountID').val();
       var Notes = $('#Notes').val();
       let _token = $('meta[name="csrf-token"]').attr('content');

       if (VehicleType != "" && (tVehicleNumber!='' || VehicleNumber!='')) {
           $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/Vehicle_create",
               data: {
                   VehicleType: VehicleType,
                   Trailercheck: Trailercheck,
                   VehicleNumber: VehicleNumber,
                   tVehicleNumber:tVehicleNumber,
                   TrailerNumber: TrailerNumber,
                   AccountID: AccountID,
                   Notes: Notes,
                   _token: _token
               },
               cache: false,
                  success: function(response) {
                     if (response.error) 
                     {
                        toastr.error(response.error).fadeOut(6000);
                     }
                     else
                     {
                        // AccountID
                         $("#VehicleNo").append("<option selected value="+response.VehicleNo[0].id+">"+VehicleNumber.toUpperCase()+"</option>");
                         $("#TransporterID").append("<option selected value="+response.VehicleNo[0].AccountID+">"+response.CompanyName+"</option>");
                           toastr.success(response.success).fadeOut(6000);
                           opensubmit2=false; 
                           // alert(opensubmit2);
                     }
                  
                 
               }
           });
       } else {
         toastr.error('Please fill all the field !').fadeOut(6000);
           // alert('Please fill all the field !');
       }
   });
</script>
<!-- driver -->
<script> 
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
  preview.style.width = "275px";
  preview.style.height="190px";
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

          let url="<?php echo e(URL::to('/')); ?>/dist/img/webcam.png";
          if (url == LicenseScan || url == CamScan) 
          {
             LicenseScan="";
             CamScan='';
          }

          if (LicenseScan == "") 
          {
            toastr.error('Please capture NationalId snap.!!').fadeOut(8000);

          }
          if (CamScan == "") 
          {
            toastr.error('Please capture Photoid snap.!!').fadeOut(8000);

          }
         if (FirstName != "" && LicenseNo != "") 
         {
              $.ajax({
                  type: "POST",
                  url: "<?php echo e(URL::to('/')); ?>/Driver_create",
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
                         var FirstName=response.LicenseNo[0].FirstName;
                         var LastName=response.LicenseNo[0].LastName;
                        $('#DriverID').val(FirstName+' '+LastName);
                        
                     toastr.success('Driver successfully added!!').fadeOut(6000);

                      if (opensubmit2 === false) 
                       {
                           $('#Gatepass_create').prop('disabled',false); 
                       }
                       else
                       {
                           $('#Gatepass_create').prop('disabled',true); 
                       }

                       if(opensubmit1 === true)
                       {
                           $('#Gatepass_create').prop('disabled',true); 
                       }
                       else
                       {
                           $('#Gatepass_create').prop('disabled',false);
                       }
                  }
              });
         } 
         else 
         {
             toastr.error('Please fill FirstName,This Field Required.!!').fadeOut(6000);
             // alert('Please fill FirstName,This Field Required.!!');
         }
   });
</script>
<!-- gatepass -->
<script>

   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });
   $('input').keypress(function( e ) {
    if(e.which === 32) 
        return false;
   });   
   $("#VehicleNo").on("change", function(e) {
      opensubmit1=false; 
      e.preventDefault();
         var VehicleNo=$( "#VehicleNo" ).val();
         let _token = $('meta[name="csrf-token"]').attr('content');
         
         $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/VehicleDetails",
               data: {
                   VehicleNo: VehicleNo,
                   _token: _token
               },
               cache: false,
               success: function(response) {
                  var a=response.IsTrailar.length;
                  if (response.error) 
                  {
                     toastr.error(response.error).fadeOut(6000);
                      $( "#TrailerNoshow" ).hide();
                      $( "#TrailerNo" ).val(' ');
                      // $("#TransporterID").append("<option selected ></option>");
                  }
                  if (a!=0) 
                  {
                     var TrailerNo = response.IsTrailar[0].TrailerNumber;
                     $( "#TrailerNoshow" ).show();
                     $( "#TrailerNo" ).val(TrailerNo);
                  }
                  else
                  {
                     $( "#TrailerNoshow" ).hide();
                     $( "#TrailerNo" ).val(' ');
                     $("#TransporterID").append("<option selected ></option>");
                  }

                  $.ajax({
                     type: "POST",
                     url: "<?php echo e(URL::to('/')); ?>/CheckVehicleStatus",
                     data: {
                         VehicleNo: VehicleNo,
                         _token: _token
                     },
                     cache: false,
                     success: function(response) {
                        res=response.status;
                        if (res == true) 
                        {
                              
                              if (VehicleNo=='') 
                              {
                                 $('#VehicleNo').val("");
                                 $("#TransporterID").append("<option selected ></option>");
                                
                              }
                              if (VehicleNo.length>='3' || true) 
                              {
                                    $.ajax({
                                       type: "POST",
                                       url: "<?php echo e(URL::to('/')); ?>/CheckVehicle",
                                       data: {
                                           VehicleNo: VehicleNo,
                                           _token: _token
                                       },
                                       cache: false,
                                       success: function(response) {
                                            var a =response.VehicleNo.length;
                                            if  (a==0) 
                                            {
                                                alert("No Vehicle Found! Please Add The VehicleNo");
                                                $('#clickb').trigger("click");
                                                $('#VehicleNumber').val(VehicleNo);
                                                opensubmit2=true; 
                                                // alert(opensubmit2);
                                                // opensubmit1=true; 
                                                
                                            } 
                                            else
                                            {
                                              if (opensubmit1 === false) 
                                               {  
                                                // alert(opensubmit1)
                                                   $('#Gatepass_create').prop('disabled',false);
                                               }
                                               $("#TransporterID").append("<option selected value="+response.Account[0].CompanyName+">"+response.Account[0].CompanyName+"</option>");

                                              
                                            }   

                                       }
                                    });
                              }
                              else
                              {
                                 toastr.error("error");
                              } 
                        }
                        else
                        {
                          toastr.error("Vehicle number is alreday exist in Gatepass");
                          opensubmit1=true;
                          // alert(opensubmit1);
                          

                        }
                     }
                  });  
               }
         });
           
   });

   $("#D_licenseNo").on("change", function() {
       opensubmit2==false;
      var DriverID = $('#D_licenseNo').val();
      let _token = $('meta[name="csrf-token"]').attr('content');
      if (DriverID=='') 
      {
          $("#DriverID").val("");
          // $('#Warning').hide(); 
          $('#msg').hide();
          $('#Gatepass_create').prop('disabled',true);
          document.getElementById('my_camera_data').innerHTML = 
                       '<img  src="<?php echo e(asset('dist/img/webcam.png')); ?>" >';
        $("#DriverNotes").val("");
      }
      
       
      if (DriverID.length>='4' || true) 
      {
        
            $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/Gatepass/DriverDetails",
               data: {
                   DriverID: DriverID,
                   _token: _token
               },
               cache: false,
               success: function(response) {
                    var a =response.drivers.length;

                    if  (a==0) 
                    {
                        // $('#msg').html("Driver ID Worng").fadeIn('fast').show() //also show a success message 
                        // $('#msg').delay(500).fadeOut('fast');
                        $('#DriverID').val('No Result Found');
                        toastr.error('No Result Found').fadeOut(6000);
                        alert("DriverID Not Found!! Please Add the Driver details")
                        $('#LicenseNo').val(DriverID);
                        $('#clickd').trigger("click");
                        // $('#Gatepass_create').prop('disabled',false);
                    }
                    else
                    {
                        var Active = response.drivers[0].Active
                        $("#DriverID").val(response.drivers[0].FirstName +' '+ response.drivers[0].LastName);
                        $("#DriverNotes").val(response.drivers[0].Notes);
                        var str=response.drivers[0].licenseNo;
                        // const myArr = str.split("data:image/jpeg;base64,");
                       if (str !=" " ) 
                       {
                         document.getElementById('my_camera_data').innerHTML = 
                                  '' + 
                       '<img  class="myimg onepp"  id="CamScan" src="<?php echo e(URL::to('/')); ?>/storage/app/public/webcam/'+response.drivers[0].licenseNo+'cam'+'.jpg" name="">';
                       }
                       else
                       {
                         document.getElementById('my_camera_data').innerHTML = 
                                  '' + 
                       '<img  src="'+response.drivers[0].licenseNo+'"style=" width: 275px; height: 185px;" id="CamScan" alt="photo" >';
                       }
                       
                       // alert(opensubmit1);
                       if (Active == 1 ) 
                       {
                           $(document).Toasts('create', {
                                class: 'bg-danger', 
                                title: 'Warning',
                                subtitle: '',
                                body: 'Warning !! This Driver was blacklisted.'
                              })
                           
                           $('#Gatepass_create').prop('disabled',true); 
                       }
                       if (opensubmit2 === false) 
                       {
                           $('#Gatepass_create').prop('disabled',false); 
                       }
                       else
                       {
                           $('#Gatepass_create').prop('disabled',true); 
                       }

                       if(opensubmit1 === true)
                       {
                           $('#Gatepass_create').prop('disabled',true); 
                       }
                       else
                       {
                           $('#Gatepass_create').prop('disabled',false);
                       }
                        
                    }

               }
            });
      }   
   });
   function getDateString(datestr)
   {
      if(datestr =='')
         return "";
      var Date_d = datestr.split(" ")[0];
      var Date_t = datestr.split(" ")[1];

       var _date = Date_d.split("/");
       var _time_st = Date_t.split(":");
       var dt = new Date(_date[2], _date[1] - 1, _date[0],_time_st[0],_time_st[1],_time_st[2]);

      var _day = dt.getDate();
      var _Month = dt.getMonth() + 1;
      var _Year = dt.getFullYear();

      var _Hour = dt.getHours();
      var _minute = dt.getMinutes();
      var _Secound = dt.getSeconds();

      var _days = _day>9?_day:"0"+_day;
      var _Months = _Month>9?_Month:"0"+_Month
      var _Hours = _Hour>9?_Hour:"0"+_Hour;
      var _minutes = _minute>9?_minute:"0"+_minute;
      var _Secounds = _Secound>9?_Secound:"0"+_Secound;

      var d=_Year + "-" +_Months+ "-" +_days+ " " +_Hours + ":" + _minutes + ":" + _Secounds;

      return d;
   }

 
   $("#Gatepass_create").click(function(e) 
   {
       e.preventDefault();
       var company = $('#company').val();
       var VehicleNo = $('#VehicleNo').val();
       var V_VehicleNo = $('#V_VehicleNo').val();
       var TrailerNo = $('#TrailerNo').val();
       // var TransporterID = $("#TransporterID").val();
       var TransporterID =$("#TransporterID option:selected").text();
       // var TransporterID = document.getElementById("TransporterID").innerHTML;
       var DriverID = $('#DriverID').val();
       var D_licenseNo = $("#D_licenseNo").val();
       var Location = $("#Location").val();
       var VisitFor = $('#VisitFor').val();
       var Driver_Camscan = $('#CamScan').attr('src');
       var DriverNotes = $('#DriverNotes').val();
       // var Driver_Camscan = $('#V_CamScan').attr('src');
       var GatepassEntryTime = getDateString($('#gatepassDateTime').val());
       var V_CamScan = $("#V_CamScan").attr('src');
       let _token = $('meta[name="csrf-token"]').attr('content');

       if (VisitFor != 'Loading' && VisitFor != 'OffLoading' && VisitFor != '' &&  VisitFor != 'WITH OUT ORDER') 
       {
         $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/Gatepass/Gatepasscreate",
               data: {
                   company:company,
                   V_VehicleNo: V_VehicleNo,
                   TransporterID: TransporterID,
                   DriverID: DriverID,
                   VisitFor: VisitFor,
                   V_CamScan: V_CamScan,
                   GatepassEntryTime:GatepassEntryTime,
                   _token: _token
               },
               cache: false,
                  success: function(response) {
                     var id =response.id;
                     if (response.error) 
                     {
                        toastr.error(response.error).fadeOut(6000);
                     }
                     else
                     {
                        
                        location.href = "<?php echo e(URL::to('/')); ?>/"+id+"/invoice";
                        toastr.success('Gatepass create successfully!').fadeOut(6000);
                     }
                        
               }
           });
       }
       else if(VisitFor == 'Loading' || VisitFor == 'OffLoading' || VisitFor == 'WITH OUT ORDER')
       {
          if (VehicleNo!=' ' && company!=' ' && TransporterID!='' && DriverID!='' && D_licenseNo!='' && VisitFor!=' ') 
          {
              $.ajax({
                  type: "POST",
                  url: "<?php echo e(URL::to('/')); ?>/Gatepass/Gatepasscreate",
                  data: {
                      company:company,
                      VehicleNo: VehicleNo,
                      TrailerNo:TrailerNo,
                      TransporterID: TransporterID,
                      DriverID: DriverID,
                      D_licenseNo: D_licenseNo,
                      Location:Location,
                      VisitFor: VisitFor,
                      Driver_Camscan: Driver_Camscan,
                      DriverNotes:DriverNotes,
                      GatepassEntryTime:GatepassEntryTime,
                      _token: _token
                  },
                  cache: false,
                     success: function(response) {
                        var id =response.id;
                        if (response.error) 
                        {
                           toastr.error(response.error).fadeOut(6000);
                        }
                        else
                        {
                           
                           // location.href = "<?php echo e(URL::to('/')); ?>/"+id+"/invoice";
                           location.href = "<?php echo e(URL::to('/')); ?>/admin";
                           toastr.success('Gatepass create successfully!').fadeOut(6000);
                        }
                           
                  }
              });
          } 
          else 
          {
              toastr.error('Please all field are required !').fadeOut(6000);
          }
       }
       else
       {
              toastr.error('Please all field are required !').fadeOut(6000);

       }
       
      
   });
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/gatepass/create.blade.php ENDPATH**/ ?>