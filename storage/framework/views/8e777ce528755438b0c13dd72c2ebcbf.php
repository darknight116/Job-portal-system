
<?php $__env->startSection('content'); ?>
    <div class="container">
        <!-- <a href="<?php echo e(route('create_company_form')); ?>">Create a company</a> -->
        <?php $__currentLoopData = $companies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $company): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="company">
                <h2><?php echo e($company->name); ?></h2>
                <div class="jobs">
                    <ul>
                        <?php $__currentLoopData = $company->user->jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($job->title); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <!-- <?php if(Auth::user()->role==1): ?>
                    <a href="<?php echo e(route('apply_job_form',$job->id)); ?>">Apply Now</a>
                    <?php endif; ?> -->
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/company.blade.php ENDPATH**/ ?>