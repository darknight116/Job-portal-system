

<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/singlejob.css">
<div class="job-details">
    <h2><?php echo e($job->title); ?></h2>

    <!-- Display job photo if available -->
    <?php if($job->photo): ?>
    <img src="\uploads\<?php echo e($job->photo); ?>" alt="Job Photo" height="200">
    <?php endif; ?>

    <div class="job-info">
        <div><strong>Category:</strong> <?php echo e($job->category->title); ?></div>
        <div><strong>Company:</strong> <?php echo e($job->user->company->name); ?></div>
        <div><strong>Company Address:</strong> <?php echo e($job->user->company->address); ?></div>
        <div><strong>Company Profile:</strong> <?php echo e($job->user->company->profile); ?></div>
        <div><strong>Type:</strong> <?php echo e($job->type); ?></div>
        <div><strong>Salary:</strong> <?php echo e($job->salary); ?></div>
        <div><strong>Description:</strong> <?php echo e($job->descripton); ?></div>
        <div><strong>Apply Before:</strong> <?php echo e($job->deadline->format('jS M Y')); ?></div>
    </div>

    <!-- Apply and Back buttons -->
    <div class="buttons">
        <?php if(Auth::user()->role!=3): ?>
        <a href="<?php echo e(route('apply_job_form',$job->id)); ?>" class="button">Apply Now</a>
        <?php endif; ?>
        <a href="<?php echo e(route('jobs')); ?>" class="button">Back To Job List</a>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/singlejob.blade.php ENDPATH**/ ?>