<?php

include("../config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: data_mk.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM matkul WHERE id=$id";
$query = mysqli_query($connect, $sql);
$matkul = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
    die("data tidak ditemukan...");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Daftar</title>
</head>
<body>
    <header>
        <h3>Formulir edit data</h3>
    </header>
    <nav>
    <p><a href="../main.php"><button>Main Menu</button></a></p>
    </nav>
    <br/>
    <form action="proses_edit_mk.php" method="post">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $matkul['id'] ?>" />
            <p>
                <label for="nama">Nama Mata Kuliah: </label>
                <input type="text" name="nama" placeholder="Nama Mata Kuliah" value="<?php echo $matkul['nama'] ?>" />
            </p>
            <p>
                <label for="kode">Kode Mata Kuliah: </label>
                <input type="text" name="kode" placeholder="kode" value="<?php echo $matkul['kode'] ?>" />
            </p>
            <p>
                <label for="deskripsi">Deskripsi: </label>
                <input type="text" name="deskripsi" placeholder="deskripsi" value="<?php echo $matkul['deskripsi'] ?>" />
            </p>
            <input type="submit" name="simpan" value="Simpan" />
        </fieldset>
    </form>
    <p><a href="data_mk.php"><button>Kembali</button></a></p>
</body>
</html>