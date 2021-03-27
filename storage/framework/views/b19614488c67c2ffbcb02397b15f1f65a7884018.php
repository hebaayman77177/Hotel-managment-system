<?php $__env->startSection('content'); ?>
<div class="login-wrap">
	<div class="login-html">
		<h2 id="tab-2" style="color: #ffc107">Edit InForamation</h2>
		<div class="login-form">
			
			<form class="sign-up-htm" method="POST" action="<?php echo e(route('manageClient.update',$mId->id)); ?>">
				<?php echo csrf_field(); ?>
				<?php echo method_field('PUT'); ?>
				<div class="group">
					<label for="user" class="label">Name</label>
					<input id="user" type="text" name="name" class="input" value="<?php echo e($mId->name); ?>">
				</div>
				<div class="group">
					<label for="mid" class="label">ID</label>
					<input id="mid" name="mid" class="input" value="<?php echo e($mId->id); ?>">
				</div>
				<div class="group">
					<label for="national_id" class="label">National Id</label>
					<input id="national_id" name="national_id" class="input" value="<?php echo e($mId->national_id); ?>">
				</div>
				<div class="group">
					<label for="email" class="label">Email Address</label>
					<input id="email" type="email" name="emial" class="input" value="<?php echo e($mId->email); ?>">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Edit">
					
					<input type="submit" class="button" value="Back">
				</div>
				
			</form>
		</div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.manageClient.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /opt/lampp/htdocs/HotelMS/resources/views/admin/manageManager/edit.blade.php ENDPATH**/ ?>