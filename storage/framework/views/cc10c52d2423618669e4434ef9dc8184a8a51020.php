<?php $__env->startSection('title','My Campaigns'); ?>
<?php $__env->startSection('content'); ?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    My Campaings
    </h1>

            <div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
                        <td>User Name</td>
                        <td>Users Email</td>
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
                        <?php $__currentLoopData = $campaigns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $campaign): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($campaign['username']); ?></td>
                                <td><?php echo e($campaign['email']); ?></td>
                                <td><?php echo e($campaign['title']); ?></td>
                                <td><?php echo e($campaign['tf']); ?></td>
                                <td><?php echo e($campaign['rf']); ?></td>
                                <td><?php echo e($campaign['pd']); ?></td>
                                <td><?php echo e($campaign['ed']); ?></td>
                                <td>
                                    Released
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/releasedcampaign.blade.php ENDPATH**/ ?>