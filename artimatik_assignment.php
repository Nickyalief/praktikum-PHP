<?php
//variabel sebelum diberi operasi gabungan aritmatika dan assignment
$a = 10; 
$b = 20; 
$c = 30; 
$d = 40; 
$e = 50; 

//tampilan nilai variabel sebelum operasi
echo "<b>sebelum dilakukan operasi</b><br>";
echo "\$a = $a<br/>";
echo "\$b = $b<br/>";
echo "\$c = $c<br/>";
echo "\$d = $d<br/>";
echo "\$e = $e<br/><br/>";

//ini baris opersasi gabungan aritmatika dan assignment
$a += 4; 
$b -= 5; 
$c *= 2; 
$d /= 2; 
$e %= 3; 

//menampilkan hasil 
echo "<b>setelah dilakukan operasi</b><br>";
echo "\$a += 4 bernilai ".$a."<br/>";  
echo "\$b -= 5 bernilai ".$b."<br/>";  
echo "\$c *= 2 bernilai ".$c."<br/>";  
echo "\$d /= 2 bernilai ".$d."<br/>";  
echo "\$e %= 3 bernilai ".$e."<br/>";   
?>
