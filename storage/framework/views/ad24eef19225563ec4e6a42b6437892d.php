
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="/css/applications.css">
<div class="container job-applications">
    <h1 class="page-title">My Job Applications</h1>
    <?php if($applications->isEmpty()): ?>
        <p class="no-applications">You have not applied for any jobs yet. <a href="<?php echo e(route('jobs')); ?>">Browse available jobs</a> and apply now!</p>
    <?php else: ?> 
        <ul class="application-list">
            <?php $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="application-item">
                    <!-- <strong>Company:</strong> <?php echo e(optional($application->job->company)->name); ?><br> -->
                    <strong class="job-title">Job Title:</strong> <?php echo e($application->job->title); ?><br>
                    <strong class="applied-date">Applied Date:</strong> <?php echo e($application->created_at->format('Y-m-d')); ?><br>
                    <strong class="status">Status:</strong> <?php echo e($application->status); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/applications.blade.php ENDPATH**/ ?>