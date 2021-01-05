<?php $__env->startSection('title','Running Campaigns'); ?>
<?php $__env->startSection('content'); ?>

<div class="patientprofile">
    <div class="d-flex justify-content-center align-items-center container ">
        <div class="col-md-8 donor">
            <h1 class="text-white bg-dark text-center">
                Report Generation
            </h1>

            <h4>
                <div class="d-flex justify-content-center align-items-center container ">
                    <div class="col-md-8 donor">
                        <form action="" method="post" enctype="multipart/form-data">
                            <?php echo e(csrf_field()); ?>

                            <div class="form-group">
                                <label>What should be Included In the Report:</label>
                            </div>

                            <div class="form-group">
                                <input type="checkbox" name="countsOf" value="0">User's Count<br/>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" name="generate" value="Download Report">
                            </div>
                        </form>
                    </div>
                </div>
            </h4>
        </div>

        <script>
            $(document).ready(function(){
                $('#n').hide();
                //$("#n").attr("required", "false");
                $("#do").click(function(){
                    if($("input[type=checkbox]").is( 
                      ":checked")) { 
                        $('#n').show();
                        $("#n").attr("required", "true");
                    } else{ 
                        $('#n').hide();
                        //$("#n").attr("required", "false");
                    } 
                });
            });
        </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.Admin_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/admin/report.blade.php ENDPATH**/ ?>