@extends('layouts.main')

@section('title', 'Berita')

@section('content')
<style>
    /* Image size constraints */
    .news-img img {
        max-width: 100%; /* Responsive within container */
        max-height: 220px; /* Maximum height for news images */
        width: 100%; /* Fill the container width */
        height: 220px; /* Fixed height for consistent card appearance */
        object-fit: cover; /* Cover the area while maintaining aspect ratio */
    }
    
    /* News card styling */
    .news-card {
        height: 100%;
        display: flex;
        flex-direction: column;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }
    
    .news-card:hover {
        transform: translateY(-5px);
    }
    
    .news-img {
        position: relative;
        overflow: hidden;
    }
    
    .news-date {
        position: absolute;
        bottom: 0;
        left: 0;
        background-color: var(--primary-color, #3498db);
        color: white;
        padding: 5px 10px;
        text-align: center;
    }
    
    .news-date .day {
        font-size: 1.2rem;
        font-weight: bold;
        display: block;
    }
    
    .news-content {
        padding: 20px;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
    }
    
    .news-content h3 {
        font-size: 1.2rem;
        margin-bottom: 10px;
    }
    
    .news-content p {
        color: #666;
        margin-bottom: 15px;
        flex-grow: 1;
    }
    
    .news-link {
        color: var(--primary-color, #3498db);
        font-weight: 600;
        text-decoration: none;
        display: inline-block;
        align-self: flex-start;
    }
    
    .news-link i {
        margin-left: 5px;
        transition: transform 0.3s ease;
    }
    
    .news-link:hover i {
        transform: translateX(5px);
    }
</style>

<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Berita & Informasi</h1>
                <p>Berita dan informasi terbaru seputar Politeknik STIBISNIS Tegal</p>
            </div>
        </div>
    </div>
</section>

<section class="berita-section py-5">
    <div class="container">
        @if($berita->count() > 0)
            <div class="row">
                @foreach($berita as $artikel)
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="news-card">
                            <div class="news-img">
                                @if($artikel->gambar)
                                    <img src="{{ asset($artikel->gambar) }}" alt="{{ $artikel->judul }}">
                                @else
                                    <img src="{{ asset('images/default-news.jpg') }}" alt="Default Image">
                                @endif
                                <div class="news-date">
                                    <span class="day">{{ $artikel->created_at->format('d') }}</span>
                                    <span class="month">{{ $artikel->created_at->format('M') }}</span>
                                </div>
                            </div>
                            <div class="news-content">
                                <h3><a href="{{ route('berita.show', $artikel->slug) }}">{{ $artikel->judul }}</a></h3>
                                <p>{{ Str::limit(strip_tags($artikel->konten), 100) }}</p>
                                <a href="{{ route('berita.show', $artikel->slug) }}" class="news-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="row">
                <div class="col-12 text-center py-5">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle me-2"></i> Belum ada berita yang dipublikasikan.
                    </div>
                </div>
            </div>
        @endif
    </div>
    
    <div class="container mt-4">
        <div class="row">
            <div class="col-12 d-flex justify-content-center">
                {{ $berita->links() }}
            </div>
        </div>
    </div>
</section>
@endsection