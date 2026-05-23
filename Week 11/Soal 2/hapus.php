<?php
include 'koneksi.php';

if (!isset($koneksi)) {
    die("Koneksi database tidak tersedia");
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $hapus = mysqli_query($koneksi, "DELETE FROM siswa WHERE id = $id");

    if ($hapus) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal menghapus data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
    exit();
}
?>