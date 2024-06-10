<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Jobs Form</title>
    <link rel="stylesheet" href="">
    <style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 400px;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
        }

        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 30px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            color: #555;
        }

        input[type="text"],
        input[type="email"],
        textarea,
        select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
            margin-top: 6px;
            transition: border-color 0.3s ease;
        }

        input[type="text"]:focus,
        input[type="email"]:focus,
        textarea:focus,
        select:focus {
            outline: none;
            border-color: #007bff;
        }

        .error-message {
            color: red;
            font-size: 0.8em;
        }

        .add-job-button {
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 15px 0;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .add-job-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Add Job</h2>
        <form method="POST" action="<?php echo e(route('add_jobs')); ?>" enctype="multipart/form-data" class="add-job-form">
            <?php echo csrf_field(); ?>
            <!-- Category -->
            <div class="form-group">
                <label for="category">Category</label>
                <select id="category" name="category" required>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <option value="<?php echo e($category->id); ?>"><?php echo e($category->title); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- Title -->
            <div class="form-group">
                <label for="title">Title</label>
                <input id="title" type="text" name="title" value="<?php echo e(old('title')); ?>" required autofocus autocomplete="title" />
                <?php if($errors->has('title')): ?>
                    <span class="error-message"><?php echo e($errors->first('title')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Description -->
            <div class="form-group">
                <label for="description">Description</label>
                <textarea id="description" name="description" rows="4" required autocomplete="description"><?php echo e(old('description')); ?></textarea>
                <?php if($errors->has('description')): ?>
                    <span class="error-message"><?php echo e($errors->first('description')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Salary -->
            <div class="form-group">
                <label for="salary">Salary</label>
                <input id="salary" type="number" name="salary" value="<?php echo e(old('salary')); ?>" required autofocus autocomplete="salary" />
                <?php if($errors->has('salary')): ?>
                    <span class="error-message"><?php echo e($errors->first('salary')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Type -->
            <div class="form-group">
                <label for="type">Type</label>
                <input id="type" type="text" name="type" value="<?php echo e(old('type')); ?>" required autofocus autocomplete="type" />
                <?php if($errors->has('type')): ?>
                    <span class="error-message"><?php echo e($errors->first('type')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Deadline -->
            <div class="form-group">
                <label for="deadline">Deadline</label>
                <input id="deadline" type="date" name="deadline" value="<?php echo e(old('deadline')); ?>" required autofocus autocomplete="deadline" />
                <?php if($errors->has('deadline')): ?>
                    <span class="error-message"><?php echo e($errors->first('deadline')); ?></span>
                <?php endif; ?>
            </div>

            <!-- Photo -->
            <div class="form-group">
                <label for="photo">Photo</label>
                <input type="file" name="photo" required autofocus autocomplete="photo" />
                <?php if($errors->has('photo')): ?>
                    <span class="error-message"><?php echo e($errors->first('photo')); ?></span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <button type="submit" class="add-job-button">Add Job</button>
            </div>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/addjob.blade.php ENDPATH**/ ?>