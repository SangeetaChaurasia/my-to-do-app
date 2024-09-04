<!-- resources/views/tasks/edit.blade.php -->


<?php $__env->startSection('content'); ?>
    <h1>Edit Task</h1>
    <form action="/tasks/<?php echo e($task->id); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PATCH'); ?>
        <input type="text" name="title" value="<?php echo e($task->title); ?>" required>
        <button type="submit">Update Task</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todo-list\resources\views/tasks/edit.blade.php ENDPATH**/ ?>