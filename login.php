<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Yap | ELSHAD OSMANOV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #2c3e50; padding: 10px 0; }
        .navbar-brand { color: #0d6efd !important; font-size: 1.6rem; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-size: 1rem; }
        
        /* Giriş Kartı Tasarımı */
        .content-box { 
            background: #fff; 
            padding: 45px; 
            border-radius: 25px; 
            box-shadow: 0 10px 30px rgba(0,0,0,0.05); 
            margin-top: 80px;
            border-top: 5px solid #0d6efd; /* Diğer sayfalardaki mavi vurgu */
        }
        .section-title { color: #2c3e50; font-weight: 800; font-size: 2.2rem; margin-bottom: 20px; }
        
        /* Form Elemanları */
        .form-control { border-radius: 10px; padding: 12px; border: 1px solid #dee2e6; margin-bottom: 15px; }
        .form-control:focus { border-color: #0d6efd; box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.1); }
        .btn-login { background-color: #0d6efd; border: none; padding: 12px; border-radius: 10px; font-weight: bold; font-size: 1.1rem; transition: 0.3s; color: white; }
        .btn-login:hover { background-color: #0b5ed7; transform: translateY(-2px); box-shadow: 0 5px 15px rgba(13, 110, 253, 0.3); }
        
        .footer { background-color: #2c3e50; color: white; padding: 25px 0; position: fixed; bottom: 0; width: 100%; }
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
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-3 px-4 active fw-bold" href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-lg-4">
                <div class="content-box text-center">
                    <h2 class="section-title">Giriş</h2>
                    <p class="text-muted mb-4">Yönetici paneline erişmek için lütfen bilgilerinizi giriniz.</p>
                    
                    <form action="login_kontrol.php" method="POST">
                        <div class="mb-3 text-start">
                            <label class="form-label fw-bold small text-secondary">Kullanıcı Adı / E-posta</label>
                            <input type="text" name="username" class="form-control" placeholder="Örn: b221210000" required>
                        </div>
                        <div class="mb-4 text-start">
                            <label class="form-label fw-bold small text-secondary">Şifre</label>
                            <input type="password" name="password" class="form-control" placeholder="********" required>
                        </div>
                        <button type="submit" class="btn btn-login w-100 shadow-sm">Giriş Yap</button>
                    </form>
                    
                    <div class="mt-4">
                        <small><a href="index.php" class="text-decoration-none text-muted">← Ana Sayfaya Dön</a></small>
                    </div>
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