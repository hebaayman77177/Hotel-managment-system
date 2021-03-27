<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/manager.css">
</head>
<body style="background-color: black">
    <div class="breadcrumb-bar">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-md-12 col-12">
                    <nav aria-label="breadcrumb" class="page-breadcrumb">
                    </nav>
                    <h2 class="breadcrumb-title">MR.<?php echo e($mId->name); ?></h2>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH /opt/lampp/htdocs/HotelMS/resources/views/admin/manageManager/header.blade.php ENDPATH**/ ?>