<?php 
$a =  10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil tambah a + b = $hasilTambah <br>";
echo "Hasil Kurang a - b = $hasilKurang <br>";
echo "Hasil kali a * b = $hasilKali<br>";
echo "Hasil Bagi a / b = $hasilBagi<br>";
echo "Hasil Sisa Bagi a % b = $sisaBagi<br>";
echo "Hasil pangkat a ** b = $pangkat<br>";
echo "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil And a && b = $hasilAnd <br>";
echo "Hasil Or a || b = $hasilOr <br>";
echo "Hasil Not A !a = $hasilNotA <br>";
echo "Hasil Not B !b = $hasilNotB <br>";
echo "<br>";

$b += $a;
echo "Penambahan : " . $b . "<br>";
$b -= $a;
echo "Pengurangan : " . $b. "<br>";
$b *= $a;
echo "Perkalian : " . $b . "<br>";
$b /= $a;
echo "Pembagian : " . $b .  "<br>";
$b %= $a;
echo "Sisa Bagi : " . $b . "<br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil Identik a === b = $hasilIdentik <br>";
echo "Hasil Tidak Identik a !== b = $hasilTidakIdentik <br>";