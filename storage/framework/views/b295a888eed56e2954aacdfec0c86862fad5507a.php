

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container row">
        <a href="#" class="btn btn-info" id="view-logistics"><span class="glyphicon glyphicon-search"></span> &nbsp;  View Logistics</a>
        <a href="#" class="btn btn-info" id="add-hymn" data-hymn_type="1"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add Hymn</a>
        <h2>Appendix Hymn</h2>
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
                        <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                            <a href="#" id="edit-hymn" class="btn btn-info"
                               data-id="<?php echo e($mh->id); ?>" data-english="<?php echo e($mh->english); ?>" data-yoruba="<?php echo e($mh->yoruba); ?>" data-hymn_type="1">
                                <span class="glyphicon glyphicon-edit"></span> &nbsp; Edit </a>
                            <a href="#" onclick="getConfirmation(<?php echo e($mh->id); ?>, 1)" class="btn btn-danger delete-hymn" data-id="<?php echo e($mh->id); ?>"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete </a>
                        <?php endif; ?>

                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo $__env->make('modals.edit_hymn', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('modals.logistics', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>