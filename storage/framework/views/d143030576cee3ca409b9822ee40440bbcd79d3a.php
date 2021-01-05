<?php $__env->startSection('title','Donation History'); ?>
<?php $__env->startSection('content'); ?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Donation's History
    </h1><br><br>
            <div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
                        <td>User Name</td>
                        <td>Campaing Title</td>
                        <td>Donation Amount</td>
                        <td>Donated Date</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody id = "suggestion">
                    <div class="col-md-8">
                        <?php $__currentLoopData = $donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($donation['username']); ?></td>
                                <td><?php echo e($donation['title']); ?></td>
                                <td><?php echo e($donation['amount']); ?></td>
                                <td><?php echo e($donation['ud']); ?></td>
                                <td>
                                    <a href="<?php echo e(route('admin.campaignedit',$donation['cid'])); ?>" class="btn btn-warning" target = "new">View Campaign</a> | 
                                    <?php if($donation['type'] == 1): ?>
                                        <a href="<?php echo e(route('admin.personalUseredit', $donation['uid'])); ?>" class="btn btn-warning" target = "new">View User</a> 
                                    <?php elseif($donation['type'] == 2): ?>
                                        <a href="<?php echo e(route('admin.organizationalUseredit',$donation['uid'])); ?>" class="btn btn-warning" target = "new">View User</a>
                                    <?php elseif($donation['type'] == 3): ?>
                                        <a href="<?php echo e(route('admin.volunteeredit',$donation['uid'])); ?>" class="btn btn-warning" target = "new">View User</a>
                                    <?php endif; ?>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/donationHistory.blade.php ENDPATH**/ ?>