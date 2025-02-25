

<?php $__env->startSection('title'); ?>
    App Dsahboard
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="bg-light py-3 py-md-5">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-12 col-md-5 col-lg-5 col-xl-5 col-xxl-5">
                    <h3 class="mb-3">Hello,</h3>
                    <h4 class="mb-3">Welcome, <?php echo e($name); ?></h4>
                    <form action="<?php echo e(route('logout')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <button class="btn btn-primary btn-sm" type="submit">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('base.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\sruputkode-auth\resources\views/app/index.blade.php ENDPATH**/ ?>