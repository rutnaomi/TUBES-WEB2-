<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIAKAD Untad - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 font-sans">
    <header class="bg-rose-500 text-white p-4 flex items-center justify-between">
        <div class="text-4xl font-bold tracking-wider">SIAKAD <span class="text-gray-300 text-sm ml-1">MERDEKA</span></div>
    </header>
    <div>
        <button class="bg-rose-500 text-white font-bold py-2 px-4 mt-3 ml-6 rounded shadow">Dashboard</button>
    </div>

    <div class="text-xl font-semibold px-6 py-4">UNTAD <span class="text-gray-700 text-base">Selamat Datang di Sistem Informasi Akademik</span></div>

    <!-- Tambahkan error handling di sini, sebelum form login -->
    @if($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 mx-6 mt-4 rounded relative">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="flex min-h-screen">
        <!-- Main content -->
        <main class="grid grid-cols-1 md:grid-cols-2 gap-4 px-6">
            <!-- sebelah kiri -->
            <div class="bg-white p-6 rounded shadow">
                <div class="text-lg font-semibold mb-2 flex items-center">
                    <svg class="w-5 h-5 mr-2 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M18 8a6 6 0 11-12 0 6 6 0 0112 0zm-6 8a8 8 0 100-16 8 8 0 000 16zm-2-7a1 1 0 100-2 1 1 0 000 2zm4 0a1 1 0 100-2 1 1 0 000 2z" />
                    </svg>
                    Login Page
                </div>

                <div class="text-3xl font-bold text-center mt-2 mb-6">Login</div>

                <form class="space-y-4" method="POST" action="{{ route('login.submit') }}">
                    <div>
                        @csrf
                        <label class="block mb-2 text-sm font-medium">Username</label>
                        <input type="text" name="username" class="w-full p-2 border rounded mb-4" required />

                        <label class="block mb-2 text-sm font-medium">Password</label>
                        <input type="password" name="password" class="w-full p-2 border rounded mb-4" required />

                        <!-- Role field -->
                        <div class="mb-6">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="role">
                                Login Sebagai
                            </label>
                            <select name="role" id="role" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
                                <option value="">---- Silahkan Pilih ----</option>
                                <option value="mahasiswa">MAHASISWA</option>
                                <option value="dosen">DOSEN</option>
                                <option value="pmmdn">MAHASISWA PMMDN</option>
                            </select>
                        </div>
                    </div>

                    <button type="submit" class="w-full bg-rose-500 text-white py-2 rounded">SIGN IN</button>
                </form>
            </div>

            <!-- sebelah kanan -->
            <div class="space-y-4">
                <!-- Pengumuman -->
                <svg class="w-5 h-5 mr-2 text-gray-800" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.97a1 1 0 00.95.69h4.176c.969 0 1.371 1.24.588 1.81l-3.38 2.455a1 1 0 00-.364 1.118l1.287 3.97c.3.921-.755 1.688-1.538 1.118l-3.381-2.455a1 1 0 00-1.176 0l-3.38 2.455c-.783.57-1.838-.197-1.539-1.118l1.287-3.97a1 1 0 00-.364-1.118L2.049 9.397c-.783-.57-.38-1.81.588-1.81h4.176a1 1 0 00.95-.69l1.286-3.97z" />
                </svg>
                Pengumuman
                <div class="bg-rose-500 text-white p-4 rounded">
                    <h3 class="font-semibold text-lg">Himbauan</h3>
                    <ol class="list-decimal ml-6 mt-2 text-sm space-y-1">
                        <li>Disampaikan kepada seluruh mahasiswa agar berhati-hati terhadap penipuan
                            yang mengatasnamakan dosen kemudian meminta bantuan berupa uang dan pulsa.</li>
                        <li>Disampaikan kepada seluruh masyarakat bahwa penerimaan mahasiswa baru Universitas Tadulako tahun 2023 pada jejang Diploma dan Sarjana telah ditutup.
                            Jika ada oknum yang mengatasnamakan Pimpinan Universitas Tadulako menyampaikan bahwa ada penambahan kuota mahasiswa, mohon diabaikan karena sifatnya penipuan.</li>
                    </ol>
                </div>

                <!-- Kuesioner -->
                <div class="bg-cyan-500 text-white p-4 rounded">
                    <h3 class="font-semibold text-lg">Kuesioner</h3>
                    <p class="text-sm mt-2">
                        Bagi seluruh mahasiswa Universitas Tadulako, diharapkan untuk mengisi kuesionersurvey kepuasan mahasiswa atas layanan Universitas Tadulako
                        <span class="bg-yellow-400 text-black px-1">sebelum mengisi KRS pada halaman input KRS</span>.
                        Kuesioner tersebut untuk mengetahui tingkat kepuasan dan kepentingan dari layanan yang telah diberikan oleh Universitas Tadulako,
                        serta menghimpun pendapat mahasiswa untuk bahan evaluasi dan masukkan dalam penyusunan rencana layanan periode berikutnya.
                    </p>
                </div>
            </div>
    </div>
    </main>

    <footer class="text-center text-xs py-4 bg-white shadow">
        Copyright © 2023 <a href="#" class="underline">UPA, TIK</a>,
        Universitas Tadulako.
    </footer>
</body>

</html>