<!-- resources/views/tasks/create.blade.php -->


<?php $__env->startSection('content'); ?>
    <h1>Create New Task</h1>
    <form action="/tasks" method="POST">
        <?php echo csrf_field(); ?>
        <input type="text" name="title" required>
        <button type="submit">Create Task</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\todo-list\resources\views/tasks/create.blade.php ENDPATH**/ ?>