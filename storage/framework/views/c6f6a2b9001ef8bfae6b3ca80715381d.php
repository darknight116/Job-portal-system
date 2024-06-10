
<?php $__env->startSection('content'); ?>
<style>
 /* Resetting default margins and paddings */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Global styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f2f2f2;
}

section {
    padding: 20px;
}

.header {
    font-size: 24px;
    margin-bottom: 20px;
}

.application-list {
    margin-bottom: 20px;
}

.application-item {
    background-color: #fff;
    border: 1px solid #ddd;
    padding: 20px;
    margin-bottom: 20px;
}

.application-details div {
    margin-bottom: 10px;
}

.attachment-file {
    font-style: italic;
}

.back-links a {
    display: inline-block;
    padding: 10px 20px;
    margin-right: 10px;
    color: #007bff;
    background-color: #fff;
    border: 1px solid #007bff;
    border-radius: 4px;
    text-decoration: none;
    transition: background-color 0.3s, color 0.3s;
}

.back-links a:hover {
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
}

</style>
<section>
<h1 class="header">Application List</h1>
<div class="application-list">
    <?php $__empty_1 = true; $__currentLoopData = $applications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <div class="application-item">
            <div class="application-details">
                <div>Name: <?php echo e($application->user->name); ?></div>
                <div>Email: <?php echo e($application->user->email); ?></div>
                <div>Address: <?php echo e($application->user->address); ?></div>
                <div>Phone: <?php echo e($application->user->phone); ?></div>

                <div>
                    Attachment: <span class="attachment-file"><?php echo e($application->attachment); ?></span>
                </div>

                <div>Cover letter: <?php echo e($application->cover_letter); ?></div>
                <div>Application date: <?php echo e($application->created_at->format('jS M Y')); ?></div>
            </div>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <div>No results to show!</div>
    <?php endif; ?>
</div>

<div class="back-links">
    <a href="<?php echo e(route('jobs')); ?>">Back to Job List</a>
    <a href="<?php echo e(route('userpanel')); ?>">Back to Dashboard</a>
</div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/userapplications.blade.php ENDPATH**/ ?>