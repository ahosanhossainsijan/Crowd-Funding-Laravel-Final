<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">DashBoard</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="<?php echo e(route('admin.index')); ?>" class="btn btn-primary">Dashboard</a>
			<a href="<?php echo e(route('admin.create')); ?>" class="btn btn-success">Add Employees</a>
			<a href="<?php echo e(route('logout.index')); ?>" class="btn btn-danger">Logout</a>		
        </div>
        <div class="center">
            <h3 class="text">All employees</h3>
            <table class="table table-striped">
                <thead>
                    <th>User Name</th>
                    <th>Name</th>
                    <th>Contact No</th>
                    <th></th>
                    <th></th> 
                </thead>
                    <?php $__currentLoopData = $employees; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $employee): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tbody>
                            <td><?php echo e($employee['username']); ?></td>
                            <td><?php echo e($employee['name']); ?></td>
                            <td><?php echo e($employee['phone']); ?></td>
                            <td><a href="<?php echo e(route('admin.show',$employee['id'])); ?>" class="btn btn-success">Edit</a></td>
                            <td><a href="<?php echo e(route('admin.deleteEmployee',$employee['id'])); ?>" class='btn btn-danger'>Delete</td>
                        </tbody>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
        </div>
        
        
<footer class="footer">
            <h4>Final Lab Exam</h4>
        </footer>
        
    </body>
</html><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\final lab exam\laratest\resources\views/Admin/index.blade.php ENDPATH**/ ?>