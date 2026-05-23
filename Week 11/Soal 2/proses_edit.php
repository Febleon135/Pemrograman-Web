<?php
include 'koneksi.php';

if (!isset($koneksi)) {
    die("Koneksi database tidak tersedia");
}


if (isset($_POST['btnupdate'])) {
    $id    = $_POST['txtid'];
    $nama  = $_POST['txtnama'];
    $kelas = $_POST['txtkelas'];

    $stmt = $koneksi->prepare("UPDATE siswa SET nama=?, kelas=? WHERE id=?");
    $stmt->bind_param("ssi", $nama, $kelas, $id);
    $update = $stmt->execute();

    if ($update) {
        header("Location: index.php");
        exit();
    } else {
        echo "Gagal mengupdate data: " . mysqli_error($koneksi);
    }
} else {
    header("Location: index.php");
    exit();
}
?>