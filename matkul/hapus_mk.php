<?php

include("../config.php");

if( isset($_GET['id']) ){
    $id = $_GET['id'];
    $sql = "DELETE FROM matkul WHERE id=$id";
    $query = mysqli_query($connect, $sql);
    if( $query ){
        header('Location: data_mk.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>