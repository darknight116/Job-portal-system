<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="">
    <style>
    body {
    font-family: Arial, sans-serif;
    background-color: #add8e6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    width: 300px;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    animation: slide-in 0.5s ease;
}

@keyframes slide-in {
    from {
        opacity: 0;
        transform: translateY(-50px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

h2 {
    text-align: center;
}

.form-group {
    margin-bottom: 20px;
}

label {
    display: block;
    font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="password"],
button,
input[type="checkbox"] {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

.remember-me {
    display: flex;
    align-items: center;
}

.login-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    padding: 10px 0;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.login-button:hover {
    background-color: #0056b3;
}

.error-message {
    color: red;
    font-size: 0.8em;
}

.forgot-password {
    text-decoration: none;
    color: #007bff;
    font-size: 0.8em;
    float: left;
}

.status-message {
    margin-bottom: 20px;
    color: #4CAF50;
}
</style>

</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <!-- Session Status -->
        <div class="status-message">
            <?php if(session('status')): ?>
                <?php echo e(session('status')); ?>

            <?php endif; ?>
        </div>
        
        <form method="POST" action="<?php echo e(route('login')); ?>" class="login-form">
            <?php echo csrf_field(); ?>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autofocus autocomplete="username" />
                <?php if($errors->has('email')): ?>
                    <span class="error-message"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" />
                <?php if($errors->has('password')): ?>
                    <span class="error-message"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Remember Me -->
            <div class="form-group remember-me">
                <input id="remember_me" type="checkbox" name="remember">
                <label for="remember_me">Remember me</label>
            </div>

            <div class="form-group">
                <?php if(Route::has('password.request')): ?>
                    <a href="<?php echo e(route('password.request')); ?>" class="forgot-password">Forgot your password?</a>
                <?php endif; ?>
                <button type="submit" class="login-button">Log in</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/auth/login.blade.php ENDPATH**/ ?>