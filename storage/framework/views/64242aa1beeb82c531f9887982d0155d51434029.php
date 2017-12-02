<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> <?php echo e($title); ?>: GAC-Server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="_token" content="<?php echo csrf_token(); ?>" />
    <link href="<?php echo e(asset('css/paper.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet"/>
    <?php echo $__env->yieldContent('stylesheet'); ?>
</head>
<body>
<div class="">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <div class="panel panel-primary formm">
                <div class="panel-heading">
                    <p class="header">Sign In</p>
                </div>
                <div class="panel-body">
                    <?php echo e(Form::open(['class'=>'col s12'])); ?>

                    <div class="form-group">
                        <label for="username">Username</label>
                        <?php echo e(Form::text("username","",array("required" => "true","id"=>"email","class"=>"form-control formitem","required"=>true,"placeholder"=>"Username"))); ?>

                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <?php echo e(Form::password("password",array("required"=>"true" ,"id"=>"password","class"=>"form-control formitem","required"=>true,"placeholder"=>"Password"))); ?>

                    </div>
                    <div class="form-group">
                        <p>
                            <input type="checkbox" id="remember">
                            <label for="remember">Remember me</label>
                        </p>
                    </div>
                    <div class="form-group">
                        <p class="right-align">
                            <button class="btn btn-primary btn-block formitem" type="submit" name="action">Login</button>
                        </p>
                    </div>
                    <?php echo e(Form::close()); ?>

                </div>

            </div>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
</body>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-1.10.2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</html>
