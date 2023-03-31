<?php 
require_once '../../database/dbkoneksi.php';

$iddel = $_GET['iddel'];
$query = "DELETE FROM pelanggan WHERE id= ?";
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);

header('location:../../pages/pelanggan/list_pelanggan.php');
?>