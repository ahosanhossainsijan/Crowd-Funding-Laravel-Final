<html>

	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" href="/css/mystyle.css" type="text/css">
	</head>
	<body>
	
		<div class="header-index">
			<a class="btn"><b class="text-white name">Final Lab Exam</b></a>
        </div>
        
        <div class="center-login">
            <h1 class="text text-center">Login</h1>
            <form action="" method="post" class="form-horizontal form-material">
                <?php echo e(csrf_field()); ?>

                <div class="form-group">
                    <h4 class="text">Username</h4> 
                    <input type="text" name="username" class="form-control" value ="">
                    <label style ="color:red"></label>
                </div>
                <div class="form-group">
                    <h4 class="text">Password</h4> 
                    <input type="password" name="password" class="form-control" value ="">
                    <label style ="color:red"></label>
                </div>
                <div class="form-group text-center">
                    
                    <input type="submit" name="login" class="btn btn-danger" value="Login" class="form-control">
                </div>
        </div>

        		<!--footer-->
		<footer class="footer">
			<h4>Final Lab Exam</h4>
		</footer>
		
	</body>
</html><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\final lab exam\laratest\resources\views/login/index.blade.php ENDPATH**/ ?>