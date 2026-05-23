<?php
if (isset($_POST['txtusername']) && isset($_POST['txtpassword'])) {
    $username = $_POST['txtusername'];
    $password = $_POST['txtpassword'];
} else {
    header("Location: index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Proses Login</title>
    <style>
        body {
            margin: 40px;
            line-height: 1.6;
        }
        .sukses-title {
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 5px;
        }
        .sukses-welcome {
            font-size: 24px;
            font-weight: bold;
            margin-top: 0;
        }
        .sukses-user {
            color: blue;
        }
        .gagal-text {
            color: red;
            font-size: 24px;
            font-weight: bold;
        }
        .link-kembali {
            color: purple;
            font-size: 24px;
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <?php
    if ($username == "admin" && $password == "admin") {
        echo '<p class="sukses-title">Login berhasil!</p>';
        echo '<p class="sukses-welcome">Selamat datang, <span class="sukses-user">admin</span>.</p>';
    } else {
        echo '<p class="gagal-text">Username : ' . htmlspecialchars($username) . ' Tidak Terdaftar!</p>';
    }
    ?>
    
    <p><a href="index.php" class="link-kembali">kembali ke halaman login</a></p>

</body>
</html>