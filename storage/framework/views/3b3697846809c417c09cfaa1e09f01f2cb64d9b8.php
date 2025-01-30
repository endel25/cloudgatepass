
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
#my_camera{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-top: 5%;
 margin-bottom: ;
}
#my_camera1{
 width: 275px;
 height: 189px;
 border: 1px solid black;
 margin-left: 20%;
 margin-top: 5%;
 margin-bottom: ;
}
.th{text-align: center;}
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
   <form action="<?php echo e(route('gatepass.update',$gatepass->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="card card-default">
         <div class="card-header">
            <h3 class="card-title">Edit Gate Pass</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <input type="hidden" value="<?php echo e($gatepass->id); ?>" id="id" name="">
                  <div class="form-group">
                     <div class="row">
                        <div class="from-group col-md-4">
                        <label style="font-size: 14px;">DateTime
                           
                        </label>
                        </div>
                        <div class="input-group  date col-md-6 " id="reservationdatetime" data-target-input="nearest">
                           <input type="text" disabled="" name="gatepassDateTime" id="gatepassDateTime" value="" class="input-group-text spanbutton col-md- datetimepicker-input" data-target="#reservationdatetime" style="text-align: left; font-size: 13px;" >
                           <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                               <div class="input-group-text disabled  spanbutton"><i class="fa fa-calendar"></i></div>
                           </div>
                        </div>   
                     </div> 
                  </div>
                   <?php if($gatepass->Status != 'Pending Entry'): ?>
                  <div class="row" id="transhide">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Transaction Type
                        <!--  <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> -->
                        </label>
                     </div>
                     <div class=" col-md-8">
                        <div class="row">&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" checked type="radio" id="SO" name="radio1" value="SO">
                             <label class="form-check-label" style="font-size: 14px;">SO</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" id="PO"  type="radio" name="radio1" value="PO">
                             <label class="form-check-label" style="font-size: 14px;">PO</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" id="IST" type="radio" name="radio1" value="IST">
                             <label class="form-check-label" style="font-size: 14px;">IST</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                     </div>
                  </div> &nbsp;
                  <?php endif; ?>
                   <div class="row" >
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Company Name
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class=" col-md-8">
                        <select class="form-control form-control-sm select2" name="" id="company">
                           <?php $__currentLoopData = $gatepass->company; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $companies): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php if($gatepass->CompanyName == $companies->CompanyName): ?>
                              {
                                 <option selected="" value="<?php echo e($companies->CompanyName); ?>"><?php echo e($companies->CompanyName); ?></option>
                              }
                              <?php else: ?>
                              {     
                                 <option  value="<?php echo e($companies->CompanyName); ?>"><?php echo e($companies->CompanyName); ?></option>
                              }                       
                              <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                     
                        </select>
                     </div>
                  </div>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Vehicle No
                        <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class="input-group col-md-7">
                        <input class="form-control form-control-sm" id="VehicleNo" name="" value="<?php echo e($gatepass->VehicleNo); ?>" placeholder="Enter  VehicleNo" autocomplete="off">
                     </div>
                     <div class="input-group-append">
                        <span class="input-group-text spanbutton" id="clickb" data-toggle="modal" data-target="#modal-default3">
                        <i class="fas fa-plus"  id="clickp"></i>
                        </span>
                     </div>
                  </div> 
                     <?php if($gatepass->TrailerNo!=""): ?>
                     <div class="row" id="TrailerNoshow" style="margin-top: 1%; display: ;">
                        <div class="from-group col-md-4">
                           <label  style="font-size: 14px;">Trailer No
                              <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                           </label>
                        </div>
                        <div class="col-md-8">
                        <!-- <select class="form-control select2" name="TransporterID" value="<?php echo e($gatepass->VehicleNo); ?>" id="TrailerNo" ></select> -->
                           <input class="form-control form-control-sm" value="<?php echo e($gatepass->TrailerNo); ?>" id="TrailerNo" autocomplete="off">
                        </div>
                     </div>  
                     <?php endif; ?>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4" id="AccountVisible">
                        <label  style="font-size: 14px;">Transporter
                        <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     </div>
                     <div class="input-group col-md-8">
                       <select class="form-control form-control-sm select2" name="TransporterID" id="TransporterID">
                           <?php $__currentLoopData = $gatepass->accounts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $account): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <?php if($gatepass->TransporterID == $account->CompanyName): ?>
                               {    
                                    <option selected=""  value="<?php echo e($account->CompanyName); ?>"><?php echo e($account->CompanyName); ?></option>
                               }
                               <?php else: ?>
                               {   
                                   <option  value="<?php echo e($account->CompanyName); ?>"><?php echo e($account->CompanyName); ?></option>
                               }                       
                               <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
                  </div>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Driver ID
                        <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                     </label>
                     </div>
                     <div class="input-group col-md-7">
                         <input class="form-control form-control-sm" id="D_licenseNo" value="<?php echo e($gatepass->D_licenseNo); ?>" name="" placeholder="Enter  DriverID" autocomplete="off">
                     </div>
                      <div class="input-group-append">
                        <span class="input-group-text spanbutton" id="clickd" data-toggle="modal" data-target="#modal-default4">
                        <i class="fas fa-plus"></i>
                        </span>
                     </div>
                  </div>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Driver Name
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>    
                     </div>
                     <div class="input-group col-md-8">
                        <input class="form-control form-control-sm" disabled="" value="<?php echo e($gatepass->DriverID); ?>" id="DriverID"autocomplete="off">
                     </div>
                  </div>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Purpose
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class="input-group col-md-8">
                       <select class="form-control form-control-sm" name="VisitFor" id="VisitFor">
                        <option></option>
                           <?php $__currentLoopData = $gatepass->Vtype; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $Vtype): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                               <?php if($gatepass->VisitFor == $Vtype->FieldValue): ?>
                               {    
                                    <option selected=""  value="<?php echo e($Vtype->FieldValue); ?>"><?php echo e($Vtype->FieldValue); ?></option>
                               }
                               <?php else: ?>
                               {   
                                   <option  value="<?php echo e($Vtype->FieldValue); ?>"><?php echo e($Vtype->FieldValue); ?></option>
                               }                       
                               <?php endif; ?>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                     </div>
                  </div>
                  <?php if($gatepass->TareWeight != ""): ?>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Tare Weight
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class="input-group col-md-8">
                       <input class="form-control form-control-sm" id="D_licenseNo" value="<?php echo e($gatepass->TareWeight); ?>" disabled name="" placeholder="Enter  DriverID" autocomplete="off">
                     </div>
                  </div>
                  <?php endif; ?>
                  <?php if($gatepass->GrossWeight != ""): ?>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Gross Weight
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class="input-group col-md-8">
                       <input class="form-control form-control-sm" id="D_licenseNo" value="<?php echo e($gatepass->GrossWeight); ?>" disabled name="" placeholder="Enter  DriverID" autocomplete="off">
                     </div>
                  </div>
                  <?php endif; ?>
                  <?php if($gatepass->NetWeight != ""): ?>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Net Weight
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class="input-group col-md-8">
                       <input class="form-control form-control-sm" id="D_licenseNo" value="<?php echo e($gatepass->NetWeight); ?>" disabled name="" placeholder="Enter  DriverID" autocomplete="off">
                     </div>
                  </div>
                  <?php endif; ?>
               </div>
               <div class="col-md-6">
                  
                  <div id="my_camera_data">
                  
                     <?php 
                     $str=$gatepass->Driver_Camscan;
                     
                     if (strpos($str, 'data:image/jpeg;base64,') !== false)
                     {?>
                          <img class="myimg"  id="CamScan" src='<?php echo e($gatepass->Driver_Camscan); ?>' style="width: inherit; height: inherit;" name="">
                     <?php
                     }
                     else
                     {?>
                           <img  class="myimg" style="width: inherit; height: inherit;" id="CamScan" src='data:image/jpeg;base64,<?php echo e($gatepass->Driver_Camscan); ?>' name="">
                     <?php 
                     }
                     ?>
                        <!-- <img  src='<?php echo e($gatepass->CamScan); ?>'style=" width: 275px; height: 185px;" id="CamScan" alt="photo" > -->
                  </div>
                  <div class="form-group col-md-6"  style="text-align: center; width: 50%; margin-left:22% ; margin-top: 2%;">
                     <input type="" name="" value="<?php echo e($gatepass->Driver_Note); ?>" id="DriverNotes" disabled="" style="height: 50px;width: 100%;">
                     
                  </div>  
                  
               </div>
            </div>
         </div>
      </div>
      <?php if($gatepass->Status != 'Pending Entry'): ?>
         <?php $__currentLoopData = $userrole_permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userrole_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if($userrole_permission->IsRead == '1'): ?>
               <!-- SO -->
               <div class="card card-default col-md-12" id="SODetails" >
                  <div class="card-header">
                     <h3 class="card-title"><?php echo e($gatepass->GatepassType); ?> Order Details</h3>
                  </div>
                  <div  class="card-body">
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-2">
                              <label >Order No</label>
                              <input class="form-control form-control-sm" min="1" autocomplete="off" type="number" id="SPSONO">
                           </div>
                           <div class="col-md-2">
                              <label >Product Name</label>
                              <select class="form-control  select2"  id="SOProductName">
                                 <option selected="selected" value="">Select Product</option> 
                                 <?php $__currentLoopData = $gatepass->products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $products): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option  value="<?php echo e($products->ProductName); ?>"><?php echo e($products->ProductName); ?></option>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>  
                              </select> 
                           </div>
                           <div class="col-md-2">
                               <label >Quantity(piece)</label>
                                <input class="form-control form-control-sm" min="1" autocomplete="off" type="number" id="Quantity">
                           </div>
                            <div class="col-md-2">
                               <label >Weight(In kg)</label>
                                <input class="form-control form-control-sm" max="0"  autocomplete="off" type="number" id="Weight">
                           </div>
                           <div class="col-md-4">
                              <label >Warehose</label>
                              <div class="row">
                                 <div class="col-md-9">
                                  <!--    <input class="form-control form-control-sm" autocomplete="off" type="text" id="warehouseName"> -->
                                    <select class="form-control col-md-12 select2"  id="SOwarehouseName">
                                       <option selected="selected" value=" ">Select Warehouse</option> 
                                    </select> 
                                 </div>
                                 <div class="col-md-3" id="plus">
                                     <div class="input-group-append">
                                       <span class="input-group-text spanbutton"  data-toggle="modal" >
                                       <input type="text" hidden="" di id="number" value=""/>
                                       <i class="fas fa-plus"   onclick="SOwarehouseAddToTable()"></i>
                                       </span>
                                    </div>
                                 </div>
                              </div>
                           </div> 
                        </div>
                        </div>
                  </div>
                  <!-- SO -->
                  <table id="locationTable" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th class="th">Sequence No</th>
                           <th class="th">Order No</th>
                           <th class="th">Product Name</th>
                           <th class="th">Quantity(piece)</th>
                           <th class="th">Weight(In kg)</th>
                           <th class="th">Warehouse</th>
                           <th class="th">Active</th>
                        </tr>
                         <?php $__currentLoopData = $g_l_m; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_l_m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                           <td class="th"><?php echo e($g_l_m->Sequenceno); ?></td>
                           <td class="th"><?php echo e($g_l_m->OrderNo); ?></td>
                           <td class="th"><?php echo e($g_l_m->ProductName); ?></td>
                           <td class="th"><?php echo e($g_l_m->Quantity); ?></td>
                           <td class="th"><?php echo e($g_l_m->Weight); ?></td>
                           <td class="th"><?php echo e($g_l_m->warehouse); ?></td>
                           <td><a type='button' href="" onclick='DeleteGL(<?php echo e($g_l_m->id); ?>);' class='fas fa-trash-alt'></a></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </thead>
                  </table> 
               </div>              
            <?php endif; ?>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
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
                           <label>Vehicle Type</label>
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
                        <label>Vehicle No</label>
                        <input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="VehicleNumber" id="VehicleNumber" placeholder="" autocomplete="off">
                     </div>
                     <div class="row" id="Primeshow" style="display: none;">
                        <div class="form-group col-md-6">
                           <label>Vehicle No</label>
                           <input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="VehicleNumber" id="tVehicleNumber" placeholder="" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                           <label>Trailer  No</label>
                           <input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="TrailerNumber" id="TrailerNumber" placeholder="" autocomplete="off">
                        </div>
                     </div>
                     <div class="form-group">
                        <label>Transporter</label>
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
                       <label>First Name</label>
                       <input class="form-control form-control-sm " type="text"  name="FirstName" id="FirstName" placeholder="Enter First Name" autocomplete="off">
                     </div>
                     <div class="form-group">
                       <label>Last Name</label>
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
                       <label>license No</label>
                       <input class="form-control form-control-sm " type="text"  name="LicenseNo" id="LicenseNo" placeholder="Enter License No" autocomplete="off">
                     </div>
                     <div class="form-group">
                       <label>Notes</label>
                       <textarea id="Notes"  name="Notes" class="form-control form-control-sm "></textarea> 
                     </div>
                     <div>
                           <div id="my_camera"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="CamScan"></div>
                           <label for="cameraFileInput" id="mobcam" style="margin-left: 40%; margin-top: 2%; display: none;">
                               <span class="btn btn-block btn-outline-primary btn-xs" >Take Photo Snp</span>
                               <input type="file" id="cameraFileInput" style="display: none;" accept="image/*"  onchange="gpreviewFile()" capture="environment"/>
                           </label>
                         <div style="margin-top: 2%;" id="hidecam">
                           <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="Take_Snap()" id="disable" style="margin-left: 22%;" disabled="">Take Photo Snap</button>
                        </div>
                        <div>
                           <button type="button" id="camof" class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="Take_Stream_e()" style="margin-left: 22%;">Start Stream</button>   
                        </div>
                     </div> 
                      &nbsp;
                     <div>
                        <div id="my_camera1"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan" style=""></div>
                          <label for="cameraFile" id="mobcamof" style="margin-left: 40%; margin-top: 2%; display: none;">
                            <span class="btn btn-block btn-outline-primary btn-xs" >Take LicenseId Snp</span>
                            <input type="file" id="cameraFile" style="display: none;" accept="image/*"  onchange="gpreviewFile2()" capture="environment"/>
                          </label>
                        <div style="margin-top: 2%;" id="camoff">
                          <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="TakeSnap()" style="margin-left: 22%;" id="disabled" disabled="">Take LicenseId Snap</button>
                        </div>
                        <div >
                          <button type="button" id="camofff" class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="Take_Stream_e2()" style="margin-left: 22%;">Start Stream</button>    
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
      <div class="form-group">
         <input type="hidden" name="" id="hideorder" value="<?php echo e($gatepass->Status); ?>">
         <div class="col-xs-12 text-right">
           <?php if($gatepass->Status == 'Pending Entry' && $userrole_permissions_status[0]->IsRead==1 && $gatepass->UserId == $UserId): ?>
               <button value="Pending Entry" onclick="GatepassUpdate(this.value);" onclick="GatepassUpdate(this.value);"    class="btn btn-primary btn-sm">Pending Entry</button>&nbsp;&nbsp;
            <?php endif; ?>
            <?php if($gatepass->Status == 'Pending Entry' && $userrole_permissions_status[1]->IsRead==1): ?> 
               <button  value="Entry Approved" onclick="GatepassUpdate(this.value);"  class="btn btn-primary btn-sm">Entry Approve</button>&nbsp;&nbsp;
            <?php endif; ?>
           
            <?php if($gatepass->Status == 'Entry Approved' && $userrole_permissions_status[1]->IsRead==1 && $gatepass->UserId == $UserId): ?>
               <button  value="Entry Approved" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Entry Approve</button>&nbsp;&nbsp;
            <?php endif; ?>
            <?php if($gatepass->Status == 'Entry Approved' && $userrole_permissions_status[2]->IsRead==1): ?>
               <button  value="Loading" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Loading</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if($gatepass->Status == 'Loading' && $userrole_permissions_status[2]->IsRead == 1 && $gatepass->UserId == $UserId): ?>
               <button  value="Loading" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Loading</button>&nbsp;&nbsp;
            <?php endif; ?>
            <?php if($gatepass->Status == 'Loading' && $userrole_permissions_status[3]->IsRead==1 ): ?>
               <button  value="Gatepass Issued" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Gatepass Issued</button>&nbsp;&nbsp;
            <?php endif; ?>
            <?php if($gatepass->Status == 'Gatepass Issued' && $userrole_permissions_status[3]->IsRead==1 && $gatepass->UserId == $UserId): ?>
               <button  value="Gatepass Issued" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Gatepass Issued</button>&nbsp;&nbsp;
            <?php endif; ?>
            <?php if($gatepass->Status == 'Gatepass Issued' && $userrole_permissions_status[4]->IsRead==1 ): ?>
               <button  value="Exit Approved" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Exit Approve</button>&nbsp;&nbsp;
            <?php endif; ?>
               <a type="button" class="btn btn-primary btn-sm" href="<?php echo e(route('home')); ?>">Back</a>
         </div> 
      </div>
   </form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
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

          // let _token = $('meta[name="csrf-token"]').attr('content');
      //      $.ajax({
      //       type: "POST",
      //       url: "<?php echo e(URL::to('/')); ?>/statuscheck",
      //       data: {
      //           _token: _token
      //       },
      //       cache: false,
      //          success: function(response) {
      //          for(i=0; i<response.statuscode.length; i++)
      //          {
      //            $('#StatusC').append("<option>"+response.statuscode[i].permissionName+"</option>");
      //          }
                
      //          }
      // });
   });
   // var status=$( "#hideorder" ).val();
   // if (status == 'Entry Approved') 
   // {
   //     $( "#SODetails" ).hide();
   //     $( "#transhide" ).hide();
       
   // }
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

   function SOwarehouseAddToTable() 
   {
      if ($("#SPSONO").val() !=''&& $("#SOProductName") !=''&& $("#Quantity").val() !=''&& $("#Weight").val() !=''&& $("#SOwarehouseName").val() !='')

      {
         var Product_Name=[];
         var SO_NO=[];

         SO_NO.push();
         var x = document.getElementById("locationTable").rows.length;
         var a=x-1;
         var value = parseInt(document.getElementById('number').value, 10);
         value = isNaN(value) ? a : value;
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
           "<td class='th'>" + $("#SPSONO").val() + "</td>" +
           "<td class='th'>" + $("#SOProductName").val() + "</td>" +
           "<td class='th'>" + $("#Quantity").val() + "</td>" +
           "<td class='th'>" + $("#Weight").val() + "</td>" +
           "<td class='th'>" + $("#SOwarehouseName").val() + "</td>" +
            "<td class='th'>" +
           "<a type='button'  onclick='SOproductDelete(this);' class='fas fa-trash-alt'>" +
           "</td>" +
           "</tr>");
      }
      else
      {
         toastr.error('SOorderdetail Field Are Required');
      }
      
   }
   function SOproductDelete(ctl) {
    $(ctl).parents("tr").remove();
   }

   // function POwarehouseAddToTable() 
   // {
   //    if ($("#PONO").val() !=''&& $("#POProductName") !='' && $("#POQuantity").val() !=''&& $("#POWeight").val() !=''&& $("#POwarehouseName").val() !='') 
   //    {
   //       var Product_Name=[];
   //       var SO_NO=[];

   //       SO_NO.push();
   //       var x = document.getElementById("locationTable1").rows.length;
   //       var a=x-1;
   //       var value = parseInt(document.getElementById('number').value, 10);
   //       value = isNaN(value) ? a : value;
   //       value++;
   //       document.getElementById('number').value = value;
   //        // First check if a <tbody> tag exists, add one if not
   //        if ($("#locationTable1 tbody").length == 0) {
   //            $("#locationTable1").append("<tbody></tbody>");
   //        }

   //       // Append product to the table
   //       $("#locationTable1 tbody").append(
   //         "<tr>" +
   //         "<td class='th'>" + $("#number").val() + "</td>" +
   //         "<td class='th'>" + $("#PONO").val() + "</td>" +
   //         "<td class='th'>" + $("#POProductName").val() + "</td>" +
   //         "<td class='th'>" + $("#POQuantity").val() + "</td>" +
   //         "<td class='th'>" + $("#POWeight").val() + "</td>" +
   //         "<td class='th'>" + $("#POwarehouseName").val() + "</td>" +
   //          "<td class='th'>" +
   //         "<a type='button'  onclick='POproductDelete(this);' class='fas fa-trash-alt'>" +
   //         "</td>" +
   //         "</tr>");
   //    }
   //    else
   //    {
   //       toastr.error('POorderdetail Field Are Required');
   //    }
      
   // }
   // function POproductDelete(ctl) {
   //  $(ctl).parents("tr").remove();
   // }
   // function ISTwarehouseAddToTable() 
   // {
   //    if ($("#ISTCompany").val() !='' && $("#ISTProductName") !=''&& $("#ISTQuantity").val() !=''&& $("#ISTWeight").val() !='') 
   //    {
   //       var Product_Name=[];
   //       var SO_NO=[];

   //       SO_NO.push();
   //       var x = document.getElementById("locationTable2").rows.length;
   //       var a=x-1;
   //       var value = parseInt(document.getElementById('number').value, 10);
   //       value = isNaN(value) ? a : value;
   //       value++;
   //       document.getElementById('number').value = value;
   //        // First check if a <tbody> tag exists, add one if not
   //        if ($("#locationTable2 tbody").length == 0) {
   //            $("#locationTable2").append("<tbody></tbody>");
   //        }

   //       // Append product to the table
   //       $("#locationTable2 tbody").append(
   //         "<tr>" +
   //         "<td class='th'>" + $("#number").val() + "</td>" +
   //         "<td class='th'>" + $("#ISTCompany").val() + "</td>" +
   //         "<td class='th'>" + $("#ISTProductName").val() + "</td>" +
   //         "<td class='th'>" + $("#ISTQuantity").val() + "</td>" +
   //         "<td class='th'>" + $("#ISTWeight").val() + "</td>" +
   //         "<td class='th'>" + $("#ISTwarehouseName").val() + "</td>" +
   //          "<td class='th'>" +
   //         "<a type='button'  onclick='POproductDelete(this);' class='fas fa-trash-alt'>" +
   //         "</td>" +
   //         "</tr>");
   //    }
   //    else
   //    {
   //       toastr.error('ISTorderdetail Field Are Required');
   //    }
      
   // }
   // function ISTproductDelete(ctl) {
   //  $(ctl).parents("tr").remove();
   // }


   // $('#SPSONO').on('change', function() {
         
   //       var SPSONO=$('#SPSONO').val();
   //       // $('#SOProductName').html("");
   //       $('#SOwarehouseName').html("");
   //        // $('#SOwarehouseName').val("");
   //         $('#Quantity').val("");
   //          $('#Weight').val("");
   //           // $('#SOProductName').append("<option>"+'Select Product'+"</option>");
   //           $('#SOwarehouseName').append("<option>"+'Select Warehouse'+"</option>");
   //       let _token = $('meta[name="csrf-token"]').attr('content');
   //       $.ajax({
   //          type: "POST",
   //          url: "<?php echo e(URL::to('/')); ?>/SO_Details",
   //          data: {
   //              SPSONO: SPSONO,
   //              _token: _token
   //          },
   //          cache: false,
   //             success: function(response) {
              
               
   //             for(i=0; i<response.SO_Details.length; i++)
   //             {

   //               $('#SOProductName').append("<option>"+response.SO_Details[i].ProductName_ID+"</option>");
               
   //             }
                
   //             }
   //       });
   // });
     var quantity;
     var update_quantity;
      
   $('#SOProductName').on('change', function() {

        var SPSONO=$('#SPSONO').val();
         var ProductName=$('#SOProductName').val();
         $('#SOwarehouseName').html("");
        // $('#SOwarehouseName').append("<option></option>");
         let _token = $('meta[name="csrf-token"]').attr('content');
         $.ajax({
            type: "POST",
            url: "<?php echo e(URL::to('/')); ?>/SO_Details",
            data: {
               SPSONO:SPSONO,
               ProductName: ProductName,
                _token: _token
            },
            cache: false,
               success: function(response) {
              
               if (response.ProductName) 
               {
                  for(i=0; i<response.ProductName.length; i++)
                  {
                       $('#SOwarehouseName').append("<option>"+response.ProductName[i].warehouseNumber+"</option>");
                    // $('#warehouseName').val(response.ProductName[i].Warehouse);
                    quantity=response.ProductName[i].Product_Quantity;
                    // $('#Quantity').val(response.ProductName[i].Product_Quantity);
                    // $('#Weight').val(response.ProductName[i].Product_Weight);
                  }
               }
               else
               {
                  // for(i=0; i<response.SO_Details.length; i++)
                  // {
                  //   $('#ProductName').append("<option>"+response.SO_Details[i].ProductName_ID+"</option>");
                  //   // $('#warehouseName').val(response.SO_Details[i].Warehouse);
                  //   // $('#Quantity').val(response.SO_Details[i].Product_Quantity);
                  //   // $('#Weight').val(response.SO_Details[i].Product_Weight);
                  // }
               }
               
                
               }
         });
   });
   $('#POProductName').on('change', function() {

        var SPSONO=$('#SPSONO').val();
         var ProductName=$('#POProductName').val();
         $('#POwarehouseName').html("");
        // $('#POwarehouseName').append("<option></option>");
         let _token = $('meta[name="csrf-token"]').attr('content');
         $.ajax({
            type: "POST",
            url: "<?php echo e(URL::to('/')); ?>/SO_Details",
            data: {
               SPSONO:SPSONO,
               ProductName: ProductName,
                _token: _token
            },
            cache: false,
               success: function(response) {
              
               if (response.ProductName) 
               {
                  for(i=0; i<response.ProductName.length; i++)
                  {
                       $('#POwarehouseName').append("<option>"+response.ProductName[i].warehouseNumber+"</option>");
                    // $('#warehouseName').val(response.ProductName[i].Warehouse);
                    quantity=response.ProductName[i].Product_Quantity;
                    // $('#Quantity').val(response.ProductName[i].Product_Quantity);
                    // $('#Weight').val(response.ProductName[i].Product_Weight);
                  }
               }
               else
               {
                  // for(i=0; i<response.SO_Details.length; i++)
                  // {
                  //   $('#ProductName').append("<option>"+response.SO_Details[i].ProductName_ID+"</option>");
                  //   // $('#warehouseName').val(response.SO_Details[i].Warehouse);
                  //   // $('#Quantity').val(response.SO_Details[i].Product_Quantity);
                  //   // $('#Weight').val(response.SO_Details[i].Product_Weight);
                  // }
               }
               
                
               }
         });
   });
   // $('#ISTProductName').on('change', function() {

   //      var SPSONO=$('#SPSONO').val();
   //       var ProductName=$('#ISTProductName').val();
   //       $('#ISTwarehouseName').html("");
   //      $('#ISTwarehouseName').append("<option></option>");
   //       let _token = $('meta[name="csrf-token"]').attr('content');
   //       $.ajax({
   //          type: "POST",
   //          url: "<?php echo e(URL::to('/')); ?>/SO_Details",
   //          data: {
   //             SPSONO:SPSONO,
   //             ProductName: ProductName,
   //              _token: _token
   //          },
   //          cache: false,
   //             success: function(response) {
              
   //             if (response.ProductName) 
   //             {
   //                for(i=0; i<response.ProductName.length; i++)
   //                {
   //                     $('#ISTwarehouseName').append("<option>"+response.ProductName[i].warehouseNumber+"</option>");
   //                  // $('#warehouseName').val(response.ProductName[i].Warehouse);
   //                  quantity=response.ProductName[i].Product_Quantity;
   //                  // $('#Quantity').val(response.ProductName[i].Product_Quantity);
   //                  // $('#Weight').val(response.ProductName[i].Product_Weight);
   //                }
   //             }
   //             else
   //             {
   //                // for(i=0; i<response.SO_Details.length; i++)
   //                // {
   //                //   $('#ProductName').append("<option>"+response.SO_Details[i].ProductName_ID+"</option>");
   //                //   // $('#warehouseName').val(response.SO_Details[i].Warehouse);
   //                //   // $('#Quantity').val(response.SO_Details[i].Product_Quantity);
   //                //   // $('#Weight').val(response.SO_Details[i].Product_Weight);
   //                // }
   //             }
               
                
   //             }
   //       });
   // });
   // $( "#Quantity" ).on("change",function() {

   //     var val=parseInt($( "#Quantity" ).val());
   //     var q=parseInt(quantity);
   //     var p=$('#ProductName').val();

   //    // var total=$('#locationTable tbody').rows.length();
   //    var x = document.getElementById("locationTable").rows.length;
   //    alert(x);
   //    if (x>1) 
   //    {

   //    }

   //          if(val > q){
   //             toastr.error('Available SO quantity of '+p+'  is '+q).fadeOut(10000);
   //             $('#plus').css('display','none');
   //          }
   //          else
   //          {

   //                 update_quantity=q-val;
   //                   Temp =update_quantity;
   //                 while(Temp > q){
   //                     $('#plus').css('display','none');
   //                 }            

   //             $('#plus').css('display','block');
   //          }


   // });
   $( "#VehicleNo" ).on("input",function() {
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

                  }
                  // else
                  // {
                    
                  //     // $('#TrailerNo').append("<option>"+TrailerNo+"</option>");
                  //    $( "#TrailerNoshow" ).show();
                  //    for(i=0; i<response.IsTrailar.length; i++)
                  //    {
                  //      $('#TrailerNo').append("<option value="+response.IsTrailar[i].TrailerNumber+">"+response.IsTrailar[i].TrailerNumber+"</option>");
                  //    }
                  // }
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

                  }
                  
               }
            });
       
   });  
   $("#D_licenseNo").on("input", function() {

         var VehicleNo = $('#VehicleNo').val();
         var TrailerNo = $('#TrailerNo').val();
         let _token = $('meta[name="csrf-token"]').attr('content');
         if (TrailerNo=='') 
         {
             $('#TrailerNo').val("");
           
         }
         if (TrailerNo.length>='1') 
         {
               $.ajax({
                  type: "POST",
                  url: "<?php echo e(URL::to('/')); ?>/CheckVehicle",
                  data: {
                      TrailerNo: TrailerNo,
                      _token: _token
                  },
                  cache: false,
                  success: function(response) {
                       var a =response.VehicleNo.length;
                       if  (a==0) 
                       {
                           // $('#msg').html("No Vehicle Found").fadeIn('fast').show() //also show a success message 
                           // $('#msg').delay(3000).fadeOut('fast');  
                           // $('#Gatepass_create').prop('disabled',true);
                           alert("No TrailerNo Found! Please Add The TrailerNo for this VehicleNo");

                           $('#clickb').trigger("click");
                           $('#VehicleNumber').val(VehicleNo);
                            $('#tVehicleNumber').val(VehicleNo);
                       }
                  }
               });
         }

   });
   $("#VehicleNo").on("change", function() {

      var VehicleNo = $('#VehicleNo').val();
      let _token = $('meta[name="csrf-token"]').attr('content');
      if (VehicleNo=='') 
      {
          $('#VehicleNo').val("");
        
      }
      if (VehicleNo.length>='3') 
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
                        // $('#msg').html("No Vehicle Found").fadeIn('fast').show() //also show a success message 
                        // $('#msg').delay(3000).fadeOut('fast');  
                        // $('#Gatepass_create').prop('disabled',true);
                        alert("No Vehicle Found! Please Add The VehicleNo");
                        $('#clickb').trigger("click");
                        $('#VehicleNumber').val(VehicleNo);

                    }
                   
                    

               }
            });
      }

       
   });
   $("#D_licenseNo").on("change", function() {

      var DriverID = $('#D_licenseNo').val();
      let _token = $('meta[name="csrf-token"]').attr('content');
      if (DriverID=='') 
      {
          $("#DriverID").val("");
          // $('#Warning').hide(); 
          $('#msg').hide();
          $('#Gatepass_update').prop('disabled',true);
          document.getElementById('my_camera_data').innerHTML = 
                       '<img  src="<?php echo e(asset('dist/img/webcam.png')); ?>">';
        $("#DriverNotes").val("");

      }
      
       
      if (DriverID.length>='4') 
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
                        alert("DriverID Not Found!! Please Add the Driver details")
                        $('#clickd').trigger("click");
                        toastr.error('No Result Found').fadeOut(6000);
                      $('#Gatepass_create').prop('disabled',true);
                    }
                    else
                    {
                        var Active = response.drivers[0].Active
                        $("#DriverID").val(response.drivers[0].FirstName);
                        $("#DriverNotes").val(response.drivers[0].Notes);
                        var str=response.drivers[0].CamScan;
                        const myArr = str.split("data:image/jpeg;base64,");
                       if (myArr[0]!=" ") 
                       {
                         document.getElementById('my_camera_data').innerHTML = 
                                  '' + 
                       '<img  src="'+'data:image/jpeg;base64,'+''+response.drivers[0].CamScan+'"style=" width: 275px; height: 185px;" id="CamScan" alt="photo" >';
                       }
                       else
                       {
                         document.getElementById('my_camera_data').innerHTML = 
                                  '' + 
                       '<img  src="'+response.drivers[0].CamScan+'"style=" width: 275px; height: 185px;" id="CamScan" alt="photo" >';
                       }
                       

                       if (Active == 1) 
                       {
                           $(document).Toasts('create', {
                                class: 'bg-danger', 
                                title: 'Warning',
                                subtitle: '',
                                body: 'Warning !! This Driver was blacklisted.'
                              })
                           $('#Gatepass_create').prop('disabled',true); 
                       }
                       else
                       {
                           // $('#Warning').hide();
                           $('#Gatepass_create').prop('disabled',false);
                       }

                        
                    }

               }
            });
      }

       
   });
</script>
<!-- vehicle -->
<script>
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
                         $("#VehicleNo").append("<option selected value="+response.VehicleNo[0].id+">"+VehicleNumber.toUpperCase()+"</option>");
                           toastr.success(response.success).fadeOut(6000);
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
<script  src="<?php echo e(asset('plugins/jquery/webcam.min.js')); ?>"></script>
<script> 

   function gpreviewFile() 
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

   function gpreviewFile2() 
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

   // Configure a few settings and attach camera

     Webcam.set({
     width: 275,
     height: 185,
     image_format: 'jpeg',
     jpeg_quality: 60
     });
      Webcam.on( 'error', function(err) {
       $('#hidecam').hide();
       $('#camoff').hide();
       $('#camof').hide();
       $('#camofff').hide();
       $('#mobcam').show();
       $('#mobcamof').show();
       
   } );


     function Take_Stream_e() {
       Webcam.attach( '#my_camera' );
        $('#disable').prop('disabled',false);
       }
     function Take_Stream_e2() {
       Webcam.attach( '#my_camera1' );
       $('#disabled').prop('disabled',false);
       }

    // take snapshot and get image data

   function Take_Snap() {
      Webcam.snap( function(data_uri) {
       document.getElementById('my_camera').innerHTML = 
                         '' + 
           '<img  src="' + data_uri + '"style=" width: 275px; height: 185px;" id="CamScan" alt="photo" >';
      } ); 
     }
   // take snapshot and get image data
   function TakeSnap() {
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

          if (LicenseScan == "" && CamScan == "") 
          {
            toastr.error('Please capture both snap.!!').fadeOut(8000);

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
                     toastr.success('Driver successfully added!!').fadeOut(6000);
                  }
              });
         } 
         else 
         {
             toastr.error('Please fill FirstName,This Field Required.!!').fadeOut(6000);
             // alert('Please fill FirstName,This Field Required.!!');
         }
   });
   // $("input[type=radio][name=radio1]").on("change", function() {

   //       if ($("#SO").prop("checked")) 
   //       {
   //          $("#SODetails").show();
   //          $("#PODetails").hide();
   //          $("#ISTDetails").hide();
   //       }
   //       if ($("#PO").prop("checked")) 
   //       {
   //          $("#PODetails").show();
   //          $("#SODetails").hide();
   //          $("#ISTDetails").hide();
   //       }
   //       if ($("#IST").prop("checked")) 
   //       {
   //          $("#ISTDetails").show();
   //          $("#PODetails").hide();
   //          $("#SODetails").hide();
   //       }
   // });
</script>
<script>
    $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
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

   // $("#Gatepass_update").click(function(e) 
   // {
   //     e.preventDefault();
   //     var id  = $('#id').val();
   //     var  company = $('#company').val();
   //     var VehicleNo = $('#VehicleNo').val();
   //     var TransporterID = $("#TransporterID").val();
   //     var DriverID = $('#DriverID').val();
   //     var D_licenseNo = $("#D_licenseNo").val();
   //     var VisitFor = $('#VisitFor').val();
   //     var Status=$('#Gatepass_update').val();
   //     var GatepassType=$("input[name='radio1']:checked").val();
   //     var GatepassExitTime = getDateString($('#gatepassDateTime').val());
      
   //       var Temp ='';
   //       var G_quantity='';
   //       var myTab = document.getElementById('locationTable');
   //     if (myTab== null) 
   //     {
   //        var G_quantity='';
   //     }
   //     else
   //     {
   //       // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
   //       for (i = 1; i <= myTab.rows.length-1; i++) 
   //       {

   //          // GET THE CELLS COLLECTION OF THE CURRENT ROW.
   //          var objCells = myTab.rows.item(i).cells;

   //          // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
   //          for (var j = 0; j < objCells.length; j++) 
   //          {
   //             if(j<=5)
   //             { 
   //                Temp+= objCells.item(j).innerHTML+":";
   //             }
                
   //          }
   //             var temp_slice=Temp.slice(0, -1);
   //             G_quantity+= temp_slice + ",";
   //             Temp = "";
   //       }
   //     }
         
   //       // // PO
   //       // var POTemp ='';
   //       // var GPO_quantity='';
   //       // var myTab = document.getElementById('locationTable1');
   //       // if (myTab==null) 
   //       // {
   //       //    var GPO_quantity='';
   //       // }
   //       // else
   //       // {
   //       //    // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
   //       //    for (i = 1; i <= myTab.rows.length-1; i++) 
   //       //    {

   //       //       // GET THE CELLS COLLECTION OF THE CURRENT ROW.
   //       //       var objCells = myTab.rows.item(i).cells;

   //       //       // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
   //       //       for (var j = 0; j < objCells.length; j++) 
   //       //       {
   //       //          if(j<=5)
   //       //          { 
   //       //             POTemp+= objCells.item(j).innerHTML+":";
   //       //          }
                   
   //       //       }
   //       //          var POtemp_slice=POTemp.slice(0, -1);
   //       //          GPO_quantity+= POtemp_slice + ",";
   //       //          POTemp = "";
   //       //    }
   //       // }
         
   //       // // IST
   //       // var ISTTemp ='';
   //       // var GIST_quantity='';
   //       // var myTab = document.getElementById('locationTable2');
   //       // if (myTab== null) 
   //       // {
   //       //    var GIST_quantity='';
   //       // }
   //       // else
   //       // {
   //       //    // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
   //       //    for (i = 1; i <= myTab.rows.length-1; i++) 
   //       //    {

   //       //       // GET THE CELLS COLLECTION OF THE CURRENT ROW.
   //       //       var objCells = myTab.rows.item(i).cells;

   //       //       // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
   //       //       for (var j = 0; j < objCells.length; j++) 
   //       //       {
   //       //          if(j<=5)
   //       //          { 
   //       //             ISTTemp+= objCells.item(j).innerHTML+":";
   //       //          }
                   
   //       //       }
   //       //          var ISTtemp_slice=ISTTemp.slice(0, -1);
   //       //          GIST_quantity+= ISTtemp_slice + ",";
   //       //          ISTTemp = "";
   //       //    }
   //       // }
         
   //     let _token = $('meta[name="csrf-token"]').attr('content');

   //     if (VehicleNo!='' && company!='' && TransporterID!='' && DriverID!='' && D_licenseNo!='' 
   //         && VisitFor!='') 
   //     {
   //         $.ajax({
   //             type: "POST",
   //             url: "/Gatepass/Gatepassupdate",
   //             data: {
   //                 id:id,
   //                 company:company,
   //                 VehicleNo: VehicleNo,
   //                 TransporterID: TransporterID,
   //                 DriverID: DriverID,
   //                 D_licenseNo: D_licenseNo,
   //                 VisitFor: VisitFor,
   //                 GatepassExitTime: GatepassExitTime,
   //                 G_quantity:G_quantity,
   //                 GatepassType:GatepassType,
   //                 Status:Status,
   //                 _token: _token
   //             },
   //             cache: false,
   //                success: function(response) {
   //                   if (response.error) 
   //                   {
   //                      toastr.error(response.error);
   //                   }
   //                   else{
   //                      var Baseurl = window.location.origin;
   //                      toastr.success("Gatepass updated successfully")
   //                      // location.href = Baseurl+'/admin';
   //                      location.href = Baseurl+'/'+id+'/invoice';
   //                   }
                     
   //             }
   //         });
   //     } 
   //     else 
   //     {
   //          toastr.error('Please all field are required !').fadeOut(6000);
   //     }
   // });

   function GatepassUpdate(Status)
   {
      
       var id  = $('#id').val();
       var  company = $('#company').val();
       var VehicleNo = $('#VehicleNo').val();
       var TransporterID = $("#TransporterID").val();
       var DriverID = $('#DriverID').val();
       var D_licenseNo = $("#D_licenseNo").val();
       var VisitFor = $('#VisitFor').val();
       // var Status=$('#Gatepass_update').val();
       var GatepassType=$("input[name='radio1']:checked").val();
       var GatepassExitTime = getDateString($('#gatepassDateTime').val());
      
         var Temp ='';
         var G_quantity='';
         var myTab = document.getElementById('locationTable');
       if (myTab== null) 
       {
          var G_quantity='';
       }
       else
       {
         // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
         for (i = 1; i <= myTab.rows.length-1; i++) 
         {

            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
            var objCells = myTab.rows.item(i).cells;

            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
            for (var j = 0; j < objCells.length; j++) 
            {
               if(j<=5)
               { 
                  Temp+= objCells.item(j).innerHTML+":";
               }
                
            }
               var temp_slice=Temp.slice(0, -1);
               G_quantity+= temp_slice + ",";
               Temp = "";
         }
       }
         
       let _token = $('meta[name="csrf-token"]').attr('content');

       if (VehicleNo!='' && company!='' && TransporterID!='' && DriverID!='' && D_licenseNo!='' 
           && VisitFor!='') 
       {
           $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/Gatepass/Gatepassupdate",
               data: {
                   id:id,
                   company:company,
                   VehicleNo: VehicleNo,
                   TransporterID: TransporterID,
                   DriverID: DriverID,
                   D_licenseNo: D_licenseNo,
                   VisitFor: VisitFor,
                   GatepassExitTime: GatepassExitTime,
                   G_quantity:G_quantity,
                   GatepassType:GatepassType,
                   Status:Status,
                   _token: _token
               },
               cache: false,
                  success: function(response) {
                     if (response.error) 
                     {
                        toastr.error(response.error);
                     }
                     else{
                        var Baseurl = window.location.origin;
                        toastr.success("Gatepass updated successfully")
                        // location.href = Baseurl+'/admin';
                        location.href = Baseurl+'/'+id+'/invoice';
                     }
                     
               }
           });
       } 
       else 
       {
            toastr.error('Please all field are required !').fadeOut(6000);
       }

   }

   function DeleteGL(id) 
   {
      let _token = $('meta[name="csrf-token"]').attr('content');

      if (id != "") {
          $.ajax({
              type: "POST",
              url: "<?php echo e(URL::to('/')); ?>/GL/GLdelete",
              data: {                     
                  id: id,
                  _token: _token
              },
             beforeSend:function(){
               return confirm("Are you sure to Delete The Product?");
              },
             success: function (response) {
                if (response.error) {
                   toastr.error(response.error)
               }
              },
             error: function(xhr, status, error){
               var errorMessage = xhr.status + ': ' + xhr.statusText
               alert('Error - ' + errorMessage);
               
               }
         });
      } else {
          
      }
   } 
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/gatepass/edit.blade.php ENDPATH**/ ?>