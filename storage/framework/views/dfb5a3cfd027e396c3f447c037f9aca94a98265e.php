<?php $__env->startSection('title','Create New Campaigns'); ?>
<?php $__env->startSection('content'); ?>

<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Create New Campaigns
            </h1>
			<div class="form-group">
					<span></span>
				</div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" id="token" name="_token" value=<?php echo e(csrf_token()); ?>>
            <div class="form-group">
                <label>Title:</label>
                <input type="text" class="form-control" id ="title" name="title" value="<?php echo e(old('title')); ?>">
                <span id="err_title" style="color:red;"><?php echo e($errors->first('title')); ?></span>
            </div>
            <div class="form-group">
                <label>Description:</label>
                <input type="text" class="form-control" id="description" name="description" value="<?php echo e(old('description')); ?>">
                <span id="err_description" style="color:red;"><?php echo e($errors->first('description')); ?></span>
            </div>
            <div class="form-group">
                <label>Target Fund</label>
                <input type="text" class="form-control" id="targetfund" name="targetfund" value="<?php echo e(old('targetfund')); ?>">
                <span id="err_targetfund" style="color:red;"><?php echo e($errors->first('targetfund')); ?></span>
            </div>
            <div class="form-group">
                <label>Published date:</label>
                <input type="text" class="form-control" id="pdate" name="pdate" value="<?php echo e(old('pdate')); ?>">
                <span id="err_pdate" style="color:red;"><?php echo e($errors->first('pdate')); ?></span>
            </div>
            <div class="form-group">
                <label>End Date:</label>
                <input type="text" class="form-control" id="edate" name="edate" value="<?php echo e(old('edate')); ?>">
                <span id="err_edate" style="color:red;"><?php echo e($errors->first('edate')); ?></span>
            </div>

            <div class="form-group">
                <label>Image:</label>
                <input type="file" class="form-control" id="file" name="file">
                <h3 style="color:red;"><?php echo e(session('errmsg')); ?></h3>
                <span id="err_file" style="color:red;"><?php echo e($errors->first('file')); ?></span> 
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="create" name="create" value="Create Campaign">
            </div>
        </form>

        

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/createadmin.blade.php ENDPATH**/ ?>