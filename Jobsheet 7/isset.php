<?php
    $data = array("nama" => "Jane", "usia" => 25);
    if(isset($data["nama"])){
        echo "Anda sudah dewasa";
    } else {
        echo " Anda belum dewasa atau variabel 'umur' tidak ditemukan..";
    }
?>