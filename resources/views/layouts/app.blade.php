<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>@yield('title', 'My To-Do App')</title>
    
        <!-- Add CSS files here -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
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
        @yield('content')
    </main>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} My To-Do App. All rights reserved.</p>
    </footer>

    <!-- Add JavaScript files here -->
    <script src="{{ asset('js/app.js') }}"></script>
</html>