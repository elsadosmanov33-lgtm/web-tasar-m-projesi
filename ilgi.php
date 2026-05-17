<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İlgi Alanlarım - Oyunlar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
    <div class="container mt-5">
        <h2>Oyun Dünyasından Güncel Veriler</h2>
        <div class="row mt-4">
            <?php
            // PHP ile veriyi sunucudan çekiyoruz 
            $json = @file_get_contents('https://www.freetogame.com/api/games?category=shooter');
            if ($json === FALSE) {
                echo "<p>Veri çekilemedi, XAMPP sunucusu üzerinden çalıştığından emin ol.</p>";
            } else {
                $games = json_decode($json, true);
                for($i = 0; $i < 3; $i++) {
                    echo '
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="'.$games[$i]['thumbnail'].'" class="card-img-top">
                            <div class="card-body">
                                <h5>'.$games[$i]['title'].'</h5>
                                <a href="'.$games[$i]['game_url'].'" target="_blank" class="btn btn-sm btn-primary">İncele</a>
                            </div>
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </div>
</body>
</html>