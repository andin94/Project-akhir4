<?php 
include 'db_conn.php';
 ?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>inputan beranda</title>
</head>
<body>
	<h2>masukkan Inputan Beranda</h2>
	<form  action="/input/beranda" method="post" enctype="multipart/form-data">
		<?php csrf_field() ?>
		<table>
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="" required="required"></td>
			</tr>
			<tr>
				<td>file</td>
				<td>:</td>
				<td><input type="file" name="gambar" required="required"></td>
			</tr>
			<tr>
				<td>deskripsi</td>
				<td>:</td>
				<td><input type="text" name="script" value="" required="required"></td>
			</tr>
			<tr>
				<td><input type="submit" name="tombol" value="post"></td>
			</tr>
		</table>
	</form>
</body>
</html>