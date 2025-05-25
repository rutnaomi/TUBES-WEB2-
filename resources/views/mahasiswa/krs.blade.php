@extends('layouts.app')

@section('content')

<!-- HEADER -->
<header class="bg-rose-500 text-white py-4 px-6 flex justify-between items-center">
    <div class="text-2xl font-bold tracking-wide">SIAKAD <span class="font-normal">Merdeka</span></div>
    
    <!-- User Dropdown -->
    <div x-data="{ isOpen: false }" class="text-sm relative">
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
            style="display: none;"
        >
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" 
                    class="block w-full px-4 py-2 text-sm text-gray-700 hover:bg-rose-500 hover:text-white text-left">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>

<!-- MENU NAVIGATION -->
<div class="relative flex space-x-6 px-6 py-2 bg-white shadow-md">
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

<!-- Ini breadcrumb + page title nya ya gess ya -->
    <div class="px-6 py-4 flex justify-between items-center">
        <h1 class="text-3xl font-bold text-gray-800">Kartu Rencana Studi (KRS)</h1>
        <div class="text-sm text-gray-600 space-x-2">
            <a href="#" class="hover:underline">Home</a>
            <span>></span>
            <a href="#" class="hover:underline">KRS Mahasiswa</a>
        </div>
    </div>


<div x-data="{ showModal: true }" class="relative">
    <!-- INi bagian Modal plus sama box nya gess -->
    <div
        x-show="showModal"
        x-transition.opacity
        class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 backdrop-blur-sm">
        <!-- Modal Box -->
        <div
            @click.outside="showModal = false"
            class="bg-white p-6 rounded-lg shadow-xl w-full max-w-lg relative">
            <!-- Close Button -->
            <button
                @click="showModal = false"
                class="absolute top-2 right-3 text-gray-600 text-2xl hover:text-gray-800 cursor-pointer">
                &times;
            </button>

            <h2 class="text-xl font-bold mb-4">Kuesioner Kepuasan Mahasiswa</h2>
            <p class="text-gray-700 mb-6 text-justify leading-relaxed">
                Bagi seluruh mahasiswa Universitas Tadulako, diharapkan untuk mengisi kuesioner survey kepuasan mahasiswa atas layanan Universitas Tadulako. Kuesioner tersebut untuk mengetahui tingkat kepuasan dan kepentingan dari layanan yang telah diberikan oleh Universitas Tadulako, serta menghimpun pendapat mahasiswa untuk bahan evaluasi dan masukkan dalam penyusunan rencana layanan periode berikutnya.
            </p>

            <a
                href="https://link-kuesioner.com"
                target="_blank"
                class="bg-rose-500 hover:bg-rose-600 text-white px-4 py-2 rounded">
                Link Kuesioner
            </a>
        </div>
    </div>
   
    <!-- Konten KRS -->
    <div x-show="!showModal" class="p-6 bg-white rounded shadow mt-4 z-0 relative">
        
        <div class="bg-blue-50 p-6 rounded-lg">
            <h3 class="text-xl text-gray-700 font-semibold mb-6">Kartu Rencana Studi</h3>
            <!-- Form baris demi baris -->
            <form>
                <!-- Semester Akademik + Search -->
                <div class="flex items-center mb-4">
                    <label class="w-48 font-semibold">Semester Akademik</label>
                    <input
                        type="text"
                        class="flex-1 border border-gray-300 px-3 py-2 rounded mr-2"
                        placeholder="Semester Akademik">
                    <button class="bg-rose-500 hover:bg-rose-600 text-white px-4 py-2 rounded">
                        Search
                    </button>
                </div>

                <!-- NIM -->
                <div class="flex items-center mb-4">
                    <label class="w-48 font-semibold">NIM</label>
                    <input
                        type="text"
                        value="{{ auth()->user()->username ?? 'Mahasiswa' }}"
                        class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded"
                        readonly>
                </div>

                <!-- NAMA -->
                <div class="flex items-center mb-4">
                    <label class="w-48 font-semibold">NAMA</label>
                    <input
                        type="text"
                        placeholder="NAMA"
                        class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded"
                        readonly>
                </div>

                <!-- JURUSAN -->
                <div class="flex items-center mb-4">
                    <label class="w-48 font-semibold">JURUSAN</label>
                    <input
                        type="text"
                        placeholder="JURUSAN"
                        class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded"
                        readonly>
                </div>

                <!-- PROGRAM -->
                <div class="flex items-center mb-4">
                    <label class="w-48 font-semibold">PROGRAM</label>
                    <input
                        type="text"
                        placeholder="PROGRAM"
                        class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded"
                        readonly>
                </div>

                <!-- DOSEN -->
                <div class="flex items-center mb-4">
                    <label class="w-48 font-semibold">DOSEN</label>
                    <input
                        type="text"
                        placeholder="DOSEN"
                        class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded"
                        readonly>
                </div>
            </form>
        </div>

        <!-- Keterangan -->
        <div class="mt-6 bg-rose-500 text-white p-4 rounded text-sm leading-relaxed">
            <strong class="text-lg">Keterangan :</strong><br>
            - Fitur ini digunakan untuk menampilkan dan mengelola KRS per mahasiswa<br>
            - Cek data di PDDIKTI Klik disini
            <span class="bg-yellow-400 text-white underline"><a href="#" ">PDDIKTI Kemendikbud</a><br></span>
            - Pastikan setiap semesternya data terdapat di PDDIKTI.
        </div>

        <div class="mt-6 bg-cyan-500 text-white p-4 rounded text-sm leading-relaxed">
            <strong class="text-lg">Kuesioner :</strong><br>
            <p>Bagi seluruh mahasiswa Universitas Tadulako, diharapkan untuk mengisi kuesioner survey kepuasan mahasiswa atas layanan Universitas Tadulako. 
                Kuesioner tersebut untuk mengetahui tingkat kepuasan dan kepentingan dari layanan yang telah diberikan oleh Universitas Tadulako, 
                serta menghimpun pendapat mahasiswa untuk bahan evaluasi dan masukkan dalam penyusunan rencana layanan periode berikutnya. <span class="bg-yellow-400 text-white underline"><a href="https://siakad.untad.ac.id/menu">Link Kuesioner</a></span>
            </p>
                
        </div>
    </div>
</div>
@endsection