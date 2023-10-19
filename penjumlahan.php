<html>
<body>
    <h1>Aplikasi penjumlahan menggunakan php</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="POST">
        <input type="text" name="bil1" /> + <input type="text" name="bil2" />
        <input type="submit" value="Jumlah" />
    </form>
    <?php
    if (isset($_POST['bil1'])){
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $hasil = $bil1 + $bil2;
        echo "Hasil = $hasil";
    }
    ?>
</body>
</html>