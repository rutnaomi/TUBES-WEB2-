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

<!-- KONTEN UTAMA -->
<div class="p-6">
    <!-- Breadcrumb -->
    <div class="mb-4">
        <h2 class="text-3xl font-semibold mb-2">CETAK KHS 2 (Riwayat Studi) & TRANSKIP NILAI</h2>
        <div class="flex items-center text-sm text-gray-950">
            <a href="{{ route('dashboard.mahasiswa') }}" class="hover:underline">Home</a>
            <span class="mx-2">></span>
            <a href="#" class="hover:underline">Cetak KHS</a>
        </div>
    </div>

    <!-- Kotak konten -->
    <div class="bg-blue-50 p-6 rounded-lg shadow">
        <h3 class="text-xl font-sans mb-6">CETAK KHS 2 (Riwayat Studi) & TRANSKIP NILAI</h3>

        <form>
            <div class="flex items-center mb-4">
                <label class="w-48 font-semibold">NIM</label>
                <input type="text" value="{{ auth()->user()->username ?? 'Mahasiswa' }}"
                    class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded mr-2" readonly>
                <button class="bg-rose-500 hover:bg-rose-600 text-white px-4 py-2 rounded">Search</button>
            </div>

            <div class="flex items-center mb-4">
                <label class="w-48 font-semibold">NAMA</label>
                <input type="text" placeholder="NAMA"
                    class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded" readonly>
            </div>

            <div class="flex items-center mb-4">
                <label class="w-48 font-semibold">FAKULTAS</label>
                <input type="text" placeholder="FAKULTAS"
                    class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded" readonly>
            </div>

            <div class="flex items-center mb-4">
                <label class="w-48 font-semibold">JURUSAN</label>
                <input type="text" placeholder="JURUSAN"
                    class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded" readonly>
            </div>

            <div class="flex items-center mb-4">
                <label class="w-48 font-semibold">JENJANG</label>
                <input type="text" placeholder="JENJANG"
                    class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded" readonly>
            </div>

            <div class="flex items-center mb-4">
                <label class="w-48 font-semibold">DOSEN PENASEHAT</label>
                <input type="text" placeholder="DOSEN "
                    class="flex-1 bg-gray-200 border border-gray-300 px-3 py-2 rounded" readonly>
            </div>
        </form>
    </div>

    <!-- Keterangan -->
    <div class="mt-6 bg-rose-500 text-white p-4 rounded text-sm leading-relaxed">
        <strong class="text-lg">Keterangan :</strong><br>
        - Fitur ini digunakan untuk menampilkan status keaktifan, IPK, IPS, Jumlah SKS Mahasiswa setiap periodenya<br>
        - Perhitungan IPS = Jumlah ( Bobot * SKS ) / Jumlah SKS<br>
        - Perhitungan IPK = Jumlah IPS / Jumlah Semester Aktif (Semester Ganjil dan Genap)<br>
        - Proses IPS ALL untuk menghitung kembali jumlah Index Prestasi Semester<br>
        - Proses IPK ALL untuk menghitung kembali jumlah Index Prestasi Kumulatif<br>
        - Harap lakukan Proses IPS ALL dulu sebelum IPK ALL.<br>
        - Jika tanda tangan pada Cetak KHS tidak ada, hubungi admin via menu utility.
    </div>

    <!-- Video Youtube -->
    <section class="bg-white p-6 rounded shadow-md text-center mt-6">
        <iframe class="w-full max-w-3xl mx-auto aspect-video" src="https://www.youtube.com/embed/47z0v-J1uTM"
            frameborder="0" allowfullscreen></iframe>
    </section>
</div>
@endsection