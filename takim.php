<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Takımım: Sumqayıt FK | ELSHAD OSMANOV</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f4f7f6; font-family: 'Segoe UI', sans-serif; }
        .navbar { background-color: #2c3e50; padding: 10px 0; }
        .navbar-brand { color: #0d6efd !important; font-size: 1.6rem; }
        .nav-link { color: rgba(255,255,255,0.8) !important; font-size: 1rem; }
        .nav-link.active { color: #0d6efd !important; font-weight: bold; border-bottom: 2px solid #0d6efd; }
        
        /* İçerik Kartı */
        .content-box { background: #fff; padding: 45px; border-radius: 25px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); }
        .team-title { color: #0d6efd; font-weight: 800; font-size: 2.5rem; margin-bottom: 20px; }
        .team-text { font-size: 1.1rem; line-height: 1.8; color: #444; text-align: justify; }
        
        /* Logo ve Bilgi Kartı Düzeni */
        .logo-container { text-align: center; }
        .team-logo { max-width: 100%; height: auto; border-radius: 20px; transition: 0.3s; padding: 20px; }
        .team-info-card { background: #f8f9fa; border-radius: 15px; border: 1px solid #eee; padding: 20px; margin-top: 20px; }
        .info-label { font-weight: bold; color: #2c3e50; }
        
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
                    <li class="nav-item"><a class="nav-link" href="sehir.php">Şehrim</a></li>
                    <li class="nav-item"><a class="nav-link active" href="takim.php">Takımımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="ilgi.php">İlgi Alanları</a></li>
                    <li class="nav-item"><a class="nav-link" href="iletisim.php">İletişim</a></li>
                    <li class="nav-item"><a class="btn btn-primary ms-lg-3 px-4" href="login.php">Giriş Yap</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container my-5">
        <div class="content-box">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <h1 class="team-title">Sumqayıt Futbol Klubu</h1>
                    <div class="team-text">
                        <p>Memleketimin gururu olan <strong>Sumqayıt FK</strong>, 2010 yılında kurulmuş olmasına rağmen kısa sürede Azerbaycan futbolunun en dikkat çeken ekiplerinden biri haline gelmiştir. "Kimyaçılar" lakabıyla bilinen takımımız, Azerbaycan Premier Ligi'nde şehrimizi en üst seviyede başarıyla temsil etmektedir. Takımımızın renkleri olan mavi ve beyaz, şehrimizin deniziyle olan bağını ve berraklığını simgeler.</p>
                        
                        <p>Sumqayıt FK, sadece bir futbol takımı değil, aynı zamanda Azerbaycan futboluna kazandırdığı genç yeteneklerle bilinen büyük bir akademidir. Kendi evindeki maçlarını modern <strong>Mehdi Hüseynzade Stadyumu</strong>'nda oynayan ekibimiz, ateşli taraftar grubuyla her zaman sahada büyük bir direnç gösterir. Takımımız, Avrupa kupalarına katılma başarısı göstererek şehrimizin adını uluslararası arenada da duyurmuştur.</p>
                        
                        <p>Benim için Sumqayıt FK'yı desteklemek, sadece bir spor tercihi değil, doğup büyüdüğüm topraklara olan bağlılığımın bir göstergesidir. Her zaman gençlere şans veren ve dinamik yapısıyla ön plana çıkan kulübümüzün, gelecekte çok daha büyük başarılara imza atacağına olan inancım tamdır.</p>
                    </div>
                </div>

                <div class="col-lg-5 logo-container">
                    <div class="p-3 bg-white border rounded-4 shadow-sm">
                        <img src="sumgait_logo.png" class="team-logo" alt="Sumqayıt FK Logo">
                    </div>
                    
                    <div class="team-info-card text-start">
                        <h5 class="fw-bold text-center mb-3">Kulüp Künyesi</h5>
                        <div class="mb-2"><span class="info-label">Kuruluş Yılı:</span> 2010</div>
                        <div class="mb-2"><span class="info-label">Renkler:</span> Mavi - Beyaz</div>
                        <div class="mb-2"><span class="info-label">Stadyum:</span> Mehdi Hüseynzade Stadyumu</div>
                        <div class="mb-2"><span class="info-label">Lakabı:</span> Kimyaçılar</div>
                        <div class="mb-0"><span class="info-label">Lig:</span> Azerbaycan Premier Ligi</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="footer text-center">
        <div class="container">
            <p class="mb-0">© 2026 ELSHAD OSMANOV - Daima Sumqayıt FK!</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>