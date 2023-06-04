<?php

include("../config.php");
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $ps = $_POST['program_studi'];
    $sql = "UPDATE mahasiswa SET nama='$nama', nim='$nim', program_studi='$ps' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_mh.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
        
    }


} else {
    die("Akses dilarang..!!");
}

?>