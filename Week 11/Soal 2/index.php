<?php
include 'koneksi.php';

if (!isset($koneksi)) {
    die("Koneksi database tidak tersedia");
}

$query = mysqli_query($koneksi, "SELECT * FROM siswa");

if (!$query) {
    die("Query error: " . mysqli_error($koneksi));
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Data Siswa</title>
    <style>
        body {
            margin: 20px;
        }
        .title-center {
            text-align: center;
            margin-bottom: 20px;
        }
        .btn-tambah {
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            display: inline-block;
            margin-bottom: 15px;
        }
        .table-data {
            border-collapse: collapse;
            width: 100%;
        }
        .table-data th {
            background-color: #eeeeee;
            padding: 10px;
            text-align: left;
        }
        .table-data td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .btn-edit {
            background-color: #008CBA;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
            margin-right: 5px;
        }
        .btn-hapus {
            background-color: #f44336;
            color: white;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>

    <h2 class="title-center">Data Siswa</h2>
    
    <a href="tambah.php" class="btn-tambah">Tambah Data</a>
    
    <table class="table-data" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row = mysqli_fetch_assoc($query)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['nama']; ?></td>
                <td><?php echo $row['kelas']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']; ?>" class="btn-edit">Edit</a>
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" class="btn-hapus" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>

</body>
</html>