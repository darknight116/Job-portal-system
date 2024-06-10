
<?php $__env->startSection('content'); ?>
<link rel="stylesheet" href="css/userpanel.css">
<div class="container">
    <div class="dashboard">
        <div class="sidebar">
            <h2>Dashboard Menu</h2>
            <ul>
                <li><a href="<?php echo e(route('profile.edit')); ?>">My Profile</a></li>
                <?php if(Auth::check() && Auth::user()->role==2): ?>
                <li><a href="<?php echo e(route('my_company_jobs')); ?>">My Jobs</a></li>
                <?php elseif(Auth::check() && Auth::user()->role==1): ?>
                <li><a href="/my-jobs">Applied Jobs</a></li>
                <?php endif; ?>   
            </ul>
             <!-- Display user counts -->
             <?php if(Auth::user()->role == 3): ?>
             <div><a href="<?php echo e(route('userdetails', ['user_id' => Auth::id()])); ?>">Normal Users: <?php echo e($normalUserCount); ?></a></div>
             <div><a href="<?php echo e(route('companyuserdetails', ['user_id' => Auth::id()])); ?>">Company Users: <?php echo e($companyUserCount); ?></a></div>
            <?php endif; ?>
        </div>
        <div class="main-content">
            <div class="header">
                <h1>Welcome <?php echo e(Auth::user()->name); ?></h1>
                <p><?php echo e(Auth::user()->role == 1 ? 'Normal User' : (Auth::user()->role == 2 ? 'Company User' : 'Super Admin')); ?></p>    
            </div>
            
            <div class="profile">
            <?php if(Auth::user()->role==3): ?>
                <img src="../photo/superadmin.jpg" alt="Profile Picture">
                <?php elseif(Auth::user()->role==2): ?>
                <img src="../photo/admin.jpg" alt="">
                <?php else: ?>
                <img src="../photo/user.jpg" alt="">
                <?php endif; ?>
                <!-- <div><?php echo e(Auth::user()->name); ?></div>
                <p>Web Developer</p> -->
            </div>
            <div class="profile">
                <div class="container">
                  <div>
                    <p>Name: <?php echo e(Auth::user()->name); ?></p>
                    <p>Email: <?php echo e(Auth::user()->email); ?></p>
                    <p>Address: <?php echo e(Auth::user()->address); ?></p>
                    <p>Phone: <?php echo e(Auth::user()->phone); ?></p>
                  </div>
                </div>
            </div>
            <div class="logout">
                <form method="POST" action="<?php echo e(route('logout')); ?>">
                    <?php echo csrf_field(); ?>
                    <button type="submit">Log Out</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/userpanel.blade.php ENDPATH**/ ?>