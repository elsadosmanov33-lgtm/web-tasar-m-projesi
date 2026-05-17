<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İletişim | ELSHAD OSMANOV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #2c3e50; padding: 10px 0; }
        .navbar-brand { color: #0d6efd !important; font-size: 1.6rem; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-size: 1rem; }
        .nav-link.active { color: #0d6efd !important; font-weight: bold; border-bottom: 2px solid #0d6efd; }
        
        /* İçerik Kutusu Tasarımı */
        .content-box { background: #fff; padding: 45px; border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .section-title { color: #0d6efd; font-weight: 800; font-size: 2.5rem; margin-bottom: 20px; }
        
        /* Form Elemanları Stili */
        .form-control { border-radius: 10px; padding: 12px; border: 1px solid #dee2e6; margin-bottom: 15px; }
        .form-control:focus { border-color: #0d6efd; box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.1); }
        .btn-submit { background-color: #0d6efd; border: none; padding: 12px 30px; border-radius: 10px; font-weight: bold; transition: 0.3s; }
        .btn-submit:hover { background-color: #0b5ed7; transform: translateY(-2px); }
        
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
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehir.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takim.php">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi.php">İlgi Alanları</a></li>
                    <li class="nav-item"><a class="nav-link active" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-3 px-4" href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="content-box">
                    <h1 class="section-title text-center">İletişim</h1>
                    <p class="text-center text-muted mb-5 fs-5">Her türlü soru, öneri veya iş birliği için aşağıdaki formu kullanarak bana ulaşabilirsiniz.</p>
                    
                    <form action="gonder.php" method="POST">
                        <div class="row">
                            <div class="col-md-6">
                                <label class="form-label fw-bold">Adınız Soyadınız</label>
                                <input type="text" name="ad_soyad" class="form-control" placeholder="Örn: Elshad Osmanov" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label fw-bold">E-posta Adresiniz</label>
                                <input type="email" name="email" class="form-control" placeholder="Örn: mail@adresiniz.com" required>
                            </div>
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label fw-bold">Konu</label>
                            <input type="text" name="konu" class="form-control" placeholder="Mesajınızın konusu nedir?" required>
                        </div>
                        
                        <div class="mb-4">
                            <label class="form-label fw-bold">Mesajınız</label>
                            <textarea name="mesaj" class="form-control" rows="6" placeholder="Mesajınızı buraya detaylıca yazabilirsiniz..." required></textarea>
                        </div>
                        
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-submit px-5 text-white shadow-sm">Mesajı Gönder</button>
                        </div>
                    </form>
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