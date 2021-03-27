<?php $__env->startSection('content'); ?>
<div class="row">
     <div class="container">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Welcome <span>Back,</span></h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
               <?php echo $html->table([
                 'class'=> 'dataTable table-striped table-hover table-bordered'
               ]); ?>

        </div>
      </div>
     </div>
  </div>

  <?php $__env->startPush('js'); ?>
  <?php echo $html->scripts(); ?>

  <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('admin.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/HotelMS/resources/views/admin/manageManager/index.blade.php ENDPATH**/ ?>