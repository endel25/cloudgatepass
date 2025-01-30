<!DOCTYPE html>
<html>
<style type="text/css">
   #fontcolor{color: black;}
      .fontcolor{color: black;}
      .table th,
.table td {
  padding: 0.5rem;
  vertical-align: top;
  border-top: 1px solid rgba(0, 40, 100, 0.12);
}
.body{
   line-height: inherit;
}
</style>
  <head>

      <!-- <meta charset="utf-8"> -->
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- <link rel="icon" href="<?php echo e(asset('dist\img\icon.png')); ?>" style="width: 50px;height: 20px;"> -->
      <title>Tarmal Group| Gatepass</title>
      <!-- Tell the browser to be responsive to screen width -->
      <link rel = "icon" href ="<?php echo e(asset('dist\img\Tlogo.png')); ?>" type = "image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
      <!-- Ionicons -->
      <link rel="stylesheet" href="<?php echo e(asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')); ?>">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
      <!-- iCheck -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
      <!-- JQVMap -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/jqvmap/jqvmap.min.css')); ?>">
      <!-- Theme style -->
      <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
      <!-- overlayScrollbars -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')); ?>">
      <!-- Daterange picker -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/daterangepicker/daterangepicker.css')); ?>">
      <!-- DataTables -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')); ?>">
      <!-- Tempusdominus Bbootstrap 4 -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')); ?>">
      <!-- select2 -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/select2/css/select2.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')); ?>">
       <!-- SweetAlert2 -->
     <link rel="stylesheet" href="<?php echo e(asset('plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')); ?>">
     <!-- Toastr -->
     <link rel="stylesheet" href="<?php echo e(asset('plugins/toastr/toastr.min.css')); ?>">
      <!-- jQuery -->
      <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
      <!-- jQuery UI 1.11.4 -->
      <script src="<?php echo e(asset('plugins/jquery-ui/jquery-ui.min.js')); ?>"></script>
      <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <!-- <script src="<?php echo e(asset('video.js')); ?>"></script>
         <script src="<?php echo e(asset('videojs-vlc.js')); ?>"></script> -->
      <!-- jsGrid -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/jsgrid/jsgrid.min.css')); ?>">
      <link rel="stylesheet" href="<?php echo e(asset('plugins/jsgrid/jsgrid-theme.min.css')); ?>">
      <!-- summernote -->
      <link rel="stylesheet" href="<?php echo e(asset('plugins/summernote/summernote-bs4.css')); ?>">
      <!-- Google Font: Source Sans Pro -->
      <link href="<?php echo e(asset('https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700')); ?>" rel="stylesheet">
      <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
   </head>
   <body class="hold-transition sidebar-mini layout-fixed body" style="">

      <div class="wrapper">
         <nav class="main-header navbar navbar-expand navbar-white navbar-light" style="background-image: linear-gradient(white, #D3D3D3);">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
               <li class="nav-item" id="fontcolor">
                  <a class="nav-link" data-widget="pushmenu" href="#" id="fontcolor" role="button"><i class="fas fa-bars"></i></a>
               </li>
               <li class="nav-item d-none d-sm-inline-block">
                  <a href="<?php echo e(route('home')); ?>" class="nav-link" id="fontcolor">Home</a>
               </li>
                <li class="nav-item" id="fontcolor">
                
               </li>
            </ul>
            
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto" id="fontcolor" >
               <!-- Dropdown Menu -->
               <li class="nav-item dropdown">
                  <a class="nav-link" data-toggle="dropdown" href="#" id="fontcolor">
                     <i class="fas fa-user"></i>&nbsp;&nbsp;<?php echo e(Auth::user()->email); ?>

                     <!-- <span class="badge badge-warning navbar-badge">15</span> -->
                  </a>
                  <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                     <!-- <span class="dropdown-item dropdown-header">15 Notifications</span> -->
                     <a href="" class="dropdown-item">
                     <i class="fas fa-user-circle mr-2"></i>  
                     <?php echo e(Auth::user()->email); ?>

                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="#" class="dropdown-item">
                        <i class="fa fa-envelope mr-2" aria-hidden="true"></i> Contact Us
                        <!-- <span class="float-right text-muted text-sm">3 mins</span> -->
                     </a>
                     <div class="dropdown-divider"></div>
                     <a href="<?php echo e(route('logout')); ?>" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="fas fa-sign-out-alt mr-2 "></i> <?php echo e(__('Sign-Out')); ?>

                        <!-- <span class="float-right text-muted text-sm">12 hours</span> -->
                     </a>
                     <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                        <?php echo csrf_field(); ?>
                     </form>
                     <div class="dropdown-divider"></div>
                     <!-- <a href="#" class="dropdown-item">
                        <i class="fas fa-file mr-2"></i> 3 new reports
                         <span class="float-right text-muted text-sm">2 days</span> 
                        </a> -->
                     <div class="dropdown-divider"></div>
                     <!-- <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
                  </div>
               </li>
             <!--   <li class="nav-item">
                  <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                  <i class="fas fa-th-large"></i>
                  </a>
               </li> -->
            </ul>
         </nav>
         <!-- /.navbar -->
         <!-- Main Sidebar Container -->
         <aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-image: linear-gradient(white, #D3D3D3);">
            <!-- Brand Logo -->
            <div class="user-panel  d-flex" style="">
               <a href="" class="brand-link">
               <span><img src="<?php echo e(asset('dist/img/Tarmallogo.png')); ?>"   style="margin-left: 25px; width: 80%;"></span>
               </a> 
            </div>
            <!-- Sidebar -->
            <div class="sidebar" style="background-image: linear-gradient(white, #D3D3D3);">
               <!-- Sidebar Menu -->
               <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                       <?php if(!Session::has('Dashboard')): ?> 
                        <li class="nav-item has-treeview" id="Dashboard" >
                        <a href="<?php echo e(route('home')); ?>" class="nav-link" id="fontcolor">
                           <i class="nav-icon fas fa-columns"></i>
                           <p >
                              Dashboard
                           </p>
                        </a>
                     </li>
                     <?php endif; ?>
                     <?php if(!Session::has('GatePassManagement')): ?> 
                     <!-- <li class="nav-item has-treeview" id="GatePass">
                        <a href="<?php echo e(route('gatepass.index')); ?>" class="nav-link" id="">
                           <i class="nav-icon fas fa-ticket-alt fontcolor"></i>
                           <p class="fontcolor">
                               Gate Pass
                           </p>
                        </a>
                     </li> -->
                     <?php endif; ?>
                     
                     <li class="nav-item has-treeview fontcolor">
                        <?php if(!Session::has('DataSetup')): ?> 
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-copy fontcolor" id="DataSetup"></i>
                           <p class="fontcolor">
                              Data Setup
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right"></span>
                           </p>
                        </a>
                        <?php endif; ?>
                        <ul class="nav nav-treeview">
                           <?php if(!Session::has('Location')): ?>
                           <li class="nav-item has-treeview" id="">
                              <a href="<?php echo e(route('locations.index')); ?>" class="nav-link" id="">
                                 <!-- <i class="nav-icon fas fa-balance-scale-right fontcolor" ></i> -->
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     Location
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('Product')): ?>
                           <li class="nav-item has-treeview" id="Product">
                              <a href="<?php echo e(route('companies.index')); ?>" class="nav-link" id="">
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <!-- <i class="nav-icon  fas fa-building fontcolor" ></i> -->
                                 <p class="fontcolor">
                                     Company
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('Warehouse')): ?>
                           <li class="nav-item has-treeview" id="Warehouse">
                              <a href="<?php echo e(route('warehouse.index')); ?>" class="nav-link" id="">
                                 <!-- <i class="nav-icon fas fa-warehouse fontcolor" ></i> -->
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     Warehouse
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('Transporter')): ?> 
                           <li class="nav-item has-treeview" id="Transporter" >
                              <a href="<?php echo e(route('accounts.index')); ?>" class="nav-link fontcolor" id="fontcolor">
                                 <!-- <i class="nav-icon fas fas fa-truck"></i> -->
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p>
                                    Transporter
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('Driver')): ?> 
                           <li class="nav-item has-treeview" id="Driver">
                              <a href="<?php echo e(route('drivers.index')); ?>" class="nav-link" id="">
                                 <!-- <i class="nav-icon fa fa-user fontcolor" ></i> -->
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     Driver
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('Vehicle')): ?> 
                           <li class="nav-item has-treeview" id="">
                              <a href="<?php echo e(route('vehicles.index')); ?>" class="nav-link" id="">
                                 <!-- <i class="nav-icon fas fa-truck-pickup fontcolor" ></i> -->
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     Vehicle
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('Product')): ?>
                           <li class="nav-item has-treeview" id="Product">
                              <a href="<?php echo e(route('products.index')); ?>" class="nav-link" id="">
                                 <!-- <i class="nav-icon fab fa-product-hunt fontcolor" ></i> -->
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     Product
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?> 
                           <!-- <?php if(!Session::has('PurchaseOrder')): ?>
                           <li class="nav-item has-treeview" id="">
                              <a href="<?php echo e(route('purchaseorder.index')); ?>" class="nav-link" id="">
                                 <i class="nav-icon fas fa-balance-scale-right fontcolor" ></i>
                                 <p class="fontcolor">
                                     Purchase Order
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?> -->
                        </ul>
                     </li>
                     <li class="nav-item has-treeview fontcolor">
                        <?php if(!Session::has('Administrator')): ?>
                        <a href="#" class="nav-link">
                           <i class="nav-icon fas fa-user-cog fontcolor"></i>
                           <p class="fontcolor">
                              Administration
                              <i class="fas fa-angle-left right"></i>
                              <span class="badge badge-info right"></span>
                           </p>
                        </a>
                        <?php endif; ?>
                        <ul class="nav nav-treeview">
                           <?php if(!Session::has('UserRole')): ?>
                           <li class="nav-item has-treeview " id="UserRole">
                              <a href="<?php echo e(route('userroles.index')); ?>" class="nav-link" id="">
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     User Role
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('User')): ?>
                           <li class="nav-item has-treeview" id="User">
                              <a href="<?php echo e(route('users.index')); ?>" class="nav-link" id="">
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     User 
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('User')): ?>
                           <li class="nav-item has-treeview" id="User">
                              <a href="<?php echo e(route('appdirectory.index')); ?>" class="nav-link" id="">
                                 <i class="far fa-circle nav-icon fontcolor" ></i>
                                 <p class="fontcolor">
                                     Add Directories 
                                 </p>
                              </a>
                           </li>
                           <?php endif; ?>
                           <?php if(!Session::has('ChangePassword')): ?>
                           <li class="nav-item has-treeview" id="">
                              <a href="<?php echo e(route('changes.index')); ?>" class="nav-link" id="fontcolor">
                                 <i class="far fa-circle nav-icon fontcolor"></i>
                                 <p>
                                    Change Password
                                 </p>
                              </a>
                           </li>
                            <?php endif; ?>
                        </ul>
                     </li>
                     <?php if(Session::has('UseroleId')): ?>
                      <li class="nav-item has-treeview" id="User">
                        <a href="<?php echo e(URL::to('/')); ?>/loading" class="nav-link" id="">
                           <i class="far fa-circle nav-icon fontcolor" ></i>
                           <p class="fontcolor">
                               Active
                           </p>
                        </a>
                     </li>
                      <?php endif; ?>
                     <?php if(Session::has('User_Id') || Session::has('UseroleId')): ?>
                     <li class="nav-item has-treeview" id="User">
                        <a href="<?php echo e(URL::to('/')); ?>/activeloading" class="nav-link" id="">
                           <i class="far fa-circle nav-icon fontcolor" ></i>
                           <p class="fontcolor">
                               In Progess 
                           </p>
                        </a>
                     </li>
                     <?php endif; ?>
                     <?php if(Session::has('User_Id') || Session::has('UseroleId')): ?>
                     <li class="nav-item has-treeview" id="User">
                        <a href="<?php echo e(URL::to('/')); ?>/completeloading" class="nav-link" id="">
                           <i class="far fa-circle nav-icon fontcolor" ></i>
                           <p class="fontcolor">
                               Complete 
                           </p>
                        </a>
                     </li>
                     <?php endif; ?>
                  </ul>
               </nav>
            </div>
         </aside>
         <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <?php echo $__env->yieldContent('content'); ?>
         </div>
         <!-- main-footer  -->
         <footer class="main-footer">
            <strong><a href="https://endel.digital/" target="_blank" rel="noopener noreferrer">Endel Digital</a>.</strong>
            All rights reserved.
            <!-- <div class="float-right d-none d-sm-inline-block">
               <b>Version</b>1.3.0
            </div> -->
         </footer>
         <!-- Control Sidebar -->
         <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
         </aside>
         <!-- /.control-sidebar -->
      </div>
      <!-- ./wrapper -->
      <!-- Bootstrap 4 -->
      <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <!-- SweetAlert2 -->
      <script src="<?php echo e(asset('plugins/sweetalert2/sweetalert2.min.js')); ?>"></script>
      <!-- Toastr -->
      <script src="<?php echo e(asset('plugins/toastr/toastr.min.js')); ?>"></script>
      <!-- ChartJS -->
      <script src="<?php echo e(asset('plugins/chart.js/Chart.min.js')); ?>"></script>
      <!-- Sparkline -->
      <script src="<?php echo e(asset('plugins/sparklines/sparkline.js')); ?>"></script>
      <!-- JQVMap -->
      <script src="<?php echo e(asset('plugins/jqvmap/jquery.vmap.min.js')); ?>"></script>
      <script src="<?php echo e(asset('plugins/jqvmap/maps/jquery.vmap.usa.js')); ?>"></script>
      <!-- jQuery Knob Chart -->
      <script src="<?php echo e(asset('plugins/jquery-knob/jquery.knob.min.js')); ?>"></script>
      <!-- daterangepicker -->
      <script src="<?php echo e(asset('plugins/moment/moment.min.js')); ?>"></script>
      <script src="<?php echo e(asset('plugins/daterangepicker/daterangepicker.js')); ?>"></script>
      <!-- Tempusdominus Bootstrap 4 -->
      <script src="<?php echo e(asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')); ?>"></script>
      <!-- Summernote -->
      <script src="<?php echo e(asset('plugins/summernote/summernote-bs4.min.js')); ?>"></script>
      <!-- overlayScrollbars -->
      <script src="<?php echo e(asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')); ?>"></script>
      <!-- AdminLTE App -->
      <script src="<?php echo e(asset('dist/js/adminlte.js')); ?>"></script>
      <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
      <script src="<?php echo e(asset('dist/js/pages/dashboard.js')); ?>"></script>
      <!-- AdminLTE for demo purposes -->
      <script src="<?php echo e(asset('dist/js/demo.js')); ?>"></script>
      <!-- Bootstrap 4 -->
      <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
      <!-- Select2 -->
      <script src="<?php echo e(asset('plugins/select2/js/select2.full.min.js')); ?>"></script>
      <!-- DataTables -->
      <script src="<?php echo e(asset('plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
      <script src="<?php echo e(asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')); ?>"></script>
      <script src="<?php echo e(asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')); ?>"></script>
      <script src="<?php echo e(asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')); ?>"></script>
      <!-- jsGrid -->
      <script src="<?php echo e(asset('plugins/jsgrid/demos/db.js')); ?>"></script>
      <script src="<?php echo e(asset('plugins/jsgrid/jsgrid.min.js')); ?>"></script>
      <script>
         $(function () {


           $("#example1").DataTable({
             "responsive": true,
             "autoWidth": false,
           });
           $("#example3").DataTable({
             "responsive": true,
             "autoWidth": false,
           });
           $("#example13").DataTable({
             "responsive": true,
             "autoWidth": false,
             "ordering": false,

           });
           $("#example134").DataTable({
             "responsive": true,
             "autoWidth": false,
             "ordering": false,
           });
           
          
           $('#example2').DataTable({
             "paging": true,
             "lengthChange": false,
             "searching": false,
             "ordering": true,
             "info": true,
             "autoWidth": false,
             "responsive": true,
           });
            const Toast = Swal.mixin({
                  toast: true,
                 position: 'top-end',
                 showConfirmButton: false,
                timer: 3000
            });
         
         });
         
         
          // $(function () {
          //  //Initialize Select2 Elements
          //  $('.select2').select2()
         
          //  //Initialize Select2 Elements
          //  $('.select2bs4').select2({
          //    theme: 'bootstrap4'
          //  })
         
      </script>
      <script>
        //  window.onload = function () {
        //     checkpermission("Dashboard");
        //   checkpermission("GatePassManagement");
        //   checkpermission("GatePass");
        //   checkpermission("Transporter");
        //   checkpermission("Driver");
        //   checkpermission("Vehicle");
        //   checkpermission("Warehouse");
        //   checkpermission("UserRole");
        //   checkpermission("User");
        //   checkpermission("Location");
        //   checkpermission("Product");
  
        // }
         
         // function checkpermission(id)
         // {
         //   $.ajax({
         //         type: "GET",
         //         url: "/gatepass/public/home/permission/"+id
         //     }).done(function(data) {
         //         // if (data==true) 
         //         // {
         //         //  //$("#"+id).show();
         //         // }
         //         // else
         //         // {
         //         // // $("#"+id).hide();
         //         // }
         //     });
         // }
      </script>
      <script>
         $(function () {
           //Initialize Select2 Elements
           $('.select2').select2()
         
           //Initialize Select2 Elements
           
           $('.select2bs4').select2({
             theme: 'bootstrap4'
           })
         
           //Date range picker
           $('#reservationdatetime').datetimepicker({
               format: 'DD/MM/YYYY hh:mm:ss'
           });
         
           //Date range picker
           $('#reservation').daterangepicker()
           //Date range picker with time picker
           $('#reservationtime').daterangepicker({
             timePicker: true,
             timePickerIncrement: 30,
             locale: {
               format: 'DD/MM/YYYY hh:mm A'
             }
           })
           //Date range as a button
           $('#daterange-btn').daterangepicker(
             {
               ranges   : {
                 'Today'       : [moment(), moment()],
                 'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                 'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
                 'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                 'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                 'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
               },
               startDate: moment().subtract(29, 'days'),
               endDate  : moment()
             },
             function (start, end) {
               $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
             }
           )
         
           //Timepicker
           $('#timepicker').datetimepicker({
             format: 'DD/MM/YYYY hh:mm A'
           })
           
           //Bootstrap Duallistbox
           // $('.duallistbox').bootstrapDualListbox()
         
           //Colorpicker
           // $('.my-colorpicker1').colorpicker()
           // //color picker with addon
           // $('.my-colorpicker2').colorpicker()
         
           // $('.my-colorpicker2').on('colorpickerChange', function(event) {
           //   $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
           // });
         
           // $("input[data-bootstrap-switch]").each(function(){
           //   $(this).bootstrapSwitch('state', $(this).prop('checked'));
           // });
         
         })
      </script>
      <?php echo $__env->yieldContent('UserScript'); ?>
      <?php echo $__env->yieldContent('UserScriptStr'); ?>
   </body>
</html><?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/layouts/admin.blade.php ENDPATH**/ ?>