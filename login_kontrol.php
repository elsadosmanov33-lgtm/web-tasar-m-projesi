<?php
// Oturumu başlatıyoruz
session_start();

// Formdan gelen verileri alıyoruz
$kullanici_adi = isset($_POST['username']) ? $_POST['username'] : '';
$sifre = isset($_POST['password']) ? $_POST['password'] : '';

// Örnek: Kullanıcı adın öğrenci numaran, şifren de istediğin bir şey olabilir.
$dogru_kullanici = "b251210570@sakarya.edu.tr"; 
$dogru_sifre = "123456"; 
// ------------------------------------------------

// Boş alan kontrolü
if (empty($kullanici_adi) || empty($sifre)) {
    echo "<script>alert('Lütfen tüm alanları doldurun!'); window.location.href='login.php';</script>";
    exit;
}

// Bilgileri kontrol ediyoruz
if ($kullanici_adi == $dogru_kullanici && $sifre == $dogru_sifre) {
    // Bilgiler doğruysa oturum değişkenlerini tanımlıyoruz
    $_SESSION['login'] = true;
    $_SESSION['user'] = $kullanici_adi;

    // Giriş başarılı mesajı verip ana sayfaya yönlendiriyoruz
    echo "<script>alert('Giriş Başarılı! Hoş geldiniz'); window.location.href='index.php';</script>";
} else {
    // Bilgiler yanlışsa uyarı verip tekrar giriş sayfasına döndürüyoruz
    echo "<script>alert('Hatalı Kullanıcı Adı veya Şifre!'); window.location.href='login.php';</script>";
}
?>