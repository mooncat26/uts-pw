<?php
    include("../config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel data mahasiswa</title>
</head>
<body>
    <header>
        <h3>Daftar mahasiswa</h3>
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
                <th>NIM</th>
                <th>Program Studi</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query = mysqli_query($connect, $table_mh);
                while ($mahasiswa = mysqli_fetch_array($query)){
                    echo"<tr>";
                    echo"<td>".$mahasiswa['id']."</td>";
                    echo"<td>".$mahasiswa['nama']."</td>";
                    echo"<td>".$mahasiswa['nim']."</td>";
                    
                    echo"<td>".$mahasiswa['program_studi']."</td>";
                    
                    echo"<td>";
                    echo"<a href='edit_mh.php?id=".$mahasiswa['id']."'><button>Edit</button></a> | ";
                    echo"<a href='hapus_mh.php?id=".$mahasiswa['id']."'><button>Hapus</button></a>";
                    echo"</td>";
                    echo"</tr>";
                }
                
            ?>
        </tbody>
    </table>
    <button onclick=window.location.reload()>Refresh</button><br/>
    <p>Total: <?php echo mysqli_num_rows($query) ?> mahasiswa</p>
    <a href="tambah_mh.php"><button> Tambah Baru</button></a>
</body>
</html>