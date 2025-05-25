<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - Siakad</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100">
    <header class="bg-[#f4425f] text-white p-4 flex justify-between items-center">
        <div class="text-3xl font-bold">SIAKAD <span class="text-sm ml-2">Merdeka</span></div>
        <div class="text-right">
            <span class="font-semibold">RUT NAOMI ESTER SITOMPUL</span>
        </div>
    </header>

    <div class="flex">
        <aside class="w-60 bg-white shadow h-screen p-4">
            <a href="{{ route('dashboard') }}" class="block bg-[#f4425f] text-white rounded p-2 mb-2">
                <i class="fa fa-dashboard mr-2"></i> Dashboard
            </a>
            <a href="#" class="block p-2">Mahasiswa</a>
            <a href="#" class="block p-2">Report</a>
        </aside>
        <main class="p-6 w-full">
            @yield('content')
        </main>
    </div>
</body>
</html>
