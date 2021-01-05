<?php $__env->startSection('title','Profile'); ?>
<?php $__env->startSection('content'); ?>

<div class="patientprofile">
    <div class="row">
        <div class="col-md-4 box">
            <div class="well">
                <img src="<?php echo e($personals['image']); ?>" class="doc-img">
                <h3 style="color:red;"><?php echo e(session('errmsg')); ?></h3>
                <div class="btn-group">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editimage"><i class="fa fa-picture-o"></i></button>
                    
                </div>
                <p></p>
            </div>
        </div>


        <div class="col-md-8 box">
            <h1 class="text-white bg-dark text-center">
                Personal Information
            </h1>
            <table class="table">
                <tbody>
                    <tr>

                        <td class="tdattribute">Name</td>
                        <td>:</td>
                        <td><?php echo e($personals['name']); ?></td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Email</td>
                        <td>:</td>
                        <td><?php echo e($personals['email']); ?> </td>

                    </tr>

                    <tr>

                        <td class="tdattribute">Phone Number</td>
                        <td>:</td>
                        <td><?php echo e($personals['phone']); ?> </td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Address</td>
                        <td>:</td>
                        <td><?php echo e($personals['address']); ?> </td>

                    </tr>
                </tbody>
            </table>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal"><i class="fa fa-pencil-square-o"></i></button>
        </div>
    </div>
    <!-- ---------------------------------------editimage------------------------------------------------- 
    <div class="modal fadeInDown" id="editimage" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Picture</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.changepropic',$id)); ?>" method="POST" enctype="multipart/form-data">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group ">-->
                            <!-- <img src="../images/placeholder.png" onclick="triggerClick()" id="profileDisplay"><br> -->
                          <!--  <label for="propic">Image</label>
                            <input type="file" name="propic" id="file" value="" class="form-control">

                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="imgUpdate" value="Update"></button>
                </div>
                </form>
            </div>
        </div>
    </div>-->
    <!-- -----------------------------editpass--------------------------------------------------- -->
   <!-- <div class="modal fade" id="editpass" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.changepass',$id)); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label for="pass">Current Password</label>
                            <input type="password" class="form-control" name="pass" value="<?php echo e(old('pass')); ?>">
                            <span style="color:red;"><?php echo e($errors->first('pass')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="npass">New Password</label>
                            <input type="password" class="form-control" name="npass" value="<?php echo e(old('npass')); ?>">
                            <span style="color:red"><?php echo e($errors->first('npass')); ?></span>
                        </div>
                        <div class="form-group">
                            <label for="cpass">Confirm Password</label>
                            <input type="password" class="form-control" name="cpass" value="<?php echo e(old('cpass')); ?>">
                            <span style="color:red;"><?php echo e($errors->first('cpass')); ?></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="passUpdate">Update</button>
                </div>
                </form>
            </div>
        </div>
    </div> -->
    <!-- Editmodal-------------------------------------------------------------------------------- -->
  <!--  <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="<?php echo e(route('admin.edit',$id)); ?>" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" value="<?php echo e($name); ?>">
                            <span style="color:red;"><?php echo e($errors->first('name')); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="<?php echo e($email); ?>">
                            <span style="color:red;"><?php echo e($errors->first('email')); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Phone No:</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo e($phone); ?>">
                            <span style="color:red;"><?php echo e($errors->first('phone')); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo e($address); ?>">
                            <span style="color:red;"><?php echo e($errors->first('address')); ?></span>
                        </div>
                        <div class="form-group">
                            <label>Security Que</label>
                            <input type="text" class="form-control" name="sq" value="<?php echo e($sq); ?>">
                            <span style="color:red;"><?php echo e($errors->first('sq')); ?></span>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <input type="submit" class="btn btn-primary" name="infoUpdate" value="Update">
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
-->
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/profile.blade.php ENDPATH**/ ?>