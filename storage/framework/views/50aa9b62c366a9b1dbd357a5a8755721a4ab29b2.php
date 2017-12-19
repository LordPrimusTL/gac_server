<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title> <?php echo e($title); ?>: GAC Hymn Server</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="_token" content="<?php echo csrf_token(); ?>" />
    <link href="<?php echo e(asset('css/paper.css')); ?>" rel="stylesheet"/>
    <link href="<?php echo e(asset('css/custom.css')); ?>" rel="stylesheet"/>
</head>
<body>
    <div class="naveee">
        <nav class="navbar navbar-findcond navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#"><img src="<?php echo e(asset('img/logo.png')); ?>" height="60px" width="60px"/></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active"><a href="/">All<span class="sr-only">(current)</span></a></li>
                        <li><a href="/main">Main<span class="sr-only">Main</span></a></li>
                        <li><a href="/appendix">Appendix<span class="sr-only">(current)</span></a></li>
                        <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                            <li><a href="/logout">Log Out<span class="sr-only"></span></a></li>
                    <?php endif; ?>

                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="row">
        <div class="col-lg-4">

        </div>
        <div class="col-lg-4">
            <?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
            <form method="POST" action="<?php echo e(route('review')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="row">
                    <div class="col-sm-12">
                        <input type="hidden" name="aid" id="aid" value="<?php echo e($aid); ?>"/>
                        <input class="form-control" type="text" name="name" id="name" placeholder="Name" required/>
                    </div>
                    <br/>
                    <div class="col-sm-12">
                        <input class="form-control" type="email" name="email" id="email" placeholder="Email"/>
                    </div>

                    <br/>
                    <br/>
                    <div class="col-sm-12">
                        <textarea class="form-control" rows="3" name="feedback" id="feedback" placeholder="Comment/Suggestions/Complaints" required></textarea>
                    </div>
                    <br/>
                    <br/>
                    <div class="col-sm-12">
                        <button class="btn btn-primary" type="submit"><span class="glyphicon glyphicon-send"></span>&nbsp; Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4">

        </div>

    </div>
</body>
<script type="text/javascript" src="<?php echo e(asset('js/jquery-1.10.2.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(asset('js/bootstrap.min.js')); ?>"></script>
</html>