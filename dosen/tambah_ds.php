<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah daftar</title>
</head>

<body>
    <header>
        <h3>Formulir</h3>
    </header>
    <nav>
        <a href="../main.php"><button>Main menu</button></a>
    </nav>
    <br />
    <form action="proses_tambah_ds.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" />
            </p>
            <p>
                <label for="nidn">NIDN: </label>
                <input type="text" name="nidn" placeholder="NIDN" />
            </p>
            <p>
                <label for="jenjang">Jenjang Pendidikan: </label>
                <label><input type="radio" name="jenjang" value="S2">S2</label>
                <label><input type="radio" name="jenjang" value="S3">S3</label>
                <p><input type="submit" name="daftar" value="Daftar" /> </p></label>
        </fieldset>
    </form>
    <p> <a href="data_ds.php"><button>Kembali</button></a></p>
    
</body>

</html>