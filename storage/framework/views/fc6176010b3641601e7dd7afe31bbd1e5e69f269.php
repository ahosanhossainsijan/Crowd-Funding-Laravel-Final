<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-8 donor">
    <a href="<?php echo e(route('user.generateReport')); ?>" class="btn btn-success">Generate Report</a>
</div>

<?php if(session()->has('print')): ?>
<div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
                        <td>Campaing Title</td>
                        <td>Requested Fund</td>
                        <td>Raised Fund</td>
                        <td>Published Date</td>
                        <td>End Date</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody id = "suggestion">
                    <div class="col-md-8">
                        <?php $__currentLoopData = $camp; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($campaign['title']); ?></td>
                                <td><?php echo e($campaign['target_fund']); ?></td>
                                <td><?php echo e($campaign['raised_fund']); ?></td>
                                <td><?php echo e($campaign['publisedDate']); ?></td>
                                <td><?php echo e($campaign['endDate']); ?></td>
                                <td>
                                    <?php if($campaign['status'] == 1): ?>
                                        valid
                                    <?php elseif($campaign['status'] == 0): ?>
                                        InValid
                                    <?php elseif($campaign['status'] == 3): ?>
                                        Complete
                                    <?php else: ?>
                                        Blocked
                                    <?php endif; ?>
                                </td>
                                
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
</div>
<?php else: ?>
        <div class="center">
            <h1 style="color:red">No Data Found!!!Maybe Remote Server isn't working</h1>
        </div>
    <?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.User_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\Final Project\project  demo\laratest\resources\views/user/index.blade.php ENDPATH**/ ?>