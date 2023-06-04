<?php
    include("../config.php");

    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $kode = $_POST['kode'];
        $des = $_POST['deskripsi'];
        $sql = "INSERT INTO matkul (nama, kode, deskripsi) VALUE ('$nama','$kode','$des')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('Location: data_mk.php?status=sukses');
        }
        else {
            header('Location: data_mk.php?status=gagal');
        }
    }
    else {
        die("Akses Dilarang...!!!");
    }
?>