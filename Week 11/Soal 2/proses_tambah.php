<?php
include 'koneksi.php';

if (!isset($koneksi)) {
    die("Koneksi database tidak tersedia");
}

if (isset($_POST['btnsimpan'])) {
    $nama  = $_POST['txtnama'];
    $kelas = $_POST['txtkelas'];

    $simpan = mysqli_query($koneksi, "INSERT INTO siswa (nama, kelas) VALUES ('$nama', '$kelas')");

    if ($simpan) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menambahkan data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
    exit();
}
?>