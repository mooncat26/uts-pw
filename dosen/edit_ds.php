<?php

include("../config.php");

// kalau tidak ada id di query string
if( !isset($_GET['id']) ){
    header('Location: data_ds.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM dosen WHERE id=$id";
$query = mysqli_query($connect, $sql);
$dosen = mysqli_fetch_assoc($query);

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
        <a href="../main.php"><button>Main menu</button></a>
    </nav>
    <br/>
    <form action="proses_edit_ds.php" method="post">
        <fieldset>
        <input type="hidden" name="id" value="<?php echo $dosen['id'] ?>" />
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" value="<?php echo $dosen['nama'] ?>" />
            </p>
            <p>
                <label for="nidn">NIDN: </label>
                <input type="text" name="nidn" placeholder="NIDN" value="<?php echo $dosen['nidn'] ?>" />
            </p>
            <p>
                <label for="jenjang">Jenjang Pendidikan: </label>
                <?php $jp = $dosen['jenjang']; ?>
                <label><input type="radio" name="jenjang" value="S2" <?php echo ($jp == 'S2') ? "checked": "" ?>>S2</label>
                <label><input type="radio" name="jenjang" value="S3" <?php echo ($jp == 'S3') ? "checked": "" ?>>S3</label>
            </p>
            <input type="submit" name="simpan" value="Simpan" /> </p>
        </fieldset>
    </form>
    <p> <a href="data_ds.php"><button>Kembali</button></a></p>

</body>
</html>