<?php $__env->startSection('title','Campaigns Information'); ?>
<?php $__env->startSection('content'); ?>

<div class="patientprofile">
    <div class="row">
        <div class="col-md-4 box">
            <div class="well">
                <img src="<?php echo e($image); ?>" class="doc-img" width="300" height="300">
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
                        <td><?php echo e($email); ?> </td>
                    </tr>

                    <tr>

                        <td class="tdattribute">Requested Fund</td>
                        <td>:</td>
                        <td><?php echo e($tf); ?> </td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Raised Fund</td>
                        <td>:</td>
                        <td><?php echo e($rf); ?> </td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Publised Date</td>
                        <td>:</td>
                        <td><?php echo e($pd); ?> </td>

                    </tr>
                    <tr>
                        <td class="tdattribute">End Date</td>
                        <td>:</td>
                        <td><?php echo e($ed); ?> </td>

                    </tr>
                    <tr>
                        <td class="tdattribute">Description</td>
                        <td>:</td>
                        <td><?php echo e($description); ?> </td>
                    </tr>
                    <tr>
                        <td class="tdattribute">Status</td>
                        <td>:</td>
                        <td>
                            
                            <?php if($status == 1): ?>
                                valid
                            <?php elseif($status == 0): ?>
                                InValid
                            <?php elseif($status == 3): ?>
                                Complete
                            <?php elseif($status == 4): ?>
                                Released
                            <?php else: ?>
                                Blocked
                            <?php endif; ?>
                            
                        </td>

                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a href="<?php echo e(route('admin.campaignslist')); ?>" class="btn btn-warning">Cancel</a>
              <!--  <?php if($status == 1): ?>
                    <a href="<?php echo e(route('admin.blockCampaign',$id)); ?>" class="btn btn-danger">Block Campaign</a>
                    <a href="<?php echo e(route('admin.releaseCampaign',$id)); ?>" class="btn btn-success">Release Campaign</a>
                <?php elseif($status == 0): ?>
                    <a href="<?php echo e(route('admin.blockCampaign',$id)); ?>" class="btn btn-danger">Block Campaign</a>
                    <a href="<?php echo e(route('admin.verifyCampaign',$id)); ?>" class="btn btn-success">Verify Campaign</a>
                <?php elseif($status == 2): ?>
                    <a href="<?php echo e(route('admin.unblockCampaign',$id)); ?>" class="btn btn-success">UnBlock Campaign</a>
                <?php elseif($status == 3): ?>
                    <a href="<?php echo e(route('admin.blockCampaign',$id)); ?>" class="btn btn-danger">Block Campaign</a>
                    <a href="<?php echo e(route('admin.releaseCampaign',$id)); ?>" class="btn btn-success">Release Campaign</a>
                <?php endif; ?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editmodal" <?php if($status == 4): ?>
                        hidden
                    <?php endif; ?>><i class="fa fa-pencil-square-o"></i></button>
            </div>-->
        </div>
    </div>

    <!-- Editmodal-------------------------------------------------------------------------------- -->
    <div class="modal fade" id="editmodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="<?php echo e($title); ?>">
                            <span style="color:red;"></span>
                        </div>
                        <div class="form-group">
                            <label>End Date</label>
                            <input type="text" class="form-control" name="ed" value="<?php echo e($ed); ?>">
                            <span style="color:red;"></span>
                        </div>
                        <div class="form-group">
                            <label>Description:</label>
                            <input type="text" class="form-control" name="description" value="<?php echo e($description); ?>">
                            <span style="color:red;"></span>
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

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/campaignedit.blade.php ENDPATH**/ ?>