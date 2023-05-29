<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100px;
  background-color: #000000;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  float: left;
  border-radius: 5px
}

input[type=submit]:hover {
  background-color: #1A1110;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

a:link, a:visited {
  width: 60px;
  background-color: #000000;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  float: left;
  border-radius: 5px
}

a:hover, a:active {
  background-color: #1A1110;
}
</style>
</head>
<body>
    <h1>Create a User</h1>
    <div>
        <?php if($errors->any()): ?>
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
        <?php endif; ?>
    </div>
    <form method="post" action="<?php echo e(route('user.store')); ?>">
        <?php echo csrf_field(); ?>
        <?php echo method_field('post'); ?>
        <div>
            <label>Name</label>
            <input type="text" name="name" placeholder="Name">
        </div>
        <div>
            <label>Surname</label>
            <input type="text" name="surname" placeholder="Surname">
        </div>
        <div>
            <label>Email</label>
            <input type="text" name="email" placeholder="Email">
        </div>
        <div>
            <label>Position</label>
            <input type="text" name="position" placeholder="Position">
        </div>
        <div>
            <a href="\user">Cancel</a><input type="submit" value="Save" />
        </div>
    </form>
</body>
</html><?php /**PATH C:\xampp\htdocs\assessment\resources\views/users/create.blade.php ENDPATH**/ ?>