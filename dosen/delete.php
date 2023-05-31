<?php
// Buka koneksi dengan MySQL
require_once("../koneksi.php");

// Mengecek apakah di URL ada GET idDosen
if (isset($_GET["idDosen"])) {
    // Menyimpan variabel id dari URL ke dalam variabel $idDosen
    $id = $_GET["idDosen"];

    // Membuat dan menjalankan prepared statement untuk menghapus data
    $stmt = $link->prepare("DELETE FROM t_dosen WHERE idDosen = ?");
    $stmt->bind_param("s", $id);
    $stmt->execute();

    // Mengecek apakah query gagal
    if (!$stmt) {
        die("Gagal menghapus data: " . $stmt->errno . " - " . $stmt->error);
    }
}

// Melakukan redirect ke halaman viewdosen.php
header("location:index.php");
?>
