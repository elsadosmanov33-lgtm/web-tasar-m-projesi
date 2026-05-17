<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Özgeçmiş | ELSHAD OSMANOV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #2c3e50; padding: 10px 0; }
        .navbar-brand { color: #0d6efd !important; font-size: 1.6rem; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-size: 1rem; }
        .nav-link.active { color: #0d6efd !important; font-weight: bold; border-bottom: 2px solid #0d6efd; }
        
        /* Özgeçmiş Kart Stilleri */
        .content-box { background: #fff; padding: 45px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .cv-section-title { color: #0d6efd; font-weight: bold; border-left: 5px solid #0d6efd; padding-left: 15px; margin-bottom: 25px; }
        .timeline-item { border-left: 2px solid #dee2e6; padding-left: 20px; position: relative; margin-bottom: 30px; }
        .timeline-item::before { 
            content: ""; position: absolute; left: -9px; top: 0; 
            width: 16px; height: 16px; border-radius: 50%; background: #0d6efd; 
        }
        .skill-badge { background-color: #eef4ff; color: #0d6efd; border: 1px solid #0d6efd; padding: 8px 15px; border-radius: 8px; display: inline-block; margin: 5px; font-weight: 500; }
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
                    <li class="nav-item"><a class="nav-link active" href="cv.php">Özgeçmiş</a></li>
                    <li class="nav-item"><a class="nav-link" href="sehir.php">Şehrim</a></li>
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
            <h2 class="cv-section-title">Eğitim Bilgileri</h2>
            
            <div class="timeline-item">
                <h4 class="fw-bold">Sakarya Üniversitesi</h4>
                <p class="text-primary fw-bold mb-1">Bilgisayar Mühendisliği (Lisans)</p>
                <p class="text-muted mb-2">2025 - Günümüz</p>
                <p>Yabancı Uyruklu Öğrenci Sınavı'nda (YÖS) dünya genelinde <strong>ilk %10'luk dilime</strong> girerek Sakarya Üniversitesi Bilgisayar Mühendisliği bölümüne yerleştim. Şu anda mühendislik temelleri ve yazılım geliştirme üzerine eğitimime devam etmekteyim.</p>
            </div>

            <div class="timeline-item">
                <h4 class="fw-bold">Lise Eğitimi</h4>
                <p class="text-primary fw-bold mb-1">Kayseri, Türkiye</p>
                <p class="text-muted mb-2">Mezuniyet: 2024</p>
                <p>Ortaokulu Azerbaycan'da tamamladıktan sonra Türkiye'ye gelerek lise eğitimimi Kayseri'de sürdürdüm. Bu süreçte hem akademik alanda kendimi geliştirdim hem de Türkiye'deki eğitim sistemine hızlıca adapte oldum.</p>
            </div>

            <div class="timeline-item">
                <h4 class="fw-bold">Ortaokul Eğitimi</h4>
                <p class="text-primary fw-bold mb-1">Azerbaycan</p>
                <p class="text-muted mb-2">Eğitim Süreci: 9. Sınıfa Kadar</p>
                <p>Eğitim hayatımın temelini Azerbaycan'da attım. 9. sınıfa kadar olan süreci başarıyla tamamladıktan sonra eğitim kariyerimi uluslararası düzeye taşımak amacıyla Türkiye'ye geçiş yaptım.</p>
            </div>

            <h2 class="cv-section-title mt-5">Teknik Yetenekler & Beceriler</h2>
            <div class="row">
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3">Yazılım ve Programlama</h5>
                    <p><strong>PHP & HTML5 & CSS3:</strong> Modern, dinamik ve kullanıcı dostu web arayüzleri geliştiriyorum. Backend tarafında veri yönetimi ve form kontrolleri üzerine çalışmalar yapıyorum.</p>
                    <p><strong>C++:</strong> Programlama mantığını ve algoritmik düşünme becerilerimi C++ dili üzerinden geliştirerek karmaşık problemleri çözme yeteneği kazandım.</p>
                </div>
                <div class="col-md-6">
                    <h5 class="fw-bold mb-3">Dijital Medya ve İçerik</h5>
                    <p><strong>Video Edit (Premiere Pro):</strong> Profesyonel video kurgu teknikleri kullanarak YouTube ve TikTok platformları için yüksek kaliteli, ilgi çekici görsel içerikler hazırlıyorum.</p>
                    <p><strong>Dijital İçerik Üretimi:</strong> "OxeL" markasıyla sosyal medya platformlarında topluluk yönetimi, marka bilinirliği ve stratejik içerik planlaması konularında deneyim sahibiyim.</p>
                </div>
            </div>

            <div class="mt-3">
                <span class="skill-badge">PHP</span>
                <span class="skill-badge">C++</span>
                <span class="skill-badge">HTML5 & CSS3</span>
                <span class="skill-badge">Bootstrap 5</span>
                <span class="skill-badge">Premiere Pro</span>
                <span class="skill-badge">Dijital İçerik Üretimi</span>
                <span class="skill-badge">Topluluk Yönetimi</span>
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