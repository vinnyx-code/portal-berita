<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Berita</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --dark-color: #34495e;
            --light-color: #ecf0f1;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        
        .navbar-brand {
            font-weight: 700;
            font-size: 1.8rem;
        }
        
        .navbar {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        
        .nav-link {
            font-weight: 500;
            padding: 0.5rem 1rem !important;
        }
        
        .hero-section {
            background-color: var(--dark-color);
            color: white;
            padding: 4rem 0;
            margin-bottom: 2rem;
            background-image: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('https://placehold.co/1920x1080');
            background-size: cover;
            background-position: center;
        }
        
        .hero-title {
            font-size: 2.5rem;
            font-weight: 700;
        }
        
        .hero-subtitle {
            font-size: 1.2rem;
            margin-bottom: 2rem;
        }
        
        .news-card {
            transition: transform 0.3s ease;
            margin-bottom: 20px;
            height: 100%;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
            border-radius: 8px;
            overflow: hidden;
        }
        
        .news-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 15px rgba(0,0,0,0.1);
        }
        
        .card-img-top {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-bottom: 1px solid rgba(0,0,0,0.1);
        }
        
        .category-badge {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: var(--secondary-color);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            font-weight: 600;
        }
        
        .news-title {
            font-weight: 700;
            font-size: 1.2rem;
            margin-bottom: 0.5rem;
            color: var(--dark-color);
        }
        
        .news-meta {
            font-size: 0.9rem;
            color: #7f8c8d;
            margin-bottom: 0.5rem;
        }
        
        .news-excerpt {
            font-size: 0.95rem;
            color: #555;
            margin-bottom: 1rem;
        }
        
        .popular-posts {
            background-color: white;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.05);
            margin-bottom: 30px;
        }
        
        .sidebar-title {
            font-weight: 700;
            font-size: 1.2rem;
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .trending-post {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid #eee;
        }
        
        .trending-post:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .trending-post h6 {
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .trending-post p {
            font-size: 0.8rem;
            color: #7f8c8d;
            margin-bottom: 0;
        }
        
        .categories-list {
            list-style: none;
            padding-left: 0;
        }
        
        .categories-list li {
            margin-bottom: 10px;
        }
        
        .categories-list a {
            color: #555;
            text-decoration: none;
            transition: color 0.3s ease;
            display: block;
            padding: 8px 10px;
            background-color: #f8f9fa;
            border-radius: 4px;
        }
        
        .categories-list a:hover {
            color: var(--secondary-color);
            background-color: #e9ecef;
        }
        
        .categories-list i {
            margin-right: 8px;
            color: var(--secondary-color);
        }
        
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 3rem 0;
            margin-top: 3rem;
        }
        
        .footer-title {
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .footer-links {
            list-style: none;
            padding-left: 0;
        }
        
        .footer-links li {
            margin-bottom: 0.8rem;
        }
        
        .footer-links a {
            color: var(--light-color);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer-links a:hover {
            color: var(--secondary-color);
        }
        
        .social-icons a {
            display: inline-block;
            width: 40px;
            height: 40px;
            background-color: rgba(255,255,255,0.1);
            color: white;
            border-radius: 50%;
            text-align: center;
            line-height: 40px;
            margin-right: 10px;
            transition: all 0.3s ease;
        }
        
        .social-icons a:hover {
            background-color: var(--secondary-color);
            transform: translateY(-3px);
        }
        
        .copyright {
            background-color: rgba(0,0,0,0.1);
            padding: 1rem 0;
            font-size: 0.9rem;
            text-align: center;
        }
        
        .search-box {
            position: relative;
            margin-bottom: 20px;
        }
        
        .search-box input {
            padding-right: 40px;
            border-radius: 20px;
        }
        
        .search-box button {
            position: absolute;
            right: 5px;
            top: 5px;
            background: var(--secondary-color);
            border: none;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            padding: 0;
        }
        
        @media (max-width: 767.98px) {
            .hero-title {
                font-size: 2rem;
            }
            
            .hero-subtitle {
                font-size: 1rem;
            }
            
            .navbar-brand {
                font-size: 1.4rem;
            }
        }
        
        /* Animation */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-fade {
            animation: fadeIn 0.5s ease forwards;
        }
        
        .delay-1 { animation-delay: 0.2s; }
        .delay-2 { animation-delay: 0.4s; }
        .delay-3 { animation-delay: 0.6s; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#">PortalBerita</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Politik</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ekonomi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Teknologi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Hiburan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olahraga</a>
                    </li>
                </ul>
                <form class="d-flex ms-lg-3 mt-3 mt-lg-0">
                    <input class="form-control me-2" type="search" placeholder="Cari berita..." aria-label="Search">
                    <button class="btn btn-outline-light" type="submit">Cari</button>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="hero-title animate-fade">Portal Berita Terkini dan Terpercaya</h1>
            <p class="hero-subtitle animate-fade delay-1">Dapatkan informasi terupdate seputar politik, ekonomi, teknologi dan hiburan</p>
            <button class="btn btn-primary btn-lg animate-fade delay-2">Jelajahi Berita</button>
        </div>
    </section>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <!-- Main Articles -->
            <div class="col-lg-8">
                <h3 class="mb-4">Berita Terbaru</h3>
                
                
                   @yield('content')
                
            </div>
            
            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Box -->
                <div class="search-box">
                    <input type="text" class="form-control" placeholder="Cari berita...">
                    <button type="submit" class="btn btn-sm"><i class="fas fa-search"></i></button>
                </div>
                
                <!-- Last News -->
                <div class="popular-posts">
                    <h5 class="sidebar-title">Berita Terbaru</h5>
                    
                    <div class="trending-post">
                        <h6><a href="#" class="text-decoration-none">Pengumuman Reshuffle Kabinet Minggu Depan</a></h6>
                        <p><i class="far fa-eye"></i> 15.2k views</p>
                    </div>
                    
                    <div class="trending-post">
                        <h6><a href="#" class="text-decoration-none">Harga Emas Antam Turun Rp 5.000 per Gram</a></h6>
                        <p><i class="far fa-eye"></i> 12.8k views</p>
                    </div>
                    
                    <div class="trending-post">
                        <h6><a href="#" class="text-decoration-none">Spesifikasi dan Harga HP Vivo V29 Pro</a></h6>
                        <p><i class="far fa-eye"></i> 10.5k views</p>
                    </div>
                    
                    <div class="trending-post">
                        <h6><a href="#" class="text-decoration-none">Hasil Lengkap Pertandingan Liga Inggris Malam Ini</a></h6>
                        <p><i class="far fa-eye"></i> 9.3k views</p>
                    </div>
                </div>
                
                <!-- Categories -->
                <div class="popular-posts">
                    <h5 class="sidebar-title">Kategori Berita</h5>
                    
                    <ul class="categories-list">
                         @php
                            $kategoriList = \App\Models\Kategori::all();
                        @endphp
                        @foreach ($kategoriList as $kat)
                            <li><a href="{{ route('web.kategori', $kat->id) }}">{{ $kat->nama }}</a></li>
                        @endforeach
                        
                    </ul>
                </div>
                
              
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-md-0">
                    <h5 class="footer-title">Tentang Kami</h5>
                    <p>PortalBerita adalah platform berita online yang menyajikan informasi terkini dan terpercaya seputar politik, ekonomi, teknologi, hiburan dan olahraga.</p>
                    <div class="social-icons mt-4">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="footer-title">Kategori</h5>
                    <ul class="footer-links">
                        <li><a href="#">Politik</a></li>
                        <li><a href="#">Ekonomi</a></li>
                        <li><a href="#">Teknologi</a></li>
                        <li><a href="#">Hiburan</a></li>
                        <li><a href="#">Olahraga</a></li>
                    </ul>
                </div>
                <div class="col-md-2 mb-4 mb-md-0">
                    <h5 class="footer-title">Perusahaan</h5>
                    <ul class="footer-links">
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Tim Redaksi</a></li>
                        <li><a href="#">Kontak</a></li>
                        <li><a href="#">Karir</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h5 class="footer-title">Kontak Kami</h5>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Sudirman No. 100, Jakarta Selatan</p>
                    <p><i class="fas fa-phone me-2"></i> (021) 12345678</p>
                    <p><i class="fas fa-envelope me-2"></i> info@portalberita.com</p>
                    <div class="mt-4">
                        <img src="https://placehold.co/120x40" alt="Google Play download badge" class="me-2 mb-2">
                        <img src="https://placehold.co/120x40" alt="App Store download badge">
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p class="mb-0">© 2023 PortalBerita. Hak Cipta Dilindungi.</p>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    
    
</body>
</html>
