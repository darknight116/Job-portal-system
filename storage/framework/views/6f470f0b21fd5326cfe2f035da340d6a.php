<!-- create.blade.php -->



<?php $__env->startSection('content'); ?>
    <div class="container">
        <h2>Create Company</h2>
        <form action="<?php echo e(route('create_company_form')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" id="address" name="address">
            </div>
            <div class="form-group">
                <label for="logo">Logo:</label>
                <input type="file" id="logo" name="logo">
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" id="phone" name="phone">
            </div>
            <div class="form-group">
                <label for="profile">Profile:</label>
                <textarea id="profile" name="profile"></textarea>
            </div>
            <div class="form-group">
                <label for="url">URL:</label>
                <input type="text" id="url" name="url">
            </div>
            <button type="submit">Create</button>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/createcompany.blade.php ENDPATH**/ ?>