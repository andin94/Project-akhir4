<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Profile</title>
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
	<style type="text/css">
		.header {
			background-color: #2f5167;
			color: #fff;
			height: 50px

		}

		a{
			text-decoration: none;
			float: right;
			margin: 20px;
			color:  #fff;
		}

		.logo {
			margin: 20px;
			float: left;
		}
		.background {
			border: 10px 50px solid #efefef; 
			position: relative; 
			overflow: hidden; 
			background: #efefef;
			margin:30px auto;
			width: 600px;
			height: 700px;
		}

		h1{
			font-family: "Righteou";
			margin-bottom: 2px;
			text-align: center;
			font-size: 28px;
		}

		p{
			text-align: center;
			font-size: 18px;
		}
	</style>
</head>
<body>
	<div class="header">
		<div class="logo">
			SMKN 2 SUKABUMI
		</div>
		<div class="list-group">
			<a href="./daftar">Daftar</a>
			<a href="./jurusan">Kompetensi Keahlian</a>
			<a href="./organisasi">Organisasi</a>
			<a href="./profile">Profile</a>
			<a href="./beranda">Beranda</a>
		</div>
	</div>

	<div class="background">
		<h1>VISI</h1>
		<p>Mulia, Profesional, Juara</p>
		<h1>MISI</h1>
		<p>Meningkatkan kualitas pendidikan dan tenaga pendidikan untuk mewujudkan suasana belajar dan bekerja yang kondusif, religius, dan berakhlak mulia,</p>
		<p>Meningkatkan hubungan kerjasama yang sinergis dengan DU/DI, perguruan tinggi,instansi, dan masyarakat untuk menciptakan lulusan yang profesional,</p>
		<p>Meningkatkan sarana dan prasarana yang memadai dalam  mendukung pelayanan prima untuk menciptakan generasi juara.</p>
		<h1>TUJUAN</h1>
		<p>Terwujudnya sekolah refresentatif dengan bangunan megah, nyaman, dan lingkunganyang asri</p>
		<p>memiliki pendidik dan tenaga kependidikyang religius, profesional dan berahklak mulia,    </p>
		<p>terselenggaranya pembelajaran yang berkualitas dengan berbasis tenologi informasi, </p>
		<p>terselenggaranya kegiatan ektrakulikuler unggulan yang berkualitas dan prestasif</p>
		<p>tercipta tamatan yang berakhlak mulia, terampil dan juara</p>
	</div>
</body>
</html>