<?php 

require 'functions.php';
	
if ( isset($_POST['register']) ) {
	
	if ( registrasi($_POST) > 0 ) {
		echo "<script>
				alert('Registrasi berhasil');
				document.location.href = 'index.php';
			</script>";
	} else {
		echo mysqli_error($conn);
	}

}


 ?>



 <!DOCTYPE html>
 <html>
 <head>
 	<title>HALAMAN REGISTRASI</title>
 	<style>
 		label {
 			display: block;
 		}
 	</style>
 </head>
 <body>
 	
 	<h1>HALAMAN REGISTRASI</h1>

 	<form action="" method="post">
 		
 		<ul>
 			<li>
 				<label for="username">Username :</label>
 				<input type="text" name="username" id="username">
 			</li>
 			<li>
 				<label for="password">Password :</label>
 				<input type="password" name="password" id="password">
 			</li>
 			<li>
 				<label for="password2">Confirm Password</label>
 				<input type="password" name="password2" id="password2">
 			</li>
 			<li>
 				<button type="submit" name="register">Sign Up</button>
 			</li>
 		</ul>

 	</form>

 </body>
 </html>