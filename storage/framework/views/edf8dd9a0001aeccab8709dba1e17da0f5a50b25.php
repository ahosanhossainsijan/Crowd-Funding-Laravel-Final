<?php $__env->startSection('title','Donate'); ?>
<?php $__env->startSection('content'); ?>

<div class="patientprofile">
    <div class="row">
        <div class="col-md-4 box">
            <div class="well">
                <img src="https://uphatter.com/share.png" class="doc-img" width="300" height="300">
                <p></p>
            </div>
        </div>

        <div class="col-md-8 box">
            <h1 class="text-white bg-dark text-center">
                <?php echo e($title); ?>

            </h1>
            <table class="table">

                <tbody>
                    <tr>
                        <td class="tdattribute">User Name</td>
                        <td>:</td>
                        <td><?php echo e($username); ?></td>
                    </tr>

                    <tr>
                        <td class="tdattribute">Email</td>
                        <td>:</td>
                        <td><?php echo e($email); ?></td>
                    </tr>

                    <tr>

                        <td class="tdattribute">Requested Fund</td>
                        <td>:</td>
                        <td><?php echo e($tf); ?></td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Raised Fund</td>
                        <td>:</td>
                        <td name = "rf"><?php echo e($rf); ?></td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Publised Date</td>
                        <td>:</td>
                        <td><?php echo e($pd); ?></td>

                    </tr>
                    <tr>
                        <td class="tdattribute">End Date</td>
                        <td>:</td>
                        <td><?php echo e($ed); ?></td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Description</td>
                        <td>:</td>
                        <td><?php echo e($description); ?></td>
                    </tr>
                    <tr>
                        <td class="tdattribute">Status</td>
                        <td>:</td>
                        <td>
                            Valid 
                        </td>

                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a href="/home" class="btn btn-warning">Back</a>
            </div>
            <div class="form-group">
                <form method="post">
                    <?php echo e(csrf_field()); ?>

                    <input type="number" name="amount" placeholder="Donation amount" min="1" value="<?php echo e(old('amount')); ?>">
                    <input type="submit" name="submit" value="Donate" class="btn btn-success">
                    <span  id="err" style="color:red;"><?php echo e($errors->first('amount')); ?></span>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.home_navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\Final Project\project  demo\laratest\resources\views/home/donate.blade.php ENDPATH**/ ?>