<?php
    $loremlpsum = "Lorem ipsum dolor sit amet consectetur adipisicing elit.
    voluptatem reprehenderit nobis veritatis comodi fugiat molestias
    impedit unde ipsum voluptatum, corrupti minus sit excepturi nostrum
    quisquam? Quos impedit eum nulla optio.";

    echo "<p> {$loremlpsum} </p>";
    echo "Panjang Karekter: " . strlen($loremlpsum) . "<br>";
    echo "Panjang kata: " . str_word_count($loremlpsum) . "<br>";
    echo "<p>" . strtoupper($loremlpsum) . "</p>";
    echo "<p>" . strtolower($loremlpsum) . "</p>";

?>