<?php
if (isset($_FILES['file'])) {
    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $errors = array();
        $max_file_count = 10;
        $file_name = $_FILES['file']['name'][$key];
        $file_size = $_FILES['file']['size'][$key];
        $file_tmp = $_FILES['file']['tmp_name'][$key];
        $file_type = $_FILES['file']['type'][$key];
        $file_ext = strtolower(end(explode('.', $_FILES['file']['name'])));
    }

    $extensions = array("jpg", "jpeg", "png", "pdf", "doc", "docx");

    if (!in_array($file_ext, $extensions)) {
        $errors[] = "Ekstensi file yang diizinkan adalah JPG, JPEG, PNG, GIF, PDF, DOC, atau DOCX.";
    }

    if (count($_FILES['files']['tmp_name']) > $max_file_count) {
        echo "Jumlah file melebihi batas";
    }

    // if ($file_size > 2097152) {
    //     $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    // }

    if (empty($errors) === true) {
        move_uploaded_file($file_tmp, "documents/" . $file_name);
        echo "File berhasil diunggah.";
    } else {
        echo implode("", $errors);
    }
}
?>