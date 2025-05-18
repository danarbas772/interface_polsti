@extends('layouts.main')

@section('title', $artikel->judul)

@section('content')
<style>
    /* Image size constraints */
    .berita-featured-image img {
        max-width: 800px; /* Maximum width for featured images */
        max-height: 600px; /* Maximum height for featured images */
        width: 100%; /* Responsive, but won't exceed max-width */
        height: auto; /* Maintain aspect ratio */
        object-fit: contain; /* Ensures the entire image is visible */
    }
    
    .post-thumb img {
        max-width: 120px; /* Maximum width for thumbnails */
        max-height: 90px; /* Maximum height for thumbnails */
        width: 100%; /* Responsive within container */
        height: auto; /* Maintain aspect ratio */
        object-fit: cover; /* Covers the area nicely */
    }
</style>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Berita</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('berita.index') }}">Berita</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $artikel->judul }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section class="berita-detail-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="berita-detail">
                    <h2 class="berita-title">{{ $artikel->judul }}</h2>
                    <div class="berita-meta">
                        <span><i class="far fa-calendar-alt"></i> {{ $artikel->created_at->format('d M Y') }}</span>
                    </div>
                    
                    @if($artikel->gambar)
                        <div class="berita-featured-image">
                            <img src="{{ asset($artikel->gambar) }}" alt="{{ $artikel->judul }}" class="img-fluid">
                        </div>
                    @endif
                    
                    <div class="berita-content">
                        {!! $artikel->konten !!}
                    </div>

                    <div class="mt-5 pt-4 border-top" style="margin-bottom: 20px;">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-0">Bagikan:</h5>
                            </div>
                            <div class="d-flex gap-2">
                                <a href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" target="_blank" class="btn btn-sm btn-outline-primary">
                                    <i class="fab fa-facebook-f me-1"></i> Facebook
                                </a>
                                <a href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($artikel->judul) }}" target="_blank" class="btn btn-sm btn-outline-info">
                                    <i class="fab fa-twitter me-1"></i> Twitter
                                </a>
                                <a href="https://wa.me/?text={{ urlencode($artikel->judul . ' ' . url()->current()) }}" target="_blank" class="btn btn-sm btn-outline-success">
                                    <i class="fab fa-whatsapp me-1"></i> WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <h4>Berita Terbaru</h4>
                        <ul class="recent-posts">
                            @foreach($recentArticles as $recent)
                                <li>
                                    <div class="post-thumb">
                                        @if($recent->gambar)
                                            <img src="{{ asset($recent->gambar) }}" alt="{{ $recent->judul }}">
                                        @else
                                            <img src="{{ asset('images/default-thumb.jpg') }}" alt="Default Thumbnail">
                                        @endif
                                    </div>
                                    <div class="post-info">
                                        <h5><a href="{{ route('berita.show', $recent->slug) }}">{{ $recent->judul }}</a></h5>
                                        <span class="post-date">{{ $recent->created_at->format('d M Y') }}</span>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    <!-- Info Kampus -->
                    <div class="card shadow-sm mt-4">
                        <div class="card-header bg-info text-white">
                            <h5 class="mb-0">Info Kampus</h5>
                        </div>
                        <div class="card-body">
                            <div class="mb-3">
                                <h6 class="fw-bold">Alamat</h6>
                                <p class="mb-0">Jl. Pendidikan No. 123, Kota Tegal</p>
                            </div>
                            <div class="mb-3">
                                <h6 class="fw-bold">Kontak</h6>
                                <p class="mb-1"><i class="fas fa-phone me-2"></i> (0283) 123456</p>
                                <p class="mb-0"><i class="fas fa-envelope me-2"></i> info@polsti.ac.id</p>
                            </div>
                            <div>
                                <h6 class="fw-bold">Jam Layanan</h6>
                                <p class="mb-1">Senin - Jumat: 08.00 - 16.00</p>
                                <p class="mb-0">Sabtu: 08.00 - 12.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection