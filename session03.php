<?php
/**************************************************************************
***
Nama File : session03.php
Halaman ini merupakan halaman logout, dimana kita menghapus session yang ada.
***************************************************************************
***/

// Memulai session
session_start();

// Pemeriksaan session
if (isset($_SESSION['login'])) {
    // Menghapus semua data session
    session_unset();
    // Menghancurkan session
    session_destroy();
    $message = "Terimakasih, Anda sudah berhasil logout.";
} else {
    // Jika session tidak ada, mungkin pengguna belum login
    $message = "Anda belum login, tidak ada sesi untuk dihapus.";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
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
        .message {
            font-size: 18px;
        }
    </style>
</head>
<body>
    <div class="container">
        <p class="message"><?php echo $message; ?></p>
        <a href="session01.php">Login</a>
    </div>
</body>
</html>
