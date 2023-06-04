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
    <p><a href="../main.php"><button>Main Menu</button></a></p>
    </nav>
    <br/>
    <form action="proses_tambah_mk.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama Mata Kuliah: </label>
                <input type="text" name="nama" placeholder="Nama Mata Kuliah" />
            </p>
            <p>
                <label for="kode">Kode Mata Kuliah: </label>
                <input type="text" name="kode" placeholder="kode" />
            </p>
            <p>
                <label for="deskripsi">Deskripsi: </label>
                <input type="text" name="deskripsi" placeholder="deskripsi" />
            </p>
            <input type="submit" name="daftar" value="Daftar" />
        </fieldset>
    </form>
    <p><a href="data_mk.php"><button>Kembali</button></a></p>
</body>
</html>