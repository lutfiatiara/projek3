
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Catatan - <?= $data['judul'] ?></title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <img src="ilustrasi-kelas-ilustrasi-sekolah.jpg" alt="Ilustrasi Kelas" style="width:100%; height:auto;">
    
    
    
    <?php
    //1.koneksi ke dalam database
    include 'koneksi.php';
    //2.tulis query
    //2. Mengecek apakah ada parameter 'id' di URL
    if (isset($_GET['id'])) {
        $id = $_GET['id']; // Mendapatkan id dari URL
    } else {
        echo "ID tidak ditemukan!";
        exit; // Jika id tidak ada, hentikan eksekusi
    }

    $query = "SELECT * FROM catatan_sekolah WHERE id = $id";
    //3.eksekusi query
    $eksekusi = mysqli_query($koneksi, $query);
    //4.mendapatkan data
    $datas = mysqli_fetch_all($eksekusi, MYSQLI_ASSOC);
    //5.MENAMPILKAN DATANYA
    foreach ($datas as $data){
    ?>
    <h1 align="center"><?= $data['judul'] ?></h1>
    <div class="catatan-detail">
        <p>Deskripsi:<?= $data['deskripsi'] ?></p>
        <p><strong>Tanggal Penulisan:</strong> <?= $data['tanggal_penulisan'] ?></p>
        <p><strong>Penulis:</strong> <?= $data['penulis'] ?></p>
    </div>
    <a href="index.php"><button>Kembali ke Daftar Catatan</button></a>
    <?php
    }
    ?>
</body>
</html>
