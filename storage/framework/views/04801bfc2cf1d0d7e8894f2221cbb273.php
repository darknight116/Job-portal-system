
<?php $__env->startSection('content'); ?>
<style>
    .job-list {
    margin-top: 20px;
}

.job-item {
    background-color: #f9f9f9;
    border-radius: 5px;
    padding: 20px;
    margin-bottom: 20px;
}

.job-title {
    color: #333;
    font-size: 24px;
    margin-bottom: 10px;
}

.job-details {
    margin-bottom: 15px;
}

.company, .category, .deadline {
    margin-bottom: 5px;
}

.btn {
    display: inline-block;
    background-color: #007bff;
    color: #fff;
    text-decoration: none;
    padding: 10px 20px;
    border-radius: 5px;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
<div class="job-list">
<?php if($jobs->isEmpty()): ?>
        <p class="no-applications">You have not applied for any jobs yet. <a href="<?php echo e(route('jobs')); ?>">Browse available jobs</a> and apply now!</p>
   <?php else: ?>
   <div>
        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="job-item">
            <h2 class="job-title"><?php echo e($job->title); ?></h2>
            <div class="job-details">
                <div class="company">
                    <strong>Company:</strong> <?php echo e($job->user->company->name ?? 'Unknown'); ?>

                    <!--company ra job sanga relation create gare xaina so hami user ko model hudai company ko relation garna parxa-->
                </div>
                <div class="category">
                    <strong>Category:</strong> <?php echo e($job->category->title); ?>

                        <!-- here we use category relation (category) is MODEL-->
                </div>
                <div class="deadline">
                    <strong>Apply Before:</strong> <?php echo e($job->deadline->format('jS M Y')); ?>

                </div>
            </div>
            <a href="<?php echo e(route('application', $job->id)); ?>" class="btn">View Applications</a>
            <?php if(Auth::check() && Auth::user()->role == 2): ?>
            <a href="<?php echo e(route('jobs.edit', $job->id)); ?>" class="btn btn-secondary">Edit</a>
            <form action="<?php echo e(route('delete_job', $job->id)); ?>" method="POST" class="d-inline">
                <?php echo csrf_field(); ?>
                <?php echo method_field('DELETE'); ?>
                <button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                
            </form>
            <?php endif; ?>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php endif; ?>

</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/myjobs.blade.php ENDPATH**/ ?>