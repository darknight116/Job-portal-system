
<?php $__env->startSection('content'); ?>

<h1>Applying for<?php echo e($job->title); ?></h1>

<form method="post" action="<?php echo e(route('apply_job')); ?>" enctype="multipart/form-data">
	<?php echo csrf_field(); ?>
	<input type="text" name="job_id" value="<?php echo e($job->id); ?>">
	<div>
		<label>Cover Letter:</label>
		<textarea name="cover_letter" required></textarea>
		<?php $__errorArgs = ['cover_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<?php echo e(message); ?>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
	</div>

	<div>
		<label>CV: </label>
		<input type="file" name="attachment">
		<?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
			<?php echo e(message); ?>

		<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>	
	</div>
	<input type="submit" name="submit">
</form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/apply_job.blade.php ENDPATH**/ ?>