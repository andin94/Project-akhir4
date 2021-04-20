<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<title>daftar online</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
	<style type="text/css">
	<style type="text/css">
	.header{
		background-color: #2f5167;
		color: #fff;
		height: 50px;
	}
	button,td,input{
		margin-top: 5px;
	}
	.container{
		float: left;
		margin-left: 50px; 
	}
	</style>
</head>
<body>
	<div class="header">
		<h1>Daftar Online</h1>
	</div>
		<hr>
		<form class="container">
			<?php csrf_field() ?>
			<h2>Biodata Siswa</h2>
			<table class="table-form" border="0" >
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input type="text" name="nama"></td>
				</tr>
				<tr>
					<td>NISN</td>
					<td>:</td>
					<td><input type="text" name="jurusan"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td>
					<input type="Radio" name="jenis Kelamin" value="L">L</input>
					<input type="Radio" name="jenis Kelamin" value="P">P</input>
					</td>
				</tr>
				<tr>
					<td>foto</td>
					<td>:</td>
					<td><input type="file" name="file"></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td><input type="text" name="tmp"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><input type="date" name="tgl"></td>
				</tr>
				<tr>
					<td>Agama</td>
					<td>:</td>
					<td><input type="text" name="Agama"></td>
				</tr>
				<tr>
					<td>Alamat</td>
					<td>:</td>
					<td><input type="enum" name="alamat"></td>
				</tr>
				<tr>
					<td>Asal Sekolah</td>
					<td>:</td>
					<td><input type="text" name="AS"></td>
				</tr>
				<tr>
					<td>No Ijazah</td>
					<td>:</td>
					<td><input type="text" name="No"></td>
				</tr>
				
				<tr>
					<td>Jumlah Nem</td>
					<td>:</td>
					<td>
						<input type="text" name="total">
					</td>
				</tr>
				<tr>
					<td>Nem</td>
					<td>:</td>
					<td><input type="file" name="nem"></td>
				</tr>
			</table>
			<h2>Data Orang Tua</h2>
			<table>
				<tr>
					<td>Nama Ayah</td>
					<td>:</td>
					<td><input type="text" name="namaa"></td>
				</tr>
				<tr>
					<td>Nama Ibu</td>
					<td>:</td>
					<td><input type="text" name="namai"></td>
				</tr>
				<tr>
					<td>pekerjaan Ayah</td>
					<td>:</td>
					<td><input type="text" name="pa"></td>
				</tr>
				<tr>
					<td>pekerjaan Ibu</td>
					<td>:</td>
					<td><input type="text" name="pi"></td>
				</tr>
				<tr>
					<td>Telepon</td>
					<td>:</td>
					<td><input type="text" name="tlp"></td>
				</tr>
				<tr>
					<td>Alamat </td>
					<td>:</td>
					<td><textarea>	</textarea></td>
				</tr>
			</table>
		</form>
		<form class="container">	
			<h2>Jalur Pendaftaran</h2>
			<table>
				<tr>
					<td><input type="Radio" name="Pilih Jalur" value="AK">Prestasi Akademik</td>
					<td>*Lampiran Tambahan</td>
					<td>:</td>
					<td><td><input type="file" name="file"></td></td>
				</tr>
				<tr>
					<td><input type="Radio" name="Pilih Jalur" value="PNA">Presentasi Non Akademik</td>
				</tr>
				<tr>
					<td><input type="Radio" name="Pilih Jalur" >Afirmasi</td>
				</tr>
				<tr>
					<td><input type="Radio" name="Pilih Jalur">Zonasi</td>
				</tr>
				<tr>
					<td><input type="Radio" name="Pilih Jalur">Perpindahan Orang Tua</td>
				</tr>
				<tr>	
				</tr>
				<tr>
					<td>*Prestasi Non Akademik->Sertifikat</td>
				</tr>
				<tr>	
					<td>*Afirmasi-> SKTM</td>
				</tr>
				<tr>
					<td>*Perpindahan Orang Tua->Surat Keterangan Pindah</td>
				</tr>
			</table>
			<h2>Pilih Kompetensi Keahlian</h2>
			<table>
                <tr>
                	<td><input type="Radio" name="Pilih jurusan" value="RPL">Rekayasa Perangkat Lunak</td>
					<td>*Surat Keterangan Tidak Buta Warna</td>
					<td>:</td>
					<td><input type="file" name="file"></td>
				</tr>
                </tr>
                <tr>	
                	<td><input type="Radio" name="Pilih jurusan" value="TKJ">Teknik komputer Jaringan</td>
                </tr>
                <tr>	
                	<td><input type="Radio" name="Pilih jurusan" value="BDP">Bisnis Daring Pemasaran</td>
                </tr>
                <tr>	
                	<td><input type="Radio" name="Pilih jurusan" value="AKL">Akutansi Keuangan Lembaga</td>
                </tr>
                <tr>	
                	<td><input type="Radio" name="Pilih jurusan" value="OTKP">Otomatisasi Tata Kelola Perkantoran</td>
                </tr>
                <tr>
                	<td> *Khusus Jurusan IT (RPL,TKJ)</td>
                </tr>
                <tr>
                	<td>	<button type="submit" class="btn btn-primary">kirim</button></td>
                </tr>
            
		
		</table>
		</form>
</body>
</html>