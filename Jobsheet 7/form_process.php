<?php
    if ($_server["Request_Metod"] == "post") {
        $nama = $_POST["nama"];
        $email = $_POST ["email"];

        echo "Nama: " . $nama . "<br>";
        echo "Email: " . $email;
    }
?>