<?php
// Memulai session
session_start();

// Pemeriksaan session
if (isset($_SESSION['login'])) {
    // Jika sudah login
    $username = $_SESSION['login'];
    ?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Selamat Datang</title>
        <style>
            body {
                font-family: Arial, sans-serif;
            }
            .container {
                max-width: 400px;
                margin: 0 auto;
                text-align: center;
                padding: 20px;
            }
            .selamat-datang {
                font-size: 18px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Selamat Datang, <?php echo $username; ?></h1>
            <p class="selamat-datang">Anda telah berhasil login. Halaman ini hanya bisa diakses jika Anda sudah login.</p>
            <a href="session03.php">Logout</a>
        </div>
    </body>
    </html>

    <?php
} else {
    // Session belum ada artinya belum login
    // Redirect ke halaman login
    header("Location: session01.php");
    exit(); // Pastikan untuk mengakhiri skrip setelah mengalihkan
}
?>
