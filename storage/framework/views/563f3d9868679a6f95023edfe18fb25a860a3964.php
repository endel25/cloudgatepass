
<?php $__env->startSection('content'); ?>
<style>

.wmd-view-topscroll, .wmd-view {
    overflow-x: scroll;
    overflow-y: scroll;
    width: 100%;
    border: none 2px RED;
}

.wmd-view-topscroll { height: 20px; }
.wmd-view { height: 400px ; }
.scroll-div1 { 
    width: 100%; 
    overflow-x: scroll;
    overflow-y: hidden;
}
.scroll-div2 { 
    width: 1000px; 
    height:400px;
}

      
div.scroll {
    margin:4px, 4px;
    padding:4px;
    background-color: white;
    width: 100%;
    height: 500px;
    overflow-x: auto;    
    text-align:justify;
}
.my_camera_data{
 width: 200px;
 height: 150px;
 border: 1px solid black;
 margin-left: 5%;
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
.onepp:hover{
  transform: scale(2.0);
}
.th{text-align: center;}
.btn {
 
  border: none;
  
  padding: 2px 6px;
  font-size: 14px;
  cursor: pointer;
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
                           <input type="text" disabled="" name="gatepassDateTime" id="gatepassDateTime" value="" class="input-group-text spanbutton  datetimepicker-input" data-target="#reservationdatetime" style="text-align: left; font-size: 13px;" >
                           <!-- <div class="input-group-append" data-target="#reservationdatetime" data-toggle="datetimepicker">
                                <div class="input-group-text disabled  spanbutton"><i class="fa fa-calendar"></i></div>
                           </div> -->
                        </div>   
                     </div> 
                  </div>
                   <?php if($gatepass->Status != '' &&  $userrole_permissions_status[1]->IsRead==1 &&( $gatepass->VisitFor == 'Loading' || $gatepass->VisitFor == 'OffLoading')): ?>
                  <div class="row" id="transhide">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Order Type
                        <!--  <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup> -->
                        </label>
                     </div>
                     <div class=" col-md-8">
                        <div class="row">&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" <?php echo e($gatepass->GatepassType=='SO'?'checked':''); ?> type="radio" id="SO" name="radio1" value="SO" <?php if($gatepass->Status =='Exit Approved' ||  $gatepass->Status =='Gatepass Issued'): ?> disabled <?php endif; ?> <?php echo e($gatepass->Status =='Exit Approved'?'disabled':''); ?>>
                             <label class="form-check-label" style="font-size: 14px;">SO</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" id="PO" <?php echo e($gatepass->GatepassType=='PO'?'checked':''); ?> type="radio" name="radio1" value="PO" <?php if($gatepass->Status =='Exit Approved'  || $gatepass->Status =='Gatepass Issued'): ?> disabled <?php endif; ?> <?php echo e($gatepass->Status =='Exit Approved'?'disabled':''); ?>>
                             <label class="form-check-label" style="font-size: 14px;">PO</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" id="IST"<?php echo e($gatepass->GatepassType=='IST'?'checked':''); ?> type="radio" name="radio1" value="IST" <?php if($gatepass->Status =='Exit Approved' || $gatepass->Status =='Gatepass Issued'): ?> disabled <?php endif; ?> <?php echo e($gatepass->Status =='Exit Approved'?'disabled':''); ?>>
                             <input type="hidden" id="istid" name="" value="">
                             <label class="form-check-label" style="font-size: 14px;">IST</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" name="ReturnCheck"  type="checkbox" <?php echo e($gatepass->ReturnCheck == '1'?'checked':''); ?> id="ReturnCheck">
                             <input type="hidden" id="" name="" value="">
                             <label class="form-check-label"  style="font-size: 14px;">Return</label>
                           </div>
                        </div>
                     </div>
                  </div>
                   <div class="row" id="transactionhide">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Transaction Type </label>
                     </div>
                     <div class=" col-md-8">
                        <div class="row">&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" id="Screp" <?php echo e($gatepass->TransactionType=='Screp'?'checked':''); ?> type="radio"  name="option1" value="Scrap">
                             <label class="form-check-label" style="font-size: 14px;">Scrap</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                           <div class="form-check">
                             <input class="form-check-input" id="Wrc" <?php echo e($gatepass->TransactionType=='Wrc'?'checked':''); ?> type="radio"  name="option1" value="Wrc">
                             <label class="form-check-label" style="font-size: 14px;">WRC</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check">
                             <input class="form-check-input" id="Hrc" <?php echo e($gatepass->TransactionType=='Hrc'?'checked':''); ?> type="radio"  name="option1" value="Hrc">
                              <label class="form-check-label" style="font-size: 14px;">HRC</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                            <div class="form-check">
                             <input class="form-check-input" id="Billet" <?php echo e($gatepass->TransactionType=='Billet'?'checked':''); ?> type="radio"  name="option1" value="Billet">
                            <label class="form-check-label" style="font-size: 14px;">Billet</label>
                           </div>&nbsp;&nbsp;&nbsp;&nbsp;
                        </div>
                     </div>
                  </div>&nbsp;
                  <?php endif; ?>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Gatepass No
                        </label>    
                     </div>
                     <div class="input-group col-md-8">
                        <input class="form-control form-control-sm" disabled="" value="GP<?php
                            if ($gatepass->id<10) {
                              echo "0".$gatepass->id;
                            }
                            else
                            {
                              echo $gatepass->id;
                            }
                            ?>
                          " id=""autocomplete="off">
                     </div>
                  </div>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Purpose
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class="input-group col-md-8">
                       <select class="form-control form-control-sm" name="VisitFor" id="VisitFor" <?php if($gatepass->Status =='Exit Approved' || $gatepass->Status =='Loading'  || $gatepass->Status =='Gatepass Issued'): ?> disabled <?php endif; ?> <?php echo e($gatepass->Status =='Exit Approved'?'disabled':''); ?>>
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
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label style="font-size: 14px;">Company Name
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                     </div>
                     <div class=" col-md-8" >
                        <select class="form-control form-control-sm select2" name="" id="company" <?php if($gatepass->Status =='Exit Approved' || $gatepass->Status =='Loading' || $gatepass->Status =='Gatepass Issued'): ?> disabled <?php endif; ?> <?php echo e($gatepass->Status =='Exit Approved'?'disabled':''); ?>>
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
                        <input class="form-control form-control-sm" id="VehicleNo" name="" <?php if($gatepass->Status =='Exit Approved' || $gatepass->Status =='Loading'  || $gatepass->Status =='Gatepass Issued'): ?> readonly <?php endif; ?> value="<?php echo e($gatepass->VehicleNo); ?>" placeholder="Enter  VehicleNo" autocomplete="off" >
                     </div>
                     <div class="input-group-append" >
                        <span class="input-group-text spanbutton" id="clickb" data-toggle="modal" data-target="#modal-default3" >
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
                           <input class="form-control form-control-sm" value="<?php echo e($gatepass->TrailerNo); ?>" id="TrailerNo" autocomplete="off" <?php if($gatepass->Status =='Exit Approved' || $gatepass->Status =='Loading'  ||  $gatepass->Status =='Gatepass Issued'): ?> readonly <?php endif; ?>>
                        </div>
                     </div>  
                     <?php endif; ?>
                     <?php if($gatepass->VisitFor == 'Loading' || $gatepass->VisitFor == "OffLoading" || $gatepass->VisitFor == "WITH OUT ORDER"): ?>
                     <div class="row" style="margin-top: 1%;" >
                        <div class="from-group col-md-4" id="AccountVisible">
                           <label  style="font-size: 14px;">Transporter
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                        </div>
                        <div class="input-group col-md-8">
                          <select class="form-control form-control-sm select2" name="TransporterID" id="TransporterID" <?php if($gatepass->Status =='Exit Approved' || $gatepass->Status =='Loading' || $gatepass->Status =='Gatepass Issued'): ?> disabled <?php endif; ?>>
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
                           <label  style="font-size: 14px;">National ID
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>
                        </div>
                        <div class="input-group col-md-7">
                            <input class="form-control form-control-sm" id="D_licenseNo" value="<?php echo e($gatepass->D_licenseNo); ?>" name="" placeholder="Enter  National ID" autocomplete="off"<?php if($gatepass->Status =='Exit Approved' || $gatepass->Status =='Loading' || $gatepass->Status =='Gatepass Issued'): ?> readonly <?php endif; ?> >
                        </div>
                         <div class="input-group-append">
                           <span class="input-group-text spanbutton" id="clickd" data-toggle="modal" data-target="#modal-default4">
                           <i class="fas fa-plus"></i>
                           </span>
                        </div>
                     </div>
                     <?php endif; ?>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Driver Name
                           <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                        </label>    
                     </div>
                     <div class="input-group col-md-8">
                        <input class="form-control form-control-sm" disabled="" value="<?php echo e($gatepass->DriverID); ?>" id="DriverID" autocomplete="off">
                     </div>
                  </div>
                  <?php if($name_u != 'Security'): ?>
                     <?php if($gatepass->TareWeight != 0): ?>
                     <div class="row" style="margin-top: 1%;">
                        <div class="from-group col-md-4">
                           <label  style="font-size: 14px;">Tare Weight
                              <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                           </label>
                        </div>
                        <div class="input-group col-md-8">
                          <input class="form-control form-control-sm" id="TareWeight" value="<?php echo e($gatepass->TareWeight); ?>" disabled name=""  autocomplete="off">
                        </div>
                     </div>
                     <?php endif; ?>
                     <?php if($gatepass->GrossWeight != 0): ?>
                     <div class="row" style="margin-top: 1%;">
                        <div class="from-group col-md-4">
                           <label  style="font-size: 14px;">Gross Weight
                              <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                           </label>
                        </div>
                        <div class="input-group col-md-8">
                          <input class="form-control form-control-sm" id="GrossWeight" value="<?php echo e($gatepass->GrossWeight); ?>" disabled name="" autocomplete="off">
                        </div>
                     </div>
                     <?php endif; ?>
                     <?php if($gatepass->NetWeight != 0): ?>
                     <div class="row" style="margin-top: 1%;">
                        <div class="from-group col-md-4">
                           <label  style="font-size: 14px;">Net Weight
                              <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup>
                           </label>
                        </div>
                        <div class="input-group col-md-8">
                          <input class="form-control form-control-sm" id="" value="<?php echo e($gatepass->NetWeight); ?>" disabled name=""  autocomplete="off">
                        </div>
                     </div>
                     <?php endif; ?>
                  <?php endif; ?>
                  <div class="row" style="margin-top: 1%;">
                     <div class="from-group col-md-4">
                        <label  style="font-size: 14px;">Remark 
                        </label> <span>(Complusory When Reject)</span>
                     </div>
                     <div class="input-group col-md-8">
                       <textarea class="col-md-12" name="Remark" id="Remark"><?php echo e($gatepass->Remark); ?></textarea>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <?php if($gatepass->VisitFor == "Loading" || $gatepass->VisitFor == "OffLoading" || $gatepass->VisitFor == "WITH OUT ORDER"): ?>
                  <div class="row">
                     <div class="my_camera_data" id="my_camera_data">
                     </div>
                  
                  <div  class="my_camera_data" id="my_camera_data_L">
                    
                  </div>
                 
                  </div>
                  <div class="form-group col-md-6"  style="text-align: center; width: 50%; margin-left:22% ; margin-top: 2%;">
                     <input type="" name="" value="<?php echo e($gatepass->Driver_Note); ?>" id="DriverNotes" disabled="" style="height: 50px;width: 100%;">
                     
                  </div>  
                  <?php endif; ?>
               </div>
            </div>
         </div>
      </div>
      <?php if($gatepass->Status != 'Pending Entry' && ($gatepass->TareWeight !='' || $gatepass->GrossWeight !='') && $gatepass->VisitFor != 'WITH OUT ORDER'): ?>
         <?php $__currentLoopData = $userrole_permissions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userrole_permission): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

            <?php if($userrole_permission->IsRead == '1' ): ?>
               
               <div class="card card-default col-md-12" id="SODetails" >
                  <div class="card-header">
                     <h3 class="card-title" id="trnsname"><b>Order Details</b></h3>
                  </div>
                  <div  class="card-body">
                     <div class="form-group">
                        <div class="row">
                           <div class="col-md-4">
                             <label >Order No</label>
                              <div class="row">
                                 
                                 <div class="col-md-9">
                                    
                                    <input class="form-control form-control-sm" min="1" autocomplete="off" type="text" id="SPSONO">
                                 </div>
                                 <div class="col-md-3"  style="cursor: pointer;">
                                    <div class="input-group-append" style="cursor: pointer;">
                                       <span class="input-group-text spanbutton"  data-toggle="modal" style="cursor: pointer;">
                                       <i class="fa fa-database" title="Get Data" style="cursor: pointer;" onclick="Getdata(0)"></i>
                                       </span>
                                       &nbsp;&nbsp;&nbsp;&nbsp;
                                       <span class="input-group-text spanbutton"  data-toggle="modal" style="cursor: pointer;">
                                        <i class="fa fa-trash" aria-hidden="true" title="Delete Data" style="cursor: pointer;" onclick="Getdata(1)"></i>
                                       </span>
                                    </div>
                                 </div>
                                 
                              </div>
                           </div> 
                           
                        </div>
                        </div>
                  </div>
                 <!--  <div class="wmd-view-topscroll"  id="myc" style="display:none;">
                      <div class="scroll-div1">
                      </div>
                  </div> -->
                  <div class="wmd-view">
                      <div id="myprint"  class="scroll-div2">
                        <table  id="locationTable" id="example15" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th class="th">Order No</th>
                                 <th class="th">Product Code</th>
                                 <th class="th" >Product Desc.</th>
                                 <th class="th">Product Weight</th>
                                 <th class="th">Product Theo. Weight(In kg)</th>
                                 <th class="th" id="trnstype">Qty(pcs)</th>
                                 <th class="th" >Qty(KG)</th>
                                 <th class="th">Available Qty(pcs)</th>
                                 <th class="th">Assign Qty(pcs)</th>
                                 <th class="th">Assign Theo. Weight(In kg)</th>
                                 <th class="th">Actual Qty(pcs)</th>
                                 <th class="th">Actual Theo. Weight(In kg)</th>
                                 <th class="th">Qty Variance</th>
                                 <th class="th">Actual Weight(In kg)</th>
                                 <th class="th">Variance Weight(In kg)</th>
                                 <?php if($gatepass->GatepassType == 'IST'): ?>
                                 <th class="th" id='fromhide' style="display:none;">From Warehouse Code</th>
                                 <?php endif; ?>
                                 <th class="th">Warehouse Code</th>
                                 <th class="th">Sub Warehouse</th>
                                 <th class="th">Super visor</th>
                                 <th class="th">Loading  Type</th>
                                 <th class="th">Approved By</th>
                                 <?php if($name_u=='Admin' || ($gatepass->Status !='Exit Approved' && $gatepass->Status !='Gatepass Issued')): ?>
                                    <th class="th">Active</th>
                                 <?php endif; ?>
                                
                              </tr>
                              <tbody>
                              <?php $__currentLoopData = $g_l_m; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_l_m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                  <td  style="display:none;"><?php echo e($g_l_m->id); ?></td>
                                  <!-- product code -->
                                  <td title="Product Code"><?php echo e($g_l_m->OrderNo); ?>-<?php echo e($g_l_m->Trans_Type); ?></td>
                                 <!-- product Decs -->
                                  <td title="Product Decs"> <input type="hidden" id="ProductName<?php echo e($g_l_m->id); ?>"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($g_l_m->ProductName); ?>" readonly ><?php echo e($g_l_m->ProductName); ?></td>
                                  <td title="Product Decs"><?php echo e($g_l_m->ProductDescription); ?></td>
                                  <!-- product_Weight -->
                                  <td title="Product Weight"><input type="hidden" id="product_Weight<?php echo e($g_l_m->id); ?>"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($g_l_m->product_Weight); ?>" readonly ><?php echo e($g_l_m->product_Weight); ?></td>
                                   <!-- Product Theo. Weight(In kg) -->
                                  <td title="Product Theo. Weight(In kg)"><input type="label" id="Weight"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($g_l_m->Weight); ?>"readonly></td>
                                  <!-- Qty(pcs) -->
                                  <td title="Qty(pcs)"><input type="label" id="Quantity<?php echo e($g_l_m->id); ?>"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($g_l_m->Quantity); ?>" readonly></td>

                                  <!-- Qty(KG) -->
                                  <td><input type="hidden" id="Quantity_kg<?php echo e($g_l_m->id); ?>" name="" value="<?php echo e($g_l_m->Quantity_kg); ?>"><?php echo e($g_l_m->Quantity_kg); ?></td>
                                  
                                  <!-- Available Qty(pcs) -->
                                  <td title="Available Qty(pcs)" id="AvailableQty<?php echo e($g_l_m->id); ?>"><?php echo e($g_l_m->AvailableQty); ?></td>
                                  <!-- Assign Qty(pcs) -->
                                  <td title="Assign Qty(pcs)" id="editAssign_qty<?php echo e($g_l_m->id); ?>"><?php echo e($g_l_m->Assign_Quantity); ?></td>
                                  <td id="edit_Assign_qty<?php echo e($g_l_m->id); ?>" style="display:none" > <input type="number" id="Assign_qty<?php echo e($g_l_m->id); ?>"  style="font-size: 14px; text-align: center; width:100%; border-right: none; border-left: none; border-top: none; background: white; flex: 0 0 0%; " max="3" value=""></td>
                                  <!-- Assign Theo. Weight(In kg) -->
                                  <td title="Assign Theo. Weight(In kg)" class="th"><?php echo e($g_l_m->Assign_Weight); ?></td>
                                  <!-- Actual Qty(pcs) -->
                                  <td title="Actual Qty(pcs)"><input type="label" id="Actual_Quantity<?php echo e($g_l_m->id); ?>"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($g_l_m->Actual_Quantity); ?>" readonly >
                                    <input type="label" id="editActual_Quantity<?php echo e($g_l_m->id); ?>"  style="font-size: 14px; text-align: center; width:100%; display: none; background: white; flex: 0 0 0%;"></td>
                                    
                                    <!-- Actual Theo.  Weight(inkg) -->
                                 <td title="Actual Theo. Weight(In kg)" class="th"><?php $ActualTheo= ($g_l_m->Actual_Quantity) * ($g_l_m->Quantity);
                                 echo $ActualTheo; ?> </td>

                                    <!-- Qty Variance -->
                                    <td class="th" id="editQtyVariance<?php echo e($g_l_m->id); ?>"><?php $QtyVariance= ($g_l_m->Assign_Quantity) - ($g_l_m->Actual_Quantity);
                                 echo $QtyVariance; ?></td>
                                
                                 <!-- Actual Weight(In kg) -->
                                  <td title="Actual Weight(In kg)" class="th"><?php echo e($g_l_m->Actual_Weight); ?></td>
                                   <!-- Variance Weight(In kg) -->
                                  <?php if($gatepass->LoadingType == 'Item' || $g_l_m->Actual_Weight != ""): ?>
                                  <td title="Variance Weight(In kg)"><?php  echo bcsub($ActualTheo, $g_l_m->Actual_Weight,1); ?></td>
                                  <?php else: ?>
                                  <td></td>
                                 <?php endif; ?>

                                  <?php if($gatepass->GatepassType == 'IST'): ?>
                                  <td title="FromWarehouse" class="th"  id="fromhide2"  style="display:none;"><?php echo e($g_l_m->FromWarehouse); ?></td><?php endif; ?>
                                  <!-- warehouse -->
                                  <td title="warehouse"><input type="label" id="warehouse"  style="font-size: 14px; text-align: center; width:100%; border: none; background: white; flex: 0 0 0%;" value="<?php echo e($g_l_m->warehouse); ?>" readonly></td>
                                  <td id="edit_SubWarehouse<?php echo e($g_l_m->id); ?>" style="display:none">
                                    <select class="col-md-12" name="" id="SubWarehouse<?php echo e($g_l_m->id); ?>" disabled>
                                       <option value="">select</option>
                                    </select>
                                  </td>
                                  <!-- Warehouse Code -->
                                  <td title="Warehouse Code" id="editSubWarehouse<?php echo e($g_l_m->id); ?>"><?php echo e($g_l_m->Subwarehouse); ?></td>

                                  <td title="Supervisor" id="editSupervisor<?php echo e($g_l_m->id); ?>"><?php echo e($g_l_m->Supervisor); ?></td>
                                  <td title="Supervisor" id="edit_Supervisor<?php echo e($g_l_m->id); ?>" style="display:none">
                                    <select  name="" id="Supervisor<?php echo e($g_l_m->id); ?>" disabled>
                                       <option value="">select</option>
                                       <?php $__currentLoopData = $whs_user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $whs_users): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                       <option><?php echo e($whs_users->FirstName); ?></option>
                                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </select>
                                  </td>
                                  <td title="LoadingType" id="editLoadingType<?php echo e($g_l_m->id); ?>"><?php echo e($g_l_m->LoadingType); ?></td>
                                  <td title="LoadingType" id="edit_LoadingType<?php echo e($g_l_m->id); ?>" style="display:none">
                                    <select  name="" id="LoadingType<?php echo e($g_l_m->id); ?>">
                                       <option value="">select</option>
                                       <option value="Item">Item</option>
                                       <option value="Warehouse">Warehouse</option>
                                    </select>
                                  </td>
                                 <td style="text-align-last:center;"><input type="text" id="ApprovedBy_Item<?php echo e($g_l_m->id); ?>" value="<?php echo e($g_l_m->ApprovedBy_Item); ?>" ></td>
                                 <?php if($name_u=='Admin' || ($gatepass->Status !='Exit Approved' && $gatepass->Status !='Gatepass Issued')): ?>
                                  <td>
                                    <div class="row">
                                       <button class="btn" id="editorder<?php echo e($g_l_m->id); ?>" onclick="editorder(<?php echo e($g_l_m->id); ?>)"><i class="fa fa-edit" title="EDIT"></i></button>
                                       <button class="btn" id="saveorder<?php echo e($g_l_m->id); ?>" onclick="saveorder(<?php echo e($g_l_m->id); ?>)" style="display: none;"><i class="fas fa-save" title="SAVE"></i> /</button>
                                       <button class="btn" id="cancleorder<?php echo e($g_l_m->id); ?>" onclick="cancleorder(<?php echo e($g_l_m->id); ?>)" style="display: none;"><i class="fas fa-times" title="CANCLE"></i></button>
                                       
                                       <button class="btn" id="dltorder<?php echo e($g_l_m->id); ?>" onclick='DeleteGL(<?php echo e($g_l_m->id); ?>);'><i class="fas fa-trash-alt "></i></button>

                                       <button class="btn" id="Verifyorder<?php echo e($g_l_m->id); ?>" onclick='Verifyorder(<?php echo e($g_l_m->id); ?>);' ><i class="fas fa-check" title="VERIFY"></i></button>

                                       <button class="btn" id="Unverifyorder<?php echo e($g_l_m->id); ?>" onclick="Unverifyorder(<?php echo e($g_l_m->id); ?>)" style="display: none;"><i class="fas fa-times" title="UNVERIFY"></i></button>

                                    </div>
                                  </td>
                                  <?php endif; ?>  
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                           </thead>
                        </table> 
                      </div>
                  </div>
                  &nbsp;&nbsp;&nbsp;&nbsp;
                  <div class="">
                      <div id=""  class="">
                        <table  id="location_Table_1" id="example15" class="table table-bordered table-striped">
                           <thead>
                              <tr>
                                 <th style="display:none">id</th>
                                 <th class="th">Warehouse</th>
                                 <th class="th">Subwarehouse</th>
                                 <th class="th">Assign Theoretical Weight(In kg)</th>
                                 <th class="th">Actual Theoretical  Weight(In kg)</th>
                                 <th class="th">Actual Weight(In kg)</th>
                                 <th class="th" id="W_variance">Weight Variance</th>
                                 <th class="th">Approve By</th>
                                 <th class="th">Verify</th>
                                 <?php if($name_u=='Manager' || $userrole_permissions_status[6]->IsExecute==1): ?>
                                
                                 <th class="th">Action</th> <?php endif; ?>
                              </tr>
                              <tbody>
                                  <?php $__currentLoopData = $g_l_w; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $g_l_w): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <tr>
                                    <td style="display:none"><?php echo e($g_l_w->id); ?></td>
                                    <td class="th"><?php echo e($g_l_w->warehouse); ?></td>
                                    <td class="th"><?php echo e($g_l_w->SubWarehouse); ?></td>
                                    <td class="th"><?php echo e($g_l_w->Assign_theo_weight); ?></td>
                                    <?php if($g_l_w->Actual_theo_weight != "" || $g_l_w->Assign_theo_weight==0): ?>
                                    <td class="th"><?php echo e($g_l_w->Actual_theo_weight); ?></td>
                                    <td class="th" ><?php echo e($g_l_w->Actual_Weight); ?></td>
                                    <td class="th" id="A_W_eight<?php echo e($g_l_w->id); ?>"><?php  echo bcsub($g_l_w->Actual_Weight, $g_l_w->Actual_theo_weight,2); ?></td>
                                    <?php else: ?>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <?php endif; ?>
                                    <td ><input class="col-md-12" id="ApproveBy<?php echo e($g_l_w->id); ?>" type="" name="" value="<?php echo e($g_l_w->ApproveBy); ?>"></td>
                                    <td><?php if($g_l_w->verify == 1): ?> 
                                          <i class="fa fa-check" aria-hidden="true"></i>
                                       <?php endif; ?>
                                       <?php if($g_l_w->verify == 0): ?> 
                                       <i class="fa fa-times" aria-hidden="true"></i>
                                       <?php endif; ?>
                                    </td>
                                    <?php if($name_u=='Manager' || $userrole_permissions_status[6]->IsExecute==1): ?>
                                    <td><a href="" onclick="Verify_s(<?php echo e($g_l_w->id); ?>,1)"> Verify</a>/<a href="" onclick="Verify_s(<?php echo e($g_l_w->id); ?>,0)">Not Verify</a></td><?php endif; ?>
                                 </tr>
                                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                              
                           </thead>
                        </table> 
                      </div>
                  </div>
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
                           <label>Vehicle No</label>
                           <input class="form-control form-control-sm" type="text" style=" text-transform: uppercase;"  name="VehicleNumber" id="tVehicleNumber" placeholder="" autocomplete="off">
                        </div>
                        <div class="form-group col-md-6">
                           <label>Trailer  No</label>
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
                        <div id="my_camera1"><img src="<?php echo e(asset('dist/img/webcam.png')); ?>" id="LicenseScan"></div>
                          <label for="cameraFile" id="mobcamof" style="margin-left: 40%; margin-top: 2%; display: none;">
                            <span class="btn btn-block btn-outline-primary btn-xs" >Take National ID Snp</span>
                            <input type="file" id="cameraFile" style="display: none;" accept="image/*"  onchange="gpreviewFile2()" capture="environment"/>
                          </label>
                        <div style="margin-top: 2%;" id="camoff">
                          <button type="button"  class="btn btn-block btn-outline-primary btn-xs col-md-6" value="Take Snapshot" onClick="TakeSnap()" style="margin-left: 22%;" id="disabled" disabled="">Take National ID Snap</button>
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
         <!-- <input type="hidden" name="" id="hideorder" value="<?php echo e($gatepass->Status); ?>"> -->
         <div class="col-xs-12 text-right">
            <?php if($gatepass->Status == 'Pending Entry' && $userrole_permissions_status[0]->IsExecute==1 && $gatepass->UserId == $UserId ): ?>
               <button value="Pending Entry"  onclick="GatepassUpdate(this.value);"    class="btn btn-primary btn-sm">Pending Entry</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if(($gatepass->Status == 'Pending Entry' && $userrole_permissions_status[5]->IsExecute==1 && $gatepass->UserId == $UserId ) && ($gatepass->VisitFor != 'Loading' && $gatepass->VisitFor != 'OffLoading' && $gatepass->VisitFor != 'WITH OUT ORDER')): ?>
               <button value="Exit Approved"  onclick="GatepassUpdate(this.value);"    class="btn btn-primary btn-sm">Exit Approve</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if($gatepass->Status == 'Pending Entry' && $userrole_permissions_status[1]->IsExecute==1 &&( $gatepass->VisitFor == 'Loading' || $gatepass->VisitFor == 'OffLoading' || $gatepass->VisitFor == 'WITH OUT ORDER')): ?> 
               <button  value="Entry Approved" onclick="GatepassUpdate(this.value);"  class="btn btn-primary btn-sm">Entry Approve</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if($gatepass->Status == 'Entry Approved' && $userrole_permissions_status[1]->IsExecute==1 && $gatepass->UserId == $UserId &&( $gatepass->VisitFor == 'Loading' || $gatepass->VisitFor == 'OffLoading' || $gatepass->VisitFor == 'WITH OUT ORDER')): ?>
               <button  value="Entry Approved"   onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Entry Approve</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if($gatepass->Status == 'Entry Approved' && $userrole_permissions_status[2]->IsExecute==1): ?>
               <button  value="Loading" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm" <?php if($gatepass->TareWeight == '' && $gatepass->GrossWeight == ''): ?> disabled <?php endif; ?>>Loading</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if($gatepass->Status == 'Loading' && $userrole_permissions_status[2]->IsExecute == 1 && $gatepass->UserId == $UserId ): ?>
               <button  value="Loading" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Loading</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if($gatepass->Status == 'Loading' && $userrole_permissions_status[7]->IsExecute==1 && $gatepass->VisitFor != 'WITH OUT ORDER' ): ?>
            <?php $__currentLoopData = $count_loading; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $count_loading): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <button  value="Verify" id="Verify"  onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm" <?php   if($gatepass->NetWeight == 0 || $count_loading->id != 0) { ?> disabled  <?php } ?> >Verify</button>&nbsp;&nbsp;
       
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
   
            <?php if($gatepass->Status == 'Verify' && $userrole_permissions_status[4]->IsExecute==1 || ($gatepass->VisitFor == 'WITH OUT ORDER' && $gatepass->Status == 'Loading')): ?>
               <button  value="Gatepass Issued" id="GatepassIssued" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm" <?php if($gatepass->NetWeight == 0): ?> disabled <?php endif; ?>>Gatepass Issued</button>&nbsp;&nbsp;
            <?php endif; ?>
            
            <?php if(($gatepass->Status == 'Gatepass Issued' && $userrole_permissions_status[2]->IsExecute==1 && $gatepass->UserId == $UserId) ): ?>
               <button  value="Gatepass Issued" onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm" <?php if($gatepass->NetWeight == 0): ?> disabled <?php endif; ?>>Gatepass Issued</button>&nbsp;&nbsp;
            <?php endif; ?>

            <?php if(($gatepass->Status == 'Gatepass Issued' && $userrole_permissions_status[5]->IsExecute==1) &&( $gatepass->VisitFor != 'Loading' || $gatepass->VisitFor != 'offLoading' || $gatepass->VisitFor == 'WITH OUT ORDER')): ?>
               <button  value="Exit Approved" <?php if($gatepass->NetWeight == 0): ?> disabled <?php endif; ?> onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Exit Approve</button>&nbsp;&nbsp; 
            <?php endif; ?>

            <?php if($gatepass->Status != 'Exit Approved' && $userrole_permissions_status[6]->IsExecute==1 || $name_u=='Admin'): ?>
               <button  value="Rejected"   onclick="GatepassUpdate(this.value);" class="btn btn-primary btn-sm">Reject</button> 
            <?php endif; ?>
            <input class="btn btn-primary btn-sm" action="action" onclick="window.history.go(-1); return false;" type="submit" value="Back"/>
         </div> 

         <input type="hidden" id="refresh" value="<?php echo e($gatepass->Status); ?>" name="">
      </div>
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

            setInterval(function()
            { 
               if ($("#refresh").val() =='Entry Approved' || $("#refresh").val() =='Loading')
               {
                  window.location.reload();               
               }

            }, 300000); // 300000


           //Auto both photo 
           
            var DriverID = $('#D_licenseNo').val();
            let _token = $('meta[name="csrf-token"]').attr('content');
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
                     if  (a!=0) 
                     {
                        // var Active = response.drivers[0].Active
                        var str=response.drivers[0].licenseNo;
                        const myArr = str.split("data:image/jpeg;base64,");
                        if (str!=" ") 
                        {
                            document.getElementById('my_camera_data').innerHTML = '' +
                       
                           '<img  class="myimg onepp"  id="CamScan" src="<?php echo e(URL::to('/')); ?>/storage/app/public/webcam/'+response.drivers[0].licenseNo+'cam'+'.jpg" style="width: inherit; height: inherit; object-fit: contain;" name="">';

                           document.getElementById('my_camera_data_L').innerHTML = 
                           '' + 
                           '<img class="onepp" src="<?php echo e(URL::to('/')); ?>/storage/app/public/webcam/'+response.drivers[0].licenseNo+'.jpg"style="width: inherit; height: inherit; object-fit: contain;"  id="LicenseScan" alt="photo" >';
                        }
                        else
                        {
                           document.getElementById('my_camera_data').innerHTML = '' +
                       
                           '<img  class="myimg onepp"  id="CamScan" src="<?php echo e(URL::to('/')); ?>/storage/app/public/webcam/'+response.drivers[0].licenseNo+'cam'+'.jpg" style="width: inherit; height: inherit; object-fit: contain;" name="">';


                           document.getElementById('my_camera_data_L').innerHTML = 
                           '' + 
                           '<img class="onepp" src="'+response.drivers[0].LicenseScan+'"style=" width: 250px; height: 185px; object-fit: contain;" id="LicenseScan" alt="photo" >';
                        } 
                     }
                  }
               });
            });

            if (true) 
            {
               var my_Tab = document.getElementById('location_Table_1');
         
               // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
               for (i = 1; i <= my_Tab.rows.length-1; i++) 
               {
                      // GET THE CELLS COLLECTION OF THE CURRENT ROW.
                     var obj_Cells = my_Tab.rows.item(i).cells;

                     // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
                  for (var j = 0; j < obj_Cells.length; j++) 
                  {
                     if(j==0)
                     { 
                        Temp_id= obj_Cells.item(j).innerHTML;
                        var ApproveBy=$('#ApproveBy'+Temp_id).val();
                        // alert(ApproveBy);
                        if (ApproveBy == "") 
                        {
                          $('#Verify').prop('disabled',true); 
                         

                        }
                        else
                        {
                          $('#Verify').prop('disabled',false); 
                          
                        }
                     }
 
                  }   
               }
            }

            // Sum of Actual Weight

            var Temp_w ='';
            var W_variance=[];

            var myTab = document.getElementById('locationTable');
            if (myTab== null) 
            {
                var W_variance=[];
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
                     
                     if(j==11)
                     { 
                        Temp_w= objCells.item(j).innerHTML;
                     }

 
                  }
                     W_variance.push(parseFloat(Temp_w));
               }
            }
           
            var sum = W_variance.reduce(function(a, b){
                 return a + b;
             });
    
            var IST=$( "#istid" ).val()
            if (IST == "IST") 
            {
               $( "#fromhide" ).show();
               $( "#fromhide2" ).show();
            }
            else{
               $( "#fromhide" ).hide();
               $( "#fromhide2" ).hide();
            }
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

   function Getdata(Is_Save)
   {
      event.preventDefault()
      
      var orderno=$("#SPSONO").val();
      var gpId=$("#id").val();
      var GatepassType=$("input[name='radio1']:checked").val();
      var TransactionType=$("input[name='option1']:checked").val();
      let _token = $('meta[name="csrf-token"]').attr('content');
      if(GatepassType != undefined && orderno != '' && TransactionType != '')
      {
         $.ajax({
            type: "GET",
            url: "<?php echo e(URL::to('/')); ?>/getdetails",
            data: {
               Is_Save:Is_Save,
               orderno:orderno,
               gpId: gpId,
               GatepassType:GatepassType,
               TransactionType:TransactionType,
               _token: _token
            },
            cache: false,
            success: function(response) {
               if (response.error) 
               {
                  toastr.error(response.error)
               }
               if (response.Message) 
               {
                  toastr.success(response.Message)
                  window.location.reload();
               }
           
            }
         });
      }
      else
      {
         if (TransactionType== '') {
          toastr.error("Please Select Transaction");
         }

         if (orderno == '') 
         {
           toastr.error("OrderNo is Required");
         }
         if(GatepassType == undefined)
         {
           toastr.error("Please Select Transactiontype");
         }
      }
       

   }


         
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
                        alert("No Vehicle Found! Please Add The VehicleNo");
                        $('#clickb').trigger("click");
                        $('#VehicleNumber').val(VehicleNo);
                    }
                    else
                    {
                     
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
                        $("#DriverID").val(response.drivers[0].FirstName +' '+response.drivers[0].LastName);
                        $("#DriverNotes").val(response.drivers[0].Notes);
                        var str=response.drivers[0].licenseNo;
                        // const myArr = str.split("data:image/jpeg;base64,");
                       if (str !=" " ) 
                       {
                           document.getElementById('my_camera_data').innerHTML = '' +
                       
                           '<img  class="myimg onepp"  id="CamScan" src="<?php echo e(URL::to('/')); ?>/storage/app/public/webcam/'+response.drivers[0].licenseNo+'cam'+'.jpg" style="width: inherit; height: inherit; object-fit: contain;" name="">';

                           document.getElementById('my_camera_data_L').innerHTML = 
                           '' + 
                           '<img class="onepp" src="<?php echo e(URL::to('/')); ?>/storage/app/public/webcam/'+response.drivers[0].licenseNo+'.jpg"style="width: inherit; height: inherit; object-fit: contain;"  id="LicenseScan" alt="photo" >';
                       }
                       else
                       {
                          document.getElementById('my_camera_data').innerHTML = '' +
                       
                           '<img  class="myimg onepp"  id="CamScan" src="<?php echo e(URL::to('/')); ?>/storage/app/public/webcam/'+response.drivers[0].licenseNo+'cam'+'.jpg" style="width: inherit; height: inherit; object-fit: contain;" name="">';


                           document.getElementById('my_camera_data_L').innerHTML = 
                           '' + 
                           '<img class="onepp" src="'+response.drivers[0].LicenseScan+'"style=" width: 250px; height: 185px; object-fit: contain;" id="LicenseScan" alt="photo" >';
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
</script>
<script>
   function Verify_s(id,int)
   {
       event.preventDefault();
      var ApproveBy=$('#ApproveBy'+id).val();
       let _token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/w_Verify",
               data: {
                   ApproveBy:ApproveBy,
                   id:id,
                   int:int,
                   _token: _token
               },
               cache: false,
                  success: function(response) {
                    
                        toastr.success("Verify updated successfully");
                        window.location.reload();
                       
                    
               }
           });


   }
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

   function GatepassUpdate(Status)
   { 
       event.preventDefault();
       var id  = $('#id').val();
       var  company = $('#company').val();
       var VehicleNo = $('#VehicleNo').val();
       // var TransporterID = $("#TransporterID").val();
       var TransporterID =$("#TransporterID option:selected").text();
       var DriverID = $('#DriverID').val();
       var D_licenseNo = $("#D_licenseNo").val();
       var VisitFor = $('#VisitFor').val();
       var ReturnCheck = $("input[name='ReturnCheck']:checked").val();
       // var Status=$('#Gatepass_update').val();
       var GatepassType=$("input[name='radio1']:checked").val();
       var TransactionType=$("input[name='option1']:checked").val();
       var GatepassExitTime = getDateString($('#gatepassDateTime').val());
       var Remark=$('textarea#Remark').val();
      
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

       if ((VehicleNo!='' && company!='' && TransporterID!='' && DriverID!='' && D_licenseNo!='' 
           && VisitFor!='' ) || Status == 'Exit Approved') 
      {

         if (Status=='Loading' && G_quantity == "" && VisitFor != "WITH OUT ORDER") 
         {
            toastr.error("Please fill the Order List fields are required!!");
         }
         else if (Status=='Rejected' && Remark == "") 
         {
            toastr.error("Remark field is Mandatory");
         }
         else
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
                   TransactionType:TransactionType,
                   ReturnCheck:ReturnCheck,
                   Status:Status,
                   Remark:Remark,
                   _token: _token
               },
               cache: false,
                  success: function(response) {
                     if (response.error) 
                     {
                        toastr.error(response.error).fadeOut(10000);
                       
                     }
                     else{
                        toastr.success("Gatepass updated successfully")
                        location.href = "<?php echo e(URL::to('/')); ?>/"+id+"/invoice";
                     }
                     
               }
            });
         } 
      } 
      else 
      {
         toastr.error('Please all field are required !').fadeOut(6000);
      }
   }

   function editorder(id)
   { 
      var select = document.getElementById("SubWarehouse"+id+"");
      var length = select.options.length;
      for (i = length; i >= 1; i--) {
        select.options[i] = null;
      }
      var Actual_Quantity=$("#Actual_Quantity"+id+"").val();
      
      var editQtyVariance= $('#editQtyVariance'+id+'').text();
      var AvailableQty=$('#AvailableQty'+id+'').text();
      if (editQtyVariance != 0) 
      {
         $('#editActual_Quantity'+id+'').show();
         $('#Actual_Quantity'+id+'').hide();
      }
      $('#editActual_Quantity'+id+'').val(Actual_Quantity); 
      $('#editorder'+id+'').hide();
      $('#saveorder'+id+'').show();
      $('#cancleorder'+id+'').show();
      $('#dltorder'+id+'').hide();
      $('#edit_SubWarehouse'+id+'').show();
      $('#editSubWarehouse'+id+'').hide();
      $('#editSupervisor'+id+'').hide();
      $('#edit_Supervisor'+id+'').show();
      $('#edit_Assign_qty'+id+'').show();
      $('#editAssign_qty'+id+'').hide();
      $('#editLoadingType'+id+'').hide();
      $('#edit_LoadingType'+id+'').show();
      

      $('#SubWarehouse'+id+'').prop('disabled',false);
      $('#Supervisor'+id+'').prop('disabled',false);

      const AvailableQty_split = AvailableQty.split(",");
      // const Available_Qty = AvailableQty_split.split(":");

      for (var i = 0; i <= AvailableQty_split.length-1; i++) {
         const Available_Qty = AvailableQty_split[i].split(":");
         $('#SubWarehouse'+id+'').append("<option>"+Available_Qty[0]+"</option>");
      }

   }
   function saveorder(id)
   { 
      let _token = $('meta[name="csrf-token"]').attr('content');
      // $('#Actual_Quantity'+id+'').show();
      var ProductName = $('#ProductName'+id+'').val();
      var product_Weight = $('#product_Weight'+id+'').val();
      var Actual_Quantity = $('#editActual_Quantity'+id+'').val();
      var Quantity = parseInt($('#Quantity'+id+'').val());
      var SubWarehouse = $('#SubWarehouse'+id+'').val();
      var Supervisor = $('#Supervisor'+id+'').val();
      var Assign_qty = parseInt($('#Assign_qty'+id+'').val());
      var LoadingType = $('#LoadingType'+id+'').val();
      var Quantity_kg = $('#Quantity_kg'+id+'').val();

         if ((Quantity < Assign_qty) && (Quantity != "" || Quantity != 0)) 
         {  
            toastr.error("Assigned Quantity is not larger than SAP Quantity");
         }
         else
         {
            $.ajax({
              type: "POST",
              url: "<?php echo e(URL::to('/')); ?>/saveorder",
              data: {                     
                  id: id,
                  ProductName:ProductName,
                  product_Weight:product_Weight,
                  Actual_Quantity:Actual_Quantity,
                  Quantity:Quantity,
                  SubWarehouse:SubWarehouse,
                  LoadingType:LoadingType,
                  Supervisor:Supervisor,
                  Assign_qty:Assign_qty,
                  _token: _token
              },
             success: function (response) {
                
                  toastr.success('success');
                  $('#Actual_Quantity'+id+'').show();
                  $('#editActual_Quantity'+id+'').hide();
                  $('#editorder'+id+'').show();
                  $('#saveorder'+id+'').hide();
                  $('#cancleorder'+id+'').hide();
                  $('#editSubWarehouse'+id+'').show();
                  $('#edit_SubWarehouse'+id+'').hide();
                  $('#editSupervisor'+id+'').show();
                  $('#edit_Supervisor'+id+'').hide();
                  $('#edit_Assign_qty'+id+'').hide();
                  $('#editAssign_qty'+id+'').show();
                  $('#edit_LoadingType'+id+'').show();
                  $('#editLoadingType'+id+'').hide();
                  document.getElementById('Assign_qty'+id+'').readOnly = true;
                  var select = document.getElementById("SubWarehouse"+id+"");
                  var length = select.options.length;
                  for (i = length-1; i >= 0; i--) {
                    select.options[i] = null;
                  }
                  window.location.reload();
               
              },
             error: function(xhr, status, error){
               var errorMessage = xhr.status + ': ' + xhr.statusText
               alert('Error - ' + errorMessage);
               
               }
            });
         }
     
   }
   function cancleorder(id)
   { 
      // var Actual_Quantity=$("#Actual_Quantity"+id+"").val();
      $('#Actual_Quantity'+id+'').show();
      $('#editActual_Quantity'+id+'').hide();
      // $('#editActual_Quantity'+id+'').val(Actual_Quantity); 
      $('#editorder'+id+'').show();
      $('#saveorder'+id+'').hide();
      $('#cancleorder'+id+'').hide();
      $('#dltorder'+id+'').show();
      $('#edit_SubWarehouse'+id+'').hide();
      $('#editSubWarehouse'+id+'').show();
      $('#edit_SubWarehouse'+id+'').hide();
      $('#editSubWarehouse'+id+'').show();
      $('#editSupervisor'+id+'').show();
      $('#edit_Supervisor'+id+'').hide();
      $('#edit_Assign_qty'+id+'').hide();
      $('#editAssign_qty'+id+'').show();

   }
   function Verifyorder(id)
   {
      var ApprovedBy_Item =$('#ApprovedBy_Item'+id+'').val();
      let _token = $('meta[name="csrf-token"]').attr('content');
     
       $.ajax({
              type: "POST",
              url: "<?php echo e(URL::to('/')); ?>/Verifyorder",
              data: {                     
                  id: id,
                  ApprovedBy_Item:ApprovedBy_Item,
                  _token: _token
              },
             success: function (response) {
                  toastr.success(response.success); 
                  window.location.reload();
              },
             error: function(xhr, status, error){
               var errorMessage = xhr.status + ': ' + xhr.statusText;
               toastr.error('Error - ' + errorMessage);
               }
            });
   }
// Unverifyorder
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
                   window.location.reload();
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
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/gatepass/edit.blade.php ENDPATH**/ ?>