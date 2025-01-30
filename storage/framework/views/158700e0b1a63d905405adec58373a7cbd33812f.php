
<?php $__env->startSection('content'); ?>
<style type="text/css">
   .th{text-align: center;}
</style>
<section class="content-header">
   <div class="card card-default">
      <div class="card-header">
         <h3 class="card-title">Warehouse Managment</h3>
         <div class="card-tools">
            <ol class="breadcrumb float-sm-right">
               <a class="btn btn-block btn-primary btn-sm" href="<?php echo e(route('warehouse.index')); ?>"> Back</a>
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
  <form >
      <div class="card card-default col-md-12">
         <div class="card-header">
            <h3 class="card-title">edit Warehouse</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
         </div>
         <div class="card-body">
            <input type="hidden" id="WarehouseID" value="<?php echo e($warehouse->id); ?>" name="">
            <div class="row">
               <div class="col-md-6">
                  <div class="form-group">
                     <label>Warehouse No
                        <sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     <input class="form-control form-control-sm" type="text" required="" value="<?php echo e($warehouse->warehouseNumber); ?>" id="warehouseNumber" name="warehouseNumber" placeholder="Enter Warehouse No" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <label>Warehouse Name<sup class="" style="font-size: 7px;"><i class="fas fa-asterisk text-danger"></i></sup></label>
                     <input class="form-control form-control-sm" type="text" value="<?php echo e($warehouse->warehouseName); ?>" required="" id="warehouseName" name="warehouseName" placeholder="Enter Warehouse Name" autocomplete="off">
                  </div>
                   <div class="row">
                     <div class="form-group col-md-6">
                        <label >Sub Warehouse</label>
                         <input class="form-control form-control-sm" type="text" id="SubWarehouse"  name="SubWarehouse"  autocomplete="off">
                     </div>
                     <div class="col-md-6">
                           <label >Product</label>
                           <select class="form-control col-md-12 select2" name="ProductID" id="ProductID">
                           <option selected="selected" value="">Select Product</option> 
                               <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                 <option value="<?php echo e($product->ProductName); ?>"><?php echo e($product->ProductName); ?>

                                 </option>
                               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </select> 
                        </div>
                  </div>
               </div>
                <div class="col-md-6">
                  <div class="row">
                     <div class="form-group col-md-6">
                     <label>Key Person Name</label>
                     <input class="form-control form-control-sm" type="text"  value="<?php echo e($warehouse->KeyPersonName); ?>" id="KeyPersonName" name="KeyPersonName" placeholder="Enter Key Prerson Name" autocomplete="off">
                  </div>
                   <div class="form-group col-md-6">
                     <label >Key Person Email</label>
                     <input class="form-control form-control-sm" type="email" value="<?php echo e($warehouse->KeyPersonEmail); ?>"  id="KeyPersonEmail"  name="KeyPersonEmail" placeholder="Enter Key Person Email" autocomplete="off">
                  </div>
                  </div>
                 
                  <div class="form-group">
                     <label>Location</label>
                     <input class="form-control form-control-sm" type="text" value="<?php echo e($warehouse->WLocation); ?>" id="WLocation"  name="Location" placeholder="Enter Warehouse Name" autocomplete="off">
                  </div>
                  <div class="form-group">
                     <div class="row">
                         <div class="col-md-6">
                           <label >Product Quantity(piece)</label>
                           <input class="form-control form-control-sm" type="text" id="PQuantity"  name=""  autocomplete="off">
                        </div>
                        <div class="col-md-6">
                           <label >Theortical Weight(in kg)</label>
                           <div class="row">
                              <div class="col-md-8">
                                 <input class="form-control form-control-sm" type="text" id="PWeight"  name=""  autocomplete="off">
                              </div>
                              <div class="col-md-4">
                                 <button type="button" onclick="productEditToTable()" class="btn btn-block bg-gradient-primary btn-sm">Add</button>
                              </div>
                           </div>
                        </div> 
                     </div> 
                  </div> 
               </div>
            </div>
         </div>
      </div>
<section class="content">
   <div class="container-fluid">
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-body">
                  <table id="example13" class="table table-bordered table-striped">
                     <thead>
                        <tr>
                           <th >Sub Warehouse</th>
                           <th>Product Code</th>
                           <th >ProductName</th>
                           <th >Quantity(piece)</th>
                           <th >Theortical Weight(in kg)</th>
                           <th >Active</th>
                        </tr>
                     </thead>
                     <tbody>
                         <?php $__currentLoopData = $w_p_m; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $w_p_ms): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                        <tr>
                           <td><?php echo e($w_p_ms->SubWarehouse); ?></td>
                           <td><?php echo e($w_p_ms->Product_Code); ?></td>
                           <td><?php echo e($w_p_ms->ProductID); ?></td>
                           <td class='th'><?php echo e($w_p_ms->Product_Quantity); ?></td>
                           <td class='th'><?php echo e($w_p_ms->Product_Weight); ?></td>
                           <td ><a class="fas fa-trash-alt" href="" onclick="DeleteWPM(<?php echo e($w_p_ms->id); ?>)"></a></td>
                        </tr>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                  </table>
               </div>
             
            </div>
         </div>
      </div>
   </div>
</section>
      <div class="form-group">
         <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button  id="Warehouse_update" class="btn btn-primary btn-sm">Submit</button>

         </div>
      </div>
   </form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
  function productEditToTable() {

   if ($("#ProductID").val()=="" && $("#ProductID").val()=="" && $("#PQuantity").val()=="") 
   {
      alert("Please fill the field!!")
      return false;
   }

         // First check if a <tbody> tag exists, add one if not
    if ($("#productTable tbody").length == 0) {
        $("#productTable").append("<tbody></tbody>");
    }

    // Append product to the table
    $("#productTable tbody").append(
        "<tr>" +
        "<td class='th'>" + $("#SubWarehouse").val() + "</td>" +
        "<td class='th'>" + $("#ProductID").val() + "</td>" +
        "<td class='th'>" + $("#PQuantity").val() + "</td>" +
        "<td class='th'>" + $("#PWeight").val() + "</td>" +
        "<td class='th'>" +
        "<a type='button'  onclick='productDelete(this);' class='fas fa-trash-alt'>" +
        "</td>" +
        "</tr>");
 
   }
   function productDelete(ctl) {
    $(ctl).parents("tr").remove();
   }

   $.ajaxSetup({
       headers: {
           'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
   });

   $("#Warehouse_update").click(function(e) 
   {
       e.preventDefault();
       var WarehouseID  = $('#WarehouseID').val();
       var warehouseNumber = $('#warehouseNumber').val();
       var warehouseName = $("#warehouseName").val();
       // var CompanyID = $("#CompanyID").val();
       var KeyPersonEmail = $('#KeyPersonEmail').val();
       var WLocation = $("#WLocation").val();
       var KeyPersonName = $("#KeyPersonName").val();

        var Temp ='';
        var P_quantity='';
        var myTab = document.getElementById('productTable');
        // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
        for (i = 1; i <= myTab.rows.length-1; i++) {

            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
            var objCells = myTab.rows.item(i).cells;

            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
            for (var j = 0; j < objCells.length; j++) {
               if(j<=3)
               { 
                  Temp+= objCells.item(j).innerHTML+":";
               }
                
            }
               var temp_slice=Temp.slice(0, -1);
               P_quantity+= temp_slice + ",";
               Temp = "";
        }
       let _token = $('meta[name="csrf-token"]').attr('content');

       if (warehouseNumber!='' && warehouseName!='') 
       {
           $.ajax({
               type: "POST",
               url: "<?php echo e(URL::to('/')); ?>/Warehouse/Warehouseupdate",
               data: {
                   WarehouseID:WarehouseID,
                   warehouseNumber: warehouseNumber,
                   warehouseName: warehouseName,
                   KeyPersonEmail: KeyPersonEmail,
                   // CompanyID:CompanyID,
                   WLocation: WLocation,
                   KeyPersonName:KeyPersonName,
                   P_quantity: P_quantity,
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
                         var Baseurl = window.location.origin;
                         toastr.success('Warehouse successfully updated');
                        location.href = "<?php echo e(URL::to('/')); ?>/warehouse";
                     }
                    
               }
           });
       } 
       else 
       {
           alert('Please fill warehouseNumber && warehouseName field !');
       }
   });

function DeleteWPM(id) 
{
   let _token = $('meta[name="csrf-token"]').attr('content');
   var WarehouseID  = $('#WarehouseID').val();
   if (id != "") {
       $.ajax({
           type: "POST",
           url: "<?php echo e(URL::to('/')); ?>/Warehouse/Warehouse_pdelete",
           data: {                     
               id: id,
               _token: _token
           },
          beforeSend:function(){
            return confirm("Are you sure to Delete The Product?");
           },
          success: function (response) {
            if (response.error) 
            {
               var Baseurl = window.location.origin;
                toastr.error(response.error);
               window.location.reload();
            }
           },
          error: function(xhr, status, error){
            var errorMessage = xhr.status + ': ' + xhr.statusText
            alert('Error - ' + errorMessage);
            }
      });
   } else {
       alert('Please fill all the field !');
   }
} 

     // Restricts input for the given textbox to the given inputFilter.
function setInputFilter(textbox, inputFilter) {
  ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
    textbox.addEventListener(event, function() {
      if (inputFilter(this.value)) {
        this.oldValue = this.value;
        this.oldSelectionStart = this.selectionStart;
        this.oldSelectionEnd = this.selectionEnd;
      } else if (this.hasOwnProperty("oldValue")) {
        this.value = this.oldValue;
        this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
      } else {
        this.value = "";
      }
    });
  });
}

setInputFilter(document.getElementById("PQuantity"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value) && (value === "" || parseInt(value) >=0); });
setInputFilter(document.getElementById("PWeight"), function(value) {
  return /^-?\d*[.,]?\d*$/.test(value) && (value === "" || parseInt(value) >= 0); });          
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/warehouse/edit.blade.php ENDPATH**/ ?>