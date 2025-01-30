
<?php $__env->startSection('content'); ?>
<style type="text/css">
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
    <form action="<?php echo e(route('purchaseorder.update',$purchaseorder->id)); ?>" method="POST">
      <?php echo csrf_field(); ?>
      <?php echo method_field('PUT'); ?>
      <div class="card card-default col-md-12">
         <div class="card-header">
            <h3 class="card-title">Purchase Order</h3>
            <div class="card-tools">
               <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
               <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
            </div>
         </div>
         <div class="card-body">
            <div class="row">
               <div class="col-md-6">
                  <input type="hidden" id="PurcahseOrderID" value="<?php echo e($purchaseorder->id); ?>" name="">
                  <div class="form-group">
                     <label>Purchase Order No</label>
                     <input class="form-control form-control-sm" value="<?php echo e($purchaseorder->PurchaseOrderNo); ?>" type="text" required="" name="" id="PurcahseOrderNo" autocomplete="off">
                  </div>
               </div>
                <div class="col-md-6">
                   <div class="form-group">
                     <label >Party Name</label>
                     <input class="form-control form-control-sm" value="<?php echo e($purchaseorder->PartyName); ?>" type="text"   name="PartyName" id="PartyName" autocomplete="off">
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="card card-default col-md-12">
         <div class="card-header">
            <h3 class="card-title">Product Detail</h3>
         </div>
         <div  class="card-body">
            <div class="form-group">
               <div class="row">
                  <div class="col-md-4">
                     <label >Product</label>
                     <select class="form-control col-md-12 select2"  id="SProductID">
                     <option selected="selected" value="">Select Product</option> 
                         <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <option value="<?php echo e($product->ProductName); ?>"><?php echo e($product->ProductName); ?>

                           </option>
                         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </select> 
                  </div>
                  <div class="col-md-3">
                     <label >Quantity</label>
                        <input class="form-control form-control-sm" type="text" id="SPQuantity">
                     </div>
                  
                   <div class="col-md-5">
                     <label >Warehouse</label>
                     <div class="row">
                        <div class="col-md-8">
                           <input class="form-control form-control-sm" type="text" id="SPWarehouse">
                        </div>
                        <div class="col-md-4">
                           <button type="button" onclick="productAddToTable()" class="btn btn-block bg-gradient-primary btn-sm">Add</button>
                        </div>
                     </div>
                  </div> 
                  </div>
               </div>
            </div>
         <table id="productTable" class="table table-bordered table-striped">
            <thead>
              <tr>
                  <th class="th">ProductName</th>
                  <th class="th">Quantity</th>
                  <th class="th">Warehouse</th>
                  <th class="th">Active</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <?php $__currentLoopData = $PO; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $PO): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                     <tr>
                        <td class="th"><?php echo e($PO->ProductName_ID); ?></td>
                        <td class="th"><?php echo e($PO->Product_Quantity); ?></td>
                        <td class="th"><?php echo e($PO->Warehouse); ?></td>
                        <td class="th"><a class="fas fa-trash-alt" href="" onclick="DeletePO(<?php echo e($PO->id); ?>)"></a></td>
                     </tr>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               </tr>
            </tbody>
         </table>
      </div>
      <p id="info"></p>
      <div class="form-group">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="" id="PO_update" class="btn btn-primary">Submit</button>
            <ol class="breadcrumb float-sm-right">
               <a class="btn btn-primary" href="<?php echo e(route('purchaseorder.index')); ?>"> Back</a>
            </ol>
         </div>
      </div>
   </form>
</section>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('UserScriptStr'); ?>
<script>
  function productAddToTable() {
    // First check if a <tbody> tag exists, add one if not
    if ($("#productTable tbody").length == 0) {
        $("#productTable").append("<tbody></tbody>");
    }

    // Append product to the table
    $("#productTable tbody").append(
        "<tr>" +
        "<td class='th'>" + $("#SProductID").val() + "</td>" +
        "<td class='th'>" + $("#SPQuantity").val() + "</td>" +
        "<td class='th'>" + $("#SPWarehouse").val() + "</td>" +
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
   $( "#SProductID" ).change(function(e) {
       e.preventDefault();
      var SProductID  = $('#SProductID').val();
      let _token = $('meta[name="csrf-token"]').attr('content');
      if (SProductID!='') 
       {
           $.ajax({
               type: "POST",
               url: "/SalesOrder/WPmappingDetails",
               data: {
                   SProductID:SProductID,
                   _token: _token
               },
               cache: false,
               success: function(response) {
                     $("#SPWarehouse").val(response.WPmappingDetail[0].WarehouseName)   
               }
           });
       } 
   });

   $("#PO_update").click(function(e) 
   {
         e.preventDefault();
          var PurcahseOrderID = $('#PurcahseOrderID').val();
         var PurcahseOrderNo = $('#PurcahseOrderNo').val();
         var PartyName = $("#PartyName").val();

         var Temp ='';
         var P_quantity='';
         var myTab = document.getElementById('productTable');
         // LOOP THROUGH EACH ROW OF THE TABLE AFTER HEADER.
         for (i = 1; i <= myTab.rows.length-1; i++) 
         {

            // GET THE CELLS COLLECTION OF THE CURRENT ROW.
            var objCells = myTab.rows.item(i).cells;

            // LOOP THROUGH EACH CELL OF THE CURENT ROW TO READ CELL VALUES.
            for (var j = 0; j < objCells.length; j++) 
            {
               if(j<=2)
               { 
                  Temp+= objCells.item(j).innerHTML+":";
               }
                
            }
               var temp_slice=Temp.slice(0, -1);
               P_quantity+= temp_slice + ",";
               Temp = "";
         }
         let _token = $('meta[name="csrf-token"]').attr('content');

       if (PurcahseOrderNo!='' && PartyName!='') 
       {
           $.ajax({
               type: "POST",
               url: "/PO/PO_update",
               data: {
                   PurcahseOrderID:PurcahseOrderID,
                   PurcahseOrderNo: PurcahseOrderNo,
                   PartyName: PartyName,
                   P_quantity: P_quantity,
                   _token: _token
               },
               cache: false,
                  success: function(response) {
                     var Baseurl = window.location.origin;
                     location.href = Baseurl+'/salesorder';
               }
           });
       } 
       else 
       {
           alert('Please fill PurcahseOrderNo && PartyName field !');
       }
   }); 
function DeletePO(id) 
{
   let _token = $('meta[name="csrf-token"]').attr('content');

   if (id != "") {
       $.ajax({
           type: "POST",
           url: "/public/PO/Podelete",
           data: {                     
               id: id,
               _token: _token
           },
          beforeSend:function(){
            return confirm("Are you sure to Delete The Product?");
           },
          success: function (r) {
             if (r.d == "OK") {
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
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/purchaseorder/edit.blade.php ENDPATH**/ ?>