<?php $__env->startSection('title',"Organization's Information"); ?>
<?php $__env->startSection('content'); ?>

<div class="d-flex justify-content-center align-items-center container ">
    <div class="col-md-8 box">
                <h1 class="text-white bg-dark text-center">
                    Organization's Information
                </h1>
                
                <form action="" method="post" class="center">
                    <div class="form-group">
                        <label>User Name: <?php echo e($username); ?></label>
                    </div>
                    <div class="form-group">
                        <label>Organization Name: <?php echo e($name); ?></label>
                    </div>
                    <div class="form-group">
                        <label>Email: <?php echo e($email); ?></label>
                    </div>
                    <div class="form-group">
                        <label>Phone: <?php echo e($contactno); ?></label>
                    </div>
                    <div class="form-group">
                        <label>Address: <?php echo e($address); ?></label>
                    </div>
                    <div class="form-group">
                        <label>Status: 
                            <?php if($status == 1): ?>
                                valid
                            <?php elseif($status == 0): ?>
                                InValid
                            <?php else: ?>
                                Blocked
                            <?php endif; ?>
                        </label>
                    </div>
                    <div class="form-group">
                        <a href="<?php echo e(route('admin.organizationalList')); ?>" class="btn btn-warning">Cancel</a>
                        <?php if($status == 1): ?>
                            <a href="<?php echo e(route('admin.blockuser',$id)); ?>" class="btn btn-danger">Block User</a>
                        <?php elseif($status == 0): ?>
                            <a href="<?php echo e(route('admin.blockuser',$id)); ?>" class="btn btn-danger">Block User</a>
                            <a href="<?php echo e(route('admin.verifyuser',$id)); ?>" class="btn btn-success">Verify User</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('admin.unblockuser',$id)); ?>" class="btn btn-success">UnBlock User</a>
                        <?php endif; ?>
                    </div>
                </form>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/organizationalUseredit.blade.php ENDPATH**/ ?>