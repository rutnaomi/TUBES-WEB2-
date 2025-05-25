<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Siakad</title>
    @vite('resources/css/app.css')
    <!-- Ini nambahin Alpine.js untuk klik X di pop-up KRS yoo gess -->
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-gray-100">
    @yield('content')
</body>
</html>
