<!-- resources/views/tasks/index.blade.php -->


<?php $__env->startSection('content'); ?>
    <h1>Task list</h1>
    <ul>
        <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li> <?php echo e($task->title); ?>

                <a href="/tasks/<?php echo e($task->id); ?>">Edit</a>
                
                <form action="/tasks/<?php echo e($task->id); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('DELETE'); ?>
                    <button type="submit">Delete</button>
                </form>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todo-list\resources\views/tasks/index.blade.php ENDPATH**/ ?>