<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container row">
        <a href="#" class="btn btn-info" id="view-logistics"><span class="glyphicon glyphicon-search"></span> &nbsp;  View Logistics</a>
        <a href="#" class="btn btn-info" id="add-hymn" data-hymn_type="0"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add Hymn</a>
        <h2>Main Hymn</h2>
        <table class=" col-lg-12 table table-responsive ">
            <thead>
            <th class="col-lg-1 col-sm-1 col-xs-1">Hymn</th>
            <th class="col-lg-2 col-sm-1 col-xs-1">English</th>
            <th class="col-lg-2 col-sm-1 col-xs-1">Yoruba</th>
            <th class="col-lg-1 col-sm-1 col-xs-1">No. of Verses</th>
            <th class="col-lg-1 col-sm-1 col-xs-1">Verse Count</th>
            <th class="col-lg-1 col-sm-1 col-xs-1">Completed</th>
            <th class="col-lg-4 col-sm-4 col-xs-4">Actions</th>
            </thead>
            <tbody>
            <?php $__currentLoopData = $main_hymn; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mh): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($mh->hymn_id); ?></td>
                    <td><?php echo e($mh->english); ?></td>
                    <td><?php echo e($mh->yoruba); ?></td>
                    <td><?php echo e($mh->n_verses); ?></td>
                    <td><?php echo e($mh->verse_count); ?></td>
                    <?php if($mh->completed): ?>
                        <td>True</td>
                    <?php else: ?>
                        <td>False</td>
                    <?php endif; ?>
                    <td>
                        <a href="main/<?php echo e($mh->hymn_id); ?>" class="btn btn-primary l"><span class="glyphicon glyphicon-search"></span> &nbsp; View </a>
                        <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                            <a href="#" id="edit-hymn" class="btn btn-info"
                               data-id="<?php echo e($mh->id); ?>" data-english="<?php echo e($mh->english); ?>" data-nverse="<?php echo e($mh->n_verses); ?>" data-yoruba="<?php echo e($mh->yoruba); ?>" data-hymn_type="0">
                                <span class="glyphicon glyphicon-edit"></span> &nbsp; Edit </a>
                            <a href="#" onclick="getConfirmation(<?php echo e($mh->hymn_id); ?>, 0)" class="btn btn-danger delete-hymn"  data-id="<?php echo e($mh->id); ?>"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete </a>
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