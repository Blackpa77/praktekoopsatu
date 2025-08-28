<?php
// index.php
$nama = " Atmin Mie ayam";
$waktu = date("Y-m-d H:i:s");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Website PHP di Hugging Face</title>
    <style>
        body { font-family: Arial, sans-serif; text-align: center; margin-top: 50px; }
        .container { max-width: 600px; margin: 0 auto; }
        .box { background: #f0f8ff; padding: 20px; border-radius: 10px; margin-top: 20px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>WELCOME TO MIE AYAM WEBSITE</h1>
        <p>Semoga dengan adanya wesbite ini para mie ayam diseluruh dunia kesejahteraannya meningkat dan menjadi lebih baiik <strong><?= htmlspecialchars($nama) ?></strong></p>
        <div class="box">
            <p>Waktu server: <code><?= $waktu ?></code></p>
            <p>Dijalankan di <strong>Docker</strong> di Hugging Face Spaces ✅</p>
            
        </div>
         <h3>Video motivasi oleh presiden republik indonesia ke 7</h3>
        <video width="640" height="360" controls autoplay muted loop>
            <source src="Selamat Berjuang! Sukses. Pak Jokowi - Harjunakalex (240p, h264).mp4" type="mp4">
            Browser Anda tidak mendukung tag video.
        </video>

    </div>
</body>
</html>
