<?php
    include("../config.php");

    if (isset($_POST['daftar'])) {
        $nama = $_POST['nama'];
        $nim = $_POST['nim'];
        $ps = $_POST['program_studi'];
        $sql = "INSERT INTO mahasiswa (nama, nim, program_studi) VALUE ('$nama','$nim','$ps')";
        $query = mysqli_query($connect, $sql);

        if ($query) {
            header('Location: data_mh.php?status=sukses');
        }
        else {
            header('Location: data_mh.php?status=gagal');
        }
    }
    else {
        die("Akses Dilarang...!!!");
    }
?>