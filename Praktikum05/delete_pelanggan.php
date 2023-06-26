<?php
// import database
require_once 'dbkoneksi.php';
// tangkap data id delete nya
$delete = $_GET['iddel'];
// bikin query
$sql = "DELETE FROM pelanggan WHERE id=? ";
// tangkap data id deletenya 
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);


$iddel = $_GET['iddel'];
$query = "DELETE FROM pelanggan WHERE id = ?";
$delete = $dbh->prepare($query);
$delete->execute([$iddel]);

header('location:list_pelanggan.php');
?>