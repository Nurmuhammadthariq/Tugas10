<?php

require 'functions.php';

//Pagination


$produk = query("SELECT * FROM produk");



 ?>

<!DOCTYPE html>
<html>
<head>
	<title>HALAMAN ADMIN</title>
</head>
<body>

	

	<h1>DAFTAR PRODUK		</h1>

	<a href="tambah.php">Tambah data Produk</a>
	<br><br>

	<!-- <form action="" method="post">
		<label></label>
		<input type="text" name="keyword" size="20" autofocus placeholder="Search" 
		autocomplete="off" id="keyword">
		<button type="submit" name="cari" id="tombol-cari">Search</button>
	</form>
	<br> -->

	<div id="container">
	<table border="1" cellpadding="10" cellspacing="0">

		<tr>
			<th>No.</th>
			<th>Nama Produk</th>
			<th>Keterangan</th>
			<th>harga</th>
			<th>jumlah</th>
			<th>Aksi</th> 
		</tr>

	<?php $i = 1; ?>
	<?php foreach( $produk as $row ) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?= $row["nama_produk"]; ?></td>
			<td><?= $row["keterangan"]; ?></td>
			<td><?= $row["harga"]; ?></td>
			<td><?= $row["jumlah"]; ?></td>
			<td>
				<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
				<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Anda yakin ingin menghapus??');">Hapus</a>
			</td>
		</tr>
	<?php $i++; ?>
	<?php endforeach; ?>

	</table>
	</div>



<script src="js/script.js"></script>
</body>
</html>