<?php
$nilaiSiswa = [85,92,78,64,90,75,88,79,70,96];
$nilaiLulus = [];

foreach ($nilaiSiswa as $nilai) {
    # code...
    if ($nilai >= 70) {
        # code...
        $nilaiLulus[] = $nilai;
    }
}

echo "Daftar nilai siswa yang lulus: " . implode(',', $nilaiLulus);
echo "<hr>";

$daftarKaryawan = [
    ['Alice', 7],
    ['Bob', 3],
    ['Charlie', 9],
    ['David', 5],
    ['Eva', 6],
];

$karyawanPengalamanLimaTahun = [];

foreach ($daftarKaryawan as $karyawan) {
    # code...
    if ($karyawan[1] > 5) {
        # code...
        $karyawanPengalamanLimaTahun[] = $karyawan [0];
    }
}

echo "Daftar karyawan dengan pengalam kerja lebih dari 5 tahun: " . implode(', ', $karyawanPengalamanLimaTahun);
echo "<hr>";

$daftarNilai = [
    'Matematika' => [
        ['Alice', 85],
        ['Bob', 92],
        ['Charile', 78],
    ],
    'Fisika' => [
        ['Alice', 90],
        ['Bob', 88],
        ['Charlie', 75],
    ],
    'Kimia' => [
        ['Alice', 92],
        ['Bob', 80],
        ['Charlie', 85],
    ],
];

$mataKuliah = 'Fisika';

echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah: <br>";

foreach($daftarNilai[$mataKuliah] as $nilai) {
    echo "Nama : {$nilai[0]}, Nilai; {$nilai[1]} <br>";
}
echo "<hr>";