<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

    <table>
        <tr>
            <th><?php echo e($item->title); ?></th>
            <th><?php echo e($item->short_description); ?></th>
            <th><?php echo e($item->long_description); ?></th>
            <th><?php echo e($item->News_Type); ?></th>
            <th><?php echo e($item->Author); ?></th>
            <th><?php echo e($item->file); ?></th>
        </tr>
    </table>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\xampp\htdocs\RajasthanUjala\resources\views/admin.blade.php ENDPATH**/ ?>