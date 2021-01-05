<?php $__env->startSection('title','Running Campaigns'); ?>
<?php $__env->startSection('content'); ?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Campaings
    </h1><br>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" name="see" id="see">
                        <option value="*" selected>All</option>
                        <option value="0">InValid</option>
                        <option value="1" >Valid</option>
                        <option value="2" >Blocked</option>
                        <option value="3" >Complete</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" id="searchby">
                    <option value = "title" selected hidden>Searh By</option>
                        <option value="username" >User Name</option>
                        <option value="title" >Title</option>
                        <option value="email" >Email</option>
                        <option value="publisedDate" >Published Date</option>
                        <option value="endDate" >Finish Date</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 donor">
            <input type="hidden" id="token" name="_token" value=<?php echo e(csrf_token()); ?>>
        <input type="text" name="search" id="search" placeholder="Search Campaings">
        </div>
    </div><br>

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
                                <td>
                                    <a href="<?php echo e(route('admin.campaignedit',$campaign['id'])); ?>" class="btn btn-warning">View</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
</div>

<script type="text/javascript" src = "/js/campaign.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/campaignlist.blade.php ENDPATH**/ ?>