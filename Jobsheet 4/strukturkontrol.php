<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    # code...
    echo "Nilai Huruf :B";
}elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    # code...
    echo "Nilai huruf : C";
}elseif ($nilaiNumerik) {
    # code...
    echo "Nilai huruf: D";
}
echo "<BR>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    # code...
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";
echo "<hr>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan; $i++ ) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman); 
}

echo "Jumlah buah yang aka dipanen adalah: $jumlahBuah";
echo "<hr>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    # code...
    $totalSkor += $skor;
}

echo "Total skor ujian adalah: $totalSkor";
echo "<hr>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    # code...
    if ($nilai < 60) {
        # code...
        echo "Nilai: $nilai (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus) <br>";
}
echo "<hr>";


