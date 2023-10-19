<?php
//ini variabel
$a = 10;
$b = 5;
$c = 15;

//operator perbandingan
$soal1 = ($a==$b);
$soal2 = ($a!=$b);
$soal3 = ($c<$b);
$soal4 = ($c>$b);
$soal5 = ($a<=$c);
$soal6 = ($a>=$c);

//tampilkan hasil
echo "$a == $b bernilai ".$soal1."<br>"; 
echo "$a != $b bernilai ".$soal2."<br>"; 
echo "$c < $b bernilai ".$soal3."<br>"; 
echo "$c > $b bernilai ".$soal4."<br>"; 
echo "$a <= $c bernilai ".$soal5."<br>"; 
echo "$a >= $c bernilai ".$soal6."<br>"; 
?>