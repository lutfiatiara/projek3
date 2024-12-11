<?php

require_once('koneksi.php');
$id = $_GET['id'];

$sql = "SELECT * FROM catatan_sekolah where id=$id";
$result = $conn->query($sql);

$projek3 = $result->fetch_all(MYSQLI_ASSOC);

// var_dump($ppdb_online);
?>












<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
</head>
<body>
    <form method="post" action="">

        <label>Judul:</label>
        <input type="text" name="judul" placeholder="masukkan judul">
        <br><br>
        <label>Deskripsi:</label>
        <textarea class="textarea" name="deskripsi" placeholder="masukkan deskripsi catatan"></textarea>
        <br><br>
        <label>Tanggal penulisan:</label>
        <input type="date" name="tanggal_penulisan" placeholder="pilih tanggal penulisan">
        <br><br>
        <label>Penulis:</label>
        <input type="text" name="penulis" placeholder="masukkan nama penulis">
        <br><br>
        <input type="submit" name="simpan" value="simpan">


    </form>

    
</body>
</html>