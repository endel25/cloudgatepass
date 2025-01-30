<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tarmal | Gatepass Log in</title>
  <link rel = "icon" href ="<?php echo e(asset('dist\img\Tlogo.png')); ?>" type = "image/x-icon">
      <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/fontawesome-free/css/all.min.css')); ?>">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')); ?>">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo e(asset('dist/css/adminlte.min.css')); ?>">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page" style="background-image: linear-gradient(black, red);">
          <?php if(session('error')): ?>
            <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
         <?php endif; ?>
      
  <div class="login-box">
    <div class="login-logo">
     
      </div>
      <!-- /.login-logo -->
      <div class="card"  style="background-image: linear-gradient(white, #D3D3D3);">

        <div class="card-body login-card-body" style="background-image: linear-gradient(white, #D3D3D3);" >
           <img src="<?php echo e(asset('dist/img/Tarmallogo.png')); ?>" style="margin-left: 10%; width: 80%; ">
          
          <div class="card-body">
           <form method="post" action="<?php echo e(route('login')); ?>">
            <?php echo csrf_field(); ?>
            <div class="form-group">
              <label>Username</label>
              <input type="text" name="email" class="form-control p_input">
            </div>
            <div class="form-group">
              <label>Password *</label>
              <input type="password" required="password" name="password" class="form-control p_input">
            </div>

            <div class="text-center">
              <button type="submit" class="btn btn-secondary btn-block enter-btn">Login</button>
            </div>
            &nbsp;
            <?php if($message = Session::get('message')): ?>
                <strong style="color: red;"><?php echo e($message); ?></strong>
            <?php endif; ?>

           <!--  <p class="sign-up">Don't have an Account?<a href="<?php echo e(route('register')); ?>"> Sign Up</a></p> -->

        <!--      <?php if(Route::has('register')): ?>
              <li class="nav-item">
                  <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
              </li>
              <?php endif; ?> -->

       <!--    </div>
          <?php if(Route::has('password.request')): ?>
            <a class="btn btn-link" href="<?php echo e(route('password.request')); ?>">
                <?php echo e(__('Forgot Your Password?')); ?>

            </a>
         <?php endif; ?>
    </form>
     <div class="social-auth-links text-center mb-3">        
     </div> -->
     <!-- /.social-auth-links -->
   </div>
   <!-- /.login-box -->
   <!-- jQuery -->
   <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
   <!-- Bootstrap 4 -->
   <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
   <!-- AdminLTE App -->
   <script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
 </body>
 </html>

<?php /**PATH C:\Program Files\Ampps\www\resources\views/auth/login.blade.php ENDPATH**/ ?>