<?php
require_once("koneksi.php");

$id = $_GET['id']; // id berasal dari url
$query = "SELECT mahasiswa.nama_mhs, buku.judul_buku, peminjaman.tgl_pinjam FROM peminjaman JOIN mahasiswa ON peminjaman.fk_nim = mahasiswa.nim JOIN buku ON peminjaman.fk_kode_buku = buku.kode_buku WHERE kode_pinjam = $id ";
$data = mysqli_query($connect, $query);
?>

<!DOCTYPE HTML>
<head>
    <title>Detail</title>
</head>
<body>
    <h3>Detail Peminjaman</h3>
    <?php while($row = mysqli_fetch_assoc($data)){
        echo $row['nama_mhs'];
        echo "<br>";
        echo $row['judul_buku'];
        echo "<br>";
        echo $row['tgl_pinjam'];
    }

    mysqli_close($connect); // menutup koneksi ke database
    ?>
</body>
</html>