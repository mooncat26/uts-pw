<?php
    include("../config.php");

    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $nidn = $_POST['nidn'];
        $jp = $_POST['jenjang'];

        $sql = "INSERT INTO dosen (nama, nidn, jenjang) VALUE ('$nama','$nidn','$jp')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('Location: data_ds.php?status=sukses');
        }
        else {
            header('Location: data_ds.php?status=gagal');
        }
    }
    else {
        die("Akses Dilarang...!!!");
    }
?>