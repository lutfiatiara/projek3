<?php
if(isset($_POST['judul'])){
    //1.tangkap datanya ke dalam variabel
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $tanggal_penulisan = $_POST['tanggal_penulisan'];
    $penulis = $_POST['penulis'];
    //2.hubungkan dgn database
    require "koneksi.php";
    //3.lakukan query
    $query = "insert into catatan_sekolah (judul, deskripsi, tanggal_penulisan, penulis) 
    values ('$judul', '$deskripsi', '$tanggal_penulisan', '$penulis')";
    $eksekusi = mysqli_query($koneksi, $query);
    //4.jika berhasil lempar ke halaman index
    if($eksekusi) {
        header('location:index.php');
    }
}

?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah catatan</title>
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