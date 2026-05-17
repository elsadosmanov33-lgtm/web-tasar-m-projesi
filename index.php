<?php
/*
 * PROJE: Kişisel Web Sitesi ve Birim Dönüştürücü
 * ÖĞRENCİ: Elshad Osmanov
 * CANLI SİTE ADRESİ: http://elshadosmanov.gt.tc
 * NOT: Bu proje tarafımdan canlı sunucuya yüklenmiştir. 
 * Çalışan halini yukarıdaki linkten inceleyebilirsiniz.
 */
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hakkımda | ELSHAD OSMANOV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        
        .navbar { background-color: #2c3e50; padding: 10px 0; }
        .navbar-brand { color: #0d6efd !important; font-size: 1.6rem; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-size: 1rem; margin: 0 8px; transition: 0.3s; }
        .nav-link.active { color: #0d6efd !important; font-weight: bold; border-bottom: 2px solid #0d6efd; }
        
        /* Ana İçerik Kutusu */
        .content-box { background: #fff; padding: 45px; border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .profile-img { width: 250px; height: 250px; border-radius: 50%; object-fit: cover; border: 5px solid #fff; box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        
        /* Alt Kartlar ve Emojiler */
        .info-card { 
            background: #fff; 
            padding: 30px; 
            border-radius: 20px; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.05); 
            transition: 0.3s; 
            height: 100%;
            border-top: 4px solid #0d6efd;
        }
        .info-card:hover { transform: translateY(-10px); }
        .icon-box { font-size: 2.5rem; margin-bottom: 15px; display: block; }
        
        /* Butonlar */
        .social-btn { padding: 12px 25px; border-radius: 12px; font-weight: 600; transition: 0.3s; color: white !important; text-decoration: none; display: inline-block; }
        .yt-btn { background: #ff0000; }
        .tt-btn { background: #000; }
        
        .footer { background-color: #2c3e50; color: white; padding: 25px 0; margin-top: 60px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">ELSHAD OSMANOV</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehir.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takim.php">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi.php">İlgi Alanları</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-3 px-4 text-white fw-bold" href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="content-box mb-5">
            <div class="row align-items-center">
                <div class="col-lg-4 text-center mb-4 mb-lg-0">
                    <img src="elshad.jpg" class="profile-img" alt="Elshad Osmanov">
                </div>
                <div class="col-lg-8">
                    <h1 class="fw-bold mb-3" style="color: #2c3e50;">Merhaba, Ben Elshad</h1>
                    <p class="text-muted fs-5 mb-4">
                        Sakarya Üniversitesi Bilgisayar Mühendisliği öğrencisiyim. Aslen Azerbaycanlıyım ve memleketim Sumqayıt'ı çok seviyorum. 
                        Şu anda hem akademik kariyerime devam ediyor hem de dijital dünyada içerik üreterek kendimi geliştiriyorum.
                    </p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="https://www.youtube.com/@yt_oxel" target="_blank" class="social-btn yt-btn">
                             YouTube (OxeL)
                        </a>
                        <a href="https://www.tiktok.com/@tt_oxel" target="_blank" class="social-btn tt-btn">
                             TikTok (OxeL)
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row g-4 text-center">
            <div class="col-md-4">
                <div class="info-card">
                    <span class="icon-box">🎓</span>
                    <h4 class="fw-bold">Eğitim</h4>
                    <p class="text-muted">SAU Bilgisayar Mühendisliği öğrencisi olarak mühendislik temellerini ve geleceğin teknolojilerini öğreniyorum.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <span class="icon-box">💻</span>
                    <h4 class="fw-bold">Yazılım</h4>
                    <p class="text-muted">PHP, C++ ve modern web dilleri üzerinde projeler geliştiriyor, algoritma yeteneklerimi artırıyorum.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <span class="icon-box">📱</span>
                    <h4 class="fw-bold">Dijital Marka</h4>
                    <p class="text-muted">OxeL markasıyla YouTube'da 11.000, TikTok'ta 3.500 takipçime kaliteli ve özgün içerikler sunuyorum.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">© 2026 ELSHAD OSMANOV - Tüm Hakları Saklıdır.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>