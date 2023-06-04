<?php

include("../config.php");

if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM dosen WHERE id=$id";
    $query = mysqli_query($connect, $sql);
    if( $query ){
        header('Location: data_ds.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>