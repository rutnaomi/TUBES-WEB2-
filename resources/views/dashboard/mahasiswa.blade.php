<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Dashboard Mahasiswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>

<body class="bg-gray-100">

    <!-- HEADER -->
    <header class="bg-rose-500 text-white py-4 px-6 flex justify-between items-center">
    <div class="text-2xl font-bold tracking-wide">SIAKAD <span class="font-normal">Merdeka</span></div>
    <div class="text-sm relative" x-data="{ isOpen: false }">
        <button 
            @click="isOpen = !isOpen"
            class="flex items-center space-x-2 focus:outline-none"
        >
            <span class="mr-2">User Image</span>
            <span class="font-semibold uppercase">
                {{ auth()->user()->username ?? 'Mahasiswa' }}
            </span>
            <svg 
                class="w-4 h-4 transition-transform"
                :class="{ 'rotate-180': isOpen }"
                fill="none" 
                stroke="currentColor" 
                viewBox="0 0 24 24">
                
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
        </button>

        <!-- Dropdown Menu -->
        <div 
            x-show="isOpen"
            @click.away="isOpen = false"
            x-transition:enter="transition ease-out duration-200"
            x-transition:enter-start="opacity-0 scale-95"
            x-transition:enter-end="opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="opacity-100 scale-100"
            x-transition:leave-end="opacity-0 scale-95"
            class="absolute right-0 mt-2 py-2 w-48 bg-white rounded-md shadow-xl z-20"
            style="display: none;">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" 
                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-rose-500 hover:text-white w-full text-left">
                    Logout
                </button>
            </form>
        </div>
    </div>

    </header>

    <!-- MENU -->
    <!-- <nav class="bg-white shadow-md flex px-6 py-3 space-x-4 text-sm">
        <button class="bg-rose-500 text-white px-4 py-2 rounded shadow">Dashboard</button>
        <button class="text-gray-700 px-4 py-2 hover:text-rose-500">Mahasiswa</button>
        <button class="text-gray-700 px-4 py-2 hover:text-rose-500">Report</button>
    </nav> -->

    <div class="relative flex space-x-6">
        <!-- Dashboard Button -->
        <a href="{{ route('dashboard.mahasiswa') }}" class="bg-rose-500 text-white mt-4 px-4 py-2 rounded shadow inline-flex items-center">
            <i class="fas fa-tachometer-alt mr-2"></i> Dashboard
        </a>

        <!-- Mahasiswa Dropdown -->
        <div class="relative group mt-4">
            <button class="text-gray-500 focus:outline-none inline-flex items-center">
                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.657a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
                Mahasiswa
            </button>
            <div class="absolute z-10 hidden group-hover:block bg-white text-gray-500 mt-2 rounded shadow-md">
                <a href="{{ route('krs.index') }}" class="block px-4 py-2 hover:text-rose-500">KRS Mahasiswa</a>
            </div>
        </div>

        <!-- Report Dropdown -->
        <div class="relative group mt-4">
            <button class="text-gray-500 focus:outline-none inline-flex items-center">
                <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.293l3.71-4.06a.75.75 0 111.08 1.04l-4.25 4.657a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
                </svg>
                Report
            </button>
            <div class="absolute z-10 hidden group-hover:block bg-white text-gray-500 mt-2 rounded shadow-md">
                <a href="{{ route('khs.cetak') }}" class="block px-4 py-2 hover:text-rose-500">Cetak KHS 2</a>
            </div>
        </div>
    </div>

    <!-- BREADCRUMB & PAGE TITLE -->
    <div class="px-6 py-4 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Dashboard</h1>
        <div class="text-sm text-gray-600 space-x-2">
            <a href="#" class="hover:underline">Home</a>
            <span>></span>
            <a href="#" class="hover:underline">Dashboard</a>
        </div>
    </div>

    <!-- CONTENT -->
    <main class="px-6 space-y-8">

        <!-- VISI & MISI -->
        <section class="bg-white p-6 rounded shadow-md">
            <h2 class="text-2xl font-bold text-center mb-4">VISI & MISI UNIVERSITAS TADULAKO</h2>
            <p class="text-center text-lg mb-4">“Universitas Tadulako Menjadi Perguruan Tinggi Berstandar Internasional Dalam Pengembangan IPTEKS Berwawasan Lingkungan Hidup”</p>

            <h3 class="text-xl font-semibold mb-2">Visi</h3>
            <ul class="list-decimal list-inside text-gray-700 space-y-1">
                <li>Menyelenggarakan pendidikan yang bermutu, modern, dan relevan menuju pencapaian standar internasional dalam pengembangan IPTEKS berwawasan lingkungan hidup.</li>
                <li>Menyelenggarakan penelitian yang bermutu untuk pengembangan IPTEKS berwawasan lingkungan hidup.</li>
                <li>Menyelenggarakan pengabdian kepada masyarakat sebagai pemanfaatan hasil pendidikan dan hasil penelitian yang dibutuhkan dalam pembangunan masyarakat.</li>
                <li>Menyelenggarakan akan reformasi birokrasi dan kerjasama regional, nasional dan internasional.</li>
            </ul>
        </section>

        <!-- VIDEO YT -->
        <section class="bg-white p-6 rounded shadow-md text-center">
            <h3 class="text-xl font-bold mb-2">TUTORIAL PENGGUNAAN SIAKAD</h3>
            <p class="text-lg font-semibold mb-4">Mahasiswa Harus Mandiri Ber KRS <br><em>Say no to GAPTEK</em></p>
            <p class="mt-2 text-sm text-gray-600">Cara Reset Password</p>
            <iframe class="w-full max-w-3xl mx-auto aspect-video" src="https://www.youtube.com/embed/47z0v-J1uTM" frameborder="0" allowfullscreen></iframe>

            <!-- BAGIAN U/ LIAT VIDEO YT-->
            <div class="flex justify-center items-center bg-white  rounded shadow-md mt-4 mb-6">
                <p class="text-center text-rose-500"><a href="https://www.youtube.com">See all from YouTube</a></p>
            </div>
        </section>


        <!-- BAGIAN PELAPORAN INFO -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
            <!-- Kiri -->
            <div class="bg-white shadow-md p-5 rounded">
                <h3 class="text-lg font-bold mb-2">Periode Pelaporan Lampau</h3>
                <p class="text-gray-600">Daftar Periode Pelaporan Lampau</p>
            </div>
            <!-- Kanan -->
            <div class="bg-white shadow-md p-5 rounded">
                <h3 class="text-lg font-bold mb-2">Title</h3>
                <p class="text-gray-600">Description</p>
            </div>
        </div>

        <!-- BAGIAN SIMULASI -->
        <div class="bg-white shadow-md rounded p-5 mb-6">
            <h3 class="text-lg font-bold text-gray-800 mb-1">SIMULASI SIAKAD</h3>
            <p class="text-sm text-gray-500 mb-3">Posting By Rachmad Kurniawan | 28 November 2023</p>
            <div class="flex items-center space-x-4">
                <img src="{{ asset('images/attachment-icon.png') }}" alt="Attachment Image" class="w-16 h-16">
                <div>
                    <span>SLIDE SIAKAD <a href="#" class="text-blue-600 font-bold">Klik Disini</a></span>
                </div>
            </div>
            <p class="text-red-600 mt-2">... more</p>
        </div>

        <!-- FOOTER -->
        <footer class="text-left text-sm text-gray-600 py-4 border-t">
            <p>Copyright © 2023 <span class="font-sans">UPA. TIK</span>. Universitas Tadulako.</p>
            <p class="text-right pr-5 font-bold text-gray-700">Version – 3.0.0</p>
        </footer>

    </main>
</body>

</html>