<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <link rel="stylesheet" href="">
    <style>
       body {
    font-family: Arial, sans-serif;
    background-color: #add8e6;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.container {
    width: 400px;
    padding: 40px;
    background-color: #ffffff;
    border-radius: 20px;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    animation: fadeIn 0.5s ease;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

h2 {
    text-align: center;
    margin-bottom: -17px;
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
input[type="file"] {
    width: 100%;
    padding: 15px;
    border: 1px solid #ddd;
    border-radius: 10px;
    box-sizing: border-box;
}

.error-message {
    color: red;
    font-size: 0.8em;
}

.login-link {
    text-decoration: none;
    color: #007bff;
    font-size: 0.9em;
    float: left;
    margin-right: 10px;
}

.register-button {
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 10px;
    padding: 15px 0;
    cursor: pointer;
    width: 100%;
    transition: background-color 0.3s ease;
}

.register-button:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <div class="container">
        <h2>Register</h2>
        <form method="POST" action="<?php echo e(route('register')); ?>" enctype="multipart/form-data" class="register-form">
            <?php echo csrf_field(); ?>

            <!-- Name -->
            <div class="form-group">
                <label for="name">Name</label>
                <input id="name" type="text" name="name" value="<?php echo e(old('name')); ?>" required autofocus autocomplete="name" />
                <?php if($errors->has('name')): ?>
                    <span class="error-message"><?php echo e($errors->first('name')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email">Email</label>
                <input id="email" type="email" name="email" value="<?php echo e(old('email')); ?>" required autocomplete="username" />
                <?php if($errors->has('email')): ?>
                    <span class="error-message"><?php echo e($errors->first('email')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" />
                <?php if($errors->has('password')): ?>
                    <span class="error-message"><?php echo e($errors->first('password')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
                <?php if($errors->has('password_confirmation')): ?>
                    <span class="error-message"><?php echo e($errors->first('password_confirmation')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label for="phone">Phone</label>
                <input id="phone" type="text" name="phone" value="<?php echo e(old('phone')); ?>" required autofocus autocomplete="phone" />
                <?php if($errors->has('phone')): ?>
                    <span class="error-message"><?php echo e($errors->first('phone')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label for="address">Address</label>
                <input id="address" type="text" name="address" value="<?php echo e(old('address')); ?>" required autofocus autocomplete="address" />
                <?php if($errors->has('address')): ?>
                    <span class="error-message"><?php echo e($errors->first('address')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Photo -->
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo"  autofocus autocomplete="photo" />
                <?php if($errors->has('photo')): ?>
                    <span class="error-message"><?php echo e($errors->first('photo')); ?></span>
                <?php endif; ?>
            </div>

            <!-- User Role -->
            <!-- <div class="form-group">
                <label for="role">User Role</label>
                <select id="role" name="role" required>
                    <option value="" disabled selected>Select User Role</option>
                    < <option value="1" <?php echo e(old('role') == '1' ? 'selected' : ''); ?>>Normal User</option>
                    <option value="2" <?php echo e(old('role') == '2' ? 'selected' : ''); ?>>Company User</option>
                </select>
            </div> -->
            <div class="form-group">
                <a href="<?php echo e(route('login')); ?>" class="login-link">Already registered?</a>
                <button type="submit" class="register-button">Register</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/auth/register.blade.php ENDPATH**/ ?>