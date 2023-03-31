<?php 
require_once '../../database/dbkoneksi.php';

$iddel = $_GET['iddel'];
$query = "DELETE FROM produk WHERE id= ?";
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);

header("location:../../pages/produk/list_produk.php");
?>