

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/applyjob.css">
<div class="application-form">
    <h1>Applying for <?php echo e($job->title); ?></h1>
    <?php if($job->deadline < now()): ?> 
    <p style="text-align: center;">The application deadline has passed. You cannot apply for this job.</p>
    <?php else: ?>
    <form method="post" action="<?php echo e(route('apply_job')); ?>" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>
        <input type="hidden" name="job_id" value="<?php echo e($job->id); ?>">

        <div class="form-group">
            <label for="cover_letter">Cover Letter:</label>
            <textarea name="cover_letter" id="cover_letter" required></textarea>
            <?php $__errorArgs = ['cover_letter'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error-message"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <div class="form-group">
            <label for="attachment">CV:</label>
            <input type="file" name="attachment" id="attachment" accept="application/pdf" required>
            <?php $__errorArgs = ['attachment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="error-message"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <button type="submit" class="submit-button">Submit</button>
    </form>
    <?php endif; ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/applyjob.blade.php ENDPATH**/ ?>