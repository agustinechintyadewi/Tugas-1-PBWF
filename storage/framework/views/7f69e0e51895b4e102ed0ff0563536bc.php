<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo e(asset('/css/style.css')); ?>">
    <!-- font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Noto+Sans+JP&display=swap">
    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    
    <title>Hello Shelter Dashboard</title>
</head>
<body>
    <!-- header -->
    <header>
        <?php echo $__env->make('shelter.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </header>


    <!-- main dashboard -->
    <div class="dashboard">
        <div class="dashboard-banner">
            <img src="image/14669667_5508800.jpg">
            <div class="banner">
                <h1><span>FIND, ADDOPT, RESCUE</span><br>
                Provide a Better Life </br> for Them</h1>
            </div>
        </div>

        <h3 class="dashboard-title">Categories</h3>
        <div class="dashboard-menu">
            <a href="#">All</a>
            <a href="#">Near Me</a>
            <a href="#">Dog</a>
            <a href="#">Cat</a>
        </div>

        <div class="dashboard-content">
            <?php $__currentLoopData = $shelter; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $shelter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <ul>
                <div class="dashboard-card">
                    <img src="image/cat-looking-you.jpg" class="card-image">
                    <div class="card-detail">
                        <h4><?php echo e($shelter->nama); ?></h4>
                        <p class="card-location"><span class="fas fa-home"></span> <?php echo e($shelter->lokasi); ?></p>
                        <p class="card-time"><span class="fas fa-clock"></span>  <?php echo e($shelter->jam); ?> </p>
                        <p class="card-type"><span class="fas fa-dog"></span> <?php echo e($shelter->jenis); ?></p>
                        <p class="card-capacity">Kapasitas: <?php echo e($shelter->kapasitas); ?></p>
                        <p><?php echo e($shelter->ringkasan); ?></p>
                    </div>
                    <div class="details">
                        <a href="/detail">detail</a>
                    </div>
                </div>
            </ul>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>

    <!--Footer-->

</body>
</html><?php /**PATH D:\Chintya\KULIAH\SMT 6\PEMWEB\Project\petshelter\resources\views/shelter/shelter.blade.php ENDPATH**/ ?>