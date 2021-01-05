
<?php $__env->startSection('title','Registration page'); ?>
<?php $__env->startSection('content'); ?>

<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Registration Page
            </h1>
			<div class="form-group">
					<span></span>
				</div>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="hidden" id="token" name="_token" value=<?php echo e(csrf_token()); ?>>
            <div class="form-group">
                <label>Name:</label>
                <input type="text" class="form-control" id ="name" name="name" value="<?php echo e(old('name')); ?>">
                <span id="err_name" style="color:red;"><?php echo e($errors->first('name')); ?></span>
            </div>
            <div class="form-group">
                <label>UserName:</label>
                <input type="text" class="form-control" id="uname" name="username" value="<?php echo e(old('username')); ?>">
                <span id="err_uname" style="color:red;"><?php echo e($errors->first('username')); ?></span>
            </div>
            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control" id="password" name="pass" value="<?php echo e(old('pass')); ?>">
                <span id="err_pass" style="color:red;"><?php echo e($errors->first('pass')); ?></span>
            </div>
            <div class="form-group">
                <label>ConfirmPassword:</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword" value="<?php echo e(old('cpassword')); ?>">
                <span id="err_cpass" style="color:red;"><?php echo e($errors->first('cpassword')); ?></span>
            </div>
            <div class="form-group">
                <label>Contact:</label>
                <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>">
                <span id="err_contact" style="color:red;"><?php echo e($errors->first('phone')); ?></span>
            </div>
            <div class="form-group">
                <label>Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>">
                <span id="err_email" style="color:red;"><?php echo e($errors->first('email')); ?></span>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <input type="textarea" class="form-control" id="address" name="address" value="<?php echo e(old('address')); ?>">
                <span id="err_address" style="color:red;"><?php echo e($errors->first('address')); ?></span>
            </div>
            <div class="form-group">
                <label>Security Que:</label>
                <input type="text" class="form-control" id="sq" name="sq" placeholder = "Who is your best friend?" value="<?php echo e(old('sq')); ?>">
                <span id="err_sq" style="color:red;"><?php echo e($errors->first('sq')); ?></span>
            </div>

            <div class="form-group">
                <label>Image:</label>
                <input type="file" class="form-control" id="file" name="file">
                <h3 style="color:red;"><?php echo e(session('errmsg')); ?></h3>
                <span id="err_file" style="color:red;"><?php echo e($errors->first('file')); ?></span> 
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" id="create" name="create" value="Register">
            </div>
        </form>

      

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Reg_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\Final Project\project  demo\laratest\resources\views/registration/index.blade.php ENDPATH**/ ?>