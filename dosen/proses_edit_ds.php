<?php

include("../config.php");
if(isset($_POST['simpan'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $jp = $_POST['jenjang'];
    $sql = "UPDATE dosen SET nama='$nama', nidn='$nidn', jenjang='$jp' WHERE id='$id'";
    $query = mysqli_query($connect, $sql);

    // apakah query update berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman data_ds.php
        header('Location: data_ds.php');
    } else {
        // kalau gagal tampilkan pesan
        die("Gagal menyimpan perubahan...");
        
    }


} else {
    die("Akses dilarang..!!");
}

?>