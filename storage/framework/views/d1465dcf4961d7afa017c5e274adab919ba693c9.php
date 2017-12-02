<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._navbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
    <?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <div class="container row">
        <a href="#" class="btn btn-info"  id="view-logistics"><span class="glyphicon glyphicon-search"></span> &nbsp;  View Logistics</a>
        <a href="#" class="btn btn-info" data-hymn_id="<?php echo e($hymn_id); ?>" data-hymn_verse_type="0" data-total_verse = <?php echo e(count($hymn_verse)); ?> id="add-verse" data-hymn_type="1"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add Verse</a>
        <h2>Main Hymn <?php echo e($hymn_id); ?></h2>
        <table class=" col-lg-12 table table-responsive">
            <thead>
            <th class="col-lg-1 col-sm-1 col-xs-1">Verse</th>
            <th class="col-lg-4 col-sm-4 col-xs-4">English</th>
            <th class="col-lg-4 col-sm-4 col-xs-4" >Yoruba</th>
            <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                <th class="col-lg-3 col-sm-3 col-xs-3">Action</th>
            <?php endif; ?>
            </thead>
            <tbody>
            <?php $__currentLoopData = $hymn_verse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($hv->verse_id); ?></td>
                    <td><?php echo e($hv->english); ?></td>
                    <td><?php echo e($hv->yoruba); ?></td>
                    <td>
                        <?php if(\Illuminate\Support\Facades\Auth::check()): ?>
                            <p><a href="#edit" id="edit-verse" class="btn btn-info"
                                  data-id="<?php echo e($hv->id); ?>" data-verse_id="<?php echo e($hv->verse_id); ?>" data-english="<?php echo e($hv->english); ?>" data-yoruba="<?php echo e($hv->yoruba); ?>" data-hymn_id="<?php echo e($hv->hymn_id); ?>" data-hymn_verse_type="0">
                                    <span class="glyphicon glyphicon-edit"></span> &nbsp; Edit </a>
                            <a href="#" onclick="getVerseConfirmation(<?php echo e($hv->id); ?>,0)" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> &nbsp; Delete </a>
                            </p>

                        <?php endif; ?>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
        <hr/>
    </div>
    <?php echo $__env->make('modals.edit_verse', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>