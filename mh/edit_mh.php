<?php

include("../config.php");

// kalau tidak ada id di query string
if (!isset($_GET['id'])) {
    header('Location: data_mh.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM mahasiswa WHERE id=$id";
$query = mysqli_query($connect, $sql);
$mahasiswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if (mysqli_num_rows($query) < 1) {
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
        <p><a href="../main.php"><button>Main menu</button></a></p>
    </nav>
    <br />
    <form action="proses_edit_mh.php" method="post">
        <fieldset>
            <input type="hidden" name="id" value="<?php echo $mahasiswa['id'] ?>" />
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $mahasiswa['nama'] ?>" />
            </p>
            <p>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" placeholder="NIM" value="<?php echo $mahasiswa['nim'] ?>" />
            </p>
            <p>
                <label for="program_studi">Program Studi: </label>
                <input type="text" name="program_studi" placeholder="Program Studi" value="<?php echo $mahasiswa['program_studi'] ?>" />
            </p>
            <input type="submit" name="simpan" value="Simpan" />
        </fieldset>
    </form>
    <p><a href="data_mh.php"><button>Kembali</button></a></p>
</body>

</html>