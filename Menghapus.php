<?php
require_once('koneksi.php');
// Cara menghapus data barang  yang ada berdasarkan id barang
$isbn = $_GET['isbn'];
$sql = "DELETE FROM buku WHERE isbn= ?";
/**
 * @var $connection PDO
 */
$row = $connection->prepare($sql);
$row->execute(array($isbn));

echo '<script>alert("Berhasil Menghapus Data");window.location="all.php"</script>';
?>