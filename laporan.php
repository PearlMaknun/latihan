<!DOCTYPE HTML>
<html lang="en">
<html>
<meta charset="utf-8" />
	<head>
		<title>Laporan Peminjaman</title>

		<style type="text/css">
			
			table, th, td {
			    border: 1px solid black;
			}

		</style>

	</head>

	<h1>Laporan Peminjaman</h1>

	<table style="width:100%;"><thead>
		<tr>
			<th>No</th>
		    <th>Nama</th>
		    <th>Judul Buku</th>
		    <th>Tanggal Pinjam</th>
		    <th>Aksi</th>
		</tr>
	</thead>
<tbody>
<?php
include "koneksi.php";
$query = "SELECT mahasiswa.nama_mhs, buku.judul_buku, peminjaman.tgl_pinjam, peminjaman.kode_pinjam FROM peminjaman JOIN mahasiswa ON peminjaman.fk_nim = mahasiswa.nim JOIN buku ON peminjaman.fk_kode_buku = buku.kode_buku";
$data = mysqli_query($connect, $query);
$no = 1;
while($row = mysqli_fetch_assoc($data)){
?>
     <tr>
          <td><?php echo $no++ ?></td>
          <td><?php echo $row['nama_mhs'] ?></td>
          <td><?php echo $row['judul_buku'] ?></td>
          <td><?php echo $row['tgl_pinjam'] ?></td>
          <td>
          <a href="update.php?id=<?php //echo $row['id'] ?>">Edit</a>
          <a href="delete.php?id=<?php //echo $row['id'] ?>">Delete</a>
          <a href="detail.php?id=<?php echo $row['kode_pinjam'] ?>">Detail</a>
          </td>
     </tr>
<?php
};
?>
</tbody>
	</table> 

</html>