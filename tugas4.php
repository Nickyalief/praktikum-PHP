<!DOCTYPE html>
<html>
<head>
    <title>Daftar Harga Shampo</title>
</head>
<body>
    <table border="1">
        <tr>
        
            <th>Jumlah Shampo</th>
            <th>Harga</th>
        </tr>
        <?php
        $hargaPerBotol = 7500;
        $totalShampo = 5; // Ubah sesuai dengan jumlah shampo yang ingin ditampilkan
        
        for ($i = 1; $i <= $totalShampo; $i++) {
            $jumlah = $i;
            $hargaTotal = $hargaPerBotol * $jumlah;
            echo "<tr>";
            echo "<td>$jumlah</td>";
            echo "<td>Rp. " . number_format($hargaTotal, 0, ',', '.') . "</td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
