<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>Coba	</title>
</head>
<body>

	<h2><a href="">
	<h3>prof</h3>

	<a href="/pegawai"> kembali</a>

	<br/>
	<br/>

	<form action="/profile/daftar" method="post">
		{{ csrf_field() }}
		Nama <input type="text" name="nama" required="required"> <br/>
		Umur <input type="text" name="umur" required="required"> <br/>
		<input type="submit" value="simpan data">
	</form>
		 
</body>
</html>
