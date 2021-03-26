<?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;

 <?php echo $__env->make('layouts._sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Receptionist</h1>
          </div><!-- /.col -->
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <!-- Main row -->
        <div class="row">
                  <?php echo $__env->yieldContent('content'); ?>
        </div>
       
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <?php echo $__env->make('layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>;<?php /**PATH /opt/lampp/htdocs/HotelMS/resources/views/adminLt/dashborad.blade.php ENDPATH**/ ?>