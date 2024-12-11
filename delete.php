<?php

require_once('koneksi.php');
$id = $_GET['id'];

// echo $id;

$query = "DELETE FROM catatan_sekolah WHERE id=$id";
mysqli_query($koneksi, $query);
echo "<script> alert('Berhasil hapus');
window.location.replace('index.php');
</script>";