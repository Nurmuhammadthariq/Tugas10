<?php


require 'functions.php';

//Ambil data di URL
$id = $_GET["id"];

//query data mahasiswa berdasarkan id
$produk = query("SELECT * FROM produk WHERE id = $id")[0];



//cek apakah tombol submit sudah di tekan atau belum
if( isset($_POST["Submit"]) ) {
	
	

	//cek data berhasil diubah atau tidak
	if ( ubah($_POST) > 0 ) {
		echo "
			<script>
				confirm('Apakah anda Yakin ingin mengubah??');
				document.location.href = 'index.php';
			</script>
		";
	} else {
		echo "
			<script>
				alert('Data gagal diUbah');
				document.location.href = 'index.php';
			</script>
		";
	}
}

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Ubah data Mahasiswa</title>
</head>
<body>

	<h1>Tambah data Mahasiswa</h1>

	<form action="" method="post" >
		<input type="hidden" name="id" value="<?= $produk["id"]; ?>">
		<ul>
			<li>
				<label for="nama_produk">Nama Produk :</label>
				<input type="text" name="nama_produk" id="nama_produk" required value="<?= $produk["nama_produk"]; ?>">
			</li>
			<li>
				<label for="keterangan">keterangan :</label>
				<input type="text" name="keterangan" id="keterangan" required value="<?= $produk["keterangan"]; ?>">
			</li>
			<li>
				<label for="harga">Harga :</label>
				<input type="text" name="harga" id="harga" required 
				value="<?= $produk["harga"];?>">
			</li>
			<li>
				<label for="jumlah">Jumlah :</label>
				<input type="text" name="jumlah" id="jumlah" required
				value="<?= $produk["jumlah"]; ?>">
			</li>
			<li>
				<button type="submit" name="Submit">Ubah Data</button>
			</li>
		</ul>

	</form>



</body>
</html>