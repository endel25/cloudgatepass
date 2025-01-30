
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
   <form action="" method="POST" autocomplete="off">
      <?php echo csrf_field(); ?>
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
                  <div class="form-group">
                     <label>Purchase Order No</label>
                     <input class="form-control form-control-sm" type="text" required=""  id="PurchaseOrderNo" autocomplete="off" >
                  </div>
               </div>
                <div class="col-md-6">
                   <div class="form-group">
                     <label >Party Name</label>
                     <input class="form-control form-control-sm" type="text"   id="PartyName" autocomplete="off">
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
                     <label >Warehouse</label>
                     <!-- <input class="form-control form-control-sm" type="text" id="SPWarehouse" autocomplete="off"> -->
                     <select class="form-control col-md-12 select2"  id="SPWarehouse">
                     <option selected="selected" value="">Select Warehouse</option> 
                     </select> 
                  </div>
                  <div class="col-md-5">
                    <label >Quantity</label>
                     <div class="row">
                        <div class="col-md-8">
                           <input class="form-control form-control-sm" autocomplete="off" type="text" id="SPQuantity">
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
                  <th class="th">Warehouse</th>
                  <th class="th">Quantity</th>
                  <th class="th">Active</th>
               </tr>
            </thead>
         </table>
      </div>
      <p id="info"></p>
      <div class="form-group">
         <div class="col-xs-12 col-sm-12 col-md-12">
            <button type="" id="PO_create" class="btn btn-primary btn-sm">Submit</button>
            <ol class="breadcrumb float-sm-right">
               <a class="btn btn-primary btn-sm" href="<?php echo e(route('purchaseorder.index')); ?>"> Back</a>
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
        "<td class='th'>" + $("#SPWarehouse").val() + "</td>" +
        "<td class='th'>" + $("#SPQuantity").val() + "</td>" +
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
      var flag="";
      $("#SPWarehouse").html('');
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
                     var i=0;
                     var j= response.WPmappingDetail.length;
                     if (flag=="") 
                     {
                        for (i = 0; i < j; i++) 
                        {
                         $("#SPWarehouse").append("<option>"+response.WPmappingDetail[i].warehouseName+ "( "+response.WPmappingDetail[i].Product_Quantity+ ")</option>");
                         flag=1;
                        }
                     }
                    
                     
                    
                    
                     
               }
           });
       } 
   });

   $("#PO_create").click(function(e) 
   {
         e.preventDefault();
         var PurchaseOrderNo = $('#PurchaseOrderNo').val();
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

       if (PurchaseOrderNo!='' && PartyName!='') 
       {
           $.ajax({
               type: "POST",
               url: "/PO/PO_create",
               data: {
                   PurchaseOrderNo: PurchaseOrderNo,
                   PartyName: PartyName,
                   P_quantity: P_quantity,
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
                        var Baseurl = window.location.origin;
                        location.href = Baseurl+'/purchaseorder';
                        toastr.success(response.success).fadeOut(6000);
                     }
                     
                   
               }
           });
       } 
       else 
       {
           alert('Please fill PurchaseOrderNo && PartyName field !');
       }
   });          
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Program Files\Ampps\www\resources\views/purchaseorder/create.blade.php ENDPATH**/ ?>