<?php
// Termasuk koneksi ke database
include 'koneksi.php';

// Mengambil semua catatan dari database
$query = "SELECT * FROM catatan_sekolah";
$eksekusi = mysqli_query($koneksi, $query);
$datas = mysqli_fetch_all($eksekusi, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catatan Sekolah</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <h1 align="center">CATATAN SEKOLAH</h1>
    <img src="ilustrasi-kelas-ilustrasi-sekolah.jpg" alt="Ilustrasi Kelas" style="width:100%; height:auto;">
    <br><br>
    <a href="tambah.php"><button class="tambah"><b>Buat Catatan Baru</b></button></a>
    <br><br>

    <?php
    foreach ($datas as $data): ?>
        <!-- Membungkus seluruh <div> dengan tag <a> untuk menjadikannya link -->
        <a href="read.php?id=<?= $data['id'] ?>" class="catatan-link">
            <div class="catatan">
                <h2><?= $data['judul'] ?></h2>
                <p><?= $data['deskripsi'] ?></p>
                <p><b>Tanggal</b>: <?= $data['tanggal_penulisan'] ?></p>
                <p><b>Penulis</b>: <?= $data['penulis'] ?></p>
                <a href="update.php?id=<?= $data['id'] ?>" class="btn-edit"><button>Edit</button></a>
                <a href="delete.php?id=<?= $data['id'] ?>" class="btn-hapus" onclick="return confirm('Apakah Anda yakin ingin menghapus catatan ini?')">
                    <button>Hapus</button>
                </a>

            </div>
        </a>
    <?php 
    endforeach; ?>
    <br><br>
    <hr>
</body>
<footer>
    made by ; LUTFIA T.A // XRB
</footer>
</html>
