<?php
include 'koneksi.php';

if (!isset($koneksi)) {
    die('Koneksi database belum diatur. Periksa file koneksi.php');
}

if (!isset($_GET['id'])) {
    header("Location: index.php");
    exit();
}
$id = $_GET['id'];

$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id = $id");
$data  = mysqli_fetch_assoc($query);

if (!$data) {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Data Siswa</title>
    <style>
        .card-form {
            border: 1px solid #ccc;
            padding: 20px;
            width: 400px;
            border-radius: 5px;
            margin: 20px auto;
        }
        .form-title {
            text-align: center;
            margin-top: 0;
        }
        .input-field {
            width: 100%;
            padding: 6px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        .btn-update {
            background-color: #008CBA;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 4px;
            cursor: pointer;
        }
        .btn-kembali {
            background-color: #008CBA;
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
            display: inline-block;
            margin-top: 10px;
            font-size: 14px;
        }
    </style>
</head>
<body>

    <div class="card-form">
        <h3 class="form-title">Edit Data Siswa</h3>
        
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="txtid" value="<?php echo $data['id']; ?>">
            
            <table border="0" width="100%" cellpadding="5">
                <tr>
                    <td>Nama:</td>
                </tr>
                <tr>
                    <td><input type="text" name="txtnama" class="input-field" value="<?php echo $data['nama']; ?>" required></td>
                </tr>
                <tr>
                    <td>Kelas:</td>
                </tr>
                <tr>
                    <td><input type="text" name="txtkelas" class="input-field" value="<?php echo $data['kelas']; ?>" required></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnupdate" value="Update" class="btn-update">
                        <br>
                        <a href="index.php" class="btn-kembali">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>