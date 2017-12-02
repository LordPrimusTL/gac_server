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
    <?php echo $__env->yieldContent('stylesheet'); ?>
</head>