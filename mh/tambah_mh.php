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
        
    </nav>
    <br/>
    <form action="proses_tambah_mh.php" method="post">
        <fieldset>
            <p>
                <label for="nama">Nama: </label>
                <input type="text" name="nama" placeholder="Nama Lengkap" />
            </p>
            <p>
                <label for="nim">NIM: </label>
                <input type="text" name="nim" placeholder="NIM" />
            </p>
            
                <label for="program_studi">Program Studi: </label>
                <input type="text" name="program_studi" placeholder="Program Studi" />
            </p>
            
            <p><input type="submit" name="daftar" value="Daftar" /> </p> 
            
        </fieldset>
    </form>
    <p><a href="data_mh.php"><button>Kembali</button></a></p>
</body>
</html>