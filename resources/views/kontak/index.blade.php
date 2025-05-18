@extends('layouts.main')

@section('title', 'Kontak Kami')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('css/kontak.css') }}">
@endsection

@section('content')
<div class="kontak-container">
    <h1>Kontak Kami</h1>

    <section class="alamat-lengkap">
        <h2>Alamat Lengkap</h2>
        <p>Gedung Politeknik STIBISNIS Tegal, Jl. Pendidikan No. 123, Kota Tegal, 52111</p>
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3958.1234567890123!2d109.123456789!3d-6.123456789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f123456789abc%3A0x123456789abcdef!2sPoliteknik%20STIBISNIS%20Tegal!5e0!3m2!1sen!2sid!4v1234567890123" 
                width="100%" 
                height="300" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
    </section>

    <section class="kontak-info">
        <h2>Kontak</h2>
        <p><strong>Nomor Telepon / WhatsApp:</strong> (0283) 123456</p>
        <p><strong>Alamat Email:</strong> info@polsti.ac.id</p>
        <p><strong>Nomor Fax:</strong> (0283) 654321</p>
    </section>

    <section class="jam-operasional">
        <h2>Jam Operasional</h2>
        <p>Senin–Jumat, 08.00–16.00 WIB</p>
    </section>

    <section class="formulir-kontak">
        <h2>Formulir Kontak</h2>
        <form action="{{ route('kontak.kirim') }}" method="POST" class="kontak-form">
            @csrf
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="email">Alamat Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="subjek">Subjek Pesan</label>
                <input type="text" id="subjek" name="subjek" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea id="pesan" name="pesan" rows="5" required></textarea>
            </div>
            <button type="submit" class="btn-submit">Kirim Pesan</button>
        </form>
    </section>

    <section class="media-sosial">
        <h2>Media Sosial</h2>
        <div class="social-icons">
            <a href="#" class="social-icon"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
            <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
        </div>
    </section>
</div>
@endsection
