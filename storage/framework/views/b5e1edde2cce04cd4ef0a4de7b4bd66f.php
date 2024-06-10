 <header>
    <div class="logo">
    <a href="#">Career Junction</a>
    </div>
    <nav>
      <ul>
        <li><a href="<?php echo e(route('home')); ?>">Home</a></li>
        <?php if(Auth::check()): ?>
            <li><a href="<?php echo e(route('jobs')); ?>">Jobs</a></li>
        <?php else: ?>
              <li><a href="#" onclick="alert('Please log in to access jobs!!');">Jobs</a></li>
        <?php endif; ?>

        <?php if(Auth::check()): ?>
        <li><a href="<?php echo e(route('companies')); ?>">Companies</a></li>
        <?php else: ?>
              <li><a href="#" onclick="alert('Please log in to access company!!');">Company</a></li>
        <?php endif; ?>
        <li><a href="<?php echo e(url('/about')); ?>">About Us</a></li>
        <li><a href="#">Contact</a></li>

        <?php if(Route::has('login')): ?>
                    <?php if(auth()->guard()->check()): ?>
                       <li> <a href="<?php echo e(url('/userpanel')); ?>"> Dashboard</a></li>
                    <?php else: ?>
                       <li><a href="<?php echo e(route('login')); ?>" >Log in</a></li> 

                        <?php if(Route::has('register')): ?>
                           <li><a href="<?php echo e(route('register')); ?>">Register</a></li> 
                        <?php endif; ?>
                    <?php endif; ?>
            <?php endif; ?>


      </ul>
    </nav>
  </header><?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/navs/header.blade.php ENDPATH**/ ?>