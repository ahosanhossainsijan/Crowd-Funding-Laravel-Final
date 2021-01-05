<?php $__env->startSection('title','Organiztional List'); ?>
<?php $__env->startSection('content'); ?>

<div class="donorlist">
    
    <h1 class="text-white bg-dark text-center">
    Organizational users
    </h1><br>
    <input value="organizations" id="tablename" hidden>
    <div class="row">
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" name="see" id="see">
                        <option value="0" selected>All</option>
                        <option value="3">InValid</option>
                        <option value="1" >Valid</option>
                        <option value="2" >Blocked</option>
                </select>
            </div>
        </div>
        <div class="col-md-2">
            <div class="form-group">
                <select class="form-control" id="searchby">
                    <option value = "name" selected hidden>Searh By</option>
                        <option value="username" >User Name</option>
                        <option value="name" >Name</option>
                        <option value="email" >Email</option>
                        <option value="address" >Address</option>
                        <option value="contactno" >contact no</option>
                </select>
            </div>
        </div>
        <div class="col-md-8 donor">
            <input type="hidden" id="token" name="_token" value=<?php echo e(csrf_token()); ?>>
        <input type="text" name="search" id="search" placeholder="Search Personal Users">
        </div>
    </div><br>

            <div class="row ">

            <table class="table" id="myTable" name= "table">
                <thead>
                    <tr>
                        <td>User Name</td>
                        <td>Organization Name</td>
                        <td>Email</td>
                        <td>Address</td>
                        <td>Contact No</td>
                        <td>Status</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody id = "suggestion">
                    <div class="col-md-8">
                        <?php $__currentLoopData = $organizations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organization): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($organization['username']); ?></td>
                                <td><?php echo e($organization['name']); ?></td>
                                <td><?php echo e($organization['email']); ?></td>
                                <td><?php echo e($organization['address']); ?></td>
                                <td><?php echo e($organization['contactno']); ?></td>
                                <td>
                                    <?php if($organization['status'] == 1): ?>
                                        valid
                                    <?php elseif($organization['status'] == 0): ?>
                                        InValid
                                    <?php else: ?>
                                        Blocked
                                    <?php endif; ?>
                                </td>
                                <td>
                                <a href="<?php echo e(route('admin.organizationalUseredit',$organization['id'])); ?>" class="btn btn-warning">View</a>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            </div>
</div>

<script type="text/javascript" src = "/js/main.js"></script>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/organizationList.blade.php ENDPATH**/ ?>