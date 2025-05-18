@extends('layouts.main')

@section('title', 'Home')

@section('extra_css')
<link rel="stylesheet" href="{{ asset('css/home.css') }}">
@endsection

@section('content')
<!-- Hero Section with Carousel -->
<section class="hero-section">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('images/slider.jpg') }}" class="d-block w-100" alt="Campus Life">
                <div class="carousel-caption">
                    <h2>Selamat Datang di Politeknik STIBISNIS Tegal</h2>
                    <p>Mencetak generasi profesional yang siap di dunia kerja</p>
                    <a href="{{ route('pendaftaran') }}" class="carousel-btn">Daftar Sekarang</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider.jpg') }}" class="d-block w-100" alt="Academic Excellence">
                <div class="carousel-caption">
                    <h2>Program Studi Unggulan</h2>
                    <p>Kurikulum berbasis industri dengan sertifikasi profesional</p>
                    <a href="{{ route('program-studi') }}" class="carousel-btn">Lihat Program Studi</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('images/slider.jpg') }}" class="d-block w-100" alt="Student Activities">
                <div class="carousel-caption">
                    <h2>Fasilitas Modern</h2>
                    <p>Mendukung kegiatan akademik dan pengembangan mahasiswa</p>
                    <a href="{{ route('fasilitas') }}" class="carousel-btn">Jelajahi Kampus</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
    <div class="container" style="margin-top: 50px; margin-bottom: 50px;">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img src="{{ asset('images/slider.jpg') }}" alt="Politeknik STIBISNIS Tegal Campus" class="about-image">
            </div>
            <div class="col-lg-6">
                <div class="section-heading">
                    <h2>Tentang Kami</h2>
                    <div class="heading-line"></div>
                </div>
                <p class="lead">Politeknik STIBISNIS Tegal adalah institusi pendidikan vokasi yang berfokus pada pengembangan sumber daya manusia yang profesional dan kompeten di bidang bisnis dan teknologi.</p>
                <p>Kami berkomitmen untuk memberikan pendidikan berkualitas dengan pendekatan praktis dan kurikulum yang relevan dengan kebutuhan industri saat ini. Mahasiswa kami dibekali dengan pengetahuan teoritis dan keterampilan praktis yang mempersiapkan mereka untuk karir yang sukses.</p>
                <a href="{{ route('informasi') }}" class="btn btn-primary mt-3">Pelajari Lebih Lanjut</a>
            </div>
        </div>
    </div>
</section>

<!-- Program Studi Section -->
<section class="prodi-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Program Studi</h2>
            <div class="heading-line mx-auto"></div>
            <p class="lead">Pendidikan vokasi berkualitas untuk karir masa depan Anda</p>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="prodi-card">
                    <div class="prodi-icon">
                        <i class="fas fa-chart-line"></i>
                    </div>
                    <h3>D3 Manajemen</h3>
                    <p>Program ini mempersiapkan mahasiswa dengan pengetahuan dan keterampilan dalam mengelola bisnis dan kepemimpinan organisasi.</p>
                    <a href="{{ route('prodi.manajemen') }}" class="prodi-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="prodi-card">
                    <div class="prodi-icon">
                        <i class="fas fa-calculator"></i>
                    </div>
                    <h3>D3 Akuntansi</h3>
                    <p>Program ini fokus pada pembukuan, audit, perpajakan, dan sistem informasi akuntansi untuk mempersiapkan akuntan profesional.</p>
                    <a href="{{ route('prodi.akuntansi') }}" class="prodi-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="prodi-card">
                    <div class="prodi-icon">
                        <i class="fas fa-laptop-code"></i>
                    </div>
                    <h3>D4 Manajemen Bisnis</h3>
                    <p>Program ini membekali mahasiswa dengan keterampilan pengembangan perangkat lunak, jaringan, dan sistem informasi.</p>
                    <a href="{{ route('prodi.bisnis') }}" class="prodi-link">Selengkapnya <i class="fas fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Benefits Section -->
<section class="benefits-section">
    <div class="container">
        <div class="section-heading text-center text-white">
            <h2>Mengapa Memilih Kami?</h2>
            <div class="heading-line mx-auto bg-white"></div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h4>Dosen Profesional</h4>
                    <p>Tim pengajar berkualifikasi dan berpengalaman di industri</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h4>Kerjasama Industri</h4>
                    <p>Bermitra dengan perusahaan ternama untuk magang dan penempatan kerja</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <h4>Sertifikasi</h4>
                    <p>Program sertifikasi tambahan untuk meningkatkan kualifikasi</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <i class="fas fa-laptop"></i>
                    </div>
                    <h4>Fasilitas Modern</h4>
                    <p>Laboratorium dan ruang kelas dengan teknologi terkini</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="testimonials-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Testimoni Alumni</h2>
            <div class="heading-line mx-auto"></div>
        </div>
        <div class="testimonial-carousel-sm">
            <div id="testimonialsCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <p>"Pendidikan di Politeknik STIBISNIS Tegal memberi saya fondasi yang kuat untuk karir saya. Kurikulum yang berorientasi praktis sangat relevan dengan dunia kerja, sehingga saya merasa lebih siap saat terjun ke industri. Pengalaman belajar di kampus ini tidak hanya memperkaya pengetahuan saya, tetapi juga membentuk sikap profesional dan keterampilan komunikasi yang sangat dibutuhkan di dunia kerja. Saya sangat bersyukur pernah menjadi bagian dari lingkungan akademik yang suportif dan penuh semangat ini"</p>
                                <div class="testimonial-author">
                                    <img src="{{ asset('images/cowo.jpg') }}" alt="Alumni" class="testimonial-img">
                                    <div>
                                        <h5>Budi Santoso</h5>
                                        <span>Alumni 2020 - Marketing Manager di XYZ Corporation</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <p>"Politeknik STIBISNIS Tegal telah membekali saya dengan wawasan dan pengalaman yang sangat berharga. Sejak awal, saya sudah merasa bahwa pendekatan pembelajaran di sini berbeda—lebih menekankan pada pemecahan masalah, studi kasus nyata, dan keterlibatan aktif mahasiswa dalam diskusi kelas. Selain itu, kesempatan mengikuti seminar dan pelatihan yang diselenggarakan kampus membuka banyak jaringan profesional yang bermanfaat hingga kini. Saya sangat menghargai dukungan dari para dosen dan staf yang selalu mendorong mahasiswa untuk berani berpikir kritis dan inovatif. Ilmu dan nilai-nilai yang saya dapatkan selama kuliah terus saya terapkan dalam pekerjaan sehari-hari."</p>
                                <div class="testimonial-author">
                                    <img src="{{ asset('images/cewe.jpg') }}" alt="Alumni" class="testimonial-img">
                                    <div>
                                        <h5>Siti Rahayu</h5>
                                        <span>Alumni 2021 - Software Developer di Tech Solutions</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial-item">
                            <div class="testimonial-content">
                                <p>"Menempuh pendidikan di Politeknik STIBISNIS Tegal adalah salah satu keputusan terbaik dalam hidup saya. Selama masa kuliah, saya tidak hanya dibekali ilmu yang aplikatif, tetapi juga diarahkan untuk memahami dinamika industri secara nyata melalui berbagai proyek dan kerja praktik. Para dosennya sangat berdedikasi dan terbuka dalam membimbing mahasiswa, baik secara akademik maupun dalam pengembangan soft skill. Lingkungan kampus yang kondusif juga membuat saya termotivasi untuk terus belajar dan berkembang. Berkat pembelajaran yang saya peroleh, saya dapat langsung beradaptasi di dunia kerja tanpa banyak kesulitan"</p>
                                <div class="testimonial-author">
                                    <img src="{{ asset('images/cowo.jpg') }}" alt="Alumni" class="testimonial-img">
                                    <div>
                                        <h5>Ahmad Faisal</h5>
                                        <span>Alumni 2019 - Accounting Supervisor di Financial Group</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#testimonialsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</section>

<!-- News Section -->
<section class="news-section">
    <div class="container">
        <div class="section-heading text-center">
            <h2>Berita Terbaru</h2>
            <div class="heading-line mx-auto"></div>
        </div>
        <div class="row">
            @foreach($berita as $item)
            <div class="col-lg-4 col-md-6">
                <div class="news-card">
                    <div class="news-img">
                        <img src="{{ asset($item->gambar) }}" alt="{{ $item->judul }}">
                        <div class="news-date">
                            <span class="day">{{ $item->created_at->format('d') }}</span>
                            <span class="month">{{ $item->created_at->format('M') }}</span>
                        </div>
                    </div>
                    <div class="news-content">
                        <h3><a href="{{ route('berita.show', $item->slug) }}">{{ $item->judul }}</a></h3>
                        <p>{{ $item->excerpt }}</p>
                        <a href="{{ route('berita.show', $item->slug) }}" class="news-link">Baca Selengkapnya <i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('berita.index') }}" class="btn btn-primary">Lihat Semua Berita</a>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h2>Siap Menjadi Profesional di Bidang Anda?</h2>
                <p>Daftar sekarang dan mulai perjalanan Anda menuju karir yang sukses bersama Politeknik STIBISNIS Tegal</p>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a href="{{ route('pendaftaran') }}" class="btn btn-light btn-lg">Daftar Sekarang</a>
            </div>
        </div>
    </div>
</section>
@endsection
