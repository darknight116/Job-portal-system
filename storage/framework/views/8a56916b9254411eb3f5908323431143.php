<!DOCTYPE html>
<html>
<head>
<title>Table with Update, Edit, Delete</title>
<link rel="stylesheet" href="styles.css">

<style>
    #myTable {
  border-collapse: collapse;
  width: 100%;
}

#myTable th, #myTable td {
  padding: 8px;
  border: 1px solid #ddd;
  text-align: left;
}

#myTable th {
  background-color: #f2f2f2;
}

#myTable tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

.update {
  background-color: Green;
  color: white;
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
}
.edit{
    background-color: #007bff;
  color: white;
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
}
.delete{
    background-color:red;
  color: white;
  border: none;
  padding: 5px 10px;
  border-radius: 5px;
  cursor: pointer;
}


</style>
</head>
<body>
  <table id="myTable">
   
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Type</th>
        <th>Description</th>
        <th>Salary</th>
        <th>Deadline</th>
        <th>photo</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>     
      <tr>
        <td><?php echo e($job->id); ?></td>
        <td><?php echo e($job->title); ?></td>
        <td><?php echo e($job->type); ?></td>
        <td><?php echo e($job->descripton); ?></td>
        <td><?php echo e($job->salary); ?></td>
        <td><?php echo e($job->deadline); ?></td>
        <td><?php echo e($job->photo); ?></td>
        <td>
          <!--normal user login garni bela ma yo show hunu hundaina -->
          <button class="update">Update</button>
          <button class="edit">edit</button>
          <button class="delete">Delete</button>
        </td>
    </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php echo e($jobs->links()); ?>

  </tbody>
  </table>

  <script src="script.js"></script> </body>
</html>
<?php /**PATH C:\xampp\htdocs\job_portal_system\resources\views/job_table.blade.php ENDPATH**/ ?>