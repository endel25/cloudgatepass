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
 <?php if(session('error')): ?>
        <div class="alert alert-danger"><?php echo e(session('error')); ?></div>
      <?php endif; ?>
<body class="hold-transition login-page" style="background-image: linear-gradient(black, red);"> 

       <img src="<?php echo e(asset('dist/img/Tarmallogo.png')); ?>" width="200">

    <div class="login-box">
     
      <div class="card-body login-card-body" >
          <p class="login-box-msg">Sign in to start your session</p>
          <form action="<?php echo e(route('login')); ?>" method="post">
            <?php echo csrf_field(); ?>
              <div class="input-group mb-3">
                <input type="text"name="email" required="" class="form-control" placeholder="Username">
              </div>
              <div class="input-group mb-3">
                <input type="password" required="password" name="password" class="form-control" placeholder="Password">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-secondary btn-block">Login</button>
              </div>
              &nbsp;
              <?php if($message = Session::get('message')): ?>
                  <strong style="color: red;"><?php echo e($message); ?></strong>
              <?php endif; ?>
          </form>
      </div>
    </div>
   <!-- jQuery -->
   <script src="<?php echo e(asset('plugins/jquery/jquery.min.js')); ?>"></script>
   <!-- Bootstrap 4 -->
   <script src="<?php echo e(asset('plugins/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
   <!-- AdminLTE App -->
   <script src="<?php echo e(asset('dist/js/adminlte.min.js')); ?>"></script>
 </body>
 </html>

<?php /**PATH C:\Program Files\Ampps\www\gatepass\resources\views/auth/login.blade.php ENDPATH**/ ?>