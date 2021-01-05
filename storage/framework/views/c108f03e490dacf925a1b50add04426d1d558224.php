<?php $__env->startSection('title','Running Campaigns'); ?>
<?php $__env->startSection('content'); ?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Users Report's
    </h1><br><br>

            <div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
                        <td>User Name</td>
                        <td>Email</td>
                        <td>Problem Description</td>
                        <td>Complain Date</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody id = "suggestion">
                    <div class="col-md-8">
                        <?php $__currentLoopData = $problems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $problem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($problem['username']); ?></td>
                                <td><?php echo e($problem['email']); ?></td>
                                <td><?php echo e($problem['description']); ?></td>
                                <td><?php echo e($problem['ud']); ?></td>
                                <td> 
                                    <?php if($problem['type'] == 1): ?>
                                        <a href="<?php echo e(route('admin.personalUseredit', $problem['uid'])); ?>" class="btn btn-warning" target = "new">View User</a> | 
                                    <?php elseif($problem['type'] == 2): ?>
                                        <a href="<?php echo e(route('admin.organizationalUseredit',$problem['uid'])); ?>" class="btn btn-warning" target = "new">View User</a> | 
                                    <?php elseif($problem['type'] == 3): ?>
                                        <a href="<?php echo e(route('admin.volunteeredit',$problem['uid'])); ?>" class="btn btn-warning" target = "new">View User</a> |
                                    <?php endif; ?>

                                    <a href="<?php echo e(route('admin.deleteProblem',$problem['id'])); ?>" class="btn btn-danger">Delete Problem</a>
                                </td>
                            
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/userproblem.blade.php ENDPATH**/ ?>