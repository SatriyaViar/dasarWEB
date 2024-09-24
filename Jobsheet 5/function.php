<?php
    function perkenalan($nama, $salam){
        echo $salam.", ";
        echo "Perkenalkan, nama saya " . $nama . "<br/>";
        echo "Senang berkenalan dengan Anda <br/>";
    }

    //Memanggil Fungsi yang sudah dibuat
    perkenalan("Satriya", "Hallo");

    echo "<hr>";

    $saya = "Satriya";
    $ucapanSalam = "Selamat Pagi";
    
    perkenalan($saya);
?>