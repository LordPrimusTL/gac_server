<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
<head>
    <title></title>
</head>
<body>
You have a new <?php echo e($msg); ?>. Please tend to it quickly.
<p>Name: <?php echo e($rev->name); ?></p>
<p>Email: <?php echo e($rev->email); ?></p>
<p>Feedback: <?php echo e($rev->feedback); ?></p>
Thank You
</body>
</html>