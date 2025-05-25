<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>SIAKAD Untad - Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="flex min-h-screen">
        <!-- Sidebar -->
        <aside class="w-56 bg-rose-500 text-white p-4">
            <div class="text-3xl font-bold mb-4">SIAKAD</div>
            <div class="mt-10">
                <button class="bg-white text-rose-500 px-4 py-2 rounded shadow">
                    <i class="fas fa-home"></i> Dashboard
                </button>
            </div>
        </aside>

        <!-- Main content -->
        <main class="flex-1 p-8">
            <div class="max-w-4xl mx-auto grid grid-cols-2 gap-6">
                <!-- Login Form -->
                <div class="bg-white shadow-md rounded p-8">
                    <h2 class="text-3xl font-semibold mb-6">Login</h2>
                    <p class="mb-4 text-gray-600">Siakad Untad</p>
                    <form>
                        <label class="block mb-2 text-sm font-medium">Username</label>
                        <input type="text" class="w-full p-2 border rounded mb-4" />

                        <label class="block mb-2 text-sm font-medium">Password</label>
                        <input type="password" class="w-full p-2 border rounded mb-4" />

                        <label class="block mb-2 text-sm font-medium">Login Sebagai</label>
                        <select class="w-full p-2 border rounded mb-6">
                            <option>---- Silahkan Pilih ----</option>
                            <option>DOSEN</option>
                            <option>MAHASISWA</option>
                            <option>MAHASISWA PMMDN</option>
                        </select>

                        <button type="submit" class="w-full bg-rose-500 text-white py-2 rounded">SIGN IN</button>
                    </form>
                </div>

                <!-- Informasi -->
                <div class="space-y-6">
                    <!-- Himbauan -->
                    <div class="bg-rose-500 text-white p-4 rounded">
                        <h3 class="font-semibold text-lg">Himbauan</h3>
                        <ol class="list-decimal ml-6 mt-2 text-sm">
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
    </div>

    <footer class="text-center text-xs py-4 bg-white shadow">
        Copyright © 2023 <a href="#" class="underline">UPA, TIK</a>,
        Universitas Tadulako.
    </footer>
</body>

</html>