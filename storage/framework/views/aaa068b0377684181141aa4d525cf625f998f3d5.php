<?php $__env->startSection('title','Dashboard'); ?>
<?php $__env->startSection('content'); ?>

<div class="col-md-8 donor">
    <a href="<?php echo e(route('admin.generateReport')); ?>" class="btn btn-success">Generate Report</a>
</div>
        <div class="center col-md-8 box">
            <h1 class="text-white bg-dark text-center">
                Admin's Dashboard
            </h1>
            <table class="table">
                <tbody>
                    <tr>

                        <td class="tdattribute">Total Valid Campaign </td>
                        <td>:</td>
                        <td><?php echo e($validCampaign); ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Total Invalid Campaign </td>
                        <td>:</td>
                        <td><?php echo e($inValidCampaign); ?></td>

                    </tr>

                    <tr>
                        <td class="tdattribute">Total Blocked Campaign </td>
                        <td>:</td>
                        <td><?php echo e($blockedValidCampaign); ?></td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Total Complete Campaign</td>
                        <td>:</td>
                        <td><?php echo e($completeValidCampaign); ?></td>
                    </tr>
                    <tr>
                        <td class="tdattribute">Total Released Campaign</td>
                        <td>:</td>
                        <td><?php echo e($releasedValidCampaign); ?></td>
                    </tr>
                    <tr>
                        <td class="tdattribute">Total Admin</td>
                        <td>:</td>
                        <td><?php echo e($admin); ?></td>
                    </tr>
                    <tr>
                        <td class="tdattribute">Total Personal User</td>
                        <td>:</td>
                        <td><?php echo e($personal); ?></td>
                    </tr>
                    <tr>
                        <td class="tdattribute">Total Organizational User</td>
                        <td>:</td>
                        <td><?php echo e($orgranization); ?></td>
                    </tr>
                    <tr>
                        <td class="tdattribute">Total Volunteer</td>
                        <td>:</td>
                        <td><?php echo e($volunteer); ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project\laratest\resources\views/admin/index.blade.php ENDPATH**/ ?>