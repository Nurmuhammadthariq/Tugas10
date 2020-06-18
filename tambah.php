<?php



require 'functions.php';

//cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["submit"]) ) {

	
	
	

	//cek data berhasil ditambah atau tidak
	if ( tambah($_POST) > 0 ) {
		echo "
			<script>
				alert('Data berhasil disimpan');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal disimpan');
				document.location.href = 'index.php';
			</script>
		";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah data Mahasiswa</title>
</head>
<body>

	<h1>Tambah data Mahasiswa</h1>

	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">Nama Produk :</label>
				<input type="text" name="nama_produk">
			</li>
			<li>
				<label for="keterangan">Keterangan :</label>
				<input type="text" name="keterangan">
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="text" name="harga">
			</li>
			<li>
				<label for="jumlah">Jumlah :</label>
				<input type="text" name="jumlah">
			</li>
			
			<li>
				<button type="submit" name="submit">SIMPAN!</button>
			</li>
		</ul>

	</form>



</body>
</html>