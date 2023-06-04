<?php

include("../config.php");
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kode = $_POST['kode'];
    $des = $_POST['deskripsi'];

    $sql = "UPDATE matkul SET nama='$nama', kode='$kode', deskripsi='$des' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman list-siswa.php
        header('Location: data_mk.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
        
    }


} else {
    die("Akses dilarang..!!");
}

?>