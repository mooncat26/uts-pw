<?php

include("../config.php");

if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM mahasiswa WHERE id=$id";
    $query = mysqli_query($connect, $sql);
    if( $query ){
        header('Location: data_mh.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>