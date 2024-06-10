

<?php $__env->startSection('content'); ?>

<link rel="stylesheet" href="css/jobs.css">
<h2>Job List</h2>

<?php if(Auth::check() && Auth::user()->role == 2): ?><!--check if user is logged in and is an Admin to display the link -->
<a href="<?php echo e(route('add_jobs')); ?>" class="button">Post a Job</a>
<?php endif; ?>

<form action="<?php echo e(route('jobs')); ?>" method="get">
    <label for="category">Category</label>
    <select name="category" id="category">
        <option value="0">None</option>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <button type="submit">Go</button>

    <label for="search">Search Job:</label>
    <input type="text" name="search" id="search">
    <button type="submit">Go</button>
</form>
<div class="job-listings">
<?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="job-box">
        <h2><?php echo e($job->title); ?></h2>
        <?php if($job->user && $job->user->company): ?>
            <div>Company: <?php echo e($job->user->company->name); ?></div>
        <?php else: ?>
            <div>Company: Unknown</div>
        <?php endif; ?>

        <div>Category: <?php echo e($job->category->title); ?></div>
        <div>
            <?php if($job->deadline > now()): ?>    
                Apply Before: <?php echo e($job->deadline->format('jS M Y')); ?>

            <?php else: ?>
               Apply Before: Expire
            <?php endif; ?>
        </div>
        
        <?php if($job->application->contains('user_id', auth()->id())): ?>
            <div class="applied-message">You have already Applied</div>
        <?php elseif(Auth::check() && (Auth::user()->role==1 || Auth::user()->id == $job->user_id)): ?>
            <a href="<?php echo e(route('show_job', $job->id)); ?>" class="button-link">View More</a>
        <?php endif; ?> 
    </div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<?php echo e($jobs->links('vendor.pagination.simple-bootstrap-5')); ?>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/jobs.blade.php ENDPATH**/ ?>