<!DOCTYPE html>
<html>
<head>
	<title>CRUD laravel</title>
</head>
<body>

	<h2></h2>
	<h3>Data Pegawai</h3>

	<a href="/Pegawai/tambah"> + Tambah Pegawai Baru</a>

	<br/>
	<br/>

	<table> broder="1">
		<tr>
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $P->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $id_siswa }}">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $id_siswa }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>


</body>
</html>


</body>
</html>