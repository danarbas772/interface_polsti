@extends('layouts.main')

@section('title', 'Halaman Informasi')

@section('content')
<link rel="stylesheet" href="{{ asset('css/informasi.css') }}">

<div class="informasi-container">
    <h1>Halaman Informasi</h1>

    <section class="profil-singkat">
        <h2>Profil Singkat</h2>
        <p>Politeknik STIBISNIS Tegal adalah institusi pendidikan tinggi yang berfokus pada pengembangan ilmu bisnis dan manajemen dengan pendekatan praktis dan profesional.</p>
    </section>

    <section class="tentang-kampus">
        <h2>Tentang Kampus Politeknik STIBISNIS Tegal</h2>
        <p>Politeknik STIBISNIS Tegal berdiri dengan tujuan memberikan pendidikan berkualitas tinggi yang mampu menghasilkan lulusan yang siap bersaing di dunia kerja dan berkontribusi pada pembangunan ekonomi daerah dan nasional.</p>
    </section>

    <section class="visi-misi">
        <h2>Visi dan Misi</h2>
        <p><strong>Visi:</strong> Menjadi institusi pendidikan tinggi terkemuka di bidang bisnis dan manajemen yang unggul dalam pengajaran, penelitian, dan pengabdian kepada masyarakat.</p>
        <p><strong>Misi:</strong></p>
        <ul>
            <li>Menyelenggarakan pendidikan yang berkualitas dan relevan dengan kebutuhan dunia kerja.</li>
            <li>Mengembangkan penelitian yang inovatif dan aplikatif di bidang bisnis dan manajemen.</li>
            <li>Memberikan pengabdian kepada masyarakat yang bermanfaat dan berkelanjutan.</li>
        </ul>
    </section>

    <section class="tujuan">
        <h2>Tujuan Politeknik STIBISNIS Tegal</h2>
        <p>Tujuan utama Politeknik STIBISNIS Tegal adalah mencetak lulusan yang kompeten, profesional, dan beretika tinggi yang mampu menghadapi tantangan global dan berperan aktif dalam pembangunan ekonomi.</p>
    </section>

    <section class="keunggulan">
        <h2>Keunggulan</h2>
        <p>Politeknik STIBISNIS Tegal memiliki keunggulan dalam kurikulum yang terintegrasi dengan dunia industri, dosen yang berpengalaman, fasilitas modern, dan jaringan kerja sama yang luas dengan berbagai perusahaan dan institusi.</p>
    </section>
</div>
@endsection
