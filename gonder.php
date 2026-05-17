<?php
echo "<h1>Form Bilgileri Başarıyla Alındı</h1>";
echo "Ad: " . $_POST['ad'] . "<br>";
echo "E-posta: " . $_POST['email'] . "<br>";
echo "Konu: " . $_POST['konu'] . "<br>";
echo "<a href='iletisim.php'>Geri Dön</a>";
?>