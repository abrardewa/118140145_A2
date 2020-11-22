<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <p>================================</p>

    <h3>Tambah Data</h3>
    <form action="adddata.php" method="POST" enctype="multipart/form-data">
        NRP : <input type="text" name="nrp"><br>
        Nama : <input type="text" name="nama"><br>
        Foto : <input type="file" name="foto"><br>
        <select name="jurusan" id="">
            <?php
                $conn = mysqli_connect("localhost", "root", "", "mhs") or die("Gagal Connect ke database");
                $query = mysqli_query($conn, "select * from jurusan");
                while($row = mysqli_fetch_array($query)) {
                    echo "<option value=\"${row['id_jur']}\">${row['nama']}</option>";
                }
            ?>
        </select><br>
        <input type="submit" name="simpan" value="Tambah"> 
    </form>

    <p>================================</p>
    <h3>Cari Data</h3>
    <form action="searchname.php" method="POST">
        Nama : <input type="text" name="nama">
        <input type="submit" value="Cari Nama" name='cari'>
    </form>
    <p>================================</p>
</body>
</html>