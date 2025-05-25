<!-- resources/views/dashboard.blade.php -->
@extends('layouts.app')

@section('content')
    <h1 class="text-3xl font-bold mb-4">Dashboard</h1>

    <div class="bg-white p-6 rounded shadow mb-6">
        <h2 class="text-2xl font-bold text-center">VISI & MISI UNIVERSITAS TADULAKO</h2>
        <p class="text-center italic mt-2">“Universitas Tadulako Menjadi Perguruan Tinggi Berstandar Internasional Dalam Pengembangan IPTEKS Berwawasan Lingkungan Hidup”</p>
        <div class="mt-4">
            <h3 class="font-bold">Visi</h3>
            <p>“Universitas Tadulako Menjadi Perguruan Tinggi Berstandar Internasional Dalam Pengembangan IPTEKS Berwawasan Lingkungan Hidup”</p>

            <h3 class="font-bold mt-4">Misi</h3>
            <ol class="list-decimal ml-6 mt-2">
                <li>Menyelenggarakan pendidikan yang bermutu, modern, dan relevan menuju pencapaian standar internasional...</li>
                <li>Menyelenggarakan penelitian yang bermutu untuk pengembangan IPTEKS berwawasan lingkungan hidup.</li>
                <li>Menyelenggarakan pengabdian kepada masyarakat sebagai pemanfaatan hasil pendidikan dan hasil penelitian...</li>
                <li>Menyelenggarakan reformasi birokrasi dan kerja sama regional, nasional dan internasional.</li>
            </ol>
        </div>
    </div>

    <div class="bg-white p-6 rounded shadow">
        <h2 class="text-2xl font-bold text-center">TUTORIAL PENGGUNAAN SIAKAD</h2>
        <p class="text-center font-semibold">Mahasiswa Harus Mandiri Ber KRS<br><span class="italic">say to no for GAPTEK</span></p>
        <div class="mt-4 text-center">
            <p>Cara Reset Password</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_ID" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
@endsection
