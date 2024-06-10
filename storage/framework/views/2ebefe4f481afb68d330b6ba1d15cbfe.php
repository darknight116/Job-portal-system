
<?php $__env->startSection('content'); ?>
<style>
    /* CSS for Job Applications Page */
.container.job-applications {
    margin-top: 20px;
}

h1 {
    font-size: 2em;
    margin-bottom: 1em;
    color: #333;
    text-align: center;
}

p.no-applications {
    font-style: italic;
    color: #888;
}

ul.application-list {
    padding: 0;
    width: 20%;
}

li.application-item {
    margin-bottom: 2em;
    border: 1px solid #ddd;
    border-radius: 5px;
    background-color: #f9f9f9;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5em;
}

.job-title,
.applied-date,
.status {
    display: block;
    margin-bottom: 1em;
}

.job-title {
    font-size: 1.2em;
    color: #333;
}

.applied-date {
    font-size: 0.9em;
    color: #666;
}

.status {
    font-size: 1em;
    color: #007bff;
}

.status::before {
    content: "Status: ";
    font-weight: bold;
}

.application-item:hover {
    transform: translateY(-5px);
    transition: transform 0.3s ease;
}

.application-item:after {
    content: '';
    display: block;
    clear: both;
}

</style>

<div class="container job-applications">
    <h1 class="page-title">My Job Applications</h1>
    <?php if($application->isEmpty()): ?>
        <p class="no-applications">You have not applied for any jobs yet. <a href="<?php echo e(route('jobs')); ?>">Browse available jobs</a> and apply now!</p>
    <?php else: ?>
        <ul class="application-list">
            <?php $__currentLoopData = $application; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $application): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li class="application-item">
                    <strong class="job-title">Job Title:</strong> <?php echo e($application->job->title); ?><br>
                    <strong class="applied-date">Applied Date:</strong> <?php echo e($application->created_at->format('Y-m-d')); ?><br>
                    <strong class="status">Status:</strong> <?php echo e($application->status); ?>

                    <!-- Add more details as needed -->
                    <?php if(Auth::user()->role == 2): ?>
                        <a href="<?php echo e(route('jobs.edit', $application->job->id)); ?>">Edit</a>
                        <form action="<?php echo e(route('delete_job', $application->job->id)); ?>" method="post" class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure you want to delete this job?')">Delete</button>
                        </form>
                    <?php endif; ?>
                </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/application.blade.php ENDPATH**/ ?>