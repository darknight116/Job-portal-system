<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="css\editprofile.css">
<div class="container">
    <div class="profile-section">
        <h2 class="profile-heading"><?php echo e(__('Profile')); ?></h2>
        <div class="profile-content">
            <div class="profile-form">
                <div class="form-section">
                    <h3 class="form-heading"><?php echo e(__('Update Profile Information')); ?></h3>
                    <?php echo $__env->make('profile.partials.update-profile-information-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="form-section">
                    <h3 class="form-heading"><?php echo e(__('Update Password')); ?></h3>
                    <?php echo $__env->make('profile.partials.update-password-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
                <div class="form-section">
                    <h3 class="form-heading"><?php echo e(__('Delete User')); ?></h3>
                    <?php echo $__env->make('profile.partials.delete-user-form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/profile/edit.blade.php ENDPATH**/ ?>