<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/indexstyle.css" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Login</title>
</head>


<body>
	<div
		class="fb-like"
		data-share="true"
		data-width="450"
		data-show-faces="true">
	</div>
	<section id="nav-bar">
		<nav class="navbar navbar-expand-lg navbar-light ">
			<a class="navbar-brand" href="#"><img src="/system_images/mlogo.png"></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ml-auto" align="right">
					<li class="nav-item active">
						<a class="nav-link" href="<?php echo e(route('home.index')); ?>">Home </a>
				</ul>
			</div>
		</nav>
	</section>
	<div class="container">
		<br>
		<h1 class="text-black text-center">Login</h1>
		<center><h2 style="color: red;"></h2></center>
		<form name="myForm" action="" method="POST">
			<?php echo e(csrf_field()); ?>

			<div class="col-lg-8 m-auto d-block">
				<div class="form-group">
					<label for="user">Username:</label>
					<input type="text" name="username" id="user" class="form-control" value="<?php echo e(old('username')); ?>">
					<span id="err_user" style="color:red;"><?php echo e($errors->first('username')); ?></span>
				</div>

				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" name="pass" id="pass" class="form-control" value="<?php echo e(old('pass')); ?>">
					<span  id="err_pass" style="color:red;"><?php echo e($errors->first('pass')); ?></span>
				</div>

				<div class="form-group">
					<input type="checkbox"  name="rememberme"> Remember Me<br>
					<span style="color:red;"><?php echo e(session('errmsg')); ?></span>
				</div>
				<div class="form-group">
				Not register yet?? <a href="<?php echo e(route('registration.index')); ?>">Click here</a>
				</div>
				<div class="form-group">
					
				</div>
					<input type="submit" name="login" value="Login" class="btn btn-success">
				<br>
				<br>
				<a href="<?php echo e(route('login.facebook')); ?>" name="loginwithFacebook" class="btn btn-primary btn-block">Login With Facebook</a>
				<a href="<?php echo e(route('login.github')); ?>" name="loginwithGithub" class="btn btn-secondary btn-block">Login With Github</a>
				<a href="<?php echo e(route('login.google')); ?>" name="loginwithGoogle" class="btn btn-danger btn-block">Login With Google</a>
			</div>
		</form>
	</div>
</body>

</html>

<script>
	function get(id){
		return document.getElementById(id);
	}
	function validateForm(){
		var user = get("user").value;
        var pass = get("pass").value;
		var err_user = get("err_user");
		var err_pass = get("err_pass");
		var has_error = true;
		if(user ==""){
			err_user.innerHTML ="User Name required";
			has_error = false;
		}
		if(pass ==""){
			err_pass.innerHTML ="Password required";
			has_error = false;
		}
		return has_error;
	}
</script><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project  demo\laratest\resources\views/login/index.blade.php ENDPATH**/ ?>