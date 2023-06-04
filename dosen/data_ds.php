<?php
    include("../config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel data dosen</title>
</head>
<body>
    <header>
        <h3>Daftar Dosen</h3>
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
                <th>NIDN</th>
                <th>Jenjang Pendidikan</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($connect, $table_ds);
                while ($dosen = mysqli_fetch_array($query)){
                    echo"<tr>";
                    echo"<td>".$dosen['id']."</td>";
                    echo"<td>".$dosen['nama']."</td>";
                    echo"<td>".$dosen['nidn']."</td>";
                    echo"<td>".$dosen['jenjang']."</td>";
                    echo"<td>";
                    echo"<a href='edit_ds.php?id=".$dosen['id']."'><button>Edit</button></a> | ";
                    echo"<a href='hapus_ds.php?id=".$dosen['id']."'><button>Hapus</button></a>";
                    echo"</td>";
                    echo"</tr>";
                }
                
            ?>
        </tbody>
    </table>
    <button onclick=window.location.reload()>Refresh</button><br/>
    <p>Total: <?php echo mysqli_num_rows($query) ?> dosen</p>
    <a href="tambah_ds.php"><button> Tambah Baru</button></a>
</body>
</html>