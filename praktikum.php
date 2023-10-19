<?php
//praktikum 1
// function myCompanyMotto()
// {
// echo "Sabar adalah bagian dari keimanan";
// }
// myCompanyMotto();

//praktikum 2
// function UcapanSalam($nama)
// {
// echo "Hallo ". $nama . "!<br>";
// }
// UcapanSalam("Agus");
// UcapanSalam("Ahmad");
// UcapanSalam("Budi");
// UcapanSalam("Fauzan");

//praktikum 3
// function UcapanSalam($kepada, $dari)
// {
// echo $dari . " mengucapkan salam kepada ". $kepada . "<br>";
// }
// UcapanSalam("Ari", "Amalia");
// UcapanSalam("Amalia", "Nada");
// UcapanSalam("Nada", "Faza");
// UcapanSalam("Fauzan", "Ari");

//praktikum 4
function Jumlahkan($x, $y){
$hasil = $x + $y;
return $hasil;
}
$bil = 0;
echo "Nilai bil mula-mula adalah ". $bil ."<br>";
$bil = Jumlahkan(3, 4);
echo "Nilai bil setelah memanggil function adalah " . $bil ."<br>";
?>