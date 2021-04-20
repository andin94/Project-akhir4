<!DOCTYPE html>
<html>
<head>
	<title>kompetensi keahlian</title>
	<style type="text/css">
		*{
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body{
			font-size: 62,5%;
		}

		.header {
			background-color: #2f5167;
			color: #fff;
			height: 50px

		}

		.logo {
			margin: 20px;
			float: left;
		}

		a{
			text-decoration: none;
			float: right;
			margin: 20px;
			color:  #fff;
		}

		.slider {
			border: 10px 50px solid #efefef; 
			position: relative; 
			overflow: hidden; 
			background: #2f5167;
			margin:20px auto;
			width: 800px;
			height: 450px;
		}

		.slides {
			display: flex;
			overflow: hidden;
			width: 800px;
			height: 450px; 
		}
		.slides {
			position: absolute; 
			width:3900px;
			/*pengaturan durasi lama tampil gambar bisa di atur di bawah ini*/
			animation-name:slide;
			animation-duration:10s;
			animation-timing-function: ease-in-out;
			animation-iteration-count:infinite;
			-webkit-animation-name:slide;
			-webkit-animation-duration:10s;
			-webkit-animation-timing-function: ease-in-out;
			-webkit-animation-iteration-count:infinite;
			-moz-animation-name:slide;
			-moz-animation-duration:10s;
			-moz-animation-timing-function: ease-in-out;
			-moz-animation-iteration-count:infinite;
			-o-animation-name:slide;
			-o-animation-duration:10s;
			-o-animation-timing-function: ease-in-out;
			-o-animation-iteration-count:infinite;
		}
		.slides:hover { 
			-webkit-animation-play-state:paused; 
			-moz-animation-play-state:paused; 
			-o-animation-play-state:paused; 
			animation-play-state:paused; }

		.slide {
			width: 50rem;
			transition: .5s;
		}

		.choose_1:checked ~ .slides>.s1 {
			margin-left:  -0rem;
		}

		.choose_2:checked ~ .slides>.s1 {
			margin-left:  -50rem;
		}

		.choose_3:checked ~ .slides>.s1 {
			margin-left:  -100rem;
		}

		.choose_4:checked ~ .slides>.s1 {
			margin-left:  -150rem;
		}

		.choose_5:checked ~ .slides>.s1 {
			margin-left:  -200rem;
		}

		input {
			text-align: center;
			margin: 0 4rem;
			height: 2rem;
		}
		.jurusan {
			display: flex;
			margin-top: 3rem
		}
		.kls{
			margin: 0 4rem;
			width: 30rem;
			height: 30rem;
		}

		.kls h2{
			text-align: center;
		}

		.kls p{
			text-align: justify;
			margin-top: 1rem;
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
	
	<div class="slider">
		<input type="radio" name="choose" class="choose_1" checked>
		<input type="radio" name="choose" class="choose_2" >
		<input type="radio" name="choose" class="choose_3" >
		<input type="radio" name="choose" class="choose_4" >
		<input type="radio" name="choose" class="choose_5" >
		<div class="slides">
			<img src= "https://2.bp.blogspot.com/-WtoLV6dxSD8/W6O9ue7ZbII/AAAAAAAAOtg/5roadLLuJ4om7DzV9hUQBR2mhlQCLucKACLcBGAs/s1600/rpl.png " class="slide s1">
			<img src="https://smktrimulia.sch.id/wp-content/uploads/2020/10/tkj.jpg" class="slide">
			<img src="https://1.bp.blogspot.com/-WaE_eLk2J0U/Xx5c2v-Zx1I/AAAAAAAAxtA/ZmE9dmNUj3gNIjpx8QH-0rhRFqD5GSBYQCNcBGAsYHQ/s960/Slide2.JPG" class="slide">
			<img src="https://cpssoft.com/wp-content/uploads/2019/06/akuntansi.jpg" class="slide ">
			<img src="https://www.smkn50jkt.sch.id/upload/imagecache/88330030Presentation1-480x270.jpg" class="slide ">
		</div>
	</div>
<hr>
		<div class="jurusan">
		<div class="kls">
			<h2>Rekayasa Perangkat lunak</h2>
			<P> RPL merupakan salah satu jurusan yang ada di SMK.RPL itu berkaitan dengan software komputer mulai dari pembuatan website, aplikasi, game dan semua yang berkaitan dengan pemrograman dengan menguasai bahasa pemrograman tertentu.Intinya RPL tidak akan jauh-jauh dari tiga hal yaitu Coding, Desain dan Algoritma yang akan menjadi kunci keberhasilan rekayasa perangkat lunak tersebut.</P>
		</div>
		<div class="kls">
			<h2>Teknik Komputer Dan jaringan</h2>
			<p>TKJ merupakan sebuah kejurusan yang mempelajari tentang cara-cara merakit komputer dan menginstalasi program komputer.</p>
		</div>
		<div class="kls">
			<h2>Otomatisasi dan Tata Kelola Perkantoran</h2>
			<p>OTKP merupakan salah satu cabang bidang keahlian Bisnis dan Manajemen mempelajari tentang Pengetikan naskah atau dokumen, Penanganan telepon, Penataan dan pengelolaan surat atau dokumen, Penataan dan pengelolaan .</p>
		</div>
		<div class="kls">
			<h2>Akuntansi dan Keuangan Lembaga</h2>
			<p>akuntansi adalah suatu proses yang diawali dengan mencatat, mengelompokkan, mengolah, menyajikan data, serta mencatat transaksi yang berhubungan dengan keuangan</p>
		</div>
		<div class="kls">
			<h2>Bisnis Daring dan Pemasaran</h2>
			<p>BDP akan diarahkan agar memiliki intuisi bisnis yang kuat serta mampu menerapkan teknologi informasi yang berkembang untuk menunjang bisnis yang digelutinya.</p>
		</div>
	</div>

	
		
</body>
</html>