<?php
include 'koneksi.php';
/**
 * @var $connection PDO
 */

$statement = $connection->query("select * from buku");
// mengatur supaya hasil query berupa array
$statement->setFetchMode(PDO::FETCH_ASSOC);
// menjalankan query
$results = $statement->fetchAll();
//hasil output json
header('Content-Type: application/json');
echo json_encode($results);