<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo $__env->yieldContent('title', 'My To-Do App'); ?></title>
    
        <!-- Add CSS files here -->
        <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    </head>

    <!-- Header -->
    <header>
        <nav>
            <a href="/">Home</a>
            <a href="/tasks/create">New Task</a>
            <!-- Add more navigation links here -->
        </nav>
    </header>
    
    <!-- Main Content -->
    <main>
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; <?php echo e(date('Y')); ?> My To-Do App. All rights reserved.</p>
    </footer>

    <!-- Add JavaScript files here -->
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
</html><?php /**PATH C:\xampp\htdocs\todo-list\resources\views/layouts/app.blade.php ENDPATH**/ ?>