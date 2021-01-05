<html>
<head>
    <title>Report Page</title>
        <!-- FONTAWESOME : https://kit.fontawesome.com/a23e6feb03.js -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <meta name="viewport" content="width-device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <style>
            table{
                font-family: Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }
            table td, table thead{
                border: 1px solid #ddd;
                padding: 8px;
            }
            table tr:nth-child(even){
                background-color: aqua;
            }
            table thead{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: center;
                background-color: #4CAF50;
                color: #fff;
            }
        </style>
</head>
    <body>
        <?php if(session()->has('opt4')): ?>
        <br>
            <h1 class="text-white bg-dark text-center">
                User's Count
            </h1>
            <table>
                <tbody>
                    <tr>
                        <td>Total Admin</td>
                        <td>:</td>
                        <td><?php echo e($countsOf['admin']); ?></td>
                    </tr>
                    <tr>
                        <td>Total Personal User</td>
                        <td>:</td>
                        <td><?php echo e($countsOf['personal']); ?></td>
                    </tr>
                    <tr>
                        <td>Total Organizational User</td>
                        <td>:</td>
                        <td><?php echo e($countsOf['orgranization']); ?></td>
                    </tr>
                    <tr>
                        <td>Total Volunteer</td>
                        <td>:</td>
                        <td><?php echo e($countsOf['volunteer']); ?></td>
                    </tr>
                </tbody>
            </table>
        <?php endif; ?>

        <?php if(session()->has('opt1')): ?>
        <br>
        <h1 class="text-white bg-dark text-center">
        Top 10 Donations of the Site
        </h1><br>
                <table>
                    <thead>
                        <tr>
                            <td>User Name</td>
                            <td>Campaing Title</td>
                            <td>Donation Amount</td>
                            <td>Donated Date</td>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $__currentLoopData = $top10donations; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($donation['username']); ?></td>
                                    <td><?php echo e($donation['title']); ?></td>
                                    <td><?php echo e($donation['amount']); ?></td>
                                    <td><?php echo e($donation['donationDate']); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        <?php endif; ?>

        <?php if(session()->has('opt2')): ?>
        <br>
        <h1 class="text-white bg-dark text-center">
        Top 10 Donators of the Site
        </h1><br>
                <table>
                    <thead>
                        <tr>
                            <td>Name</td>
                            <td>Email</td>
                            <td>Total Donation Amount</td>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $__currentLoopData = $top10donators; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($donation['username']); ?></td>
                                    <td><?php echo e($donation['email']); ?></td>
                                    <td><?php echo e($donation['totalAmount']); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        <?php endif; ?>

        <?php if(session()->has('opt3')): ?>
        <br>
        <h1 class="text-white bg-dark text-center">
        Donation's Over <?php echo e(session('do')); ?>

        </h1><br>
                <table>
                    <thead>
                        <tr>
                            <td>User Name</td>
                            <td>Campaing Title</td>
                            <td>Donation Amount</td>
                            <td>Donated Date</td>
                        </tr>
                    </thead>
                    <tbody>
                            <?php $__currentLoopData = $donationsOver; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $donation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($donation['username']); ?></td>
                                    <td><?php echo e($donation['title']); ?></td>
                                    <td><?php echo e($donation['amount']); ?></td>
                                    <td><?php echo e($donation['donationDate']); ?></td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
        <?php endif; ?>
        <br>
    </body>
</html><?php /**PATH E:\Study\9th SEMESTER\APWT\APWT LAB\learning laravel APWT A\project\laratest\resources\views/admin/reportView.blade.php ENDPATH**/ ?>