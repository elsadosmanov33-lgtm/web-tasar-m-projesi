<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Şehrim: Sumqayıt | ELSHAD OSMANOV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        /* Navbar - Tüm sayfalarla ip gibi aynı hizada */
        .navbar { background-color: #2c3e50; padding: 10px 0; }
        .navbar-brand { color: #0d6efd !important; font-size: 1.6rem; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-size: 1rem; }
        .nav-link.active { color: #0d6efd !important; font-weight: bold; border-bottom: 2px solid #0d6efd; }
        
        /* İçerik Düzeni */
        .content-box { background: #fff; padding: 45px; border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .city-title { color: #0d6efd; font-weight: 800; font-size: 2.5rem; margin-bottom: 20px; }
        .city-text { font-size: 1.1rem; line-height: 1.8; color: #444; text-align: justify; }
        .image-gallery { position: relative; }
        .main-img { width: 100%; border-radius: 20px; box-shadow: 0 15px 35px rgba(0,0,0,0.15); transition: 0.3s; }
        .sub-img-row { margin-top: 15px; }
        .sub-img { width: 100%; height: 100px; object-fit: cover; border-radius: 12px; cursor: pointer; transition: 0.3s; }
        .sub-img:hover { transform: scale(1.05); box-shadow: 0 5px 15px rgba(0,0,0,0.1); }
        
        .footer { background-color: #2c3e50; color: white; padding: 25px 0; margin-top: 60px; }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">ELSHAD OSMANOV</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link" href="index.php">Hakkımda</a></li>
                    <li class="nav-item"><a class="nav-link" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link active" href="sehir.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link" href="takim.php">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi.php">İlgi Alanları</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-3 px-4" href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="content-box">
            <div class="row g-5">
                <div class="col-lg-7">
                    <h1 class="city-title">Hazar'ın İncisi: Sumqayıt</h1>
                    <div class="city-text">
                        <p>Benim doğup büyüdüğüm yer olan <strong>Sumqayıt</strong>, Azerbaycan'ın Bakü'den sonra en büyük ve en önemli şehirlerinden biridir. Hazar Denizi'nin kıyısında yer alan bu dinamik şehir, sadece bir yerleşim yeri değil, aynı zamanda Kafkasya'nın en büyük sanayi merkezlerinden biridir. Şehrin ismine dair anlatılan en meşhur efsane; <strong>"Sum"</strong> ismindeki bir gencin nehirde kaybolması üzerine sevdiği kız olan Ceyran'ın <strong>"Sum, qayıt!" (Sum, geri dön!)</strong> diye haykırmasından gelir.</p>
                        
                        <p>II. Dünya Savaşı'ndan sonra kurulan bu şehir, modern mimarisi ve geniş parklarıyla "Gençlik Şehri" olarak bilinir. Sumqayıt Bulvarı, deniz kenarı boyunca uzanan kilometrelerce uzunluktaki yürüyüş yolları ve modern tesisleriyle şehrin en canlı noktasıdır. Sanayi kenti olmasına rağmen son yıllarda yapılan çevre yatırımları ve sahil düzenlemeleriyle tam bir turizm ve dinlenme merkezi haline gelmiştir.</p>
                        
                        <p>Temiz caddeleri, gelişmiş eğitim kurumları ve her geçen gün yenilenen altyapısıyla Sumqayıt, Azerbaycan'ın modern yüzünü temsil etmektedir. Kendi kültürüne bağlı kalarak geleceğe umutla bakan bu şehir, benim için her zaman dünyanın en özel noktası olarak kalacaktır.</p>
                    </div>
                </div>

                <div class="col-lg-5 image-gallery">
                    <div class="row">
                        <div class="col-12">
                            <img src="resim1.jpg" class="main-img mb-3" alt="Sumqayıt Sahil">
                        </div>
                    </div>
                    <div class="row sub-img-row g-2">
                        <div class="col-4">
                            <img src="resim2.jpg" class="sub-img" alt="Sumqayıt Park">
                        </div>
                        <div class="col-4">
                            <img src="resim3.jpg" class="sub-img" alt="Sumqayıt Sanayi">
                        </div>
                        <div class="col-4">
                            <img src="resim4.jpg" class="sub-img" alt="Sumqayıt Bulvar">
                        </div>
                    </div>
                    <div class="mt-4 p-3 bg-light rounded-4 text-center border">
                        <h6 class="fw-bold text-primary mb-1">Şehir İstatistikleri</h6>
                        <small class="text-muted">Kuruluş: 1949 | Nüfus: 350.000+ | Bölge: Abşeron</small>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">© 2026 ELSHAD OSMANOV - Memleketim Sumqayıt'a Sevgilerle.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>