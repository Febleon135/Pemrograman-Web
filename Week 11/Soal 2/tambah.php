<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Data Siswa</title>
    <style>
        .card-form {
            border: 1px solid #ccc;
            padding: 20px;
            width: 400px;
            border-radius: 5px;
            margin: 20px auto;
            font-family: Arial, sans-serif;
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
        .btn-simpan {
            background-color: #4CAF50;
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
        <h3 class="form-title">Tambah Data Siswa</h3>
        
        <form action="proses_tambah.php" method="POST">
            <table border="0" width="100%" cellpadding="5">
                <tr>
                    <td>Nama:</td>
                </tr>
                <tr>
                    <td><input type="text" name="txtnama" class="input-field" required></td>
                </tr>
                <tr>
                    <td>Kelas:</td>
                </tr>
                <tr>
                    <td><input type="text" name="txtkelas" class="input-field" required></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="btnsimpan" value="Simpan" class="btn-simpan">
                        <br>
                        <a href="index.php" class="btn-kembali">Kembali</a>
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>
</html>