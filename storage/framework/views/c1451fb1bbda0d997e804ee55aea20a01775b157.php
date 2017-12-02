

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <div class="container row">
        <h5>Main Hymn</h5>
        <table class="table table-responsive">
            <thead>
            <th>Hymn</th>
            <th>English</th>
            <th>Yoruba</th>
            <th>Actions</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $main_hymn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mh->hymn_id); ?></td>
                    <td><?php echo e($mh->english); ?></td>
                    <td><?php echo e($mh->yoruba); ?></td>
                    <td>
                        <a href="main/<?php echo e($mh->hymn_id); ?>" class="btn btn-primary l"><span class="glyphicon glyphicon-search"></span> &nbsp; View </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <hr/>

        <h2>Appendix</h2>
        <table class="table table-responsive">
            <thead>
            <th>Hymn</th>
            <th>English</th>
            <th>Yoruba</th>
            <th>Actions</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $app_hymn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mh->id); ?></td>
                    <td><?php echo e($mh->english); ?></td>
                    <td><?php echo e($mh->yoruba); ?></td>
                    <td>
                        <a href="appendix/<?php echo e($mh->id); ?>" class="btn btn-primary l"><span class="glyphicon glyphicon-search"></span> &nbsp; View </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo $__env->make('modals.add_hymn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('modals.edit_hymn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('modals.logistics', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>