<!DOCTYPE html>
<html>
<head>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Forgot_password | Welcome to Josh Frontend</title>
    <!--global css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>">
    <link href="<?php echo e(asset('assets/vendors/bootstrapvalidator/css/bootstrapValidator.min.css')); ?>" rel="stylesheet"/>
    <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo e(asset('assets/images/favicon.png')); ?>" type="image/x-icon">
    <!--end of global css-->
    <!--page level css starts-->
    <link rel="stylesheet" type="text/css" href="<?php echo e(asset('assets/css/frontend/forgot.css')); ?>">
    <!--end of page level css-->
</head>
<body>
<div class="container">
    <div class="row">
        <div class="box animation flipInX">
            <img src="<?php echo e(asset('assets/images/josh-new.png')); ?>" alt="logo" class="img-responsive mar">
            <h3 class="text-primary">Forgot Password</h3>
            <p>Enter your email to reset your password</p>
            <div id="notific">
            <?php echo $__env->make('notifications', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            </div>
            <form action="<?php echo e(route('forgot-password')); ?>" class="omb_loginForm" autocomplete="off" method="POST">
                <?php echo Form::token(); ?>

                <div class="form-group">
                    <label class="sr-only"></label>
                    <input type="email" class="form-control email" name="email" placeholder="Email"
                           value="<?php echo old('email'); ?>">
                    <span class="help-block"><?php echo e($errors->first('email', ':message')); ?></span>
                </div>
                <div class="form-group">
                    <input class="form-control btn btn-primary btn-block" type="submit" value="Reset Your Password">
                </div>
            </form>

            Back to login page?<a href="<?php echo e(route('login')); ?>"> Click here</a>
        </div>
    </div>
</div>
<!--global js starts-->
<script type="text/javascript" src="<?php echo e(asset('assets/js/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/vendors/bootstrapvalidator/js/bootstrapValidator.min.js')); ?>" type="text/javascript"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/bootstrap.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('assets/js/frontend/forgotpwd_custom.js')); ?>"></script>
<!--global js end-->
</body>
</html>
