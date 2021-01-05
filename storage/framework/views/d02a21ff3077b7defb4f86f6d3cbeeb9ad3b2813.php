<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/mystyle.css">
	</head>
	<body>
		<div class="text-center">
			<h1 class="header">Add Employee</h1>
		</div>
		<!--menu starts-->
		<div class="text-center">
			<a href="<?php echo e(route('admin.index')); ?>" class="btn btn-primary">Dashboard</a>
			<a href="<?php echo e(route('admin.create')); ?>" class="btn btn-success">Add Employees</a>
			<a href="<?php echo e(route('logout.index')); ?>" class="btn btn-danger">Logout</a>		
        </div>

        <div class="center">
            <form class="form-horizontal form-material" method="POST" action="<?php echo e(route('admin.store')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <h4 class="text">User Name:</h4> 
                    <input type="text" class="form-control" name = "username">
                </div>
                <div class="form-group">
                    <h4 class="text">Name</h4> 
                    <input type="text" class="form-control" name = "name">
                </div>
                <div class="form-group">
                    <h4 class="text">Contact No</h4> 
                    <input type="text" class="form-control" name = "phone">
                </div>
                <div class="form-group">
                    <h4 class="text">Password</h4> 
                    <input type="password" class="form-control" name = "password">
                </div>
                <div class="form-group">
                    <h4 class="text">Confirm Password</h4> 
                    <input type="confirmPassword" class="form-control" name = "password">
                </div>
                <div class="form-group text-center">
                    <input type="submit" class="btn btn-success" name = "add_employee" value="Add Employee" class="form-control">
                </div>
            </form>
        </div>

        <footer class="footer">
            <h4>Final Lab Exam</h4>
        </footer>
        
    </body>
</html><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\final lab exam\laratest\resources\views/Admin/addEmployee.blade.php ENDPATH**/ ?>