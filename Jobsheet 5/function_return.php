<?php
    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    function perkenalan($nama, $salam="Assalamualikum"){
        echo $salam.", ";
        echo "Perkenalkan, nama saya " . $nama . "<br/>";
        echo "Umur saya adalah " . hitungUmur(2005, 2024) . " Tahun";
        echo " Senang berkenalan dengan Anda <br/>";
    }

    perkenalan("Satriya");
?>