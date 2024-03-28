<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <script src="//unpkg.com/alpinejs" defer></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        laravel: "#ef3b2d",
                    },
                },
            },
        };
    </script>
    <title>Data Driven Smart garbage collection system</title>
    <style>
        /* Adjustments to ensure navbar stays fixed and footer stays at bottom */
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }
        main {
            flex: 1; /* Allow main content to grow to fill remaining space */
            overflow-y: auto; /* Enable vertical scrolling for main content */
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- Navigation Bar -->
<nav class="flex justify-between items-center p-4 bg-white shadow-md fixed top-0 left-0 w-full z-50">
    <a href="/" class="text-xl font-bold text-blue-500">Smart Garbage Collection System</a>
    <ul class="flex space-x-6 text-lg">
        <li><a href="/dustbin" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Dustbin</a></li>
        <li><a href="/" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Driver</a></li>
        {{-- <li><a href="/register" class="hover:text-laravel"><i class="fa-solid fa-user-plus"></i> Register</a></li>
        <li><a href="/login" class="hover:text-laravel"><i class="fa-solid fa-arrow-right-to-bracket"></i> Login</a></li> --}}
    </ul>
</nav>

<!-- Main Content -->
<main class="container mx-auto py-8">
    <!-- Content Slot -->
    <div class="overflow-y-auto">
        {{$slot}}
    </div>
</main>

<!-- Footer -->
<footer class="bg-blue-400 text-white h-14 opacity-90 flex items-center justify-between p-4">
    <p class="font-bold">Copyright &copy; 2024, All Rights reserved</p>
</footer>
<x-flash-message/>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
