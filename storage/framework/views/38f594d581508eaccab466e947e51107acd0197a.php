<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title'); ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/indexstyle.css" type="text/css">
</head>
<body>
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
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services">Donate</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#about-us">Top Donation's</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#footer" >Contact Us</a>
                  </li>
                  
                 <?php if(session('utype') == 1 && session()->has('utype')): ?>
                  <li class = "nav-item">
                    <a class="nav-link" href="<?php echo e(route('user.index')); ?>">Dashboard</a>
                  </li>
                <?php elseif(session('utype') != 1): ?>
                  <li class = "nav-item">
                    <a class = "nav-link" href = "<?php echo e(route('home.index')); ?>">Dashboard</a>
                  </li>
                <?php endif; ?>
                  
                  <li class="nav-item">
                  <a class="nav-link " href="<?php echo e(route('login.index')); ?>">Login</a>
                  </li>
              </ul>
            </div>
          </nav>
    </section>
      
                  <?php echo $__env->yieldContent('content'); ?>

    </body>
</html><?php /**PATH E:\Study\9th SEMESTER\APWT\Final Project\project  demo\laratest\resources\views/layouts/home_navbar.blade.php ENDPATH**/ ?>