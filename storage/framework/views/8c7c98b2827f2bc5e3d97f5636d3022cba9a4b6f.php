 <?php $__env->startSection('content'); ?>

<div class="card">
    <div class="front">
      <div class="user-img"></div>
      <h2>MR.<?php echo e($mId->name); ?></h2>
      <p class="subheading"> <span style="color:#ffc107">Email: </span> <?php echo e($mId->email); ?></p>
      <p class="subheading"> <span style="color:#ffc107">National Id: </span> <?php echo e($mId->national_id); ?></p>
      <p class="subheading"> <span style="color:#ffc107">Password: </span> <?php echo e($mId->password); ?></p>
      <p class="subheading"> <span style="color:#ffc107">Banned: </span> <?php echo e($mId->is_banned? 'No':'Yes'); ?></p>

     <div class="clickback">
        <a href="/admin/manageClient/index">Go Back</a>
     </div>
   </div>
     
 <?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.manageClient.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/HotelMS/resources/views/admin/manageManager/show.blade.php ENDPATH**/ ?>