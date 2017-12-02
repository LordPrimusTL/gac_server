

<?php $__env->startSection('content'); ?>
    <?php echo $__env->make('partials._adminNavbar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;

    <?php echo $__env->make('partials._message', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo e(csrf_field()); ?>

    <a href="#" id="add_user" class="btn btn-primary"><span class="glyphicon glyphicon-plus"></span> &nbsp; Add User</a>
    <div class="row">
        <table class="table table-striped table-hover " id="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            <?php $i =1?>
            <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($i++); ?></td>
                    <td><?php echo e($user->username); ?></td>
                    <td><?php echo e(date('F d, Y H:i:s', strtotime($user->created_at))); ?></td>
                    <td>
                        <button class="edit-modal btn btn-primary">
                            <span class="glyphicon glyphicon-edit"></span> Edit
                        </button>
                        <button class="delete-modal btn btn-danger" data-id="<?php echo e($user->id); ?>">
                            <span class="glyphicon glyphicon-trash"></span> Delete
                        </button>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
    <?php echo $__env->make('modals.add_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('AdminMaster', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>