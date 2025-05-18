@extends('layouts.main')

@section('title', 'Program Studi')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('css/program-studi.css') }}">
@endsection

@section('content')
<div class="container mt-4">
    <h1>Program Studi</h1>
    
    <p>Selamat datang di halaman informasi Program Studi! 🎓</p>

    <p>
        Kami sangat senang Anda mengunjungi halaman ini. Di sini, Anda akan menemukan informasi lengkap seputar pilihan program studi yang tersedia di kampus kami. 
        Setiap program dirancang untuk memberikan pembelajaran yang relevan dengan dunia kerja, serta membekali mahasiswa dengan keterampilan yang dibutuhkan untuk bersaing di era global saat ini.
    </p>

    <p>
        Jangan ragu untuk mengeksplorasi tiap program studi yang kami tawarkan. Klik pada nama program studi di bawah ini untuk melihat detail lengkapnya seperti kurikulum, prospek karier, dan testimoni mahasiswa.
    </p>

    <p>Pilih salah satu program studi berikut untuk informasi lebih lanjut:</p>
    <ul>
        <li><a href="{{ route('prodi.manajemen') }}">D3 Manajemen</a> – Cocok untuk Anda yang tertarik mengembangkan kemampuan dalam bidang manajerial dan organisasi bisnis.</li>
        <li><a href="{{ route('prodi.akuntansi') }}">D3 Akuntansi</a> – Pilihan tepat bagi Anda yang ingin mendalami dunia angka, laporan keuangan, dan audit.</li>
        <li><a href="{{ route('prodi.bisnis') }}">D4 Manajemen Bisnis</a> – Dirancang bagi calon pemimpin masa depan yang ingin memahami seluk-beluk dunia bisnis secara komprehensif.</li>
    </ul>

    <p>
        Apapun pilihan Anda, kami percaya bahwa setiap langkah yang Anda ambil menuju pendidikan adalah investasi berharga untuk masa depan. Jika ada pertanyaan lebih lanjut, jangan ragu untuk menghubungi kami melalui halaman kontak. 
    </p>

    <p>Selamat menjelajah dan semoga Anda menemukan program studi yang sesuai dengan passion dan tujuan Anda! 🌟</p>
</div>
@endsection
