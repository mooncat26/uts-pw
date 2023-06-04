<?php
    include("../config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel data matakuliah</title>
</head>
<body>
    <header>
        <h3>Daftar mata kuliah</h3>
    </header>
    <br/>
    <nav>
    <a href="../main.php"><button>Main menu</button></a>
    </nav>
    <?php if(isset($_GET['status'])):?>
        <p>
            <?php
                if ($_GET['status'] == 'sukses') {
                    echo "Penambahan Sukses";
                }
                else {
                    echo "Penambahan Gagal";
                }
            ?>
        </p>
    <?php endif; ?>
    <br/>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kode Mata Kuliah</th>
                <th>Deskripsi</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($connect, $table_mk);
                while ($matkul = mysqli_fetch_array($query)){
                    echo"<tr>";
                    echo"<td>".$matkul['id']."</td>";
                    echo"<td>".$matkul['nama']."</td>";
                    echo"<td>".$matkul['kode']."</td>";
                    echo"<td>".$matkul['deskripsi']."</td>";
                    echo"<td>";
                    echo"<a href='edit_mk.php?id=".$matkul['id']."'><button>Edit</button></a> | ";
                    echo"<a href='hapus_mk.php?id=".$matkul['id']."'><button>Hapus</button></a>";
                    echo"</td>";
                    echo"</tr>";
                }
                
            ?>
        </tbody>
    </table>
    <button onclick=window.location.reload()>Refresh</button><br/>
    <p>Total: <?php echo mysqli_num_rows($query) ?> Mata Kuliah</p>
    <a href="tambah_mk.php"><button> Tambah Baru</button></a>
</body>
</html>